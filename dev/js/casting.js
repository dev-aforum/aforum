// **************************************************************************** //
// === CASTING ================================================================ //
// ***************************************************************************//

// === DESCRIÇÃO ============================================================== //
// Esse é o Javascript que controla as interações nas galerias de fotos com modal
// do casting da agência. Esse script adciona e retira uma classe com filtro preto
// e branco nas fotos, inicializa a modal, consome os dados das tags data do link
// da modal e adciona a modal. Quando a modal fecha esses dados são excluidos

// OBS: SERIA INTERESSANTE EM OUTRO MOMENTO ADCIONAR REGRAS PARA NÃO INICILIZAR
// O SLICK DE NAVEGAÇÃO SE A TELA FOR MENOR QUE 992px
// ============================================================================ //

// === DOC. READY FN ========================================================== //
// Quando o DOM estiver pronto
$(document).ready(function() {

  // === VARIÁVERIS GLOBAIS =================================================== //
  // Variáveis declaradas no maior escopo do código para garantir utilização
  // por todo o código

  var // medições de layout
      itemWidth,
      itemHeight,
      contentWidth,
      contentHeight,

      // contagens para carrossel
      slidesNumber,
      itemsCount,

      // dados do modelo recuperados com data biding
      photoCount, // numero de fotos no carrosel do modelo
      id, // id do modelo
      category, //categoria do modelo
      name, //nome do modelo
      measure, //medidas do modelo
      jobs;//ids de videos do modelo na api do YouTube
  // ========================================================================== //

  // === MODAL ================================================================ //
  // primeiro inicializamos a modal chamando a função de modal do materializecss
  $(".modal").modal({

    // === FUNÇÃO DE INICIALIZAÇÃO DA MODAL =================================== //
    // Função chamada quando a modal é aberta
    ready: function(){

      $(".loading-animation").removeClass('hide');
      // ==== CRIAÇÃO DOS PLAYERS LAZYLOAD DO YOUTUBE ========================= //
      // Chamada da função - encontrada em youtubeEmbed.js -  que adiciona os
      // comportamentos dos players.

      // carrossel grande
      $(".youtube").each(function(index, el) {
        youtubeEmbed($(this));
      }); //final da iteração pelos

      // carrossel pequenos
      $(".youtube-thumbnail").each(function(index, el) {
        youtubeThumb($(this));
      });
      // ====================================================================== //

      // === INICIALIZAÇÃO DOS CARROSEIS ====================================== //
      // Inicialização dos carrosseis com fotos e jobs do modelo clickado

      // === CARROSSEL PRINCIPAL =============================================== //
      $(".carrossel-principal").slick({
        asNavFor: ".carrossel-nav", // sincronização com o outro slider
        slidesToShow: 1, // número de sliders mostrados
        fade: true, // efeito de fadeIn/fadeOut do slider
        speed:750, // velocidade
        ease:"ease-out", // tipo de animação
        lazyLoad: 'progressive', // carragemento lazyLoad, carrega todas as imagens quando o slider é aberto
        nextArrow: "<div id='slider-next-arrow' class=' slider-arrow col animated slideInRight s1 hide-on-med-and-down'><i class='material-icons large'>chevron_right</i></div> <!-- final da seta de próximo -->", //seta da próximo
        prevArrow: "  <div id='slider-prev-arrow' class='slider-arrow animated slideInLeft col s1 hide-on-med-and-down'><i class='material-icons large'>chevron_left</i></div><!-- final da seta de anterior -->", //seta de anterior
        //mudanças para mobile
        responsive: [
          {
            breakpoint: 992, //ponto de quebra
            settings: {
              dots: true, //adcionamos os pontos para navegação
              fade: false, //tiramos o fade
            }
          },
        ]
      });
      // === CARROSSEL DE NAVEGAÇÃO =========================================== //
      $(".carrossel-nav").slick({

        asNavFor: '.carrossel-principal', //sincronização com carrosel principal
        centerPadding: '20px', // padding que separa as fotos
        slidesToShow: slidesNumber, // numero de slides a mostrar calculado anteriormente
        focusOnSelect: true, // navegação com click
        lazyLoad: 'progressive', // carragemento das imagens com LazyLoad assim quando da criação do carrosel
        centerMode: true, // centralização da foto em foco
        arrows: false, // desligamento das setas
        ease:'ease-out', // tipo de animação
        speed:500, // velocidade de animação
      });

    }, // final da função de inicialização da modal
    // ======================================================================== //

    // === FUNÇÃO DE FECHAMENTO DA MODAL ====================================== //
    // Função chamada quando a modal é fechada
    complete: function(){

      //removemos as medidas do modelo e removemos o nome do modelo
      $(".measure, .carousel-title, .casting-modal-profile img").remove();

      // limpamos a div do carrossel e tiramos a classe initialized para
      // pode inicializar a modal de novo
      $(".carrossel-principal, .carrossel-nav").addClass('transparent').empty().removeClass('slick-initialized slick-slider');

    }, // final da função de fechamento da modal
    // ======================================================================== //
  }); //final da função de modal
  // ========================================================================== //

  // === GALERIA DE FOTOS ===================================================== //
  // Galeria de fotos dos modelos com troca de cor no hover e link para modal
  // com medidas, fotos e vídeos de trabalos
  $(".casting_link").each(function(index, el) { // para cada link

    // === HOVER DOS ITEMS ==================================================== //
    // Quando o mouse entra removemos a classe com o filtro preto e branco de cada
    // item da galeria
    $(this).mouseenter(function(event) {
      $(this).removeClass('bw');
    })
    // quando o mouse sai adcionamos a classe novamente
    .mouseleave(function(event) {
      $(this).addClass('bw');
    });


    // === CLICK DOS ITEMS ==================================================== //
    // Agora vamos controlar o evento de clcik para adcionar os dados indexado
    // pelos atributos de data-binding e concatenalos no HTML correto para depois
    // inicializar a modal
    $(this).click(function(event) { // quando os links são clickados

      event.preventDefault(); // o comportamento padrão é cortado

      // === DATA BIDING ====================================================== /
      // vamos agora guardar os dados do modelos clickado em variaeis
      // contagem de fotos
      photoCount = Number($(this).attr("data-photos")); //número de fotos

      // id do modelo
      id = $(this).attr("data-id"); //o id do modelo

      // categoria do modelo
      category = $(this).attr("data-category"); //categoria do modelo

      // nome do modelo
      name =  "<h2 class='carousel-title animated center-align fadeInDown' style='animation-delay:0.65s;'>" + $(this).attr("data-name")  + "</h2>";//nome do modelo

      //medidas do modelo
      measure = "<div class='measure center-align' ><p class='animated fadeInUp style='animation-delay:0.75s'>" + $(this).attr("data-measure") + "</p></div>";


      // videos de jobs do modelo
      jobs = $(this).attr("data-jobs").split(",");   //ids de videos do modelo na api do YouTube

          if (jobs[0] !== "") {

              itemsCount = photoCount + jobs.length;

          } else {
              itemsCount = photoCount;
          }

      // calculo do numero de miniaturas
      if ( itemsCount <= 5 )  {
        switch (itemsCount) {
          case 1:
            slidesNumber = 1;
            break;
          case 2:
            slidesNumber = 1;
            break;

          case 3:
            slidesNumber = 1;
            break;

          case 4:
            slidesNumber = 3;
            break;

          case 5:
            slidesNumber = 3;
            break;

          default:

        }
      } else {

        slidesNumber = 5;
      }


      // final do data biding
      // ====================================================================== //


      // === CARROSEL ========================================================= //
      // Aqui criamos o html do CARROSEL em loops separados entre as imagens e
      // os jobs em vídep

      //inicializamos a variável do carousel
      var carouselImg = "";

      // para cada uma das fotos do photoCount concatenamos a variavél do carousel
      // com uma string de item do carousel
      for (var i = 0; i < photoCount; i++) {
        carouselImg += "<div class=''>" +
                        "<img class='slider-img transparent' data-lazy='img/" + category  + "/" + id + "/" + (i+1) + ".jpg'>" +
                       "</div>";
      } // final do for

      // criamos o markup dos jobs
      var carouselNav = "";
      var modalCaro = "";

      if ( jobs.length > 1 ) { // hack para estrutura do array porque o consumo
                              //dos dados não tem verificação e então quando
                              // não há jobs ele renderizaria um player sem vídeo
        $(jobs).each(function(index,value){

          // carrossel real
          modalCaro += "<div class='yt-slider-container-wrap transparent'>" +
                        "<div class='yt-slider-container' style=''>" +
                          "<div class='yt-container' style='opacity:1'>" +
                            "<div class='youtube' data-embed='" + jobs[index] + "'>" +
                              "<div class='play-button'></div>" +
                            "</div>" +
                          "</div>" +
                        "</div>" +
                      "</div>";

          // // carrossel de navegação (os jobs são apenas fotos)
          carouselNav += "<div class='yt-slider-container-wrap transparent'>" +
                              "<div class='yt-slider-container yt-slider-nav-container' style=''>" +
                                "<div class='yt-container' style='opacity:1'>" +
                                  "<div class='youtube-thumbnail' data-embed='" + jobs[index] + "'>" +
                                    "<div class='play-button'></div>" +
                                  "</div>" +
                                "</div>" +
                              "</div>" +
                            "</div>";
        });
      }
      // final da criação dos carroseis
      // =====================================================================  //

      // === ADCIONANDO AS INFORMAÇÕES A MODAL ================================ //
      // Agora adcionamos as informações que colhemos e manipulamos dentro da modal
      // com funções do jquery

      // adcionamos o título ao div de conteúdo da modal
      $(".modal-content").prepend(name);

      // adcionamos o carossel a sua div
      $(".carrossel-principal").append(
        carouselImg + modalCaro
      );

      // adcionamos o carrossel de navegação em sua div
      $(".carrossel-nav").append(
        carouselImg + carouselNav
      );

      // adcionamos a foto do perfil
      $(".casting-modal-profile").append(
        "<img src='img/" + category + "/" + id + ".jpg'class='responsive-img animated fadeIn' style='animation-delay:0.5s;'>"
      );

      // adcinamos as mediadas
      $(".casting-modal-profile").append(measure);
    //========================================================================= //


      // === ABERTURA DA MODAL ================================================ //
      // Chamada para o método open da modal já com o conteúdo incluso
      $(".modal").modal("open"); // abrir modal
      // ====================================================================== //

    }); // Final da função ligada ao click de cada iten da galeria de modelos
    // ======================================================================== //


    // === FUNÇÃO DE POSICIONAMENTO DO carrossel PRINCIPAL =================== //
    // Redefine variaveis de tamanho do slide, colhe o tamanho das fotos e
    // compara os valores. Fotos  retrato recebem um classe e são
    // centralizdas horizontalmente. Fotos em paisagem e players recebem outra e são
    // centralizadas verticalmente.
    $(".carrossel-principal").on("lazyLoaded", function(slick){

      // agora vamos realizar cálculos para posicionar os itens do carrossel
      itemWidth = $(".carrossel-principal .slick-slide", modal).width();//a largura de cada item do carrossel
      itemHeight = $(".carrossel-principal .slick-slide", modal).height(); //a altura de cada item do carrossel

      // === POSICIONAMENTO DAS IMAGENS ======================================= /
      $(".carrossel-principal .slider-img", $(modal)).each(function(index){

        // guardamos a largura da imagem em uma variável
        contentWidth = $(this).width();
        contentHeight = $(this).height();

        //  === IMAGENS RETRATO =============================================== /
        // Se a imagem tiver a altura maior que a largura, ou seja, tiver
        // orietação retrato ela recebe uma classe e é centralizada horizontalmente
        if ( contentHeight > contentWidth ) {

          // adcionamos o css de retrato, que basicamente, é 95% da altura,
          // largura automatica e vazando um pouco pra cima
          $(this).addClass('carousel-img-portrait');

          //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrose
          $(this).css({"margin-left" : ( itemWidth - contentWidth ) / 2 });

          //atualizamos as variaveis de tamanho para o tamanho atual da imagem, ocupando todo o slider
          contentWidth = $(this).width();
          contentHeight = $(this).height();
        }//final do if das imagens retrato
        // ================================================================== //

        // === IMAGENS PAISAGEM ============================================= //
        // Se a imagem tiver a largura maior que a altura , ou seja, tiver
        // orietação retrato ela recebe uma classe e é centralizada verticalmente
        else if (
          // se a largura da imagem for maior que a altura, ou seja,
          // a imagem tiver orietação paisagem, e se a tela for menor que 992px,
          // ou seja, for de um dispositivo móvel
          contentWidth > contentHeight
        ) {
          // centralizamos a imagem verticalmente
          $(this).css({"margin-top" : ( itemHeight - contentHeight )/2 }).addClass('carousel-img-landscape');

          //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrose
          $(this).css({"margin-left" : ( itemWidth - contentWidth ) / 2 });

        } //final do else if das imagens paisagem
        //===================================================================== //
      }); //final da função each das imagens do carrossel
      // ==================================================================== //
    }); // final da função de posicionamento do carrossel principal
    // ====================================================================== //

    // === FUNÇÃO DE POSICIONAMENTO DAS FOTOS DO CARROSEL DE NAVEGAÇÃO ====== //
    // Redefine variaveis de tamanho do slide, colhe o tamanho das fotos e
    // compara os valores. Fotos  retrato recebem um classe e são
    // centralizdas horizontalmente. Fotos em paisagem e players recebem outra e são
    // centralizadas verticalmente.
    $(".carrossel-nav").on("lazyLoaded", function(slick){


    //agora vamos realizar cálculos para posicionar os itens do carrossel
    itemWidth = $(".carrossel-nav .slick-slide", modal).width(); //a largura de cada item do carrossel
    itemHeight = $(".carrossel-nav .slick-slide", modal).height(); //a altura de cada item do carrossel

    // === POSICIONAMENTO DAS IMAGENS DA NAVEGAÇÃO =============== //
      // Iteração pelas imagen do carrossel de navegação que colhe
      // a altura da imagem, compara com a altura dos slides desse carrossel e
      // centraliza o player verticalmente
      $(".carrossel-nav .slider-img", $(modal)).each(function(index){

        // Guardamos largura e altura de uma imagem das imagens da modal
         contentWidth = $(this).width(); // largura da imagem
        contentHeight = $(this).height(); // altura da imagem

        // === IMAGENS RETRATO ============================================== //
        // Se a imagem tiver a altura maior que a largura, ou seja, tiver
        // orietação retrato ela recebe uma classe e é centralizada horizontalmente
        if ( contentHeight > contentWidth ) {
          // adcionamos o css de retrato, que basicamente, é 95% da altura,
          // largura automatica e vazando um pouco pra cima
          $(this).addClass('carousel-img-portrait');
          //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrose
          $(this).css({"margin-left" : ( itemWidth - contentWidth ) / 2 });
        } //final do if das imagens retrato
        // ================================================================== //

        // === IMAGENS PAISAGEM ============================================= //
        // Se a imagem tiver a largura maior que a altura , ou seja, tiver
        // orietação retrato ela recebe uma classe e é centralizada verticalmente
         else if (
          // se a largura da imagem for maior que a altura, ou seja,
          // a imagem tiver orietação paisagem, e se a tela for menor que 992px,
          // ou seja, for de um dispositivo móvel
          contentWidth > contentHeight && windowWidth < 992 && contentWidth > 0
        ) {
          // centralizamos a imagem verticalmente
          $(this).css({"margin-top" : ( itemHeight - contentHeight )/ 2 });
        } //final do else if das imagens paisagem
        //=================================================================== //

      }); //final da função each das imagens do carrossel de navegação
      // ==================================================================== //

      // === POSICIONAMENTO DOS PLAYERS DE VIDEO DA NAVEGAÇÃO =============== //
      // Iteração pelos players de video do carrossel de navegação que colhe
      // a altura do player, compara com a altura dos slides desse carrossel e
      // centraliza o player verticalmente
      $(".carrossel-nav .yt-slider-nav-container").each(function(index, el) {
        contentHeight = $(this).height(); // colhemos a altura do player
        $(this).css({
          "margin-top" : ( itemHeight - contentHeight )/ 2 // comparamos com o valor
                                                          // do slider e centralizamos
                                                          // com uma margem superiror
        });//final do método css para cada player de vídeo
      }); // final da função que posiciona os players de vídeo do carrossel de navegação
      // ==================================================================== //


      // === MOSTRANDO OS CARROSEIS ========================================= //
      // Já com as fotos posicionadas, adcionamos a classe de fadeIn do animate.css
      // e removemos a classe de transparência para que os carroseis sejam renderizados
      $(".carrossel-nav, .carrossel-principal") // nos sliders
        .addClass('fadeIn') // adcionamos o fadeIn
        .removeClass('transparent'); //removemos a transparência

        setTimeout(function(){
          $(".loading-animation").addClass('hide');
        },2000);
      // ==================================================================== //

    }); // Final da função ligada ao carregamento do carrossel de navegação
    // ====================================================================== //


    // === CLICK MODAL CLOSE ================================================ //
    // Função que ligada ao click do botão que chama o metodo de fechar a modal
    $(".modal-close").click(function(event) {
      $(".modal").modal("close"); // fechar modal
    }); // Final da função ligada ao click do botão de fechar a modal
    // ====================================================================== //

  }); // Final iteração pelos itens da galeria de modelos
  // ========================================================================== //

}); // Final da função document ready
// =========================================

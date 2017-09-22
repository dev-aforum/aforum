$(document).ready(function() {



  // CASTING

  // Esse é o Javascript que controla as interações nas galerias de fotos com modal
  // do casting da agência. Esse script adciona e retira uma classe com filtro preto
  // e branco nas fotos, inicializa a modal, consome os dados das tags data do link
  // da modal e adciona a modal. Quando a modal fecha esses dados são excluidos


  // variaveis globais
  var itemsCount;

  // MODAL
  // primeiro inicializamos a modal chamando a função de modal do materializecss

  // console.log("Primeiro, inicializamos a modal e alguns comportamentos");
 $(".modal").modal({

    //quando a modal abre chamamaos as funções para criar os embeds do youtube com Lazyload
    ready: function(){

      // $(".modal-caro").resize();
      // console.log("Para cada trabalho criar um player Lazyload do youtube");
      // embed verdadeiro
      $(".youtube").each(function(index, el) {
        youtubeEmbed($(this));
      });

      // console.log("Para cada trabalho criar thumbnail do vídeo");
      //thumbnails no carrosel de navegação por miniaturas
      $(".youtube-thumbnail").each(function(index, el) {
        youtubeThumb($(this));
      });


        $(".modal-caro")
        .slick({
          asNavFor: ".modal-caro-nav",
          slidesToShow: 1,
          fade: true,
          speed:750,
          ease:"ease-out",
          lazyLoad: 'progressive',
          nextArrow: "<div id='slider-next-arrow' class=' slider-arrow col animated slideInRight s1 hide-on-med-and-down'><i class='material-icons large'>chevron_right</i></div> <!-- final da seta de próximo -->",
          prevArrow: "  <div id='slider-prev-arrow' class='slider-arrow animated slideInLeft col s1 hide-on-med-and-down'><i class='material-icons large'>chevron_left</i></div><!-- final da seta de anterior -->",
          responsive: [
            {
              breakpoint: 992,
              settings: {
                dots: true,
                fade: false,
              }
            },
          ]
        });

        // carrosel de navegação
        $(".modal-caro-nav").slick({
          asNavFor: '.modal-caro',
          centerPadding: '20px',
          slidesToShow: slidesNumber,
          focusOnSelect: true,
          lazyLoad: 'progressive',
          centerMode: true,
          arrows: false,
          ease:'ease-out',
          speed:500,
        });
      //adcionamos a altura calculada e inicializamos o carrosel
      // setTimeout(function(){
      // carrosel real

    },

   // excluimos o conteudo e escondemos o botão de fechar a modal
    complete: function(){

      //removemos as medidas do modelo e removemos o nome do modelo
      $(".measure, .carousel-title, .casting-modal-profile img").remove();
      // limpamos a div do carrosel e tiramos a classe initialized para
      // pode inicializar a modal de novo
      $(".modal-caro, .modal-caro-nav").addClass('transparent').empty().removeClass('slick-initialized slick-slider');

      // console.log("modal fechada");
    }
  });//final da função de modal

  // console.log(".modal");
  //
  // console.log("para cada link vamos criar um comportamentos");
  //agora vamos controlar comportamentos para os links da modal
  $(".casting_link").each(function(index, el) { // para cada link

    // console.log("adcionamos comportamentos de hover");
    // HOVER
    // quando o mouse entra removemos a classe com o filtro preto e branco
    $(this).mouseenter(function(event) {
      $(this).removeClass('bw');
      // console.log("mouse passou por cima");

    })
    // quando o mouse sai adcionamos a classe novamente
    .mouseleave(function(event) {
      $(this).addClass('bw');
      // console.log("mouse saiu do item");
    });

    // CLICK
    // agora vamos controlar o evento de clcik para adcionar os dados, inicializar
    // o carousel e mostrar os elementos com animações do animate.css
    // console.log("adcionamos comportamentos click");
    $(this).click(function(event) { // quando os links são clickados

      event.preventDefault(); // o comportamento padrão é cortado

      // console.log("Primeiro colhemos os valores de data-binding do item");
      // vamos agora guardar os dados do modelos clickado em uma variável
      var photoCount = Number($(this).attr("data-photos")), //número de fotos
          id = $(this).attr("data-id"), //o id do modelo
          category = $(this).attr("data-category"), //categoria do modelo
          name = $(this).attr("data-name"), //nome do modelo
          measure = $(this).attr("data-measure"), //medidas do modelo
          jobs = $(this).attr("data-jobs").split(",");   //ids de videos do modelo na api do YouTube

          if (jobs[0] !== "") {

              itemsCount = photoCount + jobs.length;

          } else {
              itemsCount = photoCount;
          }

      // redefinimos a variavel de nome concatenando-a com string de html
      name = "<h2 class='carousel-title animated  fadeInDown' style='animation-delay:0.65s'>" + name + "</h2>";

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

          // carrosel real
          modalCaro += "<div class='yt-slider-container-wrap transparent'>" +
                        "<div class='yt-slider-container' style=''>" +
                          "<div class='yt-container' style='opacity:1'>" +
                            "<div class='youtube' data-embed='" + jobs[index] + "'>" +
                              "<div class='play-button'></div>" +
                            "</div>" +
                          "</div>" +
                        "</div>" +
                      "</div>";

          // // carrosel de navegação (os jobs são apenas fotos)
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

      // redefinimos a variável de medidas com a string html da medida
      measure = "<div class='measure'><h4>Medidas</h4><p class='animated fadeInUp style='animation-delay:0.75s'>" + measure + "</p></div>";

      // adcionamos o título ao div de conteúdo da modal
      $(".modal-content").prepend(name);

      // adcionamos o carossel a sua div
      $(".modal-caro").append(
        carouselImg + modalCaro
      );

      // adcionamos o carrosel de navegação em sua div
      $(".modal-caro-nav").append(
        carouselImg + carouselNav
      );

      // adcionamos a foto do perfil
      $(".casting-modal-profile").append(
        "<img src='img/" + category + "/" + id + ".jpg'class='responsive-img animated fadeIn' style='animation-delay:0.5s;'>"
      );

      // var slidesNumber = 0;
      // calculo do numero de miniaturas
      if ( itemsCount <= 5 )  {
        // slidesNumber = photoCount - 1;
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
          // slidesNumber = 1;

        }
      } else {

        slidesNumber = 5;
      }

      $(".casting-modal-profile").append(measure);

      $(".modal-caro").on("lazyLoaded", function(slick){

        // agora vamos realizar cálculos para posicionar os itens do carrossel
        var itemWidth = $(".modal-caro .slick-slide", modal).width(),//a largura de cada item do carrossel
            itemHeight = $(".modal-caro .slick-slide", modal).height(); //a altura de cada item do carrossel


        $(".modal-caro .slider-img", $(modal)).each(function(index){

          // guardamos a largura da imagem em uma variável
          var imgWidth = $(this).width(),
              imgHeight = $(this).height();

          // se a largura da imagem for maior que zero, ou seja,
          // se a imagem não tiver problemas com a chamada http e
          // já tiver sido renderizada


          // se a imagem tiver a altura maior que a largura, ou seja, tiver orietação retrato
          if ( imgHeight > imgWidth ) {

            // console.log("photo orientation is portrait");
            // adcionamos o css de retrato, que basicamente, é 95% da altura,
            // largura automatica e vazando um pouco pra cima
            $(this).addClass('carousel-img-portrait');

            //atualizamos as variaveis de tamanho para o tamanho atual da imagem, ocupando todo o slider
            imgWidth = $(this).width();
            imgHeight = $(this).height();


          }  else if (
            // se a largura da imagem for maior que a altura, ou seja,
            // a imagem tiver orietação paisagem, e se a tela for menor que 992px,
            // ou seja, for de um dispositivo móvel
            imgWidth > imgHeight && windowWidth < 992 && imgWidth > 0
          ) {

            // console.log("photo orientation is landscape");
            // centralizamos a imagem verticalmente
            $(this).css({"margin-top" : ( itemHeight - imgHeight )/2 }).addClass('carousel-img-landscape');
          }

          if ( imgWidth > 0 ) {
            $(this).css({"margin-left" : ( itemWidth - imgWidth ) / 2 }); //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrosel
          }

        }); //final da função each das imagens do carrosel


      });

      $(".modal-caro-nav").on("lazyLoaded", function(slick){
      //agora vamos realizar cálculos para posicionar os itens do carrossel
      itemWidth = $(".modal-caro-nav .slick-slide", modal).width(); //a largura de cada item do carrossel
      itemHeight = $(".modal-caro-nav .slick-slide", modal).height(); //a altura de cada item do carrossel

      // console.log("modal aberta");


      $(".modal-caro-nav .slider-img, .modal-caro-nav .yt-slider-nav-container", $(modal)).each(function(index){

        // guardamos a largura da imagem em uma variável
        var imgWidth = $(this).width(),
            imgHeight = $(this).height();

        // se a largura da imagem for maior que zero, ou seja,
        // se a imagem não tiver problemas com a chamada http e
        // já tiver sido renderizada

        // se a imagem tiver a altura maior que a largura, ou seja, tiver orietação retrato
        if ( imgHeight > imgWidth ) {

          // console.log("photo orientation is portrait");
          // adcionamos o css de retrato, que basicamente, é 95% da altura,
          // largura automatica e vazando um pouco pra cima
          $(this).addClass('carousel-img-portrait');

          //atualizamos as variaveis de tamanho para o tamanho atual da imagem, ocupando todo o slider
          imgWidth = $(this).width();
          imgHeight = $(this).height();


        }  else if (
          // se a largura da imagem for maior que a altura, ou seja,
          // a imagem tiver orietação paisagem, e se a tela for menor que 992px,
          // ou seja, for de um dispositivo móvel
          imgWidth > imgHeight && windowWidth < 992 && imgWidth > 0
        ) {

          // console.log("photo orientation is landscape");
          // centralizamos a imagem verticalmente
          $(this).css({"top" : ( itemHeight - imgHeight )/ 2 }).addClass('carousel-img-landscape');
        }

        if ( imgWidth > 0 ) {
          $(this).css({"margin-left" : ( itemWidth - imgWidth ) / 2 }); //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrosel
        }

      }); //final da função each das imagens do carrosel

        $(".modal-caro-nav, .modal-caro").addClass('fadeIn').removeClass('transparent');


    });

      //abrimos a modal
      $(".modal").modal("open");

      //sincronizamos o comportamento do botão de fechamento com a modal
      $(".modal-close").click(function(event) {
        // $(this).addClass('hide');
        $(".modal").modal("close");
      });
    });
  });
});

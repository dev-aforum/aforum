$(document).ready(function() {

  // CASTING

  // Esse é o Javascript que controla as interações nas galerias de fotos com modal
  // do casting da agência. Esse script adciona e retira uma classe com filtro preto
  // e branco nas fotos, inicializa a modal, consome os dados das tags data do link
  // da modal e adciona a modal. Quando a modal fecha esses dados são excluidos


  // MODAL
  // primeiro inicializamos a modal chamando a função de modal do materializecss
  $(".modal").modal({
      // passamos como argumento uma função anonima chamada quando a modal é fechada
     complete: function(){

      //escondemos o botão de fechar a modal-close
      $(".modal-close").addClass('hide');

      //removemos as medidas do modelo e removemos o nome do modelo
      $(".measure, .carousel-title").remove();

      // limpamos a div do carrosel e tiramos a classe initialized para
      // pode inicializar a modal de novo
      $(".modal-caro").empty().removeClass('initialized animated fadeIn');
    }
  });//final da função de modal


  //agora vamos controlar comportamentos para os links da modal
  $(".casting_link").each(function(index, el) { // para cada link

    // HOVER
    // quando o mouse entra removemos a classe com o filtro preto e branco
    $(this).mouseenter(function(event) {
      $(this).removeClass('bw');
    })
    // quando o mouse sai adcionamos a classe novamente
    .mouseleave(function(event) {
      $(this).addClass('bw');
    });

    // CLICK
    // agora vamos controlar o evento de clcik para adcionar os dados, inicializar
    // o carousel e mostrar os elementos com animações do animate.css
    $(this).click(function(event) { // quando os links são clickados

      event.preventDefault(); // o comportamento padrão é cortado

      // vamos agora guardar os dados do modelos clickado em uma variável
      var photoCount = $(this).attr("data-photos"), //número de fotos
          id = $(this).attr("data-id"), //o id do modelo
          category = $(this).attr("data-category"), //categoria do modelo
          name = $(this).attr("data-name"), //nome do modelo
          measure = $(this).attr("data-measure"); //medidas do modelo

      // redefinimos a variavel de nome concatenando-a com string de html
      name = "<h2 class='carousel-title animated fadeIn'>" + name + "</h2>";

      //inicializamos a variável do carousel
      var carousel = "";

      // para cada uma das fotos do photoCount concatenamos a variavél do carousel
      // com uma string de item do carousel
      for (var i = 0; i < photoCount; i++) {
        carousel +=
        "<div class='carousel-item'>" +
        "<img src='img/" + category  + "/" + id + "/" + (i+1) + ".jpg'>" +
        "</div>";
      } // final do for

      // redefinimos a variável de medidas com a string html da medida
      measure = "<div><p class='measure'>" + measure + "</p></div>";

      // adcionamos o título ao div de conteúdo da modal
      $(".modal-content").prepend(name);

      // adcionamos o carossel a sua div
      $(".modal-caro").append(
        carousel
      );

      //abrimos a modal
      $(".modal").modal("open");

      // mostramos o botão de fechar a modal
      $(".modal-close").removeClass('hide');


      //agora vamos realizar alguns calculos para o layout

      // dividimos a altura da modal por 5
      var modalPer5 = $(modal).height()/5;
      // a altura do carousel é 2/5 da modal
      var carouselHeight = modalPer5*2;
      // guradamos a largura da window
      var windowWidth = $(window).width();
      // se a tela é redimensinada redefinimos a variável a variável
      $(window).resize(function(event) {
        windowWidth = $(window).width();
      });

      // definimos a altura do div do carrossel com o método css, inicializamos
      // o carrossel e o escondemos
      $(".modal-caro")
      .css({"height":carouselHeight})
      .carousel({
        indicators: true,
        dist: -100,
      }).css({"opacity":"0"});

      // agora vamos realizar cálculos para posicionar os itens do carrossel
      var itemWidth = $(".carousel-item", modal).width(), //a largura de cada item do carrossel
          itemHeight = $(".carousel-item").height(); //a altura de cada item do carrossel

      // para garantir  a sincronia do código
      setTimeout(function () {

        // para cada uma das imagens na modal
        $("img", $(modal)).each(function(index){

          // guardamos a largura da imagem em uma variável
          var imgWidth = $(this).width(),
              imgHeight = $(this).height();

          // se a largura da imagem for maior que zero, ou seja,
          // se a imagem não tiver problemas com a chamada http e
          // já tiver sido renderizada
          if ( imgWidth > 0 ) {
            $(this).css({"left" : ( itemWidth - imgWidth ) / 2 }); //centralizamos a imagem colocando como posição à esquerda como metada da largura do item do carrosel
          }

          // se a imagem tiver a altura maior que a largura, ou seja, tiver orietação retrato
          if ( imgHeight > imgWidth ) {

            // console.log("photo orientation is portrait");

            // adcionamos o css de retrato, que basicamente, é 95% da altura,
            // largura automatica e vazando um pouco pra cima
            $(this).addClass('carousel-img-portrait');

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

        }); //final da função each das imagens do carrosel

        //esperamos mais meio segundo para garantir que o carrosel está pronto,
        // adcionamos as classes de animação ao carrossel e mostramos o carrossel
        setTimeout(function(){
          $(".modal-caro").addClass('animated fadeIn').fadeIn();
        },500);
        // adcinamos as medidas ao fim da modal
         $(".modal-content .row").append(measure);
      },500);

      //adcionamos o comportamento de navegação as setas de navedação
      $("#slider-next-arrow").click(function(event) {
        $(".modal-caro").carousel("next");
      });
      $("#slider-prev-arrow").click(function(event) {
        $(".modal-caro").carousel("prev");
      });
    });
    //sincronizamos o comportamento do botão de fechamento com a modal
    $(".modal-close").click(function(event) {
      $(this).addClass('hide');
      $(".modal").modal("close");
    });
  });




});

$(document).ready(function(){
  // === MISSÃO, VISÃO, VALORES =============================================== //
  // === INICIALIZAÇÃO DAS TABS =============================================== //
  // Inicilizamos as tabs do plugin de tabs do materializecss
  // (http://materializecss.com/tabs.html ) com a opção de arrastar (touch)
  $(".institucional ul.tabs").tabs({
    swipeable: true, //opção de arrastar
  }); //final da inicização das tabs
  // ========================================================================== //
  // ========================================================================== //

  // === GALERIA DE IMAGEM ==================================================== //
  // === CARROSEL DE FOTOS DA ESTRUTURA ======================================= //
  // Carrosel do plugin jquery slick ( http://kenwheeler.github.io/slick/ )
  // tem seus comportamentos padrão desligados e a navegação feita pelas miniaturas
  // em telas maiores que 992px e um comportamento normal de slider

  // === SLICK CARROSEL ======================================================= //
  // Inicialização do carrosel
  $(".carrossel-estrutura").slick({
    // === CONFIGURAÇÕES PADRÃO =============================================== //
    arrows:false, // removemos as setas
    adaptiveHeight: true,
    // speed: 500,
    slidesToShow: 1,
    slidesToScroll:1,
    dots:false, // removemos os pontos
    fade:true, //adiconamos o efeito de fade
    // lazyLoad: 'progressive', // definimos que imagens que não são a primeira serão
                            // carregadas quando o carrosel for iniciado
    draggable: false, // cortamos a navegação arrastando (touch)
    // ======================================================================== //
    // === CONFIGURAÇÕES MOBILE ==============================================  //
    responsive: [
      {
        breakpoint: 992, //ponto de quebra
        // configurações mobile
        settings: {
          dots: true, // adcionamos os pontos para navegação
          fade: false, // tiramos o fade
          draggable: true, // adcionamos o comportamento de navegação arrastando
        }  // final do objeto de configuração
      }, // final do objeto dentro do array de configurações responsivas
    ] // final das configurações mobile
    // ======================================================================== //
  });// final da inicialização do slick
  // ========================================================================== //

  // === NAVEGAÇÃO POR MINITURAS ============================================== //
  // Para cada um dos itens da miniatura nos adiconamos um função ao evento de click
  // que foca o carrosel no item com index correspondente ao da minitura na matriz
  // de miniaturas da classe .image-gallery-item dentro do DOM através do método
  // slickGoTo() do slick carrosel
  $(".imagem-miniatura-navegacao").each(function(index, el) {
    $(this).click(function(event){
      // paramos o evento padrão
      event.preventDefault();
      $(".carrossel-estrutura").slick("slickGoTo", index ); // mudança do item
                                                            // em foco no carrosel
                                                            // em função index da
                                                            // miniatura
    }); // final da função ligada ao click das miniaturas
  }); // final da iteração pelas miniaturas
  // ========================================================================== //


  // // === MATERIALBOX =============================================== //
  //  Adciona o compormaneto de material box do plugin material box
  // (http://materializecss.com/media.html) do materializecss  para o item em
  // destaque após adcionar a classe em que ela depende. Isso faz com que
  // possamos clicar e abrir a imagem em uma modal se a tela for maior que 992px

  if( windowWidth > 992 ){
    $(".institucional .carrossel-estrutura-item img").addClass('materialboxed').materialbox();
  } //final do if
  // ========================================================================== //

  // ========================================================================== //

  // === OPINIÃO DE QUEM É FORUM ============================================== //
  // Modal chamada quando um dos itens da galeria é clickado. É adicionado um iframe
  // lazyLoad com o código do vídeo. Quando ela é fechada a div de conteúdo é esvaziada

  // === MODAL ================================================================ //
  $("#modal-depoimentos").modal({
    // === FUNÇÃO DE FECHAMENTO DA MODAL ====================================== //
    // Quando a modal é fechada a div de conteúdo é esvaziada
    complete:function(){
      $(".modal-content").empty();
    }// findal da função lançada quando a modal é fechada
  }); // Final da modal
  // ========================================================================== //

  // === ITENS DA GALERIA ===================================================== //

  $(".galeria-depoimentos-item").each(function(index) {
    // === CLICK DOS ITENS DA GALERIA ========================================= //
    // Quando os itens são clickados é adicionado a modal o markup do iframe
    // lazyLoad com os dados do vídeo e o nome do modelo, é criado o iframe e
    // a modal é aberta
    $(this).click(function(event) {
      /* Act on the event */
      event.preventDefault();

      // adcionamos o html do player com o nome do modelo e o código do vídeo
      $(".modal-content").append(
        '<h2 class="animated fadeInDown white-text center-align">' + $(this).attr("data-name") + '</h2>' +
        ' <div class="yt-container-wrapper">' +
          '<div class="yt-container animated">'+
            '<div class="youtube" data-embed="' + $(this).attr("data-embed") + '">'+
             ' <div class="play-button"></div>'+
            '</div>'+
          '</div>'+
        '</div>'
      );

      // Criamos o player de vídeo
      youtubeEmbed($(".youtube"));

      // Abrimos a modal
      $("#modal-depoimentos").modal("open");

    }); // final do click
    // ======================================================================== //
  }); // final da iteração pelos items da galeria de depoimentos
  // ========================================================================== //

  // === PARCEIROS ============================================================ //
  // Carrossel em autoplay com logos de parceiros
  // === INICIALIZAÇÃO DO CARROSSEL =========================================== //
  $(".carrossel-parceiros").slick({
    slidesToShow:1,
    slidesToScroll:1,
    dots:true,
    autoplay:true,
    autoplaySpeed:750,
  }); // final da função de inicialização do carrossel
  // ========================================================================== //
  // ========================================================================== //

  // === FEEDBACK ============================================================= //
  // Slider com breves depoimentos de celebridades e influenciadores parceiros
  // da Forum Model e Forum School. Pode conter texto e imagem ou ainda um link
  // para vídeo que se abre na modal. Usa o plugin Slider do materializecss com
  // documentação disponível em: http://materializecss.com/media.html

  // === INICIALIZAÇÃO DO SLIDER ============================================== //
  // $('.slider').slider();
  // $(".slider").slider("pause");

  $(".slider-feedback-slide-link").click(function(event) {
    /* Act on the event */
    event.preventDefault();

    $(".modal-content").append(
      '<h2 class="animated fadeInDown white-text center-align">' + $(this).attr("data-name") + '</h2>' +
      ' <div class="yt-container-wrapper">' +
        '<div class="yt-container animated">'+
          '<div class="youtube" data-embed="' + $(this).attr("data-embed") + '">'+
           ' <div class="play-button"></div>'+
          '</div>'+
        '</div>'+
      '</div>'
    );

    // Criamos o player de vídeo
    youtubeEmbed($(".youtube"));

    // Abrimos a modal
    $("#modal-depoimentos").modal("open");


  });
  // ========================================================================== //
  // ========================================================================== //


}); // final da doc ready fn
// ======================================== ==================================== //

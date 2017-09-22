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

$(document).ready(function() {

  var formselect = "#form_inscription_gender";
  var hidden = [ "form_inscription_masc_hidden" , "form_inscription_fem_hidden", "form_inscription_trans_hidden" ];
  formSelectChange(formselect, hidden);

  // método adcional para o validador de campos que cria a regra não igual
  jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != param;
}, "É obrigatório escolher um valor para este campo");

  //image preview 01
  $.uploadPreview({
    input_field: "#form_inscription_imgup1",   // Default: .image-upload
    preview_box: "#form_inscription_imgPreview1",  // Default: .image-preview
    label_field: "#form_upload_button_fakeButton1",    // Default: .image-label
    label_default: "Adcionar foto de rosto",   // Default: Choose File
    label_selected: "Trocar foto de rosto",  // Default: Change File
    no_label: false,                 // Default: false
    success_callback: function(){
    }
  });

  //image preview 01
  $.uploadPreview({
    input_field: "#form_inscription_imgup2",   // Default: .image-upload
    preview_box: "#form_inscription_imgPreview2",  // Default: .image-preview
    label_field: "#form_upload_button_fakeButton2",    // Default: .image-label
    label_default: "Adcionar foto de corpo",   // Default: Choose File
    label_selected: "Trocar foto de corpo",  // Default: Change File
    no_label: false,                 // Default: false
    success_callback: function(){
    }
  });

  // ***MASKS***

  // celphone input mask
  $("#celphone").mask("(99) 9999-9999Z",{
    // make sure z caracter is optional
    translation: {
      "Z": {
        pattern: /[0-9]/,
         optional: true
       },
       "9": {
         pattern: /[0-9]/,
         optional: false
       }
      },
      // make sure that if users inputs wrong data it is cleared
      clearIfNotMatch: true,
  });

  // telephone input mask
  $("#telephone").mask("(99) 9999-9999",{
    // make sure that if users inputs wrong data it is cleared
    translation:{
      "9": {
        pattern: /[0-9]/,
        optional: false,
      }
    },
    clearIfNotMatch: true,

  });
  // cep input mask
  $("#cep").mask("99999-999");

  // ***CEP API CALLING***
  function limpa_formulário_cep() {
      // Limpa valores do formulário de cep.
      $("#street").val("");
      $("#hood").val("");
      $("#city").val("");
      $("#state").val("");
  }

  //Quando o campo cep perde o foco.
  $("#cep").blur(function() {

      //Nova variável "cep" somente com dígitos.
      var cep = $(this).val().replace(/\D/g, '');

      //Verifica se campo cep possui valor informado.
      if (cep !== "") {

          //Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          //Valida o formato do CEP.
          if(validacep.test(cep)) {

              //Preenche os campos com "..." enquanto consulta webservice.
              $("#street").val("...");
              $("#hood").val("...");
              $("#city").val("...");
              $("#state").val("...");


              //Consulta o webservice viacep.com.br/
              $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                  if (!("erro" in dados)) {
                      //Atualiza os campos com os valores da consulta.
                      $("#street").val(dados.logradouro);
                      $("[for='street']").addClass("active");
                      $("#hood").val(dados.bairro);
                      $("[for='hood']").addClass("active");
                      $("#city").val(dados.localidade);
                      $("[for='city']").addClass("active");
                      $("#state").val(dados.uf);
                      $("[for='state']").addClass("active");

                  } //end if.
                  else {
                      //CEP pesquisado não foi encontrado.
                      limpa_formulário_cep();
                      alert("CEP não encontrado.");
                  }
              });
          } //end if.
          else {
              //cep é inválido.
              limpa_formulário_cep();
              alert("Formato de CEP inválido.");
          }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
  }); //end of blur function

  //***DATE PICKER***
  // date picker inicialization
  $('#birth').pickadate({
    // translation
    monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ag', 'Set', 'Out', 'Nov', 'Dez'],
    weekdaysFull: ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'],
    weekdaysShort: ['Dom', 'Seg', 'Ter', 'Quar', 'Qui', 'Sex', 'Sáb'],
    today: 'Hoje',
    clear: 'Limpar',
    close: 'Fechar',
    formatSubmit: 'yyyy/mm/dd',
    closeOnSelect: true, // Close upon selecting a date
    // hiddenName: true,
    hiddenPrefix:'real_', // create a hidden input to create a timestamp version of date
    // ui
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 200, // Creates a dropdown of 15 years to control year

    // when users sets a date, conditional inputs
    onSet:function(){ //when user sets age
      //get value of age picker
      var birth = $("[name='real_birth_submit']").val();
      // console.log(birth);

      var age = getAge(birth);
      // colocamos o valor da idade no campo de idade
      $("[name='age']").attr("value", age);

      console.log(isMinor(birth, 18));
      //if user is minor
      if(isMinor(birth, 18)){

        //show inputs of tutors
        $("#tutorName-field").removeClass('hide'); //show tutorName input
        // $("#tutorRg-field").removeClass('hide'); //show tutorRg input

      } else { //if not

        //if input is not hidden, hide
        // if($("#tutorName-field").hasClass('hide')!==true){ //name
          $("#tutorName-field").addClass('hide');
        // }

      } //end of else

      $(".datepicker ").addClass('valid').removeClass('invalid error');

      $("#birth-error").hide();
    }// end of  onSet Funtion


  }); //end of pickadate

  $("#age").click(function(event) {
    /* Act on the event */
    event.preventDefault();

    $("#birth").trigger('click');
  });

// ***SELECT***
 $('#form_inscription_gender').material_select();


//  ***SUBMIT AND VALIDATION***
   //adding classes to make jquery validation match materialize validation css
  //  $("input").change(function(){
  //    $("input.error").blur(function(){
  //      $("input[aria-invalid='false']").removeClass("invalid").addClass("valid");
  //    });
  //  });

  //  on click submit
   $("#sejaForumSubmit").on('click',function(){
     // tornar o file upload visivel para poder validar
     $(".form_upload").css({"display":"block","opacity":"0"});
   });//end of on click


   //declaramos variáveis fora do submitHandler para ganhar performance


   $("#form_inscription").validate({

     debug:true,

     // especificamos quais as regras
     rules:{
       photo_1: {
         required:true,
       }, //foto de corpo: obrigatório
       // photo_2: "required",//foto de rosto: obrigatório
       user_name: {
         required: true,
         minlength: 2,
       }, //nome: obrigatório, tamanho minimo 2
       email: { //email
         required: true, //obrigatório
         email: true //deve estar formatado como email, nesse caso, com textos entre um arroba
       },
       telephone: { //telefone: obrigatório
         required: true,
       },
       celphone: {
         required:true,
       }, //celular: obrigatório
       // cep: "required",
       // state: {required:true, notEqual:"Estado"}, //estado: obrigatório
       // city: "required", //cidade: obrigatório
       // adress: "required", //endereço: obrigatório
       birth: {
         required:true
       }, //idade: obrigatório
       tutorName:"required",
       // tutorId:"required",
       // ID: "required", //RG: obrigatório
       gender: {
         required:true,
         notEqual:"Gênero*"
       }, //genero: obrigatório
       // height: "required",
       // torax: "required",
       // manequim: "required",
       // suit: "required",
       // shirt: "required",
       // shoe: "required",
       // eyeColor: "required",
       // hair: "required",
       // waist: "required",
       // hips: "required",

       //as opção escolhida tem sua regra de obritaroriedade incluida direto no html pela função lookInputNumberAndChangeWithValidation

     },

     //especificamos as mensgens a serem mostradas se o valor enviado não bater com a regra
     messages: {
       photo_1: "Um modelo precisa ser visto. A foto de rosto é obrigatória",
       // photo_2: "Um modelo precisa ser visto. A foto de corpo é obrigatória",
       user_name: "Não esqueça de inserir seu nome",
       email: "O email que você inseriu não é valido",
       telephone: "O telefone é obrigatório",
       celphone: "Incluir o número de celular é obrigatório",
       // state: "Selecionar o seu Estado é obrigatório",
       // city: "Inserir sua cidade é obrigatório",
       // adress: "Inserir seu endereço é obrigatório",
       birth: "Selecionar sua data de nascimento é obrigatório",
       tutorName: "Inserir o nome do responsável é obrigatório",
       // tutorId: "Inserir o RG do responsável é obrigatório",
       // ID: "Inserir seu RG é obrigatório",
       gender: "Precisamos que você selecione um gênero para concluir o cadastro",
       // height: "Inserir sua altura é obrigatório",
       // torax: "Inserir o tamanho do seu torax é obrigatório",
       // manequim: "Inserir o tamanho do seu manequim é obrigatório",
       // suit: "Inserir o tamanho do seu terno é obrigatório",
       // shirt: "Inserir o tamanho da sua camisa é obrigatório",
       // shoe: "Inserir o tamanho do seu sapato é obrigatório",
       // eyeColor: "Inserir a cor de seus olhos é obrigatório",
       // hair: "Inserir a cor dos seus olhos é obrigatório",
     },

     //definimos o comporamento ao enviar
     submitHandler:function(form){
       var data = new FormData($("#form_inscription")[0]);
       var url = 'https://intranet.aforum.com.br/cadastroScouterSeletiva/';
       var name = Cookies.get("name");

       if( name === $("[name='user_name']").val() ){
         alert("O cadastro de " + $("[name='user_name']").val() + " já foi realizado" );
       } else {
        var xhr =  $.ajax({
            type: "POST",
            url: url,
            processData: false,
            contentType: false,
            data: data,
            async: false,
            dataType: 'json',
             success: function (data) {
               console.log(data);
               if (data.sucesso != 0){
                 alert("Ocorreu um erro no envio dos dados, tente novamente mais tarde");
               } else {
                 alert("Cadastro efetuado com sucesso");
                 Cookies.set( "name" , $("[name='user_name']").val() );
                 location = "sucesso.php";
               }
             },
             error: function(){
               alert("Ocorreu um erro no envio dos dados, tente novamente mais tarde");
             }
           });
           console.log(xhr);
         }
       }
     });//final da função validate


   //
  //  $(".select-dropdown").blur(function(){
  //    console.log("BLUR");
  //    console.log($("li.active.selected"));
   //
  //    if ( $(".select-dropdown").val() !== "Gênero*" ){
  //      $(".select-dropdown").removeClass("error invalid");
  //      $("#-error").hide();
  //    }
   //
   //
  //  });
   //
  //  $(".select-dropdown")
  //   .rules("add",{
  //      required: true,
  //      notEqual:"Gênero*",
  //      messages:{
  //        required:"Selecionar o gênero é obrigatório para o cadastro",
  //        notEqual:"Selecionar o gênero é obrigatório para o cadastro"
  //      }
  //   });



}); //end of document ready

/**********************************************
FORMS & UI
**********************************************/
/* getAge
 * PURPOSE : get a the age of a given date
 *  PARAMS : date, interger
 * RETURNS : age in interger
 *   NOTES :
 */

function getAge(birthDate){
  // console.log("***funciton getAge***");
  //get timestamp of user birth date
  var birthYear = new Date(birthDate).getFullYear(); // console.log("birh date is " + birthYear);
  var birthMonth = new Date(birthDate).getMonth()+1; // console.log("birth month is " + birthMonth);
  //gettimestamp of now
  var year = new Date().getFullYear(); // console.log("today is " + year);//get the date of today
  var month = new Date().getMonth()+1; // console.log("today's month is " + month );
  //get timestamp age
  var ageYears = Math.abs(year-birthYear);
  var ageMonth = month-birthMonth;

  if ( ageMonth <= 0) {
    ageYears--;
  }

  // console.log("user's age is " + ageYears); //subtract birth age from today

  // console.log("***funciton getAge***");
  return ageYears;

}

/* isMinor
 * PURPOSE : Autogenerates function contract comments
 *  PARAMS : date, interger
 * RETURNS :  true if minor, false if not-
 *   NOTES :
 */

function isMinor(birthDate,countryMinorAge){
  // console.log("***funciton isMinor***");
  //get timestamp of user birth date
  var birth = new Date(birthDate); // console.log("birh date is " + birth);
  birth = birth.getTime(); // console.log("birh date timestamp is " + birth);

  //get timestamp of minor age
  // console.log("minor age in country is " + countryMinorAge);
  var minorAge = countryMinorAge*31556926000; //// console.log("minor age timestamp is " + minorAge); //mutiply the minor age by 1 year in timestamp

  //gettimestamp of now
  var date = new Date(); // console.log("today is " + date);//get the date of today
  date = Math.round(date.getTime()); // console.log("today's timestamp is " + date); //get today's timestamp


  //get timestamp age
  var age = Math.abs(date-birth);

  // console.log("user's age is " + age); //subtract birth age from today

  //check if user is minor in the country
  if(age>minorAge){
    // console.log("user is not minor");
    return false;
  }else{
    // console.log("user is minor");
    return true;
  }
// console.log("***funciton isMinor***");
}

/* lookInputNumberAndChange
 * PURPOSE : Trigger a input and compares the input number with a condition to show or not a html object
 *  PARAMS : JQuery selector - inputToLook | JQuery selector - objectsToShow | numberCondition - interger
 * RETURNS :
 *   NOTES : Good to see if someone is older than a specific age
 */
function lookInputNumberAndChange (inputToLook, objectsToShow, numberCondition){
  //when input changes
  $(inputToLook).on('change',function(){
   var selected = $(inputToLook).val(); //get value from object

   //if the object is lower than the condition show it, if ot hide it
   if(selected < numberCondition){
      $(objectsToShow).show(); //show object
    } else if (selected >= numberCondition) {
      $(objectsToShow).hide(); //hide object
    }
 });
}

/*showOnClick
 * PURPOSE : Shows trigger object to show something if hidden
 *  PARAMS : JQuery selector - buttonId | JQuery selector - toShowId
 * RETURNS :
 *   NOTES :
 */

function showOnClick(buttonId, toShowId){
  // when user clicks on something
  $(buttonId).on('click',function(e){
    var toShow_css_diplay = $(toShowId).css('display'); // get css display of object to show
    if( toShow_css_diplay == 'none') { // if it's not shown fadein objcet
      $(toShowId).css({'display':'inherit'}).hide().fadeIn();
    } //end of if
  });//end of click trigger
} //end on showOnClick


/* formSelectChange
 * PURPOSE : Hide or show an element in the HTML DOM depending on value of another one
 *  PARAMS : formselect,hidden
 * RETURNS : JQuery selector of the select- formselect | Array JQuery objects id to match class in the option- hidden
 *   NOTES :
 */

function formSelectChange (formselect, hidden){
  //// console.log("formSelectChange");
  //// console.log("formselect: " + formselect);
  //// console.log("hidden: " + hidden);

  $(formselect).change(function(){ // if object changes

    var selected = $(formselect).val();//get object value;


    // for each of the hidden elements
    $.each(hidden, function(index,value){
      // if its equal to the seleted value show, if its not hid
      //// console.log('value: ' + value);
      if (selected == value){
        $("#" + value).removeClass('hide');
      } else {
        $("#" + value).addClass('hide');
      }//end of if else
    });//end of each
  });//end of trigger
}//end of formSelectChange


/* imagePreview
 * PURPOSE : Preview image upload inside an object of the HTML DOM
 *  PARAMS : JQuery selector of Input with  'filetype' = 'File' - inputsClass | JQuery selector - displayArea
 * RETURNS :
 *   NOTES :
 */
function imagePreview (inputsClass,displayArea){

    $(inputsClass).change(function(){ // if object changes


    var fileType = $(this).prop('files')[0].type;//get filetype of upload object

    var file = $(this).prop('files')[0];//get the files
    //// console.log(file);

    //if the file is and image with suported filetype or tell user that file is not suported
    if( fileType == 'image/jpeg' | fileType == 'image/png'){
      var reader = new FileReader();//create a new reader
      //when the reader is created
      reader.onload = function(e){
        $(displayArea).append(
        '<img src=' + e.result + '>'
        );//end of append
      };//end of reder.onlod
      reader.readAsDataURL(file);//get reader to read the file
    } else {
      $(displayArea).append(
      '<p>Arquivo não suportado</p>'
      );//end of append
    }//end of if else
  });//end of change trigger
}//end of imagePreview

/*fillSelectWithNumber
 * PURPOSE : fill a select with numeric options of choice
 *  PARAMS :  interger - numberOfOptions | JQuery Selector selectId
 * RETURNS :  -
 *   NOTES :
 */
function fillSelectWithNumber (numberOfOptions, selectId){
  //get a js version of number passed
  JsNumberOfOptions = numberOfOptions-1;
  //loop number passed times adding the options
  for (x=0; x<=JsNumberOfOptions; x++){
    $(selectId).append(
    "<option value='" + x + "'>" + x + "</option>"
    ); //end of append
  } //end of for
} //end of fillSelectWithNumber

//GLOBALS
//console.log("***GLOBALS***");

//url
//console.log("var url");
var url = $(location).attr("href"); //get the href
//console.log("var url = " + url);
urlSplit = url.split('/'); //split the have only the location
//console.log("var url = "  + urlSplit + " after split");

//console.log("...................");

//name
//console.log("var name ");
var name = urlSplit.slice(-1).pop(); //get the name of the page
//console.log("var name = " + name);

//console.log("...................");

//windowHeight
//console.log("var windowHeight");


  var windowHeight = $(window).height(); //get the height of the window

  //console.log("var windowHeight = " + windowHeight);
//when resizing
$(window).resize(function(){

  windowHeight = $(window).height(); //get again the windowHeight
    //console.log("var windowHeight = " + windowHeight);
});

//console.log("...................");

//windowWidth
//console.log("var windowWidth");


  var windowWidth = $(window).width(); //get the Width of the window
  //console.log("var windowWidth = " + windowWidth);

//when resizing
$(window).resize(function(){

  windowWidth = $(window).width(); //get again the windowWidth
  //console.log("var windowWidth = " + windowWidth);

});

//console.log("...................");


//console.log("***GLOBALS***");

//indexPage
// console.log("***indexPage***");
$(document).ready(function(){
  // console.log("INIT $ DOC READY FN");

  if ( name == "index.php" || name === "") {
    $("html").css({ "overflow": "hidden" });
  } else {

  }

  // console.log("END OF DOC READY FN");
});//end of doc ready fn
// console.log("END OF //INDEXPAGE");

$(document).ready(function() {

  $("#modal-indexPopUp").modal({
    ready: function(){
      $(".youtube").trigger("click");
    },
    complete:function(modal){
      $(".modal-close").addClass("hide");
      $(".modal-content").remove();
      $(".modal-overlay").remove();
    }
  });
  $("#modal-indexPopUp").modal("open");


  $(".modal-close").click(function(event) {
    /* Act on the event */
    event.preventDefault();
    $("#modal-indexPopUp").modal("close");
  });
});

(function ($) {
  $.extend({
    uploadPreview : function (options) {

      // Options + Defaults
      var settings = $.extend({
        input_field: ".image-input",
        preview_box: ".image-preview",
        label_field: ".image-label",
        label_default: "Choose File",
        label_selected: "Change File",
        no_label: false,
        success_callback : null,
      }, options);

      // Check if FileReader is available
      if (window.File && window.FileList && window.FileReader) {
        if (typeof($(settings.input_field)) !== 'undefined' && $(settings.input_field) !== null) {
          $(settings.input_field).change(function() {
            var files = this.files;

            if (files.length > 0) {
              var file = files[0];
              var reader = new FileReader();

              // Load file
              reader.addEventListener("load",function(event) {
                var loadedFile = event.target;

                // Check format
                if (file.type.match('image')) {
                  // Image
                  $(settings.preview_box).css("background-image", "url("+loadedFile.result+")");
                  $(settings.preview_box).css("background-size", "contain");
                  $(settings.preview_box).css("background-repeat", "no-repeat");
                  $(settings.preview_box).css("background-position", "center center");
                } else if (file.type.match('audio')) {
                  // Audio
                  $(settings.preview_box).html("<audio controls><source src='" + loadedFile.result + "' type='" + file.type + "' />Your browser does not support the audio element.</audio>");
                } else {
                  alert("This file type is not supported yet.");
                }
              });

              if (settings.no_label == false) {
                // Change label
                $(settings.label_field).html(settings.label_selected);
              }

              // Read the file
              reader.readAsDataURL(file);

              // Success callback function call
              if(settings.success_callback) {
                settings.success_callback();
              }
            } else {
              if (settings.no_label == false) {
                // Change label
                $(settings.label_field).html(settings.label_default);
              }

              // Clear background
              $(settings.preview_box).css("background-image", "none");

              // Remove Audio
              $(settings.preview_box + " audio").remove();
            }
          });
        }
      } else {
        alert("You need a browser with file reader support, to use this form properly.");
        return false;
      }
    }
  });
})(jQuery);

$(document).ready(function() {

  // setTimeout(function(){
  //
  //     $("#load-animation").removeClass('loading');
  //     $("body").removeClass('hide');
  //
  //
  // },3000);

});

// MENU
//console.log("***MENU***");
$(document).ready(function(){

    // INDEX MENU
    if( name == "index.php" || name === "" ) { //if the page is the index
      //console.log("THIS IS THE INDEX");
      //remove and add classes, and change css
      $(".nav-extended").removeClass("white").addClass("transparent"); //add nav the bg color class
      $('.nav-wrapper').css({'border-bottom':'1px solid white'}); //add a border to the wrapper
      $('.button-collapse').css({'color':'white'}); //change the font color to white

      //change icons src to white
      $('.brand-logo-img').attr('src','img/logos/logo-branca.png'); //logo Forum
      $(".icon-sociocon").css({"color":"white","font-size":"2em"});

      $(".nav-content li a").removeClass("black-text"); //remove the black font color class

      //remove the active class from whatever object has it
      $(".active").removeClass("active"); // remove the active class
      $(".indicator").addClass("hide"); // hide the active indicator

    } else {  //if the page is not the index

      $(".icon-sociocon").css({"color":"black","font-size":"2em"});

     //console.log("THIS IS THE " + name );
      //add class active
      $("li.tab a").each(function(index){
        //if the link is equal to the url global
        if (this == url ){
          $(this).addClass("active"); //add the class actve
        } else { //if not
          $(this).removeClass("active");//remove class ative
        } //end of if else
      }); //end of each
    } //end of if else

  //init materialize css
  $(".button-collapse").sideNav();

  $(".nav-extended").find("a").click(function(event) {

    if (
        $(this).attr("href") !== "#menu" &&
        $(this).attr("href") !== "https://instagram.com/forummgt/" &&
        $(this).attr("href") !== "https://www.youtube.com/aForumBrCuritiba/" &&
        $(this).attr("href") !== "https://www.facebook.com/forummgt" &&
        $(this).attr("href") !== "https://twitter.com/Forummgt"
      )
      {
        /* Act on the event */
        event.preventDefault();
        var href =  $(this).attr("href");

        $("body").addClass('fadeOut');
        setTimeout(function(){
          location = href;
        },1000);
      }
  });
});//end of doc ready fn
//console.log("***END OF MENU***");

// 
//
// $(document).ready(function() {
//
//   $('.modal').modal({});
//
//   $('#modal1').modal('open');
//
//   $("#popup").trigger('click');
//
//     $(".modalClose").click(function(event) {
//       event.preventDefault();
//       $('#modal1').modal('close');
//       $(this).hide();
//       $("#popup").remove();
//     });
//
//     $('.modal-overlay').click(function(event) {
//       $(".modalClose").trigger('click');
//     });
//
// });

$(document).ready(function(){
  //console.log("***PAGE ANIMATIONS");
  //if the its the index page
  if( name === "index.php" || name === "") {
    $("nav").addClass("animated fadeInDown").css({"z-index":"2"});
    // .animateCss("fadeInDown"); //hive nav and add fadeInDown
    console.log($("nav"));
    $("body").addClass("fadeIn").removeClass("hide"); //add fadeIn to body and show it
    $(".tabs").css({"overflow":"hidden"}); //hide overflow for animation
    $(".custom-icon").addClass("hide animated fadeIn"); //hide and add fadeIn animation to custom-icon icons
    $(".tabs .left").addClass("animated fadeInLeft"); //animate left tabs to show from the left
    $(".tabs .right").addClass("animated fadeInRight"); //animte right tabs to show from the right
    $(".brand-logo-img").addClass("animated fadeIn"); //animate logo to fade in
    $("nav").removeClass("hide"); //show nav to animate it and it's childs
    $(".custom-icon").each(function (index) { //show custom-icons slightly one after another
      $(this).removeClass("hide");
    });
    $("#nav-mobile-socialLinks").removeClass('hide');



    //going to site pages animation
    $("a").click(function (ev) { //when clicking links
      //console.log("***navigate from index animation click***");
      ev.preventDefault(); //preventDefault
      var href = $(this).attr("href"); //console.log("the href is: " + href); // assign the href to a variable
      var target = $(this).attr("target"); //console.log("the target is: " + target); //assing the target to a variable

      if(href !== "#menu") {    //if the link href is not empity, as in the menu icon from materialize framework
        if(target !== "_blank") { //if the target is not _black to open in new window
          $("body").addClass("fadeOutDown"); //fadeOutDown the body
          setTimeout(function(){ //timout to change the href as the animateCss function still has no callback
            $(location).attr("href", href);
          },750);
        } else {// if the target is blank, to open in new window
          window.open(href,"_blank"); //open a new window with the href
        } //end of if else
      } //end of if
      //console.log("***navigate from index animation click***");
    });

    // $(".animated").each(function(){
    //   $.fn.extend({
    //     animateCss: function (animationName, callback) {
    //       var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    //       $(this).one(animationEnd, function() {
    //           $(this).removeClass('animated ' + animationName);
    //       });
    //     },
    //   });
    // });
    //
    //remover classes de animação para garantir comportamento normal
    setTimeout(function(){
      $("body").removeClass('fadeIn');
      $(".custom-icon").removeClass('fadeIn');
      $("nav").removeClass('fadeInDown');
      $(".tabs .left").removeClass('fadeInLeft');
      $(".tabs .right").removeClass('fadeInRight');
      $("#nav-mobile-socialLinks").removeClass('fadeIn');
    },2000);

  } else {

    //onLoad casting-gallery animation
    var i = 1; //initialize a counter variable
    //
    // $(".casting-gallery-item, .yt-container").each(function(index){ //for each casting-gallery-item
    //
    //   $(this).css({ "animation-delay" : i/4 + "s" }); //add a delay longer as one quarter of the counter
    //   i++; //add to counter
    //
    // }); //animate  casting-gallery-itens

    $("nav").addClass("animated fadeInDown");
    $("body").addClass("fadeIn").removeClass("hide"); //add fadeIn to body and show it
    $(".tabs").css({"overflow":"hidden"}); //hide overflow for animation
    $(".custom-icon").addClass("hide animated fadeIn"); //hide and add fadeIn animation to custom-icon icons
    $(".tabs .left").addClass("animated fadeInLeft"); //animate left tabs to show from the left
    $(".tabs .right").addClass("animated fadeInRight"); //animte right tabs to show from the right
    $(".brand-logo").addClass("animated fadeIn"); //animate logo to fade in
    $("nav").removeClass("hide"); //show nav to animate it and it's childs
    $("#nav-mobile-socialLinks").removeClass('hide');
  // //  container animation for standart page load
    $(".casting-title, .portfolio-title").removeClass('hide');
    $(".container").removeClass('hide');

    $(".custom-icon").each(function (index) { //show custom-icons slightly one after another
      $(this).removeClass("hide");
    });
    // $(".yt-container").removeClass('fadeInUp'); //remove animation class from yt container


    //remover classes de animação para garantir comportamento normal
    setTimeout(function(){
      $("body").removeClass('fadeIn');
      $(".custom-icon").removeClass('fadeIn');
      $("nav").removeClass('fadeInDown');
      $(".tabs .left").removeClass('fadeInLeft');
      $(".tabs .right").removeClass('fadeInRight');
      $("#nav-mobile-socialLinks").removeClass('fadeIn');
    },2000);



  } //end of if else

  // SCROLLMAGIC

  var controller = new ScrollMagic.Controller();

  $(".casting-gallery-item").each(function(index) {

    var scene = new ScrollMagic.Scene({
      triggerElement: this,
      reverse:false,
      triggerHook:0.8 ,
      offset:"-50%",
    })
      .setClassToggle(this, "fadeInUp")
      // .addIndicators()
      .addTo(controller);
  });

  $(".yt-container").each(function(index) {

    var scene = new ScrollMagic.Scene({
      triggerElement: this,
      reverse:false,
      triggerHook:0.8 ,
      offset:"-50%",
    })
      .setClassToggle(this, "fadeInUp")
      // .addIndicators()
      .addTo(controller);
  });




  //console.log("***PAGE ANIMATIONS");
}); //end of doc ready fn

$(document).ready(function() {


    $(".youtube").each(function(index, el) {
      youtubeEmbed($(this));
    });
    
  if($(window).width > 992) {
    $(".youtube").click(function(){

    });
  }
});

// SLIDER
//console.log("***SLIDER***");
$(document).ready(function(){


  //#slider-index
  //console.log("SLIDER INDEX");
  //start the materialize slider
  $("#slider-index").slider({
    indicators: false, //hide indicators
    transition:1000, //transition duration
    interval:5000, //changing interval
  });
  $("#slider-index").css({"touch-action":"none"});


});
//console.log("***SLIDER***");
 


  function youtubeEmbed (link){
    var embed = $(link).attr("data-embed");
    var image = new Image();
    image.src =  "https://img.youtube.com/vi/" + embed + "/sddefault.jpg";
    $(link).append(image);
    $(image).addClass('yt-embed-img');

    $(link).click(function(){
      var iframe = document.createElement("iframe");
      $(iframe).attr({
        frameborder: "0",
        allowfullscreen: "",
        src: "https://www.youtube.com/embed/"+ embed +"?autoplay=1&rel=0&showinfo=0&controls=1&enablejsapi=1",
      });

      $(link).html("").append(iframe);
    });
  }

  function youtubeThumb (link){
    var embed = $(link).attr("data-embed");
    var image = new Image();
    image.src =  "https://img.youtube.com/vi/" + embed + "/sddefault.jpg";
    $(link).append(image);
    $(image).addClass('yt-embed-img');
  }

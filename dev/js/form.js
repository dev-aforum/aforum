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

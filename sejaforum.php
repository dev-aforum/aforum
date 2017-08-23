<?php require_once('headerPreto.php') ?>
<meta http-equiv="cache-control" content="max-age=0" />
</head>
<body>

  <!-- counteúdo da página -->
  <div class="container">

    <!-- formulário de inscrição -->
    <form class="form" id="form_inscription" action="mailer-sejaforum.php" method="post"  enctype="multipart/form-data">

    <!-- facebook track -->
    <script>
      fbq('track', 'Lead', {
      value: 10.00,
      currency: 'USD'
      });
    </script>


      <!-- form header  -->
      <div class="form_header" id="form_inscription_header">

        <button  id="form_inscription_header_button">Inscreva-se</button>
      </div>

      <!-- envio de imagens -->
      <fieldset id="form_upload">
        <h2 class="form_title">Seja Forum</h2><br/>
        <h3 class="form_subTitle">Quer fazer parte da maior agência de modelos do Sul do Brasil? Inscreva-se!</h3><br/>
        <h2 class="form_fieldsetTitle">Fotos</h2>
      <p>Primeiro, adcione duas fotos suas, uma de rosto e outra de corpo</p><br/>

      <div class="form_upload_img_imagePreviewContainer">
        <label  class="form_fakeButton form_upload_img_label" for="form_inscription_imgup1" id="form_upload_button_fakeButton1">Adcionar foto de rosto</label>
        <input data-validation="required" class="form_upload" type="file" name="photo_1" id="form_inscription_imgup1" alt="Foto de corpo">
        <div class="form_upload_img_imagePreview" id="form_inscription_imgPreview1"></div>
      </div>

      <div class="form_upload_img_imagePreviewContainer">
        <label class="form_upload_img_label form_fakeButton" for="form_inscription_imgup2" id="form_upload_button_fakeButton2">Adcionar foto de corpo</label>
        <input class="form_upload" type="file" name="photo_2" id="form_inscription_imgup2" alt="Foto de corpo">
        <div class="form_upload_img_imagePreview" id="form_inscription_imgPreview2"></div>
      </div>

        <!-- <div class="form_inscription_imgup_displayArea">
        </div> -->

      </fieldset> <!-- final do fieldset de envio de imagens -->

      <!-- informações de contato -->
      <fieldset class="form_field" id="form_inscription_field">
        <h2 class="form_fieldsetTitle">Dados</h2>
        <p>Agora precisamos de alguns dados pessoais</p>
        <input type="text" name="user_name" placeholder="Nome completo*">
        <input type="email" name="email" id="form_inscription_email" placeholder="Email*">
        <input type="text" name="telephone" id="form_inscription_telephone" placeholder="Telefone com DDD">
        <input  type="text" name="celphone" id="form_inscription_celphone" placeholder="Celular com DDD*" >
        <select name="state"  id="form_inscription_state" class="select2">
          <option value="" selected>Estado</option>
          <option value="Acre"> Acre </option>
          <option value="Alagoas"> Alagoas </option>
          <option value="Amapá"> Amapá	</option>
          <option value="Amazonas"> Amazonas	</option>
          <option value="Bahia"> Bahia	</option>
          <option value="Ceará"> Ceará	</option>
          <option value="DF"> Distrito Federal </option>
          <option value="Espírito Santo"> Espírito Santo	</option>
          <option value="Goiás"> Goiás	</option>
          <option value="Maranhão"> Maranhão	</option>
          <option value="Mato Grosso"> Mato Grosso	</option>
          <option value="Mato Grosso do Sul"> Mato Grosso do Sul	</option>
          <option value="Minas Gerais"> Minas Gerais	</option>
          <option value="Pará"> Pará	</option>
          <option value="Paraíba"> Paraíba	</option>
          <option value="Paraná"> Paraná	</option>
          <option value="Pernambuco"> Pernambuco	</option>
          <option value="Piauí"> Piauí	</option>
          <option value"Rio de Janeiro"> Rio de Janeiro </option>
          <option value="Rio Grande do Norte"> Rio Grande do Norte	</option>
          <option value="Rio Grande do Sul"> Rio Grande do Sul </option>
          <option value="Rondônia"> Rondônia	</option>
          <option value="Roraima"> Roraima	</option>
          <option value="Santa Catarina"> Santa Catarina	</option>
          <option value="São Paulo"> São Paulo	</option>
          <option value="Sergipe"> Sergipe	</option>
          <option value="Tocatins"> Tocantins  </option>
        </select>
        <input type="text" name="city" placeholder="Cidade">
        <input type="text" name="adress"  placeholder="Endereço">
        <select id="form_inscription_age" name="age" placeholder="Idade" >
          <option selected>Idade</option>
        </select>
        <input type="text" name="ID" placeholder="RG"/>
        <input type="text" class="form_inscription_tutorData" name="tutorName"placeholder="Nome responsável">
        <input type="text" class="form_inscription_tutorData" name="tutorId" placeholder="RG responsável">
      </fieldset> <!-- final do fieldset de informações de contato -->

      <!-- fieldset de medidas -->
      <fieldset>
        <h2 class="form_fieldsetTitle">Medidas</h2>
        <p>Para finalizar sua inscrição, insira suas medidas</p>
        <select name="gender" class="" id="form_inscription_gender">
          <option selected>Gênero</option>
          <option value="form_inscription_masc_hidden" class="form_inscription_masc_hidden">Masculino</option>
          <option value="form_inscription_fem_hidden" class="form_inscription_fem_hidden" >Feminino</option>
          <option value="form_inscription_trans_hidden" class="form_inscription_trans_hidden" >Transgênero</option>
        </select>

        <!-- opções Masculino -->
      	<div class="form_hiddenField" id="form_inscription_masc_hidden">
          <input type="text" name="height" placeholder="Altura" >
          <input type="text" name="torax" placeholder="Tórax" >
          <input type="text" name="manequim" placeholder="Número do manequim">
          <input type="text" name="suit" placeholder="Terno" >
          <input type="text" name="shirt" placeholder="Camisa">
          <input type="text" name ="shoe" placeholder="Sapato">
          <input type="text" name="eyeColor" placeholder="Cor dos olhos" >
          <input type="text" name="hair" placeholder="Cor do cabelo" >
      	</div> <!-- final do fieldset de opções masculino -->

        <!-- opções feminino -->
      	<div class="form_hiddenField" id="form_inscription_fem_hidden">
          <input type="text" name="height" placeholder="Altura" >
          <input type="text" name="bust" placeholder="Busto">
          <input type="text" name="manequim" placeholder="Número do manequim">
          <input type="text" name="waist" placeholder="Cintura" >
          <input type="text" name="hips" placeholder="Quadril">
          <input type="text" name="shoe" placeholder="Sapato">
          <input type="text" name="eyeColor" placeholder="Cor dos olhos">
          <input type="text" name="hair" placeholder="Cor do cabelo" >
      	</div><!-- final de opções feminino -->

        <!-- opções transgênero -->
        <div class="form_hiddenField" id="form_inscription_trans_hidden">
          <input type="text" name="height" placeholder="Altura" >
          <input type="text" name="bust" placeholder="Busto/Toráx">
          <input type="text" name="manequim" placeholder="Número do manequim">
          <input type="text" name="waist" placeholder="Cintura/Terno" >
          <input type="text" name="hips" placeholder="Quadril">
          <input type="text" name="shoe" placeholder="Sapato">
          <input type="text" name="eyeColor" placeholder="Cor dos olhos">
          <input type="text" name="hair" placeholder="Cor do cabelo" >
        </div><!-- final de opções feminino -->


      </fieldset> <!-- final do fieldset de medidas -->

      <input type="hidden" id="indicacao" name="indicacao" value="8"/>
      <input type="hidden" id="numero_unidade" name="numero_unidade" value="1"/>

    <button id="submit-btn" name="button">
      Enviar
    </button>


  </form>  <!-- final do formulário de inscrição -->

</div> <!-- final da div de conteúdo-->
<script type="text/javascript">



$("#form_inscription").validate({

  rules:{
    user_name: "required",
    email: "required",
    celphone:"required",
    telephone: "required",
    age: "required",
  },
  messages:{
    user_name: "Precisamos saber seu nome para concluir o cadastro",
    email: "O email é obrigatório para o cadastro",
    celphone:"O número de telefone celular com DDD é obrigatório para o cadastro",
    telephone:"O número de telefone com DDD é obrigatório para o cadastro",
    age:"Selecionar sua idade é obrigatório para o cadastro",
  },
  submitHandler: function(form) {
    //se o cookie de nome ainda não estiver definido
    if ( Cookies.get("name") === undefined ) {

      Cookies.set( "name" , $("[name='user_name']").val() );


      var data = new FormData($("#form_inscription")[0]);
      var url = 'https://intranet.aforum.com.br/cadastroScouterSeletiva/';

      $.ajax({
          type: "POST",
          url: url,
          processData: false,
          contentType: false,
          data: data,
          async: false,
          dataType: 'json',
          success: function (data) {
            console.log(data);
            form.submit();
            console.log("cadastro efetuado");
          },
          error: function(){
            alert("Ocorreu um erro, tente novamente mais tarde");
          }
        });

        form.submit();

    } else {

      if( Cookies.get("name") === $("[name='user_name']").val() ){

        alert("O cadastro de " + $("[name='user_name']").val() + " já foi realizado" );

      } else {

        Cookies.set( "name" , $("[name='user_name']").val() );

        var data = new FormData($("#form_inscription")[0]);

        var url = 'https://intranet.aforum.com.br/cadastroScouterSeletiva/';

        $.ajax({
            type: "POST",
            url: url,
            processData: false,
            contentType: false,
            data: data,
            async: false,
            dataType: 'json',
            success: function (data) {
              console.log(data);
              form.submit();
              console.log("cadastro efetuado");
            },
            error: function(){
              alert("Ocorreu um erro, tente novamente mais tarde");
            }
          });


        form.submit();
      }
    }
  }
});



</script>

<?php require_once('footer.php') ?>

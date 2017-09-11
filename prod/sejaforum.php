<!-- importamos o header  -->
<?php require_once("header.php") ?>
<div class="container hide">

    <h1 class="title">Seja Forum</h1>
    <!-- formulário de inscrição -->
    <form class="form" id="form_inscription" action="" method="post"  enctype="multipart/form-data">
      <img class="responsive-img" style="margin:2% 0%;"src="img/header_form.jpg" alt="Modelo Forum">

      <h2 class="subtitle4 flow-text">Quer fazer parte da maior agência de modelos do Sul do Brasil? Inscreva-se!</h2>

      <!-- envio de imagens -->
      <fieldset id="form_upload">

      <h2 class="subtitle2">Fotos</h2>
      <p class="flow-text">Primeiro, adicione duas fotos suas, uma de rosto e outra de corpo.</p>

      <div class="form_upload_img_imagePreviewContainer">
        <label  class="form_fakeButton form_upload_img_label" for="form_inscription_imgup1" id="form_upload_button_fakeButton1">Adcionar foto de rosto*</label>
        <input class="form_upload" type="file" name="photo_1" id="form_inscription_imgup1" alt="Foto de corpo">
        <div class="form_upload_img_imagePreview" id="form_inscription_imgPreview1"></div>
      </div>

      <div class="form_upload_img_imagePreviewContainer">
        <label class="form_upload_img_label form_fakeButton" for="form_inscription_imgup2" id="form_upload_button_fakeButton2">Adcionar foto de corpo</label>
        <input data-validation="required" class="form_upload" type="file" name="photo_2" id="form_inscription_imgup2" alt="Foto de corpo">
        <div class="form_upload_img_imagePreview" id="form_inscription_imgPreview2"></div>
      </div>


      </fieldset> <!-- final do fieldset de envio de imagens -->

      <!-- informações de contato -->
      <fieldset class="row">

        <h2 class="subtitle2">Dados pessoais</h2>
        <p class="flow-text">Agora precisamos de alguns dados pessoais, conte-nos quem é você.</p>

        <!-- name -->
        <div class="input-field col s12">

          <input class="" id="user_name" type="text" name="user_name">
          <label for="user_name">Nome*</label>
        </div>

        <!-- email -->
        <div class="input-field col s12">
          <input class="" id="email" type="email" name="email">
          <label for="email">Email*</label>
        </div>

        <!-- celphone -->
        <div class="input-field col s12 m12 l6 xl4">
          <input class="" id="celphone" type="text" name="celphone">
          <label for="celphone">Celular (com DDD)* </label>
        </div>

        <!-- phone -->
        <div class="input-field col s12 m12 l6 xl4">
          <input class="" id="telephone" type="text" name="telephone">
          <label for="telephone">Telefone (com DDD)*</label>
        </div>


        <!-- hack: temos dois inputs abaixo, um com o date picker e um com o valor
         calculado da idade. O da idade está embaixo do primeiro com o texto da cor do fundo,
         Parece um input só, mas não é. Cuidado ao mudar esses estilos em linha
       -->

        <!-- age -->
        <div class="input-field col s12 m12 l6 xl4">
          <input class="datepicker" id="birth" type="text" style="" name="birth">
          <label for="birth">Data de nascimento*</label>
        </div>
        <input type="hidden" name="age" value="">




        <!-- <select id="form_inscription_age" name="age" placeholder="Idade" >
          <option selected>Idade</option>
          <opttion>1</opttion>
        </select> -->

        <!-- rg -->
        <!-- <div class="input-field col s12">
          <input id="rg" type="number" name="rg">
          <label for="rg">RG</label>
        </div> -->

        <!-- tutorName -->
        <div class="input-field hide col s12 m12 l6 xl6" id="tutorName-field">

          <input class="validate" id="tutorName" type="text" name="tutorName">
          <label for="tutorName">Nome do responsável*</label>
        </div>

        <!-- tutorRg -->
        <!-- <div class="input-field hide col s12 m12 l6 xl6" id="tutorRg-field">

          <input id="tutorRg" type="number" name="tutorRg">
          <label for="tutorRg">RG do responsável</label>
        </div> -->

      </fieldset>

      <!-- <fieldset class="row">
        <h2>Endereço</h2>
        <p class="flow-text">Agora seu endereço. É só incluir o CEP que a gente faz o resto.</p> -->
        <!-- CEP -->
        <!-- <div class="input-field col s12 m4 l4 xl4">

          <input  id="cep" type="tel" name="cep">
          <label for="cep">CEP</label>
        </div> -->

        <!-- Street -->
        <!-- <div class="input-field col s12 m4 l8 xl4">
          <input disabled  id="street" type="text" name="street">
          <label for="street">Rua</label>
        </div> -->

        <!-- Hood -->
        <!-- <div class="input-field col s12 m4 l6 xl4">
          <input disabled  id="hood" type="text" name="hood">
          <label for="hood">Bairro</label>
        </div> -->

        <!-- City -->
        <!-- <div class="input-field col s12 m4 l6 xl4">
          <input disabled  id="city" type="text" name="city">
          <label for="city">Cidade</label>
        </div> -->

        <!-- State -->
        <!-- <div class="input-field col s12 m4 l6 xl4">
          <input disabled  id="state" type="text" name="street">
          <label for="street">Estado</label>
        </div> -->

        <!-- Number -->
        <!-- <div class="input-field col s12 m4 l6 xl4">
          <input id="number" type="number" name="number">
          <label for="number">Número</label>
        </div> -->

      </fieldset><!-- end of adress fieldset-->

      <!-- fieldset de medidas -->
      <fieldset class="row">
        <h2>Medidas</h2>
        <p class="flow-text">Para terminar sua inscrição, precisamos saber quais são suas medidas. Selecione seu gênero para começar.</p>


        <div class="input-field col s12">
          <select name="gender" class="validate" id="form_inscription_gender">
            <option selected value="genero">Gênero*</option>
            <option value="form_inscription_masc_hidden" class="form_inscription_masc_hidden black-text">Masculino</option>
            <option value="form_inscription_fem_hidden" class="form_inscription_fem_hidden black-text" >Feminino</option>
            <option value="form_inscription_trans_hidden" class="form_inscription_trans_hidden black-text">Transgênero</option>
          </select>
        </div>

        <!-- <input type="hidden" name="gender" value="f"> -->

        <!-- <input type="text" name="gender" style="display:none;" value="m">  -->


        <!-- height -->
        <div class="input-field col s12">
          <input type="text" id="height" name="height">
          <label for="height">Altura</label>
        </div>

        <!-- manequim -->
        <div class="input-field col s12">
          <input type="text" id="manequim" name="manequim">
          <label for="manequim">Número do manequim</label>
        </div>

        <div class="input-field col s12">
          <input type="text" id="shoe" name ="shoe">
          <label for="shoe">Sapato</label>
        </div>

        <!-- eyes -->
        <div class="input-field col s12">
          <input id="eyeColor"type="text" name="eyeColor">
          <label for="eyeColor">Cor dos olhos</label>
        </div>

        <!-- hair -->
        <div class="input-field col s12">
          <input type="text" id="hair" name="hair">
          <label for="hair">Cor do cabelo</label>
        </div>

        <!-- opções Masculino -->
        <div class="form_hiddenField hide" id="form_inscription_masc_hidden">
          <div class="input-field col s12">
            <input  type="text" id="torax" name="torax">
            <label for="torax">Torax</label>
          </div>
          <div class="input-field col s12">
            <input type="text" id="suit" name="suit">
            <label for="suit">Terno</label>
          </div>
          <div class="input-field col s12">
            <input id="shirt" type="text" name="shirt">
            <label for="shirt">Camisa</label>
          </div>
        </div> <!-- final do fieldset de opções masculino -->

        <!-- opções feminino -->
        <div class="form_hiddenField hide" id="form_inscription_fem_hidden">

          <!-- bust -->
          <div class="input-field col s12">
            <input id="bust" type="text" name="bust">
            <label for="bust">Busto</label>
          </div>

          <!-- waist -->
          <div class="input-field col s12">
            <input id="waist" type="text" name="waist">
            <label for="waist">Cintura</label>
          </div>

          <!-- hips -->
          <div class="input-field col s12">
            <input id="hips" type="text" name="hips">
            <label for="hips">Quadril</label>
          </div>

        </div><!-- final de opções feminino -->

        <!-- opções transgênero -->
        <div class="form_hiddenField hide" id="form_inscription_trans_hidden">

          <!-- bust/torax -->
          <div class="input-field col s12">
            <input id="bust" type="text" name="bust">
            <label for="bust">Busto/Toráx</label>
          </div>

          <!-- waist/suit -->
          <div class="input-field col s12">
            <input id="waist" type="text" name="waist">
            <label for="waist">Cintura/Terno</label>
          </div>

          <!-- hips -->
          <div class="input-field col s12">
            <input id="hips" type="text" name="hips">
            <label for="hips">Quadril</label>
          </div>
        </div><!-- final de opções feminino -->
      </fieldset> <!-- final do fieldset de medidas -->

      <input type="hidden" id="indicacao" name="indicacao" value="8"/>
      <input type="hidden" id="numero_unidade" name="numero_unidade" value="1"/>

      <button type="submit" class="btn grey darken-4 waves-effect waves-light" id="sejaForumSubmit" style="margin-bottom:5%;">Enviar<i class="material-icons right">send</i></button>

    </form>  <!-- final do formulário de inscrição -->




</div> <!-- final da div de conteúdo-->
</div>
<!-- importamos o footer -->
<?php require_once("footer.php") ?>

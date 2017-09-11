<?php require_once('headerPreto.php') ?>
<meta http-equiv="cache-control" content="max-age=0" />
</head>
<body>

  <!-- counteúdo da página -->
  <div class="container">



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
        console.log(data);
        // alert(data);

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


        // form.submit();
      }
    }
  }
});



</script>

<?php require_once('footer.php') ?>

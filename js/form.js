
$(document).ready(function(){
  lookInputNumberAndChange('#form_inscription_age','.form_inscription_tutorData', 18);
  showOnClick('form_inscription_header_button', 'form_upload' );
  // imagePreview('.form_upload_button_realButton', '.form_inscription_imgup_displayArea');
  fillSelectWithNumber(99,"#form_inscription_age" );

  var formselect = "#form_inscription_gender";
  var hidden = [ "form_inscription_masc_hidden" , "form_inscription_fem_hidden", "form_inscription_trans_hidden" ];
  formSelectChange(formselect, hidden);


  // //show depending on gender select
  // $('#form_inscription_gender').change(function(){
  //   var $val = $(this).val();
  //   if( $($val=="masculino") ){
  //       console.log('m')
  //     $("#form_inscription_masc_hidden").show();
  //     $("#form_inscription_fem_hidden").hide();
  //   } else if ($val=="feminino"){
  //       console.log('em')
  //     $("#form_inscription_fem_hidden").show();
  //     $("#form_inscription_masc_hidden").hide();
  //   } else {
  //     console.log('outro')
  //     $("#form_inscription_masc_hidden").hide();
  //     $("#form_inscription_fem_hidden").hide();
  //   }
  // });

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


});

  $(document).ready(function(){
    $('#form_inscription_celphone').mask("(99) 9999-9999999");
    $('#form_inscription_telephone').mask("(99) 9999-999999");
  });
  //
  // $.validate({
  //    modules : 'html5'
  //  });

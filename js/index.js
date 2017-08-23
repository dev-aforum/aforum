	$(document).ready(function(){
    lookInputNumberAndChange('#form_inscription_age','.form_inscription_tutorData', 18);
    showOnClick('form_inscription_header_button', 'form_upload' );
    var hidden = ['form_inscription_hidden_masc','form_inscription_hidden_fem'];
    var select = '#form_inscription_gender';
    formSelectChange(select, hidden);
    imagePreviewChange('.form_upload_button_realButton', '.form_inscription_imgup_displayArea');
    fillSelectWithNumber(99,"#form_inscription_age" );

});

//= ../../../bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js
$(function(){
    "use strict";
    tinymce.init({
        selector: '.contentEdit',
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | responsivefilemanager',
        image_advtab: true,

        external_filemanager_path:"/assets/editor/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "../filemanager/plugin.min.js"},

        imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",

        language_url : '/assets/editor/tinymce/langs/ru.js'
    });
});
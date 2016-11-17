//= ../../../bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js
$(function(){
    "use strict";
    tinymce.init({
        selector: '.contentEdit',
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr',
            'wordcount visualblocks visualchars code',
            'media nonbreaking save table contextmenu directionality',
            'template paste textcolor colorpicker textpattern imagetools codesample'
        ],
        toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'preview media | forecolor backcolor',
        image_advtab: true,
        external_filemanager_path:"/assets/editor/filemanager/",
        filemanager_title:"Responsive Filemanager" ,
        external_plugins: { "filemanager" : "../filemanager/plugin.min.js"},

        imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",

        language_url : '/assets/editor/tinymce/langs/ru.js'
    });

    $("#image").change(function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagePreviewSrc').attr('src', e.target.result);
            };

            reader.readAsDataURL(this.files[0]);
        }
    }).trigger('change');
});
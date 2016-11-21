//= ../../../bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js

$(function(){
    "use strict";

    var options = {
        selector: '.contentEdit',
        // forced_root_block : false,
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr',
            'wordcount visualblocks visualchars code',
            'media nonbreaking save table contextmenu directionality',
            'template paste textcolor colorpicker textpattern imagetools codesample'
        ],
        toolbar1: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar2: 'preview | media link image | forecolor backcolor',

        plugin_preview_width: $(window).innerWidth() * .8,
        plugin_preview_height: $(window).innerHeight() * .8,


        external_filemanager_path: "/assets/editor/filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": "../filemanager/plugin.min.js"},

        imagetools_toolbar: "rotateleft rotateright | flipv fliph | editimage imageoptions",
        image_caption: true,
        image_dimensions: false,
        image_advtab: true,
        relative_urls: false,
        content_css: '/assets/css/editor.css',
        body_class: 'article',

        style_formats: [
            {
                title: 'Headers', items: [
                {
                    title: 'Headers 1', items: [
                    {title: 'Type one', block: 'h1', classes: 'type-one'},
                    {title: 'Type two', block: 'h1', classes: 'type-two'},
                    {title: 'Type three', block: 'h1', classes: 'type-three'},
                    {title: 'Type four', block: 'h1', classes: 'type-four'}
                ]
                },
                {
                    title: 'Headers 2', items: [
                    {title: 'Type one', block: 'h2', classes: 'type-one'},
                    {title: 'Type two', block: 'h2', classes: 'type-two'},
                    {title: 'Type three', block: 'h2', classes: 'type-three'},
                    {title: 'Type four', block: 'h2', classes: 'type-four'}
                ]
                },
                {
                    title: 'Headers 3', items: [
                    {title: 'Type one', block: 'h3', classes: 'type-one'},
                    {title: 'Type two', block: 'h3', classes: 'type-two'},
                    {title: 'Type three', block: 'h3', classes: 'type-three'},
                    {title: 'Type four', block: 'h3', classes: 'type-four'}
                ]
                },
                {
                    title: 'Headers 4', items: [
                    {title: 'Type one', block: 'h4', classes: 'type-one'},
                    {title: 'Type two', block: 'h4', classes: 'type-two'},
                    {title: 'Type three', block: 'h4', classes: 'type-three'},
                    {title: 'Type four', block: 'h4', classes: 'type-four'}
                ]
                },
                {
                    title: 'Headers 5', items: [
                    {title: 'Type one', block: 'h5', classes: 'type-one'},
                    {title: 'Type two', block: 'h5', classes: 'type-two'},
                    {title: 'Type three', block: 'h5', classes: 'type-three'},
                    {title: 'Type four', block: 'h5', classes: 'type-four'}
                ]
                },
                {
                    title: 'Headers 6', items: [
                    {title: 'Type one', block: 'h6', classes: 'type-one'},
                    {title: 'Type two', block: 'h6', classes: 'type-two'},
                    {title: 'Type three', block: 'h6', classes: 'type-three'},
                    {title: 'Type four', block: 'h6', classes: 'type-four'}
                ]
                },
            ]
            },
            {
                title: 'Inline', items: [
                {title: 'Marked', block: 'mark'},
                {title: 'Bold', icon: 'bold', block: 'strong'},
                {title: 'Italic', icon: 'italic', format: 'italic'},
                {title: 'Underline', icon: 'underline', format: 'underline'},
                {title: 'Strikethrough', icon: 'strikethrough', format: 'strikethrough'},
            ]
            },
            {
                title: 'Blocks', items: [
                {title: 'Blockquote', block: 'blockquote', wrapper: true},
                {title: 'Cite', block: 'cite'},
                {title: 'Paragraph', format: 'p'},
                {title: 'Div', format: 'div'},
            ]
            },
            {
                title: 'Alignment', items: [
                {title: 'Left', icon: 'alignleft', format: 'alignleft'},
                {title: 'Center', icon: 'aligncenter', format: 'aligncenter'},
                {title: 'Right', icon: 'alignright', format: 'alignright'},
                {title: 'Justify', icon: 'alignjustify', format: 'alignjustify'}
            ]
            }
        ]
    };
    if(lang === 'ru')
        options.language_url = '/assets/editor/tinymce/langs/ru.js';

    tinymce.init(options);

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
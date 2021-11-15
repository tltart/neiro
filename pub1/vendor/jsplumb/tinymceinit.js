var params = {
    target: $('#element_text').get(0),
    setup: function(ed) {
        ed.on('keyup', function(e) {

            set_text(ed.getContent());
        });
        ed.on('ExecCommand', function (e) {
            set_text(ed.getContent());
        });
        ed.addButton('cardfields', {
            text: 'Поля',
            onclick: function () {
              get_ajax_fields();
            }
        });
            },
    menubar: false,
    statusbar: false,
    toolbar: "bold,italic | styleselect cardfields | spellchecker | link",
    //toolbar: "bold,italic | styleselect cardfields | fullscreen",
    plugins: 'noneditable paste autoresize spellchecker link',
    target_list: false,
    default_link_target: "_blank",
    link_title: false,
    //plugins: 'noneditable fullscreen paste',
    noneditable_noneditable_class: 'js_non_editable',
    language: $('html').attr('lang'),
    force_br_newlines : false,
    force_p_newlines : true,
    forced_root_block : 'p',
    //paste_as_text: true,

    paste_auto_cleanup_on_paste : true,
    paste_remove_styles: true,
    paste_remove_styles_if_webkit: true,
    paste_strip_class_attributes: true,

    autoresize_max_height: 500,
    paste_word_valid_elements: "b,strong,i,em,p,br",
    paste_retain_style_properties: "font-weight font-style",

    spellchecker_languages: "Russian=ru,Ukrainian=uk,English=en",
    spellchecker_language: $('html').attr('lang'),  // default language
    spellchecker_rpc_url: "//speller.yandex.net/services/tinyspell?options=6",

    style_formats:
        [
            {title:'tinymce_answer', selector: 'p', classes : 'richedit_answer'},
            {title: 'tinymce_comment', selector: 'p', classes : 'richedit_comment'},
            {title: 'tinymce_warning', selector: 'p', classes : 'richedit_warning'},
            {title: 'tinymce_emotion_funny', selector: 'p', classes : 'richedit_emotion_funny'},
            {title: 'tinymce_emotion_sly', selector: 'p', classes : 'richedit_emotion_sly'},
            {title:'tinymce_emotion_care', selector: 'p', classes : 'richedit_emotion_care'},
            {title: 'tinymce_emotion_intrigue', selector: 'p', classes : 'richedit_emotion_intrigue'},
            {title: 'tinymce_emotion_interrogative', selector: 'p', classes : 'richedit_emotion_interrogative'}
        ],
    content_css: '/css/tinymcetextpagestyle.css?v=2',
    valid_elements: 'p[class],a[href],strong/b,div[class|data*],br,ul[class],li[class],dl,dt,table,tbody,thead,td,tr,i,' +
    'img[src|alt|title|style],em,span[class|data*],h1[class],h2[class],h3[class],h4[class],h5[class],' +
    'input[class|id|style|name|placeholder|type],label[class],textarea[class|id|style|name|placeholder],' +
    'select[class|id|style|name|placeholder],hs[class|data*]'
};


tinymce.init(params);



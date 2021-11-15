$(document).on('click', '.add_amo_2020', function () {

    let server = $('.for_amo_2020_server1').val();
    let login = $('.for_amo_2020_login').val();
    let client_id = $('.for_amo_2020_wclient_id').val();
    let id = $('.for_amo_2020_id').val();

    var form = $(this).closest('form');
    var formdata = $(form).serialize();

    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: formdata,
        success: function (html1) {


            let url = `https://www.amocrm.ru/oauth?client_id=` + client_id + `&state=w_` + id + `&mode=post_message`;

            popup = window.open(url, 'Предоставить доступ', 'scrollbars, status, resizable, width=750, height=580');

        }
    })


});



$(document).on('change', '.select_sipNeiros', function () {

    if ($(this).val() == 2) {
        $('#ar_phone_redirect_mask').hide();
        $.ajax({
            type: "POST",
            url: '/ajax/get_ajax_sip',
            data: {},
            success: function (html1) {
                $('#ar_phone_redirect_mask').val(html1.number);

                $('.class_hidenrte').val(html1.number)
                $('.neiros_sip_login_1').html(html1.number)
                $('.neiros_sip_password_1').html(html1.password)
                $('.form__block_sip_neiros').show();
                $('.class_hidenrte').hide();
            }
        })
        ;
    } else {
        $('#ar_phone_redirect_mask').show();
        $('.class_hidenrte').show();
        $('.form__block_sip_neiros').hide();
    }


});
$(document).on('change', '.type_add_email', function () {
    if ($(this).val() == 2) {
        $('.kkmf').show();
        $('.kkmf1').hide();
    } else {
        $('.kkmf1').show();
        $('.kkmf').hide();
    }


});
$(document).on('change', '.ad_dir_switch', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var model = $(this).data('model');
    $.ajax({
        type: "POST",
        url: '/ajax/ad_dir_switch',
        data: {
            id: id,
            model: model

        },
        success: function (html1) {


        }
    })
});
$(document).on('click', '.delete_adwords_direct', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var model = $(this).data('model');
    $(this).parents('.for-direct').remove();
    $.ajax({
        type: "POST",
        url: '/ajax/delete_adwords_direct',
        data: {
            id: id,
            model: model

        },
        success: function (html1) {


        }
    })
});
$(document).on('click', '.user_grou_rules', function () {
    $this = $(this).find('span.user-group')
    $.ajax({
        method: 'POST',
        url: '/ajax/get_user_group_rules',
        data: {
            id: $(this).data('id')
        },
        success: function (data) {
            $('#WidgetModal2 .h1-modal.pos-left').html('Настройки группы')
            $('#WidgetModal2 .widget1-status-btn').css('display', 'none');
            $('#WidgetModal2 .block-descr').css('display', 'none');
            $('#WidgetModal2 .insert-kviz-data-container').css('display', 'block');
            $('#WidgetModal2 .insert-kviz-data-container').html(data);
            $('#WidgetModal2').modal('show');
        }


    })


})
$(document).on('click', '#add_pravilo_kviz1', function () {

    var is_random = getRandomInt(99999990);
    $(this).closest('.tab-content-block').find('.show-chat-operator-all').append(`<div class="pravilo-block col-xs-12">
                        <div  class="select-panel-blok col-sm-5" style="display:none" >

    <div class="dropdown add-user-new add-number-new select-panel-blok-input">
            <button  class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Адрес текущей страницы</button>
             <ul class="dropdown-menu"  aria-labelledby="dLabel">
                <li class="t__3 active"><label class="add-number-new-checkbox">Адрес текущей страницы <span class="checkmark"></span></label></li>
       
             </ul>
    </div>



                    </div>




                   

                      <div class="col-sm-12 zvonok-block two-panel-result-show select-panel-blok-time url-page" style="display:block; padding-left:0px;"  >
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">содержит строку</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                        <li class="active"><label class="add-number-new-checkbox">содержит строку<input type="checkbox" name="rule[]" value="%LIKE%" checked=""><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не содержит строку<input type="checkbox" name="rule[]" value="NOT%LIKE%"><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">это точно<input type="checkbox" name="rule[]" value="=="><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не являеться<input value="!=" type="checkbox" name="rule[]"><span class="checkmark"></span></label></li>

                                                    </ul>
                                                </div>

    <div class="form__block " >

                             <input type="text" class="form-control form-control-text" placeholder="" name="value[]" value="">
                        </div>



                        </div>


                     <div class="delete_pravilo"><img src="/global_assets/images/icon/user/trash.svg"></div>

               </div>`);


});
$(document).on('click', '.add_project_comment', function () {

    $.ajax({
        type: "POST",
        url: '/ajax/add_project_comment',
        data: {
            comment: $('.user_comment').val(),
            id: $('.user_comment').data('id')

        },
        success: function (html1) {
            $('.add_project_comment').hide();


        }
    })


});
$(document).on('click', '.adw_account_id', function () {

    $.ajax({
        type: "POST",
        url: '/ajax/adw_account_id',
        data: {

            id: $(this).val()

        },
        success: function (html1) {

$('.adw_customer_id').html(html1);

        }
    })


});

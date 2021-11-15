@extends('app')
@section('title')
    Этапы сделок

@endsection
<script type="text/javascript" src="/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
<link href="/cdn/v1/chatv2/css/select2.css" rel="stylesheet" type="text/css">

<style>.user-setting {
        background: none !important;
        box-shadow: none !important;
    }

    .user-setting .nav-tabs > li.active > a, .user-setting .nav-tabs > li.active > a:focus, .user-setting .nav-tabs > li.active > a:hover {

        background: none !important;
        color: #333 !important;
    }

    .user-setting .nav > li > a {
        color: #333 !important;
    }

    .user-setting .nav-tabs {
        border-bottom: 1px solid #B3B3B3 !important;
    }

    .tab-content > .active.tab_pane__new {
        background: #fff;
        border-radius: 5px;
        margin-top: 40px;
    }

    .tab_pane__new2 .panel-heading {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }</style>

@section('content')

    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <!-- Task manager table -->
    <div class="panel panel-white user-setting">


        <div class="dropdown add-user-new">


        </div>


        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active" style="    margin-right: 35px;"><a href="#s-balance"
                                                                                      aria-controls="s-balance"
                                                                                      role="tab" data-toggle="tab">Тарифы
                    и баланс</a></li>

            <li role="presentation"><a href="#profil" aria-controls="profil" role="tab" data-toggle="tab">Платежные
                    профили</a></li>
            <li role="presentation" style="    margin-left: 35px;"><a href="#schet" aria-controls="schet" role="tab"
                                                                      data-toggle="tab">Счета на оплату</a></li>
            <li role="presentation" style="    margin-left: 35px;"><a href="#number" aria-controls="number" role="tab"
                                                                      data-toggle="tab">Стоимость номеров</a></li>
            <li role="presentation" style="    margin-left: 35px;"><a href="#talk" aria-controls="talk" role="tab"
                                                                      data-toggle="tab">Стоимость разговоров</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @include('billing.tabs.ballance')


            <div role="tabpanel" class="tab-pane tab_pane__new tab_pane__new2 fade " id="profil">

                {!! $paycompanys !!}


            </div>
            <div role="tabpanel" class="tab-pane tab_pane__new fade" id="schet"> {!! $checkcompanys !!} </div>
            <div role="tabpanel" class="tab-pane tab_pane__new fade " id="talk"> {!! $recs !!}</div>

            <div role="tabpanel" class="tab-pane tab_pane__new fade" id="number">{!! $phones !!}</div>


            <!-- /task manager table -->

            <!-- /footer -->

            <div id="ClientInfoModal" class="modal fade ClientInfoModal lids-neiros user-neiros">

            </div>
        </div>


        <script type="text/javascript" src="/js/select2.min.js"></script>
        <script>

            /* ------------------------------------------------------------------------------
            *
            *  # Select2 selects
            *
            *  Demo JS code for form_select2.html page
            *
            * ---------------------------------------------------------------------------- */

            document.addEventListener('DOMContentLoaded', function () {
                // Format icon
                function iconFormat(icon) {
                    var originalOption = icon.element;
                    if (!icon.id) {
                        return icon.text;
                    }
                    /* var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;*/
                    var $icon = "<div class='selected-icons-select2'><img  src='/global_assets/images/icon/user/user.svg'></div><div class='selected-icons-select2-text'>" + icon.text + "</div>";
                    return $icon;
                }

                // Initialize with options

                function reload_select() {

                    select3 = $(".select-icons").select2({
                        templateResult: iconFormat,
                        hideSelected: true,
                        minimumResultsForSearch: Infinity,
                        closeOnSelect: false,
                        templateSelection: iconFormat,
                        escapeMarkup: function (m) {
                            return m;
                        }
                    });
                    select3.each(function (index) {
                        $(this).data('select2').$dropdown.addClass("selection-user-drop");
                    });

                    $('.select-conainer-icon-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');
                    $('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
                    $('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');

                    $('.select-group-user').on('select2:unselect', function (e) {
                        $('.select-conainer-group-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');

                        set_user_group($(this).val(), $(this).closest('tr').attr('data-id'))


                    });

                    $('.select-group-user').on('select2:select', function (e) {
                        set_user_group($(this).val(), $(this).closest('tr').attr('data-id'));

                        $('.select-conainer-group-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');
                    });


                    $('.select-roll-user').on('select2:unselect', function (e) {
                        $('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
                    });

                    $('.select-roll-user').on('select2:select', function (e) {
                        $('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
                    });


                    $('.select-group2-user').on('select2:unselect', function (e) {
                        $('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');
                    });

                    $('.select-group2-user').on('select2:select', function (e) {
                        $('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');
                    });

                }

                reload_select()


                function set_user_group(user, group) {
                    $.ajax({
                        type: "POST",
                        url: '/setting/users/set_user_group',
                        data: {
                            user: user,
                            group: group
                        },
                        success: function (html1) {

                            $('.group_count_' + group).html(html1);


                        }
                    })
                }

                $('.add-group-text div').on('click', function () {
                    $(this).css('display', 'none');
                    $('.cont-create-group').css('display', 'block');

                })
                var select2 = $('.js-example-basic-single').select2({
                    placeholder: '<img src="/global_assets/images/icon/user/plus.PNG"> Добавить пользователя',
                    /*  	minimumResultsForSearch: -1,*/
                    escapeMarkup: function (markup) {
                        return markup;
                    }
                });
                select2.each(function (index) {
                    $(this).data('select2').$dropdown.addClass("selection-user-drop");
                });


                $('.user-rolls').select2({
                    minimumResultsForSearch: -1

                })


                $(document).on('click', '.edit-user', function () {

                    $.ajax({
                        type: "POST",
                        url: '/setting/users/getajaxuser',
                        data: {
                            id: $(this).data('id')
                        },
                        success: function (html1) {

                            $('#ClientInfoModal').html(html1);
                            $('#ClientInfoModal').modal('show');
                            $('.user-rolls').select2({
                                minimumResultsForSearch: -1

                            })
                            reload_select()
                        }
                    })


                });
                $(document).on('click', '.add_user_ajax', function () {

                    $.ajax({
                        type: "POST",
                        url: '/setting/users/getnewuser',
                        data: {
                            id: '',

                        },
                        success: function (html1) {

                            $('#ClientInfoModal').html(html1);
                            $('#ClientInfoModal').modal('show');
                            $('.user-rolls').select2({
                                minimumResultsForSearch: -1

                            })
                            reload_select()


                        }
                    })


                });


                $(document).on('click', '.w_safebutton_new', function () {
                    var my_form = $('#form_user_save').serialize();
                    var formData = new FormData($('#form_user_save')[0])
                    $.ajax({
                        type: "POST",
                        url: '/setting/users/saveajaxuser',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (html1) {
                            if (html1['is_new'] == 1) {

                                $('#user_tbody').append(html1['html'])
                            }
                            if (html1['status'] == 2) {
                                mynotif('Успешно', html1['message'], 'info')
                                $('#ClientInfoModal').modal('hide');
                                return;
                            }
                            if (html1['status'] == 0) {
                                mynotif('Ошибка', html1['message'], 'danger')
                                $('#ClientInfoModal').modal('hide');
                                return;
                            }
                            if (html1['status'] == 1) {
                                mynotif('Ошибка', html1['message'], 'danger')
                                ;
                                return;
                            }
                        }
                    })

                });

                $(document).on('click', '.add_group', function () {

                    $('.cont-create-group').hide();
                    $.ajax({
                        type: "POST",
                        url: '/setting/usersgroup/saveajaxgroup',
                        data: {
                            name: $('#my_group_name').val()
                        },
                        success: function (html1) {
                            $('#my_group_name').val('');
                            $('#user_group_tr').append(html1);
                        }
                    })

                });


                /*$(document.body).on("change",".js-example-basic-single",function(){
                $(".js-example-basic-single").val('').trigger('change')
                });*/

                $('.js-example-basic-single').on('select2:select', function (e) {
                    count = $(this).closest('tr').find('.user-group span').html()
                    $(this).closest('tr').find('.user-group span').html(Number(count) + 1)
                    $(this).closest('tr').find('.count-user').html(Number(count) + 1)
                    $(".js-example-basic-single").val('').trigger('change')
                });

                var elems = document.querySelectorAll('.js-switch');

                for (var i = 0; i < elems.length; i++) {
                    var switchery = new Switchery(elems[i], {size: 'small', color: '#00B9EE'});
                }


            });
        </script>


        <script>
            var my_balance = '{{auth()->user()->getcompany->ballans}}';
            $(document).on('click','.radio-sale-card',function (){
                min_price = $(this).data('price');

                if (min_price > my_balance) {

                    need_summ = min_price - my_balance;
                    $('.s-balance-sbs').html(`<label class="control-label" for="s-balance-subscription">Подписка</label>
                            <input id="s-balance-subscription" type="checkbox"   class="js-switch s-balance-subscription"  data-size="small"  name="podpiska"  />`)
                    var elems = document.getElementById('s-balance-subscription')
                    var switchery = new Switchery(elems, {size: 'small', color: '#00B9EE'});
                    mynotif('Ошибка', 'Для включения подписки пополните баланс минимум на ' + need_summ + ' руб', 'info');


                    return false;


                }

                themonth = $(this).val();

                need_price = $('.m' + themonth + '_price').data('price')
                var formdata = $('#ballance_form').serialize();

                $.ajax({
                    type: "POST",
                    url: '/ajax/set_podpiska',
                    data: formdata + '&need_price=' + need_price,
                    success: function (html1) {
                        if (html1.error == 1) {
                            mynotif('Ошибка', html1.mess, 'danger');

                        } else {
                            $('.s-balance-sbs').html(`<label class="control-label" for="s-balance-subscription">Подписка</label>
                            <input id="s-balance-subscription" type="checkbox"   class="js-switch s-balance-subscription"  data-size="small"  name="podpiska" checked />`)
                            var elems = document.getElementById('s-balance-subscription')
                            var switchery = new Switchery(elems, {size: 'small', color: '#00B9EE'});
                            mynotif('Успешно', html1.mess, 'success');
                        }

                    }
                })


            });
            $(document).on('change', '.s-balance-subscription', function () {

                    if ($(this).is(':checked')) {
                        error_balans = 0;
                        min_price = $('.m3_price').data('price');

                        if (min_price > my_balance) {

                            need_summ = min_price - my_balance;
                            $('.s-balance-sbs').html(`<label class="control-label" for="s-balance-subscription">Подписка</label>
                            <input id="s-balance-subscription" type="checkbox"   class="js-switch s-balance-subscription"  data-size="small"  name="podpiska"  />`)
                            var elems = document.getElementById('s-balance-subscription')
                            var switchery = new Switchery(elems, {size: 'small', color: '#00B9EE'});
                            mynotif('Ошибка', 'qДля включения подписки пополните баланс минимум на ' + need_summ + ' руб', 'info');


                            return false;


                        }
                        min_price3 = $('.m3_price').data('price');
                        min_price6 = $('.m6_price').data('price');
                        min_price12 = $('.m12_price').data('price');
                        min_price21 = $('.m21_price').data('price');

                        if (my_balance >= min_price21) {
                            $('.m21_price').prop('checked', true)
                        }
                        if (my_balance < min_price21 && my_balance >= min_price12) {
                            $('.m12_price').prop('checked', true)
                        }
                        if (my_balance < min_price12 && my_balance >= min_price6) {
                            $('.m6_price').prop('checked', true)
                        }
                        if (my_balance < min_price6 && my_balance >= min_price3) {
                            $('.m3_price').prop('checked', true)
                        }
                        themonth = $('[name="radio-sale-card"]:checked').val();

                        need_price = $('.m' + themonth + '_price').data('price')
                        var formdata = $('#ballance_form').serialize();

                        $.ajax({
                            type: "POST",
                            url: '/ajax/set_podpiska',
                            data: formdata + '&need_price=' + need_price,
                            success: function (html1) {
                                if (html1.error == 1) {
                                    mynotif('Ошибка', html1.mess, 'danger');

                                } else {
                                    mynotif('Успешно', html1.mess, 'success');
                                }

                            }
                        })


                    } else {
                        $('[name="radio-sale-card"]:checked').prop('checked',false)
                        $.ajax({
                            type: "POST",
                            url: '/ajax/set_podpiskaoff',
                            data: {'d':1},
                            success: function (html1) {

                                mynotif('Успешно', 'Подписка отключена', 'info');


                            }
                        })
                    }
                }
            )
            ;

            function calc_tarif() {


                var thisd = $('.s-balance-tarif-block.active-tarif');
                if (thisd.data('montsh3') === undefined) {
                    $('.m3_s').hide();
                    $('.m6_s').hide();
                    $('.m12_s').hide();
                    $('.m24_s').hide();
                    $('.m3_p').hide();
                    $('.m6_p').hide();
                    $('.m12_p').hide();
                    $('.m24_p').hide();
                } else {

                    $('.m3_s').show();
                    $('.m6_s').show();
                    $('.m12_s').show();
                    $('.m24_s').show();
                    $('.m3_p').show();
                    $('.m6_p').show();
                    $('.m12_p').show();
                    $('.m24_p').show();

                    $('.m3_p').html(thisd.data('montsh3') + '% скидка')
                    $('.m3_s').html(thisd.data('m3') + ' руб.')
                    $('.m3_price').attr('data-price', thisd.data('m3'))


                    $('.m6_p').html(thisd.data('month6') + '% скидка')
                    $('.m6_s').html(thisd.data('m6') + ' руб.')
                    $('.m6_price').attr('data-price', thisd.data('m6'))


                    $('.m12_p').html(thisd.data('month12') + '% скидка')
                    $('.m12_s').html(thisd.data('m12') + ' руб.')
                    $('.m12_price').attr('data-price', thisd.data('m12'))


                    $('.m24_p').html(thisd.data('month24') + '% скидка')
                    $('.m24_s').html(thisd.data('m24') + ' руб.')
                    $('.m24_price').attr('data-price', thisd.data('m24') + ' руб.')
                }


            }

            $(document).on('click', '.s-balance-tarif-btn', function () {
                $('.s-balance-tarif-block').removeClass('active-tarif');
                $(this).parent().addClass('active-tarif');


                var thisd = $(this);

                if (thisd.data('montsh3') === undefined) {
                    $('.m3_s').hide();
                    $('.m6_s').hide();
                    $('.m12_s').hide();
                    $('.m24_s').hide();
                    $('.m3_p').hide();
                    $('.m6_p').hide();
                    $('.m12_p').hide();
                    $('.m24_p').hide();
                } else {

                    $('.m3_s').show();
                    $('.m6_s').show();
                    $('.m12_s').show();
                    $('.m24_s').show();
                    $('.m3_p').show();
                    $('.m6_p').show();
                    $('.m12_p').show();
                    $('.m24_p').show();

                    $('.m3_p').html(thisd.data('montsh3') + '% скидка')
                    $('.m3_s').html(thisd.data('m3') + ' руб.')
                    $('.m3_price').attr('data-price', thisd.data('m3'))


                    $('.m6_p').html(thisd.data('month6') + '% скидка')
                    $('.m6_s').html(thisd.data('m6') + ' руб.')
                    $('.m6_price').attr('data-price', thisd.data('m6'))


                    $('.m12_p').html(thisd.data('month12') + '% скидка')
                    $('.m12_s').html(thisd.data('m12') + ' руб.')
                    $('.m12_price').attr('data-price', thisd.data('m12'))


                    $('.m24_p').html(thisd.data('month24') + '% скидка')
                    $('.m24_s').html(thisd.data('m24') + ' руб.')
                    $('.m21_price').attr('data-price', thisd.data('m24'))
                }

                $('#new_tarif').val(thisd.data('id'));

                if(thisd.data('id')==9||thisd.data('id')==20){
                    $('.class_podpiska').hide();
                }else{
                    $('.class_podpiska').show();
                }

                var formdata = $('#ballance_form').serialize();
                $.ajax({
                    type: "POST",
                    url: '/ajax/set_terif',
                    data: formdata,
                    success: function (html1) {
                        $('.radio-sale-card').prop('checked',false);
                        $('.s-balance-sbs').html(`<label class="control-label" for="s-balance-subscription">Подписка</label>
                            <input id="s-balance-subscription" type="checkbox"   class="js-switch s-balance-subscription"  data-size="small"  name="podpiska"  />`)
                        var elems = document.getElementById('s-balance-subscription')
                        var switchery = new Switchery(elems, {size: 'small', color: '#00B9EE'});

                    }
                })


            });


            /*var elems = document.querySelectorAll('.js-switch');
                    for (var i = 0; i < elems.length; i++) {
                    var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
                    }*/

            $('.checkbox-pay input[type="checkbox"]').on('change', function () {
                $('.checkbox-pay input[type="checkbox"]').not(this).prop('checked', false);
            });

            $('.s-balance-active-coupon label').click(function () {
                $('.s-balance-active-coupon-block').toggle();
            });

            $('.s-balance-active-avto .s-balance-active-avto-str').click(function () {
                $('.s-balance-avto-block-st').toggle();
            });


            var count = 1;
            var countElement = document.getElementById("count-project");

            function plus() {
                count++;
                countElement.value = count;
                load_tarif();
            }

            function minus() {
                if (count > 1) {
                    count--;
                    countElement.value = count;
                    load_tarif();
                }
            }


            min_slide = 0;
            max_slide = 13000;
            default_value = {{$pos}};
            count_slider = 50;
            $('.min_value').text(min_slide)
            $('.max_value').text(max_slide)


            $(function () {
                var handle = $("#custom-handle");
                $("#slider").slider(
                    {
                        range: "max",
                        min: min_slide,
                        max: max_slide,
                        value: default_value,
                        orientation: "horizontal",
                        range: "min",
                        animate: true,

                        create: function () {
                            handle.html('<div><span>' + $(this).slider("value") + '</span></div>');
                        },
                        slide: function (event, ui) {
                            handle.html('<div><span>' + ui.value + '</span></div>');
                            $("#count-user-in-site").val(ui.value);
                        }
                        ,
                        change: function (event, ui) {
                            load_tarif()
                        }
                    });
            });

            function load_tarif(k) {
                var traff_1 = $('#count-user-in-site').val();
                var site_1 = $('#count-project').val();
                $.ajax({
                    type: "POST",
                    url: '/ajax/load_tarif',
                    data: {
                        'traffic': traff_1,
                        'sites': site_1,

                    },
                    success: function (html1) {
                        $('.s-balance-tarif').html(html1);
                        if (k == 1) {
                            calc_tarif();
                        }
                    }
                })

            }

            load_tarif(1);

            $(document).on('click', '#s-balance-active-coupon-btn', function () {
                if ($('#s-balance-active-coupon').val() == '') {

                    new PNotify({
                        title: 'Ошибка!',
                        text: 'Введите купон',
                        icon: 'fa-success', type: 'error', styling: 'fontawesome'
                    });

                    return false;
                }


                $.ajax({
                    type: "POST",
                    url: '/ajax/activate_coupon',
                    data: {
                        'coupon': $('#s-balance-active-coupon').val(),


                    },
                    success: function (html1) {
                        if (html1['status'] == 1) {
                            new PNotify({
                                title: 'Ошибка!',
                                text: html1['mess'],
                                icon: 'fa-success', type: 'error', styling: 'fontawesome'
                            });

                        } else {
                            new PNotify({
                                title: 'Успешно!',
                                text: html1['mess'],
                                icon: 'fa-success', type: 'success', styling: 'fontawesome'
                            });
                            $('#my_ballace').html(html1['price'] + ' руб.');
                        }

                    }
                });
            });

        </script>


@endsection

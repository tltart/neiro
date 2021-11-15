@php

@endphp
@extends($app_chat)
@section('title')
    Виджеты

@endsection
@section('newjs')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if( Auth::user()->chat_audio==1)  chat_audio = 1;
        @else chat_audio = 0;
        @endif
                @if( Auth::user()->users_push==1) users_push = 1;
        @else users_push = 0;
        @endif

            hash = $('#temahash').val();
        hidden_user_id='{{auth()->user()->my_company_id}}';
    </script>

    <script src="https://chat.neiros.ru:6001/socket.io/socket.io.js"></script>
    <script src="/js/chat/admin.js"></script>
    <script src="/js/chat/admin_scripts.js?v={{time()}}"></script>


@endsection
@section('content')
    <input type="hidden" id="hidden_user_id" value="{{auth()->user()->my_company_id}}">
    <div class="layout js-layout layout--users-opened">
        <div class="wrapper">
            <aside class="users">
                <header class="users__header">
                    <button class="btn btn--setting js-button--setting">
                        <i class="icon-cog"></i>
                    </button>
                    <input type="text" class="form-field searchs" placeholder="Поиск">
                </header>
                <div class="users__body">
                    <div class="users__holder temaclass">
                        @foreach($temas as $tema)
                            @include('chat.chat_tema')








                        @endforeach


                    </div>
                </div>
                <div class="users__footer">
                    <nav class="mobile-nav js-mobile-nav">
                        <button class="btn mobile-nav__button js-button-users-close">
                            <i class="icon-chat"></i>
                            <span class="d-block">Чаты</span>
                        </button>
                        <button class="btn mobile-nav__button js-button--setting"><i class="icon-cog"></i>
                            <span class="d-block">Настройки</span>
                        </button>
                    </nav>
                </div>
            </aside>

            <!--------chat----------->
            <main class="chat">

                <div class="w-open-chat">
                    <img src="https://cloud.neiros.ru/global_assets/images/icon/user/dialog.svg" alt="">
                    <span>Выберите чат</span>
                    <label>Кликните по собеседнику слева, чтобы<br>
                        читать и отправлять ему сообщения</label>
                </div>



                <header class="chat__header" style="display: none">
                    @include('chat.chat_header')
                </header>

                <div class="chat__body js-chat__body" style="display: none">
                    @include('chat.chat_body')
                </div>


                <footer class="chat__footer" style="display: none">

                    @include('chat.chat_footer')
                </footer>

            </main>

            <!--------info------------>
            @include('chat.chat_right')
        </div>

        <!--------settings------------>
    @include('chat.chat_setting')

    <!--------push message------------>
    @include('chat.chat_push')
    <!--mobile navigation-->
        <!--<div class="layout__mobile-nav">-->
        <!---->
        <!--</div>-->
    </div>
    <input type="hidden" value="0" id="tektema">
    <input type="hidden" value="" id="temahash">
    <input type="hidden" value="" id="temahashmd5">


    <!-- Fieldset legend -->

@endsection
@section('skriptdop')


    <script>
var admin_print=0;
        $('body').on('click', '.chat__header__resize-button', function () {


            getuserinfo();


        });


        function getuserinfo() {
            $tema = $('#tektema').val();
            $.ajax({
                type: "POST",
                url: '/chat/getuserinfo',
                data: '&tema=' + $tema,
                success: function (html1) {
                    if (html1 == '0') {

                    } else {
                        $('.info__body').html(html1);
                    }

                }
            });
        }

        function allpage() {
            $tema = $('#tektema').val();
            $.ajax({
                type: "POST",
                url: '/chat/getuserinfourl',
                data: '&tema=' + $tema,
                success: function (html1) {

                    $('.info__body').html(html1);


                }
            });
        }

        $('body').on('click', '.js-additional-form', function () {
            $tema = $('#tektema').val();
            $.ajax({
                type: "POST",
                url: '/chat/getuserinfourladdopen',
                data: '&tema=' + $tema,
                success: function (html1) {
                    $('.js-additional-info').show();
                    $('.js-additional-form').hide();
                    $('.js-additional-info').html(html1);


                }
            });
        });
        $('body').on('click', '.js-additional-form-button', function () {
            formach = $('.additional-info__form').serialize();
            $.ajax({
                type: "POST",
                url: '/chat/addclientinfo',
                data: formach,
                success: function (html1) {

                    getuserinfo();
                    $('.js-additional-info').show();
                    $('.js-additional-form').hide();
                }


            });
            return false;
        });
        var today_mess = 0;
        var tema_search = 0;
var nv ;
var client_channel;
        function clickchattema(id) {

            tema = $(id).data('tema');
            nv=$(id).data('neiros_visit');
            client_channel=window.Echo.private('room.'+nv);
            connect_client_chat();

            $('.js-button-info-close').trigger('click');
            $.ajax({
                type: "POST",
                url: '/chat/clickchattema',
                data: '&tema=' + tema,
                success: function (html1) {
                    result = JSON.parse(html1);
                    ttttt = parsering(result['messages']);
                    $('.messages').html(ttttt)
                    $('#name_client').html(result['usermess']['name'] + ' №' + result['usermess']['hid_id'])
                    $('#statusmark' + tema).removeAttr('data-messages');
                    $('#tektema').val(tema);
                    /*  $('#temahash').val(result['hash']);
                      $('#temahashmd5').val(result['hashmd5']);*/
                    $('.tjtk').html(result['metrika_last']);

                    tema_search = result['usermess']['id'];
                    $('.chat__header').show();
                    $('.chat__body').show();
                    $('.chat__footer').show();

                    today_mess = result['today_mess'];


                    /*"*/
                    $('.user-item').removeClass('user-item--active');
                    $('#temablockid' + tema).addClass('user-item--active');

                    var divmm = $(".js-chat__body");
                    divmm.scrollTop(divmm.prop('scrollHeight'));

                    prov_operator(result['operator_id'],tema);

                }
            })


        }


    </script>

    <script>


var timer_write=0;



        $('body').on('click', '.quick-answers__item', function () {
            slovo = $(this).html();
            $('.quick-answers__button').trigger('click')

            sendmess(slovo);

        })

        function checkInput(text_from_input) {
            return /[^\s]/gim.test(text_from_input);
        }

        function sendmess(mess) {
            timer_write=0;

            if (mess !== undefined) {

                message = mess;


            } else {
                message = $('.enter-message').val();
            }

            checkInput_1 = checkInput(message)

            if (checkInput_1 === true) {
                if (message !== '') {
                    $('.emojionearea-editor').html('')
                    tema = $('#tektema').val();
                    temahashmd5 = $('#temahashmd5').val();
                    $.ajax({
                        type: "POST",
                        url: '/chat/sendmess',
                        data: '&tema=' + tema + "&message=" + message,
                        success: function (result) {
                          //  result = JSON.parse(html1);
console.log(result);

                            if (today_mess == 0) {
                                $('<div class="diliver diliver--gray"><span>Сегодня</span></div>').appendTo($(".messages"));
                                today_mess = 1;
                            }


                            $(parsering(result['messages'])).appendTo($(".messages"));
                            $('.enter-message').val('');

                            var body = document.querySelector('.js-chat__body');
                            if (body) {
                                body.scrollTop = body.scrollHeight;
                            }

                            datas = {
                                message: message,
                                hash: temahashmd5,
                                site: '',
                                admin: 1,
                                my_company_id: '{{md5($user->my_company_id)}}',
                                tip_message: 1,
                                typ: 12
                            }




                        }
                    })

                }
            } else {
                $('.emojionearea-editor').html('')
            }
        }

function send_status_admin(text){
    console.log(client_channel);
    client_channel.whisper('write')

}




        function newmessinchat(data) {
            console.log(data);
            console.log("URA");
            messfrompotok(data)

        }

        $(document).ready(function () {
            $("#forma-chat").keydown(function (event) {

                if (event.keyCode == 13 && event.ctrlKey) {
                    sendmess();
                  return;
                }


                    send_status_admin('write');


            });
        });


        ;$('body').on('click', '.chat_audio', function () {
            formdata = $('#setting_chat').serialize();
            if ($(this).prop('checked')) {
                chat_audio = 1;
            } else {
                chat_audio = 0;
            }


            $.ajax({
                type: "POST",
                url: '/setting_chat',
                data: formdata,
                success: function (html1) {


                }
            })


        });


        ;$('body').on('click', '.users_push', function () {
            formdata = $('#setting_chat').serialize();

            if ($(this).prop('checked')) {
                users_push = 1;
                set_push_permition();
            } else {
                users_push = 0;
                deleteTokenToServer();
            }

            $.ajax({
                type: "POST",
                url: '/setting_chat',
                data: formdata,
                success: function (html1) {


                }
            })


        });


        if (users_push == 1) {
            set_push_permition();
        }


        function set_push_permition() {
            messaging.requestPermission().then(function () {
                //  set_push_permition();
                // TODO(developer): Retrieve an Instance ID token for use with FCM.
                // ...
                get_token()
            }).catch(function (err) {
                console.log('Unable to get permission to notify.', err);
            });
            get_token()
            // Get Instance ID token. Initially this makes a network call, once retrieved
            // subsequent calls to getToken will return from cache.

        }

        function get_token() {
            messaging.getToken().then(function (currentToken) {
                if (currentToken) {
                    console.log(currentToken);
                    sendTokenToServer(currentToken);
                } else {
                    // Show permission request.
                    console.log('No Instance ID token available. Request permission to generate one.');
                    // Show permission UI.
                    deleteTokenToServer()

                }
            }).catch(function (err) {
                console.log('An error occurred while retrieving token. ', err);


            });
        }

        function sendTokenToServer(currentToken) {
            $.ajax({
                type: "POST",
                url: '/send_token_push',
                data: 'token=' + currentToken,
                success: function (html1) {


                }
            })
        }

        function deleteTokenToServer() {
            $.ajax({
                type: "POST",
                url: '/deleteTokenToServer',
                data: 'token=1',
                success: function (html1) {


                }
            })
        }

        $('body').on('keyup', '.searchs', function () {
            text = $(this).val();

            $.ajax({
                type: "POST",
                url: '/ajax/chatsearch',
                data: {text: text},
                success: function (html1) {

                    $('.temaclass').html(html1);

                }
            })


        })
        $('body').on('change', '.my_chat_site', function () {
            $.ajax({
                type: "POST",
                url: '/ajax/setchatsite',
                data: {id: $(this).val()},
                success: function (html1) {

                    window.location.reload()

                }
            });


        });

        $(document).on('click', '.js-chat-search__button-open', function () {

            if ($(".chat-search.js-chat-search").hasClass("chat-search--active")) {
                $('.chat-search.js-chat-search').removeClass('chat-search--active');
            } else {
                $('.chat-search.js-chat-search').addClass('chat-search--active');
            }
        })

        $('body').on('click', '#secarch_text_btn', function () {


            send_search();
        });

        $('body').on('click', '.js-chat-search__button-close', function () {

            $('#secarch_text').val('');
            send_search();
        })


        function send_search() {
            text = $('#secarch_text').val();

            $.ajax({
                type: "POST",
                url: '/ajax/setchatsitetext',
                data: {
                    text: text,
                    tema_search: tema_search

                },
                success: function (data) {
                    result = JSON.parse(data);
                    $('.messages').html(result['messages'])
                }
            });

            window.parent.document.getElementById('count_ness').innerHTML = "Текст";
        }


        $('.users__holder.temaclass').click(function () {
            $('.w-open-chat').hide();
        });

 function prov_operator(operator){
@if($fff>1)


     if(operator==''){
         Swal.fire({
             title: 'Этот клиент еще не занят другими операторами, принять клиента?',
             showDenyButton: true,
              showCancelButton: false,
             confirmButtonText: `Да начать диалог`,
             denyButtonText: `Нет спасибо`,
         }).then((result) => {
             /* Read more about isConfirmed, isDenied below */
             if (result.isConfirmed) {
                 $.ajax({
                     type: "POST",
                     url: '/chat/setoperator',
                     data: '&tema=' + tema,
                     success: function (html1) {


                     }
                     });
             } else if (result.isDenied) {
                 $('.chat__footer').hide();
             }
         })

      return ;

     };
     if(operator!='{{auth()->user()->id}}'){
         $('.chat__footer').hide();
     }




@endif
 }


    </script>

@endsection

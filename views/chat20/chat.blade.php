@php

        @endphp
@extends('chat20.app_chat')
@section('title')
    Виджеты

@endsection
@section('newjs')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="https://chat.neiros.ru:6001/socket.io/socket.io.js"></script>
    <script src="/js/chat/admin.js"></script>
    <script src="/js/chat/admin_scripts.js?v={{time()}}"></script>
@endsection
@section('content')
    @include('chat20.vue.login')
    @include('chat20.vue.allchat')



@endsection
@section('skriptdop')


    <script>
        var admin_print = 0;
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
        var nv;
        var client_channel;

        function clickchattema(id) {

            tema = $(id).data('tema');
            nv = $(id).data('neiros_visit');
            client_channel = window.Echo.private('room.' + nv);
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

                    prov_operator(result['operator_id'], tema);

                }
            })


        }


    </script>

    <script>


        var timer_write = 0;


        $('body').on('click', '.quick-answers__item', function () {
            slovo = $(this).html();
            $('.quick-answers__button').trigger('click')

            sendmess(slovo);

        })

        function checkInput(text_from_input) {
            return /[^\s]/gim.test(text_from_input);
        }

        function sendmess(mess) {
            timer_write = 0;

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
                                my_company_id: '{{md5('$user->my_company_id')}}',
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

        function send_status_admin(text) {
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

        function prov_operator(operator) {


            if (operator == '') {
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

                return;

            }
            ;
            if (operator != '{{auth()->user()->id}}') {
                $('.chat__footer').hide();
            }


        }


    </script>
    {{--Новые скрипты--}}
    <script>
          const bus = new Vue();
        axios.interceptors.request.use(
            (config) => {
                const token = localStorage.getItem("token")
                if (token) {
                    config.headers['Authorization'] = 'Bearer ' + token
                }
                return config
            },
            (error) => {
                Promise.reject(error)
            }
        )
        axios.defaults.headers.common = {'Authorization': `Bearer ` + localStorage.getItem("token")}
        Vue.component('dialogs-item', {
            props: ['dialogs', 'dialog'],
            /* data: function () {
                 return {
                     dialog: []
                 }
             },*/
            mounted() {

            },
            template: `@include('chat20.chat_tema')`,
            methods: {
                formatDate2(date) {
                  return   moment(date).format('MM/DD/YYYY');
                },
                getUserChat: function () {

                        thsi1 = this;
                        axios.post('/api/chat20/getuserchat', {
                            "id": thsi1.dialog.id,

                        })
                            .then(function (response) {
                                console.log('getuserchat');
                                console.log(response.data.messages);

                                bus.$emit('getuserchat',response.data.messages);

                            })
                            .catch(function (error) {
                                console.log(error);
                            })

                 }
                ,
            }
        })
        Vue.component('chat-dialogs', {
            props: ['messages', 'mess'],

            mounted() {

            },
            methods: {
                formatDate2(date) {
                    return   moment(date).format('h:i');
                },
            },
            template: `@include('chat20.vue.dialogs')`,

        })
        {{--@include('chat20.chat_tema')--}}
        var app = new Vue({
            el: '#vue-app',

            data: {
                loginformshow: false,
                showchat: true,
                email: '123',
                password: '123123',
                token: null,
                dialogs: [],
                messages: [],

            },
            created() {
            },
            mounted() {
                bus.$on('getuserchat', this.chatsLoad)
                //     this.get_api_key();
                token = localStorage.getItem("token");
                this.get_dialogs();

            }, methods: {

                chatsLoad(datas){
                    this.messages=datas;
                },
                get_dialogs() {
                    thsi1 = this;
                    axios.post('/api/chat20/getdialogs', {
                        "email": "ceo@wistis.ru",
                        "password": "31051988"
                    })
                        .then(function (response) {
                            console.log('123123');
                            console.log(response.data.dialogs);

                            thsi1.dialogs = response.data.dialogs

                        })
                        .catch(function (error) {
                            console.log(error);
                        })


                },

                get_api_key: function () {
                    axios.post('/api/chat20/auth', {
                        "email": "ceo@wistis.ru",
                        "password": "31051988"
                    })
                        .then(function (response) {
                            console.log(response);

                            token = localStorage.setItem('token', response.data.token);

                        })
                        .catch(function (error) {
                            console.log(error);
                        })


                },

            }

        });


    </script>
    <style>
        .form-send__smile {
            display: none;
        }

        .emojionearea-button {
            left: 7px;
            top: 12px !important;
        }

        .focused {
            outline: 0 !important;
            outline-color: transparent !important;
            outline-width: 0 !important;
            outline-style: none !important;
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0) !important;
            border: 0px;
            border-color: inherit;
            background: inherit;
        }


        .emojionearea .emojionearea-editor {
            display: block;
            height: auto;
            max-width: 774px;
            white-space: normal;
            overflow: auto;
            resize: none;
            padding-top: 17px;
            letter-spacing: 0px;
            font-size: 13px;
            font: 400 13.3333px Arial;
            background: #f5f6fa;
            border-radius: 25px;
            padding: 17px 34px;
            padding-right: 45px;
            max-height: 106px;
            overflow: auto;
            min-height: auto;
        }


        .emojionearea {
            border: 0px;
            max-height: 106px;
            border-radius: 0px;
            -webkit-box-shadow: none;
            box-shadow: none;
            overflow: initial;
        }

        .emojionearea-scroll-area::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 1px rgba(209, 209, 209, 0.3);
            background-color: #F5F5F5;
        }

        .emojionearea-scroll-area::-webkit-scrollbar-thumb {
            background-color: #00b9ee;
        }

        .emojionearea-scroll-area::-webkit-scrollbar {
            width: 10px;
            background-color: rgba(209, 209, 209, 0.3);
        }


        .emojionearea .emojionearea-editor::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 1px #ccc;
            background-color: #F5F5F5;
        }

        .emojionearea .emojionearea-editor::-webkit-scrollbar-thumb {
            background-color: #00b9ee;
        }

        .emojionearea .emojionearea-editor::-webkit-scrollbar {
            width: 6px;
            background-color: rgba(209, 209, 209, 0.3);
        }


        .emojionearea .emojionearea-picker.emojionearea-picker-position-top {
            left: 0px !important;
        }

        .icon-attach {
            margin-right: 7px;
            cursor: pointer;
        }


        .emojionearea-wrapper:after {
            right: auto;
            left: 5px;
        }


        @media (max-width: 768px) {
            .emojionearea .emojionearea-editor {
                width: 320px;
                max-width: 320px;
            }

            .form-send__attach {
                right: 20px !important;
            }
        }


    </style>



    <script>
        $(document).ready(function () {
            $(".form-send__input").emojioneArea();
        });

    </script>
    <style>
        .settings__body .select2 {
            float: right;
            min-width: 171px;
            margin-top: -6px;
        }

    </style>
@endsection

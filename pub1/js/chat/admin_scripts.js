window.Echo.private('roomadmin.' + hidden_user_id)
    .listen('.ForAdminChat', (data) => {

        console.log(data);

        if (data.type_do == 'message') {

            hoock_new_mess(data);

        }


    })
k = 0;

function connect_client_chat() {

    client_channel.listenForWhisper('write', user => {
        if (nv == user.nv) {
            if ($('div').is('.my_mess_ids')) {
                $('.message_to_ids').html(user.text + `... <img
                    src="https://cloud.neiros.ru/cdn/v1/chatv2/images/icons/icon-pancil.png" alt="">`);
            } else {


                $(`<div class="messages__row messages__row--from my_mess_ids">
    <div class="message message_from  message_to_ids" data-time="">
 ` + user.text + `... <img
                    src="https://cloud.neiros.ru/cdn/v1/chatv2/images/icons/icon-pancil.png" alt="">
    </div>
</div>`).appendTo($(".messages"));
                var body = document.querySelector('.js-chat__body');
                if (body) {
                    body.scrollTop = body.scrollHeight;
                }
            }
            k = 1000;
            $('#neiros__proces_writen_operator').show();
            return

        }
    });


};


function is_write() {
    if (k > 0) {
        k = k - 500;

    }
    if (k == 0) {
        $('.my_mess_ids').remove();
        $('#neiros__proces_writen_operator').hide();
        return;
    }

}

setInterval(is_write, 1000)


/*
Echo.join(`chat.${roomId}`)
    .here((users) => {
        //
    })
    .joining((user) => {
        console.log(user.name);
    })
    .leaving((user) => {
        console.log(user.name);
    });
*/

function hoock_new_mess(datas) {


    if (chat_audio == 1) {
        var audio = new Audio(); // Создаём новый элемент Audio
        audio.src = 'https://cloud.neiros.ru/audio/windows_8_notification-namobilu.com.mp3'; // Указываем путь к звуку "клика"
        audio.autoplay = true; // Автоматически запускаем
    }


    var now = new Date();


    input_tema = datas.tema_id;
    tip = datas.tip;

    tema = $('#tektema').val();


    if (input_tema != tema) {

        if ($("div").is('#temablockid' + input_tema)) {
            $('#temablockid' + datas.tema_id).remove();
        }

        get_mess(datas, 'get_tema');


    } else {

        get_mess(datas, 'get_mess');


    }
    //   socket.emit('my other event', { my: 'data' });

}

function get_mess(datas, type_zapros) {
    let url;
    $('.my_mess_ids').remove();
    $('#neiros__proces_writen_operator').hide();
    if (type_zapros == 'get_tema') {
        url = '/chat/get_tek_tema';
    }
    if (type_zapros == 'get_mess') {
        url = '/chat/get_tek_mess';
    }

    $.ajax({
        type: "POST",
        url: url,
        data: {
            tema: datas.tema_id,
            type_zapros: type_zapros,
            mess_id: datas.mess_id,
            tip: datas.tip
        },
        success: function (result) {
            if (type_zapros == 'get_tema') {
                $('.temaclass').prepend(result);
            }

            if (type_zapros == 'get_mess') {

                $(parsering(result['messages'])).appendTo($(".messages"));
                $('.enter-message').val('');
                $('#statusmark' + datas.tema_id).removeAttr('data-messages');

                list = document.querySelector(".messages");
                list.scrollTop = list.scrollHeight;
                bodyss = document.querySelector('.js-chat__body');
                bodyss.scrollTop = bodyss.scrollHeight;
            }


        }
    })


}

function parsering(str) {

    var re = /([^\"=]{2}|^)((https?|ftp):\/\/\S+[^\s.,> )\];'\"!?])/g;
    var subst = '$1<a href="$2" target="_blank">$2</a>';
    return str.replace(re, subst);


}

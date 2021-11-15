mass = [];
k=0;
var
    my_chennel=window.Echo.private('room.' + neiros_visit);
my_chennel.listen('.PrivateChat', (data) => {

        console.log(data);

        if (data.type_do == 'message') {
            $('.my_mess_ids').remove();
            messageReceived(data);

        }
        list = document.querySelector("#neiros__proces_writen_operator");




    }).listenForWhisper('write',data=>{
    k = 1000;

    if (!$('div').is('.my_mess_ids')) {

            $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day')
            .append(`<div class="neiros__talk_text_operator_block my_mess_ids"><div class="neiros__talk_text_operator">
<div class="neiros__talk_time_comment"></div> <div id="neiros__proces_writen_operator" style="display:block;"><img
                                    src="https://cloud.neiros.ru/cdn/v1/chatv2/images/icons/icon-pancil.png" alt="">
                            Печатает
                            ...
                        </div></div></div>`);

        list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
        list.scrollTop = list.scrollHeight;



    }




})
function is_write() {
    if (k > 0) {
        k = k - 500;

    }
    if (k == 0) {
       $('.my_mess_ids').remove();
        return;
    }

}

setInterval(is_write, 1000)


/*function sendmess_admin(datas){
console.log(datas);
    $.ajax({
        type: "POST",
        url: '/send_chat',
        data: datas,
        cache: false,
        dataType: 'json',
        processData: false, 
        contentType: false, 
        success: function (url) {


        }
    })

}*/
function conv_size(b){

	fsizekb = b / 1024;
    fsizemb = fsizekb / 1024;
	fsizegb = fsizemb / 1024;
	fsizetb = fsizegb / 1024;

	if (fsizekb <= 1024) {
        fsize = fsizekb.toFixed(3) + ' KB';
	} else if (fsizekb >= 1024 && fsizemb <= 1024) {
		fsize = fsizemb.toFixed(3) + ' MB';
	} else if (fsizemb >= 1024 && fsizegb <= 1024) {
		fsize = fsizegb.toFixed(3) + ' GB';
	} else {
		fsize = fsizetb.toFixed(3) + ' TB';
	}

    return fsize;

}


function sendmess_admin(datas,par){

  $.ajax({
        type: "POST",
        url: '/send_chat',
        data: datas,
        cache: false,
        dataType: 'json',
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false, // Так jQuery скажет серверу что это строковой запрос
        success: function (url) {
			if(par === 1){
						console.log(url);
				ext = url.ext
				message = url.message;
				name = url.name;
				size = url.size;
				size = conv_size(size);
				
				  if ($('#neiros__operator_start_dialog').is(':hidden')) {
                            $('.neiros__talk_chat').css('overflow-y', 'scroll');
                        }
							 var now = new Date();
                            if (now.getMinutes() < 10) {
                                min = '0' + now.getMinutes();
                            } else {
                                min = now.getMinutes();
                            }
                            time = now.getHours() + ':' + min;
                            closeoknooperatora();
						     if (messtoday == 0) {
                    messtoday++;

                    $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append(`  <div class="neuron__day_end" style="height: 5px;

                    border-bottom: 1px solid #d1d1d1;

                    margin-left: 15px;

                    margin-right: 15px;

                    margin-bottom: 15px;"></div>
                    <div class="neuron__talk_currend_day" style="color: #999999;

                    padding-bottom: 0px;

                    text-align: center;">Сегодня</div>`);


                    $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_operator_block"><div class="neiros__talk_text_operator"><div class="neiros__talk_time_comment">' + time + '</div>'+$chat_message_neiros+'</div></div>')

                }	
			                 $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_client_block"><div class="neiros__talk_text_client file_upload"><div class="neiros__talk_time_comment">'+time+'</div><div class="img-upload"><img src="https://cloud.neiros.ru/cdn/v1/chatv2/images/img-download.svg"></div><div class="info-img"><div class="img_name">'+name+'</div><div class="img_size"><span>'+size+'</span><a target="_blank" download="" href="'+message+'">Скачать</a></div></div></div></div>');
							 
                            list.value = '';
                            list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
                            list.scrollTop = list.scrollHeight;
							
							
							
							
							document.querySelector("#neiros__proces_writen_operator").style.display = 'none';				 
							 
							 
			}
			
			
			
			
        }
    })

}

/*Определение версии*/


    function send_status_write(event,text) {

        my_chennel.whisper(event,{
            text:text,
            nv:neiros_visit
        })

    }

function  set_timer_write(){

    timer_write=5;
}

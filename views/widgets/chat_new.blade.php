@php
    $my_metrika_id = 'none';
	$NEIROS_ID = 'none';
    $CURRENT_URL= 'none';
    if (isset($_GET['my_metrika_id'])) {
        if ($_GET['my_metrika_id'] != 'undefined') {
            $my_metrika_id = $_GET['my_metrika_id'];
        }

    }
    if (isset($_GET['NEIROS_ID'])) {
        if ($_GET['NEIROS_ID'] != 'undefined') {
            $NEIROS_ID = $_GET['NEIROS_ID'];
        }

    }
    
   if (isset($_GET['current_url'])) {
        if ($_GET['current_url'] != 'undefined') {
            $CURRENT_URL = $_GET['current_url'];
        }

    }

@endphp

        <!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>Neiros</title>

    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/emojionearea.min.css" rel="stylesheet" type="text/css">
    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/timepicki.css" rel="stylesheet" type="text/css">
    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/select2.css" rel="stylesheet" type="text/css">
    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{env('API_DOMAIN')}}/cdn/v1/chatv2/css/style_call.css" rel="stylesheet" type="text/css">


    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/jquery-2.1.1.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/jquery.inputmask.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/jquery.ddslick.min.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/emojionearea.min.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/datepicker.min.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/timepicki.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/select2.js"></script>
    <script src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/js/jquery.cookie.js"></script>
    <script src="https://chat.neiros.ru:6001/socket.io/socket.io.js"></script>
    <script src="https://chat.neiros.ru/js/chat/admin.js"></script>
    <script>
        var neiros_visit = '{{$neiros_visit}}';
        var messtoday ={{count($messages)}};
        var site='{{$site}}';
        var my_company_id='{{md5($widget_chat->my_company_id)}}';
        var my_metrika_id='{{$my_metrika_id}}';
    </script>
    
    <style>	
		       
            
            </style>
    <script src="https://chat.neiros.ru/js/chat/client_scripts.js?v={{time()}}"></script>
    <?php

    if(strstr($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'], 'iPad'))

    {


    ?>

    <style>

        select:focus, textarea:focus, input:focus, emojionearea-editor:focus, .emojionearea-editor {
            font-size: 16px !important;
        }
		
	
    </style>

    <? }
	
	 function checkLink($text){
		 		$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($text, '//cloud.neiros.ru/chat_upload/');

if ($pos != false) {
	
return 1;
}
else {
	return 0;}
		 }
	
	
function formatSize($bytes) {

    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }

    elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }

    elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }

    elseif ($bytes > 1) {
        $bytes = $bytes . ' байты';
    }

    elseif ($bytes == 1) {
        $bytes = $bytes . ' байт';
    }

    else {
        $bytes = '0 байтов';
    }

    return $bytes;
}	
	
	
function remote_filesize($url) {
    static $regex = '/^Content-Length: *+\K\d++$/im';
    if (!$fp = @fopen($url, 'rb')) {
        return false;
    }
    if (isset($http_response_header) &&
        preg_match($regex, implode("\n", $http_response_header), $matches)) {
        return (int)$matches[0];
    }
    return strlen(stream_get_contents($fp));
}	
	
    function cutLink($text)
    {
	
		
		$haystack = 'ababcd';
$needle   = 'aB';

$pos      = strripos($text, '//cloud.neiros.ru/chat_upload/');

if ($pos === false) {
    return preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<a target="_blank" href="$1://$2">$1://$2</a>$3', $text);
} else {
	
	$size = remote_filesize($text);
	$size = formatSize($size);
	$img = explode("/chat_upload/", $text);
	$img_format = explode(".", $img[1]);
	return '<div class="img-upload"><img src="'.env('API_DOMAIN').'/cdn/v1/chatv2/images/img-download.svg"></div><div class="info-img">
	<div class="img_name">'.mb_strimwidth($img_format[0], 0, 15, "...").$img_format[1].'</div>
	<div class="img_size"><span>'.$size.'</span><a target="_blank" download href="'.$text.'">Скачать</a></div>

	</div>';
/*return preg_replace("~(http|https|ftp|ftps)://(.*?)(\s|\n|[,.?!](\s|\n)|$)~", '<div class="img-upload"><img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/img-download.svg"></div>$3', $text);*/
}
		
        
    }


    ?>
</head>

<body>

<? $m = time();?>
<?
$OPERATOR_ID = '';
$chat_message = '';
$status_operator = '';


if (isset($_GET['chat_message'])) {
    if ($_GET['chat_message'] != 'undefined') {
        $chat_message = $_GET['chat_message'];
    }

}
if (isset($_GET['operator_id'])) {
    if ($_GET['operator_id'] != 'undefined') {
        $OPERATOR_ID = $_GET['operator_id'];
    }

}

if (isset($_GET['operator_id'])) {
    if ($_GET['status_operator'] != 'undefined') {
        $status_operator = $_GET['status_operator'];
    }

}

$ARRAY_ALL = json_decode($new_setting);
$OPERATOR_URL = env('API_DOMAIN').'/cdn/v1/chatv2/images/agent.png';
$OPERATOR_NAME = 'Консультант';
if ($chat_message == '') {
    $chat_message = 'Здравствуйте! Чем могу Вам помочь?';
}

if (isset($ARRAY_ALL->operator_all)) {
    if ($OPERATOR_ID != null) {
        foreach ($ARRAY_ALL->operator_all as $operator) {
            if ($OPERATOR_ID == $operator->id) {
                $OPERATOR_NAME = $operator->name;
                if ($operator->image != null) {
                    $OPERATOR_URL =  'https://disk.neiros.ru/user_upload/' . $operator->image;

                }
            }

        }
    } else {
        foreach ($ARRAY_ALL->operator_all as $operator) {
            $OPERATOR_NAME = $operator->name;
            if ($operator->image != null) {
                $OPERATOR_URL =  'https://disk.neiros.ru/user_upload/' . $operator->image;

            }
        }


    }

}
$neiros__op_active = 'neiros__op_active';
$neiros__operator = 'Онлайн';
$operator_hidden = '';
if ($status_operator == 0) {

    $chat_message = 'Здравствуйте! Сейчас в офисе ни души. Оставьте ваши контактные данные. Мы свяжемся с вами в рабочее время.';
    $OPERATOR_URL = env('API_DOMAIN').'/cdn/v1/chatv2/images/agent.png';
    $OPERATOR_NAME = 'Бот';
    $neiros__op_active = 'neiros__op_no_active';

    $neiros__operator = '<b style=" color:#FF0004">Офлайн</b>';
    $operator_hidden = 'style=" display:none;"';
}





$widget_chat_show = '';
$mobile = '';
$mobile_animation = '';
$mobile2 = '';
$mobile3 = '';
$mobile_animation2 = '';
if (isset($_GET['mobile'])) {

    if (isset($_GET['type'])) {
        if ($_GET['type'] == 'social' || $_GET['type'] == 'lidi' || $_GET['type'] == 'phone') {
            $mobile = 'mobile';
            $mobile_animation = 'neiros__slideUp';
        } else {
            $mobile2 = 'mobile_n';
            $mobile_animation2 = 'neiros__slideUp';
        }


    }
} else {
    $mobile3 = 'neiros__fadeIn';
    $mobile3 = 'neiros__fadeIn_new';
}

$callback_phone_val = '';
$callback_phone_another_val = '';
if (isset($_COOKIE['neiros__callback_phone'])) {
    $callback_phone_val = $_COOKIE['neiros__callback_phone'];
}
if (isset($_COOKIE['neiros__callback_phone_another'])) {
    $callback_phone_another_val = $_COOKIE['neiros__callback_phone_another'];
}

?>
<div id="neiros__panel_widget" class="<?=$mobile . $mobile2?>">

    <? 
	        $active_widget = 0;

        if ($widget_callbaack->status == 1) {
            $active_widget++;
        }
        if ($widget_chat->active_chat == 1) {
            $active_widget++;
        }
        if ($widget_chat->active_formback == 1) {
            $active_widget++;
        }
        if ($widget_chat->active_map == 1) {
            $active_widget++;
        }
        if ($widget_chat->active_social == 1) {
            $active_widget++;
        }
	
	
	if($mobile == ''){ ?>
    <div class="neiros__container_widget <?=$mobile3 . $mobile_animation2?>">
        <div class="neiros__closet-icon-modal"><img
                    src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/closet-icon-modal.PNG" alt=""></div>
        <? } ?>
        <? if($mobile == ''){ ?>

        <div <? if ($active_widget < 2) {
            echo 'style=" margin-bottom: 0px; "';
        } ?> class="neiros__header_pop" @if($widget_chat->phone=='') style="border:0px" @endif>


            @if( strlen($neirosphone)>5)

                <div id="neiros__header_phone"><a href="tel:{{$neirosphone}}">{{$neirosphone}}</a></div>
            @else
                <? if($widget_chat->phone != ''){ ?>
                <div id="neiros__header_phone" ><a href="tel:{{$widget_chat->phone}}">{{$widget_chat->phone}}</a>
                </div> <? } ?>
            @endif


            @if($set_oper==0)
                <div id="neiros__header_show_operator" style="display:none;">

                    @if(strlen($widget_chat->logo)<2)<img src="{{$OPERATOR_URL}}" class="neiros__operator">@else
                        <img src="{{env('API_DOMAIN')}}/user_upload/{{$widget_chat->my_company_id}}/{{$widget_chat->logo}}"
                             class="neiros__operator">
                    @endif

                    <div class="neiros__operator-text">
                        <span>{{$OPERATOR_NAME}}<div
                                    class="neiros__status_operator <?=$neiros__op_active?>" <?=$operator_hidden?>></div></span>
                        {{--$widget_chat->job--}}
                        <div>Консультант</div>
                        <div id="neiros__proces_writen_operator" style="display:none;"><img
                                    src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/icon-pancil.png" alt="">
                            Печатает
                            ...
                        </div>
                    </div>
                </div>
            @else

                <div id="neiros__header_show_operator" style="display:none;">

                    @if(strlen($tip_logo_12)<2)<img src="{{$OPERATOR_URL}}"
                                                    class="neiros__operator">@else
                        <img src="{{env('API_DOMAIN')}}/user_upload/{{$widget_chat->my_company_id}}/{{$tip_logo_12}}"
                             class="neiros__operator">
                    @endif

                    <div class="neiros__operator-text">
                        <span>{{$tip_name_12}}</span>
                        {{$tip_who_12}}
                        <div class="neiros__status_operator <?=$neiros__op_active?>" <?=$operator_hidden?>></div>
                        <div id="neiros__proces_writen_operator" style="display:none;"><img
                                    src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/icon-pancil.png" alt="">
                            Печатает
                            ...
                        </div>
                    </div>
                </div>

            @endif


        </div>
        <?


        if(isset($_GET['desctop'])){  ?>
        <div class="neiros__all-servises" <? if ($active_widget < 2) {
            echo 'style="border-bottom: 0px; margin-bottom: 0px; display:none;"';
        } ?> >
            <ul>
                @if($widget_callbaack->status==1)
                    <li class="neiros__servis-phone">
                        <div class="neiros__toltip neiros__fadeIn">Звонок</div>
                        <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/svg/telephone_white.svg" alt="">

                    </li>@endif
                @if($widget_chat->active_chat==1)  <? if($active_widget != 1){?>
                <li class="neiros__servis-chat">
                    <div class="neiros__toltip neiros__fadeIn">Чат</div>
                    <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/svg/chat_white.svg" alt=""></li><? }?>@endif
                @if($widget_chat->active_formback==1)
                    <li class="neiros__servis-lid">
                        <div class="neiros__toltip neiros__fadeIn">Заявка</div>
                        <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/svg/note_white.svg" alt=""></li>@endif
                @if($widget_chat->active_map==1)
                    <li class="neiros__servis-geo">
                        <div class="neiros__toltip neiros__fadeIn">Карта</div>
                        <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/svg/placeholder_white.svg" alt="">
                    </li>@endif
                @if($widget_chat->active_social==1)
                    <li class="neiros__servis-socialpng">
                        <div class="neiros__toltip neiros__fadeIn">Соцсети</div>
                        <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/svg/share_white.svg" alt=""></li>@endif
            </ul>
        </div>
        <? } ?>


        <? } ?>









        @if($widget_chat->active_chat==1)
            <div id="neiros__tab_chart" class="neiros__tab <? if ($_GET['type'] == 'chat') echo 'active'; ?>">
                <div id="neiros__talk_chat_box">
                    <div class="neiros__talk_chat 	<? if($active_widget < 2){?> new_hight new_hight_new <? }?>">
                        <div class="neiros__talk_day">

                            @if($is_old_client==0)

                                @if($set_oper==0)
                                    <div id="neiros__operator_start_dialog">

                                        @if(strlen($widget_chat->logo)<2)<img src="{{$OPERATOR_URL}}"
                                                                              class="neiros__operator_start">@else
                                            <img src="{{env('API_DOMAIN')}}/user_upload/{{$widget_chat->my_company_id}}/{{$widget_chat->logo}}"
                                                 class="neiros__operator_start">
                                        @endif


                                        <div class="neiros__operator-text">
                                            <div id="neiros__status_operator_of_dialog" <?=$operator_hidden?>>
                                                <div class="neiros__status_operator <?=$neiros__op_active?>"></div>
                                                <?=$neiros__operator?>
                                            </div>
                                            <span>{{$OPERATOR_NAME}}</span>
                                            {{--$widget_chat->job--}}
                                            <div>Консультант</div>

                                        </div>
                                    </div>
                                    <div id="neiros__operator_text_dialog">{{$chat_message}}
                                    </div>
                                @else


                                    <div id="neiros__operator_start_dialog">

                                        @if(strlen($tip_logo_12)<2)<img src="{{$OPERATOR_URL}}"
                                                                        class="neiros__operator_start">@else
                                            <img src="{{env('API_DOMAIN')}}/user_upload/{{$widget_chat->my_company_id}}/{{$tip_logo_12}}"
                                                 class="neiros__operator_start">
                                        @endif


                                        <div class="neiros__operator-text">
                                            <div id="neiros__status_operator_of_dialog" <?=$operator_hidden?>>
                                                <div class="neiros__status_operator <?=$neiros__op_active?>"></div>
                                                <?=$neiros__operator?>
                                            </div>
                                            <span>{{$tip_name_12}}</span>
                                            {{--$tip_who_12--}}

                                        </div>
                                    </div>
                                    <div id="neiros__operator_text_dialog">
                                        {{$tip_mess_12}}
                                    </div>






                                @endif

                            @else



                                @foreach($messages as $message)
                                    @if(!in_array(date('d.m.Y',strtotime($message->created_at)),$messages_arr_d))

                                        @if( date('d.m.Y',strtotime($message->created_at))==date('d.m.Y'))
                                            <div class="neuron__day_end" style="height: 5px;

border-bottom: 1px solid #d1d1d1;

margin-left: 15px;

margin-right: 15px;

margin-bottom: 15px;"></div>
                                            <div class="neuron__talk_currend_day" style="color: #999999;

padding-bottom: 0px;

text-align: center;">Сегодня
                                            </div>

                                        @elseif(date('d.m.Y',strtotime($message->created_at))==date('d.m.Y',strtotime('-1 day',time())))
                                            <div class="neuron__day_end" style="height: 5px;

border-bottom: 1px solid #d1d1d1;

margin-left: 15px;

margin-right: 15px;

margin-bottom: 15px;"></div>
                                            <div class="neuron__talk_currend_day" style="color: #999999;

padding-bottom: 0px;

text-align: center;">Вчера
                                            </div>
                                        @else
                                            <div class="neuron__day_end" style="height: 5px;

border-bottom: 1px solid #d1d1d1;

margin-left: 15px;

margin-right: 15px;

margin-bottom: 15px;"></div>
                                            <div class="neuron__talk_currend_day" style="color: #999999;

padding-bottom: 0px;

text-align: center;">{{date('d.m.Y',strtotime($message->created_at))}}г.
                                            </div>
                                        @endif
                                        <?php
                                        $messages_arr_d[] = date('d.m.Y', strtotime($message->created_at));
                                        ?>

                                    @endif

                                    @if($message->from>0)

                                        <div class="neiros__talk_text_operator_block">
							
                                            <div class="neiros__talk_text_operator <? if(checkLink($message->mess) === 1){ echo 'file_upload';} ?>">
                                                <div class="neiros__talk_time_comment">{{date('H:i',strtotime($message->created_at))}}
                                                </div>
                                                <? if ($message->mess == 'Здравствуйте! Чем могу Вам помочь?') {
                                                    echo $chat_message;
                                                } else {
                                                    echo cutLink($message->mess);
                                                }?>
                                            </div>
                                        </div>

                                    @else
                                        <div class="neiros__talk_text_client_block">
                                            <div class="neiros__talk_text_client <? if(checkLink($message->mess) === 1){ echo 'file_upload';} ?>">
                                                <div class="neiros__talk_time_comment">{{date('H:i',strtotime($message->created_at))}}
                                                </div><?=cutLink($message->mess) ?></div>
                                        </div>
                                    @endif

                                @endforeach

                            @endif


                        </div>
                    </div>


                    <div class="neiros__copiright_new_mobile">Чат заряжен Neiros</div>
                </div>

                <div class="neiros__send--chart-form ">
            <textarea maxlength="1000" autocomplete="off" id="neiros__send--chart-form-input"
                      placeholder="Введите сообщение..."></textarea>
                    <div id="neiros__send--chart-form_btn"></div>

                    <span class="attach">
			 		<input id="add-file" type="file" name="">
			 </span>


                </div>


            </div>
        @endif


        {{--колбек--}}
        @if($widget_callbaack->status==1)


            <div id="neiros__tab_callback" data-id="<?=$off?>" class="neiros__tab <? if ($_GET['type'] == 'phone') echo 'active'; ?>">

                <div class="neiros__callback_container  <?=$mobile_animation?>"    <? if ($off == 1){?> style="display:none" <? } ?>>

                    <div class="neiros__callback_h1">{{str_replace('|time|',$widget_chat__->callback_timer,$widget_chat->callback_start_text)}}</div>

                    <input type="text" id="neiros__callback_phone" placeholder="+7 (___) ___-__-__"
                           class="neiros__callback_input neiros__RU" value="<?=$callback_phone_val?>">
                    <!--    	<select id="neiros__select_country">
                    <option value="RU" data-imagesrc="images/country/russia.png" selected></option>
                            <option value="US" data-imagesrc="images/country/united-kingdom.png"></option>
                            </select>-->
                    <div id="neiros__select_country"></div>

                    <div id="neiros__btn_calcback">жду звонка</div>
                    <div id="neiros__countdown">{{date('00:i:s', $widget_chat->callback_timer )}}</div>
                    <div id="neiros__chose_time"><span>Выбрать удобное время</span></div>
                    <div class="neiros__chose_closet">Отмена</div>
                    <div class="neiros__copiright_new">Виджет заряжен Neiros</div>


                </div>
                <div class="neiros__callback_container_another_time" <? if ($off == 1){?> style="display:block" <? } else { ?> style="display:none;" <? } ?>>
                    <div class="neiros__callback_h1">Хотите, чтобы мы Вам перезвонили?<br>
                        Вы можете выбрать удобное время для
                        связи с нами!
                    </div>

                    <div class="neiros__callback_h1" style="display:none;">Сейчас сотрудники не в офисе. Но вы
                        можете выбрать время и мы
                        перезвоним Вам!
                    </div>

                    <input type="text" class="neiros__datepicker" placeholder="Дата" id="neiros__callback_datepicker">
                    <div class="neiros__word">в</div>
                    <input type="text" class="neiros__timepicker" placeholder="Время" id="neiros__callback_timepicker">

                    <input type="text" id="neiros__callback_phone_another" placeholder="+7 (___) ___-__-__"
                           class="neiros__callback_input neiros__RU" value="<?=$callback_phone_another_val?>"
                           style="margin-top:15px;">
                    <div id="neiros__select_country_2"></div>
                    <div id="neiros__btn_calcback_another">жду звонка</div>
                    <div class="neiros__chose_closet">Отмена</div>
                    <div class="neiros__copiright_new">Виджет заряжен Neiros</div>

                </div>
                <div class="neiros__copyright">
                    <div class="squaredTwo">
                        <input type="checkbox" value="None" id="squaredTwo" name="check" checked/>
                        <label for="squaredTwo"></label>
                    </div>
                    <div>Согласен на обработку персональных данных</div>
                </div>

            </div>@endif
        {{--колбек--}}
        {{--sms--}}
        @if($widget_chat->active_formback==1)
            <div id="neiros_tab_application" class="neiros__tab <? if ($_GET['type'] == 'lidi') echo 'active'; ?>">
                <div class="neiros__application_container <?=$mobile_animation?>">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class="neiros__application_h1">Вы можете оставить сообщение и мы
                        свяжемся с Вами как можно скорее
                    </div>
                    {{--'formback_pole_name' => $request->formback_pole_name,
                                    'formback_pole_email' => $request->formback_pole_email,
                                    'formback_pole_tema' => $request->formback_pole_tema,
                                    'formback_name_rec' => $request->formback_name_rec,
                                    'formback_email_rec' => $request->formback_email_rec,
                                    'formback_tema_rec' => $request->formback_tema_rec,--}}
                    @if($widget_chat->formback_pole_name==1)       <input type="text" placeholder="Ваше Имя"
                                                                          class="neiros__application_input"
                                                                          id="neiros__application_name" style=" "/>@else
                        <input type="hidden" placeholder="Ваше Имя" class="neiros__application_input"
                               id="neiros__application_name" style=" "/>
                    @endif
                    @if($widget_chat->formback_pole_tema==1)
                        @if(strlen($widget_chat->formback_tema)>3)
                            <select id="neiros__application_select" class="neiros__application_input">
                                <option></option>
                                @for($i=0;$i<count(explode(',',$widget_chat->formback_tema));$i++)
                                    <option value="{{explode(',',$widget_chat->formback_tema)[$i]}}">{{explode(',',$widget_chat->formback_tema)[$i]}}</option>

                                @endfor
                            </select>
                        @else <input type="hidden" class="neiros__application_input" id="neiros__application_select"
                                     style=" "/>
                        @endif
                    @else <input type="hidden" class="neiros__application_input" id="neiros__application_select"
                                 style=" "/>
                    @endif


                    @if($widget_chat->formback_pole_email==1)
                        <input type="email" placeholder="Ваш E-mail" class="neiros__application_input center__email"
                               id="neiros__application_email"/> @else
                        <input type="hidden" placeholder="Ваш E-mail" class="neiros__application_input center__email"
                               id="neiros__application_email"/>      @endif


                    <textarea maxlength="1000" autocomplete="off" id="neiros__application_text"
                              placeholder="Введите Ваше сообщение..."></textarea>
                    <div id="neiros__btn_application">отправить</div>
                    <div class="neiros__chose_closet">Отмена</div>
                    <div class="neiros__copiright_new">Виджет заряжен Neiros</div>

                </div>
                <div class="neiros__copyright">
                    <div class="squaredTwo">
                        <input type="checkbox" value="None" id="squaredTwo2" name="check" checked/>
                        <label for="squaredTwo2"></label>
                    </div>
                    <div>Согласен на обработку персональных данных</div>
                </div>
            </div>@endif
        {{--sms--}}

        @if($widget_chat->active_map==1)
            <div id="neiros_tab_geo"
                 class="neiros__tab <? if ($_GET['type'] == 'geo') echo 'active'; ?>">{!! $widget_chat->map_html !!}

                <div class="neiros__copiright_new_mobile">Виджет заряжен Neiros</div>

            </div>@endif
        @if($widget_chat->active_social==1)
            <div id="neiros_tab_social" class="neiros__tab <? if ($_GET['type'] == 'social') echo 'active'; ?>">


                <div class="neiros__social_container <?=$mobile_animation?>">
                    <div class="neiros_tab_social_desc">Вы можете связаться с нами через наши
                        официальные аккаунты:
                    </div>
                    <div class="neiros_tab_social_mobile">Напишите нам</div>
                    <div class="neiros__social_icon_container">


                        @if($widget_chat->social_tele==1)
                            <div class="neiros__social_icon"><a
                                        href="{{$widget_chat->social_tele_url}}?start={{request()->my_metrika_id}}"
                                        target="_blank" onclick="
socialclick(8)"><img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/1.png">
                                    <div>Telegram</div>
                                </a></div> @endif




                        @if($widget_chat->social_vk==1)
                            <div class="neiros__social_icon"><a href="{{$widget_chat->social_vk_url}}" target="_blank"
                                                                onclick="
socialclick(4)" data-social="vk"> <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/2.png">
                                    <div>Vkontakte</div>
                                </a></div>@endif



                        @if($widget_chat->social_ok==1)
                            <div class="neiros__social_icon"><a href="{{$widget_chat->social_ok_url}}" target="_blank"
                                                                onclick="
socialclick(6)"><img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/3.png">
                                    <div>Odnoklassniki</div>
                                </a></div>  @endif



                        @if($widget_chat->social_fb==1)
                            <div class="neiros__social_icon"><a href="{{$widget_chat->social_fb_url}}" target="_blank"
                                                                onclick="
socialclick(7)"> <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/4.png">
                                    <div>Facebook</div>
                                </a></div>@endif

                        {{--     <div class="neiros__social_icon"><a href=""><img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/5.png"><div>Skype</div></a></div>
                             <div class="neiros__social_icon"><a href=""><img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/6.png"><div>Whatsapp</div></a></div>--}}
                        @if($widget_chat->social_viber==1)

                            <div class="neiros__social_icon"><a href="{{$widget_chat->social_viber_url}}"
                                                                target="_blank" onclick="
socialclick(5)"> <img src="{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/icons/social/7.png">
                                    <div>Viber</div>
                                </a></div>   @endif


                    </div>
                    <div class="neiros__chose_closet">Отмена</div>
                    <div class="neiros__copiright_new">Виджет заряжен Neiros</div>
                </div>

            </div>

        @endif









        <? if($mobile == ''){ ?>
    </div>
    <div class="neiros__copiright_new2 <?=$mobile3?>">Виджет заряжен Neiros</div> <? } ?>
</div>

<script>
$chat_message_neiros = '<?=$chat_message?>';
    function parsering(str) {
        var re = /([^\"=]{2}|^)((https?|ftp):\/\/\S+[^\s.,> )\];'\"!?])/;
        var subst = '$1<a href="$2" target="_blank">$2</a>';
        var withlink = str.replace(re, subst);

        return withlink;
    }

    var send = 0;
    var operator_id = '{{$operator_id}}'
    if ($('#neiros__operator_start_dialog').is(':visible')) {
        /*$('.neiros__talk_chat').css('overflow-y', 'unset');*/
    }
    $('#neiros__callback_phone').keyup(function () {
        phone = $('#neiros__callback_phone').val();
        $.cookie('neiros__callback_phone', phone);
    });

    $('#neiros__callback_phone_another').keyup(function () {
        phone = $('#neiros__callback_phone_another').val();
        $.cookie('neiros__callback_phone_another', phone);
    });


    if ($("select").is("#neiros__application_select")) {


        $('#neiros__application_select').select2({
            placeholder: 'Выбрать тему обращения',
            minimumResultsForSearch: -1
        });
    }

    @if(strlen($widget_chat->formback_tema>3))



    @endif
    $('.neiros__datepicker').datepicker();

    $('.neiros__timepicker').timepicki({
        show_meridian: false,
        min_hour_value: 0,
        max_hour_value: 23,
        overflow_minutes: true,
        disable_keyboard_mobile: true
    });

    var ddData = [
        {
            text: "",
            value: 'RU',
            selected: true,
            description: "",
            imageSrc: "{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/country/russia.png"
        },
        {
            text: '',
            selected: false,
            value: 'US',
            description: "",
            imageSrc: "{{env('API_DOMAIN')}}/cdn/v1/chatv2/images/country/united-kingdom.png"
        }
    ];

    $('#neiros__chose_time').on('click', function () {
        $('.neiros__callback_container').css('display', 'none');
        $('.neiros__callback_container_another_time').css('display', 'block');
    })


    $('#neiros__select_country').ddslick({
        data: ddData,
        width: 50,
        selectText: "",
        imagePosition: "left",
        onSelected: function (selectedData) {
            selected = selectedData.selectedData.value;
            if (selected === 'US') {
                $('#neiros__callback_phone').removeClass('neiros__RU');
                $('#neiros__callback_phone').addClass('neiros__US');
                $('#neiros__callback_phone').attr('placeholder', '+3 (___) ___-__-__');
                $(".neiros__US").inputmask('remove');
                $(".neiros__US").inputmask("+3 (999) 999-99-99", {"placeholder": "+3 (___) ___-__-__"});
            }
            if (selected === 'RU') {
                $('#neiros__callback_phone').removeClass('neiros__US');
                $('#neiros__callback_phone').addClass('neiros__RU');
                $('#neiros__callback_phone').attr('placeholder', '+7 (___) ___-__-__');
                $(".neiros__RU").inputmask('remove');
                $(".neiros__RU").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
            }
        }
    });
    $('#neiros__select_country_2').ddslick({
        data: ddData,
        width: 50,
        selectText: "",
        imagePosition: "left",
        onSelected: function (selectedData) {
            selected = selectedData.selectedData.value;
            if (selected === 'US') {
                $('#neiros__callback_phone_another').removeClass('neiros__RU');
                $('#neiros__callback_phone_another').addClass('neiros__US');
                $('#neiros__callback_phone_another').attr('placeholder', '+3 (___) ___-__-__');
                $(".neiros__US").inputmask('remove');
                $(".neiros__US").inputmask("+3 (999) 999-99-99", {"placeholder": "+3 (___) ___-__-__"});
            }
            if (selected === 'RU') {
                $('#neiros__callback_phone_another').removeClass('neiros__US');
                $('#neiros__callback_phone_another').addClass('neiros__RU');
                $('#neiros__callback_phone_another').attr('placeholder', '+7 (___) ___-__-__');
                $(".neiros__RU").inputmask('remove');
                $(".neiros__RU").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
            }
        }
    });
    $('#neiros__select_country_3').ddslick({
        data: ddData,
        width: 50,
        selectText: "",
        imagePosition: "left",
        onSelected: function (selectedData) {
            selected = selectedData.selectedData.value;
            if (selected === 'US') {
                $('#neiros__application_phone').removeClass('neiros__RU');
                $('#neiros__application_phone').addClass('neiros__US');
                $('#neiros__application_phone').attr('placeholder', '+3 (___) ___-__-__');
                $(".neiros__US").inputmask('remove');
                $(".neiros__US").inputmask("+3 (999) 999-99-99", {"placeholder": "+3 (___) ___-__-__"});
            }
            if (selected === 'RU') {
                $('#neiros__application_phone').removeClass('neiros__US');
                $('#neiros__application_phone').addClass('neiros__RU');
                $('#neiros__application_phone').attr('placeholder', '+7 (___) ___-__-__');
                $(".neiros__RU").inputmask('remove');
                $(".neiros__RU").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
            }
        }
    });

    $('#neiros__select_country').ddslick();
    $(window).resize(function () {
        list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
        list.scrollTop = list.scrollHeight;

    })


    /*$('#neiros__select_country').on('click', function () {
        var ddData = $('#neiros__select_country').data('ddslick');
        console.log(ddData.selectedData.value);
    });	*/


    var matches;
    (function (doc) {
        matches =
            doc.matchesSelector ||
            doc.webkitMatchesSelector ||
            doc.mozMatchesSelector ||
            doc.oMatchesSelector ||
            doc.msMatchesSelector;
    })(document.documentElement);

    /*выбор услуги*/

    $('.neiros__all-servises li').on('click', function () {
        $('.neiros__all-servises li').removeClass('neiros__active_servis');
        $(this).addClass('neiros__active_servis');
        className = $(this).attr('class');
        $('.neiros__tab').removeClass('active');
        if (className.indexOf("neiros__servis-phone") >= 0) {
            $('#neiros__tab_callback').addClass('active');
            $('#neiros__header_show_operator').css('display', 'none');
            $('#neiros__header_phone').css('display', 'block');
            $('#neiros__callback_phone').focus();

        }
        if (className.indexOf("neiros__servis-chat") >= 0) {
            $('#neiros__tab_chart').addClass('active');
            $('#neiros__tab_chart #neiros__send--chart-form-input').focus();
            if ($("div").is("#neiros__header_phone")) {
                 if (!$('#neiros__operator_start_dialog').is(':visible')) {
                    $('#neiros__header_show_operator').css('display', 'block');
					
					<? if($active_widget < 2){?>
						 $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight_new');
						<? } ?>
                    $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight');
                    $('#neiros__header_phone').css('display', 'none');
                }
            }
        }
        if (className.indexOf("neiros__servis-lid") >= 0) {
            $('#neiros_tab_application').addClass('active');
            $('#neiros__header_show_operator').css('display', 'none');
            $('#neiros__header_phone').css('display', 'block');
            $('#neiros__application_name').focus();
        }
        if (className.indexOf("neiros__servis-geo") >= 0) {
            $('#neiros_tab_geo').addClass('active');
            $('#neiros__header_show_operator').css('display', 'none');
            $('#neiros__header_phone').css('display', 'block');
        }
        if (className.indexOf("neiros__servis-socialpng") >= 0) {
            $('#neiros_tab_social').addClass('active');
            $('#neiros__header_show_operator').css('display', 'none');
            $('#neiros__header_phone').css('display', 'block');
        }
    })


    /*cfk,fck*/











    /*cfk,fck*/


    $(window).resize(function () {
        list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
        list.scrollTop = list.scrollHeight;

    })

    var matches;
    (function (doc) {
        matches =
            doc.matchesSelector ||
            doc.webkitMatchesSelector ||
            doc.mozMatchesSelector ||
            doc.oMatchesSelector ||
            doc.msMatchesSelector;
    })(document.documentElement);





    function closeoknooperatora() {
        $("#neiros__header_phone").css('display', 'none');
        $("#neiros__header_show_operator").css('display', 'block');
        $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight');
			<? if($active_widget < 2){?>
						 $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight_new');
						<? } ?>
        $('#neiros__operator_start_dialog').hide();
        $('#neiros__operator_text_dialog').hide();
    }

    function add_comment(val, list) {

        if (val === '') {
            return false;
        } else {
            var now = new Date();
            time = now.getHours() + ':' + now.getMinutes();
            list.value = '';


        }
    }


    document.addEventListener('click', function (e) {
        if (matches.call(e.target, '.neiros__start_btn_show')) {
            div = document.querySelector(".neiros__start_btn");
            classes = div.classList;
            classes.remove("neiros__start_btn_show");
            list = document.querySelector(".neiros__start_btn img");
            list.style.display = 'block';
            list = document.querySelector("#neiros__panel_widget");
            list.style.display = 'none';
            return false;
        }
    }, false);






    var params = window
        .location
        .search
        .replace('?', '')
        .split('&')
        .reduce(
            function (p, e) {
                var a = e.split('=');
                p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );
    check = '';
    if (params['type']) {
        type = params['type'];
        if (type === 'chat') {
            $('.neiros__all-servises li').removeClass('neiros__active_servis');
            $('.neiros__servis-chat').addClass('neiros__active_servis');
            $('.neiros__tab').removeClass('active');
            $('#neiros__tab_chart').addClass('active');
            $('#neiros__tab_chart #neiros__send--chart-form-input').focus();
            check = 1;
        }
        if (type === 'phone') {
            $('.neiros__all-servises li').removeClass('neiros__active_servis');
            $('.neiros__servis-phone').addClass('neiros__active_servis');
            $('.neiros__tab').removeClass('active');
            $('#neiros__tab_callback').addClass('active');
            $('#neiros__callback_phone').focus();
        }
        if (type === 'lidi') {
            $('.neiros__all-servises li').removeClass('neiros__active_servis');
            $('.neiros__servis-lid').addClass('neiros__active_servis');
            $('.neiros__tab').removeClass('active');
            $('#neiros_tab_application').addClass('active');
            $('#neiros__application_name').focus();
        }
        if (type === 'geo') {
            $('.neiros__all-servises li').removeClass('neiros__active_servis');
            $('.neiros__servis-geo').addClass('neiros__active_servis');
            $('.neiros__tab').removeClass('active');
            $('#neiros_tab_geo').addClass('active');

        }
        if (type === 'social') {
            $('.neiros__all-servises li').removeClass('neiros__active_servis');
            $('.neiros__servis-socialpng').addClass('neiros__active_servis');
            $('.neiros__tab').removeClass('active');
            $('#neiros_tab_social').addClass('active');
        }

    }

    @if($is_old_client==1)




    if (check === 1) {
        $("#neiros__header_phone").css('display', 'none');
        $("#neiros__header_show_operator").css('display', 'block');
        $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight');
			<? if($active_widget < 2){?>
						 $('#neiros__panel_widget .neiros__talk_chat').addClass('new_hight_new');
						<? } ?>
    } else {

        $("#neiros__header_phone").css('display', 'block');
        $("#neiros__header_show_operator").css('display', 'none');
    }

    @endif


    if (params['mobile']) {
        /*	list = document.querySelector("#neiros__panel_widget .neiros__all-servises");
            list.style.display = 'none';*/
        list = document.querySelector(".neiros__talk_chat");
        classes = list.classList;
        classes.add("mobile");
        list = document.querySelector(".neiros__send--chart-form");
        classes = list.classList;
        classes.add("mobile");
        list = document.querySelector(".neiros__send--chart-form textarea");
        classes = list.classList;
        classes.add("mobile");
        list = document.querySelector("#neiros__send--chart-form_btn");
        classes = list.classList;
        classes.add("mobile");
        list = document.querySelector("#neiros__send--chart-form_btn");
        classes = list.classList;
        classes.add("mobile");
    }

    $('#neiros__btn_calcback').click(function () {


        check = 0;
        phone = $('#neiros__callback_phone').val()

        if (phone.indexOf("_") >= 0 || phone === '') {
            $('#neiros__callback_phone').addClass('errors');
            check = 1;
        } else {
            $('#neiros__callback_phone').removeClass('errors');
        }
        if ($('#squaredTwo').is(':checked')) {
            $('.neiros__copyright div').removeClass('errors-text');
        } else {
            $('.neiros__copyright div').addClass('errors-text');
            check = 1;
        }


        if (check === 0) {

            $('#neiros__callback_phone').hide();
            $('#neiros__select_country').hide();
            $('#neiros__btn_calcback').hide();
            var fiveMinutes = 60 * 5,
                display = $('#neiros__countdown');
            startTimer( {{$widget_chat->callback_timer }}, display);


            datatosend = {
                phone: $('#neiros__callback_phone').val(),
                widget: {{$widget_chat->id}},
                neiros_visit: '{{$neiros_visit}}',
                site: '{{$site}}',
                my_metrika_id: '{{$my_metrika_id}}', NEIROS_ID: '{{$NEIROS_ID}}', CURRENT_URL: '{{$CURRENT_URL}}',
                _token: $('[name=_token]').val(),
                session_id: '{{request('session_id')}}',
                promo: params['promo'],
                tip: 12,


            }


            if (send == 0) {
                send = 1;
                $.ajax({
                    type: "POST",
                    url: '/api/v1/sendcall',
                    data: datatosend,
                    success: function (html1) {


                    }
                })

            }
        }


    });


    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.text("00:" + minutes + ":" + seconds);

            if (--timer < 0) {
                display.text("00:00:00");
                timer = 0;

            }
        }, 1000);
        return 1;
    }

    /*функция отправки заказа звонка на определенноя время*/
    $('#neiros__btn_calcback_another').click(function () {


        check = 0;
        phone = $('#neiros__callback_phone_another').val()

        if (phone.indexOf("_") >= 0 || phone === '') {
            $('#neiros__callback_phone_another').addClass('errors');
            check = 1;
        } else {
            $('#neiros__callback_phone_another').removeClass('errors');
        }

        date = $('#neiros__callback_datepicker').val();
        if (date.length < 2) {
            $('#neiros__callback_datepicker').addClass('errors');
            check = 1;
        } else {
            $('#neiros__callback_datepicker').removeClass('errors');
        }

        timepic = $('#neiros__callback_timepicker').val();
        if (timepic.length < 2) {
            $('#neiros__callback_timepicker').addClass('errors');
            check = 1;
        } else {
            $('#neiros__callback_timepicker').removeClass('errors');
        }


        if ($('#squaredTwo').is(':checked')) {
            $('.neiros__copyright div').removeClass('errors-text');
        } else {
            $('.neiros__copyright div').addClass('errors-text');
            check = 1;
        }


        if (check === 0) {
            $('#neiros__callback_phone_another').hide();
            $('#neiros__callback_datepicker').hide();
            $('#neiros__callback_timepicker').hide();
            $('#neiros__select_country_2').hide();
            $('#neiros__btn_calcback_another').hide();

            $('.neiros__word').hide();


            $('.neiros__callback_h1').html('Спасибо за ваше обращение, мы перезвоним Вам в указанное время ');
            datatosend = {
                phone: $('#neiros__callback_phone_another').val(),
                date: $('#neiros__callback_datepicker').val(),
                time: $('#neiros__callback_timepicker').val(),
                widget: {{$widget_chat->id}},
                my_metrika_id: '{{$my_metrika_id}}', NEIROS_ID: '{{$NEIROS_ID}}', CURRENT_URL: '{{$CURRENT_URL}}',
                neiros_visit: '{{$neiros_visit}}',
                site: '{{$site}}',
                session_id: '{{request('session_id')}}',
                _token: $('[name=_token]').val(),
                promo: params['promo'],
                tip: 1,


            }
            if (send == 0) {
                send = 1;
                $.ajax({
                    type: "POST",
                    url: '/api/v1/widget/form/call',
                    data: datatosend,
                    success: function (html1) {
                    }
                })

            }
        }


    });
    /*Отправка формы сообщения с сайта*/
    $('#neiros__btn_application').click(function () {

        check = 0;
        if ($("input").is("#neiros__application_name")) {
            name = $('#neiros__application_name').val();

            if (name.length < 2) {
                $('#neiros__application_name').addClass('errors');
                check = 1;
            } else {
                $('#neiros__application_name').removeClass('errors');
            }
        }

        if ($("input").is("#neiros__application_email")) {
            email = $('#neiros__application_email').val();
            if (email.length < 2) {
                $('#neiros__application_email').addClass('errors');
                check = 1;
            } else {
                $('#neiros__application_email').removeClass('errors');
            }
        }

        if ($("input").is("#neiros__application_phone")) {
            phone = $('#neiros__application_phone').val();
            if (phone.length < 2) {
                $('#neiros__application_phone').addClass('errors');
                check = 1;
            } else {
                $('#neiros__application_phone').removeClass('errors');
            }
        }

        if ($("textarea").is("#neiros__application_text")) {
            text = $('#neiros__application_text').val();
            if (text.length < 2) {
                $('#neiros__application_text').addClass('errors');
                check = 1;
            } else {
                $('#neiros__application_text').removeClass('errors');
            }
        }


        if ($('#squaredTwo2').is(':checked')) {
            $('.neiros__copyright div').removeClass('errors-text');
        } else {
            $('.neiros__copyright div').addClass('errors-text');
            check = 1;
        }


        /*
            neiros__application_name
            neiros__application_select
            neiros__application_phone
            neiros__application_input
            neiros__application_text
            neiros__btn_application
			*/

        if (check === 0) {
            $('#neiros__application_name').hide();
            $('#neiros__application_select').hide();
            $('.select2').hide();
            $('#neiros__application_email').hide();
            $('#neiros__application_phone').hide();
            $('#neiros__application_text').hide();
            $('#neiros__select_country_3').hide();
            $('#neiros__btn_application').hide();
            $('.neiros__word').hide();

            $('.neiros__application_h1').html('{{$widget_chat->callback_end_text}}');
            datatosend = {
                name: $('#neiros__application_name').val(),
                email: $('#neiros__application_email').val(),
                tema: $('#neiros__application_select').val(),
                session_id: '{{request('session_id')}}',
                text: $('#neiros__application_text').val(),
                widget: {{$widget_chat->id}},
                neiros_visit: '{{$neiros_visit}}',
                site: '{{$site}}',
                my_metrika_id: '{{$my_metrika_id}}', NEIROS_ID: '{{$NEIROS_ID}}', CURRENT_URL: '{{$CURRENT_URL}}',
                _token: $('[name=_token]').val(),
                promo: params['promo'],


            }


            if (send == 0) {
                send = 1;
                $.ajax({
                    type: "POST",
                    url: '/api/v1/widget/form/mail',
                    data: datatosend,
                    success: function (html1) {


                    }
                })
            }
        }
    });




    function socialclick(ids) {
        datatosend = {
            social: ids,
            session_id: '{{request('session_id')}}',
            widget: {{$widget_chat->id}},
            neiros_visit: '{{$neiros_visit}}',
            site: '{{$site}}',
            my_metrika_id: '{{$my_metrika_id}}', NEIROS_ID: '{{$NEIROS_ID}}', CURRENT_URL: '{{$CURRENT_URL}}',
            _token: $('[name=_token]').val(),
            promo: params['promo'],
        }

        $.ajax({
            type: "POST",
            url: '/api/v1/widget/form/socialclick',
            data: datatosend,
            success: function (html1) {

            }
        })


    }

    list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
    list.scrollTop = list.scrollHeight;
    /*функция отправки заказа звонка на определенноя время*/


</script>




<style>


    @media (max-width: 450px) {
        .mobile .emojionearea-wrapper:after {
            right: auto !important;
            left: 5px !important;
        }


        .mobile .emojionearea-button {
            left: 3px !important;
            margin-right: 6px !important;
        }
    }

</style>
<script>
    let timer_write=0;

    function messageReceived(datas) {
        var now = new Date();
        time = datas.time;
        $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_operator_block"><div class="neiros__talk_text_operator"><div class="neiros__talk_time_comment">' + datas.time + '</div>' + parsering(datas.message) + '</div></div>');

        list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
        list.scrollTop = list.scrollHeight;
    }

    function parsering(str) {

        var re = /([^\"=]{2}|^)((https?|ftp):\/\/\S+[^\s.,> )\];'\"!?])/g;
        var subst = '$1<a href="$2" target="_blank">$2</a>';
        return str.replace(re, subst);

    }

    $(document).on('change','#add-file',function (event) {

        event.stopPropagation(); // Остановка происходящего
        event.preventDefault();  // Полная остановка происходящего
        file = $(this).val();
        files = this.files;
        var data = new FormData();
        $.each(files, function (key, value) {
            data.append('file', value);
        });
        data.append('neiros_visit', neiros_visit);
        data.append('site', site);
        data.append('my_company_id', my_company_id);
        data.append('tip_message', 'file');
        data.append('typ', 12);
        data.append('is_file', 1);
        data.append('my_metrika_id', my_metrika_id);
        data.append('chat_message_neiros', $chat_message_neiros);

        if ($(this).val() != '') {
			sendmess_admin(data, 1);
			 
      

        } else {


        }
    });

    $(document).ready(function () {
        $("#neiros__send--chart-form-input").emojioneArea({

            tonesStyle: "bullet",
            events: {
                emojibtn_click: function (button, event) {
                    console.log('event:emojibtn.click, emoji=' + button.children().data("name"));
                    var oneSymbol = "1";
                    countChar(oneSymbol);
                },

                keyup: function (editor, event) {

                       send_status_write('write',this.getText());



                   timer_write=3;
                    countChar(this.getText());


                    if (event.ctrlKey && event.keyCode == 13) {


                        if ($('#neiros__operator_start_dialog').is(':hidden')) {
                            $('.neiros__talk_chat').css('overflow-y', 'scroll');
                        }
                        check = 0;
                        text = this.getText();
                        checkInput_s = checkInput(text);


                        if (text.length < 1) {
                            check = 1;
                        }
                        if (checkInput_s === false) {
                            check = 1;
                            $('.emojionearea-editor').html('');
                        }
                        if (check === 0) {
                            var now = new Date();


                            if (now.getMinutes() < 10) {
                                min = '0' + now.getMinutes();
                            } else {
                                min = now.getMinutes();
                            }
                            time = now.getHours() + ':' + min;
                            closeoknooperatora();


                            var val = this.getText();
                            var val2 = parsering(this.getText());
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


                                $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_operator_block"><div class="neiros__talk_text_operator"><div class="neiros__talk_time_comment">' + time + '</div><?=$chat_message?></div></div>')

                            }

                            $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_client_block"><div class="neiros__talk_text_client"><div class="neiros__talk_time_comment">' + time + '</div>' + val2 + '</div></div>');
                            list.value = '';
                            list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
                            list.scrollTop = list.scrollHeight;

                            var data = new FormData();
                            data.append('message',val);
                            data.append('neiros_visit',neiros_visit);
                            data.append('site',site);
                            data.append('my_metrika_id',my_metrika_id);
                            data.append('my_company_id',my_company_id);
                            data.append('tip_message','message');
                            data.append('typ',12);
                            data.append('chat_message_neiros', $chat_message_neiros);
                            sendmess_admin(data, 0);


                            document.querySelector("#neiros__proces_writen_operator").style.display = 'none';



                        }
                        $(".emojionearea-editor").html('')

                    }


                }
            }
        });
        countChar($('#neiros__send--chart-form-input').val());


        $(document).ready(function () {
            $("#neiros__send--chart-form_btn").click(function (e) {
                e.preventDefault();
                $(".emojionearea-editor").html('');
                $("#neiros__send--chart-form_btn").hide();
                $(".attach").show();
                $(".emojionearea-button").css('left', '290px');
                $('.emojionearea').removeClass('emojionearea-changed');

            });
        });


    });





    // остановить вывод через 5 секунд

    function countChar(val) {
        var isEmpty = $('.emojionearea-editor').is(':empty');
        console.log(isEmpty);
        var len = val.length;
        if (len >= 1) {
            $("#neiros__send--chart-form_btn").show();
            $(".attach").hide();
            $(".emojionearea-button").css('left', '3px');
            $('.emojionearea').addClass('emojionearea-changed');


        } else {
            $("#neiros__send--chart-form_btn").hide();
            $(".attach").show();
            $(".emojionearea-button").css('left', '290px');
            $('.emojionearea').removeClass('emojionearea-changed');


        }
    }

    mass.forEach.call(
        document.querySelectorAll('.neiros__start_btn, .neiros__open__chart'), function (el) {
            el.addEventListener('click', function () {
                div = document.querySelector(".neiros__start_btn");
                classes = div.classList;
                classes.add("neiros__start_btn_show");
                list = document.querySelector(".neiros__start_btn img");
                list.style.display = 'none';
                list = document.querySelector("#neiros__panel_widget");
                list.style.display = 'block';
                list = document.querySelector("#neiros__chat_hello_window");
                list.style.display = 'none';
                return false;

            }, false);
        }
    )
    mass.forEach.call(document.querySelectorAll('.neiros__closet__hello_window'), function (el) {
        el.addEventListener('click', function () {

            list = document.querySelector("#neiros__chat_hello_window");
            list.style.display = 'none';
            return false;
        }, false);
    });

    function checkInput(text_from_input) {
        return /[^\s]/gim.test(text_from_input);
    }

    mass.forEach.call(document.querySelectorAll('#neiros__send--chart-form_btn'), function (el) {

        el.addEventListener('click', function () {
            if ($('#neiros__operator_start_dialog').is(':hidden')) {
                $('.neiros__talk_chat').css('overflow-y', 'scroll');
            }
            check = 0;
            text = $('#neiros__send--chart-form-input').val();
            checkInput_s = checkInput(text);

            if (text.length < 1) {
                check = 1;
            }
            if (checkInput_s === false) {
                check = 1;
                $('#neiros__send--chart-form-input').val('');
            }


            if (check === 0) {
                var now = new Date();


                if (now.getMinutes() < 10) {
                    min = '0' + now.getMinutes();
                } else {
                    min = now.getMinutes();
                }
                time = now.getHours() + ':' + min;
                closeoknooperatora();


                list = document.querySelector("#neiros__send--chart-form-input");
                var val = list.value;
                var val2 = parsering(list.value);

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


                    $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_operator_block"><div class="neiros__talk_text_operator"><div class="neiros__talk_time_comment">' + time + '</div><?=$chat_message?></div></div>')

                }

                $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_client_block"><div class="neiros__talk_text_client"><div class="neiros__talk_time_comment">' + time + '</div>' + val2 + '</div></div>');
                list.value = '';
                list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
                list.scrollTop = list.scrollHeight;


                var data = new FormData();
                data.append('message',val);
                data.append('neiros_visit',neiros_visit);
                data.append('site',site);
                data.append('my_metrika_id',my_metrika_id);
                data.append('my_company_id',my_company_id);
                data.append('tip_message','message');
                data.append('typ',12);
                data.append('chat_message_neiros', $chat_message_neiros);
                sendmess_admin(data, 0);


                list = document.querySelector("#neiros__proces_writen_operator");
                list.style.display = 'none';



            }


        }, false);

    });


    $('#neiros__send--chart-form-input').on('keydown', function (e) {

        if (e.ctrlKey && e.keyCode == 13) {
            if ($('#neiros__operator_start_dialog').is(':hidden')) {
                $('.neiros__talk_chat').css('overflow-y', 'scroll');
            }
            check = 0;
            text = $('#neiros__send--chart-form-input').val();
            if (text.length < 1) {
                check = 1;
            }
            if (check === 0) {
                var now = new Date();


                if (now.getMinutes() < 10) {
                    min = '0' + now.getMinutes();
                } else {
                    min = now.getMinutes();
                }
                time = now.getHours() + ':' + min;
                closeoknooperatora();


                list = document.querySelector("#neiros__send--chart-form-input");
                var val2 = parsering(list.value);
                var val = list.value;
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


                    $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_operator_block"><div class="neiros__talk_text_operator"><div class="neiros__talk_time_comment">' + time + '</div><?=$chat_message?></div></div>')

                }

                $('#neiros__talk_chat_box .neiros__talk_chat .neiros__talk_day').append('<div class="neiros__talk_text_client_block"><div class="neiros__talk_text_client"><div class="neiros__talk_time_comment">' + time + '</div>' + val2 + '</div></div>');
                list.value = '';
                list = document.querySelector("#neiros__talk_chat_box .neiros__talk_chat");
                list.scrollTop = list.scrollHeight;


                var data = new FormData();
                data.append('message',val);
                data.append('neiros_visit',neiros_visit);
                data.append('site',site);
                data.append('my_metrika_id',my_metrika_id);
                data.append('my_company_id',my_company_id);
                data.append('tip_message','message');
                data.append('typ',12);
                data.append('chat_message_neiros', $chat_message_neiros);
                sendmess_admin(data, 0);





                list = document.querySelector("#neiros__proces_writen_operator");
                list.style.display = 'none';



            }
        }

    });
<? if($widget_callbaack->status == 1){ ?>
	$('#neiros__header_phone').on('click', function(event){
		event.preventDefault()
		$('.neiros__servis-phone').click();
		})
	
	
	<? } 
	
	?>
</script>

</body>
</html>
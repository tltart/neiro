
<? 
$comment_active = '';
$comment_value = '';
$email_value = '';
$email_active = '';
$name_active = '';
$name_value = '';
$phone_active = '';
$phone_value = '';
$text = '';
$text_button = '';
$text_button_massenger = '';
$title = '';
$title_massenger = '';
$messenge = '';
$fb = false;
$telegram = false;
$vk = false;
$viber = false;
if(isset($kwiz['step4']['comment']['active'])){
	$comment_active = $kwiz['step4']['comment']['active'];
} 
if(isset($kwiz['step4']['comment']['value'])){
	$comment_value = $kwiz['step4']['comment']['value'];
} 
if(isset($kwiz['step4']['email']['value'])){
	$email_value = $kwiz['step4']['email']['value'];
}
if(isset($kwiz['step4']['email']['active'])){
	$email_active = $kwiz['step4']['email']['active'];
} 
if(isset($kwiz['step4']['name']['active'])){
	$name_active = $kwiz['step4']['name']['active'];
} 
if(isset($kwiz['step4']['name']['value'])){
	$name_value = $kwiz['step4']['name']['value'];
}
if(isset($kwiz['step4']['phone']['active'])){
	$phone_active = $kwiz['step4']['phone']['active'];
} 
if(isset($kwiz['step4']['phone']['value'])){
	$phone_value = $kwiz['step4']['phone']['value'];
}

if(isset($kwiz['step4']['text'])){
	$text = $kwiz['step4']['text'];
}

if(isset($kwiz['step4']['text_button'])){
	$text_button = $kwiz['step4']['text_button'];
}
if(isset($kwiz['step4']['text_button_massenger'])){
	$text_button_massenger = $kwiz['step4']['text_button_massenger'];
}

if(isset($kwiz['step4']['title'])){
	$title = $kwiz['step4']['title'];
}

if(isset($kwiz['step4']['title_massenger'])){
	$title_massenger = $kwiz['step4']['title_massenger'];
}
if(isset($kwiz['step4']['messenge'])){
	$messenge = $kwiz['step4']['messenge'];
}

if(isset($kwiz['step4']['messenge'])){
	$messenge = $kwiz['step4']['messenge'];
}
if(isset($kwiz['step4']['active_massenger']['fb']) || isset($kwiz['step4']['active_massenger']['telegram']) || isset($kwiz['step4']['active_massenger']['vk']) || isset($kwiz['step4']['active_massenger']['viber'])){
$fb = false;
$telegram = false;
$vk = false;
$viber = false;
}
?>


<div id="collapse_kviz_4" class="panel-collapse collapse" role="tabpane1"
     aria-labelledby="heading_kviz_4" aria-expanded="false" style="height: 0px;">

    <div class="panel-body" style="padding-top:0px">
        <div class="cont-btn-content col-xs-12 cont-btn-content-contact">
            <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz"
                 style="margin-top:0px">Укажите, какие контактные данные требуется собирать
            </div>
            <div class="kviz-input-block-contact-left">
                <input type="text" class="form-control form-control-text" placeholder="Имя"
                       name="name" value="<?=$name_value;?>">
                <div class="switchery-xs-new-contact"><span class="switchery-xs-new ">
                 <input <? if($name_active == true){ echo 'checked';} ?> type="checkbox" class="js-switch "
                                                                     name="name_active"></span></div>
            </div>
            <div class="kviz-input-block-contact-right">
                <input type="text" class="form-control form-control-text "
                       placeholder="E-mail" name="email" value="<?=$email_value;?>">
                <div class="switchery-xs-new-contact"><span class="switchery-xs-new ">
                 <input type="checkbox" class="js-switch " <? if($email_active == true){ echo 'checked';} ?> name="email_active"></span></div>
            </div>

            <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Укажите, какие
                дополнительные данные требуется собирать
            </div>
            <div class="kviz-input-block-contact-left">
                <input type="text" class="form-control form-control-text "
                       placeholder="Номер телефона" name="phone" value="<?=$phone_value;?>">
                <div class="switchery-xs-new-contact"><span class="switchery-xs-new ">
                 <input checked type="checkbox" class="js-switch " <? if($phone_active == true){ echo 'checked';} ?> name="phone_active"></span></div>
            </div>
            <div class="kviz-input-block-contact-right">
                <input type="text" class="form-control form-control-text "
                       placeholder="Комментарии" name="comment" value="<?=$comment_value;?>">
                <div class="switchery-xs-new-contact"><span class="switchery-xs-new ">
                 <input type="checkbox" class="js-switch " <? if($comment_active == true){ echo 'checked';} ?>  name="comment_active"></span></div>
            </div>


            <div class="on-of-chatbot-block">
                Отправлять в чат-бот <span class="switchery-xs-new switchery-chatbot-block">
                 <input id="chatbot-block-on" type="checkbox" <? if(isset($kwiz['step4']['send'])){if($kwiz['step4']['send'] == true){ echo 'checked';}}?>  class="js-switch validation-val-kviz-checked"
                                                                     name="send_to_chatbot"></span>
            </div>

            <div class="on-of-chatbot-block-tab" <? if(isset($kwiz['step4']['send'])){if($kwiz['step4']['send'] == true){ echo 'style="display:block"';}else{echo 'style="display:none"';}} else{?> style="display:none" <? }?>>
                <div class="kviz-input-block-contact-left" style="width:100%">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                        Заголовок страницы мессенджеров
                    </div>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="Куда присылать результаты?" name="title_massenger" value="<?=$title_massenger?>">

                </div>

                <div class="kviz-input-block-contact-left" style="width:100%">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Текст
                        на кнопке мессенджеров
                    </div>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="Отправить" name="text_button_massenger" value="<?=$text_button_massenger?>">

                </div>

                <div class="block-icon-messeger">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                        Использовать мессенджеры
                    </div> <div class="block-messeger-li">
                        <div data-name="fb"  class="fb-messeger <? if($fb == true){ echo 'active';} ?>"></div>
                        <div data-name="telegram" class="telegram-messeger <? if($telegram == true){ echo 'active';} ?>"></div>
                        <div data-name="vk" class="vk-messeger <? if($vk == true){ echo 'active';} ?>"></div>
                        <div data-name="viber" class="viber-messeger <? if($viber == true){ echo 'active';} ?>"></div>
                    </div>
                </div>

            </div>


            <div class="panel-otobragenie panel-otobragenie-kviz-dop col-xs-12">


                <div class="panel-header">

                    <div class="block-header block-header-2"><span
                                class="insert-img-text-k"> <span class="text__header">Текст формы финальной странцы</span></span>
                    </div>
                </div>

                <div class="panel-body-panel col-xs-12 start-page-kviz">

                    <div class="kviz-input-block">
                        <label>Заголовок</label>
                        <input type="text" class="form-control form-control-text validation-val-kviz"
                               placeholder="Спасибо за ваши ответы!" name="title"
                               value="<?=$title?>">
                    </div>

                    <div class="kviz-input-block">
                        <label>Текст</label>
                        <input type="text" class="form-control form-control-text validation-val-kviz"
                               placeholder="Заполните форму, чтобы получить результ прохождения теста"
                               name="text" value="<?=$text?>">
                    </div>

                    <div class="kviz-input-block">
                        <label>Текст на кнопке</label>
                        <input type="text" class="form-control form-control-text validation-val-kviz"
                               placeholder="Получить результаты" name="text_button" value="<?=$text_button?>">
                    </div>

                </div>

            </div>


            <div class="panel-otobragenie panel-otobragenie-kviz-dop col-xs-12">


                <div class="panel-header">

                    <div class="block-header block-header-2"><span
                                class="insert-img-text-k"> <span class="text__header">После отправки формы</span></span>
                    </div>
                </div>

                <div class="panel-body-panel col-xs-12 start-page-kviz">

                    <div class="kviz-input-block">
                        <label>Сообщение после отправки формы</label>
                        <input type="text" class="form-control form-control-text validation-val-kviz"
                               placeholder="Спасибо! Ожидайте ответа" name="messenge" value="<?=$messenge?>">
                    </div>


                </div>

            </div>

        </div>
        <div class="banel-body-footer">
            <button type="button" class="btn btn-primary save-setings   save-setings-kviz">Сохранить</button>
        </div>


    </div>
</div>
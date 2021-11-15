<div class="panel panel-default new-panel-default">


    <div class="panel-heading" role="tab" id="heading-33">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-33"
           aria-expanded="false" aria-controls="collapse-33">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Выбор рабочего времени</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>


    <div id="collapse-33" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-33"
         aria-expanded="false" style="height: 0px;">

        <form name="formawork" name="formawork">
            <input type="hidden" name="form_action" value="formawork_1">
            <input type="hidden" name="widget" value="{{$widget->id}}">
            <input type="hidden" name="my_company_id" value="{{$widget->my_company_id}}">


            <div class="panel-body" style="padding-top:0px">

                <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                    <div class="tab-content-block active">
                        <div class="label-form-name">Выберите промежутки рабочего времени</div>

                        <div class="all_time_block">

                            <?

                            /*			if(empty(get_object_vars($fields))){
                                        echo '<div class="on_of_nambers col-xs-12" style="margin-bottom:15px;">
                    <div class="form__block" style="width: 157px;"><select class="form-control select7-list" name="day[]">

                        <option value="all">Каждый день</option>
                        <option value="all_5" selected>Будни</option>
                        <option value="all_2">Выходные</option>
                        <option value="1">Понедельник</option>
                        <option value="2">Вторник</option>
                        <option value="3">Среда</option>
                        <option value="4">Четверг</option>
                        <option value="5">Пятница</option>
                        <option value="6">Суббота</option>
                        <option value="7">Воскресенье</option>
                    </select></div>
                    <div class="form__block" style="    width: 100px;"><select class="form-control select8-list" name="hour[]">

                        <option value="0">0:00</option>
                        <option value="1">1:00</option>
                        <option value="2">2:00</option>
                        <option value="3">3:00</option>
                        <option value="4">4:00</option>
                        <option value="5">5:00</option>
                        <option value="6">6:00</option>
                        <option value="7">7:00</option>
                        <option value="8">8:00</option>
                        <option value="9">9:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22">22:00</option>
                        <option value="23">23:00</option>
                    </select></div>
                    <div class="form__block" style="    width: 100px;"><select class="form-control select8-list" name="hour_end[]">

                      <option value="0">0:00</option>
                        <option value="1">1:00</option>
                        <option value="2">2:00</option>
                        <option value="3">3:00</option>
                        <option value="4">4:00</option>
                        <option value="5">5:00</option>
                        <option value="6">6:00</option>
                        <option value="7">7:00</option>
                        <option value="8">8:00</option>
                        <option value="9">9:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22">22:00</option>
                        <option value="23">23:00</option>
                    </select></div>
                    <div class="form__block form__block_small"><img class="user-btn delete-namber"
                                                                    src="/global_assets/images/icon/user/trash.svg"></div>
                </div>';
                                            }*/

                            ?>



                            @foreach($fields as $cost)
                                <input type="hidden" name="id[]" value="{{$cost->id}}">
                                <input type="hidden" name="is_work[]" value="1">
                                <div class="on_of_nambers col-xs-12" style="margin-bottom:15px;">
                                    <div class="form__block" style="width: 157px;">

                                        <select class="form-control select7-list" name="day[]">

                                            <option value="all">Каждый день</option>
                                            <option value="all_5">Будни</option>
                                            <option value="all_2">Выходные</option>
                                            <option value="1" @if($cost->day==1) selected @endif>Понедельник</option>
                                            <option value="2" @if($cost->day==2) selected @endif>Вторник</option>
                                            <option value="3" @if($cost->day==3) selected @endif>Среда</option>
                                            <option value="4" @if($cost->day==4) selected @endif>Четверг</option>
                                            <option value="5" @if($cost->day==5) selected @endif>Пятница</option>
                                            <option value="6" @if($cost->day==6) selected @endif>Суббота</option>
                                            <option value="7" @if($cost->day==7) selected @endif>Воскресенье</option>
                                        </select>
                                    </div>

                                    <div class="form__block" style="    width: 100px;">

                                        <select class="form-control select8-list" name="hour[]">


                                            @for($i=0;$i<=24;$i++)
                                                <option value="{{$i}}" @if($i==$cost->hour) selected @endif> {{$i}}:00
                                                </option>
                                            @endfor

                                        </select>
                                    </div>

                                    <div class="form__block" style="    width: 100px;">
                                        <select class="form-control select8-list" name="hour_end[]">

                                            @for($i=0;$i<=24;$i++)
                                                <option value="{{$i}}" @if($i==$cost->hour_end) selected @endif> {{$i}}
                                                    :00
                                                </option>
                                            @endfor

                                        </select>
                                    </div>


                                    <div class="form__block form__block_small">

                                        <img class="user-btn delete-namber"
                                             src="/global_assets/images/icon/user/trash.svg">
                                    </div>

                                </div>
                            @endforeach
                        </div>


                        <div class="col-xs-12 add_sourse_block">
                            <div class="add_sourse add_time_call">
                                <div class="cont__left">+</div>
                                <div class="cont_right">Добавить время</div>
                            </div>
                        </div>

                    </div>


                </div>


                <div class="banel-body-footer">
                    <button type="button" class="btn btn-primary save-setings   w_safebutton">Сохранить</button>
                </div>
            </div>

        </form>


    </div>
</div>


<div class="panel panel-default new-panel-default">
    <div class="panel-heading" role="tab" id="heading-1">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
           aria-expanded="false" aria-controls="collapse-1">
            <div class="number-accardion"><img src="/global_assets/images/icon/dispatcher.svg"></div>
            <div class="h-1">Добавление номера для приема звонка</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>


    <div id="collapse-1" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-1"
         aria-expanded="false" style="height: 0px;">


        <div class="panel-body" style="padding-top:0px">
            <form id="callbackosnovnoe" name="callbackosnovnoe">

                <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                    <div class="tab-content-block active">

                        <input type="hidden" class="form-control" name="id"
                               value="{{$widget_vk->id}}">
                        <input type="hidden" class="form-control" name="form_action"
                               value="callbackosnovnoe">
                        <div class="label-form-name">Укажите номер телефона для приема звонков от клиентов</div>

                        <div class="all_nambers_block">
                            <?php /*?>                        <? if(empty(get_object_vars($routings))){
							$rend = time();
							echo '<div class="on_of_nambers col-xs-12">
    <div class="form__block form__block_select_neiros">
        <select class="form-control select4-list" name="callback_tip[\'n'.$rend.'\']">
            <option value="0" >Телефон</option>
            <option value="1" >SIP</option>
            <option value="2"  >SIP Neiros</option>
        </select>
    </div>
    <div class="form__block ">

        <input type="text" class="form-control form-control-text" name="phone_to_call[\'n'.$rend.'\']"
               placeholder="+7 (___) ___ __ __" >
    </div>
	<div class="form__block form__block_sip_neiros" style="display:none">
	<div><span>Адрес:</span> IP ADRES</div>
	<div><span>Пользователь:</span> <span class="nom-neiros">500213</span></div>
	</div>

    <div class="form__block form__block_small">
        <input type="hidden" name="status[\'n'.$rend.'\']" value="0" >
        <span class="switchery-xs"><input  type="checkbox" checked  class="js-switch" data-id="" name="status[\'n'.$rend.'\']" value="1" ></span>
    </div>

<div class="neiros-sip-show col-xs-12" style="display:none">Оплата за минуты не взымается. По указанным ниже параметрам можно подключить<br> soft phone или Вашу АТС. Звонки будут переводится на подключенное устройство.</div>
</div>';}
							 ?><?php */?>


                            @foreach($routings as $item)

                                @php   $aster=new \App\Http\Controllers\AsteriskController();
        $sip_number =$aster->create_sip();  @endphp
                                <div class="on_of_nambers col-xs-12">
                                    <div class="form__block form__block_select_neiros">

                                        <select class="form-control select4-list select_sipNeiros"
                                                name="callback_tip[{{$item->id}}]">
                                            <option></option>
                                            <option value="0" @if($item->callback_tip==0) selected @endif>Телефон
                                            </option>
                                            <option value="1" @if($item->callback_tip==1) selected @endif>SIP</option>
                                            <option value="2" @if($item->callback_tip==2) selected @endif>SIP Neiros
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form__block ">

                                        <input type="text"
                                               class="form-control class_hidenrte form-control-text <? if ($item->callback_tip == 1 || $item->callback_tip == 2) {
                                                   echo 'form-control-text-number';
                                               } else {
                                                   echo 'form-control-text-number-mask';
                                               } ?>" name="phone_to_call[{{$item->id}}]"
                                               @if($item->callback_tip==2) style="display: none"
                                               @endif       placeholder="+7 (___) ___ __ __"
                                               value="{{$item->phone_to_call}}">
                                    </div>
                                    <div class="form__block form__block_sip_neiros"
                                         @if($item->callback_tip!=2) style="display:none" @endif>
                                        <div><span>Адрес:</span> pbx.neiros.ru</div>
                                        <div><span>Пользователь:</span> <span
                                                    class="nom-neiros neiros_sip_login_1">@if(isset($sip_number['number'])){{$sip_number['number']}} @endif</span>
                                        </div>
                                        <div><span>Пароль:</span> <span
                                                    class="nom-neiros neiros_sip_password_1">@if(isset($sip_number['password'])){{$sip_number['password']}} @endif</span>
                                        </div>
                                    </div>
                                    <div class="form__block form__block_small">
                                        <input type="hidden" name="status[{{$item->id}}]" value="0">
                                        <span class="switchery-xs"><input type="checkbox" class="js-switch" data-id=""
                                                                          name="status[{{$item->id}}]" value="1"
                                                                          @if($item->status==1) checked @endif></span>
                                    </div>
                                    <div class="form__block form__block_small">

                                        <img class="user-btn delete-namber"
                                             src="/global_assets/images/icon/user/trash.svg">
                                    </div>
                                    <div class="neiros-sip-show col-xs-12" style="display:none">Оплата за минуты не
                                        взымается. По указанным ниже параметрам можно подключить<br> soft phone или Вашу
                                        АТС. Звонки будут переводится на подключенное устройство.
                                    </div>
                                </div>
                            @endforeach
                        </div>


                        <div class="col-xs-12 add_sourse_block">
                            <div class="add_sourse add_number_call">
                                <div class="cont__left">+</div>
                                <div class="cont_right">Добавить номер</div>
                            </div>
                        </div>


                        {{--<div class="col-xs-12 zvonok-block">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Показывать посетителю 1 раз в день:</div>
                            </div>
                            <div class="form__block" style="    width: 137px; margin-top: 8px;">
                                --}}{{--@if(auth()->user()->getglobalsetting->where('skey','callbach_who_call_first')->first()->value==1)--}}{{--

                                <input type="hidden" name="everyday" value="0">
                                <span class="switchery-xs"><input type="checkbox" class="js-switch" data-id=""
                                                                  name="everyday" value="1"
                                                                  @if($widget_vk->everyday==1) checked @endif></span>


                            </div>
                        </div>--}}
                        <div class="col-xs-12 zvonok-block">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Сначала звонить:</div>
                            </div>
                            <div class="form__block" style="    width: 137px;">
                                {{--@if(auth()->user()->getglobalsetting->where('skey','callbach_who_call_first')->first()->value==1)--}}
                                <select class="form-control select5-list" name="catch_who_call_first">
                                    <option></option>
                                    <option value="1" @if($catch_who_call_first==1) selected @endif>Клиенту
                                    </option>
                                    <option value="0" @if($catch_who_call_first==0) selected @endif>Оператору
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="col-xs-12 zvonok-block" style="margin-top:30px;">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Телефон который увидит клиент:</div>
                            </div>
                            <div class="form__block " style="width:165px">

                                <input style="text-align: left;" type="text"
                                       class="form-control form-control-text text-phone-leed"
                                       name="catch_aou" value="{{$catch_aou}}" placeholder="+7 (___) ___ __ __">
                            </div>


                        </div>
                        <div class="col-xs-12 zvonok-block" style="margin-top:30px;">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Время до соединения:</div>
                            </div>
                            <div class="form__block " style="width:65px">

                                <input type="text" class="form-control form-control-text text-left" placeholder="00"
                                       name="callback_timer" value="{{$widget_vk->callback_timer}}">
                            </div>
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">секунд</div>
                            </div>

                        </div>

                        <div class="col-xs-12 zvonok-block" style="margin-top:30px;">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Время открытия в секундах:</div>
                            </div>
                            <div class="form__block " style="width:65px">

                                <input type="text" class="form-control form-control-text text-left" placeholder="00"
                                       name="timer" value="{{$widget_vk->timer}}">
                            </div>
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">секунд</div>
                            </div>

                        </div>
                        <div class="col-xs-12 zvonok-block" style="margin-top:30px;">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Выбор голоса:</div>
                            </div>
                            <div class="form__block" style="    width: 137px;">
                                {{--@if(auth()->user()->getglobalsetting->where('skey','callbach_who_man_wooman')->first()->value==1) checked="checked"
                                                               @endif --}}
                                <select class="form-control select6-list" name="catch_who_man_wooman">
                                    <option></option>
                                    <option value="0" @if($catch_who_man_wooman==0) selected @endif>Женский
                                    </option>
                                    <option value="1" @if($catch_who_man_wooman==1) selected @endif>Мужской
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row mt-30 col-xs-12">
                            <label class="col-lg-5 control-label">Включить колбек с формы:</label>
                            <div class="col-lg-7">
                                <div class="checkbox checkbox-switchery">
                                    <label class="add-number-new-checkbox label-dir">
                                        <input type="hidden" name="callback_form_form" value="0">
                                        <input type="checkbox" class="switchery dircheck" name="callback_form_form"
                                               id="callback"
                                               @if(isset($widget_js->params['callback'])&&$widget_js->params['callback']==1) checked
                                               @endif  value="1">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-30 col-xs-12">
                            <div class="col-md-12 row mb-20">
                                <label class="col-lg-12 control-label control-label-inline">Текст перед вводом номера: </label>
                                <button type="button" data-trigger="click" class="tooltip-icon-info btn btn-default btn-sm" data-toggle="tooltip" title="" data-original-title="Для вставки времени в текст используйте |time|">
                                    <img src="/global_assets/images/icon/info.svg" alt="">
                                </button>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="callback_start_text"
                                           id="callback_start_text"
                                           value="{{$widget_chat_call->callback_start_text}}">

                                </div>

                            </div>
                        </div>

                        <div class="col-xs-12 zvonok-block">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Отправлять уведомления на E-mail:</div>
                            </div>
                            <div class="form__block" style="    width: 137px; margin-top: 8px;">
                                {{--@if(auth()->user()->getglobalsetting->where('skey','callbach_who_call_first')->first()->value==1)--}}

                                <input type="hidden" name="dop_form_email_status" value="0">
                                <span class="switchery-xs"><input type="checkbox" class="js-switch" data-id=""
                                                                  name="dop_form_email_status" value="1"
                                                                  @if($widget_vk->dop_form_email_status==1) checked @endif></span>
                            </div>
                        </div>
                        <div class="form-group row mt-30 col-xs-12">
                            <label class="col-lg-4 control-label"><span class="text-form-block">E-mail для уведомлений:</span></label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="dop_form_email" id="callback_timer"
                                           value="{{$widget_vk->dop_form_email}}">

                                </div>

                        </div>

                    </div>


                </div>


                <div class="banel-body-footer">
                    <button type="button" class="btn btn-primary save-setings w_safebutton">Сохранить</button>
                </div>
            </form>
        </div>


    </div>
</div>


{{--Дополнительные поля--}}
<script>

    $('.add_time_call').on('click', function () {


        $('.all_time_block').append(`<div class="on_of_nambers col-xs-12" style="margin-bottom:15px;">
    <div class="form__block" style="width: 157px;"><select class="form-control select7-list" name="day[]">

        <option value="all">Каждый день</option>
        <option value="all_5">Будни</option>
        <option value="all_2">Выходные</option>
        <option value="1">Понедельник</option>
        <option value="2">Вторник</option>
        <option value="3">Среда</option>
        <option value="4">Четверг</option>
        <option value="5">Пятница</option>
        <option value="6">Суббота</option>
        <option value="7">Воскресенье</option>
    </select></div>
    <div class="form__block" style="    width: 100px;"><select class="form-control select8-list" name="hour[]">

        <option value="0">0:00</option>
        <option value="1">1:00</option>
        <option value="2">2:00</option>
        <option value="3">3:00</option>
        <option value="4">4:00</option>
        <option value="5">5:00</option>
        <option value="6">6:00</option>
        <option value="7">7:00</option>
        <option value="8">8:00</option>
        <option value="9">9:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>
        <option value="22">22:00</option>
        <option value="23">23:00</option>
    </select></div>
    <div class="form__block" style="    width: 100px;"><select class="form-control select8-list" name="hour_end[]">

      <option value="0">0:00</option>
        <option value="1">1:00</option>
        <option value="2">2:00</option>
        <option value="3">3:00</option>
        <option value="4">4:00</option>
        <option value="5">5:00</option>
        <option value="6">6:00</option>
        <option value="7">7:00</option>
        <option value="8">8:00</option>
        <option value="9">9:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>
        <option value="22">22:00</option>
        <option value="23">23:00</option>
    </select></div>
    <div class="form__block form__block_small"><img class="user-btn delete-namber"
                                                    src="/global_assets/images/icon/user/trash.svg"></div>
</div>`)
        $(".select7-list").select2({
            placeholder: 'Будни',
            minimumResultsForSearch: -1
        })

        $(".select8-list").select2({
            placeholder: '8:00',
            minimumResultsForSearch: -1
        })


    })

    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    $('.add_number_call').on('click', function () {
        Rand = Date.now()


        var is_random = getRandomInt(99999990);
        $('.all_nambers_block').append(`<div class="on_of_nambers col-xs-12">
    <div class="form__block form__block_select_neiros">
        <select class="form-control select4-list select_sipNeiros" name="callback_tip['n` + is_random + `']">
            <option value="0" >Телефон</option>
            <option value="1" >SIP</option>
            <option value="2"  >SIP Neiros</option>
        </select>
    </div>
    <div class="form__block ">

        <input type="text" class="form-control form-control-text form-control-text-number-mask class_hidenrte" name="phone_to_call['n` + is_random + `']"
               placeholder="+7 (___) ___ __ __" >
    </div>
    <div class="form__block form__block_small">
        <input type="hidden" name="status['n` + is_random + `']" value="0" >
        <span class="switchery-xs"><input  checked type="checkbox" class="js-switch` + is_random + `" data-id="" name="status['n` + is_random + `']" value="1" ></span>
    </div>
		<div class="form__block form__block_sip_neiros" style="display:none">
	<div><span>Адрес:</span> pbx.neiros.ru</div>
	<div><span>Пользователь:</span> <span class="nom-neiros neiros_sip_login_1"></span></div>
	<div><span>Пароль:</span> <span class="nom-neiros neiros_sip_password_1"></span></div>
	</div>
    <div class="form__block form__block_small">

        <img class="user-btn delete-namber" src="/global_assets/images/icon/user/trash.svg">
    </div>
<div class="neiros-sip-show col-xs-12" style="display:none">Оплата за минуты не взымается. По указанным ниже параметрам можно подключить<br> soft phone или Вашу АТС. Звонки будут переводится на подключенное устройство.</div>
</div>
</div>`);
        $(".select4-list").select2({
            placeholder: 'Телефон',
            minimumResultsForSearch: -1
        })

        var elems = document.querySelectorAll('.js-switch' + is_random + '');

        for (var i = 0; i < elems.length; i++) {
            var switchery = new Switchery(elems[i], {size: 'small', color: '#00B9EE'});
        }

        $(".on_of_nambers input[name=\"phone_to_call['n" + is_random + "']\"]").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
    })


    var elems = document.querySelectorAll('.js-switch');

    for (var i = 0; i < elems.length; i++) {
        var switchery = new Switchery(elems[i], {size: 'small', color: '#00B9EE'});
    }


    $(".select4-list").select2({
        placeholder: 'Телефон',
        minimumResultsForSearch: -1
    })
    $(".select5-list").select2({
        placeholder: 'Клиенту',
        minimumResultsForSearch: -1
    })
    $(".select6-list").select2({
        placeholder: 'Женский',
        minimumResultsForSearch: -1
    })

    $(".select7-list").select2({
        placeholder: 'Будни',
        minimumResultsForSearch: -1
    })

    $(".select8-list").select2({
        placeholder: '8:00',
        minimumResultsForSearch: -1
    })

    function show_tab(id) {

        if ($('#' + id).prop('checked')) {
            valu = 1;
            $('[data-mytab=' + id + ']').show();
        } else {
            valu = 0;
            $('[data-mytab=' + id + ']').hide();
        }


    }

    $(".on_of_nambers .form-control-text-number-mask").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});

    $("#callback_phone0").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
    $(".text-phone-leed").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});


    $(document).on('change', '.select4-list', function () {
        val = $('option:selected', this).val()
        sel = $(this).closest('.on_of_nambers').find('.form-control-text');
        sel.inputmask('remove');
        $(this).closest('.on_of_nambers').find('.neiros-sip-show').css('display', 'none')
        $(this).closest('.on_of_nambers').find('.form__block_sip_neiros').css('display', 'none')
        if (val === '0') {
            sel.val('')
            sel.attr('placeholder', '+7 (___) ___-__-__')

            sel.inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
            ;
        }
        if (val === '1') {
            sel.attr('placeholder', '')
        }
        if (val === '2') {
            sel.attr('placeholder', '')
            $(this).closest('.on_of_nambers').find('.neiros-sip-show').css('display', 'block')
            $(this).closest('.on_of_nambers').find('.form__block_sip_neiros').css('display', 'block')


        }

    })

    $(".tooltip-icon-info").tooltip();
</script>
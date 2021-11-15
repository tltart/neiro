<div id="WidgetModal3" class="modal WidgetModalNew fade ClientInfoModal lids-neiros">
    <div class="modal-dialog">
        <form id="create_routing_form">
            <div class="modal-content" style="height: 100vh">
                <!-- Заголовок модального окна -->
                <input type="hidden" name="ar_id" value="{{$rout->id}}">
                <input type="hidden" name="widget_call_track" value="{{$widget_call_track->id}}">
                <input type="hidden" name="setings-add-nomer" id="setings-add-nomer_val"
                       value="{{$rout->{'setings-add-nomer'} }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="name-block-fixed">
                        <div class="col-xs-12">
                            <div class="h1-modal pos-left" style="width: 90%"><input type="text"
                                                                                     class="form-control new-scenariy"
                                                                                     placeholder="Новый сценарий"
                                                                                     name="name"
                                                                                     value="{{$rout->name}}">
                                <span></span></div>

                          <?php /*?><button type="button" class="btn btn-primary widget-status-btn"
								data-id="">Подключить</button><?php */?>
                        </div>
                      <?php /*?> <div class="col-sm-7 col-xs-12">
							<div class="h1-modal pos-right">Активность</div>
						</div><?php */?>
                    </div>


                    <div class="col-xs-12 accordion-setings" style="padding-top:20px;">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <!--TAB 1-->

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-1">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-1"
                                       aria-expanded="false" aria-controls="collapse-1">
                                        <div class="number-accardion"><img src="/global_assets/images/icon2/1.svg">
                                        </div>
                                        <div class="h-1">Подключение номеров</div>
                                        <div class="descr-text">Какое-то краткое краткое описание</div>
                                    </a>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse" role="tabpane1"
                                     aria-labelledby="heading-1"
                                     aria-expanded="false" style="height: 0px;">

                                    <div class="panel-body">
                                        <div id="setings-add-nomer" class="cont-btn col-xs-12">
                                            <button type="button" data-id="tab-add-nomers"
                                                    class="btn btn-primary   @if($rout->{'setings-add-nomer'}=='tab-add-nomers') active @endif">
                                                Добавить
                                                номера
                                            </button>
                                            <button type="button" data-id="tab-add-nomer"
                                                    class="btn btn-primary @if($rout->{'setings-add-nomer'}=='tab-add-nomer') active @endif">
                                                Добавление
                                                номера
                                            </button>
                                            <button type="button" data-id="tab-my-nomer"
                                                    class="btn btn-primary @if($rout->{'setings-add-nomer'}=='tab-my-nomer') active @endif">
                                                Свои
                                                номера
                                            </button>
                                        </div>
                                        <div id="setings-add-nomer-content" class="cont-btn-content col-xs-12">
											<span class="switchery-xs"><input checked type="checkbox" class="js-switch"
                                                                              data-id=""
                                                                              name="is_default"></span>

                                            <div id="tab-add-nomers"
                                                 class="tab-content-block @if($rout->{'setings-add-nomer'}=='tab-add-nomers') active @endif">
                                                <div class="form__block">
                                                    <div class="label-form-name">Выберите город</div>
                                                    <select class="form-control select3-list" name="region"
                                                            autocomplete="off">
                                                        <option value="0"></option>
                                                        @foreach($widget_calltrack_regions as $region)
                                                            <option value="{{$region->code}}">{{$region->region}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form__block form__block_number">
                                                    <div class="label-form-name">Кол-во</div>
                                                    <input type="number" name="amount"
                                                           class="form-control form-control-number" value="1">
                                                </div>
                                            </div>
                                            <div id="tab-add-nomer"
                                                 class="tab-content-block  @if($rout->{'setings-add-nomer'}=='tab-add-nomer') active @endif">


                                                <div class="dropdown add-user-new add-number-new">
                                                    <button id="dLabel" class="btn btn-success" type="button"
                                                            data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                        Выберите добавленные номера
                                                    </button>
                                                    <ul class="dropdown-menu" id="imp_fee_numbers_list"
                                                        aria-labelledby="dLabel">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="tab-my-nomer"
                                                 class="tab-content-block  @if($rout->{'setings-add-nomer'}=='tab-my-nomer') active @endif">
                                                <div class="form__block form__block-tags">
                                                    @php
                                                        $mk=\App\Widgets_phone::where('routing',$rout->id)->where('is_client_number',1)->pluck('input')->toArray();
                                                    @endphp
                                                    <div class="label-form-name">Введите подключенные номера</div>
                                                    <input type="text" class="form-control form-control-text input-tags"
                                                           placeholder="749975978805,.." name="my_number"
                                                           @if($mk) value="{{implode(',',$mk)}}" @endif>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="banel-body-footer">
                                            <button type="button" class="btn btn-primary save-setings">Продолжить
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--TAB 2-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-2">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-2"
                                       aria-expanded="false" aria-controls="collapse-2">
                                        <div class="number-accardion"><img src="/global_assets/images/icon2/2.svg">
                                        </div>
                                        <div class="h-1">Настройка переадресации звонков</div>
                                        <div class="descr-text">Какое-то краткое краткое описание</div>
                                    </a>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse" role="tabpane1"
                                     aria-labelledby="heading-2"
                                     aria-expanded="false" style="height: 0px;">

                                    <div class="panel-body">

                                        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                                            <div class="tab-content-block active ">
                                                <div class="label-form-name">Укажите номер телефона для переадресации
                                                    звонков
                                                </div>
                                                <div class="all_nambers_block">
                                                    @if(is_array($rout->tip_redirect))
                                                        @foreach($rout->tip_redirect as $i =>$valur)
                                                            <div class="on_of_nambers">
                                                                <div class="form__block form__block_select_neiros">

                                                                    <select class="form-control select4-list select_sipNeiros"
                                                                            name="ar_reditrect[]">
                                                                        <option></option>
                                                                        <option value="0"
                                                                                @if($valur==0) selected @endif>
                                                                            Телефон
                                                                        </option>
                                                                        <option value="1"
                                                                                @if($valur==1) selected @endif>
                                                                            SIP
                                                                        </option>
                                                                        <option value="2"
                                                                                @if($valur==2) selected @endif>
                                                                            SIP Neiros
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                                <div class="form__block ">
                                                                    @php
                                                                        $widget_all = \App\Widgets::where('my_company_id',
                                                                        auth()->user()->my_company_id)->where('sites_id', auth()->user()->site)->where('tip',
                                                                        2)->first();
                                                                    @endphp
                                                                    <input id="ar_phone_redirect_mask" type="text"
                                                                           class="form-control form-control-text <? if ($valur == 1 || $valur == 2 || $valur == 3) {
                                                                             echo 'form-control-text-number';
                                                                           } else {
                                                                             echo 'form-control-text-number-mask';
                                                                           } ?>"
                                                                           name="ar_phone_redirect[]"
                                                                           @if($valur!=2) placeholder="+7 (___) ___ __ __"
                                                                           value="{{$rout->number_to[$i]}}"

                                                                           @else
                                                                           @if(isset($sip_number['number'])){{$sip_number['number']}} value="{{$sip_number['number']}}"
                                                                           style="display: none" @endif

                                                                            @endif

                                                                    >
                                                                </div>
                                                                <div class="form-block">

                                                                    <input name="time_call[]"
                                                                           @if(is_array($rout->time_call)&&isset($rout->time_call[$i]))
                                                                           value="{{$rout->time_call[$i]}}"
                                                                         @endif
                                                                           class="form-control form-control-text count_time" type="text">
                                                                </div>
                                                                <div class="form__block form__block_sip_neiros"
                                                                     @if($valur!=2)
                                                                     style="display:none" @endif style="width:230px">
                                                                    <div><span>Адрес:</span> pbx.neiros.ru</div>
                                                                    <div><span>Пользователь:</span> <span
                                                                                class="nom-neiros neiros_sip_login_1">@if(isset($sip_number['number'])){{$sip_number['number']}}
                                                                            @endif</span></div>
                                                                    <div><span>Пароль:</span> <span
                                                                                class="nom-neiros neiros_sip_password_1">@if(isset($sip_number['password'])){{$sip_number['password']}}
                                                                            @endif</span></div>

                                                                </div>

                                                                <div class="form__block form__block_small">

														<span class="switchery-xs"><input checked type="checkbox"
                                                                                          name="status[]"
                                                                                          class="js-switch"
                                                                                          data-id=""></span>
                                                                </div>
                                                                <div class="form__block form__block_small">

                                                                    <img class="user-btn delete-namber"
                                                                         src="/global_assets/images/icon/user/trash.svg">
                                                                </div>
                                                                <div class="neiros-sip-show col-xs-12"
                                                                     @if($valur!=2) style="display:none"@endif>


                                                                    Оплата за минуты не взымается. По указанным ниже
                                                                    параметрам можно подключить<br> soft phone
                                                                    или Вашу АТС. Звонки будут переводится на
                                                                    подключенное устройство.
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    @else
                                                        <div class="on_of_nambers col-xs-12">
                                                            <div class="form__block form__block_select_neiros">

                                                                <select class="form-control select4-list select_sipNeiros"
                                                                        name="ar_reditrect[]">
                                                                    <option></option>
                                                                    <option value="0"
                                                                            @if($rout->tip_redirect==0) selected @endif>
                                                                        Телефон
                                                                    </option>
                                                                    <option value="1"
                                                                            @if($rout->tip_redirect==1) selected @endif>
                                                                        SIP
                                                                    </option>
                                                                    <option value="2"
                                                                            @if($rout->tip_redirect==2) selected @endif>
                                                                        SIP Neiros
                                                                    </option>

                                                                </select>
                                                            </div>
                                                            <div class="form__block ">
                                                                @php
                                                                    $widget_all = \App\Widgets::where('my_company_id',
                                                                    auth()->user()->my_company_id)->where('sites_id', auth()->user()->site)->where('tip',
                                                                    2)->first();
                                                                @endphp
                                                                <input id="ar_phone_redirect_mask" type="text"
                                                                       class="form-control form-control-text <? if ($rout->tip_redirect == 1 || $rout->tip_redirect == 2 || $rout->tip_redirect == 3) {
                                                                         echo 'form-control-text-number';
                                                                       } else {
                                                                         echo 'form-control-text-number-mask';
                                                                       } ?>"
                                                                       name="ar_phone_redirect[]"
                                                                       @if($rout->tip_redirect!=2) placeholder="+7 (___) ___ __ __"
                                                                       value="{{$rout->number_to}}"

                                                                       @else
                                                                       @if(isset($sip_number['number'])){{$sip_number['number']}} value="{{$sip_number['number']}}"
                                                                       style="display: none" @endif

                                                                        @endif  >

                                                            </div>
                                                            <div class="form-block">
                                                                <input name="time_call" value="" class="form-control form-control-text" type="text">
                                                            </div>
                                                            <div class="form__block form__block_sip_neiros"
                                                                 @if($rout->tip_redirect!=2)
                                                                 style="display:none" @endif style="width:230px">
                                                                <div><span>Адрес:</span> pbx.neiros.ru</div>
                                                                <div><span>Пользователь:</span> <span
                                                                            class="nom-neiros neiros_sip_login_1">@if(isset($sip_number['number'])){{$sip_number['number']}}
                                                                        @endif</span></div>
                                                                <div><span>Пароль:</span> <span
                                                                            class="nom-neiros neiros_sip_password_1">@if(isset($sip_number['password'])){{$sip_number['password']}}
                                                                        @endif</span></div>

                                                            </div>

                                                            <div class="form__block form__block_small">

														<span class="switchery-xs"><input checked type="checkbox"
                                                                                          name="status[]"
                                                                                          class="js-switch"
                                                                                          data-id=""></span>
                                                            </div>
                                                            <div class="form__block form__block_small">

                                                                <img class="user-btn delete-namber"
                                                                     src="/global_assets/images/icon/user/trash.svg">
                                                            </div>
                                                            <div class="neiros-sip-show col-xs-12"
                                                                 @if($rout->tip_redirect!=2) style="display:none"@endif>


                                                                Оплата за минуты не взымается. По указанным ниже
                                                                параметрам можно подключить<br> soft phone
                                                                или Вашу АТС. Звонки будут переводится на подключенное
                                                                устройство.
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-xs-12 add_sourse_block">
                                                    <div class="add_sourse add_number_call">
                                                        <div class="cont__left">+</div>
                                                        <div class="cont_right">Добавить номер</div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                                            <div class="tab-content-block  active">
                                                <div class="label-form-name">Звонить</div>
                                                <div class=" ">
                                                    <div class="form__block form__block_select_neiros">

                                                        <select class="form-control select4-list  " name="call_same_time">
                                                            <option value="0" @if($rout->call_same_time==0) selected @endif >Одновременно</option>
                                                            <option value="1" @if($rout->call_same_time==1) selected @endif >Поочереди</option>



                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                        @if(count($groups)>0)
                                            <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                                                <div class="tab-content-block  active">
                                                    <div class="label-form-name">Группа</div>
                                                    <div class=" ">
                                                        <div class="form__block form__block_select_neiros">

                                                            <select class="form-control select4-list  " name="group_id">
                                                                <option value="">Без группы</option>
                                                                @foreach($groups as $group)
                                                                    <option value="{{$group->id}}"
                                                                            @if($rout->group_id==$group->id) selected @endif>
                                                                        {{$group->name}}</option>
                                                                @endforeach


                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                              @if($rout->group_id&&$callback)
                                                    <div class="tab-content-block  active">
                                                        <div class="label-form-name"></div>
                                                        <div class=" ">
                                                            <div class="form__block">
                                                    <input type="checkbox" name="is_for_callback" value="1" @if($rout->is_for_callback==1) checked @endif>использовать для коллбека

                                                            </div>
                                                        </div>
                                                    </div>
                                              @endif
                                                {{--$callback--}}


                                            </div>@endif


                                        <div class="banel-body-footer">
                                            <button type="button" class="btn btn-primary save-setings">Продолжить
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--TAB 3-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-3">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-3"
                                       aria-expanded="false" aria-controls="collapse-3">
                                        <div class="number-accardion"><img src="/global_assets/images/icon2/3.svg">
                                        </div>
                                        <div class="h-1">Выбор типа колтрекинга</div>
                                        <div class="descr-text">Какое-то краткое краткое описание</div>
                                    </a>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse" role="tabpane1"
                                     aria-labelledby="heading-3"
                                     aria-expanded="false" style="height: 0px;">

                                    <div class="panel-body">

                                        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                                            <div class="label-form-name" style="padding-bottom:10px;">Выберите тип
                                                коллтрекинга
                                            </div>
                                            <input
                                                    type="hidden" name="ar_tip_calltrack" class="ar_tip_calltrack"
                                                    value="{{$rout->tip_calltrack}}">
                                            <div class="cont-btn col-xs-12" id="type-calltrecing-cont">
                                                <button type="button"
                                                        class="btn btn-primary @if($rout->tip_calltrack==1) active @endif"
                                                        data-val="1">Динамический
                                                </button>
                                                <button type="button"
                                                        class="btn btn-primary @if($rout->tip_calltrack==2) active @endif"
                                                        data-val="2">Статический
                                                </button>
                                            </div>


                                        </div>


                                        <div class="banel-body-footer">
                                            <button type="button" class="btn btn-primary save-setings">Продолжить
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--TAB 4-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-4">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-4"
                                       aria-expanded="false" aria-controls="collapse-4">
                                        <div class="number-accardion"><img src="/global_assets/images/icon2/4.svg">
                                        </div>
                                        <div class="h-1">Настройки источников трафика</div>
                                        <div class="descr-text">Какое-то краткое краткое описание</div>
                                    </a>
                                </div>
                                <div id="collapse-4" class="panel-collapse collapse" role="tabpane1"
                                     aria-labelledby="heading-4"
                                     aria-expanded="false" style="height: 0px;">

                                    <div class="panel-body">

                                        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                                            <div class="tab-content-block active">
                                                <div class="label-form-name">Выберите источники</div>


                                                <div class="all_sourses">
                                                    @if(is_array($routecanal))
                                                        @for($i=0;$i<count($routecanal);$i++)
                                                            <div class="on_of_nambers col-xs-12">

                                                                <div class="form__block ">

                                                                    <input type="text"
                                                                           class="form-control form-control-text"
                                                                           placeholder="Значение">
                                                                </div>
                                                                <div class="form__block">
                                                                    <select class="form-control select5-list"
                                                                            name="ar_canals_dinamic[]">
                                                                        <option></option>
                                                                        @foreach($witget_canals as $item)
                                                                            <option value="{{$item->id}}"
                                                                                    @if( $item->id==$routecanal[$i]) selected
                                                                                    @endif>{{$item->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>


                                                                <div class="form__block form__block_small">

															<span class="switchery-xs"><input checked type="checkbox"
                                                                                              class="js-switch"
                                                                                              data-id=""></span>
                                                                </div>
                                                                <div class="form__block form__block_small">

                                                                    <img class="user-btn delete-namber"
                                                                         src="/global_assets/images/icon/user/trash.svg">
                                                                </div>

                                                            </div>
                                                        @endfor
                                                    @else

                                                    @endif

                                                </div>

                                                <div class="col-xs-12 add_sourse_new">
                                                    <div class="add_sourse">
                                                        <div class="cont__left">+</div>
                                                        <div class="cont_right">Добавить источник</div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                        <div class="banel-body-footer">
                                            <button type="button" class="btn btn-primary save-setings">Продолжить
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--TAB 5-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-5">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#collapse-5"
                                       aria-expanded="false" aria-controls="collapse-5">
                                        <div class="number-accardion"><img src="/global_assets/images/icon2/5.svg">
                                        </div>
                                        <div class="h-1">Условия подмены номеров</div>
                                        <div class="descr-text">Какое-то краткое краткое описание</div>
                                    </a>
                                </div>
                                <div id="collapse-5" class="panel-collapse collapse" role="tabpane1"
                                     aria-labelledby="heading-5"
                                     aria-expanded="false" style="height: 0px;">

                                    <div class="panel-body">

                                        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">

                                            <div class="tab-content-block active">
                                                <div class="label-form-name">Укажите условие для подмены номеров</div>
                                                <div class="container_phone_new">
                                                    @if(is_array($all_class_replace))
                                                        @for($k=0;$k<count($all_class_replace);$k++)
                                                            <div class="on_of_nambers">
                                                                <div class="form__block">

                                                                    <select class="form-control select6-list"
                                                                            name="ar_class_replace_type[]">


                                                                        <option value="."
                                                                                @if($all_class_replace[$k]->ar_class_replace_type=='.') selected
                                                                                @endif>Class
                                                                        </option>
                                                                        <option value="#"
                                                                                @if($all_class_replace[$k]->ar_class_replace_type=='#') selected
                                                                                @endif>id
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form__block ">

                                                                    <input type="text"
                                                                           class="form-control form-control-text"
                                                                           placeholder=""
                                                                           name="ar_class_replace[]"
                                                                           value="{{$all_class_replace[$k]->ar_class_replace}}">
                                                                </div>

                                                                <div class="form__block form__block_small">

                                                                    <img class="user-btn delete-namber"
                                                                         src="/global_assets/images/icon/user/trash.svg">
                                                                </div>

                                                            </div>
                                                        @endfor
                                                    @endif


                                                </div>


                                                <div class="col-xs-12 add_sourse_block">
                                                    <div class="add_sourse add_numbers">
                                                        <div class="cont__left">+</div>
                                                        <div class="cont_right">Добавить условие</div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12"
                                                     style="padding-left:0px; padding-right:0px; margin-top:30px;">

                                                    <div class="label-form-name">Выберите формат номера</div>
                                                    <div class="form__block">
                                                        <select class="form-control select6-list" name="ar_phone_type">
                                                            <option value="1"
                                                                    @if($rout->ar_phone_type==1) selected @endif >+7 XXX
                                                                XXX-XX-XX
                                                            </option>
                                                            <option value="2"
                                                                    @if($rout->ar_phone_type==2) selected @endif>+7
                                                                (XXX) XXX-XX-XX
                                                            </option>
                                                            <option value="3"
                                                                    @if($rout->ar_phone_type==3) selected @endif >8 XXX
                                                                XXX-XX-XX
                                                            </option>
                                                            <option value="4"
                                                                    @if($rout->ar_phone_type==4) selected @endif>8 (XXX)
                                                                XXX-XX-XX
                                                            </option>
                                                        </select>
                                                    </div>

                                                </div>


                                            </div>

                                        </div>


                                        <div class="banel-body-footer">
                                            <button type="button" class="btn btn-primary save-setings">Продолжить
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="form-group footer-button">
                        <div class="col-xs-12">

                            <button type="button" class="btn btn-primary  add_scenarij ">
                              <? if ($rout->name != '') {
                                echo 'Сохранить сценарий';
                              } else {
                                echo 'Создать сценарий';
                              }?>
                            </button>
                            <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">
                                Закрыть
                            </button>
                        </div>

                    </div>


                </div>


            </div>
        </form>


    </div>
</div>


</script>

<link href="/css/inputTags.css" rel="stylesheet" type="text/css">
<script src="/js/inputTags.jquery.js"></script>
<script>
    $(document).ready(function () {
        $('.input-tags').inputTags({
            max: 500,
        });
    });
    $('.add_number_call').on('click', function () {
        Rand = Date.now()


        var is_random = getRandomInt(99999990);
        $('.all_nambers_block').append(`<div class="on_of_nambers col-xs-12">
    <div class="form__block form__block_select_neiros">
        <select class="form-control select4-list select_sipNeiros" name="ar_reditrect[]">
            <option value="0" >Телефон</option>
            <option value="1" >SIP</option>
            <option value="2"  >SIP Neiros</option>
        </select>
    </div>
    <div class="form__block ">

        <input type="text" class="form-control form-control-text form-control-text-number-mask class_hidenrte" name="ar_phone_redirect[]"
               placeholder="+7 (___) ___ __ __" >
    </div>
   <div class="form-block"> <input name="time_call[]" value="" class="form-control form-control-text count_time" type="text">
                                                                </div>
    <div class="form__block form__block_small">
        <input type="hidden" name="status['n` + is_random + `']" value="0" >
        <span class="switchery-xs"><input  checked type="checkbox" class="js-switch` + is_random + `" data-id="" name="status[]" value="1" ></span>
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
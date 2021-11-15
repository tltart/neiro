@if($for_view)
    <div class="panel panel-default new-panel-default">
        <div class="panel-heading" role="tab" id="heading-255">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-255"
               aria-expanded="false" aria-controls="collapse-255">
                <div class="number-accardion"><img src="/global_assets/images/icon/settings chat.svg" alt=""></div>
                <div class="h-1">Настройки</div>
                <div class="descr-text">Основные настройки чата</div>
            </a>
        </div>


        <div id="collapse-255" class="panel-collapse collapse" role="tabpane2" aria-labelledby="heading-255">
            <div class="panel-body">
                @endif
                @include('modal.add_operator')
                <form id="wchat" name="wchat">
                    <input type="hidden" class="form-control" name="id"
                           value="{{$widget_vk->id}}" id="rtutu">
                    <input type="hidden" class="form-control" name="form_action"
                           value="wchat_osn_2">
                    <div class="form-group row mb-30">
                        <label class="col-lg-4 control-label">Создавать сделку :</label>
                        <div class="col-lg-8">
                            <div class="checkbox checkbox-switchery">
                                <label class="add-number-new-checkbox label-dir">
                                    <input type="hidden" name="create_project" value="0">
                                    <input type="checkbox" class="switchery dircheck" id="create_project"
                                           name="create_project" value="1"
                                           @if($widget_vk->create_project==1) checked="checked"
                                           @endif  data-id="{{$widget->id}}">
                                    <span class="checkmark"></span>

                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-30">
                        <label class="col-lg-4 control-label">Включить уведомление в браузере:</label>
                        <div class="col-lg-4">
                            <div class="checkbox checkbox-switchery">
                                <label class="add-number-new-checkbox label-dir">

                                    <input type="checkbox" class="switchery dircheck" id="rr" onclick="subscribe();return false;"
                                           name="rr" value="1"
                                           @if($prov_google_token==1) checked="checked"
                                            @endif >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30">
                        <div class="col-md-12">
                            <div class="form-group row mb-30">
                                <label class="col-lg-4 control-label"><span class="text-form-block">Телефон :</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           value="{{$widget_vk->phone}}">

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label class="col-lg-4 control-label"><span class="text-form-block">Онлайн оператора(минуты) :</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="operator_time" id="operator_time"
                                           value="{{$widget_vk->operator_time}}">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row mb-30">
                                <label class="col-lg-4 control-label"><span class="text-form-block">E-mail для уведомлений:</span></label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="email" id="email"
                                           value="{{$widget_vk->email}}" required>

                                </div>

                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary w_safebutton ">Сохранить<i
                                                class="icon-arrow-right14 position-right "></i></button>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                    </div>
                </form>
                @if($for_view)
            </div>
        </div>
    </div>@endif


{{--Дополнительные поля--}}

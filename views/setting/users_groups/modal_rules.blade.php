<div class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading_kviz_5" aria-expanded="false"
     style="height: 0px; display:block">
    <div class="panel-body" style="padding-top:0px">
        <form id="integrationadwords" name="integrationadwords">

            <input type="hidden" class="form-control" name="id"
                   value="{{$group->id}}">
            <input type="hidden" class="form-control" name="form_action"
                   value="save_group_rules">

            <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                <div class="tab-content-block active">


                    <div class="text-h1-fo-select-panel" style="font-family: 'Raleway Medium';
    color: #333333;
    font-size: 15px;">Адрес текущей страницы
                    </div>
                    <div class="show-chat-operator-all">
                        @if(is_array($group->rules)&&count($group->rules)>0&&isset($group->rules['rule'])&&count($group->rules['rule'])>0)
                            @foreach($group->rules['rule'] as $i=> $rule)
                                <div class="pravilo-block col-xs-12">
                                    <div class="select-panel-blok col-sm-5" style="display:none;">
                                        <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                            <button class="btn btn-success" type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">Адрес текущей страницы
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dLabel">

                                                <li class="t__3 active"><label class="add-number-new-checkbox">Адрес
                                                        текущей страницы<input value="url-page" checked=""
                                                                               type="checkbox" name="url_page[]"><span
                                                                class="checkmark"></span></label></li>

                                            </ul>
                                        </div>


                                    </div>




                                    <div class="col-sm-12 zvonok-block two-panel-result-show select-panel-blok-time url-page"
                                         style="display: block; padding-left:0px;">


                                        <div class="dropdown add-user-new add-number-new select-panel-blok-input"
                                             style="display: block;">
                                            <button class="btn btn-success" type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                @if($rule=='%LIKE%')содержит
                                                строку@endif
                                                @if($rule=='NOT%LIKE%')не содержит строку@endif
                                                @if($rule=='==')это точно@endif
                                                @if($rule=='!=')не являеться@endif


                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                <li  @if($rule=='%LIKE%')class="active" @endif><label class="add-number-new-checkbox">содержит
                                                        строку<input type="checkbox" name="rule[]" value="%LIKE%"

                                                        @if($rule=='%LIKE%')  checked="" @endif
                                                        ><span class="checkmark"></span></label>
                                                </li>
                                                <li   @if($rule=='NOT%LIKE%')class="active" @endif> <label class="add-number-new-checkbox">не содержит строку<input
                                                                type="checkbox" name="rule[]"   @if($rule=='NOT%LIKE%')  checked="" @endif value="NOT%LIKE%"><span
                                                                class="checkmark"></span></label></li>
                                                <li   @if($rule=='==')class="active" @endif><label class="add-number-new-checkbox">это точно<input
                                                                type="checkbox" name="rule[]" value="==" @if($rule=='==')  checked="" @endif><span
                                                                class="checkmark"></span></label></li>
                                                <li   @if($rule=='!=')class="active" @endif><label class="add-number-new-checkbox">не являеться<input value="!=" @if($rule=='!=')  checked="" @endif
                                                                                                              type="checkbox"
                                                                                                              name="rule[]"><span
                                                                class="checkmark"></span></label></li>

                                            </ul>
                                        </div>

                                        <div class="form__block ">

                                            <input type="text" class="form-control form-control-text" placeholder=""
                                                   name="value[]" @if(isset($group->rules['value'][$i])) value="{{$group->rules['value'][$i]}}"@endif>
                                        </div>


                                    </div>


                                    <div class="delete_pravilo"><img src="/global_assets/images/icon/user/trash.svg">
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>

                    <div class="col-xs-12 add_sourse_block">
                        <div class="add_sourse add_time_call" id="add_pravilo_kviz1">
                            <div class="cont__left">+</div>
                            <div class="cont_right">Добавить правило</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group footer-button">
                <div class="col-xs-12">

                    <button type="button" class="btn btn-primary w_safebutton ">Сохранить</button>
                    <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть
                    </button>
                </div>

            </div>
        </form>

    </div>
</div>
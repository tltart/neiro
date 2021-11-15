<fieldset>
    <form   id="emailtrackingsetting"  name="emailtrackingsetting" >
@csrf
        <input type="hidden" class="form-control" name="form_action"
               value="emailtrackingsetting">
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Тип E-mail:</label>
                            <label>
                                <select class="form-control type_add_email" name="type_add_email">

                                    <option value="1" @if($email->type_add_email==1) selected @endif>Генерация e-mail</option>
                                    <option value="2" @if($email->type_add_email==2) selected @endif>Свои адреса</option>

                                </select>


                            </label>
                        </div>
                    </div>
                    <div class="form-group kkmf" @if($email->type_add_email!=2) style="display: none" @endif>
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label type_add_email">Список email:(загрузка через запятую)</label>
                            <label>
                            <textarea name="emails_array">@if($email->type_add_email==2&&is_array($email->emails_array)){{implode(',',$email->emails_array)}}@endif</textarea>


                            </label>
                        </div>
                    </div>








                    <div class="form-group">
					<div class="col-xs-12">         
                        <label class="col-lg-3 control-label">Активность сбора (включить выключить):</label>
                                <label>
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" class="switchery"  id="status" name="status"  value="1" @if($email->status==1) checked @endif>

                                </label>
					</div>
                    </div>
                    <div class="form-group">
					<div class="col-xs-12">
                        <label class="col-lg-3 control-label">Собирать все письма:</label>


                                <label>
                                    <input type="hidden" name="with_plus" value="0">
                                    <input type="checkbox" class="switchery"  value="1" id="with_plus" name="with_plus"    @if($email->with_plus==1) checked @endif>

                                </label>
                            
                        </div>
                    </div>
                    <div class="form-group">
					<div class="col-xs-12">
                        <label class="col-lg-3 control-label">Создавать сделку:</label>
                        

                                <label>
                                    <input type="hidden" name="create_project" value="0">
                                    <input type="checkbox" class="switchery"  value="1" id="create_project" name="create_project"   @if($email->create_project==1) checked @endif>

                                </label>
                            
                        </div>
                    </div>
                    <div class="form-group">
					<div class="col-xs-12">
                        <label class="col-lg-3 control-label">Отображать на сайте:</label>
                        
                            
                                <label>{{$email->show_site}}
                                    <input type="hidden" name="show_site" value="0">
                                    <input type="checkbox" class="switchery"   id="show_site" name="show_site"  value="1" @if($email->show_site==1) checked @endif>

                                </label>

                        </div>
                    </div>

               <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                        <div class="tab-content-block active">
                            <div class="label-form-name">Выберите источники</div>

                                <div class="all_sourses">

                                            <div class="on_of_nambers col-xs-12">

                                  {{--  <div class="form__block ">

                                        <input type="text" class="form-control form-control-text" placeholder="Значение">
                                    </div>--}}
                                    <div class="form__block">

                                        <select class="form-control select5-list" name="ar_canals_dinamic">
                                            <option></option>
                                            @foreach($witget_canals as $item)
                                                <option value="{{$item->id}}" @if( $item->id==$email->ar_canals_dinamic)selected @endif>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>





                                </div>
                            </div>



                        </div>


                    </div>
					
					
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Тип отслеживания:</label>
                            <label>
                                    <select class="form-control" name="dinamic_type">

                                            <option value="0" @if($email->dinamic_type==0) selected @endif>Динамика</option>
                                            <option value="1" @if($email->dinamic_type==1) selected @endif>Статика</option>
                                    </select>

                              </label>
                            </div>
                        </div>
                    <div class="form-group">
                          <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Группа:</label>
                                <label>
                                    <select class="form-control" name="group_id">
                                        <option value="" >Без группы</option>
@foreach($groups as $group)
                                            <option value="{{$group->id}}" @if($email->group_id==$group->id) selected @endif>
                                                {{$group->name}}</option>
                                        @endforeach


                                    </select>
                                 </label>

                            </div>
                        </div>



                    <div class="form-group kkmf1"  @if($email->type_add_email==2) style="display: none" @endif>
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">E-mail:</label>
<label>                        
                            <input type="hidden" class="form-control" name="id"      value="{{$email->id}}"  required>
                            <input type="text" class="form-control" name="email" id="email"    value="{{$email->email}}"  required>
</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Заменять ссылкой(mailto:):</label>
                        <label>
                            <div class="checkbox checkbox-switchery">
                                <label>
                                    <input type="hidden" name="url" value="0">
                                    <input type="checkbox" class="switchery"  value="1" id="url" name="url"  value="1" @if($email->url==1) checked @endif>

                                </label>
                            </div>
						</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Class или ID:</label>
                        <label> 
                            <input type="text" class="form-control" name="element" id="element"     required value="{{$email->element}}">
                         </label>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Сервер:</label>
                        <label>
                            <select class="form-control email_servier_id" name="email_servier_id">
                                @foreach($servers as $server)
                                    <option value="{{$server->id}}" @if($email->email_servier_id==$server->id) selected @endif>{{$server->name}}</option>
                                @endforeach
                                <option value="0">Нет сервера, добавить свой</option>
                            </select>
                        </label>

                        </div>

                    </div>
<style>

    @if($email->email_servier_id>0)
    .hiddeness{
        display: none;
    }
    @endif
</style>
            <div class="form-group hiddeness" @if($email->email_servier_id=!0)style="display: none"@endif>
                <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Сервер:</label>
                <label>
                    <input type="text" class="form-control" name="m_server" id="m_server"  value="{{$email->m_server}}"    >
                </label>
                </div>

            </div>
            <div class="form-group hiddeness" @if($email->email_servier_id=!0)style="display: none"@endif>
                <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Порт:</label>
<label>
                    <input type="text" class="form-control" name="m_port" id="m_port"  value="{{$email->m_port}}"    >
</label>
                </div>

            </div>
            <div class="form-group hiddeness" @if($email->email_servier_id=!0)style="display: none"@endif>
                <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Encription:</label>
<label>
                    <input type="text" class="form-control" name="m_encription" id="m_encription"  value="{{$email->m_encription}}"    >
</label>
                </div>

            </div>


                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Логин:</label>
<label>
                            <input type="text" class="form-control" name="login" id="login"  value="{{$email->login}}"   required>
</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label class="col-lg-3 control-label ">Пароль:</label>
<label>
                            <input type="password" class="form-control" name="password" id="password" value="{{$email->password}}"    required>
</label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label" id="connect_email"></label>
                        <div class="col-md-9">
                            <button onclick="test_email();return false" class="btn btn-info">Проверить соединение</button>

                        </div>

                    </div>










                </fieldset>
            </div>
            {{--Дополнительные поля--}}

        </div>


        {{--<div class="form-group" style="margin-top: 10px">
            <div class="col-md-9">
                <button type="button" class="btn btn-primary w_safebutton_wmail ">Сохранить<i
                            class="icon-arrow-right14 position-right " ></i></button>
            </div>

        </div>--}}
        <div class="form-group footer-button">
            <div class="col-xs-12">

               @if($email->id)
                    <button type="button" class="btn btn-primary w_safebutton_wmail"  >Сохранить</button>
                    @else<button type="button" class="btn btn-primary w_safebutton_wmail"  >Создать</button>@endif
                <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
            </div>

        </div>
    </form>
</fieldset>
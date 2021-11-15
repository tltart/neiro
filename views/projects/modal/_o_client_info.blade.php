<div id="ClientInfoModal" class="modal fade ClientInfoModal lids-neiros">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                <div class="name-block-fixed">
                    <div class="col-sm-5 col-xs-12">
                        <div class="h1-modal pos-left">Информация пользователя</div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="h1-modal pos-right">Активность</div>
                    </div>
                </div>


                <div class="col-sm-5 col-xs-12">
                    <?php /*?><div class="h1-modal">Информация пользователя</div><?php */?>
                    <div class="user-block col-xs-12">
                        <div class="col-xs-4 img-avatar img-avatar-st">

                            @if($vidget_social)
                                <img src="{{$vidget_social->photo_200}}">
                            @else
                                <img src="/templatechat/images/pfotografy-none.jpg">@endif</div>
                        <div class="col-xs-8 user-description user-description-st">
                            <div class="h1">@if($project->fio=='')Клиент
                                №{{$project->neiros_visit}}@else{{$project->fio}}@endif

                                @if($ban==1)<span
                                        class="baneed" data-id="{{$project->neiros_visit}}"
                                        style="color: red;cursor: pointer;">Забанен</span>


                                @else  <span class="baneed" data-id="{{$project->neiros_visit}}"
                                             style="color: green;cursor: pointer;">Забанить?</span> @endif</div>
                            <div class="h2"><span>в сети:</span>
                                @if($metrika_last) <span>{{date('d.m.Y',strtotime($metrika_last->created_at))}} </span>
                                <span>{{date('H:y',strtotime($metrika_last->created_at))}}</span>
                                @else
                                    <span>{{date('d.m.Y',strtotime($project->created_at))}} </span>
                                    <span>{{date('H:y',strtotime($project->created_at))}}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12" style="padding-left:0px; padding-right:0px;">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab"
                                                                      data-toggle="tab">Информация</a></li>
                            <li role="presentation"><a href="#analitics" aria-controls="profile" role="tab"
                                                       data-toggle="tab">Аналитика</a></li>
                            <li role="presentation"><a href="#money" aria-controls="money" role="tab" data-toggle="tab">Деньги</a>
                            </li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="info">
                                <div class="">
                                    {{--  <div class="form-group">
                                      <label for="date">Дата рождения</label>
                                        <input type="text" class="form-control" id="date" placeholder="Дата рождения" value="23.11.1986">
                                    </div>
                                    <div class="form-group">
                                        <label for="age">Возраст</label>
                                        <input type="text" class="form-control" id="age" placeholder="Возраст" value="30 лет">
                                    </div>
                                    <div class="form-group">
                                        <label for="pol">Пол</label>

                                        <select class="form-control" id="pol" >
                                            <option selected>Мужской</option>
                                            <option>Женский</option>
                                        </select>
                                    </div> --}}
                                    @if($project->no_metrika==1)
                                        repiat
                                    @else normal
                                    @endif
                                    <div class="form-group col-xs-12" style="padding-left:0px; padding-right:0px;">
                                        <label for="city">ФИО</label>
                                        <input type="text" readonly data-input-cont-id="{{$project->id}}"
                                               data-old-val="{{$project->fio}}" class="form-control" id="fio"
                                               data-input-name="projects_fio" placeholder="Фио"
                                               value="{{$project->fio}}"><i class="fa fa-pencil" aria-hidden="true"></i><i
                                                class="fa fa-floppy-o" aria-hidden="true"></i>
                                    </div>


                                    <div class="form-group col-xs-12" style="padding-left:0px; padding-right:0px;">
                                        <label for="city">Телефон</label>
                                        <input type="text" readonly data-input-cont-id="{{$project->id}}"
                                               data-input-name="projects_phone" data-old-val="{{$project->phone}}"
                                               class="form-control" id="city" placeholder="Телефон"
                                               value="{{$project->phone}}"><i class="fa fa-pencil"
                                                                              aria-hidden="true"></i><i
                                                class="fa fa-floppy-o" aria-hidden="true"></i>
                                    </div>


                                    <div class="form-group col-xs-12" style="padding-left:0px; padding-right:0px;">
                                        <label for="city">E-mail</label>
                                        <input type="text" readonly data-input-cont-id="{{$project->id}}"
                                               data-old-val="{{$project->email}}" class="form-control" id="email"
                                               data-input-name="projects_email" placeholder="E-mail"
                                               value="{{$project->email}}"><i class="fa fa-pencil"
                                                                              aria-hidden="true"></i><i
                                                class="fa fa-floppy-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="form-group col-xs-12" style="padding-left:0px; padding-right:0px;">
                                        <label for="city">Комментарий</label>
                                        <textarea class="form-control user_comment" data-id="{{$project->id}}" >{{$project->user_comment}}</textarea>
                                         <button type="button" class="btn btn-info add_project_comment">Сохранить</button>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="analitics">
                                @include('projects.modal.table_left')
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="money">
                                <div class="lid-input-modal-block">
                                    <form action="" id="add_money_form">

                                        <div class="lid-cont-modal-input summ"><input type="text"
                                                                                      class=" lid-input-modal money_to_lead"
                                                                                      name="summ"
                                                                                      placeholder="Сумма сделки"
                                                                                      value=""
                                                                                      style="
   border-right: none;
   border-left: none;
   border-top: none;
   border-bottom: 1px solid #a8abb9;"></div>

                                        <div class="lid-cont-modal-input save">
                                            <button type="button" class="btn btn-info add_money_form_btn "
                                                    data-project_id="{{$project->id}}">Добавить
                                            </button>
                                        </div>
                                    </form>


                                </div>
                                <table class="table table-bordered ">
                                    <tr>
                                        <td>Дата</td>
                                        <td>Сумма</td>
                                    </tr>

                                    <tbody class="table_money">
                                    @foreach($project->moneys as $money)
                                        <tr>
                                            <td>{{$money->created_at->format('d.m.Y')}}</td>
                                            <td>{{$money->summ}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-sm-7 col-xs-12 right-block-mod">
                    <?php /*?><div class="h1-modal">Активность</div><?php */?>

                    <div class="activnost">
                        <div class="block-activnost project_table_right">



                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>
</div>


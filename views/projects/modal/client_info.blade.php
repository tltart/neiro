<div id="ClientInfoModal" class="modal-my modal fade ClientInfoModal lids-neiros in" style="display: block">

    <div class="modal-dialog modal-dialog-user-card">
        <div class="modal-content">

            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
                <div class="name-block-fixed">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="h1-modal pos-left">Информация</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="h1-modal pos-right">История</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body__content">
                    <div class="container h100">
                        <div class="row h100">
                            <div class="col-12 modal-body__wrapper">
                                <!--                левый блок-->
                                <div class="card-user-modal card-user-modal__left">
                                    <div class="card-user-modal__head">
                                        <ul class="nav nav-tabs nav-tabs-my">
                                            <li role="presentation" class="active"><a data-toggle="tab" href="#tab1">Основная</a>
                                            </li>
                                            <li role="presentation"><a data-toggle="tab" href="#tab2">Аналитика</a></li>
                                            <li role="presentation"><a data-toggle="tab" href="#tab3">Сделки</a></li>
                                            <li role="presentation" class="dropdown dropdown-my">
                                                <a class="dropdown-toggle">
                            <span class="dropdown-toggle__icon">
                              <img src="img/img_project_info/menu.svg" alt="">
                              </span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-my">
                                                    <li><a href="#" class="dropdown-links baneed"
                                                           data-id="{{$project->neiros_visit}}">
                                                            @if($ban==1)
                                                                Заблокирован
                                                            @else Заблокировать? @endif
                                                        </a></li>


                                                    <li><a href="#" class="dropdown-links item-widget1"
                                                           data-name="Настройки"
                                                           data-id="get_project_setting">Настройки</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card-user-modal__body">
                                        <div class="tab-content">
                                            <div class="tab-pane active pt-30" id="tab1">
                                                <form id="add_ajax_project" class="form-my__modal">
                                                    <div class="scroll-horizontal-modal w100">
                                                        <input type="hidden" name="id" value="{{$project->id}}">
                                                        <input type="hidden" name="form_action"
                                                               value="save_project_data">
                                                        <div class="form-group form-group-my">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-5">
                                                                    <label class="control-label control-label-my">
                                                                        <span class="text-form-block">ФИО</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-xs-12 col-md-7 input-group-col">
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                               class="form-control form-control-my class_chenge_project"
                                                                               name="name" placeholder="ФИО"
                                                                               value="{{$project->fio}}">
                                                                        <a href="#" class="btn-input btn-input-edit">
                                                                            <img src="img/img_project_info/edit.svg"
                                                                                 alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group form-group-my">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-5">
                                                                    <label class="control-label control-label-my">
                                                                        <span class="text-form-block">Телефон</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-xs-12 col-md-7 input-group-col">
                                                                    <div class="input-group input-group-add">
                                                                        <input type="text"
                                                                               class="form-control form-control-my class_chenge_project"
                                                                               name="phone" placeholder="Телефон"
                                                                               value="{{$project->phone}}">
                                                                        <a href="#" class="btn-input btn-input-add"
                                                                           data-field="phone_array"
                                                                           data-placeholder="Телефон">
                                                                            <img src="img/img_project_info/plus.svg"
                                                                                 alt="">
                                                                        </a>
                                                                        <a href="#" class="btn-input btn-input-edit">
                                                                            <img src="img/img_project_info/edit.svg"
                                                                                 alt="">
                                                                        </a></div>
                                                                    @foreach($project->getContacts('PHONE') as $contact)
                                                                        @if($contact->value!=$project->phone)
                                                                            <div class="input-group input-group-add">
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control form-control-my class_chenge_project"
                                                                                    name="phone_array[]"
                                                                                    value="{{$contact->value}}"
                                                                                    placeholder="Телефон"> <a
                                                                                    href="#"
                                                                                    class="btn-input btn-input-edit">
                                                                                    <img
                                                                                        src="img/img_project_info/edit.svg"
                                                                                        alt="">
                                                                                </a></div>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group form-group-my">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-5">
                                                                    <label class="control-label control-label-my ">
                                                                        <span class="text-form-block">E-mail</span>
                                                                    </label>
                                                                </div>

                                                                <div class="col-xs-12 col-md-7 input-group-col">
                                                                    <div class="input-group input-group-add">
                                                                        <input type="text"
                                                                               class="form-control form-control-my class_chenge_project"
                                                                               name="email"
                                                                               placeholder="E-mail"
                                                                               value="{{$project->email}}">
                                                                        <a href="#" class="btn-input btn-input-add"
                                                                           data-field="email_array"
                                                                           data-placeholder="E-mail">
                                                                            <img src="img/img_project_info/plus.svg"
                                                                                 alt="">
                                                                        </a>
                                                                        <a href="#" class="btn-input btn-input-edit">
                                                                            <img src="img/img_project_info/edit.svg"
                                                                                 alt="">
                                                                        </a></div>

                                                                    @foreach($project->getContacts('EMAIL') as $contact)
                                                                        @if($contact->value!=$project->email)
                                                                            <div class="input-group input-group-add">
                                                                                <input
                                                                                    type="text"
                                                                                    class="form-control form-control-my class_chenge_project"
                                                                                    name="email_array[]"
                                                                                    placeholder="E-mail"
                                                                                    value="{{$contact->value}}">
                                                                                <a href="#"
                                                                                   class="btn-input btn-input-edit">
                                                                                    <img
                                                                                        src="img/img_project_info/edit.svg"
                                                                                        alt="">
                                                                                </a>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group form-group-my">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <a href="#"
                                                                       class="links-accent links-add links-add-comment @if($project->comment!='') click @endif">
                                                                <span class="links-add__icon"><img
                                                                        src="img/img_project_info/plus-blue.svg"
                                                                        alt=""></span>
                                                                        <span class="links-add__text">Добавить комментарий</span>
                                                                    </a>
                                                                    <div class="form-box-hidden"
                                                                         @if($project->comment!='')style="display:block" @endif>
                                <textarea name="message"
                                          class="form-control form-control-my class_chenge_project textarea-no-resize">{{$project->comment}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-user-modal__footer block_for_save_project"
                                                         style="display:none">
                                                        <div class="button-group">
                                                            <button type="button"
                                                                    class="btn btn-my btn-default btn-opacity hide_block_for_save_project">
                                                                отменить
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-my btn-primary btn-accent w_safebutton">
                                                                Сохранить
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                            <div class="tab-pane pt-30" id="tab2">
                                                <div class="form-group">

                                                    <ul class="characteristics-info">
                                                        <li>
                                                            <p>Был онлайн</p> @if($metrika_last)
                                                                <span>{{date('d.m.Y',strtotime($metrika_last->created_at))}} </span>
                                                                <span>{{date('H:y',strtotime($metrika_last->created_at))}}</span>
                                                            @else
                                                                <span>{{date('d.m.Y',strtotime($project->created_at))}} </span>
                                                                <span>{{date('H:y',strtotime($project->created_at))}}</span>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <p>Всего визитов</p><span>{{$total_visits}}</span>
                                                        </li>
                                                        <li>
                                                            <p>Общее время на сайте</p>
                                                            <span>{{$project->getAllTime()}}</span>
                                                        </li>
                                                        <li>
                                                            <p>Регион</p><span>{{$project->getRegion()}}</span>
                                                        </li>
                                                        <li>

                                                            <p>ClienID Метрики</p>
                                                            <span>{{$project->getCidGMetrika()}}</span>
                                                        </li>
                                                        <li>
                                                            <p>Client ID Analytics</p>
                                                            <span>{{$project->getCidGA()}} </span>
                                                        </li>
                                                        @if (\Cookie::get('admin') || auth()->user()->my_company_id == 20)
                                                            <li>
                                                                <p>project ID</p><span>{{ $project->id }} </span>
                                                            </li>
                                                            <li>
                                                                <p>metrika ID</p>
                                                                <span>{{  $project->metrika_id}} </span>
                                                            </li>
                                                            <li>
                                                                <p>neiros ID</p>
                                                                <span>{{  $project->neiros_visit}} </span>
                                                            </li>
                                                            <li>
                                                                <p>hook ID</p><span>{{  $project->hook_id}} </span>
                                                            </li>
                                                        @endif

                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab3">
                                                <form id="add_ajax_project_money" class="form-my__modal">
                                                    <input type="hidden" name="id" value="{{$project->id}}">
                                                    <input type="hidden" name="form_action"
                                                           value="save_project_data_money">
                                                    <div class="scroll-horizontal-modal scroll-horizontal-table w100">
                                                        <div class="form-group">
                                                            <div class="table-responsive">

                                                                <table class="table-my table-cabinet">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Дата</th>
                                                                        <th>Номер</th>
                                                                        <th>Этап</th>
                                                                        <th>Сумма</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach($project->get_all_lead() as $pr)
                                                                        <tr class="pr_table_with_summ{{$pr->id}}">
                                                                            <td>
                                                                                <div
                                                                                    class="table-cabinet__date">{{date('d.m.Y',strtotime($pr->reports_date))}}</div>
                                                                            </td>
                                                                            <td>
                                                                                <div
                                                                                    class="table-cabinet__number">{{$pr->client_project_id}}</div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="dropdown dropdown-deals">
                                                                                    <a class="dropdown-toggle"
                                                                                       data-toggle="dropdown"
                                                                                       aria-haspopup="true"
                                                                                       aria-expanded="false">
                                                                                        @if($pr->stage)   <span
                                                                                            class="status-deals status-deals-{{$pr->id}}"
                                                                                            style="background:{{$pr->stage->color}}">{{$pr->stage->name}}</span>
                                                                                        @else
                                                                                            <span
                                                                                                class="status-deals status-deals-{{$pr->id}}">Неразобранное</span>
                                                                                        @endif
                                                                                    </a>

                                                                                    <div
                                                                                        class="dropdown-menu dropdown-menu-my">
                                                                                        <ul class="list-deals">
                                                                                            @foreach($stages as $stage)
                                                                                                @if($pr->stage_id!=$stage->id)
                                                                                                    <li class="list-deals__item"
                                                                                                        data-stage_id="{{$stage->id}}"
                                                                                                        data-project_id="{{$pr->id}}"
                                                                                                        data-name="{{$stage->name}}"
                                                                                                        data-color="{{$stage->color}}">
                                                                                                        <div
                                                                                                            class="list-deals__color "
                                                                                                            style="background:{{$stage->color}}"></div>
                                                                                                        <div
                                                                                                            class="list-deals__text">
                                                                                                            {{$stage->name}}
                                                                                                        </div>
                                                                                                    </li>@endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div
                                                                                    class="table-cabinet__sum input-group">
                                                                                    {{$pr->moneys->sum('summ')}} ₽
                                                                                    <a href="#"
                                                                                       class="btn-input btn-input-edit add_field_summ_to_project"
                                                                                       data-project_id="{{$pr->id}}">
                                                                                        <img
                                                                                            src="/img/img_project_info/plus.svg"
                                                                                            alt="">
                                                                                    </a>
                                                                                </div>
                                                                            </td>

                                                                        </tr>
                                                                        @foreach($pr->moneys as $pr_money)
                                                                            <tr>
                                                                                <td>
                                                                                    <div
                                                                                        class="table-cabinet__date"></div>
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="table-cabinet__number"></div>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="hidden"
                                                                                           name="blocks[{{$pr_money->id}}][date]"
                                                                                           class="form-control form-control-my   active-filtr" value="{{$pr_money->created_at}}">
                                                                                    <input type="hidden"
                                                                                           name="blocks[{{$pr_money->id}}][_remove_]"
                                                                                           value="0"
                                                                                           class="blocks _remove_ fom-removed">
                                                                                    <input type="hidden"
                                                                                           class="form-control form-control-my "
                                                                                           name="blocks[{{$pr_money->id}}][project_id]"
                                                                                           value="{{$pr_money->project_id}}">
                                                                                    <input type="hidden"
                                                                                           class="form-control form-control-my "
                                                                                           name="blocks[{{$pr_money->id}}][id]"
                                                                                           value="{{$pr_money->id}}">
                                                                                    {{date('d.m.Y',strtotime($pr_money->created_at))}}
                                                                                </td>
                                                                                <td>
                                                                                    <div
                                                                                        class="table-cabinet__sum input-group">
                                                                                        <input type="text"
                                                                                               class="form-control form-control-my project_keyup_money"
                                                                                               name="blocks[{{$pr_money->id}}][money]"
                                                                                               value="{{$pr_money-> summ}} ₽" placeholder="0 ₽">
                                                                                        <a href="#"
                                                                                           class="btn-input btn-input-edit">
                                                                                            <img
                                                                                                src="img/img_project_info/plus.svg"
                                                                                                alt="">
                                                                                        </a>
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                        @endforeach


                                                                    @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-user-modal__footer block_for_save_project_money"
                                                         style="display:none">
                                                        <div class="button-group">
                                                            <button type="button"
                                                                    class="btn btn-my btn-default btn-opacity hide_block_for_save_project_money">
                                                                отменить
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-my btn-primary btn-accent w_safebutton">
                                                                Сохранить
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>


                                </div>


                                <!--                правый блок-->
                                <div class="card-user-modal card-user-modal__right scroll-horizontal-modal">
                                    <div id="card-user-modal_right" class='mmmg1'></div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>
<template class="client_template_summ">
    <tr>
        <td>
            <div class="table-cabinet__date"></div>
        </td>
        <td>
            <div class="table-cabinet__number"></div>
        </td>
        <td>
            <input type="date" name="blocks[new___LA_KEY__][date]" class="form-control form-control-my   active-filtr">
            <input type="hidden" name="blocks[new___LA_KEY__][_remove_]" value="0" class="blocks _remove_ fom-removed">
            <input type="hidden" class="form-control form-control-my " name="blocks[new___LA_KEY__][project_id]"
                   value="__PR_ID__">
            <input type="hidden" class="form-control form-control-my " name="blocks[new___LA_KEY__][id]" value="">
        </td>
        <td>
            <div class="table-cabinet__sum input-group">
                <input type="text"
                       class="form-control form-control-my project_keyup_money"
                       name="blocks[new___LA_KEY__][money]"
                       value="0 ₽" placeholder="0 ₽">

                <a href="#"
                   class="btn-input btn-input-edit">
                    <img src="img/img_project_info/edit.svg"
                         alt="">
                </a>
            </div>
        </td>

    </tr>
</template>

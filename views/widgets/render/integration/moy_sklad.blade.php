<style>.ClientInfoModal.modal.fade:not(.in) .modal-dialog {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);

    }</style>


<div class="col-md-3 integration-item">
    <div class="single-cases-card" >
        <div class="card-image"><a data-toggle="modal" data-target="#myModal_sett__w_30"><img alt="" src="/global_assets/images/integration/moysklad.jpeg" draggable="false" class="img-responsive" ></a>
            <div class="hover-area"> </div>
        </div>
        <!-- .card-image END -->

        <div class="cases-content col-xs-12">

            <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>

            <!-- .cases-content END --></div>


    </div>
</div>

<div id="myModal_sett__w_30" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal">
    <div class="modal-dialog" style="">
        <div class="modal-content"   style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">

                <div class="name-block-fixed name-block-fixed-integration">
                    <div class="col-xs-12" >
                        <div class="h1-modal pos-left"><img src="/images/moysklad-integration.jpg"><span></span></div>

                        <input type="hidden" class="form-control" name="id"
                               value="{{$widget_vk->id}}">
                        <input type="hidden" class="form-control" name="form_action"
                               value="integration_fb_marketing">{!! $status_checkbox_metrika !!}
                    </div>
                </div>


                <div class="row">
                    <form id="integration_moysklad" name="integration_moysklad">

                        <div class="col-xs-12 block-descr">
                            <div class="col-sm-6"><div class="img-block-left"><img width="100%" src="/global_assets/images/integration/moysklad.jpeg"></div></div>
                            <div class="col-sm-6">
                                <div class="paragraph">Сервис для управления торговлей и складского учёта, предназначенный для автоматизации малого и среднего бизнеса. Реализует функции обработки заказов, управления продажами и закупками, складского учёта и контроля финансовых расчетов.</div>


                                <input type="hidden" class="form-control" name="id"
                                       value="{{$widget_vk->id}}">
                                <input type="hidden" class="form-control" name="form_action"
                                       value="integration_moysklad">{!! $status_checkbox_metrika !!}


                            </div>

                        </div>

                        <div class="show-hidden-integration">
                            <div class="col-xs-12">




                                <div class="form-group">
                                    <label class="col-xs-12 control-label">Логин:</label>
                                    <div class="col-md-9">
<input type="text" name="login"   class="form-control" value="{{$setting->login}}">

                                    </div>

                                </div>
 <div class="form-group">
                                    <label class="col-xs-12 control-label">Пароль:</label>
                                    <div class="col-md-9">
                                        <input type="password" name="password"  value="{{$setting->password}}" class="form-control">

                                    </div>

                                </div>




                                <div class="form-group">

                                    <div class="col-md-9">
                                        <button type="button" class="btn btn-info get_connect_moy_sklad" >Проверить соединени</button>

                                    </div>

                                </div>


                            </div>


                            {{--Дополнительные поля--}}
                           <div id="moy_sklad_select">
                               @include('widgets.render.integration.moysklad_selet')
                           </div>

                            <div class="form-group footer-button">
                                <div class="col-xs-12">

                                    <button type="button" class="btn btn-primary w_safebutton ">Сохранить</button>
                                    <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
                                </div>

                            </div>
                        </div>

                    </form>


                </div>
            </div>
            <!-- Футер модального окна -->

        </div>
    </div>
</div>
<script>
    $("#mft_marketing").click( function() {
        if($("#mft_marketing").prop('checked')){
            $('.dircheck_mft_marketing').prop('checked', true);
        } else {
            $('.dircheck_mft_marketing').prop('checked', false);
        }
    });
</script>
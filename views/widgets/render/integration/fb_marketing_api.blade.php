<style>.ClientInfoModal.modal.fade:not(.in) .modal-dialog {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);

    }</style>


<div class="col-md-3 integration-item">
    <div class="single-cases-card" >
        <div class="card-image"><a data-toggle="modal" data-target="#myModal_sett__w_28"><img alt="" src="/global_assets/images/integration/fb.jpg" draggable="false" class="img-responsive" ></a>
            <div class="hover-area"> </div>
        </div>
        <!-- .card-image END -->

        <div class="cases-content col-xs-12">

            <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>

            <!-- .cases-content END --></div>


    </div>
</div>

<div id="myModal_sett__w_28" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal">
    <div class="modal-dialog" style="">
        <div class="modal-content"   style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <?php /*?>     <h4 class="modal-title">Яндекс Директ</h4><?php */?>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">

                <div class="name-block-fixed name-block-fixed-integration">
                    <div class="col-xs-12" >
                        <div class="h1-modal pos-left"><img src="/images/facebook-integration.jpg"><span></span></div>

                        <input type="hidden" class="form-control" name="id"
                               value="{{$widget_vk->id}}">
                        <input type="hidden" class="form-control" name="form_action"
                               value="integration_fb_marketing">{!! $status_checkbox_metrika !!}
                    </div>
                </div>


                <div class="row">
                    <form id="integration_fb_marketing" name="integration_fb_marketing">

                        <div class="col-xs-12 block-descr">
                            <div class="col-sm-6"><div class="img-block-left"><img width="100%" src="/global_assets/images/integration/fb.jpg"></div></div>
                            <div class="col-sm-6">
                                <div class="paragraph">Facebook – крупнейшая социальная сеть в мире и одноименная компания (Facebook Inc.), владеющая ею. Была основана 4 февраля 2004 года Марком Цукербергом и его соседями по комнате во время обучения в Гарвардском университете — Эдуардо Саверином, Дастином Московицем и Крисом Хьюзом.</div>


                                <input type="hidden" class="form-control" name="id"
                                       value="{{$widget_vk->id}}">
                                <input type="hidden" class="form-control" name="form_action"
                                       value="integration_fb_marketing">{!! $status_checkbox_metrika !!}


                            </div>

                        </div>

                        <div class="show-hidden-integration">
                            <div class="col-xs-12">




                                <div class="form-group">
                                    <label class="col-xs-12 control-label"> </label>
                                    <div class="col-md-9">

                                        {!! $fb_url !!}
                                    </div>

                                </div>



                            </div>


                            {{--Дополнительные поля--}}
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="col-xs-12 control-label">Рекламные компании:</label>
                                    <div class="col-xs-12"><div class="col-xs-12"><label class="add-number-new-checkbox label-dir">Отметить все
                                                <input type="checkbox" name="mft_marketing" id="mft_marketing"   value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        @foreach($counters as $counter)

                                            <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">{{$counter->company}} ({{$counter->name}} {{$counter->States}})

                                                    <input type="checkbox" name="radiocounter[]" class="dircheck_mft_marketing" @if($counter->status==1) checked="checked"
                                                           @endif value="{{$counter->id}}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>


                            </div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label class="col-xs-12 control-label">Метка Neiros:</label>
                                    <div class="col-xs-12"><div class="col-xs-12">

                                            <label class="add-number-new-checkbox label-dir">Разметить меткой
                                                <input type="checkbox" name="update_utm"     value="1">
                                                <span class="checkmark"></span>
                                            </label>


                                        </div>

                                    </div>


                                </div>
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
<div class="name-block-fixed name-block-fixed-integration">
    <div class="col-xs-12">
        <div class="h1-modal pos-left"><img class="back-direct" src="/global_assets/images/icon_kviz/back.svg" style="height: 27px;
margin-right: 26px;cursor: pointer "><img src="/images/yandex-direct.jpg"><span></span></div>


    </div>
</div>
<div class="row">

    <div class="show-hidden-integration">
    <form id="integrationdirect" name="integrationdirect">

        <input type="hidden" class="form-control" name="id"
               value="{{$direct->id}}">
        <input type="hidden" class="form-control" name="form_action"
               value="integrationdirect">


        <div class="show-hidden-integration">
            <div class="col-xs-12">



                <div class="form-group">
                    <label class="col-xs-12 control-label">E-mail:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" id="email" value="{{$direct->email}}"
                               required  disabled>
                        <input type="text" class="form-control" name="token" id="token"
                               value="{{$direct->token}}" required>
                        <a href="/set_token_direct/{{$direct->id}}">Получить токен
                        </a>
                    </div>

                </div>


            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label class="col-xs-12 control-label">Рекламные компании:</label>
                    <div class="col-xs-12">
                        <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">Отметить все
                                <input type="checkbox" name="mft" id="mft" value="1">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        @foreach($direct->counters as $counter)

                            <div class="col-xs-12"><label
                                        class="add-number-new-checkbox label-dir">{{$counter->company}}
                                    ({{$counter->name}} {{$counter->States}})

                                    <input type="checkbox" name="radiocounter[]" class="dircheck"
                                           @if($counter->status==1) checked="checked"
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
                    <div class="col-xs-12">
                        <div class="col-xs-12">

                            <label class="add-number-new-checkbox label-dir">Разметить меткой
                                <input type="checkbox" name="update_utm" value="1">
                                <span class="checkmark"></span>
                            </label>


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
        </div>

    </form>
    </div>

</div>

<script>
    $("#mft").click(function () {
        if ($("#mft").prop('checked')) {
            $('.dircheck').prop('checked', true);
        } else {
            $('.dircheck').prop('checked', false);
        }
    });
</script>

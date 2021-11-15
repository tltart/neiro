@if($for_view)
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading-6">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-6"
           aria-expanded="false" aria-controls="collapse-6">
            <div class="number-accardion">6</div>
            <div class="h-1">Соц сети</div>
            <div class="descr-text">настройка формы обратной связи</div>
        </a>
    </div>


    <div id="collapse-6" class="panel-collapse collapse" role="tabpane6" aria-labelledby="heading-6">
@endif

    <form   id="wchat"  name="wchat" >
        <input type="hidden" class="form-control" name="id"
               value="{{$widget_vk->id}}">
        <input type="hidden" class="form-control" name="form_action"
               value="wchat_osn_6">



<div class="panel-body">

    <div class="checkbox checkbox-switchery">
        <label class="row w-100">
           <div class="col-md-2"><img src="https://test.neiros.ru/cdn/v1/chatv2/images/icons/social/2.png" class="icon-social__img"></div>


            <div class="col-md-7"><input type="text" class="form-control" value="{{$widget_vk->social_vk_url}}" placeholder="URL" name="social_vk_url"></div>

            <div class="col-md-3">
                <input type="hidden" name="social_vk"  value="0">
                <input type="checkbox" class="switchery social-checkbox" id="social_vk" value="1"
                       name="social_vk" @if($widget_vk->social_vk==1) checked="checked" @endif  >
            </div>
        </label>
    </div>
    <div class="checkbox checkbox-switchery">
        <label class="row w-100">
            <div class="col-md-2"><img src="https://test.neiros.ru/cdn/v1/chatv2/images/icons/social/3.png" class="icon-social__img"></div>


            <div class="col-md-7"><input type="text" class="form-control" value="{{$widget_vk->social_ok_url}}" placeholder="URL" name="social_ok_url"></div>
            <div class="col-md-3">
                <input type="hidden" name="social_ok"  value="0">
                <input type="checkbox" class="switchery social-checkbox" id="social_ok" value="1"
                       name="social_ok" @if($widget_vk->social_ok==1) checked="checked" @endif  >
            </div>

        </label>
    </div>
    <div class="checkbox checkbox-switchery">
        <label class="row w-100">
            <div class="col-md-2"><img src="https://test.neiros.ru/cdn/v1/chatv2/images/icons/social/4.png" class="icon-social__img"></div>


            <div class="col-md-7"><input type="text" class="form-control" value="{{$widget_vk->social_fb_url}}" placeholder="URL" name="social_fb_url"></div>

            <div class="col-md-3">
                <input type="hidden" name="social_fb"  value="0">
                <input type="checkbox" class="switchery social-checkbox" id="social_fb" value="1"
                       name="social_fb" @if($widget_vk->social_fb==1) checked="checked" @endif  >
            </div>
        </label>
    </div>
    <div class="checkbox checkbox-switchery">
        <label class="row w-100">
            <div class="col-md-2"><img src="https://test.neiros.ru/cdn/v1/chatv2/images/icons/social/7.png" class="icon-social__img"></div>


            <div class="col-md-7"><input type="text" class="form-control" value="{{$widget_vk->social_viber_url}}" placeholder="URL" name="social_viber_url"></div>

            <div class="col-md-3">
                <input type="hidden" name="social_viber"  value="0">
                <input type="checkbox" class="switchery social-checkbox" id="social_viber" value="1"
                       name="social_viber" @if($widget_vk->social_viber==1) checked="checked" @endif  >
            </div>
        </label>
    </div>
    <div class="checkbox checkbox-switchery">
        <label class="row w-100">
            <div class="col-md-2"><img src="https://test.neiros.ru/cdn/v1/chatv2/images/icons/social/1.png" class="icon-social__img"></div>


            <div class="col-md-7"><input type="text" class="form-control" value="{{$widget_vk->social_tele_url}}" placeholder="URL" name="social_tele_url"></div>

            <div class="col-md-3">
                <input type="hidden" name="social_tele"  value="0">
                <input type="checkbox" class="switchery social-checkbox" id="social_tele" value="1"
                       name="social_tele" @if($widget_vk->social_tele==1) checked="checked" @endif  >

{{--                <input type="hidden" name="social_tele" value="0">--}}
{{--                <span class="switchery-xs"><input type="checkbox" class="js-switch" data-id=""--}}
{{--                                                  name="social_tele" value="1"--}}
{{--                                                  @if($widget_vk->social_tele==1) checked @endif></span>--}}
            </div>
        </label>
    </div>
    {{--<div class="form-group" style="margin-top: 10px">
        <div class="col-md-9">
            <button type="button" class="btn btn-primary w_safebutton ">Сохранить<i
                        class="icon-arrow-right14 position-right " ></i></button>
        </div>

    </div>--}}
</div>

        <div class="form-group footer-button">
            <div class="col-xs-12">

                <button type="button" class="btn btn-primary  w_safebutton ">Сохранить</button>
                <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
            </div>

        </div>

    </form>
@if($for_view)</div>
</div> @endif

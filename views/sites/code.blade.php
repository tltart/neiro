<textarea class="form-control" style="height: 250px">{!! htmlspecialchars('
    <!-- BEGIN Neiros code-->
         <script> var scr = {"scripts":[{"src" : "'.$_ENV['APP_URL'].'/api/widget_site/get/'.$client->hash.'","async" : false}]};
	  !function(t,n,r){"use strict"; var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;
	  for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};
	  t.addEventListener?t.addEventListener("DOMContentLoaded",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){
         c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);</script>
          <noscript><img src="'.env('APP_URL').'/api/noscript/'.$client->hash.'" alt="neiros"/> </noscript>
   <!-- END Neiros code -->
	') !!}</textarea>
<form action="" method="POST">
    @csrf
    <input type="hidden" class="form-control" name="id"
           value="{{$client->id}}">
    <input type="hidden" class="form-control" name="form_action"
           value="savesettingsite">
    <div class="form-grout">
        <label class="add-number-new-checkbox label-dir">
            Разделять трафик с поддоменов
            <input type="checkbox"  type="checkbox"  @if ($client->poddomain_traffic==1)checked

            @endif name="poddomain_traffic" value="1">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-grout">
        <label class="add-number-new-checkbox label-dir">
            Добавлять Neiros_Visit в формы
            <input type="checkbox"  type="checkbox"  @if ($client->add_neiros_form==1)checked

            @endif name="add_neiros_form" value="1">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-grout">
        <label class="add-number-new-checkbox label-dir">
            Слать ежедневную статистику на email
            <input type="checkbox"   type="checkbox"  @if ($client->send_email_stat==1)checked   @endif name="send_email_stat" value="1">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-grout">
        <label  >
            E-mail для уведомлений
            <input type="text"      name="email_for_stat" value="{{$client->email_for_stat}}">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-group footer-button">
        <div class="col-xs-12">
            <button type="button"  class="btn btn-primary  w_safebutton">Сохранить</button>

            <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
        </div>

    </div>
</form>

<div class="for-direct">
    <div class="for-direct-d "  data-status="false">
        <div class="for-direct-d-text click_adwords" data-id="{{$adword->id}}">{{$adword->email}}
            @if($adword->email=='')ADWORDS @endif
            @if($adword->customer) {{$adword->customer->name}}@endif</div>
        <div class="for-direct-d-checkbox"><span class="switchery-xs-new direct-company{{$adword->id}}">
                 <input id="direct-company{{$adword->id}}" type="checkbox"  class="js-switch ad_dir_switch" data-model="WidgetAdword"
                   data-id="{{$adword->id}}"      name="direct-company" @if($adword->status==1) checked="checked" @endif></span>
        </div>
        @if($adword->number>1)  <div class="for-direct-d-btn delete_adwords_direct"  data-model="WidgetAdword"
                                     data-id="{{$adword->id}}"   >удалить</div>@endif
    </div>
</div>
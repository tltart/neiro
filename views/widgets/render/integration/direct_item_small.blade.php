<div class="for-direct">
    <div class="for-direct-d "  data-status="false">
        <div class="for-direct-d-text click_direct" data-id="{{$direct->id}}">
            @if($direct->email=='')DIRECT @endif
            {{$direct->email}} </div>
        <div class="for-direct-d-checkbox"><span class="switchery-xs-new direct-company{{$direct->id}}">
                 <input id="direct-company{{$direct->id}}" type="checkbox"  class="js-switch ad_dir_switch" data-model="WidgetDirect"
                        data-id="{{$direct->id}}"            name="direct-company" @if($direct->status==1) checked="checked" @endif></span>
        </div>
        @if($direct->number>1)  <div class="for-direct-d-btn delete_adwords_direct"  data-model="WidgetDirect"
                                     data-id="{{$direct->id}}" >удалить</div>@endif
    </div>
</div>
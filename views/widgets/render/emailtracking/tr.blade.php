<tr id="email_id_{{$email->id}}">

    <td>
        @if($email->type_add_email==1)
        @php
        if($email->dinamic_type==1){
                $k=explode('@',$email->email);
if(count($k)==2) {
 echo   $k[0].'+'.$email->plus_email.'@'.$k[1];
}
}else{
    echo $email->email ;
}

                @endphp
        @else
            {{$email->email}}
        @endif
        </td>
    <td>

        @if($email->type_add_email==1) Генерация e-mail @endif
        @if($email->type_add_email==2) Использовать свои адреса @endif


    </td>

    <td>@if($email->dinamic_type==0)Динамика @else Статика  @endif</td>

    <td>@if($email->getserver){{$email->getserver->name}}@else{{$email->server}}@endif</td>
    <td class="text-center">
{{--        @if($email->status==1)<span style="color: green">ON</span>@else<span style="color: red">OFF</span>@endif--}}
        <span class="switchery-xs"><input checked type="checkbox" class="js-switch js-switch" data-id="{{$email->id}}"></span>
    </td>

    <td class="text-center"><a href="#" class="item-widget1 form-btn-icon" data-name="Редактировать" data-id="email_track_edit_modal" data-item_id="{{$email->id}}">
{{--            <i class="glyphicon  glyphicon-pencil" style="color: red"></i>--}}
            <img class="user-btn" src="/global_assets/images/icon/user/edit.svg">
        </a></td>
    <td class="text-center"><a href="#" data-id="{{$email->id}}" data-url="/email/del/{{$email->id}}" class="deletefrom form-btn-icon">
{{--            <i class="glyphicon  glyphicon-trash" style="color: red"></i>--}}
            <img class="user-btn" alt="" src="/global_assets/images/icon/user/trash.svg">
        </a></td>
</tr>


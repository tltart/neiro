
<? $id = uniqid();?>
<tr  id="del{{$user->id}}">

    <td><span class="user-avatar user-avatar-ic"><img src="/global_assets/images/icon/user/user.svg"></span><span class="user-name">{{$user->name}}</span></td>
    <td>{{$user->email}}</td>
    <td>{{optional($user->usergroup)->name}}</td>
    <td>
        @if($user->role==0) Администратор @endif
        @if($user->role==1) Менеджер @endif
        @if($user->role==2) Оператор @endif

    </td>
    <td class="text-center"><span class="switchery-xs"><input checked type="checkbox" class="js-switch js-switch<?=$id?>" data-id="{{$user->id}}"></span></td>
    <td class="text-center"><a class="edit-user" data-id="{{$user->id}}"><img class="user-btn" src="/global_assets/images/icon/user/edit.svg"></a></td>
    <td class="text-center">@if($user->id!==1)<a href="#" data-id="{{$user->id}}" data-url="/setting/users/{{$user->id}}"  class="deletefrom" ><img class="user-btn" src="/global_assets/images/icon/user/trash.svg"></a>@endif
    </td>
</tr>


<script>


var elems = document.querySelectorAll('.js-switch<?=$id?>');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}</script>
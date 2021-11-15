<tr  id="del_{{$client->id}}" class="cat_{{$client->id}}"  data-id="{{$client->id}}" >

    <td>{{$client->name}}</td>

<!--    <td>
        <a href="/setting/stages/{{$client->id}}/edit" ><i class="fa fa-edit" style="position: relative"></i></a></td>-->

    <td><a href="#" data-id="{{$client->id}}" data-url="/setting/stages/{{$client->id}}"  class="deletefrom" ><i class="fa fa-trash" style="color: red;position: relative"></i></a>
    </td>



</tr>
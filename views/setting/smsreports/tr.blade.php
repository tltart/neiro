<tr id="del{{$client->id}}">

    <td>{{$client->site->name}}</td>
    <td>{{date('H:i d.m.Y',strtotime($client->send_date))}}</td>

    <td>
        <a href="/setting/smsreports/{{$client->id}}/edit"><i class="glyphicon glyphicon-pencil"></i></a>
    </td>

    <td><a href="#" data-id="{{$client->id}}" data-url="/setting/smsreports/{{$client->id}}"
           class="deletefrom"><i class="fa fa-trash" style="color: red;position: absolute"></i></a>
    </td>


</tr>
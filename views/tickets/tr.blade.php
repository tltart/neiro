<tr>
    <td>{{$item->number}}</td>
    <td><a href="{{route('wtickets.view',$item->id)}}">{{$item->subject}}</a> </td>
    <td>{{$item->status->name}}</td>

    <td>{{$item->updated_at}}</td>

    <td>{{$item->user->name}}</td>
    <td>{{$item->category->name}}</td>

</tr>
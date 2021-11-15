
<tr   id="del{{$client->id}}">

    <td>{{$client->name}}</td>
    <td>{{$client->gettip->name}}</td>
    <td>@foreach($client->getvalue as $getvalue)
            {{$getvalue->name}},

        @endforeach
    </td>
    @if($tipfields==0)

        <td><a href="#" data-id="{{$client->id}}" data-url="/setting/projectfield/{{$client->id}}"  class="deletefrom" ><i class="  fa-trash" style="color: red;position: relative"></i></a>
        </td>




    @elseif($tipfields==1)




        <td><a href="#" data-id="{{$client->id}}" data-url="/setting/clientfield/{{$client->id}}"  class="deletefrom" ><i class="glyphicon  glyphicon-trash" style="color: red"></i></a>
        </td>
    @elseif($tipfields==2)



        <td><a href="#" data-id="{{$client->id}}" data-url="/setting/companyfield/{{$client->id}}"  class="deletefrom" ><i class="fa fa-trash" style="color: red"></i></a>
        </td>
    @endif






</tr>
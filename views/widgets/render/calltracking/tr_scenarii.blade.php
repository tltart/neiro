<tr id="idsr{{$rout->id}}">
    {{--<td>
        <div class="checkbox checkbox-switchery ">
            <label>
                <input type="checkbox" class="switchery1"
                       id="statusrout{{$rout->id}}"
                       name="status"
                       @if($rout->status==1) checked="checked"
                       @endif  data-id="{{$rout->id}}">

            </label>
        </div>
    </td>--}}
    <td>{{$rout->name}}</td>
    <td>@if($rout->tip_calltrack==1)  Динамический @else
            Статический @endif</td>
    <td>
        @if(count($rout->phones)>0)
            <button type="button" class="btn btn-default btn-sm"
                    data-popup="tooltip"
                    title="@foreach($rout->phones as $pho)
                    {{$pho->input}}<br>

                                                  @endforeach             " data-html="trur"
                    data-trigger="click">{{count($rout->phones)}}</button>@else


            0 @endif</td>
    {{--<td>@if($rout->tip_calltrack==1)
            0% @else   @if(count($rout->phones)>0) 100% @else
                0% @endif @endif</td>--}}
    <td>
        @if(count($rout->phones)>0)


            {{$rout->phones->sum('amout_call')}}




        @else 0 @endif


    </td>
    <td>{{date('d-m-Y',strtotime($rout->created_at))}}</td>
    <td>@if($rout->new_save==1) {{implode(',',$rout->number_to)}} @else  {{ $rout->number_to}} @endif</td>
    <td><a href="#"
           onclick="edit_routing({{$rout->id}});return false;"><i
                    class="glyphicon  glyphicon-pencil"
                    style="color: blue"></i> </a></td>
    <td><a href="#"
           onclick="delete_routing({{$rout->id}});return false;"><i
                    class="glyphicon  glyphicon-trash"
                    style="color: red"></i> </a></td>


</tr>
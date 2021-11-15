@php
 $status_call['CANCEL']='Вызов отменен';
 $status_call['ANSWER']='Отвечено';
 $status_call['NO ANSWER']='Без ответа';
 $status_call['ANSWERED']='Отвечено';
 $status_call['NOANSWER']='Без ответа';
 $status_call['CONGESTION']='Канал перегружен';
 $status_call['CHANUNAVAIL']='Канал недоступен';
 $status_call['BUSY']='Занято';




@endphp
 
@foreach($input_calls as $cal)
    <tr data-id="{{$cal->id}}" data-all="@json($cal)">
        <td>
            @if($cal->type==0) <i class="fa fa-phone"></i>@else <i class="fa fa-phone-volume"></i>@endif
            {{date('H:i:s d-m-Y',strtotime($cal->calldate))}}</td>

        <td>{{$cal->src}}</td>
        <td>{{$cal->did}}</td>
        <td>{{($cal->ogidanie)}}</td>
        <td>{{$cal->timing}} </td>
        <td>{{$cal->status}}

        </td>
        <td>
            @if($cal->uploaded==10)
@if($cal->id>104480)
            <audio controls>
                <source src="https://audio.neiros.ru/{{$cal->token}}.mp3" type="audio/mp3" >
                https://audio.neiros.ru/{{$cal->token}}.mp3
            </audio>
                @else
                    <audio controls>
                        <source src="https://storage.yandexcloud.net/neirosaudio/{{$cal->token}}.mp3" type="audio/mp3" >
                        https://storage.yandexcloud.net/neirosaudio/{{$cal->token}}.mp3
                    </audio>
    @endif
        @endif
        </td>
        <td>@if($cal->is_repeat==1)<span class="leads__status-label" style="background-color: null"><span class="block-selectable">Повторная</span></span>@else<span class="leads__status-label" style="background-color: #efc455"><span class="block-selectable">Новая</span></span> @endif</td>
        <td>{!! $cal->source !!}</td>
       {{-- <td>@if($cal->project){!! $cal->project->client_project_id !!} {{$cal->project->comment}}@endif</td>--}}
<?php /*?>    <td>




            @if($cal->to_text_status==100)  


                <a href="#" onclick="get_dialog({{$cal->id}});return false;"  >Посмотреть</a>


            @endif
        </td><?php */?>




    </tr>

@endforeach

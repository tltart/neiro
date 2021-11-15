<table class="table table-bordered">
    @foreach($datas as $item)
       <tr>
           <td>{{$item->reports_date}}</td>

           <td>x{{$item->sdelka}}</td>
           <td>{{$item->project_id}}</td>
           <td>{{$item->site_id}}</td>
           <td>{{$item->typ}}</td>
           <td> @if(is_string($item->reports_date))
               {{$item->reports_date}}
             @else
              @php
               $mongoDate = $item->reports_date;
 
               $dateTimeDefaultTimeZone = $mongoDate->toDateTime()->format('Y-m-d H:i:s')  ;
         print $dateTimeDefaultTimeZone
              @endphp

             @endif</td>
           <td></td>


       </tr>

    @endforeach

</table>
{{$datas->links()}}
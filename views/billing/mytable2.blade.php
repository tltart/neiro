@if(isset($phones))
    @for($key=0;$key<count($phones);$key++)
        <tr>
            <td>{{$phones[$key]['phone']}}</td>
            <td>{{$phones[$key]['input']}}</td>
            <td>{{$phones[$key]['duration']}}</td>
            <td>{{date('H:i d-m-Y',strtotime($phones[$key]['created_at']))}}</td>

            <td>
               @php
               try{
 print   $phones[$key]['minuta'];
}catch (

    \Exception  $e
){
    print  'mmmm'.$phones[$key]['minuta'];
}

               @endphp
                </td>
            <td>{{$phones[$key]['summ']}}</td>
            <td>{{$phones[$key]['tip']}}</td>


        </tr>
    @endfor
@endif
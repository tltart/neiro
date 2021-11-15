<table class="table table-bordered">
    @foreach($leads as $lead)
  @php
      $site='';
if(isset($lead['base_widget_id'])){
;      $widget=\App\Widgets::find($lead['base_widget_id']);
    if($widget){

      if($widget->sites){
        $site=$widget->sites->name;
      }

    }
    }
  @endphp

    <tr>
        <td>{{$lead['_id']}}</td>
        <td>@if(isset($lead['method'])){{$lead['method']}}@endif</td>
        <td>{{$site}}</td>
        <td>@if(isset($lead['w_url'])){{$lead['w_url']}}@endif</td>
        <td><a href="/admin/peresop/{{$lead['_id']}}">Пересоздать</a> </td>


    </tr>

    @endforeach
</table>

<h3>Обновлено {{date('H:i:s')}}</h3>
<table class="table table-bordered">
    <thead><tr>
        <td>Метрика</td>
        <td>IP</td>
        <td>Время на сайте</td>
        <td>Текущий урл</td>
        <td>Номер визита</td>
        <td>Источник</td>
        <td>Страницы</td>

    </tr></thead>
<tbody>
@foreach($array_return as $key=>$val)
    <tr>
        <td> {{$key}}</td>
        <td>@if($val['metrika'])  {{$val['metrika']->ip}}  @endif</td>
        <td>{{$val['max_time']}}   @if(isset($val['xxx'])&&($val['xxx']==0)) <span style="color: red">0</span> @endif</td>
        <td>@if($val['last'])  <a href="{{$val['last']['doc_url']}}" title="">{{$val['last']['doc_url']}}</a>   @endif</td>
        <td>@if($val['metrika'])  {{$val['metrika']->visit}}  @endif</td>
        <td>@if($val['metrika'])  {{$val['metrika']->typ20}}/{{$val['metrika']->src}}  @endif</td>
        <td><a href="/admin/auseronline2?site_id={{request('site_id')}}&pages={{$key}}" target="_blank">{{count($val['pages'])}}</a> </td>

    </tr>
@endforeach
</tbody>

</table>




<tr>
    <td>{{$company->number}}</td>
    <td>@if(isset($firms[$company->company_id])) {{$firms[$company->company_id]->short_name}} @endif</td>
    <td>{{$company->summ}}</td>
    <td>{{date('H:i d-m-Y',strtotime($company->created_at))}}</td>
    <td>
        @if($company->status==0)  Новый @endif
        @if($company->status==1)  Оплачен @endif
        @if($company->status==2)  Отменен @endif

    </td>
    <td><a href="/setting/checkcompanys/getschet/{{$company->id}}">Печать</a></td>

    @if($admin==1) <td>@if($company->status==0) <button class="btn btn-success" onclick="payschet({{$company->id}})">Оплатить</button>  @endif</td>@endif





</tr>
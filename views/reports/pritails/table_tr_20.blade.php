
<tr>
    <td style="min-width: {{$mass_width[0]+1}}px; width: {{$mass_width[0]+1}}px; max-width: {{$mass_width[0]+1}}px;"
        class="left-sitebar-table border-table-data">
        <div class="more-data more-data-child">@if($table_tr['icon']!='')<img src="{{$table_tr['icon']}}">@endif
       @if($table_tr['typ']==3) {{idn_to_utf8($table_tr['src'])}} @else {{$table_tr['view_name']}} @endif

            </div>
        <img src="/25.gif" class="m{{$table_tr['src']}}"
             style="height: 14px;float: right;margin-top: 4px;display: none"></td>

    <td class="border-table-data"
        style="min-width: {{$mass_width[1]+2}}px; width: {{$mass_width[1]+2}}px; max-width: {{$mass_width[1]+2}}px;">
        <div>{{$table_tr['posetitel']}} </div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[2]+2}}px; width: {{$mass_width[2]+2}}px; max-width: {{$mass_width[2]+2}}px;">
        <div>{{$table_tr['sdelka']}} </div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[3]+2}}px; width: {{$mass_width[3]+2}}px; max-width: {{$mass_width[3]+2}}px;">@if($table_tr['posetitel']>0){{number_format($table_tr['sdelka']/$table_tr['posetitel']*100, 2, '.', '')}} @else 0.00 @endif
        %
        <div></div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[4]+2}}px; width: {{$mass_width[4]+2}}px; max-width: {{$mass_width[4]+2}}px;"> @if($table_tr['sdelka']>0){{number_format($table_tr['cost']/$table_tr['sdelka'], 2, '.', '')}} р @else 0.00 р @endif
        <div></div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[5]+2}}px; width: {{$mass_width[5]+2}}px; max-width: {{$mass_width[5]+2}}px;">
        <div>{{$table_tr['lead']}}</div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[6]+2}}px; width: {{$mass_width[6]+2}}px; max-width: {{$mass_width[6]+2}}px;">
        <div>@if($table_tr['sdelka']>0){{number_format($table_tr['lead']/$table_tr['sdelka']*100, 2, '.', '')}} @else 0.00 @endif%</div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[7]+2}}px; width: {{$mass_width[7]+2}}px; max-width: {{$mass_width[7]+2}}px;">
        <div> @if($table_tr['lead'] != 0)
                {{number_format($table_tr['summ']/$table_tr['lead'], 2, '.', '')}} @else 0.00 @endif р.
        </div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[8]+2}}px; width: {{$mass_width[8]+2}}px; max-width: {{$mass_width[8]+2}}px;">
        <div>{{ number_format($table_tr['summ'], 2, '.', '') }} р.</div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[9]+2}}px; width: {{$mass_width[9]+2}}px; max-width: {{$mass_width[9]+2}}px;">
        <div>{{ number_format($table_tr['cost'], 2, '.', '') }} р.</div>
    </td>
    <td class="border-table-data"
        style="min-width: {{$mass_width[10]+2}}px; width: {{$mass_width[10]+2}}px; max-width: {{$mass_width[10]+2}}px;">@if($table_tr['cost']>0)<div>{{ number_format(($table_tr['summ']-$table_tr['cost'])/$table_tr['cost']*100, 2, '.', '') }}%</div>@else <div>0%</div>@endif


    </td>
</tr>
<tr id="m{{$table_tr['src']}}"></tr>




<tr>
    <td  style="min-width: {{$mass_width[0]+1}}px; width: {{$mass_width[0]+1}}px; max-width: {{$mass_width[0]+1}}px;" class="left-sitebar-table border-table-data">

        <div class="more-data more-data-child2"><i style="display: none;" class="fa fa-minus" aria-hidden="true"></i> <i class="fa fa-plus" data-lvl="{{$lvl}}" data-type="{{$directINFO->_id}}" data-typ="InstagramApi" data-report="{{ $report->id }}" data-hash="m{{$hash}}" aria-hidden="true"
                                                                                                                         @if($lvl==4)style="display:none ;"@else style="display: block;"  @endif></i><span>{{$directINFO->get_name}}</span><i style="display: none;" class="fa fa-spinner fa-spin  fa-fw" ></i></div>
    </td>

    <td  class="border-table-data" style="min-width: {{$mass_width[1]+2}}px; width: {{$mass_width[1]+2}}px; max-width: {{$mass_width[1]+2}}px;" ><div> {{$directINFO->posetitel}}</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[2]+2}}px; width: {{$mass_width[2]+2}}px; max-width: {{$mass_width[2]+2}}px;" ><div>{{$directINFO->sdelka}}</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[3]+2}}px; width: {{$mass_width[3]+2}}px; max-width: {{$mass_width[3]+2}}px;" >{{number_format($con_sd, 2, '.', '')}}%<div></div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[4]+2}}px; width: {{$mass_width[4]+2}}px; max-width: {{$mass_width[4]+2}}px;" >{{number_format($requrey, 2, '.', '')}} р.<div></div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[5]+2}}px; width: {{$mass_width[5]+2}}px; max-width: {{$mass_width[5]+2}}px;" ><div>{{$directINFO->lead}}</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[6]+2}}px; width: {{$mass_width[6]+2}}px; max-width: {{$mass_width[6]+2}}px;" ><div>{{number_format($con_ld, 2, '.', '')}}%</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[7]+2}}px; width: {{$mass_width[7]+2}}px; max-width: {{$mass_width[7]+2}}px;" ><div> @if($directINFO->lead != 0)
    {{number_format($directINFO->summ/$directINFO->lead, 2, '.', '')}} @else {{0}} @endif р.</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[8]+2}}px; width: {{$mass_width[8]+2}}px; max-width: {{$mass_width[8]+2}}px;" ><div>{{ number_format($directINFO->summ, 2, '.', '') }} р.</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[9]+2}}px; width: {{$mass_width[9]+2}}px; max-width: {{$mass_width[9]+2}}px;" ><div>{{ number_format($summ_rashod, 2, '.', '') }} р.</div></td>
    <td class="border-table-data" style="min-width: {{$mass_width[10]+2}}px; width: {{$mass_width[10]+2}}px; max-width: {{$mass_width[10]+2}}px;" ><div>{{$roi}}</div></td>
</tr><tr  id="m{{$hash}}"></tr>

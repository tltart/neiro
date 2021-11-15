@php

$m3=round($item->month*3)-round($item->month*3*$item->montsh3/100)  ;
$m6=round($item->month*6)-round($item->month*6*$item->month6/100)  ;
$m12=round($item->month*12)-round($item->month*12*$item->year/100) ;
$m24=round($item->month*24)-round($item->month*24*$item->year2/100) ;

@endphp

<div class="col-xs-12 col-md-3 s-balance-tarif-st">
    <div class="s-balance-tarif-block  @if($item->id==$my_terif)  active-tarif @endif" id="tarif-total{{$item->id}}"  data-montn ="{{$item->month}}"
         data-month12 ="{{$item->year}}"
         data-montsh3 ="{{$item->montsh3}}"
         data-month6 ="{{$item->month6}}"
         data-month24 ="{{$item->year2}}"

         data-m3 ="{{$m3}}"
         data-m6 ="{{$m6}}"
         data-m12 ="{{$m12}}"
         data-m24 ="{{$m24}}"
         data-id ="{{$item->id}}">

        <div class="s-balance-icon">
            <img src="/global_assets/images/setting-img/icon-checking.png" alt="" >
        </div>

        <div class="s-balance-tarif-title">
            {{$item->name}}
        </div>
        <div class="s-balance-tarif-detail">
            {{$item->short_name}}
        </div>
        <div class="s-balance-tarif-wrapper">
            {!! $item->text !!}
        </div>
        <div class="s-balance-tarif-price">@if($item->month>0)
            <span >{{$item->month}} руб/месяц</span>
                                               @else
                <span >Бесплатно</span>
            @endif
        </div>

        <div class="s-balance-tarif-btn" data-montn ="{{$item->month}}"
             data-month12 ="{{$item->year}}"
             data-montsh3 ="{{$item->montsh3}}"
             data-month6 ="{{$item->month6}}"
             data-month24 ="{{$item->year2}}"

             data-m3 ="{{$m3}}"
             data-m6 ="{{$m6}}"
             data-m12 ="{{$m12}}"
             data-m24 ="{{$m24}}"
             data-id ="{{$item->id}}"



        >
            <button type="button" class="btn btn-primary  "
                     >Подключить</button>
        </div>


    </div>
</div>

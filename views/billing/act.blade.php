<!doctype html>
<html>
<head>@inject('Check','\App\Http\Controllers\CheckcompanysControllers')
    @if($act->schet_id>0)
        <title>Акт № {{$act->number}}{{$act->schet_id}} от {{date('d.m.Y',strtotime($act->month))}} г.</title>
    @else
    <title>Акт № {{$act->number}} от {{date('d.m.Y',strtotime($act->month))}} г.</title>@endif
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        @font-face {
            font-family: 'arial';
            src: url({{ public_path('fonts/arial.ttf') }}) format('truetype');
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'arial_bold';
            src: url({{ public_path('fonts/arial-Bold.ttf') }}) format('truetype');
            font-weight: 400;

        }
    </style>
 {{--   <script>window.print() ;</script>--}}
</head>
<body>
<table cellspacing="0" style="width: 700px;font-size: 16px;">
    <tr><img src="https://cloud.neiros.ru/images/logo.png">
    </tr>
    <tr height="20px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="6" style="border-bottom: 3px solid #000;font-size: 20px;font-weight: bold;">
            @if($act->schet_id>0)
                Акт № {{$act->number}}{{$act->schet_id}}
            @else
                Акт № {{$act->number}}
            @endif
             от {{date('d.m.Y',strtotime($act->month))}} г.</td>
    </tr>
    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td>Исполнитель:</td>
        <td colspan="5" style="font-weight: bold;"> {{$rec->short_name}}, ИНН {{$rec->inn}}, {{$rec->ur_adres}}, тел.:  {{$rec->phone}}		</td>
    </tr>
    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td>Заказчик:</td>
        <td colspan="5" style="font-weight: bold;">{{$company->short_name}}, ИНН {{$company->inn}}, {{$company->ur_adres}}, тел.: {{$company->phone}}    </td>
    </tr>
    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr style="font-weight: bold;text-align: center;">
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-left: 2px solid #000;border-bottom: 1px solid #000;">№</td>
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-bottom: 1px solid #000;">Наименование работ, услуг</td>
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-bottom: 1px solid #000;">Кол-во</td>
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-bottom: 1px solid #000;">Ед.</td>
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-bottom: 1px solid #000;">Цена</td>
        <td style="border: 1px solid #000;border-top: 2px solid #000;border-right: 2px solid #000;border-bottom: 1px solid #000;">Сумма</td>
    </tr>
    <tr>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-left: 2px solid #000;border-bottom: 0px solid #000;text-align: center;">1</td>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-bottom: 0px solid #000;">Предоставление неисключительной лицензии  @if($act->schet_id>0)  @else за период
              с {{$date_start}} года по {{$date_end}} года @endif </td>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-bottom: 0px solid #000;text-align: center;">1</td>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-bottom: 0px solid #000;text-align: right;">шт.</td>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-bottom: 0px solid #000;text-align: right;">
           @if($act->schet_id>0){{$act->summ}}@else {{$act_table->sum('summ')}}@endif</td>
        <td style="border: 1px solid #000;border-top: 1px solid #000;border-right: 2px solid #000;border-bottom: 0px solid #000;text-align: right;">  @if($act->schet_id>0){{$act->summ}}@else{{$act_table->sum('summ')}}@endif</td>
    </tr>
    <tr>
        <td colspan="6" style="border-top: 2px solid #000;"></td>
    </tr>

    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="5" style="font-weight: bold;text-align: right;">Итого:</td>
        <td style="font-weight: bold;text-align: right;">  @if($act->schet_id>0){{$act->summ}}@else{{$act_table->sum('summ')}}@endif</td>
    </tr>
    <tr>
        <td colspan="6" style="font-weight: bold;text-align: right;">Без налога (НДС)</td>
        <td style="font-weight: bold;text-align: left;">-</td>
    </tr>
    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="6">Всего оказано услуг 1, на сумму   @if($act->schet_id>0){{$act->summ}}@else{{$act_table->sum('summ')}}@endif руб.</td>
    </tr>
    <tr>
        <td colspan="6" style="font-weight: bold;">  @if($act->schet_id>0){{mb_ucfirst(num2str($act->summ))}}@else{{mb_ucfirst(num2str($act_table->sum('summ')))}}@endif</td>
    </tr>
    <tr height="15px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="6">Вышеперечисленные услуги выполнены полностью и в срок. Заказчик претензий по объему, качеству и срокам оказания услуг не имеет.</td>
    </tr>
    <tr height="50px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="1" style="font-weight: bold;">ИСПОЛНИТЕЛЬ</td>
        <td></td>
        <td colspan="4" style="font-weight: bold;">ЗАКАЗЧИК</td>
        <td></td>
    </tr>
    <tr>
        <td colspan="1">ООО "Нейрос"</td>
        <td></td>
        <td colspan="4">{{$company->short_name}}</td>
        <td></td>
    </tr>
    <tr height="50px;">
        <td colspan="6"></td>
    </tr>
    <tr>
        <td colspan="1" style="border-bottom: 1px solid #000;"></td>
        <td>(Вершинина М.Б)</td>
        <td colspan="4" style="border-bottom: 1px solid #000;"></td>
    </tr>
</table>
<div style="position: absolute; margin-top: 1px; margin-left: 8px;">
    <img src="https://cloud.neiros.ru/images/pechat.png" style="width: 145px; margin-top: -20px;"></div>
<div style="position: absolute;margin-top: -49px;margin-left: 40px;"><img src="https://cloud.neiros.ru/images/podpis.png" style="width: 103px;"></div>
<div style="width: 45mm;text-align:center; margin-top: 30px;">М.П.</div>
<div style="width: 45mm;text-align:center; margin-top: -20px; margin-left: 500px;">М.П.</div>
</body>
</html>
@php
    function mb_ucfirst($str, $encoding='UTF-8')
    {
        $str = mb_ereg_replace('^[\ ]+', '', $str);
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
               mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }
    function num2str($num) {
$nul='ноль';
$ten=array(
array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
);
$a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
$tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
$hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
$unit=array( // Units
array('копейка' ,'копейки' ,'копеек',	 1),
array('рубль'   ,'рубля'   ,'рублей'    ,0),
array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
array('миллион' ,'миллиона','миллионов' ,0),
array('миллиард','милиарда','миллиардов',0),
);
//
list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
$out = array();
if (intval($rub)>0) {
foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
   if (!intval($v)) continue;
   $uk = sizeof($unit)-$uk-1; // unit key
   $gender = $unit[$uk][3];
   list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
   // mega-logic
   $out[] = $hundred[$i1]; # 1xx-9xx
   if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
   else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
   // units without rub & kop
   if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
} //foreach
}
else $out[] = $nul;
$out[] = morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
$out[] = $kop.' '.morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
}
function morph($n, $f1, $f2, $f5) {
$n = abs(intval($n)) % 100;
if ($n>10 && $n<20) return $f5;
$n = $n % 10;
if ($n>1 && $n<5) return $f2;
if ($n==1) return $f1;
return $f5;
}
        @endphp
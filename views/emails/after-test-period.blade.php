@extends('emails.new_email_app')

@section('content')






    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            <p class="wrap-td-content-text-p" style="margin-block-start: 40px;margin-block-end: 35px;">Здравствуйте,
                {{$name}}!</p>
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Вы превысили ограничения тарифного плана «{{$tarif_1}}», поэтому мы изменили его на более
                подходящий «{{$tarif_2}}». Тарифный план ограничивается количеством проектов, суммой
                визитов, рекламных расходов по всем проектам и одним активным виджетом.</p>

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">Узнать условия или выбрать другой тарифный план можно в биллинге.</p>
        </td>
    </tr>


    <tr>
        <td align="center" class="wrap-td-content-btn" style="margin: 0;padding: 0; padding-top:35px; padding-bottom:70px">
            <a class="content-button-link" href="https://neiros.cloud/setting/billing" style="text-decoration: none !important;background: #2196f2;font-family: 'Raleway', sans-serif;font-size: 19px;color: #ffffff!important;font-style: normal;letter-spacing: normal;text-align: center;padding: 10px 40px;font-weight: normal;line-height: normal;border-radius: 4px;display: inline-block;">Перейти в биллинг</a>
        </td>
    </tr>





@endsection
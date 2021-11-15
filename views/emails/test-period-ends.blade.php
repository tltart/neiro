@extends('emails.new_email_app')

@section('content')
    <tr>
        <td class="wrap-td-content-title" style="margin: 0;padding: 40px 0;font-family: 'Raleway', sans-serif;font-size: 35px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            Набор инструментов для эффективности
            вашего бизнеса



        </td>
    </tr>

    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Здравствуйте, {{$name}}!</p>
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Через {{$day}} ваш тестовый период в Neiros подойдет к концу. Вы уже знакомы с тарифными планами
                Neiros? Предлагаем вам прямо сейчас узнать, сколько будет стоить качественная аналитика вашего
                бизнеса.</p>
        </td>
    </tr>


    <tr>
        <td align="center" class="wrap-td-content-btn" style="margin: 0;padding: 0; padding-top:0px">
            <a class="content-button-link" href="https://neiros.ru/price" style="text-decoration: none !important;background: #2196f2;font-family: 'Raleway', sans-serif;font-size: 19px;color: #ffffff!important;font-style: normal;letter-spacing: normal;text-align: center;padding: 10px 40px;font-weight: normal;line-height: normal;border-radius: 4px;display: inline-block;">Узнать о тарифах</a>
        </td>
    </tr>


    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; padding-top:30px">
        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Если у вас есть вопросы по работе сервиса или вы хотите, чтобы мы помогли вам настроить Neiros,
            просто напишите об этом в ответном письме.</p>

        </td>
    </tr>




@endsection
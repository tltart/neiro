@extends('emails.new_email_app')

@section('content')



    <tr>
        <td class="wrap-td-content-title" style="margin: 0;padding: 40px 0;font-family: 'Raleway', sans-serif;font-size: 35px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            Заявки из CRM-системы будут
            автоматически загружены в проект



        </td>
    </tr>




    <tr>
        <td  style="margin: 0;padding: 0;">
            <img class="table-header-logo-img" alt="neiros" src="https://neiros.cloud/images/email/not-integration.jpg" style="outline: none;display: block;margin: 0 auto;padding: 0px 0;padding-right: 15px;-ms-interpolation-mode: bicubic; max-width: 600px!important; width: 600px!important; height: auto;">



        </td>
    </tr>






    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0; padding-top:35px; text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Здравствуйте,
                {{$name}}!</p>
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">В ваш проект  "{{$site_name}}" (№{{$site_id}}) не настроена интеграция с CRM-системой.</p>

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Из-за этого вам недоступны важные показатели эффективности рекламных каналов: стоимость
                привлечения клиента (CPL), стоимость оплаты (СРО), окупаемость рекламных инвестиций (ROI) и др.</p>

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">Найдите свою CRM в списке поддерживаемых систем и подключите ее.</p>
        </td>
    </tr>


    <tr>
        <td align="center" class="wrap-td-content-btn" style="margin: 0;padding: 0; padding-top:20px">
            <a class="content-button-link" href="https://neiros.cloud/integration" style="text-decoration: none !important;background: #2196f2;font-family: 'Raleway', sans-serif;font-size: 19px;color: #ffffff!important;font-style: normal;letter-spacing: normal;text-align: center;padding: 10px 40px;font-weight: normal;line-height: normal;border-radius: 4px;display: inline-block;">Подключить CRM</a>
        </td>
    </tr>


    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; padding-top:35px;">
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Если вы не нашли свою СRM в каталоге интеграций или не хотите разбираться в этом. Просто <a class="wrap-td-content-text-a" href="https://neiros.cloud/tickets" style="text-decoration: none;color: #2196f2!important;">напишите</a>
                нам, специалисты Neiros осуществят все настройки самостоятельно.</p>

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 15px;">Всего хорошего!</p>
        </td>
    </tr>






@endsection
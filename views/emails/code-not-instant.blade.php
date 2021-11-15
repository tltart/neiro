@extends('emails.new_email_app')

@section('content')


    <tr>
        <td class="wrap-td-content-title" style="margin: 0;padding: 40px 0;font-family: 'Raleway', sans-serif;font-size: 35px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            Установите счетчик, чтобы увидеть
            эффективность рекламы.



        </td>
    </tr>

    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Здравствуйте,
                {{$name}}!</p>
            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">В ваш проект "{{$site_name}}" (№{{$site_id}}) не передаются данные о посещениях сайта. Без них
                Neiros не сможет оценить эффективность ваших рекламных каналов.</p>

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">Установите наш счетчик, который будет собирать информацию о посещениях, а также потребуется для
                работы инструментов Neiros.</p>
        </td>
    </tr>


    <tr>
        <td align="center" class="wrap-td-content-btn" style="margin: 0;padding: 0; padding-top:20px">
            <a class="content-button-link" href="https://neiros.cloud/setting/sites" style="text-decoration: none !important;background: #2196f2;font-family: 'Raleway', sans-serif;font-size: 19px;color: #ffffff!important;font-style: normal;letter-spacing: normal;text-align: center;padding: 10px 40px;font-weight: normal;line-height: normal;border-radius: 4px;display: inline-block;">Получить код счетчика</a>
        </td>
    </tr>


    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; padding-top:30px">
        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Если счетчик установлен и вы получили это письмо, проверьте, что он скопирован из нужного проекта и
            размещен внутри тега &lt;body&gt;.</p>
        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">Есть сложности с настройкой?</p>
        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 35px;">Мы готовы помочь! Просто ответьте на это письмо и с вами свяжется персональный менеджер.</p>

        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 15px;">Всего хорошего!</p>
        </td>
    </tr>






@endsection
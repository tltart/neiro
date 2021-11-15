@extends('emails.new_email_app')

@section('content')



    <tr>
        <td class="wrap-td-content" style="margin: 0;padding: 0;padding-bottom: 70px; border-bottom-width: 1px;border-bottom-style: solid;border-bottom-color: rgb(220, 220, 220);">
            <table align="center" border="0" bgcolor="#ffffff" cellpadding="0" cellspacing="0" width="100%" class="table-content" style="max-width: 600px;min-width: 160px;width: 100%;border-collapse: collapse;border-spacing: 0;margin: 0 auto;-mso-table-lspace: 0pt;-mso-table-rspace: 0pt;">
                <tbody class="wrap-table-content-block">


                <tr>
                    <td  style="margin: 0;padding: 0;padding-top: 40px;">
                        <img class="table-header-logo-img" alt="neiros" src="https://neiros.cloud/images/email/verification-email.png" style="outline: none;display: block;margin: 0 auto;padding: 0px 0;padding-right: 15px;-ms-interpolation-mode: bicubic; max-width: 600px!important; width: 600px!important; height: auto;">



                    </td>
                </tr>




                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 30px 0;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 10px;">
                            <span style="color:#5998c8;">{{$email_from}}</span> просит установить код Neiros на сайт <span style="color:#5998c8;">{{$site}}</span></p>



                    </td>
                </tr>


                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 0px;font-family: 'Raleway', sans-serif;font-size: 18px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; padding-bottom:10px;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 10px;">
                            <span style="color:#222222;">Перед закрывающимся тегом <span style="color:#e43030;">&lt;/body&gt;</span> вставте код:</p>



                    </td>
                </tr>



                <tr>
                    <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #222222;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; background: #f2f2f2;  border-radius: 5px; display:block; padding-left:30px; padding-bottom:15px; padding-top:15px; ">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 10px;"><code>{{$code}}</code></p>



                    </td>
                </tr>

@endsection
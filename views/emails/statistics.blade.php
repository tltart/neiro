@extends('emails.new_email_app')

@section('content')










    <tr>
        <td class="wrap-td-content-title" style="margin: 0;padding: 30px 0;font-family: 'Raleway', sans-serif;font-size: 25px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; text-align:center;">
            Статистика за: {!! $date !!}



        </td>
    </tr>


    <tr>
        <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: center;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">

            <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 25px;">Откройте <a class="wrap-td-content-text-a" href="https://neiros.cloud/" style="text-decoration: none;color: #2196f2!important;">Панель управления Neiros</a>, чтобы увидеть текущие данные!</p>
        </td>
    </tr>




    <tr>
        <td style="display:block; text-align: center">
            <table width="295" border="0" align="center" cellpadding="0" cellspacing="0" style="display:inline-block !important">
                <tbody>
                <tr>
                    <td align="center">
                        <table class="insider" width="287" border="0" align="center" cellpadding="0" cellspacing="0" border-radius="5px">
                            <tbody style="background:#0c5adb; border-radius:5px; display:inblock;">
                            <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: center;font-family: 'Raleway', sans-serif;font-size: 20px;color: #ffffff;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">

                                <p class="wrap-td-content-text-p" style=" color:#86aded; margin-block-start: 30px;margin-block-end: 15px;">Заявки</p>
                            </td>

                            <tr align="center" style="line-height:0px;">
                                <td style="padding-bottom: 35px; font-size:100px; color:#ffffff; font-weight: bold; line-height:100px;">
                                    {{$projects}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>



                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 0px;font-family: 'Raleway', sans-serif;font-size: 18px;color: #333333;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 20px;margin-block-end: 15px;">
                            Заявки:</p>



                    </td>
                </tr>

                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 0px;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">
                      @if($projects>0)Было оставлено {{$projects}} заявок @else Заявок не было @endif</p>



                    </td>
                </tr>





                </tbody>
            </table>



      @if($status_chat==1)
                <table width="295" border="0" align="center" cellpadding="0" cellspacing="0" style="display:inline-block !important">
                <tbody>
                <tr>
                    <td align="center">
                        <table class="insider" width="287" border="0" align="center" cellpadding="0" cellspacing="0" border-radius="5px">
                            <tbody style="background:#0c5adb; border-radius:5px; display:inblock;">
                            <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: center;font-family: 'Raleway', sans-serif;font-size: 20px;color: #ffffff;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">

                                <p class="wrap-td-content-text-p" style=" color:#86aded; margin-block-start: 30px;margin-block-end: 15px;">Чаты</p>
                            </td>

                            <tr align="center" style="line-height:0px;">
                                <td style="padding-bottom: 35px; font-size:100px; color:#ffffff; font-weight: bold; line-height:100px;">{{$chats}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>



                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 0px;font-family: 'Raleway', sans-serif;font-size: 18px;color: #333333;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 20px;margin-block-end: 15px;">
                            Чат:</p>



                    </td>
                </tr>

                <tr>
                    <td class="wrap-td-content-title" style="margin: 0;padding: 0px;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
                        <p class="wrap-td-content-text-p" style="margin-block-start: 0px;margin-block-end: 0px;">
                           @if($chats>0) Было {{$chats}} диалогов @else Никаких разговоров не было.@endif </p>



                    </td>
                </tr>





                </tbody>
            </table>
@endif
        </td>
    </tr>



@endsection
@extends('emails.new_email_app')

@section('content')
<tr>
    <td  style="margin: 0;padding: 0;padding-top: 40px;">
        <img class="table-header-logo-img" alt="neiros" src="https://neiros.cloud/images/email/verification-email.png" style="outline: none;display: block;margin: 0 auto;padding: 0px 0;padding-right: 15px;-ms-interpolation-mode: bicubic; max-width: 600px!important; width: 600px!important; height: auto;">



    </td>
</tr>




<tr>
    <td class="wrap-td-content-title" style="margin: 0;padding: 30px 0;font-family: 'Raleway', sans-serif;font-size: 18px;color: #24385b;font-style: normal;letter-spacing: normal;text-align: center;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly;">
        {{$title}}



    </td>
</tr>

<tr>
    <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #222222;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; background: #f2f2f2;  border-radius: 5px; display:block; padding-left:30px; padding-bottom:15px; padding-top:15px; font-weight: bold;">
         {!! $mess !!}


    </td>
</tr>


<tr>
    <td align="center" class="wrap-td-content-btn" style="margin: 0;padding: 0; padding-top:25px">
        <a class="content-button-link" href="https://neiros.cloud/" style="text-decoration: none !important;background: #2196f2;font-family: 'Raleway', sans-serif;font-size: 19px;color: #ffffff!important;font-style: normal;letter-spacing: normal;text-align: center;padding: 10px 40px;font-weight: normal;line-height: normal;border-radius: 4px;display: inline-block;">Личный кабинет</a>
    </td>
</tr>


<tr>
    <td class="wrap-td-content-text" style="margin: 0;padding: 0;text-align: left;font-family: 'Raleway', sans-serif;font-size: 16px;color: #24385b;font-style: normal;letter-spacing: normal;font-weight: normal;line-height: normal;-mso-line-height-rule: exactly; padding-top:35px">


    </td>
</tr>
@endsection
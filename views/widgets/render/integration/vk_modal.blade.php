<!DOCTYPE html>
<html lang="en">
<head>
    <script>var my_company_id={{Auth::user()->my_company_id}}</script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script  type="module"  src="/js/app.js"></script>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Neiros - @yield('title')</title>
        <script src="/global_assets/js/core/libraries/jquery.min.js"></script>
        </head>
        <body>

ожидаем конекта
<script>
    $hash = window.location.hash.slice(1)
    
    $.ajax({
        type: "POST",
        url: '/ajax/vkgroup' ,
        data: $hash,
        success: function (html1) {

          return window.location.href='/integration';

        }
    });
</script>

</body>
</html>
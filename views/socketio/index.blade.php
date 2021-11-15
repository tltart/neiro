<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <META HTTP-EQUIV="Access-Control-Allow-Origin" CONTENT="https://cloud.neiros.ru">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neiros  </title>
    <script src="https://cloud.neiros.ru:6006/socket.io/socket.io.js"></script>
    <script>
        username="wistis"; t=Math.random();

        var socket = io('https://cloud.neiros.ru:6006/',{secure: true,query:"neiros_visit={{$neiros_visit}}&url={{urlencode($url)}}&metrika_id={{$metrika_id}}&site_id={{$site_id}}&session_id={{$session_id}}"});

       // socket.connect('/',{query:"name=my_img_name"});

    </script>
</head>
<body></body>
</html>
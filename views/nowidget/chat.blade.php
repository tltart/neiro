@extends('app')
@section('title')
   Колтрекинг
@endsection
@section('newjs')
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="/js/jscolor.js"></script>

@endsection
@section('content')

      <div class="w-active-chat">
          <img src="https://cloud.neiros.ru/global_assets/images/icon/user/icon-active-chat.svg" alt="">
          <span>Диалогов нет</span>
          <p>Чтобы начать использование, необходимо активировать чат</p>

          <a href="/widgets" type="button" id="active-chat-btn" class="btn btn-primary  active-chat-btn " >Активировать чат</a>

      </div>

@endsection


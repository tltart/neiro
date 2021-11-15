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
  @if(in_array(auth()->user()->getMyCompany->tariff_id,[9,11,12,13]))
      <div class="w-active-chat">
          <img src="https://cloud.neiros.ru/global_assets/images/icon/user/icon-active-chat.svg" alt="">
          <span>Данных нет</span>
          <p>Чтобы начать использовать, необходимо сменить тариф</p>

          <a href="/setting/billing_all" type="button" id="active-chat-btn" class="btn btn-primary  active-chat-btn " >Сменить тариф</a>

      </div>
  @else
    <div class="w-active-chat">
        <img src="https://cloud.neiros.ru/global_assets/images/icon/user/icon-active-chat.svg" alt="">
        <span>Данных нет</span>
        <p>Чтобы начать использовать, необходимо добавить номера</p>

        <a href="/calltracking/routing" type="button" id="active-chat-btn" class="btn btn-primary  active-chat-btn " >Добавить номер</a>

    </div>
@endif
@endsection


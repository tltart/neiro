@extends('app')
@section('title')
 Тех поддержка

@endsection
@section('content')
    <div class="content" style="margin-top: 50px !important;">


@if(count($tickets)==0)
            <div class="w-active-chat">
                <img src="https://cloud.neiros.ru/global_assets/images/icon/user/icon-active-chat.svg" alt="">
                <span>Тикетов нет</span>
                <p>Чтобы начать использовать, необходимо создать тикет</p>

                <a href="#" type="button" id="active-chat-btn" class="btn btn-primary  active-chat-btn item-widget1 "   data-name="Создать тикет" data-id="ticket_modal_add" >Создать тикет</a>
            </div>

@else
            @include('tickets.menu')
        <div class="panel panel-default">

            <div class="panel-heading">
                <h2>werМои тикеты
                    <a href="#" class="btn btn-primary pull-right item-widget1 "   data-name="Создать тикет" data-id="ticket_modal_add">Создать тикет</a>
                </h2>
            </div>

            <div class="panel-body">
                <div id="message"></div>
<table class="table table-bordered">
    <thead>
    <tr>
        <td>#</td>
        <td>Тема</td>
        <td>Статус</td>
        <td>Последнее изменнение</td>

        <td>Вледелец</td>
        <td>Категория</td>

    </tr>
    </thead>
    <tbody id="ticket_body">
    @foreach($tickets as $item)
      @include('tickets.tr')



    @endforeach
    </tbody>





</table>




        <!-- Footer -->
        <div class="footer text-muted">

        </div>
        <!-- /footer -->

    </div>

@endif
@endsection

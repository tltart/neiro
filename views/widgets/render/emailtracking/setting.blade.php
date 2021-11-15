<div class="row tab-pane " id="basic-tab2">

    <div class="col-md-12">
        <!-- Task manager table -->
        <button class="btn btn-info  item-widget1" data-name="Добавить Email" data-id="email_track_add_modal">ДоБавить
        </button>

        <div class="panel panel-white user-setting">
            <div class="tabs-content-wrapper">
                <table class="table tasks-list table-lg table-email_clientov_traking">
                    <thead>
                    <tr>
                        <td>E-mail</td>
                        <td>Тип</td>

                        <td>Тип трафика</td>
                        <td>Сервер</td>
                        <td class="text-center">Статус</td>
                        <td class="text-center">Редактировать</td>
                        <td class="text-center">Удалить</td>
                    </tr>
                    </thead>
                    <tbody id="email_clientov_traking">
                    @foreach($widget_vk as $email)
                        @include('widgets.render.emailtracking.tr')
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{--Дополнительные поля--}}

</div>

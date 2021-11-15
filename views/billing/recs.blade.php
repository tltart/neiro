
        <div class="panel-heading">
            <h6 class="panel-title">Аренда номеров</h6>
            <div class="row">

                <div class="col-md-2">Сумма <span id="mysumm">{{$total_summ}}</span> р</div>
                <div class="col-md-2">    <input type="date" id="hidden_start" value="{{$stat_start_date}}">
                  </div>
                <div class="col-md-2">  <input type="date" id="hidden_end" value="{{$stat_end_date}}"></div>
                <div class="col-md-2">
                    <select id="tip">
                        <option value="0">Все звонки</option>
                        <option value="1">Коллтрекинг</option>
                        <option value="2">Коллбэк</option>


                    </select>

                </div>


                @if($user->super_admin==1)
                    <div class="col-md-2">
                        <select id="clients">
                            <option value="0">Все клиенты</option>
                            @foreach($clients as $client)
                                <option value="{{$client->my_company_id}}">{{$client->name}}</option>
                            @endforeach
                        </select>

                    </div>@else
                    <input type="hidden" id="clients" value="{{$user->my_company_id}}">


                @endif
                <div class="col-md-2">
                    <button type="button" onclick="generate_p_res()">Сформировать</button>
                </div>
            </div>
        </div>

        <table class="table tasks-list table-lg">
            <thead>
            <tr>

                <th>Номер</th>
                <th>Номер клиента</th>
                <th>Длительность (сек)</th>
                <th>Дата</th>
                <th>Цена за минуту</th>
                <th>Цена</th>
                <th>Тип</th>
            </tr>
            </thead>
            <tbody id="mytable">
            @if(isset($phones))
                @for($key=0;$key<count($phones);$key++)
                    <tr>
                        <td>{{$phones[$key]['phone']}}</td>
                        <td>{{$phones[$key]['input']}}</td>
                        <td>{{$phones[$key]['duration']}}</td>
                        <td>{{date('H:i d-m-Y',strtotime($phones[$key]['created_at']))}}</td>

                        <td>{{round(str_replace(',','.',$phones[$key]['minuta'])/100,2)}}</td>
                        <td>{{$phones[$key]['summ']}}</td>
                        <td>{{$phones[$key]['tip']}}</td>


                    </tr>
                @endfor
            @endif

            </tbody>
        </table>

    <!-- /task manager table -->

    <!-- /footer -->




    <script type="text/javascript" src="/default/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.bootcss.com/echarts/4.0.4/echarts.min.js"></script>





    <script type="text/javascript" src="/default/assets/js/plugins/pickers/daterangepicker.js"></script>
    <script>    // Daterange picker
        // ------------------------------

        function generate_p_res() {
            $('#mytable').html('Загрузка');
            clients = $('#clients').val();
            hidden_start = $('#hidden_start').val();
            hidden_end = $('#hidden_end').val();
            datatosend = {
                clients: clients,
                _token: $('[name=_token]').val(),
                hidden_start: hidden_start,
                hidden_end: hidden_end,
                tip: $('#tip').val(),

            }
            $.ajax({
                type: "POST",
                url: '/ajax/billingphonesrecs',
                data: datatosend,
                success: function (html1) {
                    res = JSON.parse(html1);
                    $('#mytable').html(res['mytable']);
                    $('#mysumm').html(res['mysumm']);

                }
            })

        }

        $('.daterange-ranges1').daterangepicker({
            "autoApply": false,
            "linkedCalendars": true,
            "alwaysShowCalendars": true,
            "showDropdowns": true,
            opens: 'left',

            "startDate": "<?=date("d-m-Y")?>",
            "endDate": "<?=date("d-m-Y")?>",
            "maxDate": "21-12-2019",
            "minDate": "01-01-2019",

            "locale": {
                "format": "DD-MM-YYYY",
                "separator": " - ",
                "applyLabel": "Применить",
                "cancelLabel": "Отмена",
                "fromLabel": "От",
                "toLabel": "До",
                "customRangeLabel": "Заданый",
                "daysOfWeek": [
                    'Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'
                ],
                "monthNames": [
                    'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
                ],
                "firstDay": 1
            }



        });


    </script>






@extends('app')
@section('title') Дашборд @endsection


@section('content')

    <div class="modal" id="myModalCreateRestort">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" id="formCreateReports">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Конструктор</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body row">
                        <div class="col-md-12 mb-20">
                            <input type="text" name="name" id="namedd" placeholder="Название" class="form-control">
                        </div>
                        <div class="col-md-12 mb-20">Тип отчета
                            <select name="type">
                                <option value="line">График</option>
                                <option value="funnel">Воронка</option>


                            </select>
                        </div>


                        <div class="col-md-6 table-bordered"><b>Группировки</b>
                            @foreach ($reports_gropings as $item)
                                <div><input type="checkbox" value="{{$item->id}}" name="grouping[]">{{$item->name}}
                                </div>


                            @endforeach

                        </div>
                        <div class="col-md-6 table-bordered"><b>Показатели</b>

                            @foreach ($reports_resourse as $item)
                                <div><input type="checkbox" value="{{$item->code}}" name="resourses[]">{{$item->name}}
                                </div>


                            @endforeach


                        </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="create_reports();return false">Создать
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container container__deshbord">
        <div class="row">

            <div class="col-xs-12 two-saidbar-analitics-deshbord two-saidbar-analitics">
                <ul class="btn-select-period">

                    <li data-type="hours"  data-type_tab="1"   class="@if($dashbord_setting['period_type']==1) active @endif  " data-start="{{$dashbord_setting['date_this']}}"
                        data-end="{{$dashbord_setting['date_this']}}">Сегодня
                    </li>
                    <li data-type="hours"   data-type_tab="2"  class="@if($dashbord_setting['period_type']==2) active @endif" data-start="{{$dashbord_setting['date_yesterday']}}"
                        data-end="{{$dashbord_setting['date_yesterday']}}">Вчера
                    </li>
                    <li data-type="day"   data-type_tab="3"  class="@if($dashbord_setting['period_type']==3) active @endif" data-start="{{$dashbord_setting['date_week']}}"
                        data-end="{{$dashbord_setting['date_this']}}">Неделя
                    </li>
                    <li data-type="day"   data-type_tab="4"  class="@if($dashbord_setting['period_type']==4) active @endif" data-start="{{$dashbord_setting['date_months']}}"
                        data-end="{{$dashbord_setting['date_this']}}">Месяц
                    </li>
                    <li data-type="week"   data-type_tab="5"  class="@if($dashbord_setting['period_type']==5) active @endif" data-start="{{$dashbord_setting['date_kvartal']}}"
                        data-end="{{$dashbord_setting['date_this']}}">Квартал
                    </li>
                    <li data-type="month"   data-type_tab="6"  class="@if($dashbord_setting['period_type']==6) active @endif" data-start="{{$dashbord_setting['date_year']}}"
                        data-end="{{$dashbord_setting['date_this']}}">Год
                    </li>
                </ul>

                <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i> <span></span>
                </button>


                <ul class="chart-js-block-right">
                    <li>
                        <button type="button" class="btn btn-primary add-widget-btn">+ Добавить виджет</button>
                    </li>

                </ul>

                <form id="reportsform2" style="display:none;">



                    <input type="hidden" name="period_start" id="period_start" value="{{$dashbord_setting['date_start']}}">
                    <input type="hidden" name="period_start_7" id="period_start_7" value="{{$dashbord_setting['date_7day']}}">
                    <input type="hidden" name="canals" id="canals" value="0">

                    <input type="hidden" name="period_end" id="period_end" value="{{$dashbord_setting['date_end']}}">

                </form>

            </div>


            <div class="col-xs-12 block-grafick">
                <div class="row">

                    <div class="col-sm-3">

                        <div class="panel  bg-teal-400">
                            <div class="panel-body">
                                <div class="heading-elements">

                                </div>

                                <h3 class="no-margin"></h3>
                                <span>Посетители</span>
                            </div>

                            <div id="server-load"></div>
                        </div>

                    </div>


                    <div class="col-sm-3">

                        <div class="panel bg-pink-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                </div>

                                <h3 class="no-margin"></h3>
                                <span>Заявки</span>
                            </div>

                            <div class="container-fluid">
                                <div id="members-online-new-1"></div>
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-3">

                        <div class="panel bg-blue-400">
                            <div class="panel-body">
                                <div class="heading-elements">
                                </div>

                                <h3 class="no-margin"></h3>
                                <span>Продажи</span>
                            </div>

                            <div class="container-fluid">
                                <div id="members-online-new-2"></div>
                            </div>
                        </div>

                    </div>


                    <div class="col-sm-3">

                        <div class="panel bg-orange-400">
                            <div class="panel-body">
                                <div class="heading-elements">

                                </div>

                                <h3 class="no-margin"></h3>
                                <span>Прибыль</span>
                            </div>

                            <div id="today-revenue"></div>
                        </div>

                    </div>
                </div>



            </div>

            <div class="mmm col-xs-6" style="padding-left:0px;">
                <div class="all-info-chart">
                    <div class="loader" id="loader-1" style="display: block;">
                        <div class="looder_div">
                            <div class="cssload-loader">
                                <div class="cssload-inner cssload-one"></div>
                                <div class="cssload-inner cssload-two"></div>
                                <div class="cssload-inner cssload-three"></div>
                            </div>
                        </div>
                    </div>
                    <div class="name-report-chart name-report-chart-2">ТОП рекламных каналов по заявкам</div>
                    <div class="table-chart-no-data" style="display:none">Нет данных</div>
                    <div class="table-chart-grafick" style="display:none">
                        <div class="tr-table-chart head-table-chart">
                            <div class="td-1">Рекламные каналы</div>
                            <div class="td-2">Заявки</div>
                        </div>
                        <div class="table-chart-body">

                        </div>
                    </div>

                    <div class="itogo-chart">
                        <div class="name-itogo">Всего</div>
                        <div class="summ-itogo">1500</div>
                    </div>

                    <div class="js-analytics-doughnut" style="width: 100%;height: 450px;margin-top: 28px;"></div>


                </div>
            </div>

            <div class="mmm col-xs-6" style="padding-right:0px;">
                <div class="all-info-chart">
                    <div class="loader" id="loader-2" style="display: block;">
                        <div class="looder_div">
                            <div class="cssload-loader">
                                <div class="cssload-inner cssload-one"></div>
                                <div class="cssload-inner cssload-two"></div>
                                <div class="cssload-inner cssload-three"></div>
                            </div>
                        </div>
                    </div>
                    <div class="name-report-chart">Сводный отчет</div>
                    <ul class="chart-js-block">
                        <li data-type="line" data-stack="0" class="active"><img
                                    src="/global_assets/images/icon/icon-1.png"><img class="hover"
                                                                                     src="/global_assets/images/icon/hover/icon-1.png">
                        </li>

                        <li data-type="bar" data-stack="0"><img src="/global_assets/images/icon/icon-3.png"><img
                                    class="hover" src="/global_assets/images/icon/hover/icon-3.png"></li>


                    </ul>
                    <div class="js-analytics" style="width: 100%;height: 450px;margin-top: 28px;"></div>

                </div>

            </div>


        </div>
    </div>




@endsection
@section('wistis_css')
    <link href="/css/pages_assets/index.css?{{time()}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
@endsection
@section('wistis_js')
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script>
        var bardata = [];

        @for($i=0;$i<=23;$i++)
        @if(!isset($amount_sdelka_hour[$i]))
        bardata.push(0);
        @else
        bardata.push({{$amount_sdelka_hour[$i]}});
        @endif

                @endfor
            mm = ' {!! $amount_sdelka_summ!!}';

        ;
        var dataset = JSON.parse(mm);
var w_start_date='{{$dashbord_setting['date_start']}}';
var w_end_date='{{$dashbord_setting['date_end']}}';
var w_start_date1='{{date('d-m-Y',strtotime($dashbord_setting['date_start']))}}';
var w_end_date1='{{date('d-m-Y',strtotime($dashbord_setting['date_end']))}}';
       </script>
    <script type="text/javascript" src="/default/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="/js/echarts.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="/js/daterangepicker3.js"></script>
    <script src="/css/pages_assets/index.js?{{time()}}"></script>
{{--
                    "id" => 1
                    "date_start" => "2021-03-13"
                    "date_end" => "2021-03-13"
                    "period_type" => "day"
                    "user_id" => 22
                    "created_at" => "2021-03-13 00:00:00"
                    "updated_at" => "2021-03-13 00:00:00"
                    "date_7day" => "2021-03-06"
                    "date_this" => "13-03-2021"
                    "date_yesterday" => "12-03-2021"
                    "date_week" => "07-03-2021"
                    "date_months" => "11-02-2021"
                    "date_kvartal" => "13-11-2020"
                    "date_year" => "10-03-2020"
                    ]
--}}
@endsection




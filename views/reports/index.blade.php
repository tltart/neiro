@extends('app')
@section('title')
    Дополнительные поля

@endsection
@section('content')

<style>
    .loader {

        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.95);
        z-index: 2;

    }
    .laoder-frame {
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100vh;
    }

    .svg-loader {
        width: 110px;
        -webkit-animation: svg-loader 1s linear infinite;
        animation: svg-loader 1s linear infinite;
    }

    @-webkit-keyframes svg-loader {
        from {
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes svg-loader {
        from {
            -ms-transform: rotate(0);
            -webkit-transform: rotate(0);
            transform: rotate(0)
        }
        to {
            -ms-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }
    .looder_div{
      /*  display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 100vh;*/
		
	    display: block;
    /* -webkit-box-pack: center; */
    -ms-flex-pack: center;
    /* justify-content: center; */
    /* -webkit-box-align: center; */
    -ms-flex-align: center;
    /* align-items: center; */
    /* height: 100vh; */
    left: 50%;
    position: absolute;
    margin-left: -56px;
    top: 50%;
    margin-top: -65px;	
		
    }
    .cssload-loader {


        left: calc(50% - 56px);
        width: 112px;
        height: 112px;
        border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        perspective: 1400px;

    }

    .cssload-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        -o-box-sizing: border-box;
        -ms-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
    }

    .cssload-inner.cssload-one {
        left: 0%;
        top: 0%;
        animation: cssload-rotate-one 1.15s linear infinite;
        -o-animation: cssload-rotate-one 1.15s linear infinite;
        -ms-animation: cssload-rotate-one 1.15s linear infinite;
        -webkit-animation: cssload-rotate-one 1.15s linear infinite;
        -moz-animation: cssload-rotate-one 1.15s linear infinite;
        border-bottom: 5px solid rgb(64,164,244);
    }

    .cssload-inner.cssload-two {
        right: 0%;
        top: 0%;
        animation: cssload-rotate-two 1.15s linear infinite;
        -o-animation: cssload-rotate-two 1.15s linear infinite;
        -ms-animation: cssload-rotate-two 1.15s linear infinite;
        -webkit-animation: cssload-rotate-two 1.15s linear infinite;
        -moz-animation: cssload-rotate-two 1.15s linear infinite;
        border-right: 5px solid rgb(64,164,244);
    }

    .cssload-inner.cssload-three {
        right: 0%;
        bottom: 0%;
        animation: cssload-rotate-three 1.15s linear infinite;
        -o-animation: cssload-rotate-three 1.15s linear infinite;
        -ms-animation: cssload-rotate-three 1.15s linear infinite;
        -webkit-animation: cssload-rotate-three 1.15s linear infinite;
        -moz-animation: cssload-rotate-three 1.15s linear infinite;
        border-top: 5px solid rgb(64,164,244);
    }







    @keyframes cssload-rotate-one {
        0% {
            transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
        }
        100% {
            transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
        }
    }

    @-o-keyframes cssload-rotate-one {
        0% {
            -o-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
        }
        100% {
            -o-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
        }
    }

    @-ms-keyframes cssload-rotate-one {
        0% {
            -ms-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
        }
        100% {
            -ms-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
        }
    }

    @-webkit-keyframes cssload-rotate-one {
        0% {
            -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
        }
    }

    @-moz-keyframes cssload-rotate-one {
        0% {
            -moz-transform: rotateX(35deg) rotateY(-45deg) rotateZ(0deg);
        }
        100% {
            -moz-transform: rotateX(35deg) rotateY(-45deg) rotateZ(360deg);
        }
    }

    @keyframes cssload-rotate-two {
        0% {
            transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
        }
        100% {
            transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
        }
    }

    @-o-keyframes cssload-rotate-two {
        0% {
            -o-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
        }
        100% {
            -o-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
        }
    }

    @-ms-keyframes cssload-rotate-two {
        0% {
            -ms-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
        }
        100% {
            -ms-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
        }
    }

    @-webkit-keyframes cssload-rotate-two {
        0% {
            -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
        }
    }

    @-moz-keyframes cssload-rotate-two {
        0% {
            -moz-transform: rotateX(50deg) rotateY(10deg) rotateZ(0deg);
        }
        100% {
            -moz-transform: rotateX(50deg) rotateY(10deg) rotateZ(360deg);
        }
    }

    @keyframes cssload-rotate-three {
        0% {
            transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
        }
        100% {
            transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
        }
    }

    @-o-keyframes cssload-rotate-three {
        0% {
            -o-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
        }
        100% {
            -o-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
        }
    }

    @-ms-keyframes cssload-rotate-three {
        0% {
            -ms-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
        }
        100% {
            -ms-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
        }
    }

    @-webkit-keyframes cssload-rotate-three {
        0% {
            -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
        }
    }

    @-moz-keyframes cssload-rotate-three {
        0% {
            -moz-transform: rotateX(35deg) rotateY(55deg) rotateZ(0deg);
        }
        100% {
            -moz-transform: rotateX(35deg) rotateY(55deg) rotateZ(360deg);
        }
    }
	.content{
		    padding: 0 25px 60px 25px;
		}
	
	
</style>

    <a id="downlink" href="" download></a>
  <input type="hidden" id="last_report" value="{{$last_report}}">




<?php /*?><div class="row">
        <div class="page-title col-md-6" style="padding: 10px">
            <h1><span class="text-semibold">Аналитика </span>
            </h1>

        </div>
        <div class="col-md-5" style="text-align: right;margin-top: 10px;">
            <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                <i class="icon-calendar3 position-left"></i> <span>{{$stat_start_date}}-{{$stat_end_date}}</span> <b
                        class="caret"></b>
            </button>
        </div>
        <div class="col-md-1" style="margin-top: 10px;">
            <i class="fa fa-download" aria-hidden="true" id="newwindowbutton" style="font-size: 24px;
    margin-top: 8px;

"></i>


        </div>

    </div><?php */?>
    <style>
        .sactive {
            background: #adade6;
        }

        .sactive:hover {
            background-color: #f5f5f5;
        }
.table-responsive {
	}

.classconf:hover{
   opacity: 1;
}

    </style>
    <!-- Task manager table -->
    <div id="this-panel" class=" panel panel-white row" style=" width:100%;    position: relative;
    margin-top: 70px;

    box-shadow: none;
    margin-bottom: 0px;
    margin-left: -5px;
    margin-right: -5px;">
        
        <div class="row">
            <div class="col-md-9 allrep" style="
    margin-left: -1px;
    margin-top: -1px;
">				<span class="allrep2">	
                @foreach($my_reports as $my_report)
                    <span  class="btn btn-default analytics-report-btn select_my_report2 @if($last_report==$my_report->id) sactive @endif" data-f= "{{$my_report->id}}" ><span  class="select_my_report "
                          data-valur="{{$my_report->id}}"> {{$my_report->name}}  </span>@if($my_report->my_company_id>0)<i class="fa fa-cog classconf editreportopen"  data-id= "{{$my_report->id}}" ></i>@endif</span>
                @endforeach
                </span>
                <button class="btn btn-info analytics-report-btn-add item-widget1"   data-name="Настройка Событий" data-id="analitics_getnew_constructor"><i class="fa fa-plus"></i>
                </button>
            </div>


        </div>
        <div class="col-xs-12 two-saidbar-analitics">
        	<ul class="btn-select-period">
            <? 
$date_this_active = '';	
$date_yesterday_active = '';
$date_week_active = '';
$date_months_active = '';	
$date_kvartal_active = '';
$date_year_active = '';

$DATE_START = date("d-m-Y", strtotime($stat_start_date));
$DATE_END = date("d-m-Y", strtotime($stat_end_date));	
$date_this = date('d-m-Y');
if($date_this === $DATE_START && $date_this === $DATE_END){
$date_this_active = 'active';	
}

$date_yesterday = date('d-m-Y',strtotime('-1 days'));
if($date_yesterday === $DATE_START && $date_yesterday === $DATE_END){
$date_yesterday_active = 'active';	
}

$date_week = date('d-m-Y',strtotime('-7 days'));
if($date_week === $DATE_START && $date_this === $DATE_END){
$date_week_active = 'active';	
}


$date_months = date('d-m-Y',strtotime('-30 days'));
if($date_months === $DATE_START && $date_this === $DATE_END){
$date_months_active = 'active';	
}


$date_kvartal = date('d-m-Y',strtotime('-120 days'));
if($date_kvartal === $DATE_START && $date_this === $DATE_END){
$date_kvartal_active = 'active';	
}


$date_year = date('d-m-Y',strtotime('-368 days'));
if($date_year === $DATE_START && $date_this === $DATE_END){
$date_year_active = 'active';	
}



 
			?>
        		<li class="<?=$date_this_active?>" data-start="<?=$date_this?>" data-end="<?=$date_this?>">Сегодня</li>
                <li class="<?=$date_yesterday_active?>" data-start="<?=$date_yesterday?>" data-end="<?=$date_yesterday?>">Вчера</li>
                <li class="<?=$date_week_active?>" data-start="<?=$date_week?>" data-end="<?=$date_this?>">Неделя</li>
                <li class="<?=$date_months_active?>" data-start="<?=$date_months?>" data-end="<?=$date_this?>">Месяц</li>
                <li class="<?=$date_kvartal_active?>" data-start="<?=$date_kvartal?>" data-end="<?=$date_this?>">Квартал</li>
                <li class="<?=$date_year_active?>" data-start="<?=$date_year?>" data-end="<?=$date_this?>">Год</li>
             </ul>   
             
            <button type="button" class="btn btn-link daterange-ranges heading-btn text-semibold">
                <i class="fa fa-calendar-o" aria-hidden="true"></i> <span></span>
            </button>
            
            <form id="reportsform"  >
				<div class="deteil-select">Детализация:</div>
                <select name="group" class="form-control xtipday select-type-option" >
						
                            <option value="day">по дням</option>
                            <option value="week">по неделям</option>
                            <option value="month">по месяцам</option>

                        </select>
                <div class="col-md-3 row" style="display:none">
                    <div class="col-md-6" style="padding-top: 8px;">каналы заявок</div>
                    <div class="col-md-6"><select name="canals" class="form-control xcanals" style="width: 100px">
                            <option value="0">Все каналы</option>
                           @foreach($canals as $canal) <option value="{{$canal->id}}">{{$canal->name}}</option>
                        @endforeach


                        </select></div>


                </div>
        
                    <input type="hidden" name="period_start" id="period_start" value="{{$stat_start_date}}">
       
          
                    <input type="hidden" name="period_end" id="period_end" value="{{$stat_end_date}}">
          
            </form>
            
                       <ul class="chart-js-block">
        	<li data-type="line" data-stack="0" class="active"><img src="/global_assets/images/icon/icon-1.png"><img class="hover" src="/global_assets/images/icon/hover/icon-1.png"></li>
        	<li data-type="line" data-stack="1"><img src="/global_assets/images/icon/icon-4.png"><img class="hover" src="/global_assets/images/icon/hover/icon-4.png"></li>
           <li data-type="bar" data-stack="0"><img src="/global_assets/images/icon/icon-3.png"><img class="hover" src="/global_assets/images/icon/hover/icon-3.png"></li>

            <li data-type="bar" data-stack="1"><img src="/global_assets/images/icon/icon-2.png"><img class="hover" src="/global_assets/images/icon/hover/icon-2.png"></li>
        </ul>
           <ul class="chart-js-block-right">
        	<li id="newwindowbutton"><img src="/global_assets/images/icon/download.PNG"><img src="/global_assets/images/icon/download-hover.PNG" class="hover"></li>
<?php /*?>        	<li><a href="/allreports/setting"><img src="/global_assets/images/icon/setitings.PNG"><img src="/global_assets/images/icon/setitings-hover.PNG" class="hover"></a></li>
<?php */?>
        </ul>
        </div>

   
   <div class="col-xs-12 two-saidbar-analitics-2">

   </div>  

    
            


        
        
        
        
        <div class="mmm col-xs-12" style="width:100%;">
        <div class="loader" style="display: block;">
            <div class="looder_div">
                <div class="cssload-loader">
                    <div class="cssload-inner cssload-one"></div>
                    <div class="cssload-inner cssload-two"></div>
                    <div class="cssload-inner cssload-three"></div>
                </div>
            </div>
        </div>
            <div class="js-analytics" style="width: 100%;height: 450px"></div>
            {{--    <div class="js-analytics2" style="width: 100%;height: 450px"></div>--}}


        </div>

        
        
        
                          <div class="col-md-12" style="padding-left:0px; padding-right:0px; padding-top:30px;">

<div id="preloader"  class="col-xs-12 text-center" style=" display:block; padding-top:30px;
padding-bottom:30px;"><?php /*?><i style="color:#00BAF0" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><?php */?><i class="icon-spinner2 spinner position-left"></i></div>

<div class='table-responsive ' style="display:none;">
                        <table class="table table-bordered table-hover datatable-highlight" id="analytics-table">
                            <thead>
                            <tr class="no-open">
                                <th class="col-1  left-sitebar-table"><div style="min-width: 317px;">Название канала</div></th>
                                <th class="col-2"><div>Посетители</div></th>
                                <th class="col-4"><div>Заявки</div></th>
                                <th class="col-5"><div>Конверсия в заявку</div></th>
                                <th class="col-5"><div>Стоимость заявки</div></th>
                                <th class="col-6"><div>Продажи</div></th>
                                <th class="col-7"><div>Конверсия в продажу</div></th>
                                <th class="col-7"><div>Средний чек</div></th>
                                <th class="col-7"><div>Сумма продаж</div></th>
                                <th class="col-7"><div>Расход</div></th>
                                <th class="col-7"><div>ROI</div></th>
                            </tr>
                            </thead>


                        </table>
</div>
                    </div>  
        
        
        
    </div>
    <!-- /task manager table -->

    <!-- /footer -->
        <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switch.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
 <script src="/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/ui/moment/moment.min.js"></script>
  	<script type="text/javascript" src="/cdn/v1/callback/js/select2.js"></script>
    <link rel="stylesheet" type="text/css" href="/cdn/v1/callback/js/select2.css" />
    <script type="text/javascript" src="/js/reimg.js"></script>
    <script src="/js/daterangepicker3.js"></script>
        <script type="text/javascript" src="/vendor/echarts.js"></script>
<?php /*?>     <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="https://echarts.baidu.com/gallery/vendors/simplex.js"></script><?php */?>
        
        
        
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 
    
    
    
    {{--<script src="/js/reports_0.js"></script>--}}
    <script>
			canals = $('select[name=canals] option:selected').val()			
            period_start = $('#period_start').val();
			period_end = $('#period_end').val();
			
	
	table =    $('#analytics-table').DataTable({
language:{
  "processing": "Подождите...",
  "search": "Поиск:",
  "lengthMenu": "Показать _MENU_ записей",
  "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
  "infoEmpty": "Записи с 0 до 0 из 0 записей",
  "infoFiltered": "(отфильтровано из _MAX_ записей)",
  "infoPostFix": "",
  "loadingRecords": "Загрузка записей...",
  "zeroRecords": "Записи отсутствуют.",
  "emptyTable": "В таблице отсутствуют данные",
  "paginate": {
    "first": "Первая",
    "previous": "Предыдущая",
    "next": "Следующая",
    "last": "Последняя"
  },},
"dom": '<"top">rt<"bottom"ilp><"clear">',
                        processing: true,
                        serverSide: true,
						responsive: true,
						searching: true,
						lengthMenu: [ 10, 20, 40, 60, 80, 100 ],
						displayLength: 40,
			 "ajax": {
            "url": "/allreports/alldata/data",
      		 "data": function ( d ) {
				 
                d.period_start = $('#period_start').val();
				d.period_end = $('#period_end').val();
            	d.canals = canals;
            }},
				initComplete: function() {
				/*	$("#analytics-table").wrapAll("<div class='table-responsive '></div>");*/
					$(".table-responsive").floatingScroll();
					
					$("#preloader").css('display','none');
					$(".table-responsive").css('display','block');
					
					
					
      				var api = this.api();
	
					},
                        columns: [
                            { data: 'group', name: 'group' ,
							"class" : "left-sitebar-table"
							
							},
							{ data: 'user', name: 'user' },
							{ data: 'visits', name: 'visits' },
							{ data: 'lead', name: 'lead' },
                            { data: 'convers_fo_lid', name: 'convers_fo_lid' },
                            { data: 'sales', name: 'sales' },
                        	{ data: 'convers_fo_sales', name: 'convers_fo_sales' },
							{ data: 'summ', name: 'summ' },
							{ data: 'consumption', name: 'consumption' },
							{ data: 'cost', name: 'cost' },
							{ data: 'roi', name: 'roi' },
                        ],
        columnDefs: [
				{
            targets: 0,
			"orderable": false,
            render: function(data, type, row, meta) {
                ic='';
                if(row.icon!=''){
                    ic='/storage/'+row.icon;
                }else{
                    ic='/images/icon/SVG/all/'+src+'.svg';
                }
			src = row.typ
			icon = '<i class="fa fa-plus" data-lvl="1"  data-type="'+row.typ+'" aria-hidden="true"></i>'
			if(row.typ == 'organic' ){
				src = 'searh'
				}
			if(row.typ == 'Директ'){
				src = 'direct-yandex'
				/*icon = '';*/
				}
			if(row.typ == 'AdwordsApi' || row.typ == 'Adwords'){
				src = 'gle-dc'
			/*	icon = ''*/
				}
			name = row.typ;	
			if(row.typ == 'AdwordsApi'){
				name = 'Google Ads';
				/*icon = ''*/
				}	
			if(row.typ == 'typein'){
				
			/*	icon = ''*/
				}	
			stl = '';

			if(row.typ == 'cpc' || row.typ == 'social' ){
				stl = 'style="filter: invert(41%) sepia(13%) saturate(4%) hue-rotate(337deg) brightness(94%) contrast(86%);"';	
				}
								
					
					if(row.typ == 'typein'){

				data = '<div class="more-data"><img '+stl+' src="'+ic+'">'+name+'<i style="display:none" class="fa fa-spinner fa-spin  fa-fw"></i>'
						}
						else{
							data = '<div class="more-data"><i style="display:none" class="fa fa-minus" aria-hidden="true"></i> '+icon+'<img '+stl+' src="'+ic+'">'+name+'<i style="display:none" class="fa fa-spinner fa-spin  fa-fw"></i>'
							}
					 return data;
                }
        },
	{
            targets: 1,
			"orderable": false,
            render: function(data, type, row, meta) {
				
					if(row.typ == 'Директ' || row.typ == 'AdwordsApi' || row.typ == 'Adwords'){
						data = row.unique_visit;
						}
						else{data = row.posetitel;}
					
					 return data;
                }
        },	
		{
            targets: 2,
			"orderable": false,
            render: function(data, type, row, meta) {
					
						if(row.sdelka == null){
						sdelka = 0;
						}
						else{
							sdelka = row.sdelka
							}
						
					
					 return sdelka;
                }
        },	
		
		{
            targets: 3,
			"orderable": false,
            render: function(data, type, row, meta) {
					if(row.typ == 'Директ' || row.typ == 'AdwordsApi' || row.typ == 'Adwords'){
						user = Number(row.unique_visit);
						}
					else{user = Number(row.posetitel);}
				
				data = (Number(row.sdelka)/user)*100;
				data = data.toFixed(2);
				return data+'%';
                }
        },	
				{
            targets: 4,
			"orderable": false,
            render: function(data, type, row, meta) {
					if(row.cost == null){
						cost = 0;
						}
					else{
						cost = Number(row.cost);
						}
					if(row.sdelka == 0 || row.sdelka == null){
						data = 0
						}	
					else{
					data = cost/Number(row.sdelka)
					data = data.toFixed(2);	
					}		
					
							
					 return data+' р.';
                }
        },
		
		{
            targets: 5,
			"orderable": false,
            render: function(data, type, row, meta) {
					
						if(row.lead == null){
						data = 0;
						}
						else{
							data = row.lead
							}
					 return data;
                }
        },	
		{
            targets:6,
			"orderable": false,
            render: function(data, type, row, meta) {
				if (row.sdelka == 0 || row.sdelka == null){
					data = '0';
					}
				else{	
				data = (Number(row.lead)/Number(row.sdelka))*100;
				data = data.toFixed(2);}
				return data+'%';
                }
        },
		
				{
            targets:7,
			"orderable": false,
            render: function(data, type, row, meta) {
				if(row.summ == null){
						summ = 0;
						}
					else{
						summ = Number(row.summ);
						}
					if(row.lead == 0 || row.lead == null){
						data = 0
						}	
					else{
					data = summ/Number(row.lead)
					data = Number(data).toFixed(2);	
					}		
					
							
					 return data+' р.';
                }
        },
		{
            targets: 8,
			"orderable": false,
            render: function(data, type, row, meta) {
						if(row.summ == null || row.summ == 0){
						summ = '0';
						}
						else{
							summ = row.summ
							summ = Number(summ).toFixed(2);	
							}
				
					data = summ+' р.';
					 return data;
                }
        },	
		{
            targets:9,
			"orderable": false,
            render: function(data, type, row, meta) {
					if(row.cost == null){
						data = '0';
						}
					else{
						data = row.cost;
						data = Number(data).toFixed(2)
						}	
					
					 return data+' р.';	
                }
        },
		
		{
            targets:10,
			"orderable": false,
            render: function(data, type, row, meta) {
				
					if(row.summ == null){
						summ = '0';
						}
						else{
							summ = row.summ
							}
					summ = Number(summ);	
					if(row.cost == null){
						cost = '0';
						}
					else{
						cost = row.cost;
						}	
					cost = Number(cost);	
					if(cost == 0){
						data = 0;
						}
					else{
					data = (summ-0-cost)/cost*100;
					data = data.toFixed(2)
					}
					
					 return data+'%';
                }
        },
		
		],
		 "order": [[1, 'asc']],
		  "lengthChange": true,
 			fixedHeader: false,
			 colReorder: true,
		   "autoWidth": false
                    });
	
	
				$('.daterange-ranges').on('apply.daterangepicker', function(ev, picker) {
				date_serch = $('#period_start').val(picker.startDate.format('YYYY-MM-DD'));
				period_end = $('#period_end').val(picker.endDate.format('YYYY-MM-DD'));
				$('.btn-select-period li').removeClass('active');
				$('.btn-select-period li').each(function(index, element) {
                   data_start = $(this).attr('data-start');
				   data_end = $(this).attr('data-end');
				   if(data_start == picker.startDate.format('DD-MM-YYYY') && data_end == picker.endDate.format('DD-MM-YYYY')){	
				   $(this).addClass('active');
					   
					   }
					
                });
				table.draw();
					});
					
					
function format ( d ) {
  		 typ = 'organic';	
		 id = $('#last_report').val();
		var div = '';
		 $.ajax({
                type: "get",
                url: '/reports_table/' + id,
                data: {typ:typ,lvl:1,period_start:period_start,period_end:period_end,canals:canals},
                success: function (html1) {
					 datatotable = JSON.parse(html1);
					 div +=  datatotable['table'];	
					 
                }
            })
	console.log(div);			
	return div;
			
}	
	
   var detailRows = [];
 
    $(document).on( 'click', '#analytics-table .left-sitebar-table .fa-plus, #analytics-table .left-sitebar-table .fa-minus', function () {
        var tr = $(this).closest('tr');
		 var td = $(this).closest('td');
		  var tbody = $(this).closest('tbody');
        var row = table.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
     		$(this).css('display','none');
            $('.fa-plus',td).css('display','block');
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
			
			if($(this).is('.fa-minus')){
			lvl_new = $(this).closest('.more-data').find('.fa-plus').attr('data-lvl');
			hash_new = $(this).closest('.more-data').find('.fa-plus').attr('data-hash');
			if(Number(lvl_new) > 1){
				$('tr#'+hash_new).html('');
				$(this).css('display','none');
           		$(this).closest('.more-data').find('.fa-plus').css('display','block');	
				}
			}
			else{
			
			
			mass_width = [];
			$('#analytics-table tr th').each(function(index, element) {
				width= $(this).width()
                mass_width.push(width)
				width = width +2;
				$(this).css('width', ''+width+'px')
				$(this).css('min-width', ''+width+'px')
				$(this).css('max-width', ''+width+'px')
				
				
			
            });
			
			
			$(this).css('display','none');
            $('.fa-minus',td).css('display','block');
			 $('.fa-spinner',td).css('display','block');
           /* row.child( format( row.data() ) ).show();*/
		type = $(this).attr('data-type');
		typ = $(this).attr('data-typ');	
		hash = $(this).attr('data-hash');	
		lvl = $(this).attr('data-lvl');	
		
	
		
		 id = $('#last_report').val();
	
		 typ_rrr = '/reports_table/';
		 if(type === 'AdwordsApi' || typ === 'AdwordsApi'){
			 typ_rrr = '/reports_table_adwords/';
			 }
		 if(type === 'Директ' || typ === 'Директ' ){
			  typ_rrr = '/reports_table_direct/';
			 }
                if(type === 'InstagramApi' || typ === 'InstagramApi' ){
                    typ_rrr = '/reports_table_in_fb/instagram/';
                }
                if(type === 'FacebookApi' || typ === 'FacebookApi' ){
                    typ_rrr = '/reports_table_in_fb/facebook/';
                }

		 $.ajax({
                type: "get",
                url: typ_rrr + id,
                data: {typ:type,lvl:lvl,'period_start':$('#period_start').val(),'period_end':$('#period_end').val(),'canals':canals,'mass_width':mass_width},
                success: function (html1) {
					 datatotable = JSON.parse(html1);
					 if(lvl === '1'){
						 row.child( datatotable['table']).show(); }
						 else{
					
					$('tr#'+hash).html('<td colspan="11" class="child-table" >'+datatotable['table']+'</td>');}
					 	
					 $('.fa-spinner',td).css('display','none');
                }
            })

			
			
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }  }
    } );

    // On each draw, loop over the `detailRows` array and show any child rows
    table.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.left-sitebar-table .fa-plus').trigger( 'click' );
        } );
    } );	
	
/*$(document).on('click', '#analytics-table .left-sitebar-table .fa-plus', function(){
		typ = 'organic';	
		 id = $('#last_report').val();
		 $.ajax({
                type: "get",
                url: '/reports_table/' + id,
                data: {typ:typ,lvl:1,period_start:period_start,period_end:period_end,canals:canals},
                success: function (html1) {

                }
            })
	
	
	})	*/

	
/*$(document).on('click', '#analytics-table .left-sitebar-table .fa-plus', function () {
    var tr = $(this).closest('tr');
	
		typ = 'organic';	
		 id = $('#last_report').val();
		 $.ajax({
                type: "get",
                url: '/reports_table/' + id,
                data: {typ:typ,lvl:1,period_start:period_start,period_end:period_end,canals:canals},
                success: function (html) {
					table = JSON.parse(html);
				$(tr).append('<div >'+table['table']+'</div>');	
				
                }
            })
} );	*/
	
	
	
	
	
	
	
	
	


        var chart;
        startreport()

        function startreport() {
            $('.loader').show();

            last_report = $('#last_report').val();
            if (last_report > 0) {


                vals = $('.select_my_report.sactive').data('valur');
                reports(last_report,'line');
                load_data_to_table(last_report);
            }


        }

        $('body').on('change', '.xtipday,.xcanals', function () {
            startreport();
        });


        $('body').on('click', '.select_my_report', function () {
            vals = $(this).data('valur');
            $('.select_my_report').removeClass('sactive');
            $('.select_my_report2').removeClass('sactive');
            $(this).addClass('sactive')
            $(this).parent('span').addClass('sactive')

            $('#type').val(vals);
            reports(vals,'line');
            load_data_to_table(vals);
        });


        function create_reports() {

            forma = $('#formCreateReports').serialize();
            llname = $('#namedd').val();
            if (llname.length == 0) {
                alert('Название отчета')
                return false;
            }
            $('#myModalCreateRestort').modal('hide');
            $.ajax({
                type: "POST",
                url: '/allreports/create',
                data: forma,
                success: function (html1) {
                    m = JSON.parse(html1)
                    $('.allrep2').append('<span class="btn btn-default analytics-report-btn select_my_report2 " data-f="' + m['id'] + '"><span class="select_my_report " data-valur="' + m['id'] + '"> ' + m['name'] + '  </span><i class="fa fa-cog classconf editreportopen" data-id="' + m['id'] + '"></i></span>')

                }
            })


        }


       // reports_pdf( )
function reports_pdf( ) {
    vals = $(this).data('valur');

    forma = $("#reportsform").serialize();

    $.ajax({
        type: "get",
        url: '/reports_pdf/' + vals,
        data: forma,
        success: function (html1) {


        }
        });
}

        function load_data_to_table(id) {
			  $('.loads').hide();
          /*  $('.loads').show();

            forma = $("#reportsform").serialize();

            $.ajax({
                type: "get",
                url: '/reports_table/' + id,
                data: forma,
                success: function (html1) {
                    $('.loads').hide();
                    datatotable = JSON.parse(html1);


                    $('.mytable').html(datatotable['table']);
                    var lastIdx = null;
                    table = $('.datatable-highlight').DataTable();

                    $('.datatable-highlight tbody').on('mouseover', 'td', function () {
                        var colIdx = table.cell(this).index().column;

                        if (colIdx !== lastIdx) {
                            $(table.cells().nodes()).removeClass('active');
                            $(table.column(colIdx).nodes()).addClass('active');
                        }
                    }).on('mouseleave', function () {
                        $(table.cells().nodes()).removeClass('active');
                    });


                }
            })*/

        }

        /*data-lvl="' . $repgroup->lvl . '" data-typ="' . $repgroup->typ . '" data-src="' . $repgroup->src . '"*/
        $('body').on('click', '.clicklvl', function (e) {
            element = $(this);

            plus = $(this).data('plus');
            if (plus == 0) {
                element.data('plus', '1');
                opened = element.data('opened');


                element.data('opened', '1');
                element.removeClass('fa-plus');
                element.addClass('fa-minus');


                forma = $("#reportsform").serialize();
                /*    group=day&period_start=2019-01-01&period_end=2019-01-31*/
                datatosend = {
                    lvl: element.data('lvl'),
                    typ: element.data('typ'),
                    src: element.data('src'),
                    cmp: element.data('cmp'),
                    cnt: element.data('cnt'),


                };
                if (opened == '0') {
                    $('.' + element.data('hash')).show();
                    $.ajax({
                        type: "get",
                        url: '/reports_table/' + element.data('report') + "?" + forma,
                        data: datatosend,
                        success: function (html1) {
                            datatotable = JSON.parse(html1);

                            $('#' + element.data('hash')).html('<td colspan="11">' + datatotable['table'] + '</td>');
                            $('.' + element.data('hash')).hide();
                            /* var lastIdx = null;
                             var table = $('.datatable-highlight').DataTable();

                             $('.datatable-highlight tbody').on('mouseover', 'td', function () {
                                 var colIdx = table.cell(this).index().column;

                                 if (colIdx !== lastIdx) {
                                     $(table.cells().nodes()).removeClass('active');
                                     $(table.column(colIdx).nodes()).addClass('active');
                                 }
                             }).on('mouseleave', function () {
                                 $(table.cells().nodes()).removeClass('active');
                             });*/


                        }
                    })
                } else {

                    $('#' + element.data('hash')).show();

                }
            } else {
                element.data('plus', '0')

                element.removeClass('fa-minus');
                element.addClass('fa-plus');
                $('#' + element.data('hash')).hide();

            }

        })


        $('body').on('click', '.clickadwordslvl', function (e) {
            element = $(this);

            plus = $(this).data('plus');
            if (plus == 0) {
                element.data('plus', '1');
                opened = element.data('opened');


                element.data('opened', '1');
                element.removeClass('fa-plus');
                element.addClass('fa-minus');


                forma = $("#reportsform").serialize();
                /*    group=day&period_start=2019-01-01&period_end=2019-01-31*/
                datatosend = {
                    lvl: element.data('lvl'),
                    typ: element.data('typ'),
                    src: element.data('src'),
                    cmp: element.data('cmp'),
                    cnt: element.data('cnt'),


                };
                if (opened == '0') {
                    $('.' + element.data('hash')).show();
                    $.ajax({
                        type: "get",
                        url: '/reports_table_adwords/' + element.data('report') + "?" + forma,
                        data: datatosend,
                        success: function (html1) {
                            datatotable = JSON.parse(html1);

                            $('#' + element.data('hash')).html('<td colspan="11">' + datatotable['table'] + '</td>');
                            $('.' + element.data('hash')).hide();



                        }
                    })
                } else {

                    $('#' + element.data('hash')).show();

                }
            } else {
                element.data('plus', '0')

                element.removeClass('fa-minus');
                element.addClass('fa-plus');
                $('#' + element.data('hash')).hide();

            }

        })
        $('body').on('click', '.clickdirectlvl', function (e) {
            element = $(this);

            plus = $(this).data('plus');
            if (plus == 0) {
                element.data('plus', '1');
                opened = element.data('opened');


                element.data('opened', '1');
                element.removeClass('fa-plus');
                element.addClass('fa-minus');


                forma = $("#reportsform").serialize();
                /*    group=day&period_start=2019-01-01&period_end=2019-01-31*/
                datatosend = {
                    lvl: element.data('lvl'),
                    typ: element.data('typ'),
                    src: element.data('src'),
                    cmp: element.data('cmp'),
                    cnt: element.data('cnt'),


                };
                if (opened == '0') {
                    $('.' + element.data('hash')).show();
                    $.ajax({
                        type: "get",
                        url: '/reports_table_direct/' + element.data('report') + "?" + forma,
                        data: datatosend,
                        success: function (html1) {
                            datatotable = JSON.parse(html1);

                            $('#' + element.data('hash')).html('<td colspan="11">' + datatotable['table'] + '</td>');
                            $('.' + element.data('hash')).hide();
                            /* var lastIdx = null;
                             var table = $('.datatable-highlight').DataTable();

                             $('.datatable-highlight tbody').on('mouseover', 'td', function () {
                                 var colIdx = table.cell(this).index().column;

                                 if (colIdx !== lastIdx) {
                                     $(table.cells().nodes()).removeClass('active');
                                     $(table.column(colIdx).nodes()).addClass('active');
                                 }
                             }).on('mouseleave', function () {
                                 $(table.cells().nodes()).removeClass('active');
                             });*/


                        }
                    })
                } else {

                    $('#' + element.data('hash')).show();

                }
            } else {
                element.data('plus', '0')

                element.removeClass('fa-minus');
                element.addClass('fa-plus');
                $('#' + element.data('hash')).hide();

            }

        })
        function reports(id,type) {
            $('.loader').show();
            forma = $("#reportsform").serialize() + '&type_charts=' + type;
            //    document.querySelector('.js-analytics').innerHTML='';
            $.ajax({
                type: "get",
                url: '/reports/' + id,
                data: forma,
                success: function (html1) {
                    datatotable = JSON.parse(html1);
                    $('.loader').hide();

                    var chartHolder = document.querySelector('.js-analytics');

                    if (datatotable['type'] == 'line') {
                        line_gr(datatotable, chartHolder)
                    }
                    if (datatotable['type'] == 'funnel') {
                        var chartHolder = document.querySelector('.js-analytics2');
                        funnel_gr(datatotable, chartHolder)
                    }


                }
            })


        }



        function funnel_gr(datatotable, chartHolder) {

            if (chartHolder) {
                var chartHolderWidth = chartHolder.parentNode.clientWidth;
                chartHolder.style.width = chartHolderWidth + 'px';
                chart = echarts.init(chartHolder);
                var labelOption = {
                    normal: {
                        show: false,
                        position: 'insideBottom',
                        distance: 40,
                        align: 'left',
                        verticalAlign: 'middle',
                        rotate: 90,
                        // formatter: '{c}  {name|{a}}',
                        fontSize: 14 // rich: {
                        //     name: {
                        //         textBorderColor: '#fff'
                        //     }
                        // }

                    } // specify chart configuration item and data

                };
                option = {
                    title: {
                        text: 'Воронка',
                        subtext: 'Посетитель в заявку'
                    },
                    tooltip: {
                        trigger: 'item',
                        formatter: "{a} <br/>{b} : {c}%"
                    },
                    toolbox: {
                        feature: {
                            dataView: {readOnly: false},
                            restore: {},
                            saveAsImage: {}
                        }
                    },
                    legend: {
                        data: ['Посетители', 'Сделки']
                    },
                    series: [
                        {
                            name: '预期',
                            type: 'funnel',
                            left: '10%',
                            width: '80%',
                            label: {
                                normal: {
                                    formatter: '{b} '
                                },
                                emphasis: {
                                    position: 'inside',
                                    formatter: '{b} : {c}%'
                                }
                            },
                            labelLine: {
                                normal: {
                                    show: false
                                }
                            },
                            itemStyle: {
                                normal: {
                                    opacity: 0.7
                                }
                            },
                            data: datatotable['series']
                        }

                    ]
                };


                chart.setOption(option, true);
            }
		
        }


 			var chartHolder = document.querySelector('.js-analytics');
        
                chart = echarts.init(chartHolder);
                var labelOption = {
                    normal: {
                        show: true,
                        position: 'insideBottom',
                        distance: 40,
                        align: 'left',
                        verticalAlign: 'middle',
                        rotate: 90,
                      
                        fontSize: 14 

                    } 

                };


        function line_gr(datatotable, chartHolder) {

console.log(datatotable['series']);
            if (chartHolder) {
 
               
                var option = {
           
                    grid: {
                        left: 60,

                        top: 50,
                        right: 100,
                        bottom: 50,
                        backgroundColor: '#006699'
                    },
                    color: ['#2d7bcb', '#3ed25a', '#eff70b', '#f7210b', '#f80aea', '#a10af8', '#faa106'],
                    tooltip: {
                        trigger: 'axis',
                        axisPointer: {
                            type: 'shadow'
                        }
                    },
                    legend: {
                        data: datatotable['names'],
                        orient: 'vertical',
                        left: 'right',
                        top: 'center',


                    },
                    toolbox: {
                        show: true,
                        orient: 'horizontal',
                        left: 'left',
                        top: 'top',
                        feature: {
                            mark: {
                                show: true
                            },
                            dataView: {
                                show: false,
                                readOnly: false
                            },
                            magicType: {
                                show: false,
								
                                type: ['line', 'bar', 'stack'],
								
/*			iconStyle: {					color: {
    type: 'radial',
    x: 0.5,
    y: 0.5,
    r: 0.5,
    colorStops: [{
        offset: 0, color: 'red' 
    }, {
        offset: 1, color: 'blue'
    }],
    global: false 
},
	borderColor: 'red'},	*/					
					/*			icon: {
									line: 'https://cloud.neiros.ru/global_assets/images/icon/icon-1.png',
                                    bar: 'https://cloud.neiros.ru/global_assets/images/icon/icon-3.png',
                                    stack: 'https://cloud.neiros.ru/global_assets/images/icon/icon-2.png'
									},*/
                                title: {
                                    line: ' ',
                                    bar: ' ',
                                    stack: ' '
                                }
                            },
                            restore: {
                                show: false,
								title: ' '
                            },

                        }
                    },
                    calculable: true,
                    xAxis: [{
                        type: 'category',
						boundaryGap: false,
                        axisTick: {
                            show: false
                        },
                        data: datatotable['dates']
                    }],
                    yAxis: [{
                        type: 'value'
                    }],
                    series: datatotable['series']
                }; 

                chart.setOption(option, true);
				
	
				

            }

        }

				
				

        $("#newwindowbutton").click(function () {
            $canvas = $('canvas');
            var dataURL = $canvas[0].toDataURL('image/jpg');
            //   var w = window.open('about:blank', 'image from canvas');
            //  w.document.write("<img src='" + dataURL + "' alt='from canvas'/>");

            ReImg.fromCanvas($canvas[0]).downloadPng();
        });

    </script>
    <script type="text/javascript" src="/default/assets/js/plugins/ui/moment/moment.min.js"></script>

    {{--    <script src="/js/main.js"></script>--}}
    

    
    

    <script>
        function setdate(start, end) {
            start_date = start;
            end_date = end;

            $('#period_start').val(start_date);
            $('#period_end').val(end_date);
            datatosend = {
                start_date: start_date,
                end_date: end_date,


                _token: $('[name=_token]').val(),


            }


            $.ajax({
                type: "POST",
                url: '/stat/start_date',
                data: datatosend,
                success: function (html1) {
                    startreport();
                    //    start_load_data();
                }
            })


        }


    </script>

    <?php /*?><script>

        $('.daterange-ranges').daterangepicker(
            {

                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2018',
        
				locale: {
        "format": "YYYY-MM-DD",
        "separator": " - ",
        "applyLabel": "Добавить",
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
    },
               
                ranges: {
                    'Сегодня': [moment(), moment()],
                    'Вчера': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'за 7 дней': [moment().subtract(6, 'days'), moment()],
                    'За 30 дней': [moment().subtract(29, 'days'), moment()],
                    'Этот месяц': [moment().startOf('month'), moment().endOf('month')],
                    'Прошлый месяц': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'За все время': [moment().subtract(2, 'month').startOf('month'), moment().subtract(0, 'month').endOf('month')],
                },
                opens: 'left',
                applyClass: 'btn-small bg-slate-600 btn-block',
                cancelClass: 'btn-small btn-default btn-block',
                format: 'DD/MM/YYYY',
     


            },
            function (start, end) {
                $('.daterange-ranges span').html(start.format('DD-MM-Y') + ' - ' + end.format('DD-MM-Y'));
                setdate(start.format('Y-MM-DD'), end.format('Y-MM-DD'));

            }
        );

        $('.daterange-ranges span').html('<?=date("d-m-Y", strtotime($stat_start_date))?> - <?=date("d-m-Y", strtotime($stat_end_date))?>');





    </script><?php */?>



<script>
   $('.daterange-ranges').daterangepicker({
				 "autoApply": false,
				  "linkedCalendars": true,
				     "alwaysShowCalendars": true,
					   "showDropdowns": true,
					   opens: 'left',

	"startDate": "<?=date("d-m-Y", strtotime($stat_start_date))?>",
	"endDate": "<?=date("d-m-Y", strtotime($stat_end_date))?>",
/*	"maxDate": "21-12-2019",
	"minDate": "01-01-2019",*/

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
	

	
}
,
            function (start, end) {
                $('.daterange-ranges span').html(start.format('DD-MM-Y') + ' - ' + end.format('DD-MM-Y'));
                setdate(start.format('Y-MM-DD'), end.format('Y-MM-DD'));
				dateFound(start.format('Y-MM-DD'), end.format('Y-MM-DD'));
            }


); 

function dateFound(data_start,data_end){

data_start_mass = data_start.split('-');
data_end_mass = data_end.split('-');
months_end =data_end_mass[1];
months_start =data_start_mass[1];
if(months_start.indexOf('0') === 0){
	months_start = months_start.replace('0', '') 
	}
if(months_end.indexOf('0') === 0){
	months_end = months_end.replace('0', '') 
	}	
	
	
months_start = months_start - 1;
months_end = months_end - 1;
monthNames = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня','июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря']	

string = data_start_mass[2]+' '+monthNames[months_start]+' '+data_start_mass[0]+' - '+data_end_mass[2]+' '+monthNames[months_end]+' '+data_end_mass[0];
$('.daterange-ranges span').html(string);	
	}



dateFound('<?=date("Y-m-d", strtotime($stat_start_date))?>','<?=date("Y-m-d", strtotime($stat_end_date))?>')


$('.btn-select-period li').on('click', function(){
	if(!$(this).is('.active')){
	data_start = $(this).attr('data-start');
	data_end = $(this).attr('data-end');
	$('.btn-select-period li').removeClass('active')
	$(this).addClass('active');
	$('.daterange-ranges').data('daterangepicker').setStartDate(data_start);
$('.daterange-ranges').data('daterangepicker').setEndDate(data_end);
	data_start_format = data_start.split('-');
	data_end_format = data_end.split('-') 
	$('#period_start').val(data_start_format[2]+'-'+data_start_format[1]+'-'+data_start_format[0]);
	$('#period_end').val(data_end_format[2]+'-'+data_end_format[1]+'-'+data_end_format[0]);
	table.draw();


	dateFound(data_start_format[2]+'-'+data_start_format[1]+'-'+data_start_format[0],data_end_format[2]+'-'+data_end_format[1]+'-'+data_end_format[0]);
	setdate(data_start,data_end);
}
	})
	
	
	select22 = $('.select-type-option').select2({
  placeholder: 'Детализация по дням',
  minimumResultsForSearch: -1
});

select22.each(function( index ) {
$(this).data('select2').$dropdown.addClass("selection-user-drop-top");
});

  $('.panel.panel-white.row').on('resize', function(){
	  alert('test');
        if(chart != null && chart != undefined){
            chart.resize();
        }
    });
	
/*var blockWidth = $('.panel.panel-white.row').outerWidth();
$(window).resize(function() {
  if (blockWidth != $('.panel.panel-white.row').outerWidth()) {
    console.log('resized')
	 myChart.resize();
  }
});	*/

function reports_render(id,type,stack) {
            $('.loader').show();
			if(stack === '1'){
				stack = '&stack=' + stack;
				}
			else {
				stack = '';
				}	
			
            forma = $("#reportsform").serialize() + '&type_charts=' + type+ stack;
			
            //    document.querySelector('.js-analytics').innerHTML='';
            $.ajax({
                type: "get",
                url: '/reports/' + id,
                data: forma,
                success: function (html1) {
                    datatotable = JSON.parse(html1);
                    $('.loader').hide();
                    var chartHolder = document.querySelector('.js-analytics');

                        line_gr(datatotable, chartHolder)
               
             


				}
            })


        }
		
		
		

$(window).resize(function() {
	chart.resize()
	 console.log('resized')
});
$('.sidebar-main-toggle-menu').on('click',function(){
		setTimeout(chart.resize, 200); 
})	
$(".chart-js-block li").on('click', function(){
	if(!$(this).is('.active')){
	stack = $(this).attr('data-stack');
	$(".chart-js-block li").removeClass('active');
	$(this).addClass('active');
	type = $(this).attr('data-type');
	vals = $('.select_my_report.sactive').data('valur');
  	reports_render(last_report,type,stack);
	}
	})


</script>






@endsection

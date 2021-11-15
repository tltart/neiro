@inject('globalsetting', 'App\Http\Controllers\IndexController')

        <!DOCTYPE html>
<html lang="en">
<head>
    <script>var my_company_id={{Auth::user()->my_company_id}}</script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script  type="module"  src="/js/app.js"></script>

    <META HTTP-EQUIV="Access-Control-Allow-Origin" CONTENT="https://chat.neiros.ru">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Neiros - @yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/global_assets/css/icons/icomoon/styles.css?v=22" rel="stylesheet" type="text/css">
    <link href="/default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="/default/assets/css/core.min.css" rel="stylesheet" type="text/css">
    <link href="/default/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/default/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="/css/jquery.floatingscroll.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <link href="/css/floatingscroll-demo.css" rel="stylesheet" type="text/css">
     <link href="/default/assets/css/styles-quiz-new-project.css" rel="stylesheet" type="text/css">


    <!-- /global stylesheets -->
    <link href="/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/global_assets/css/icons/material/icons.css" rel="stylesheet" type="text/css">
    <!-- Core JS files -->
    <script src="/global_assets/js/core/libraries/jquery.min.js"></script>

        <script type="text/javascript" src="/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/global_assets/js/core/libraries/bootstrap.min.js"></script>
    <!-- /core JS files -->
    <script src="/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- Theme JS files -->
    <script src="/js/app__1.js"></script>


   {{-- <script src="/global_assets/js/plugins/ui/ripple.min.js"></script>--}}
    <script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
    <!-- /theme JS files -->


    <script src="https://use.fontawesome.com/7c8f9239c1.js"></script>


    {{--    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switchery.min.js"></script>--}}
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switch.min.js"></script>
    {{-- <script type="text/javascript" src="/default/assets/js/pages/appearance_draggable_panels.js"></script>--}}
    <script type="text/javascript" src="/default/assets/js/plugins/notifications/jgrowl.min.js"></script>
     <script type="text/javascript" src="/js/jquery.floatingscroll.min.js"></script>
    <script src="/cdn/v1/catch_lead/js/jquery.inputmask.js"></script>

    @yield('newjs', '')

    <!--Neiros-->
        <script> var scr = {"scripts":[{"src" : "https://cloud.neiros.ru/api/widget_site/get/21b54db941c65e723b667efa16a5b849_22","async" : false}]};
            !function(t,n,r){"use strict"; var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;
                for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};
                t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){
                    c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);</script>
        <!--Neiros -->
    @yield('wistis_css', '')
</head>
{{--<a href="
viber://pa?chatURI=wististest&context=text2">Вибер</a>
<body class="pace-done">--}}
<body class="sidebar-secondary-hidden pace-done has-detached-left sidebar-xs">
{{--sidebar-xs  --}}


@include('main_navbar')


<!-- /main navbar -->


<!-- Page container -->
<div class="page-container"  >

    <!-- Page content -->
    <div class="page-content" style="height: 100vh;">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main  sidebar-fixed">
            <div class="sidebar-content">


                <!-- /user menu -->


                <!-- Main navigation -->
@if(auth()->user()->grouproles_prov(0))
            @include('menu')
@elseif(auth()->user()->grouproles_prov(1))
                    @include('menu_manager')
                @endif
            </div>
        </div>
        <!-- /main sidebar -->
        @include('secondary_sitebar2')

        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Content area --><div class="hidenmodal"></div>
            <div class="content" style="margin-top: 50px !important;">

            @yield('content')

            <!-- Footer -->
                <div class="footer text-muted">

                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
@if(isset($kwiz))
 @include('widgets.kwiz.modal')
    @endif
    </div>
    <!-- /page content -->
    <?php /*?><div id="WidgetModal2" class="modal WidgetModalNew fade ClientInfoModal lids-neiros">
        <div class="modal-dialog" >
            <div class="modal-content"  style="height: 100vh">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                </div>
                <div class="modal-body" style="height: 100%;">
<div class="name-block-fixed" style="display: block;">
                        <div class="col-xs-12"><div class="h1-modal pos-left">Настройки  <span>Виджета квиз</span></div>

                            <button type="button" class="btn btn-primary widget-status-btn" data-id="" style="display: none;">Подключить</button>
                        </div>
                                            </div>

                    <div class="col-xs-12 block-descr">
                        <div class="col-sm-6 col-xs-12 text-center"><div class="img-block-left"><img  src=""></div></div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="paragraph">Яндекс Метрика — бесплатный интернет-сервис компании Яндекс, предназначенный для оценки посещаемости веб-сайтов, и анализа поведения пользователей. На данный момент Яндекс.Метрика является третьей по размеру системой веб-аналитики в Европе.</div>






                            <button type="button" class="btn btn-primary set_status widget_status_checkbox"  >Подключить</button>


                        </div>

                    </div>


                    <div class="col-xs-12 accordion-setings" style="display: block; margin-top: 20px;">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><style>
                                #block_2, #block_1, #block_0 {

                                    display: none;
                                }


                            </style>



                        </div>

                    </div>


                </div>



            </div>


        <!-- Футер модального окна -->

        </div>
    </div><?php */?>


    <div id="WidgetModal" class="modal WidgetModalNew fade ClientInfoModal lids-neiros">
        <div class="modal-dialog" >
            <div class="modal-content"  style="height: 100vh">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
                    <div class="name-block-fixed">
                        <div class="col-xs-12" ><div class="h1-modal pos-left">Настройки виджета <span></span></div>

                            <button type="button" class="btn btn-primary widget-status-btn widget1-status-btn"  data-id="">Подключить</button>
                        </div>
                        <?php /*?> <div class="col-sm-7 col-xs-12" ><div class="h1-modal pos-right">Активность</div></div><?php */?>
                    </div>

                    <div class="col-xs-12 block-descr">
                        <div class="col-sm-6 col-xs-12 text-center"><div class="img-block-left"><img  src=""></div></div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="paragraph">Яндекс Метрика — бесплатный интернет-сервис компании Яндекс, предназначенный для оценки посещаемости веб-сайтов, и анализа поведения пользователей. На данный момент Яндекс.Метрика является третьей по размеру системой веб-аналитики в Европе.</div>






                            <button type="button" class="btn btn-primary  widget_status_checkbox2"  >Подключить</button>


                        </div>

                    </div>


                    <div class="col-xs-12 accordion-setings">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">







                        </div>

                    </div>


                </div>



            </div>


        <?php /*?><div class="modal-body infclinfo" >

            </div><?php */?>
        <!-- Футер модального окна -->

        </div>
    </div>
    <div id="WidgetModal4" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal WidgetModalNew">
        <div class="modal-dialog" >
            <div class="modal-content"  style="height: 100vh">
                <!-- Заголовок модального окна -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                </div>
                <!-- Основное содержимое модального окна -->
                <div class="modal-body">
					<div class="name-block-fixed name-block-fixed-integration">
           <div class="col-xs-12" >
           <div class="h1-modal pos-left"><span class="insert-h1">Настройки виджета </span></div>


           </div>
            </div>

                    <div class="col-xs-12 block-descr">

                    </div>

                  <div class="col-xs-12 accordion-setings">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">







                        </div>

                    </div>



                </div>



            </div>


        <?php /*?><div class="modal-body infclinfo" >

            </div><?php */?>
        <!-- Футер модального окна -->

        </div>
    </div>
</div>@yield('my_modal' )




<div class="result__div" style="display:none"></div>

<style>
 /*Kviz*/

 .color-picker{
	     position: absolute;
    width: 1px;
    height: 1px;
    margin-top: 7px;
	 }
  .color-picker input{ width: 100%;
    height: 100%;
    box-shadow: none;
    border: none;
    color: #fff;
    opacity: 0;}

 .all-design-right-con .chose-icon5-design{
	    list-style: none;
    padding-left: 0px;
    float: left;
    margin-top: 10px;
    margin-left: -5px; }
 .all-design-right-con .chose-icon5-design li{
	 width: 38px;
    height: 38px;
    float: left;
    text-align: center;
    position: relative;
    line-height: 33px;
    cursor: pointer;
	 }
.all-design-right-con .chose-icon5-design li span{display: block;
    width: 100%;
    height: 100%;
    border: 1px solid #fff0;}
.all-design-right-con .chose-icon5-design li span img{    max-width: 20px;
    filter: invert(89%) sepia(6%) saturate(0%) hue-rotate(153deg) brightness(83%) contrast(82%);}
.all-design-right-con .chose-icon5-design li.active span{
	    border: 1px solid #00B9EE;
    border-radius: 3px;
    background: #fff;
    box-shadow: 0px 2px 3px 0px rgb(50 50 50 / 23%);
	}

.all-design-right-con .chose-icon5-design li.active span img, .all-design-right-con .chose-icon5-design li:hover span img{filter: invert(69%) sepia(45%) saturate(4157%) hue-rotate(151deg) brightness(90%) contrast(110%);}
.all-design-right-con .chose-icon5-design li.active span:before{
	    content: '';
    background: url(/global_assets/images/icon_kviz/dop-uderganie/chack.svg) center center;
    height: 12px;
    width: 12px;
    position: absolute;
    right: -4px;
    top: -3px;
	}

     .descr-text-all{    font-family: 'Raleway Medium';
    color: #999999;
    font-size: 13px;
    margin-bottom: -10px;}
	.footer-kviz-block-type-image{
		display:none;
		padding-left:0px;}
	.footer-kviz-block-type-image .file-block{
		width: 120px;
    height: 73px;
    text-align: center;
    background: #F5F6FA;
    border: 1px dashed #CDCDCE;
    padding: 10px;
    cursor: pointer;
	margin-bottom:15px;
	border-radius:3px;
		}
	.footer-kviz-block-type-image .file-image-block{
		    border: 1px solid #E4E4E4;
    float: left;
    width: 120px;
    height: 73px;
    margin-left: 15px;
    border-radius: 3px;
		}
	.footer-kviz-block-type-image .file-block input{
		    opacity: 0;
    width: 0.1px;
    height: 0.1px;
    position: absolute;
		}
	.footer-kviz-block-type-image .file-block label{
		    width: 100%;
    cursor: pointer;

		}
	.footer-kviz-block-type-image .file-block label img{
		    width: 30px;
		}
	.footer-kviz-block-type-image .file-block label div{
		    line-height: 1;
    margin-top: 5px;
    font-size: 12px;
		}

	.footer-kviz-block-type .block-kviz-f-3 {
		display:none;
    width: 187px;
}
	.footer-kviz-block-type .block-kviz-f-4 {
    width: 187px; display:none;
}
	.footer-kviz-block-type .block-kviz-f-2 {
    width: 187px;
}
	.footer-kviz-block-type .block-kviz-f-0 {
    width: 220px; display:none;
}


.kviz-input-block.kviz-input-block-vopros-number{
	    padding-left: 0px;
    width: 50%;
	}
.kviz-input-block.kviz-input-block-vopros-number-left{
	   padding-right: 0px;
    width: 50%;
	}
.kviz-input-block.kviz-input-block-vopros-down{	    padding-left: 0px;
    width: 50%;
	margin-top:10px;
	}
.select-panel-blok-file{
	    float: none;
    padding-left: 0px;
    margin-top: 20px;
	}
.select-panel-blok-file .select-panel-blok-input .dropdown-menu>li>label{
	    padding-left: 17px;
	}
.select-panel-blok-file .select-panel-blok-input .dropdown-menu>li.active>label{
	background:none;    color: #1EBEEF;
	}

.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-2{
	    width: 86%;padding-left: 0px;
	}
.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-3{
	    border-right: none;
	}
.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-1{
	cursor: auto;
	    border-right: none;
    padding: 11px 12px;
	}

.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-1 img{
	    width: 19px;
		display:block;
	}
.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-1 img.active{
	display:none;}

.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-1.active img{
	display:none;
	}
.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header-1.active img.active{
	display:block;}

.panel-otobragenie.panel-otobragenie-kviz-dop .panel-header .block-header .text__header{
	    padding-left: 0px;
	}

.button-top-all-cont{
    margin-top: 15px;
    width: 340px;     float: left;
	}
.button-top-all{
    float: left;
    width: 145px;
    height: 40px;
    border: 1px solid #DFDFDF;
    border-radius: 3px;
    font-family: 'Raleway Regular';
    color: #999999;
    line-height: 38px;
    text-align: center;
    font-size: 15px;
    margin-right: 10px;
	position:relative;     padding-left: 20px;
	cursor:pointer;
	}
.button-top-all.active{
	border-color: #00B9EE;
    color: #333333;
	}
.button-top-all.active:after{
		content:'';
	background: url('/global_assets/images/icon_kviz/dop-uderganie/chack.svg') center center;
    height: 12px;
    width: 12px;
    position: absolute;
left: 5px;
    top: 4px;
}


.button-top-all.button-top-row:before{
	content:'';
	background: url('/global_assets/images/icon_kviz/dop-uderganie/up-row.svg') center center;
    height: 10px;
    width: 18px;
    position: absolute;
    left: 22px;
    top: 15px;

	}
.button-top-all.button-down-row:before{
		content:'';
	background: url('/global_assets/images/icon_kviz/dop-uderganie/down-row.svg') center center;
	height:10px;
	width:18px;
	position:absolute;
    left: 20px;
    top: 13px;
	}
.button-top-all-cont .kviz-input-block{    float: left;
    margin-top: 15px;}
.button-top-all-cont .kviz-input-block-button-top input{    width: 290px;
    float: left;
    border-radius: 3px 0px 0px 3px;    margin-bottom: 0;
	    color: #333333;
    font-family: 'Roboto';
    font-style: normal;
	}

	.button-top-all-cont .curency-input{
		    float: left;
    width: 50px;
    height: 39px;
    background: #FBFBFD;
    border: 1px solid #E6E6E6;
    line-height: 34px;
    text-align: center;
    font-family: 'Raleway Regular';
    font-size: 15px;
    border-radius: 0px 3px 3px 0px;
    border-left: none;
		}
.button-top-all-cont-right{
	float: right;
    margin-top: 15px;
	height: 150px;}
.button-top-all-cont-right .skidka-btn{
	    width: 260px;
    height: 95px;
    background: #F5F6FA;
    padding: 25px;
    border-radius: 15px;
	}

.button-top-all-cont-right .skidka-btn .skidka-btn-left{
	width: 82px;
    height: 47px;
    float: left;
}

.button-top-all-cont-right .skidka-btn .skidka-btn-left .skidka-text-top{
	font-family: 'Raleway Light';

	}
.button-top-all-cont-right .skidka-btn .skidka-btn-left .skidka-price-top{    font-family: 'Roboto Bold';
    font-size: 24px;
    line-height: 1;
    margin-top: 3px;}
.button-top-all-cont-right .skidka-btn .skidka-btn-right{
	width: 90px;
    float: right;
	}
.button-top-all-cont-right .skidka-btn .skidka-btn-right .skidka-img-top{
	height: 23px;
    width: 40px;
	}

.button-top-all-cont-right .skidka-btn .skidka-btn-right .skidka-img-top img{
	    width: 100%;
	}

	.button-top-all-cont-right .skidka-btn .skidka-btn-right .skidka-price-down{
		    font-family: 'Roboto Light';
    font-size: 12px;
    margin-top: 6px;
		}
	.select-bonus-type .btn.btn-success img{
		    margin-right: 5px;    width: 19px;
		}
	.select-bonus-type .btn.btn-success img.select{
	   width: 16px;
    margin-top: -2px}



.select-bonus-type li label:before {
content: '';
    width: 15px;
    height: 20px;
    position: absolute;
    left: 17px;
    margin-top: 2px;
}
.select-bonus-type li .checkmark {
    display: none;
}
.select-bonus-type li[data-img="1"] label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/catalog.svg) center center no-repeat;
}

.select-bonus-type  li[data-img="1"].active label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/catalog-hover.svg) center center no-repeat;
}
.select-bonus-type li[data-img="1"] label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/catalog-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="1"].active label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/catalog-hover.svg) center center no-repeat;
}

.select-bonus-type li[data-img="2"] label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/cupon.svg) center center no-repeat;
}

.select-bonus-type  li[data-img="2"].active label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/cupon-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="2"] label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/cupon-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="2"].active label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/cupon-hover.svg) center center no-repeat;
}

.select-bonus-type li[data-img="3"] label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/price.svg) center center no-repeat;
}

.select-bonus-type  li[data-img="3"].active label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/price-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="3"] label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/price-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="3"].active label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/price-hover.svg) center center no-repeat;
}


.select-bonus-type li[data-img="4"] label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/svoi.svg) center center no-repeat;
}

.select-bonus-type  li[data-img="4"].active label:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/svoi-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="4"] label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/svoi-hover.svg) center center no-repeat;
}
.select-bonus-type  li[data-img="4"].active label:hover:before {
    background: url(/global_assets/images/icon_kviz/dop-uderganie/svoi-hover.svg) center center no-repeat;
}

.add-number-new.select-bonus-type .dropdown-menu>li>label{
	    padding-left: 45px;
	    position: relative;
	}

.add-user-new.select-bonus-type .btn-success b{
	font-weight:normal;}

.add-number-new.select-bonus-type .dropdown-menu>li {
    float: left;
    width: 100%;
}

.add-number-new.select-bonus-type .dropdown-menu>li.active>label{
	background:none !important;

	}

.pravilo-block-bonus{
	    width: 300px;
	}

.right-block-bonus{
	    width: 300px;
    float: right;
    background: #F8F8F9;
    height: 295px;
    margin-top: -18px;
    margin-right: -19px;
    text-align: center;

	}
.right-block-bonus .text-empty-bonus{
	    width: 100%;
    font-family: 'Raleway Medium';
    line-height: 1.5;
    margin-top: 130px;
	}
.checkbox-bonus{
	padding:0px;

	}
.start-page-kviz .checkbox-bonus .add-number-new-checkbox{
	    margin-bottom: 0px;
	    margin-top: 2px;
	}
.kviz-input-block-bonus{
    float: left;
    margin-top: 15px;
	}
.kviz-input-block-bonus label{
	width:100% !important;}
.kviz-input-block-bonus input{
	font-style: normal !important;
	}
.descr-text-all-bonus{
	     float: left;
    width: 100%;
    margin-top: 10px;
    margin-bottom: 10px;
	}
.block-color-bonus{    float: left;
    width: 100%;
    padding-left: 0px;
    list-style: none;}
.block-color-bonus li{
	    width: 20px;
    height: 20px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
    cursor: pointer;
	margin-bottom:10px;
	border:1px solid}
	.block-color-bonus li.active{
	box-shadow: inset 0px 0px 0px 2px rgb(255 255 255);}

	.design-block-label{
    height: 109px;
    width: 280px;
    margin: 0 auto;
    margin-top: 10px;
    border-radius: 10px;
    background: linear-gradient(172deg, #001C60 36%, #000000 199%);
    position: relative;
		}
	.design-block-label .design-block-left{
		    float: left;
    position: relative;
    height: 100%;
		}
	.design-block-label .design-block-left .design-tupe-duwn{
		    width: 95px;
    margin-left: 15px;
    margin-top: 7px;
		}
	.design-block-label .design-block-left .design-tupe-duwn img{
		width:100%;
		}
	.design-block-label .design-block-left .design-tupe-top{
		    position: absolute;
    top: 21%;
    left: 50%;
    margin-top: -11px;
    margin-left: -32px;
		}
		.design-block-label .design-block-left .design-tupe-top img{
			    width: 70px;
			}
	.design-block-label .design-block-right{
    float: left;
    width: 104px;
    max-height: 80px;
    max-width: 104px;
    font-family: 'Roboto';
    color: #fff;
    text-align: left;
    font-size: 17px;
    line-height: 1.2;
    margin-left: 30px;
    margin-top: 21px;
    overflow: hidden;
			}

	.design-block-label .design-icon-check{
		    position: absolute;
    right: 10px;
    top: 9px;
		}
	.pravilo-block-bonus-cont{
		padding:0px;}
	.pravilo-block-bonus-cont-2{
		margin-top:-20px;}

	.pravilo-block-bonus-cont-2 .text-h1-fo-select-panel-kviz{
		    border-top: 1px solid #E6E6E6;
    padding-top: 10px;
		}

.bonus-copiraght{
	    position: absolute;
    bottom: -25px;
    width: 100%;
    font-family: 'Raleway Medium';
    color: #999999;
    font-size: 13px;
	}
.pravilo-block-bonus-cont-2  .design-block-label{
	    margin-top: 42px;
	}

	.pravilo-block-bonus-cont .file-block{
		    position: absolute;    z-index: 2;
			display:none;
		}
	.pravilo-block-bonus-cont .file-block.active{
		display:block;}
	.pravilo-block-bonus-cont .file-block input {
    opacity: 0;
    width: 0.1px;
    height: 0.1px;
    position: absolute;
}
.pravilo-block-bonus-cont .file-block label{
	    width: 35px;
    height: 40px;
    margin-bottom: 0px;
    left: 0px;
    background: #fff;
    border: 1px dashed #E6E6E6;
    border-radius: 2px;
    cursor: pointer;
	}
.pravilo-block-bonus-cont .file-block label img {
     margin-top: 9px;
    width: 26px;
    margin-left: 5px;
}

	.pravilo-block-bonus-cont  .file-block label.active img, .pravilo-block-bonus-cont .file-block label:hover img {
    filter: invert(36%) sepia(19%) saturate(3990%) hue-rotate(155deg) brightness(98%) contrast(101%);
}
.kviz-input-block-contact-left{
     width: 47%;
    float: left;
    position: relative;}
.kviz-input-block-contact-right{
    width: 47%;
    float: right;
    position: relative;
	}

.switchery-xs-new-contact{
	    position: absolute;
    right: 1px;
    top: 1px;
    width: 64px;
    text-align: center;
    height: 37px;
    background: #FBFBFD;
    line-height: 34px;
    border-left: 1px solid #E6E6E6;
	}
	.cont-btn-content-contact .text-h1-fo-select-panel-kviz{
		    float: left;
    width: 100%;
		    margin-top: 15px;
		}

	.switchery-xs-new-contact .switchery{
		width:40px;
		height:20px;}

	.switchery-xs-new-contact .switchery>small{    width: 20px;
    height: 20px;}

	.on-of-chatbot-block .switchery{
		width:40px;
		height:20px;}

	.on-of-chatbot-block .switchery>small{    width: 20px;
    height: 20px;}

	.switchery-chatbot-block{
		padding-left:14px}
	.on-of-chatbot-block{
		float: left;
    width: 100%;
    margin-top: 20px;
    font-size: 16px;
    font-family: 'Raleway Regular';
	margin-bottom:25px;
		}
  /*Kviz*/
</style>
<style>
.all-design-down-con{
	    float: left;
    width: 100%;}

.all-design-down-con .preview-button{
	position:relative;
	    float: left;
    width: 241px;
    background: #02245A;
    border-radius: 30px 30px 0px 0px;
    margin-left: 15px;
    margin-top: 23px;
    color: #fff;
    font-size: 17px;
    font-family: 'Roboto Light';
    line-height: 61px;
    height: 60px;
    box-shadow: 0px 3px 6px 0px rgb(50 50 50 / 23%);
	}
.all-design-down-con .preview-button span{    display: block;
    float: left;
    /* height: 60px; */
    width: 74px;
    text-align: center;
    border-right: 1px solid #ffffff4f;
    height: 35px;
    margin-top: 13px;
    padding-left: 10px;}

.all-design-down-con .preview-button span img{
	    margin-top: -26px;    width: 30px;
    filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(
290deg
) brightness(101%) contrast(101%);
	}
.all-design-down-con .preview-button div{
	    float: left;
    width: 166px;
    padding-left: 15px;
	}
.all-design-down-con .preview-button b{
    position: absolute;
    bottom: -22px;
    width: 100%;
    text-align: center;
    display: block;
    color: #999999;
    left: 0;
    line-height: 1;
    font-size: 13px;
    font-family: 'Raleway Medium';
    font-weight: normal;}
.all-design-right-con{
	    float: right;
    width: 375px;
    height: 144px;
    background: #F8F8F9;
    padding: 15px;
	}

.all-design-right-con .all-design-right-con-h1{
font-family: 'Raleway Regular';
}


.variant-all-design-no-round{
	    float: left;
    width: 100%;
    margin-top: 20px;
	}
.variant-all-design-no-round .text-h1-fo-select-panel-kviz{
	margin-top: 0px;
    float: left;
    width: 100%;
	}
.variant-all-design-no-round  .kviz-input-block{
    float: left;
    margin-bottom: 15px;
    margin-top: 15px;}


	.all-design-left-con{
		    width: 270px;
    height: 144px;
    border: 1px solid #AEB5BF;
    position: relative;
    float: left;
		}

.all-design-left-con .top-b{
	width: 100%;
    height: 17px;
	}

.all-design-left-con .left-b{
	    width: 17px;
    height: 126px;
    float: left;
    border-right: 1px solid #AEB5BF;
    border-top: 1px solid #AEB5BF;
    position: relative;

	}
.all-design-left-con .left-b .left-top{
	    float: left;
    width: 100%;
    height: 62px;
    border-bottom: 1px solid #AEB5BF;
	}
.all-design-left-con .left-b .left-down{
	    float: left;
    width: 100%;
    height: 62px;
	}

.all-design-left-con .center-center{
	    float: left;
    border-bottom: 1px solid #AEB5BF;
    border-top: 1px solid #AEB5BF;
    width: 234px;
    height: 110px;
    text-align: center;
    background: #F5F5F5;
    font-family: 'Raleway Regular';
    padding-top: 32px;
	}
.all-design-left-con .right-b{
	    width: 17px;
    height: 126px;
    float: left;
    border-left: 1px solid #AEB5BF;
    border-top: 1px solid #AEB5BF;
	}
.all-design-left-con .right-b .right-top{
	    float: left;
    width: 100%;
    height: 62px;
    border-bottom: 1px solid #AEB5BF;
	}

.all-design-left-con .right-b .right-down{
	float: left;
    width: 100%;
    height: 62px;

	}
.all-design-left-con .down-b{
	    float: left;
    width: 234px;
    height: 17px;
    margin-top: -17px;
    margin-left: 17px;

	}

.all-design-left-con .down-b .down-left{
	    float: left;
    width: 78px;
    border-right: 1px solid #AEB5BF;
    height: 17px;
	}

.all-design-left-con .down-b .down-center{
    float: left;
    width: 78px;
    border-right: 1px solid #AEB5BF;
    height: 17px;
	}
	.all-design-left-con .down-b .down-right{
	float: left;
    width: 78px;
    height: 17px;
	}

.all-design-left-con .select-position{
	cursor:pointer;

	}

.all-design-left-con .select-position:hover, .all-design-left-con .select-position.active{
	background:#00B9EE;

	}


.variant-all-design-round{
		float:left;
		width:100%;

		margin-top:30px;
	}
.variant-all-design-round .kviz-input-block{
	float:left;
	    margin-bottom: 10px;
	}

.variant-all-design-round .kviz-input-block label{margin-bottom: 2px;	}



.all-design-block-select-button-cont{
	    width: 100%;
    float: left;
    margin-top: 30px;
	}

.all-design-block-select-button-cont .all-design-block-select-button{
    width: 190px;
    height: 150px;
    float: left;
    border: 1px solid #DFDFDF;
    margin-right: 15px;
    border-radius: 5px;
    text-align: center;
	cursor:pointer;    position: relative;
}
.all-design-block-select-button-cont .all-design-block-select-button .btn-select-item{
	width: 80px;
    height: 35px;
    margin: 0 auto;
    background: #AEB5BF;
    color: #fff;
    font-size: 15px;
    font-family: 'Raleway Regular';
    line-height: 35px;
    margin-top: 34px;
    border-radius: 20px;
       margin-bottom: 18px;
	}
.all-design-block-select-button-cont .all-design-block-select-button.no-round .btn-select-item{
	border-radius: 10px 10px 0px 0px;
	}
.all-design-block-select-button-cont .all-design-block-select-button .btn-select-item-text{
	    font-family: 'Raleway Regular';
    line-height: 1.2;     font-size: 15px;
	}

.all-design-block-select-button-cont .all-design-block-select-button.active, .all-design-block-select-button-cont .all-design-block-select-button:hover{
	border-color:#00B9EE;
	box-shadow: 0px 3px 6px 0px rgb(50 50 50 / 23%);
	}
.all-design-block-select-button-cont .all-design-block-select-button.active .btn-select-item, .all-design-block-select-button-cont .all-design-block-select-button:hover .btn-select-item{
	    background: #00B9EE;
	}

.all-design-block-select-button-cont .all-design-block-select-button.active:after {
    content: '';
    background: url(/global_assets/images/icon_kviz/dop-uderganie/chack.svg) center center;
    height: 15px;
    width: 15px;
    position: absolute;
    right: 6px;
    top: 6px;
}



.all-design-input-block{
	float:left; width:200px;
	}
.cont-btn-content-contact{
	    padding-top: 0px;
    padding-bottom: 20px;
	}
.cont-btn-content-contact .block-header.block-header-2{
    width: 100% !important;
    border-right: 0px !important;
    padding-left: 20px !important;
	}
.cont-btn-content-contact  .panel-otobragenie{
	margin-bottom:25px;

	}

.cont-btn-content-contact .on-of-chatbot-block-tab .text-h1-fo-select-panel-kviz{
	    float: left;
    width: 100%;
    margin-top: 5px;
    margin-bottom: 2px;
	}
.on-of-chatbot-block-tab{
	margin-bottom: 20px;
    float: left;
    width: 100%;
	}
.block-icon-messeger{
	    float: left;
    width: 100%;
	}
.block-messeger-li{    margin-top: 2px;
    float: left;
    width: 100%;}
.block-messeger-li div{
	width:25px;
	height:25px;
	float:left;
	margin-right:10px;
	cursor:pointer;
	}
.block-messeger-li div.fb-messeger{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/fb.svg) center center;
	}
.block-messeger-li div.fb-messeger:hover, .block-messeger-li div.fb-messeger.active{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/fb-hover.svg) center center;
	}

.block-messeger-li div.telegram-messeger{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/telegram.svg) center center;
	}
.block-messeger-li div.telegram-messeger:hover, .block-messeger-li div.telegram-messeger.active{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/telegram-hover.svg) center center;
	}

.block-messeger-li div.vk-messeger{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/vk.svg) center center;
	}
.block-messeger-li div.vk-messeger:hover, .block-messeger-li div.vk-messeger.active{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/vk-hover.svg) center center;
	}


.block-messeger-li div.viber-messeger{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/viber.svg) center center;
	}
.block-messeger-li div.viber-messeger:hover, .block-messeger-li div.viber-messeger.active{
	background: url(/global_assets/images/icon_kviz/dop-uderganie/messeger/viber-hover.svg) center center;
	}

	.block-color-all-design{
    float: left;
    width: 100%;
    padding-left: 0px;
    list-style: none;
		}

	.block-color-all-design li {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
    cursor: pointer;
    border: 1px solid;
}
.block-color-all-design li.active {
    box-shadow: inset 0px 0px 0px 2px rgb(255 255 255);
}
.all-design-block .all-design-block-top-left{
	float: left;
    width: 300px;
	}
.all-design-block  .all-design-block-h1{
	    font-family: 'Raleway Medium';
    font-size: 15px;
    margin-bottom: 10px;
	}

.all-design-block .all-design-block-top-right{
	    float: right;
    width: 280px;
	}

.all-design-block .select-color-all-design{
	    width: 42px;
    height: 42px;
    border-radius: 50%;
    margin-top: 13px;
	}
</style>


 <script>
 
     $(document).on('change','.file-block input[type="file"]',function (event) {

        event.stopPropagation(); // Остановка происходящего
        event.preventDefault();  // Полная остановка происходящего
        file = $(this).val();
        files = this.files;
        var data = new FormData();
        $.each(files, function (key, value) {
			console.log(value)
            data.append('file', value);
        });


        if ($(this).val() != '') {
			console.log(data);

        } else {


        }
    });
 
 
  $('.all-design-input-block input.form-control-text').on('click',function(){
	 $('.all-design-input-block .color-picker input').click()
	  })

 $('.color-picker input').on('change', function(){
	val =  $(this).val()
	$(this).closest('.all-design-input-block').find('input.form-control-text').val(val)
	 })

 $('.proiti-test').on('keyup',function(){
	 text = $(this).val()
	 $(this).closest('.all-design-block').find('.preview-button div').text(text)
	 })




  $(document).on('click', '.all-design-right-con .chose-icon5-design li', function(){
	  $(this).closest('.chose-icon5-design').find('li').removeClass('active');
	   name =  $(this).attr('data-name')
	  src = '/global_assets/images/icon_kviz/design/'+name+'.svg';
	  $(this).closest('.variant-all-design-no-round').find('.all-design-down-con .preview-button img').attr('src', src);
	  $(this).addClass('active');
	 })



 $(document).on('click', '.all-design-left-con .select-position', function(){
	 $('.all-design-left-con .select-position').removeClass('active')
	 $(this).addClass('active');
	 })

 $(document).on('click', '.all-design-block-select-button-cont .all-design-block-select-button', function(){
	 $('.all-design-block-select-button-cont .all-design-block-select-button').removeClass('active');
	 if($(this).is('.round')){
		 $('.variant-all-design-round').show()
		  $('.variant-all-design-no-round').hide()
		 }
		 else{
			 $('.variant-all-design-no-round').show()
			 $('.variant-all-design-round').hide()
			 }
	 $(this).addClass('active');

	 })


  $(document).on('click','.block-color-all-design li', function(){
	 	$(this).closest('.block-color-all-design').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');

		$(this).closest('.all-design-block').find('.all-design-down-con .preview-button').css('background',color);
		$(this).closest('.all-design-block').find('.select-color-all-design').css('background',color);
	 })



 $('#chatbot-block-on').on('change', function(){
	if($(this).prop('checked')){
		$('.on-of-chatbot-block-tab').show();
		}
		else{
			$('.on-of-chatbot-block-tab').hide();}


	 })

 $('.block-messeger-li div').on('click', function(){
	 if($(this).is('.active')){
		 $(this).removeClass('active');
		 }
		 else{
	 	$(this).addClass('active');}

	 })




 $('.sele-on-month').on('keyup',function(){
	 text = $(this).val()
	 $(this).closest('.pravilo-block-bonus-cont').find('.design-block-label .design-block-right').text(text)
	 })

$('#add-bonus-end-step').on('click',function(){
	$(this).hide();
	$('.pravilo-block-bonus-cont-2').show();

	})

 $(document).on('click','.block-color-bonus li', function(){
	 	$(this).closest('.block-color-bonus').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');
		$(this).closest('.pravilo-block-bonus-cont').find('.design-block-label').css('background','linear-gradient(172deg, '+color+' 36%, #000000 199%)');
	 })

 /*Kviz*/
   $( '.select-bonus-type ul li').on('click', function(event){

		event.preventDefault();
		$(this).closest('.pravilo-block-bonus-cont').find('.right-block-bonus .text-empty-bonus').hide();
		$(this).closest('.pravilo-block-bonus-cont').find('.right-block-bonus .design-block-label').show();
	 	$(this).closest('.select-bonus-type').find('li').prop('checked', false);
	  	$(this).closest('.select-bonus-type').find('li input').prop('checked', false);
		$(this).closest('.select-bonus-type').removeClass('open');
	    $('input', this).prop('checked', true);
		$(this).closest('.select-bonus-type').find('li').removeClass('active');
		$(this).addClass('active');
		text = $('label', $(this)).text()
		src = $(this).attr('data-src');
		img = '/global_assets/images/icon_kviz/dop-uderganie/'+src+'.svg';
		img2 = '/global_assets/images/icon_kviz/dop-uderganie/lebel-'+src+'.png';
		if('svoi' === src){

			$(this).closest('.pravilo-block-bonus-cont').find('.file-block').show()
			$(this).closest('.pravilo-block-bonus-cont').find('.design-block-left .design-tupe-duwn img').attr('src','/global_assets/images/icon_kviz/dop-uderganie/bg-bonus.png')


			}
			else{
			$(this).closest('.pravilo-block-bonus-cont').find('.file-block').hide()

		$(this).closest('.pravilo-block-bonus-cont').find('.design-block-left .design-tupe-duwn img').attr('src',img2)
		$(this).closest('.select-bonus-type').find('button img').attr('src',img)
		$(this).closest('.select-bonus-type').find('button img').addClass('select') }

	 	$(this).closest('.select-bonus-type').find('button b').text(text);




	 })

$(document).on('click','.button-top-all', function(){

	$('.button-top-all').removeClass('active');
	if($(this).is('.button-top-row')){
		$('.button-top-all-cont-right .skidka-img-top img').attr('src','/global_assets/images/icon_kviz/dop-uderganie/up-row.svg')
		}
	else{
		$('.button-top-all-cont-right .skidka-img-top img').attr('src','/global_assets/images/icon_kviz/dop-uderganie/down-row.svg')
		}
	$(this).addClass('active')

	})
$(document).on('keyup','#button-top-all-input', function(){
	price = $(this).val()
	$('.skidka-price-top span').html(price)
	})

$(document).on('keyup','#button-top-all-input2', function(){
	price = $(this).val()
	$('.skidka-price-down span').html(price)
	})



$(document).on('change','.file-block input',function(){
	if($(this).val() != ''){
	$(this).closest('.file-block').find('label').addClass('active');}
	else{
		$(this).closest('.file-block').find('label').removeClass('active');
		}
	})






$(document).on('click', '.kviz-vibor-start-step .item-kviz', function(event){
	$('.hidden-type-oprosa-down').show();
	id = $(this).attr('data-id')
	obj = $(this).closest('.start-page-kviz').find('.select-panel-blok ul li[data-img="'+id+'"]')
	$(this).closest('.kviz-vibor-start-step').css('display','none');
	parent_select_panel(event,obj)



	})


   function parent_select_panel(event,obj){
	  event.preventDefault();

	  $(obj).closest('.select-panel-blok').find('li').prop('checked', false);
	  $(obj).closest('.select-panel-blok').find('li input').prop('checked', false);
$(obj).closest('.select-panel-blok').find('.dropdown.add-user-new.add-number-new.select-panel-blok-input').removeClass('open');


	    $('input', obj).prop('checked', true);
	  $(obj).closest('.select-panel-blok').find('li').removeClass('active');
		$(obj).addClass('active');
		if($(obj).is('.t_k')){
			id = $(obj).attr('data-img');
			text = $('label',obj).text()
			$(obj).closest('.panel-otobragenie').find('.panel-header .block-header-2 .insert-img-text-k').html('<img src="/global_assets/images/icon_kviz/vibor-varianta/t_k_'+id+'_hover.png"><span class="text__header">'+text+'</span>')
			$(obj).closest('.select-panel-blok-input').find('.btn-success').html('<img src="/global_assets/images/icon_kviz/vibor-varianta/t_k_'+id+'_hover.png"> '+text)
			$(obj).closest('.panel-body-panel').find('#add_variant').attr('data-variant',id);

			if(id === '1'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Введите текст варианта ответа" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
				}

			if(id === '2'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros kviz-input-block-vopros-file"><div class="file-block"><input type="file" name="file-1[]" id="file-`+id+`"
					  />
				<label for="file-`+id+`"><img src="/global_assets/images/icon_kviz/load-img.svg">
				</label></div>
                 <input type="text" class="form-control form-control-text" placeholder="Введите текст варианта ответа" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
	  	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 }

					if(id === '3'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Начальны текст</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Введите начальный текст" name="" value="">
                 </div> 
	 `);
	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','block')
	  	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 }

	 					if(id === '4'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Пример ответа</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Пример ответа" name="" value="">
                 </div> 
	 `);
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','none')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')


	 }



	 					if(id === '5'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Пример ответа</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Пример ответа" name="" value="">
                 </div>
			<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Варианты выпадающего списка</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="" name="" value="">
                 </div>	 
				  
	 `);
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')


	 }


	 	 					if(id === '6'){
$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html('<div class="descr-text-all">Пользователю будет предложено выбрать дату</div>');
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','none')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3').css('display','block')


	 }


	 	 					if(id === '7'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Выбор значения из диапазона</div>
				<div class="kviz-input-block col-xs-12 kviz-input-block-vopros-number">
                 <input type="number" class="form-control form-control-text" placeholder="От" name="" value="">
                 </div>
				<div class="kviz-input-block col-xs-12 kviz-input-block-vopros-number kviz-input-block-vopros-number-left">
                 <input type="number" class="form-control form-control-text" placeholder="До" name="" value="">
                 </div>
				 <div class="kviz-input-block col-xs-12 kviz-input-block-vopros-down ">
                 <input type="text" class="form-control form-control-text" placeholder="шаг" name="" value="">
                 </div> 
				 
	 `);
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','none')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-0').css('display','block')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3').css('display','none')


	 }

	 	 	 					if(id === '8'){
$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="descr-text-all">Здесь пользователь может загрузить свой собственный файл</div>
<div  class="select-panel-blok-file col-xs-12" >
    <div class="dropdown add-user-new add-number-new select-panel-blok-input">
            <button  class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Выберите тип файлов</button>
             <ul class="dropdown-menu"  aria-labelledby="dLabel">

                 <li><label class="add-number-new-checkbox">Все<input value="var-files" type="checkbox" ><span class="checkmark"></span></label></li>
                 <li><label class="add-number-new-checkbox">PNG<input value="var-files" type="checkbox" ><span class="checkmark"></span></label></li>
                                  
                <li><label class="add-number-new-checkbox">JPG<input value="var-files" type="checkbox" ><span class="checkmark"></span></label></li>
       
             </ul>
    </div>
                    </div>`);
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','none')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')


	 }


			}
			else{


		$(obj).closest('.select-panel-blok-input').find('.btn-success').html($('label',obj).text())



	 val = $('input',obj).val();
	 $(obj).closest('.pravilo-block').find('.two-panel-result-show').css('display','none')
	 if(val === 'time-page' || val === 'time-site'){
		 $(obj).closest('.pravilo-block').find('.time-page').css('display','block')
		 }

		 if(val === 'url-page'){
			 $(obj).closest('.pravilo-block').find('.url-page').css('display','block')
			 }


	}


	  }



 $(document).on('click','#add_variant',function(){
	variant =  $(this).attr('data-variant');
	obj = $(this).closest('.start-page-kviz').find('.kviz-block-fo-voprosi-all');

	Rand =	Date.now()
	 if(variant === '1'){
	 obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Введите текст варианта ответа" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 }

	if(variant === '2'){
	obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros kviz-input-block-vopros-file"><div class="file-block"><input type="file" name="file-`+Rand+`[]" id="file-`+Rand+`"
					  />
				<label for="file-`+Rand+`"><img src="/global_assets/images/icon_kviz/load-img.svg">
				</label></div>
                 <input type="text" class="form-control form-control-text" placeholder="Введите текст варианта ответа" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 }



					if(id === '3'){

				obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Введите начальный текст" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg"></div>`);


	 }

	 					if(id === '4'){

					obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="Пример ответа" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);

	 }

	 if(id === '5'){

					obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text" placeholder="" name="" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);

	 }


	 })

  $(document).on('click','.delete-vopros-kviz',function(){
	  $(this).closest('.kviz-input-block-vopros').remove();
	 })









 $(document).on('click','.block__esli_2_select ul li',function(){
	text =  $('label',this).text()
	 $(this).closest('.block__esli_2_select').css('display','none');
	$(this).closest('.block__esli').find('.block__esli_3').text(text)
	 $(this).closest('.block__esli').find('.block__esli_3').css('display','block')


	 })
 $(document).on('click','.block__esli_3',function(){
	 $(this).css('display','none');
	 $(this).closest('.block__esli').find('.block__esli_2_select').css('display','block');
	 })

  $( function() {
    $( "#sortable-panel-otobragenie" ).sortable();
    $( "#sortable-panel-otobragenie" ).disableSelection();
  } );






  function parent_select_panel_url(event,obj){
	  	 event.preventDefault();
	/* $('.url-page ul li input').prop('checked', false);*/
	  $(obj).closest('.select-panel-blok-input').find('li input').prop('checked', false);

		$(obj).closest('.select-panel-blok-input').find('ul li').removeClass('active');
	 $('input',obj).prop('checked', true);
	 $(obj).addClass('active');
$(obj).closest('.select-panel-blok-input').find('.btn-success').html($('label',obj).text())

	  }


    function operator_select(event,obj){
	 event.preventDefault();

	 $(obj).closest('.operator-select-block').find('ul li input').prop('checked', false);
	$('input', obj).prop('checked', true);
	 $(obj).closest('.operator-select-block').find('ul li').removeClass('active');
	 $(obj).addClass('active');
	$(obj).closest('.select-panel-blok-input').find('.btn-success').html($('label',obj).text())

	  }

  $(document).on('click','.operator-select-block ul li',function(event){

	  operator_select(event,this);
	  })

	   $('.operator-select-block ul li').on('click',function(event){

	  operator_select(event,this);
	  })

   $('.select-panel-blok ul li').on('click',  function(event){

parent_select_panel(event,this)

	 })

   $(document).on('click',  '.select-panel-blok-file ul li', function(event){
		$(this).closest('ul').find('li').removeClass('active');
		$(this).addClass('active');
		text = $('label', $(this)).text()
	 	$(this).closest('.select-panel-blok-file').find('button').text(text)
	 })


  $(document).on('click','.delete_pravilo', function(){
	  $(this).closest('.pravilo-block').remove();
	  })
  $(document).on('click','.delete_pravilo2', function(){
	  $(this).closest('.show-chat-operator').remove();
	  })



 $(document).on('click', '.select-panel-blok ul li', function(event){

	 parent_select_panel(event,this)
	 })








 $('.url-page ul li').on('click', function(event){
	 parent_select_panel_url(event,this)

	 })
 $(document).on('click', '.url-page ul li', function(event){
parent_select_panel_url(event,this)

	 })


	$(document).on('click','.block-header-5',function(){
		if(!$(this).is('.no-delete')){
			del = $(this)
			data_id = $(del).attr('data-id');

		        $.ajax({
            type: "POST",
            url: ' /ajax/delete123',
            data: {id:data_id},
            success: function (html1) {
              $(del).closest('.panel-otobragenie').remove();
            }



        });
		}
		})

	$(document).on('click', '.block-header-4',function(){
		html = $(this).closest('.panel-otobragenie').html();
		Rand =	Date.now()
		$('.result__div').html(html)
		$('.result__div .block-header-5').removeClass('no-delete');
		$('.result__div .switchery-xs-new').html('<input checked type="checkbox" class="js-switch'+Rand+'" data-id="">')
		html = $('.result__div').html()

		$('#sortable-panel-otobragenie').append('<div class="panel-otobragenie col-xs-12">'+html+'</div>')

			  var elems = document.querySelectorAll('.js-switch'+Rand+'');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}
		})

function body_panel_visible(){
 if ($('.panel-body-panel').is(':visible')) {
   $('.add_sourse_block__chat').css('display','none');
}
else{
	$('.add_sourse_block__chat').css('display','block');
	}
};
$(document).on('click', '.block-header-3',function(){
	if($(this).is('.active')){
		$(this).removeClass('active');
		$(this).closest('.panel-header').find('.block-header-1').addClass('active')
		}
	else{
		$(this).addClass('active');
		$(this).closest('.panel-header').find('.block-header-1').removeClass('active')
		}

	$(this).closest('.panel-otobragenie').find('.panel-body-panel').slideToggle( "fast" );

setTimeout(body_panel_visible, 500);

	})


$(document).on('click', '.save-setings2',function(){
	if($(this).closest('.panel-otobragenie').find('.block-header-3').is('.active')){
		$(this).closest('.panel-otobragenie').find('.block-header-3').removeClass('active');
		}
	else{
		$(this).closest('.panel-otobragenie').find('.block-header-3').addClass('active');
		}

	$(this).closest('.panel-otobragenie').find('.panel-body-panel').slideToggle( "fast" );

setTimeout(body_panel_visible, 500);
});
 function deletecanal(id) {
     datatosend = {
         id:id,

         _token: $('[name=_token]').val(),


     };
     $.ajax({
         type: "POST",
         url: '/ajax/deletecanal',
         data: datatosend,
         success: function (html1) {
             $('#cost'+id).remove();
         }



     });
 }
  @if(auth()->check())


  setInterval(set_online_user,30000)
function set_online_user(){
  $.ajax({
      type: "POST",
      url: '/ajax/set_user_online',
      data: {
          id:1
      },
      success: function (html1) {

      }



  });
  }

 @endif
  </script>
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>

<!-- VK Widget -->
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?154"></script>

{{--<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 153817342, {expanded: "1",tooltipButtonText: "Есть вопрос?"});
</script>--}}
<!-- /page container -->
<script type="text/javascript" src="/js/myscript.js?{{time()}}"></script>

@yield('skriptdop', '')

@yield('skript_callstat', '')
@yield('footer')
<script type="text/javascript" src="/js/wistis.js?{{time()}}"></script>
@yield('wistis_js')
</body>
</html>

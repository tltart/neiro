@inject('globalsetting', 'App\Http\Controllers\IndexController')

        <!DOCTYPE html>

<html lang="en">
<head><!-- v1605_ -->
    <script>var my_company_id={{Auth::user()->my_company_id}}</script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script  type="module"  src="/js/app.js"></script>

    <META HTTP-EQUIV="Access-Control-Allow-Origin" CONTENT="https://chat.neiros.ru">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$globalsetting->get_title()}}</title>
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
     <link href="/css/kviz_admin.css?time=1" rel="stylesheet" type="text/css">
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


    @if(request()->route()->getName()=='allproject')
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"
              integrity="sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link href="/css/pages_assets/project_card.css?v=1" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"
                integrity="sha512-Yk47FuYNtuINE1w+t/KT4BQ7JaycTCcrvlSvdK/jry6Kcxqg5vN7/svVWCxZykVzzJHaxXk5T9jnFemZHSYgnw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="/css/pages_assets/project_card.js"></script>
    @endif
    @yield('newjs', '')

    <!--Neiros-->
        <script> var scr = {"scripts":[{"src" : "https://neiros.cloud/api/widget_site/get/21b54db941c65e723b667efa16a5b849_22","async" : false}]};
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


<div id="WidgetModal2" class="modal WidgetModalNew fade ClientInfoModal lids-neiros">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body" style="height: 100%;overflow-x: hidden;">
                    <div class="name-block-fixed">
                        <div class="col-xs-12" ><div class="h1-modal pos-left">Настройки виджета <span></span></div>
<div class="h1-modal pos-left pos-left-kviz" style="display:none"><img  class="back-kviz" src="/global_assets/images/icon_kviz/back.svg"><div><input type="text" class="form-control new-kviz" placeholder="Созданый квиз" name="name_new_kviz" value=""></div></div>
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
                
                <div class="insert-kviz-data-container" style="display:none;">
                
                		
                
                </div>

            </div>


        </div>


    </div>
</div>






 <script>  @if(auth()->check())


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
 <script type="text/javascript" src="/js/kviz_admin.js"></script>
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

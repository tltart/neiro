<div class="menu-sidebar sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">


            <li class="sf-main-menu sf-main-menu-dashboard">
            	<a href="/" class="rf-menu-link"><img class="replacement-img sf-menu-icon sf-menu-icon-dashboard" data-alt-src="https://cloud.neiros.ru/img/menu/dashboard2.svg" src="https://cloud.neiros.ru/img/menu/dashboard.svg"  alt="">
            <span>Дашборд</span></a></li>
            
            <li class="sf-main-menu sf-main-menu-sdelki">
            <a href="/projects" class="rf-menu-link"><img class="replacement-img sf-menu-icon sf-menu-icon-sdelki" data-alt-src="https://cloud.neiros.ru/img/menu/sdelki2.svg" src="https://cloud.neiros.ru/img/menu/sdelki.svg" alt="">
            <span>Сделки{!! $globalsetting->getNewProject()!!}
            </span></a></li>

         <li class="sf-main-menu sf-main-menu-calltracking  sf-main-menu-has-sub sf-main-menu-has-sub-up"> 
         <a class="sf-submenu-link rf-menu-link" href="/calltracking/statistic" >
            <img class="replacement-img sf-menu-icon sf-menu-icon-calltraking" data-alt-src="https://cloud.neiros.ru/img/menu/calltracking2.svg" src="https://cloud.neiros.ru/img/menu/calltracking.svg" alt="">
              <span>
                <div class="sf-submenu">
                       <div class="sf-submenu-title">Коллтрекинг</div>
                </div>
             </span></a> 
             
              <div class="sf-submenu-items ">
                       		<a href="/calltracking/statistic"  class=" actv-stat actv-not-link">
                            <img class="replacement-img"  data-alt-src="https://cloud.neiros.ru/img/menu/c-statistic2.svg" src="https://cloud.neiros.ru/img/menu/c-statistic.svg" alt=""><span><label>Статистика</label></span></a>
                            <a href="/calltracking/numbers"  class=" actv-number actv-not-link">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/c-number2.svg" src="https://cloud.neiros.ru/img/menu/c-number.svg" alt=""><span><label>Номера</label></span></a> 
                            <a href="/calltracking/routing"  class=" actv-scenarii actv-not-link">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/c-arhitect2.svg" src="https://cloud.neiros.ru/img/menu/c-arhitect.svg" alt=""><span><label> Сценарии</label></span></a> 
                            <a href="/calltracking/recording"  class="actv-zhornal actv-not-link" >
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/c-contact2.svg" src="https://cloud.neiros.ru/img/menu/c-contact.svg" alt=""><span> <label>Журнал <br>звонков</label></span></a> 
                            <a class="item-widget1 actv-setting-call " data-name="Настройка коллтрекинга" data-id="calltrack_setting_ajax" >
                            <img class="replacement-img" src="https://cloud.neiros.ru/img/menu/c-setting.svg" data-alt-src="https://cloud.neiros.ru/img/menu/c-setting2.svg" alt=""><span><label> Настройки</label></span></a>         
               </div>
             
             </li> 


            {{--Коллтрекинг--}}

 


            {{--Аналитика--}}

           
            <li class="sf-main-menu sf-main-menu-analitika sf-main-menu-has-sub sf-main-menu-has-sub-up"> 
            <a class="sf-submenu-link rf-menu-link" href="/reports" >
            <img class="replacement-img sf-menu-icon sf-menu-icon-analytics" data-alt-src="https://cloud.neiros.ru/img/menu/analitika2.svg" src="https://cloud.neiros.ru/img/menu/analitika.svg" alt="">
              <span>
                <div class="sf-submenu">
                       <div class="sf-submenu-title">Аналитика</div>
                </div>
             </span></a> 
             
              <div class="sf-submenu-items">
                       		<a href="/reports" class=" allreports-actv actv-not-link">
                            <img class="replacement-img"  data-alt-src="https://cloud.neiros.ru/img/menu/a-report2.svg" src="https://cloud.neiros.ru/img/menu/a-report.svg" alt=""><span><label>Сводный <br>
отчет</label></span></a>
                            <a class="item-widget1  allreports_setting-actv " data-name="Настройка Событий" data-id="allreports_setting" >
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/a-event2.svg" src="https://cloud.neiros.ru/img/menu/a-event.svg" alt=""><span><label>События</label></span></a> 
                            <a class="item-widget1  advertisingchannel-actv " data-name="Настройка Рекламных каналов" data-id="advertisingchannel">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/a-channel2.svg" src="https://cloud.neiros.ru/img/menu/a-channel.svg" alt=""><span><label> Рекламные <br>каналы</label></span></a> 
                            <a class="item-widget1  allreports_setting-actv-promocodes "  data-name="Настройка Промокодов" data-id="100001" >
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/a-promocode2.svg" src="https://cloud.neiros.ru/img/menu/a-promocode.svg" alt=""><span><label>Промокоды</label></span></a> 
                            <a class="item-widget1  " data-name="Настройка Расходов" data-id="advertisingchannelcost" >
                            <img class="replacement-img" src="https://cloud.neiros.ru/img/menu/a-expenses.svg" data-alt-src="https://cloud.neiros.ru/img/menu/a-expenses2.svg" alt=""><span> <label>Расходы</label></span></a>         
               </div>
             
             </li>   
           
           
           
           
            {{--Коммуникации--}}
            <?php /*?><li>
                <a href="/widgets"><i class="fa fa-cube" aria-hidden="true"></i><span><b>Виджеты</b></span></a>

            </li>
            <li class="hidden-fo-fixed hidden-fo-fixed-2">
                <a href="/dialogs"><i class="fa fa-commenting-o" aria-hidden="true"></i><span id="count_ness"><b class="sdelki">Диалоги{!! $globalsetting->getNewChat()!!}</b></span></a>

            </li><?php */?>
            
            
           <li class="sf-main-menu sf-main-menu-vidjets sf-main-menu-has-sub sf-main-menu-has-sub-up">
            <a class="sf-submenu-link rf-menu-link" href="/widgets" >
            <img class="replacement-img sf-menu-icon sf-menu-icon-vidjets" data-alt-src="https://cloud.neiros.ru/img/menu/vidgets2.svg" src="https://cloud.neiros.ru/img/menu/vidgets.svg" alt="">
              <span>
                 <div class="sf-submenu">
                       <div class="sf-submenu-title">Виджеты</div>
                </div>
             </span></a> 
             
             <div class="sf-submenu-items sf-submenu-items-g">
                       		<a class="v-chat item-widget col-smt actv-not-link" data-id="26"  >
                             <div class="col-smt-img">
                            <img class="replacement-img " data-alt-src="https://cloud.neiros.ru/img/menu/v-chat.png" src="https://cloud.neiros.ru/img/menu/v-chat.png" alt=""> 
                             </div>
                            <span><label>Чат</label></span></a>
                            
                            <a class="v-catcher item-widget col-smt actv-not-link" data-id="19" >
                            <div class="col-smt-img">
                            <img class="replacement-img " data-alt-src="https://cloud.neiros.ru/img/menu/v-catcher.png"  src="https://cloud.neiros.ru/img/menu/v-catcher.png" alt="">
                            </div>
                            <span><label>Ловец лидов</label></span></a> 
                            
                            <a class="v-callback item-widget col-smt actv-not-link" data-id="1" >
                            <div class="col-smt-img">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/v-callback.png"   src="https://cloud.neiros.ru/img/menu/v-callback.png" alt="">
                            </div>
                            <span><label>Коллбек</label></span></a> 
                            
                            <a class="v-button item-widget col-smt actv-not-link" data-id="23"  >
                            <div class="col-smt-img">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/v-button.png"  src="https://cloud.neiros.ru/img/menu/v-button.png" alt="">
                            </div>
                            <span><label>Кнопки</label></span></a> 
                            
                            
                            <a class="v-map item-widget col-smt actv-not-link" data-id="24"  >
                            <div class="col-smt-img">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/v-map.png" src="https://cloud.neiros.ru/img/menu/v-map.png"  alt="">
                            </div>
                            <span><label>Карта</label></span></a> 
                            
                            <a class="v-form item-widget col-smt actv-not-link" data-id="25"  >
                            <div class="col-smt-img">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/v-form.png"  src="https://cloud.neiros.ru/img/menu/v-form.png" alt="">
                            </div>
                            <span><label>Форма заявки</label></span></a> 
                             
                            <a class="v-kviz item-widget col-smt actv-not-link" data-id="22222"  >
                            <div class="col-smt-img">
                            <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/v-kviz.png" src="https://cloud.neiros.ru/img/menu/v-kviz.png"  alt="">
                            </div>
                            <span><label>Квиз</label></span></a>           
               </div>
            
             </li>  

           
           <li class="sf-main-menu sf-main-menu-dialog">
           <a href="/dialogs" class="rf-menu-link">
           <img class="replacement-img sf-menu-icon sf-menu-icon-dialog" data-alt-src="https://cloud.neiros.ru/img/menu/dialogi2.svg" src="https://cloud.neiros.ru/img/menu/dialogi.svg" alt="">
            <span>Диалоги{!! $globalsetting->getNewChat()!!}
            </span></a>
          </li>
          
          
            
            
            
            
            {{--Интеграции--}}

          <?php /*?>  <li class="hidden-fo-fixed hidden-fo-fixed-1">
                <a href="/mail"><i class="fa fa-envelope-o" aria-hidden="true"></i><span><b>E-mail Трекинг</b></span></a>

            </li><?php */?>
            
          <li class="sf-main-menu sf-main-menu-mail">
          <a href="/mail" class="rf-menu-link">
          <img class="replacement-img sf-menu-icon sf-menu-icon-dialog" data-alt-src="https://cloud.neiros.ru/img/menu/email2.svg" src="https://cloud.neiros.ru/img/menu/email.svg" alt="">
            <span>E-mail Трекинг
            </span></a>
          </li>
            
            
            <li class="sf-main-menu sf-insert-hidden-widget sf-main-menu-has-sub sf-main-menu-has-sub-up">
           
            <a class="sf-submenu-link">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>
            <i class="fa fa-circle" aria-hidden="true"></i>   
                <span>
                <div class="sf-submenu">
                       <div class="sf-submenu-title">Дополнительно</div>
                </div>
                </span></a>
             
             <div class="sf-submenu-items sf-submenu-items-g">
                       		
                            <a class="v-dialog-e col-smt rf-menu-link-insub" href="/dialogs"  >
                           <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/dialogi2.svg" src="https://cloud.neiros.ru/img/menu/dialogi.svg" alt="">
                            <span><label>Диалоги</label></span>
                            </a>
                            
                            <a class="v-mail-e  col-smt rf-menu-link rf-menu-link-insub" href="/mail"  >
                           <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/email2.svg" src="https://cloud.neiros.ru/img/menu/email.svg" alt="">
                            <span><label>E-mail Трекинг</label></span>
                            </a>
                          
                          <a class="v-vidget-e col-smt rf-menu-link rf-menu-link-insub" href="/mail"  >
                           <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/vidgets2.svg" src="https://cloud.neiros.ru/img/menu/vidgets.svg" alt="">
                            <span><label>Виджеты</label></span>
                          </a>
                          
                          <a class="v-analitika-e  col-smt rf-menu-link rf-menu-link-insub" href="/mail"  >
                           <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/analitika2.svg" src="https://cloud.neiros.ru/img/menu/analitika.svg">
                            <span><label>Аналитика</label></span>
                          </a>              
            </div>
            
            </li>
            
            

			<?php /*?><li class="insert-hidden-widget" style="display:none">
           
            <a ><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i><span><b></b></span></a>
            </li>
            <hr>
            <li>
                <a href="/integration"><i class="fa fa-plug" aria-hidden="true"></i><span><b>Интеграции</b></span></a>

            </li>


            {{--<li><a href="/widget"><i class="icon-home4"></i><span><b>Виджеты</b></span></a></li>--}}<?php */?>
            
<?php /*?>            
            
            <li><a href="/setting/advertisingchannel"><i class="icon-home4"></i><span><b>Рекламные каналы</b></span></a></li><?php */?>

            @if(Auth::user()->role==0)
             <?php /*?> <li> <a class="sidebar-secondary-hide sidebar-secondary-hide-setings" data-settings="settings" ><i class="fa fa-cogs" aria-hidden="true"></i><span><b>Настройки</b></span></a><?php */?>
                    <?php /*?><ul>
                        <li><a href="/setting/paycompanys">Платежные профили</a></li>
                        <li><a href="/setting/checkcompanys">Счета на оплату</a></li>
                        <li><a href="/setting/billing/phones">Стоимость номеров</a></li>
                        <li><a href="/setting/billing/recs">Стоимость разговоров</a></li>


                        <li><a href="/setting/clientfield">Доп поля контактов</a></li>
                        <li><a href="/setting/companyfield">Доп поля компаний</a></li>
                        <li><a href="/setting/users">Пользователи</a></li>
                        <li><a href="/setting/sites">Сайты</a></li>

                    </ul><?php */?>
               <?php /*?> </li><?php */?>
            @endif
            @if(Auth::user()->super_admin==1)
                <li>


                <li><a href="/setting/adminclient"><i class="icon-home4"></i><span><b>Администрирование</b></span></a></li>



            @endif
            
            <li class="separator-s"></li>
            
             <li class="sf-main-menu sf-main-menu-integraciya">
             <a href="/integration" class="rf-menu-link"><img class="replacement-img sf-menu-icon sf-menu-icon-integraciya" data-alt-src="https://cloud.neiros.ru/img/menu/integration2.svg" src="https://cloud.neiros.ru/img/menu/integration.svg"  alt="">
            <span>Интеграции</span></a>
            </li>
                 
			
            
            <li class="sf-main-menu sf-submenu-setting sf-main-menu-has-sub sf-main-menu-has-sub-down"> 
            <a class="sf-submenu-link" >
            <img class="replacement-img sf-menu-icon sf-menu-icon-nastroiki.svg" data-alt-src="https://cloud.neiros.ru/img/menu/nastroiki2.svg" src="https://cloud.neiros.ru/img/menu/nastroiki.svg" alt="">
              <span>
                <div class="sf-submenu">
                       <div class="sf-submenu-title">Настройки</div>
                </div>
             </span></a> 
             
              <div class="sf-submenu-items ">
    <a  href="/setting/billing_all" class=" billing_all-actv">
    <img class="replacement-img"  data-alt-src="https://cloud.neiros.ru/img/menu/s-billing2.svg" src="https://cloud.neiros.ru/img/menu/s-billing.svg" alt=""><span><label>Биллинг</label></span></a>
    <a href="/setting/users" class=" users-actv" >
    <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/s-user2.svg" src="https://cloud.neiros.ru/img/menu/s-user.svg" alt=""><span><label>Пользователи</label></span></a> 
    <a href="/setting/sites" class=" sites-actv">
    <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/s-site2.svg" src="https://cloud.neiros.ru/img/menu/s-site.svg" alt=""><span> <label>Сайты</label></span></a> 
    <a  href="#" class="item-widget1  sms-actv " data-name="Смс отчеты" data-id="setting_smsreports">
    <img class="replacement-img" data-alt-src="https://cloud.neiros.ru/img/menu/s-sms2.svg" src="https://cloud.neiros.ru/img/menu/s-sms.svg" alt=""><span><label> Sms отчеты</label></span></a> 
    <a href="#" class="item-widget1  partners-actv " data-name="Партнерская программа" data-id="setting_partners" >
    <img class="replacement-img" src="https://cloud.neiros.ru/img/menu/s-partner.svg" data-alt-src="https://cloud.neiros.ru/img/menu/s-partner2.svg" alt=""><span><label>Партнерская<br> программа</label></span></a>         
               </div>
             
             </li> 
            
           <li class="sf-main-menu hidden-xs sidebar-control sidebar-main-toggle sidebar-main-toggle-menu"><a href=""><img class="replacement-img sf-menu-icon sf-menu-icon-arrow hidden-xs"  src="https://cloud.neiros.ru/img/menu/left-arrow.svg"  alt="">
            <span>Развернуть</span></a>
            </li>

       <?php /*?>         <li class=" hidden-xs sidebar-control sidebar-main-toggle sidebar-main-toggle-menu" ><a href="#"><i class="fa fa-angle-right  hidden-xs" > </i><span><b>Свернуть</b></span></a>
                </li><?php */?>
        </ul>
    </div>
    </div>
    
   

<script>

$('.sidebar-control.sidebar-main-toggle').click(function(e){
var bod_class = $("body").attr("class");
var sermystr = bod_class.indexOf("sidebar-xs");
if(sermystr == -1){
	localStorage.setItem("menu", 'sidebar-xs');
	console.log('-1')
	$("body").removeClass('sidebar-width');
	 $(".sidebar-main-toggle-menu a span:contains('Свернуть')").html("Развернуть");
	}
 else {
	 console.log('1')
	 localStorage.setItem("menu", '');
	 $("body").addClass('sidebar-width');
	 $(".sidebar-main-toggle-menu a span:contains('Развернуть')").html("Свернуть");
	 }
});

var mystr = localStorage.getItem("menu");
if (mystr == null){}
else{
var serch_class = mystr.indexOf("sidebar-xs");
if(serch_class == -1){
	$("body").removeClass('sidebar-xs');
	$("body").addClass('sidebar-width');
	
	
	}
else {
$("body").addClass('sidebar-xs');
$("body").removeClass('sidebar-width');



}
}






/*    var url=document.location.href;
	arr = url.split('https://cloud.neiros.ru');
	check_url = 0;
	if(arr[1] === '/setting/paycompanys' || arr[1] === '/setting/checkcompanys' || arr[1] === '/setting/billing/phones' || arr[1] === '/setting/billing/recs' || arr[1] === '/setting/clientfield' || arr[1] === '/setting/companyfield'  || arr[1] === '/setting/users'  || arr[1] === '/setting/sites'){
	
		$('body').removeClass('sidebar-secondary-hidden');
		function explode(){
			$('.settings').css('display','block');
		}
		setTimeout(explode, 100)
	
		check_url = 1;
		}

						
	if(arr[1] === '/calltracking'){
			$('body').removeClass('sidebar-secondary-hidden');
		function explode(){
			$('.colltrecing').css('display','block');
		}
		setTimeout(explode, 100)
		
		}					
		if(arr[1] === '/allreports'){
			$('body').removeClass('sidebar-secondary-hidden');
		function explode(){
			$('.analytics').css('display','block');
		}
		setTimeout(explode, 100)
		
		}						
			*/			
						
	
	
/*    $.each($('.navigation.navigation-main  li'),function(){

	if(check_url === 1){
		if($(this).find('a').hasClass("sidebar-secondary-hide-setings")){
			$(this).addClass('active');
			
			}
		
		
		}

	if(arr[1] == ''){
	if($(this).find('a').attr('href')==url){
		$(this).addClass('active');
		};	
	}
	else {
		if (typeof $(this).find('a').attr('href') === "undefined") {}
		else{
		var str1 = $(this).find('a').attr('href').indexOf(arr[1]);	
	
	
    if($(this).find('a').attr('href') == arr[1]){
		$(this).addClass('active')}}}

    });*/
	
/*function resize_sidebar(){
	
height_menu = $(".sidebar-xs .sidebar-fixed .sidebar-category-visible").height();	
sidebar_content = $(".sidebar-xs .sidebar-fixed .sidebar-content").height();
console.log(height_menu);	
console.log(sidebar_content);
if(sidebar_content < height_menu){
	razh = height_menu - sidebar_content;

	menu = '';	
	
	if (razh > 0 && razh <= 49){
		selector_menu = '.hidden-fo-fixed-6';
		
		} 
	if (razh > 49 && razh <= 98){
		selector_menu = '.hidden-fo-fixed-5, .hidden-fo-fixed-6';
		}
	if (razh > 98 && razh <= 119){
	selector_menu = '.hidden-fo-fixed-4, .hidden-fo-fixed-5, .hidden-fo-fixed-6';
		} 
	if (razh > 119 && razh <= 196){
		selector_menu = '.hidden-fo-fixed-3, .hidden-fo-fixed-4, .hidden-fo-fixed-5, .hidden-fo-fixed-6';
		} 	
     if (razh > 147 && razh <= 213){
		selector_menu = '.hidden-fo-fixed-2, .hidden-fo-fixed-3, .hidden-fo-fixed-4, .hidden-fo-fixed-5, .hidden-fo-fixed-6';
		} 
	 if (razh > 213){
		selector_menu = '.hidden-fo-fixed';
		} 					 	
	
	
	  
	
	
	
	
    ModalArray=$(selector_menu);
	$(selector_menu).css('display','none');

			ModalArray.each(function(){
				menu = menu+""+$(this).html()+"";
		});	
	$('.sidebar-main-toggle-menu b').html('Развернуть');	
    $('.insert-hidden-widget a span').html(menu)
	$('.insert-hidden-widget').css('display','block');
	}
	else{
		$('.hidden-fo-fixed').css('display','block');
		$('.insert-hidden-widget').css('display','none');
		$('.sidebar-main-toggle-menu b').html('Свернуть');	
		$('.sidebar-category.sidebar-category-visible').scrollTop(0);
		$('.sidebar-fixed .sidebar-content').scrollTop(0);
		}
	
	}	*/
	
/*resize_sidebar()*/

/*$('.sidebar-main-toggle').on('click', function(){

	setTimeout(resize_sidebar, 10);
	
	})	*/



$(".menu-sidebar .sf-submenu-items a").mouseover(function (e) { 
 if (!$(this).hasClass( "rf-menu-link-submenu-link")){
   var img = $(this).find('img');
    img.attr("src", img.attr("src").replace(".svg", "2.svg"));	
 }
}).mouseout(function (e) { 
 if (!$(this).hasClass( "rf-menu-link-submenu-link")){
	 var img2 = $(this).find('img');
    img2.attr("src", img2.attr("src").replace("2.svg", ".svg"));
 }
});



$(".sf-main-menu").mouseover(function (e) { 
 if (!$(this).hasClass( "active-menu-url")){
   var img = $(this).find('.sf-menu-icon');
    img.attr("src", img.attr("src").replace(".svg", "2.svg"));
 }
}).mouseout(function (e) { 
 if (!$(this).hasClass( "active-menu-url")){
	 var img2 = $(this).find('.sf-menu-icon');
    img2.attr("src", img2.attr("src").replace("2.svg", ".svg"));
 }
});


















$( document ).ready(function() {
 $('.sidebar-main-toggle-menu a').click(function(){
    $(".sf-main-menu-has-sub.active-sf").removeClass('active-sf');
 });
});



$('.sf-main-menu-has-sub-up .sf-submenu-link').click(function(e) {
	
	if ($(".sidebar-secondary-hidden").hasClass("sidebar-width")) {
	e.preventDefault();
		if (!$(this).parent().hasClass( "active-sf" )){
			$(".sidebar-width .sf-main-menu-has-sub").removeClass('active-sf');
			$(this).parent().addClass('active-sf');
			$(".sidebar-width .sf-main-menu-has-sub").parent().removeClass('active-scrl');
			$(this).parent().parent().addClass('active-scrl');
			$(".sidebar-width .sf-main-menu-has-sub").parent().parent().removeClass('open-submenu-category');
			$(this).parent().parent().parent().addClass('open-submenu-category');
		}
		else {
			$(".sidebar-width .sf-main-menu-has-sub").removeClass('active-sf');
			$(".sidebar-width .sf-main-menu-has-sub").parent().removeClass('active-scrl');
			$(".sidebar-width .sf-main-menu-has-sub").parent().parent().removeClass('open-submenu-category');
		  
		}
	}		
});


$('.sf-main-menu-has-sub-down .sf-submenu-link').click(function(e) {
	if ($(".sidebar-secondary-hidden").hasClass("sidebar-width")) {
	e.preventDefault();
		if (!$(this).parent().hasClass( "active-sf" )){
			$(".sidebar-width .sf-main-menu-has-sub").removeClass('active-sf');
			$(this).parent().addClass('active-sf');
			$(".sidebar-width .sf-main-menu-has-sub").parent().removeClass('active-scrl active-scrl-down');
			$(this).parent().parent().addClass('active-scrl active-scrl-down');
			$(".sidebar-width .sf-main-menu-has-sub").parent().parent().removeClass('open-submenu-category');
			$(this).parent().parent().parent().addClass('open-submenu-category');
		}
		else {
			$(".sidebar-width .sf-main-menu-has-sub").removeClass('active-sf');
			$(".sidebar-width .sf-main-menu-has-sub").parent().removeClass('active-scrl active-scrl-down');
			$(".sidebar-width .sf-main-menu-has-sub").parent().parent().removeClass('open-submenu-category');
		  
		}
	}		
});







$(function(){
    $(window).resize(function() {
          resize_height = $(window).height();
		  console.log("resize " + resize_height)
		  if (resize_height < 680 && resize_height >= 610){
			$(".has-detached-left .menu-sidebar .navigation li.sf-insert-hidden-widget").css('display','block');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-mail").css('display','none');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-dialog").css('display','none');
	       }
		   
		    if (resize_height < 610 && resize_height >= 570){
		    $(".has-detached-left .menu-sidebar .navigation li.sf-insert-hidden-widget").css('display','block');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-mail").css('display','none');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-dialog").css('display','none');
			$(".sf-main-menu-vidjets").css('display','none');
			$(".has-detached-left .menu-sidebar .v-vidget-e").css('display','block');
	       }
		    
		 if (resize_height < 570 && resize_height >= 510){
		    $(".has-detached-left .menu-sidebar .navigation li.sf-insert-hidden-widget").css('display','block');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-mail").css('display','none');
			$(".has-detached-left .menu-sidebar .navigation li.sf-main-menu-dialog").css('display','none');
			$(".sf-main-menu-vidjets").css('display','none');
			$(".has-detached-left .menu-sidebar .v-vidget-e").css('display','block');
			$(".sf-main-menu-analitika").css('display','none');
			$(".has-detached-left .menu-sidebar .v-analitika-e").css('display','block');
	       }
		  
		 
    })
})
 
$( document ).ready(function() {

 var url=document.location.href;
	arr = url.split('https://cloud.neiros.ru');
	check_url = 0;
	console.log("attr=="+arr[1]);
	if(arr[1] === '/' || arr[1] == '' || arr[1] === '/home'){
		$(".sf-main-menu-dashboard").addClass('active-menu-url');
		}
	if(arr[1] === '/projects'){
		$(".sf-main-menu-sdelki").addClass('active-menu-url');
		}
	if(arr[1] === '/calltracking' || arr[1] == '/calltracking/statistic'){
		$(".sidebar-width .navigation").addClass('active-scrl');
		$(".sf-main-menu-calltracking").addClass('active-menu-url');
		$(".sidebar-width .sf-main-menu-calltracking").addClass('active-sf');
		$(".actv-stat").addClass('rf-menu-link-submenu-link');
		$(".sidebar-width .menu-sidebar .navigation li.active-menu-url .rf-menu-link").css("background","transparent");
		}
		
	if(arr[1] === '/calltracking/numbers'){
		$(".sidebar-width .navigation").addClass('active-scrl');
		$(".sf-main-menu-calltracking").addClass('active-menu-url');
		$(".sidebar-width .sf-main-menu-calltracking").addClass('active-sf');
		$(".actv-number").addClass('rf-menu-link-submenu-link');
		$(".sidebar-width .menu-sidebar .navigation li.active-menu-url .rf-menu-link").css("background","transparent")
		}
		
	if(arr[1] === '/calltracking/routing'){
		$(".sidebar-width .navigation").addClass('active-scrl');
		$(".sf-main-menu-calltracking").addClass('active-menu-url');
		$(".sidebar-width .sf-main-menu-calltracking").addClass('active-sf');
		$(".actv-scenarii").addClass('rf-menu-link-submenu-link');
		$(".sidebar-width .menu-sidebar .navigation li.active-menu-url .rf-menu-link").css("background","transparent")
		}
		
	if(arr[1] === '/calltracking/recording'){
		$(".sidebar-width .navigation").addClass('active-scrl');
		$(".sf-main-menu-calltracking").addClass('active-menu-url');
		$(".sidebar-width .sf-main-menu-calltracking").addClass('active-sf');
		$(".actv-zhornal").addClass('rf-menu-link-submenu-link');
		$(".sidebar-width .menu-sidebar .navigation li.active-menu-url .rf-menu-link").css("background","transparent")
		}			
		
		
		
		
	if(arr[1] === '/reports'){
		$(".sidebar-width .navigation").addClass('active-scrl');
		$(".sf-main-menu-analitika").addClass('active-menu-url');
		$(".sidebar-width .sf-main-menu-analitika").addClass('active-sf');
		$(".allreports-actv").addClass('rf-menu-link-submenu-link');
		$(".sidebar-width .menu-sidebar .navigation li.active-menu-url .rf-menu-link").css("background","transparent")
		}
	if(arr[1] === '/widgets'){
		$(".sf-main-menu-vidjets").addClass('active-menu-url ');
		}
	if(arr[1] === '/dialogs'){
		$(".sf-main-menu-dialog").addClass('active-menu-url ');
		}
	if(arr[1] === '/mail'){
		$(".sf-main-menu-mail").addClass('active-menu-url ');
		}
	if(arr[1] === '/integration'){
		$(".sf-main-menu-integraciya").addClass('active-menu-url');
		}
	
	if(arr[1] === '/setting/billing_all'){
		$(".sidebar-width .navigation").addClass('active-scrl active-scrl-down');
		$(".sf-submenu-setting").addClass('active-menu-url');
		$(".sidebar-width .sf-submenu-setting").addClass('active-sf');
		$(".billing_all-actv").addClass('rf-menu-link-submenu-link');
		}
	
	if(arr[1] === '/setting/users'){
		$(".sidebar-width .navigation").addClass('active-scrl active-scrl-down');
		$(".sf-submenu-setting").addClass('active-menu-url');
		$(".sidebar-width .sf-submenu-setting").addClass('active-sf');
		$(".users-actv").addClass('rf-menu-link-submenu-link');
		}
		
		if(arr[1] === '/setting/sites'){
		$(".sidebar-width .navigation").addClass('active-scrl active-scrl-down ');	
		$(".sf-submenu-setting").addClass('active-menu-url');
		$(".sidebar-width .sf-submenu-setting").addClass('active-sf');
		$(".sites-actv").addClass('rf-menu-link-submenu-link');
		}
		 									
})
	

$( document ).ready(function() {	
$('.active-menu-url .rf-menu-link').click(function(e) {
    e.stopPropagation();
    e.preventDefault();
});	
});		


$( document ).ready(function() {	
$('.active-menu-url .rf-menu-link-submenu-link').click(function(e) {
    e.stopPropagation();
    e.preventDefault();
	$(this).css("background","transparent")
});	
});	



$( document ).ready(function() {	
$('.actv-not-link').click(function() {
$(".sf-submenu-items a").removeClass('rf-menu-link-submenu-link');
$(this).addClass('rf-menu-link-submenu-link')

if ($(this).hasClass( "rf-menu-link-submenu-link")){
	 var img2 = $(this).find('img');
    img2.attr("src", img2.attr("src").replace("2.svg", ".svg"));
 }


})	
})















		  
</script>

		
		
	
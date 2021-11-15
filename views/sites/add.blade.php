@extends('app')
@section('title')
    Виджеты

@endsection
@section('content')
    <style>
        .coltrack{
            display: none;
        }

    </style>




    <!-- Fieldset legend -->
    <div class="row row-st">



        <div class="panel panel-white panel-white-st">
        
     	 <div class="registration-preloader preloader-calltrecing" style=" display: block;" >
                                   <div class="theme_tail_circle">
                                   <div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
                                   <div class="pace_activity"></div>
                                     </div>
         </div>
         
         <script>
			window.setTimeout(function() {
			$(".registration-preloader").css('display','none');
			}, 2000);

		 </script>
        
       
@if(auth()->user()->sms_code>0)

                @if(session()->has('message'))

                    <div style="color: red;text-align: center">Неверный код подтверждения</div>
                @endif

                <form class="stepy-basic" action="/setting/sites/create" method="post">
                    <fieldset title="" style="margin-bottom: 50px">
                        <legend class="text-semibold">Подтвердите номер телефона</legend>

                        <div class="row">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />


                            <div class="col-md-12 mt-15">


                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Код из sms:</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="sms_code" id="name"   required>
                                    </div>
                                </div>
                            </div>






                        </div>



                        <center> <button type="submit" class="btn btn-primary  " style="margin-top: 15px">Подтвердить <i class="icon-check position-right"></i></button></center>

                    </fieldset>








                </form>


@else
            <div class="stepy-basic" action="/">
              
              
              
              
                      <fieldset title="1" class="two-set">
                                <legend class="text-semibold">Настройки проекта</legend>

                                <div class="row row-step2">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <input name="site_id" type="hidden"  id="site_id" value="0" />



                                    <div class="col-xs-12 col-sm-6 add-progect-step2-datails">
                                        <div class="add-progect-step2-title">
                                            <h2>Настройки проекта</h2>
                                            <p>Чтобы создать проект, нужно дать ему название.<br>
                                                Это может быть название вашего сайта или бизнеса.</p>
                                        </div>




                                        <div class="cont-form col-md-12">
                                            <input type="text" class="form-control input-step-settings" placeholder=" " name="name" id="name"   required>
                                            <label for ="name">Название проекта</label>
                                            <div class="er-messages-name">Заполните название проекта</div>
                                        </div>
										
                                        <input name="protokol" type="hidden"  id="protokol" value="https" />

                                        <div class="cont-form col-md-12">
                                            <input placeholder=" " type="text" class="form-control input-step-settings" name="url" id="url"   required>
                                            <label for ="url" >Сайт</label>
                                            <div class="er-messages-url">Заполните адрес сайта</div>
                                        </div>
                                        
                                        <div class="er-messages"></div>
                                        
                                    </div>

                                    <div class="col-xs-12 col-sm-6 add-progect-step2-img">
                                        <img src="https://cloud.neiros.ru/images/step2-img.png" alt="">
                                    </div>
                                    
                                    
                                     <div class="check-click-next check-click-transparent"></div>
                                    
                                    
                                    
                                 <style>
									.row-step1{ 
										position:relative;
										}
										
									.row-step2{
										position:relative;
										}	
										
									.check-click-transparent{
										width:140px;
										height:55px;
										position:absolute;
										display:block;
										bottom:-45px;
										right:0px;
										z-index:999;
										background:#fff;
										cursor:pointer;
										}	
										
										.two-set .check-click-transparent{
											width: 100px;
											height: 38px;
											position: absolute;
											display: block;
											bottom: -39px;
											background:transparent;
											z-index:999;
											right: 10px;
											
										}
										
									.button-back{
										margin-right:20px;										
										}
									
									
									.panel-white-st .cont-form input.error-s,  .panel-white-st .cont-form input.error-s:focus,
									.panel-white-st .cont-form input.error-s:active  {
                                         border: 1px solid #E91C1F !important;
                                          }
									
									.cont-form-mail .btnEmailCodeSend{
										background:#c8cad2;
										}
									
									
									.panel-white-st .stepy-header li.stepy-active:last-child div:after {
										padding-left: 1px;
										}
									
									.panel-white-st .stepy-header li div:after {
										padding-left: 6px;
										}
									
									.btn.btn-primary.stepy-finish i{
										display:none;
										}
									
									
									.er-messages{
                                            color: #ff0000;
											display: inline-block;
											position: relative;
											top: -19px;	
											font-size: 13px;
                                            line-height: 1.5384616;
									}
									
									
									.er-messages-name{
										    display:none;
                                            color: #ff0000;
											position: absolute;	
											font-size: 13px;
                                            line-height: 1.5384616;
											
									}
									
									.er-messages-url{
										    display:none;
                                            color: #ff0000;
											position: absolute;	
											font-size: 13px;
                                            line-height: 1.5384616;
									}
									
									
									
									.success-messages{
									        color: #000;
											display: inline-block;
											position: relative;
											font-size: 13px;
                                            line-height: 1.5384616;
									}
									
									
									
									#preloader-mail{
										font-family: 'icomoon';
										animation: fa-spin 1s infinite linear !important;
                                        position: relative !important;
                                        left: -5px !important;
										}
									
									.fa-spinner:before {
                                      content: "\eb51";
									  color:#fff !important;
									}
									
								.panel-white-st{
									position:relative;
																	
									}	
									
								.registration-preloader	{
										position: absolute;
										width: 100%;
										height: 100%;
										background: #fff;
										z-index: 100;
										padding-top: 200px;
										border-radius: 10px;
									}
									
									.cont-form-mail .btnEmailCodeSend{
										    pointer-events: visible;
										}
									
									.btnEmailCodeSend.click-on{
										 pointer-events: none;
										}
									
									</style>
                                    
                                    
                                    
                                    
                                </div>
                            </fieldset>

                      <fieldset title="2" class="secondd third-set">
                    <legend class="text-semibold">Ваш код</legend>

                    <div class="row row-step3">
                        
                    <div class="add-progect-step3-title">
                    <h2>Код счётчика</h2>
                    <p>Счётчик нужен для корректной работы аналитики Neiros. После встраивания кода счётчика на сайт вы можете проверить его
                    работу, введя название сайта в поле «Проверка счётчика».</p>


                    <h2>Инструкция по установке</h2>
                    <p>Установить код счётчика необходимо внутри тега &lt;body&gt;&lt;/body&gt; в НТМL - коде страницы. Для корректного подсчёта статистики
                    установите код счётчика на все страницы сайта. Просто скопируйте эту инструкцию и отдайте вашему разработчику</p>
                    </div>
                        
                   <div class="yourCodeBlock">
                            <button class="btn-copy" data-clipboard-target="#hash"> Копировать</button>
                            <textarea class="javascriptCode" name="hash" id="hash" readonly>                                        
                            </textarea>
                  </div>
                   
                   <div class="code-instal">
                        <div class="code-send-mail col-xs-12 col-sm-7">
                        <label class="label-sendMail">Отправить код на почту</label>
                           <div class="cont-form col-md-12 cont-form-mail">

                                <input type="email" class="form-control" placeholder=" " name="name" id="emailCodeSend"  >
                                <label for ="emailCodeSend">Введите email</label>
                                <button class="btn btn-primary btnEmailCodeSend click-on" >
                                <img src="https://cloud.neiros.ru/images/send.svg" alt="">
                                <i id="preloader-mail" style="display: none;" class="fa fa-spinner fa-spin  fa-fw"></i>
                                </button>
                                <div class="success-messages"></div>                              
                            </div>
                        </div>
    
                        <div class="code-check col-xs-12 col-sm-5">
                                <div class="code-check-main">
                                    <label class="no-connection-sl"> <img src="https://cloud.neiros.ru/images/error.svg" alt=""> Нет подключения</label>
                                    <label class="connected-correctly-sl"> <img src="https://cloud.neiros.ru/images/check.svg" alt=""> Код подключен корректно</label>
                                    <button class="code-check-btn" id="code-check-btn" value="0">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                    <span>  Проверить код на сайте</span>
                                    </button>
                                </div>   
                        </div>
    
    
</div>
                   
                          
                   


                    </div>

                </fieldset>





                <button  class="btn btn-primary stepy-finish">Сохранить <i class="icon-check position-right"></i></button>
            </div>

    @endif
        </div>


















@endsection
        @section('skriptdop')
            <script type="text/javascript" src="/default/assets/js/plugins/forms/wizards/stepy.min.js"></script>
            <script type="text/javascript" src="/default/assets/js/pages/wizard_stepy.js"></script>
            <script type="text/javascript" src="/default/assets/js/pages/clipboard.js"></script>
        <script>
		
		
				
			
		
			
// не показывать title при наведении
$('fieldset').hover(function(e){

    $(this).attr('data-title', $(this).attr('title'));
    $(this).removeAttr('title');
    
},
function(e){

    $(this).attr('title', $(this).attr('data-title'));
    
});





            $(document).on('click','.two-set .check-click-transparent',function (e) {
              name=$('#name').val();
              protokol=$('#protokol').val();
              url=$('#url').val();
              site_id=$('#site_id').val();
			  $('.er-messages-name').css('display', 'none');
              $('.er-messages-url').css('display', 'none');
             err=0;
             mess='';
			
			 $(".er-messages").html("");
             if(name==''){
                 err=1;
              /*   mess='Заполните название проекта';	*/
				 $('#name').addClass('error-s');
				 $('.er-messages-name').css('display', 'inline-block');
				 
              }
             
			 if(url==''){
                    err=1;
                   /* mess='Заполните адрес сайта';*/
					$('#url').addClass('error-s');
					$('.er-messages-url').css('display', 'inline-block');
					
                }

                if(err==1){
					
					
               /*
					 if(url==''){
              
					 $(".er-messages").css("top", "-19px");
					 }
					 
					  if(name==''){
                    
					 $(".er-messages").css("top", "-84px");
					 }
					 
				     $(".er-messages").append(mess);*/
					
					
                }

                if (err==0){
				 
					
                    datatosend = {
                        name: name,
                        protokol: protokol,
                        url: url,
                        site_id: site_id,
                        _token: $('[name=_token]').val(),
                    }
				    
					
                    $.ajax({
                        type: "POST",
                        url: '/createsite',
                        data: datatosend,
						beforeSend: function( ) {
				        $('.two-set .check-click-transparent').addClass('add_scenarij2');
				        $('.two-set .check-click-transparent').addClass('loading'); 
				 },
						
						
                        success: function (html1) {
							
                            if(html1['error']==1){
                               $(".er-messages").append(html1['mess']);
							   $('.two-set .check-click-transparent').removeClass('add_scenarij2');
				               $('.two-set .check-click-transparent').removeClass('loading');
                                return false;
                            }
                            
                          
                            
				
							res=JSON.parse(html1);
                            $('#site_id').val(res['id']);
                            $('#hash').val(res['hash']);
							
							
							
							$('.two-set .button-next').click();
						     window.setTimeout(function() {
							   $('.two-set .check-click-transparent').removeClass('add_scenarij2');
				               $('.two-set .check-click-transparent').removeClass('loading');
                      	    }, 5000);
                        }
                    })
                 	        
                }
				         
return false;
            } );


           
			
	
	
			var copyCode = new Clipboard('.btn-copy');
			
			copyCode.on('success', function(event) {
			event.clearSelection();
			event.trigger.textContent = 'Cкопировано';
			console.log('ок')
			window.setTimeout(function() {
				event.trigger.textContent = 'копировать';
			}, 8300);
			});
			
			copyCode.on('error', function(event) { 
			event.trigger.textContent = 'нажмите "Ctrl + C" чтобы скопировать';
			window.setTimeout(function() {
				event.trigger.textContent = 'копировать';
			}, 5000);
			});




$('#code-check-btn').click(function() {
  $("#code-check-btn").removeClass('code-check-priloader');
  $(this).addClass('code-check-priloader');


    var site_id=$('#site_id').val();

    $.ajax({
        type: "POST",
        url: '/ajax/check_site_code',
        data: {

            site_id:site_id,
        },
        success: function (html1) {

            if (html1 == 1){

                    console.log("ok")
                    $(".connected-correctly-sl").css('display','block');
                    $(".no-connection-sl").css('display','none');
                    $('#code-check-btn').hide();


            } else {

                    $(".no-connection-sl").show();
                    $("#code-check-btn").removeClass('code-check-priloader');
                    $("#code-check-btn span").html('Проверить');
                    $("#code-check-btn").css('display','inline-block');


            }
        }
    })


	
});

	



 






$(".input-step-settings").each(function() {
     $(this).keyup(function() {
		       $('#name').removeClass('error-s');
               $('#url').removeClass('error-s');
                if ($("#name").val().length !==0 && $("#url").val().length !==0) {
                   $(".two-set .button-next").css({background: '#2196f3'});
                   $(".two-set .button-next").css({border: '#2196f3' });
                }  else {
                   $(".two-set .button-next").css({background: '#c8cad2'});
                   $(".two-set .button-next").css({border: '#c8cad2' });
                   }             
            });
   });


	$(".cont-form-mail input").each(function() {
     $(this).keyup(function() {
                if ($(this).val().length !==0) {
                   $(".cont-form-mail .btnEmailCodeSend").css({background: '#2196f3'});
				   $(".cont-form-mail .btnEmailCodeSend").removeClass("click-on");
				   
                }  else {
                   $(".cont-form-mail .btnEmailCodeSend").css({background: '#c8cad2'});
				   $(".cont-form-mail .btnEmailCodeSend").addClass("click-on");
                   }             
            });
   });





	


$(document).on('click','.btnEmailCodeSend',function (){
	$("#preloader-mail").css('display','inline-block');
	$(".cont-form-mail button img").attr('src',"");
  window.setTimeout(function() {
			 	
			
 
  var email=$('#emailCodeSend').val();
  var site_id=$('#site_id').val();
  $(".success-messages").html("");
    $.ajax({
        type: "POST",
        url: '/ajax/send_code_email',
        data: {
            email:email,
            site_id:site_id,
        },
        success: function (html1) {
			$("#preloader-mail").css('display','none');
            $(".success-messages").append('Сообщение отправлено');
			$(".cont-form-mail button img").attr('src',"https://cloud.neiros.ru/images/check-i.svg");
			$("#emailCodeSend").val('');
			window.setTimeout(function() {
			$(".success-messages").html("");
			$(".cont-form-mail button img").attr('src',"https://cloud.neiros.ru/images/send.svg");
			$(".cont-form-mail .btnEmailCodeSend").css({background: '#c8cad2'});
			$(".cont-form-mail .btnEmailCodeSend").addClass("click-on");
			}, 3000);
			
        }
    })
}, 2000);

})


$('.btn-primary.stepy-finish').click(function(){
   window.location.href='/';
})
			
			
			

        </script>





<style>

	.add_scenarij2{
		width: 222px;
    height: 42px;
    position: relative;
		}
		
	.add_scenarij2 .icon-spinner2{font-size: 26px;
    position: relative;
    margin-top: -1px;
    margin-right: auto;
    right: auto;}


@-webkit-keyframes loading-animate {
    0% {
    background-position: 0 450px;
}
to {
    background-position: 0 0;
}
}

@keyframes loading-animate {
    0% {
    background-position: 0 450px;
}
to {
    background-position: 0 0;
}
}

.two-set .check-click-transparent.loading:after {
content: '';
    width: 100%;
    height: 100%;
    z-index: 1064;
    position: absolute;
    background: #0097F5;
    left: 0;
    top: 0;
    border-radius: 3px;
	pointer-events: none;
	}
.two-set .check-click-transparent.loading:before {
    content: "";
    width: 32px;
    height: 15px;
    background: url("https://cloud.neiros.ru/images/loading/loading.png");
    background-size: 32px 450px;
    position: absolute;
    z-index: 1065;
    left: calc(50% - 16px);
    top: calc(50% - 7px);
    -webkit-animation: loading-animate 1.25s steps(30) infinite;
    animation: loading-animate 1.25s steps(30) infinite;
}

</style>


        @endsection

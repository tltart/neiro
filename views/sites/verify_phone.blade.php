<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Registration quiz</title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/css/core.min.css" rel="stylesheet" type="text/css">
    <link href="/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="/css/jquery.floatingscroll.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <link href="/css/floatingscroll-demo.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <!-- Core JS files -->
    <link href="/css/inputmask.css" rel="stylesheet">
    <link href="/css/styles-quiz-new-project.css" rel="stylesheet" type="text/css">
    <link href="/css/styles-quiz-new-project-step1.css" rel="stylesheet" type="text/css">

<!--    $('.stepy-step').find('.button-next').addClass('btn btn-primary');
    $('.stepy-step').find('.button-back').addClass('btn btn-default');-->




    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/jquery.inputmask.js"></script>



    <script src="/js/bootstrap.js"></script>




    <script type="text/javascript" src="/js/stepy.min.js"></script>
    <script type="text/javascript" src="/js/wizard_stepy.js"></script>



</head>

<body class="sidebar-secondary-hidden pace-done has-detached-left sidebar-xs">
<div class="navbar     navbar-static navbar-fixed-top" style="background: white;"></div>
<div class="page-container" style="min-height:379px">
    <div class="page-content" style="height: 100vh;">
        <div class="sidebar sidebar-main  sidebar-fixed"></div>
        <div class="content-wrapper">
            <div class="hidenmodal"></div>
            <div class="content" style="margin-top: 50px !important;">
                <div class="row row-pn row-st">


                    <div class="p-headeranel panel-white panel-white-st">
                    		 
                             <!-- <div class="registration-preloader preloader-calltrecing" style=" display: none;" >
                                   <div class="theme_tail_circle">
                                   <div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
                                   <div class="pace_activity"></div>
                                     </div>
                                </div>-->
                                                     
                        <div class="stepy-basic" action="/setting/sites/create" method="post">
                            <!--      First step begin-->
                            <fieldset title="1" style="margin-bottom: 50px" class="first-set">
                                <legend class="text-semibold">?????????????????????? ?????????? ????????????????</legend>


                                <div class="row row-step1">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />


                                    <td>

                                    </td>

                                    <div class="col-xs-12 col-sm-6 add-progect-step1-datails">
                                        <div class="add-progect-step1-title">
                                            <h2>??????????????????????<br> ??????????????????????</h2>

                                        </div>

                                        <div class="check-reg-st">
                                            <div class="check-code-t check-sms-code ">
                                                <p>???? ?????????????????? SMS c ?????????? ??????????????????????????<br>
                                                    ???? ?????????? <label id="reg-form-number">{{auth()->user()->phone}}</label>. <a id="switch-change-number">???????????????? ??????????</a></p>

                                                <div class="cont-form-check cont-form col-md-12">
                                                    <input type="text" class="checkInputCode phone form-control " placeholder=" " name="sms_code" id="sms_code"   >
                                                    <label for ="sms_code">?????? ???? SMS</label>
                                                </div>
                                                <div class="clearfix"></div>

                                                <span class="error_text" style="color: red;display: none">???????????????? ??????</span>
                                                <span class="timer-sms-send"> ???????????????? ?????????? ?????? ?????????? ?????????? <div class="timerSendCode" id="timerSendCode"></div></span>
                                                <span class="timer-sms-send2" style="display:none;color: blue;cursor: pointer">???????????????? ?????????? ??????</span>


                                                {{--<a class="switch-check" id="switch-check-phone">?????????????????????? ??????????????</a>--}}
                                            </div>

                                            <div class="check-code-t check-phone-code">
                                                <p>?????? ???????????????? ???????????? ?? ?????????? ??????????????????????????<br>
                                                    ???? ?????????? <label id="reg-form-number">+79221234567</label>. <a id="switch-change-number">???????????????? ??????????</a></p>

                                                <div class="cont-form-check cont-form col-md-12">
                                                    <input type="text" class="checkInputCode form-control " placeholder=" " name="phone_code" id="phone_code"   required>
                                                    <label for ="phone_code">?????? ??????????????????????????</label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <a class="switch-check" id="switch-check-sms">?????????????????????? ???? sms</a>
                                            </div>


                                            <div class="check-code-t change-phone-numb">

                                                <p>?????????????? ???????? ?????????? ????????????????</p>

                                                <div class="cont-form-check cont-form col-md-12">
                                                    <input type="tel" class="form-control phone" placeholder=" " name="phone" id="phone" value="+7 (___) ___-__-__" required>
                                                    <label for ="phone">??????????????</label>
                                                    <span class="error_text2" style="color: red;display: none"></span>
                                                </div>

                                                <button id="button-valid-tel" class="button-valid-tel">?????????????????????? </button>

                                            </div>

                                        </div>



                                    </div>

                                    <div class="col-xs-12 col-sm-6 add-progect-step1-img">
                                        <img src="https://cloud.neiros.ru/images/phone-image.png" alt="">
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
										}	
										
										.two-set .check-click-transparent{
											background:transparent;
											z-index:999;
											
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
									
									
									
									
										
									</style>
                                    
                                    
                                    
                                </div>



                            </fieldset>
                            <!-- First step end-->

                            <fieldset title="2" class="two-set">
                                <legend class="text-semibold">?????????????????? ??????????????</legend>

                                <div class="row row-step2">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                    <input name="site_id" type="hidden"  id="site_id" value="0" />



                                    <div class="col-xs-12 col-sm-6 add-progect-step2-datails">
                                        <div class="add-progect-step2-title">
                                            <h2>?????????????????? ??????????????</h2>
                                            <p>?????????? ?????????????? ????????????, ?????????? ???????? ?????? ????????????????.<br>
                                                ?????? ?????????? ???????? ???????????????? ???????????? ?????????? ?????? ??????????????.</p>
                                        </div>




                                        <div class="cont-form col-md-12">
                                            <input type="text" class="form-control input-step-settings" placeholder=" " name="name" id="name"   required>
                                            <label for ="name">???????????????? ??????????????</label>
                                        </div>

                                        <input name="protokol" type="hidden"  id="protokol" value="https" />

                                        <div class="cont-form col-md-12">
                                            <input placeholder=" " type="text" class="form-control input-step-settings" name="url" id="url"   required>
                                            <label for ="url" >????????</label>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 add-progect-step2-img">
                                        <img src="https://cloud.neiros.ru/images/step2-img.png" alt="">
                                    </div>
                                    
                                    
                                     <div class="check-click-next check-click-transparent"></div>
                                    
                                </div>
                            </fieldset>


                            <fieldset title="3" class="secondd third-set">
                                <legend class="text-semibold">?????? ??????</legend>

                                <div class="row row-step3">

                                    <div class="add-progect-step3-title">
                                        <h2>?????? ????????????????</h2>
                                        <p>?????????????? ?????????? ?????? ???????????????????? ???????????? ?????????????????? Neiros. ?????????? ?????????????????????? ???????? ???????????????? ???? ???????? ???? ???????????? ?????????????????? ??????
                                            ????????????, ?????????? ???????????????? ?????????? ?? ???????? ?????????????????? ??????????????????.</p>


                                        <h2>???????????????????? ???? ??????????????????</h2>
                                        <p>???????????????????? ?????? ???????????????? ???????????????????? ???????????? ???????? &lt;body&gt;&lt;/body&gt; ?? ??????L - ???????? ????????????????. ?????? ?????????????????????? ???????????????? ????????????????????
                                            ???????????????????? ?????? ???????????????? ???? ?????? ???????????????? ??????????. ???????????? ???????????????????? ?????? ???????????????????? ?? ?????????????? ???????????? ????????????????????????</p>
                                    </div>

                                    <div class="yourCodeBlock">
                                        <button class="btn-copy" data-clipboard-target="#hash"> ????????????????????</button>
                                        <textarea class="javascriptCode" name="hash" id="hash" readonly>
                            </textarea>
                                    </div>

                                    <div class="code-instal">
                                        <div class="code-send-mail col-xs-12 col-sm-7">
                                            <label class="label-sendMail">?????????????????? ?????? ???? ??????????</label>
                                            <div class="cont-form col-md-12 cont-form-mail">
                                                <input type="email" class="form-control" placeholder=" " name="name" id="emailCodeSend"  >
                                                <label for ="emailCodeSend">?????????????? email</label>
                                                <button class="btn btn-primary btnEmailCodeSend" >
                                                    <img src="https://cloud.neiros.ru/images/send.svg" alt="">
                                                </button>
                                            </div>
                                        </div>

                                        <div class="code-check col-xs-12 col-sm-5">
                                            <div class="code-check-main">
                                                <label class="no-connection-sl"> <img src="https://cloud.neiros.ru/images/error.svg" alt=""> ?????? ??????????????????????</label>
                                                <label class="connected-correctly-sl"> <img src="https://cloud.neiros.ru/images/check.svg" alt=""> ?????? ?????????????????? ??????????????????</label>
                                                <button class="code-check-btn" id="code-check-btn" value="0">
                                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                                    <span>  ?????????????????? ?????? ???? ??????????</span>
                                                </button>
                                            </div>
                                        </div>


                                    </div>





                                </div>

                            </fieldset>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</body>







<script>


    $('a.button-next').on('click', function(e){
        e.preventDefault();

    })


    $('#switch-check-sms').click(function() {
        $(".check-sms-code ").css('display','block');
        $(".check-phone-code").css('display','none');
    });

    $('#switch-check-phone').click(function() {
        $(".check-phone-code ").css('display','block');
        $(".check-sms-code").css('display','none');
    });

    $('#switch-change-number').click(function() {
        $(".check-phone-code ").css('display','none');
        $(".check-sms-code").css('display','none');
        $(".change-phone-numb").css('display','block');
    });



    $("#phone").inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});
    $("#sms_code").inputmask("9999", {"placeholder": ""});

    var timeleft
    function showTimer() {
        timeleft = 32;
        if(timeleft>0){
            $('.timer-sms-send2').hide();
            $('.timer-sms-send').show();
        }
        var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                $('.timer-sms-send').hide();
                $('.timer-sms-send2').show();
                clearInterval(downloadTimer);
                document.getElementById("timerSendCode").innerHTML = "0 "+ " ??????.";
            } else {
                document.getElementById("timerSendCode").innerHTML = timeleft + " ??????.";
            }
            timeleft -= 1;
        }, 1000);
    }


    showTimer();


    $(".button-valid-tel").attr('disabled', true);
    $('#sms_code').keyup(function (){
        value_sms_code=$(this).val();
		var phone = $('#sms_code').val();
        $('.error_text').hide();
		$('#sms_code').removeClass('error-s');
        if(value_sms_code.length==4){

          $.ajax({
              url:'/ajax/phone_prov_code',
              method:'POST',
              data:{'code':value_sms_code}
,success:function (data){
                  if(data['error']==0){
					  $(".registration-preloader").css('display','block');
                      window.location.reload();
					  $('.first-set .button-next').click();
					    window.setTimeout(function() {
						$(".registration-preloader").css('display','none');
						}, 2000);
                  }else{
$('.error_text').show();
$('#sms_code').addClass('error-s');


$('.error_text').html(data['mess']);
                 timer-sms-send2 }


              }

          })



        }



    })
    var numberPhoneValue;
    $("#phone").keyup(function() {
        var numberPhoneValue = $(this).val().replace(/[^+\d]+/g, "");
         numberPhoneLength = numberPhoneValue.length;
        $('.error_text2').hide();
ph= $(this).val();
        if (numberPhoneLength != 12) {



            $("#button-valid-tel").css({background: '#c8cad2'});
            $("#button-valid-tel").css({border: '#c8cad2' });
            $(".button-valid-tel").attr('disabled', true);
        }  else {

            send_ph(0)




        }
    });
function send_ph(code){
    $.ajax({
        url:'/ajax/edit_phone',
        method:'POST',
        data:{'code':ph,'sms':code}
        ,success:function (data){
            if(data['error']==0){

                timeleft=32;
                $("#button-valid-tel").css({background: '#2196f3'});
                $("#button-valid-tel").css({border: '#2196f3' });
                $(".button-valid-tel").attr('disabled', false);
                $('#reg-form-number').html(ph);
            }else{
                $('.error_text2').show();
                $('.error_text2').html(data['mess']);

            }

        }

    })
}
    $("#button-valid-tel").click(function(){
        $(".check-sms-code ").css('display','block');
        $(".change-phone-numb").css('display','none');
        send_ph(1)


    });
    $(".timer-sms-send2").click(function(){

        timeleft=32;
        showTimer();
         $('.timer-sms-send2').hide();
         $('.timer-sms-send').show();

        $.ajax({
            url:'/ajax/edit_phone_sms',
            method:'POST',
            data:{code:1}
            ,success:function (data){


            }

        })
    });




// ???? ???????????????????? title ?????? ??????????????????
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
			  
               
             err=0;
             mess='';
             if(name==''){
                 err=1;
                 mess='?????????????????? ???????????????? ??????????????';
				 $('#name').addClass('error-s');
				 
              }
                if(url==''){
                    err=1;
                    mess='?????????????????? ?????????? ??????????';
					$('#url').addClass('error-s');
                }

                if(err==1){
               

                    mynotif('????????????',mess,'error')
                  

                }

                if (err==0){
				   $('.two-set .button-next').click();

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
                        success: function (html1) {

                            if(html1['error']==1){
                                mynotif('????????????',html1['mess'],'error');
                                return false;
                            }

                            res=JSON.parse(html1);
                            $('#site_id').val(res['id']);
                            $('#hash').val(res['hash']);
							

                        }
                    })

                }
return false;
            } );







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
                  
                }  else {
                   $(".cont-form-mail .btnEmailCodeSend").css({background: '#c8cad2'});
                   }             
            });
   });




</script>










</html>
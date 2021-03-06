@extends('app')
@section('title')
    {{$title}}
@endsection
@section('newjs')
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript" src="/js/jscolor.js"></script>

@endsection
@section('content')

<? if(request()->url()==env('APP_URL').'/widgets'){ ?>

    	<div class="widget-list">
        	<div class="item-widget col-sm-3" data-id="26">
            	<div class="item-container @if($my_widget[26]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-1.png">
                </div>
                <div class="name-block" data-text="Онлайн-консультант – виджет предлагает пользователю перейти к письменному диалогу и задать любой вопрос о чате.">
                	<div>Чат</div>
                </div>
                </div>
            </div>

            <div class="item-widget col-sm-3" data-id="19">
            	<div class="item-container @if($my_widget[19]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-2.png">
                </div>
                <div class="name-block" data-text="Ловец лидов –  виджет предлагает пользователю ввести номер телефона, когда он решил покинуть сайт, сохраняет потенциальных клиентов, которые были готовы купить.">
                	<div>Ловец лидов</div>
                </div>
                </div>
            </div>

            <div class="item-widget col-sm-3" data-id="1" >
            	<div class="item-container @if($my_widget[1]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-3.png">
                </div>
                <div class="name-block" data-text="Коллбек – окно обратного звонка предлагает пользователю ввести номер телефона и мгновенно принять входящий вызов от компании.">
                	<div>Коллбек</div>
                </div>
                </div>
            </div>

            <div class="item-widget col-sm-3"  data-id="23">
            	<div class="item-container @if($my_widget[23]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-4.png">
                </div>
                <div class="name-block" data-text="Омниканальный чат – виджет позволяет пользователю связаться с консультантом через любой удобный канал коммуникации.">
                	<div>Кнопки</div>
                </div>
                </div>
            </div>

            <div class="item-widget col-sm-3" data-id="24">
            	<div class="item-container  @if($my_widget[24]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-5.png">
                </div>
                <div class="name-block" data-text="Карта – виджет отображает место нахождения компании на карте яндекса в удобном окне.">
                	<div>Карта</div>
                </div>
                </div>
            </div>

            <div class="item-widget col-sm-3"  data-id="25" >
            	<div class="item-container @if($my_widget[25]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-6.png">
                </div>
                <div class="name-block" data-text="Форма заявки – виджет позволяет получить конкретные данные пользователя при заказе и избежать уточнения деталей по телефону.">
                	<div>Форма заявки</div>
                </div>
                </div>
            </div>

          <?php /*?>  <div class="item-widget col-sm-3" @if($my_widget[31]->status==0)no-active @else active @endif data-id="{{$my_widget[31]->id}}"><?php */?>
          
            <div class="item-widget col-sm-3" data-id="31" data-id2="{{$my_widget[31]->id}}">  
            	<div class="item-container @if($my_widget[31]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-7.png">
                </div>
                <div class="name-block" data-text="Квиз – виджет онлайн-опрос, который одновременно развлекает и вовлекает пользователя, повышает лояльность к компании.">
                	<div>Квиз</div>
                </div>
                </div>
            </div>

           {{-- <div class="item-widget col-sm-3"  data-id="26">
            	<div class="item-container @if($my_widget[26]->status==0)no-active @else active @endif">
            	<div class="image-block">
                		<img src="/global_assets/images/widgets/icon-8.png">
                </div>
                <div class="name-block">
                	<div>PRO виджет</div>
                </div>
                </div>
            </div>--}}

        </div>






</div>
	<? } else{ ?>
{{--    <div class="page-title1 row @if(request()->url()==env('APP_URL').'/integration') panel-integration-title @endif" style="padding: 10px">--}}
{{--       <? if($title !== 'Колтрекинг'&&request()->url()!=env('APP_URL').'/mail'){?> <h1>--}}
{{--            <div class="col-md-3"><span class="text-semibold">{{$title}}</span></div>--}}

{{--            --}}{{--{!! $status_checkbox !!}--}}

{{--        </h1><? }?>--}}
{{--    </div>--}}
@php
$no=0;

if(\Illuminate\Support\Str::contains (request()->url (),'calltracking')){
  $no=1;
}
if(\Illuminate\Support\Str::contains (request()->url (),'widgets')){
  $no=1;
}
if(\Illuminate\Support\Str::contains (request()->url (),'integration')){
  $no=1;
}


@endphp
@if($no==0)
    <div class="tabs-wrapper @if(request()->url()==env('APP_URL').'/integration') panel-integration-tab @endif" style=" "><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
        <ul class="nav nav-tabs" style="margin-bottom: 0px">
            {!! $tabs !!}
        </ul>
    </div>@endif
<div class="container__deshbord adasdsada">
    <div class="panel panel-flat panel-white
@if(request()->url()==env('APP_URL').'/mail') user-setting @endif
@if(request()->url()==env('APP_URL').'/calltracking') panel-calltrcing @endif
    @if(request()->url()==env('APP_URL').'/integration') panel-integration @endif   ">
        <div class="panel-heading">


        </div>


        <div class="panel-body">

            <div class="tabbable">

                <div class="tab-content">
                    @for($i=0;$i<count($renders);$i++)
                        {!! $renders[$i] !!}
                    @endfor
                </div>
            </div>
        </div>
    </div>
      </div>
<? } ?>    
    
        @endsection

        @section('skriptdop')
            @for($i=0;$i<count($jss);$i++)
                {!! $jss[$i] !!}
            @endfor
            <script>
                @if(session()->has('fb_sucess'))
                mynotif('Успешно', 'Данные успешно сохранены', 'info')
                @endif
                @if(session()->has('fb_error'))
                mynotif('Ошибка', 'Ошибка интеграции', 'error');
                 @endif

                var elems = document.querySelectorAll('.switchery,.switchery1');

                for (var i = 0; i < elems.length; i++) {
                    var switchery = new Switchery(elems[i], {size: 'small' , color: '#00B9EE'});
                }

                $(document).on('click','.widget_status_checkbox, .set_status', function () {


                    datatosend = {
                        _token: $('[name=_token]').val(),
                        element: $(this).data('id'),

                    }


                    $.ajax({
                        type: "POST",
                        url: '/widget/status',
                        data: datatosend,
                        success: function (html1) {

                            /*mynotif('Успешно', 'Статус изменен', 'info')*/

                        }
                    })

                });




                function get_data_to_amo(formdata) {


                    $.ajax({
                        type: "POST",
                        url: '/widget/get_amo_data',
                        data: formdata,
                        success: function (html1) {

                            $('.statusamocrm').html(html1);
                        }
                    })
                }

                $('#myModal_sett_12').on('show.bs.modal', function () {


                    var formdata = $('#safebitrix24').serialize();
                    get_data_to_amo(formdata);
                })


                @if(isset($_GET['tip']))
                @if( $_GET['tip']=='b24')
                $('#myModal_sett_11').modal('show');
                @endif
                @endif
            </script>
            
            

     <link href="/cdn/v1/chatv2/css/select2.css" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="/js/select2.min.js"></script>

<script>

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

$(document).on('click','.add_sourse_new',function(){
Rand =	Date.now()

/*	$('.all_sourses').append('<div class="on_of_nambers col-xs-12"><div class="form__block "><input type="text" class="form-control form-control-text" placeholder="Значение"></div><div class="form__block"><select class="form-control select5-list"><option></option><option value="Яндекс директ">Яндекс директ</option><option value="Google Ads">Google Ads</option></select></div><div class="form__block form__block_small"><span class="switchery-xs"><input checked type="checkbox" class="js-switch js-switch'+Rand+'" data-id=""></span></div><div class="form__block form__block_small"><img class="user-btn delete-namber" src="/global_assets/images/icon/user/trash.svg"></div></div> ')*/
	
	
		$('.all_sourses').append(`<div class="on_of_nambers col-xs-12">
<div class="form__block ">
<input type="text" class="form-control form-control-text" placeholder="Значение"></div>
<div class="form__block"><select class="form-control select5-list" name="ar_canals_dinamic[]" >
<option></option>
 @foreach(\App\Models\WidgetCanal::where('site_id', 0)->orwhere('site_id', auth()->user()->site)->orwhere('show_all',1)->get() as $vk)

<option value="{{$vk->id}}">{{$vk->name}}</option>
 @endforeach
</select>
                  </div> 
<div class="form__block form__block_small"><span class="switchery-xs"><input checked type="checkbox" class="js-switch js-switch`+Rand+`" data-id=""></span></div><div class="form__block form__block_small"><img class="user-btn delete-namber" src="/global_assets/images/icon/user/trash.svg"></div>

                                     </div>`)
	
	
$(".select5-list").select2({
placeholder: 'Все источники',
  minimumResultsForSearch: -1
	})

var elems = document.querySelectorAll('.js-switch'+Rand+'');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}



	})
	$(document).on('click','.add_numbers',function(){
Rand =	Date.now()

	$('.container_phone_new').append('<div class="on_of_nambers"><div class="form__block"><select class="form-control select6-list" name="ar_class_replace_type[]"><option value="">Атрибут</option><option value=".">Class</option><option value="#">id</option></select></div><div class="form__block "><input type="text" class="form-control form-control-text" placeholder="" name="ar_class_replace[]"></div><div class="form__block form__block_small"><img class="user-btn delete-namber" src="/global_assets/images/icon/user/trash.svg"></div></div>')
$(".select6-list").select2({
placeholder: 'Выберите атрибут',
  minimumResultsForSearch: -1
	})

var elems = document.querySelectorAll('.js-switch'+Rand+'');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}



	})


$(document).on('click','.delete-namber',function(){
	$(this).closest('.on_of_nambers').remove();


	})
$(document).on('click', '.save-setings',function(){

	$(this).closest('.panel-default').find('.panel-heading a').addClass('active');
	id = $(this).closest('.collapse').attr('id');
	$('#'+id+'').collapse('hide');
	id = id.split('-') 
	id = Number(id[1])+1;
	$('#collapse-'+id+'').collapse('show');

	})

var elems = document.querySelectorAll('.js-switch');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}


$('#WidgetModal3').on('shown.bs.modal', function (e) {
$( ".new-scenariy" ).focus();

 height = $('#WidgetModal3 .modal-content').height();

 height = height - 70;
 $('#WidgetModal3 .accordion-setings').css('max-height',height);

$(".select3-list").select2({
placeholder: 'Выберите город'
	})
$(".select4-list").select2({
placeholder: 'Телефон',
  minimumResultsForSearch: -1
	})

$(".select5-list").select2({
placeholder: 'Все источники',
  minimumResultsForSearch: -1
	})
$(".select6-list").select2({
placeholder: 'Выберите атрибут',
  minimumResultsForSearch: -1
	})
	
	
})




$('.add-number-new .dropdown-menu').click(function(e) {
    e.stopPropagation();
});


$(document).on('click', '#setings-add-nomer .btn-primary', function(){
	
$('#setings-add-nomer .btn-primary').removeClass('active');
$('#setings-add-nomer-content .tab-content-block').removeClass('active');
$('#setings-add-nomer-content #'+$(this).attr('data-id')+'').addClass('active');
$(this).addClass('active');
    $('#setings-add-nomer_val').val($(this).attr('data-id'));

	})



function change_status_widget(element){


	data_id = $(element).attr('data-id');
	data_id_modal = $(element).attr('data-id-modal');
	$modal_body = $(element).closest('.modal-body');
	selector_a = '.accordion-setings';
	if(data_id_modal == 31){
		selector_a = '.insert-kviz-data-container';
		}

	if($(element).hasClass("checked")){
			$('.item-widget[data-id='+data_id_modal+'] .item-container').addClass('no-active');
		$('.item-widget[data-id='+data_id_modal+'] .item-container').removeClass('active');


		$modal_body.find('.block-descr').css('display','block');
		$modal_body.find(selector_a).css('display','none');
		$modal_body.find('.widget-status-btn').css('display','none');
		$modal_body.find('.widget_status_checkbox2[data-id='+data_id+'], .widget1-status-btn[data-id='+data_id+']').removeClass("disconnect checked")

		$modal_body.find('.widget_status_checkbox2[data-id='+data_id+'], .widget1-status-btn[data-id='+data_id+']').text('Подключить');


		}
	else{
$('.item-widget[data-id='+data_id_modal+'] .item-container').removeClass('no-active');
		$('.item-widget[data-id='+data_id_modal+'] .item-container').addClass('active');

		$modal_body.find('.block-descr').css('display','none');
		$modal_body.find(selector_a).css('display','block');
		$modal_body.find(selector_a).css('margin-top','20px');
		$modal_body.find('.widget-status-btn').css('display','block');

		$modal_body.find('.widget_status_checkbox2[data-id='+data_id+'], .widget1-status-btn[data-id='+data_id+']').addClass("disconnect checked")
		$modal_body.find('.widget_status_checkbox2[data-id='+data_id+'], .widget1-status-btn[data-id='+data_id+']').text('отключить');


		}

           datatosend = {
                        _token: $('[name=_token]').val(),
                        element: data_id,

                    }


                    $.ajax({
                        type: "POST",
                        url: '/widget/status',
                        data: datatosend,
                        success: function (html1) {

                            /*mynotif('Успешно', 'Статус изменен', 'info')*/

                        }
                    })

	}


$(document).on('click','.btn-primary.widget_status_checkbox2, .btn-primary.widget1-status-btn',function(){

	change_status_widget(this)
	})


$('.item-widget').on('click', function(){
	
	if($(this).attr('data-id') == 31){
	$('#WidgetModal2').modal('hide');
	$('#WidgetModal').modal('hide');
	$('#WidgetModal #accordion').html('');
	$('#WidgetModal2').modal('show');
		if($('.item-container',this).hasClass('active')){
		$('#WidgetModal2 .block-descr').css('display','none');
		$('#WidgetModal2 .insert-kviz-data-container').css('display','block');
		$('#WidgetModal2 .insert-kviz-data-container').css('margin-top','20px');
		$('#WidgetModal2 .widget-status-btn').css('display','block');
		$('#WidgetModal2 .widget-status-btn').html('Отключить')
		$('#WidgetModal2 .widget_status_checkbox2').html('Отключить')
		$('#WidgetModal2 .widget-status-btn').addClass('disconnect checked');
		$('#WidgetModal2 .widget_status_checkbox2').addClass('checked');
		}
	else{
		$('#WidgetModal2 .block-descr').css('display','block');
		$('#WidgetModal2 .insert-kviz-data-container').css('display','none');
		$('#WidgetModal2 .widget-status-btn').css('display','none');
		$('#WidgetModal2 .widget-status-btn').html('Подключить')
		$('#WidgetModal2 .widget_status_checkbox2').html('Подключить')
		$('#WidgetModal2 .widget-status-btn').removeClass('disconnect checked');
		$('#WidgetModal2 .widget_status_checkbox2').removeClass('checked');
		}
	name = $('.name-block div',this).html()
	opisanie = $('.name-block',this).attr('data-text')
	src = $('.image-block img',this).attr('src');
	$('#WidgetModal2 .block-descr .img-block-left img').attr('src', src)


	$('#WidgetModal2 .h1-modal.pos-left span').html(name)
	$('#WidgetModal2 .block-descr .paragraph').html(opisanie)
	 $
	 $('#WidgetModal').modal('hide');
	$('#WidgetModal2').modal('show');
	var widget_tip=$(this).data('id');
    $('#WidgetModal #accordion').html('');
		}
		
		else{

	if($('.item-container',this).hasClass('active')){
		$('#WidgetModal .block-descr').css('display','none');
		$('#WidgetModal .accordion-setings').css('display','block');
		$('#WidgetModal .accordion-setings').css('margin-top','20px');
		$('#WidgetModal .widget-status-btn').css('display','block');
		$('#WidgetModal .widget-status-btn').html('Отключить')
		$('#WidgetModal .widget_status_checkbox2').html('Отключить')
		$('#WidgetModal .widget-status-btn').addClass('disconnect checked');
		$('#WidgetModal .widget_status_checkbox2').addClass('checked');
		}
	else{
		$('#WidgetModal .block-descr').css('display','block');
		$('#WidgetModal .accordion-setings').css('display','none');
		$('#WidgetModal .widget-status-btn').css('display','none');
		$('#WidgetModal .widget-status-btn').html('Подключить')
		$('#WidgetModal .widget_status_checkbox2').html('Подключить')
		$('#WidgetModal .widget-status-btn').removeClass('disconnect checked');
		$('#WidgetModal .widget_status_checkbox2').removeClass('checked');
		}
	name = $('.name-block div',this).html()
	opisanie = $('.name-block',this).attr('data-text')
	src = $('.image-block img',this).attr('src');
	$('#WidgetModal .block-descr .img-block-left img').attr('src', src)


	$('#WidgetModal .h1-modal.pos-left span').html(name)
	$('#WidgetModal .block-descr .paragraph').html(opisanie)
	 $('#WidgetModal').modal('hide');
	 $('#WidgetModal2').modal('hide');
	$('#WidgetModal').modal('show');
	var widget_tip=$(this).data('id');
    $('#WidgetModal #accordion').html('');
    /*$.ajax({
        type: "POST",
        url: '/widget/get_setting',
        data: {subtip:widget_tip},
        success: function (html1) {
        /!*    $('#WidgetModal  .accordion-setings').css('display','block'); `<button type="button" class="btn btn-primary set_status widget_status_checkbox"  data-id="`+html1['widget']+`" >Отключить</button>`*!/
            $('#WidgetModal  #accordion').html(html1['renders']);
			$('#WidgetModal .widget_status_checkbox2, #WidgetModal .widget1-status-btn').attr('data-id',html1['widget']);
			$('#WidgetModal .widget_status_checkbox2, #WidgetModal .widget1-status-btn').attr('data-id-modal', widget_tip);
			
           /!* $('.set_status').attr('data-id',html1['widget']);*!/

        }
    })*/
}
    if($(this).attr('data-id') == 31){
        $('#WidgetModal #accordion').html('');
    }else{
        $('#WidgetModal #accordion').html('');
    }
    var widget_tip=$(this).data('id');
	
	if($(this).attr('data-id') == 31){
		$('#WidgetModal2 .widget_status_checkbox2, #WidgetModal2 .widget1-status-btn').attr('data-id',$(this).attr('data-id2'));
      $('#WidgetModal2 .widget_status_checkbox2, #WidgetModal2 .widget1-status-btn').attr('data-id-modal', widget_tip);
		 $.ajax({
        type: "POST",
        url: '/ajax/get_all_kwiz',
        data: {subtip:widget_tip},
        success: function (alldata) {
		data_html = '';
		
		if(alldata.length === 0){
					mass= {
			name:'Новый квиз',
			status:0

        }
			$.ajax({
        type: "POST",
        url: '/ajax/save_kwiz',
		dataType: 'json',
        data: JSON.stringify({data: mass}),
        success: function (html1) {
			
        }
		
    })
	
		$.ajax({
        type: "POST",
        url: '/ajax/get_all_kwiz',
        data: {subtip:'22222'},
        success: function (alldata) {
	
       $.each(alldata, function(key, item) {
		 
	  	id = item.id;
			
    });
		
	  $.ajax({
        type: "POST",
        url: 'https://test.neiros.ru/ajax/get_one_kwiz?id='+id,
        data: {n:''},
        success: function (alldata) {
				$('#WidgetModal2 .insert-kviz-data-container').removeClass('slide-left')
				$('#WidgetModal2 .insert-kviz-data-container').html(alldata);
			
				  $( function() {
    $( "#sortable-panel-otobragenie" ).sortable({
		handle: ".panel-header .block-header-1",
      cancel: ".panel-toggle",
	  stop: function( event, ui ) {
				console.log('sortable')
				save_kviz_all('#WidgetModal2 .insert-kviz-data-container #heading_kviz_1');
		}
		});
    $( "#sortable-panel-otobragenie" ).disableSelection();
  } );
				 var elems = document.querySelectorAll('#WidgetModal2 .insert-kviz-data-container .js-switch');
				for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}

$('#WidgetModal2 .insert-kviz-data-container #name_kviz').attr('data-id', id);
$('#WidgetModal2 .insert-kviz-data-container #name_kviz').attr('data-status', true);
        }
    })

        }
    }) 
	
			
			
			
			}else{
       $.each(alldata, function(key, item) {
		   Rand =	Date.now()
		   status = false;
		   if(item.status){
			   status = item.status;
			   }
			   
			if(status === false || status === null || status === 0 || status === '0' || status === 'false'){
				checkbox = '';
				}
			else{
				checkbox= 'checked';
				}   
		  
		   data_html += '<div class="list-kviz-block"><div class="list-kviz-block-d" data-id="'+item.id+'" data-status="'+status+'"><div class="list-kviz-block-d-text">'+item.name+'</div><div class="list-kviz-block-d-checkbox"><span class="switchery-xs-new"><input '+checkbox+' type="checkbox" name="optional" class="js-switch js-switch1-'+Rand+'"></span></div><div class="list-kviz-block-d-btn">удалить</div></div></div>';
			
    });
	
	data_html += '<div class="list-kviz-block list-kviz-block-add"><div class="list-kviz-block-d"><div class="list-kviz-block-d-text">Создать квиз</div><div class="list-kviz-block-d-btn-add">+</div></div></div>';
	$('#WidgetModal2 .insert-kviz-data-container').removeClass('slide-left')
			$('#WidgetModal2 .insert-kviz-data-container').html(data_html)
	
var elems = document.querySelectorAll('.js-switch1-'+Rand+'');
		for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}
	
	}
		

        }
    })
		
		}
	else{
		
		    $.ajax({
        type: "POST",
        url: '/widget/get_setting',
        data: {subtip:widget_tip},
        success: function (html1) {
            /*    $('#WidgetModal  .accordion-setings').css('display','block'); `<button type="button" class="btn btn-primary set_status widget_status_checkbox"  data-id="`+html1['widget']+`" >Отключить</button>`*/

            if(widget_tip == 31){

;              $('#WidgetModal2  #accordion').html(html1['renders']);
                $('#WidgetModal2 .widget_status_checkbox, #WidgetModal2 .widget1-status-btn').attr('data-id',html1['widget']);
                $('#WidgetModal2 .widget_status_checkbox, #WidgetModal2 .widget1-status-btn').attr('data-id-modal', widget_tip);


            }else{
				
                $('#WidgetModal  #accordion').html(html1['renders']);
                $('#WidgetModal .widget_status_checkbox2, #WidgetModal .widget1-status-btn').attr('data-id',html1['widget']);
                $('#WidgetModal .widget_status_checkbox2, #WidgetModal .widget1-status-btn').attr('data-id-modal', widget_tip);
            }




            /* $('.set_status').attr('data-id',html1['widget']);*/

        }
    })
		}
	




	});

/*
$(document).on('show.bs.collapse', '#accordion .collapse', function(){
	
$(this).closest('.panel-default').addClass('active')
});
$(document).on('hide.bs.collapse', '#accordion .collapse', function(){
$(this).closest('.panel-default').removeClass('active')
});*/

/*    $.ajax({
        type: "POST",
        url: '/ajax/get_client_info',
        data: "id="+id,
        success: function (html1) {

            $('.hidenmodal').html(html1);
            $('#ClientInfoModal').modal('show');

			$('.activnost').css('max-height',$(window).height()-79)


        }
    })*/



</script>
@endsection


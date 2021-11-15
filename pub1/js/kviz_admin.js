$(document).on('click','#WidgetModal2 .back-kviz',function(){
	  $.ajax({
        type: "POST",
        url: '/ajax/get_all_kwiz',
        data: {subtip:'2222'},
        success: function (alldata) {
		data_html = '';
		

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
	$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left').css('display','block');
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz').css('display','none');
$('#WidgetModal2 .insert-kviz-data-container').removeClass('slide-left')

			$('#WidgetModal2 .insert-kviz-data-container').html(data_html)
$('#WidgetModal2 .insert-kviz-data-container').addClass('slide-left')			
			
			
var elems = document.querySelectorAll('.js-switch1-'+Rand+'');
		for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}
	
	}
		

        
    })
	 
	 })
 
		
		
 $(document).on('change','.list-kviz-block input[name="optional"]',function(){
	 	id = $(this).closest('.list-kviz-block').find('.list-kviz-block-d').attr('data-id');
		if($(this).is(':checked')){
				status = 1;
				$(this).closest('.list-kviz-block').find('.list-kviz-block-d').attr('data-status', 1);
			}
		else{
				status = 0;
				$(this).closest('.list-kviz-block').find('.list-kviz-block-d').attr('data-status', false);
				}
				
	   $.ajax({
        type: "POST",
        url: '/ajax/set_kwiz_status?id='+id+'&status='+status,
        data: {n:''},
        success: function (alldata) {
			
					
        }
    })
	 
	 })
 
 
 
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }
  $(document).on('click','#add_pravilo_kviz',function(){

        var is_random=getRandomInt(99999990);
		$(this).closest('.tab-content-block').find('.show-chat-operator-all').append(`<div class="pravilo-block col-xs-12">
                        <div  class="select-panel-blok col-sm-5" style="display:none" >

    <div class="dropdown add-user-new add-number-new select-panel-blok-input">
            <button  class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Адрес текущей страницы</button>
             <ul class="dropdown-menu"  aria-labelledby="dLabel">
                <li class="t__3 active"><label class="add-number-new-checkbox">Адрес текущей страницы<input value="url-page" checked="" type="checkbox" name="url_page"><span class="checkmark"></span></label></li>
       
             </ul>
    </div>



                    </div>




                    <div class="col-sm-7 zvonok-block two-panel-result-show select-panel-blok-time time-page"  style="display:none" >
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">больше</div>
                            </div>
                            <div class="form__block " style="width:65px">

                                <input type="text" class="form-control form-control-text" placeholder="00" name="time[n`+is_random+`]">
                            </div>

                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">сек</div>
                            </div>
                        </div>

                      <div class="col-sm-12 zvonok-block two-panel-result-show select-panel-blok-time url-page" style="display:block; padding-left:0px;"  >
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">содержит строку</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                        <li class="active"><label class="add-number-new-checkbox">содержит строку<input type="checkbox" name="like" value="%LIKE%" checked=""><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не содержит строку<input type="checkbox" name="not_like" value="NOT%LIKE%"><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">это точно<input type="checkbox" name="correct" value="=="><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не являеться<input value="!=" type="checkbox" name="no_correct"><span class="checkmark"></span></label></li>

                                                    </ul>
                                                </div>

    <div class="form__block " >

                             <input type="text" class="form-control form-control-text" placeholder="" name="value" value="">
                        </div>



                        </div>


                     <div class="delete_pravilo"><img src="/global_assets/images/icon/user/trash.svg"></div>

               </div>`);



    })
$('#WidgetModal2').on('hidden.bs.modal', function () {
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left').css('display','block');
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz').css('display','none');
 $('#WidgetModal2 .insert-kviz-data-container').html('')
 $('#WidgetModal2 .insert-kviz-data-container').removeClass('slide-left')
});
 $(document).on('keyup','#WidgetModal2 .name-block-fixed .pos-left-kviz input',function(){
	 val = $(this).val()
	 $('#WidgetModal2 #name_kviz').val(val)
	
	 })
 
 $(document).on('click', '.list-kviz-block .list-kviz-block-d .list-kviz-block-d-text', function(){
	
	 if(!$(this).closest('.list-kviz-block').is('.list-kviz-block-add')){
		 var text = $(this).html();
		var id = $(this).closest('.list-kviz-block-d').attr('data-id');
		var status = $(this).closest('.list-kviz-block-d').find('.list-kviz-block-d-checkbox input').is(':checked');
	  $.ajax({
        type: "POST",
        url: '/ajax/get_one_kwiz?id='+id,
    /*    data: {n:''},*/
        success: function (alldata) {
			$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left').css('display','none');
			$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz').css('display','block');
			$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz input[name="name_new_kviz"]').val(text);
			$('#WidgetModal2 .insert-kviz-data-container').removeClass('slide-left')

				$('#WidgetModal2 .insert-kviz-data-container').html(alldata);
				
				  $( function() {
    $( "#sortable-panel-otobragenie" ).sortable({
		handle: ".panel-header .block-header-1",
      cancel: ".panel-toggle",
	  stop: function( event, ui ) {
			
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
$('#WidgetModal2 .insert-kviz-data-container #name_kviz').attr('data-status', status);
        }
    })
	 }
	 
	 else{
		 
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
        url: '/ajax/get_one_kwiz?id='+id,
       /* data: {n:''},*/
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
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left').css('display','none');
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz').css('display','block');
$('#WidgetModal2 .name-block-fixed .h1-modal.pos-left.pos-left-kviz input[name="name_new_kviz"]').val('Новый квиз');
        }
    })

        }
    }) 
	
	
	
/*	
	$.ajax({
        type: "POST",
        url: '/ajax/get_all_kwiz',
        data: {subtip:'22222'},
        success: function (alldata) {
		data_html = '';
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
		$('#WidgetModal2 .insert-kviz-data-container').html(data_html)
var elems = document.querySelectorAll('.js-switch1-'+Rand+'');
		for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}
        }
    }) */
		 
		 
		 }
	 })
	 
	 
$(document).on('click', '.list-kviz-block .list-kviz-block-d .list-kviz-block-d-btn', function(){
	 var id = $(this).closest('.list-kviz-block-d').attr('data-id');
	 var block = $(this).closest('.list-kviz-block')
	  $.ajax({
        type: "POST",
        url: '/ajax/get_delete_kwiz?id='+id,
        data: {n:''},
        success: function (alldata) {
			block.remove();	
			
        }
    })
	 
	 }) 
	 
 
      $(document).on('change','.file-block input[type="file"]',function (event) {
		obj = $(this);
	
        event.stopPropagation(); // Остановка происходящего
        event.preventDefault();  // Полная остановка происходящего
        file = $(this).val();
	
        files = this.files;
        var data = new FormData();
        $.each(files, function (key, value) {
		
            data.append('file', value);
        });
	 data.append('is_file', 1);

        if ($(this).val() != '') {
		$.ajax({
        type: "POST",
        url: '/ajax/save_kwiz_image',
       	data        : data,
		cache       : false,
		dataType    : 'json',
		// отключаем обработку передаваемых данных, пусть передаются как есть
		processData : false,
		// отключаем установку заголовка типа запроса. Так jQuery скажет серверу что это строковой запрос
		contentType : false, 
        success: function (jsondata) {
				
		
				obj.attr('data-img', jsondata.message)
				
					if(obj.closest('.col-xs-12').is('.footer-kviz-block-type-image')){
						
					obj.closest('.footer-kviz-block-type-image').find('.file-block-img').html('<img src="'+jsondata.message+'">')
					}
				
				
                }
    })

        } else {


        }
    });
 
  $(document).on('change', '#collapse_kviz_6 input[name="on_off"]', function(){
			if($(this).is(':checked')){
							$(this).closest('#collapse_kviz_6').find('.show-kviz-container-time').css('display','block');
				
				}
				else{
					$(this).closest('#collapse_kviz_6').find('.show-kviz-container-time').css('display','none');
					}
	 
	 })
 function save_kviz_all(element){
	 
	 	validation_step_1 = $(element).closest('.accordion-kviz').find('#collapse_kviz_1 .validation-val-kviz');
		validation_step_6 = $(element).closest('.accordion-kviz').find('#collapse_kviz_6 .show-chat-operator-all .pravilo-block');
		panel_step_2 = $(element).closest('.accordion-kviz').find('#collapse-kviz-2 .panel-otobragenie');
		
		validation_checked_step_3_konsultant = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-konsultant .validation-val-kviz-checked');
		validation_checked_step_3_motivaciya = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-motivaciya .validation-val-kviz-checked');
		validation_checked_step_3_bonus_1 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 .validation-val-kviz-checked');
		validation_checked_step_3_bonus_2 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 .validation-val-kviz-checked');
		
		validation_step_3 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .validation-val-kviz');
		validation_step_4 = $(element).closest('.accordion-kviz').find('#collapse_kviz_4 .validation-val-kviz');
		validation_step_5 = $(element).closest('.accordion-kviz').find('#collapse_kviz_5 .validation-val-kviz');
		
	step_3_type_bonus_type_2_active = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2').is('.active');
		
		step_3_type_bonus_type_1_image = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 .select-bonus-type-1 input:checked').val();
		step_3_type_bonus_type_2_image = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 .select-bonus-type-1 input:checked').val();
		step_3_type_skidki = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-motivaciya .button-top-all-cont .button-top-all.active').text();
		step_3_color_bonus_type_1 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 .all-design-input-block-bonus input.form-control-text').val();
		step_3_color_text_bonus_type_1 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 .block-color-bonus-text li.active').attr('data-color');
		step_3_color_bonus_type_2 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 .all-design-input-block-bonus input.form-control-text').val();
		step_3_color_text_bonus_type_2 = $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 .block-color-bonus-text li.active').attr('data-color');
		
/*		dropdown_step_2 = $(this).closest('.accordion-kviz').find('#collapse_kviz_2 input[name="diapazon_polzunka"]').val();

*/		
		status = $(element).closest('.modal-body').find('.cont-form input[name="name_kviz"]').attr('data-status');
		if(status === 'true'){
			status = 1;
			}
			else{
				status = 0;
				}
		mass= {
			name:$(element).closest('.modal-body').find('.cont-form input[name="name_kviz"]').val(),
			id:$(element).closest('.modal-body').find('.cont-form input[name="name_kviz"]').attr('data-id'),
			status:status,
			step1:{
				'optional': $(element).closest('.accordion-kviz').find('#heading_kviz_1 input[name="optional"]').is(':checked'),
				'company': $(element).closest('.accordion-kviz').find('#collapse_kviz_1 input[name="company"]').is(':checked'),
				'img': $(element).closest('.accordion-kviz').find('#collapse_kviz_1 .footer-kviz-block-type-image-1 input[type="file"]').attr('data-img'),
				'logo': $(element).closest('.accordion-kviz').find('#collapse_kviz_1 .footer-kviz-block-type-image-2 input[type="file"]').attr('data-img'),
				},
			step2:[],
			step3:{
				konsultant:{
					'name': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-konsultant input[name="name"]').val(),
					'dolgnost': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-konsultant input[name="dolgnost"]').val(),				'img': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-konsultant input[type="file"]').attr('data-img'),
					
					},
					
		motivaciya:{
					'type-skidki':step_3_type_skidki,
					'prise1': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-motivaciya input[name="prise1"]').val(),
					'prise2': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-motivaciya input[name="prise2"]').val(),
					},
					
		bonus:{
				'is_checked': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .block-header-2 input[name="is_checked"]').is(':checked'),
				first:{
					'type':step_3_type_bonus_type_1_image,
					'name':$(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 input[name="name"]').val(),
					'color':step_3_color_bonus_type_1,
					'img': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-1 input[type="file"]').attr('data-img'),
					'color-text': step_3_color_text_bonus_type_1
					
					},
				finish:{
					'active': step_3_type_bonus_type_2_active,
					'type':step_3_type_bonus_type_2_image,
					'name':$(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 input[name="name"]').val(),
					'color':step_3_color_bonus_type_2,
					'img': $(element).closest('.accordion-kviz').find('#collapse_kviz_3 .kviz-3-bonus .pravilo-block-bonus-cont-2 input[type="file"]').attr('data-img'),
					'color-text': step_3_color_text_bonus_type_2
					}
				},				
					
							
					
				/*
				'type-bonus_type_1_image':step_3_type_bonus_type_1_image,
				'step_3_type_bonus_type_2_image':step_3_type_bonus_type_2_image,
				'step_3_color_bonus_type_1':step_3_color_bonus_type_1,*/
				
				},
			step4:{
				name: {
						'active': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="name_active"]').is(':checked'),
						'value': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="name"]').val(),
					},
				email: {
						'active': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="email_active"]').is(':checked'),
						'value': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="email"]').val(),
					},				
				phone: {
						'active': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="phone_active"]').is(':checked'),
						'value': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="phone"]').val(),
					},				
				comment: {
						'active': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="comment_active"]').is(':checked'),
						'value': $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="comment"]').val(),
					},				
				send: $(element).closest('.accordion-kviz').find('#collapse_kviz_4 input[name="send_to_chatbot"]').is(':checked'),
				active_massenger: {
						fb: $(element).closest('.accordion-kviz').find('#collapse_kviz_4 .block-messeger-li .fb-messeger').is('.active'),
						telegram: $(element).closest('.accordion-kviz').find('#collapse_kviz_4 .block-messeger-li .telegram-messeger').is('.active'),
						vk: $(element).closest('.accordion-kviz').find('#collapse_kviz_4 .block-messeger-li .vk-messeger').is('.active'),
						viber: $(element).closest('.accordion-kviz').find('#collapse_kviz_4 .block-messeger-li .viber-messeger').is('.active')
					
					}
					},
			step5:{
				'color': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 input[name="color"]').val(),
				'color_text': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 .block-color-bonus-text li.active').attr('data-color'),
				'linck': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 input[name="linck"]').val(),
				'event': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 input[name="event"]').val(),
				'text-label': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 input[name="text-label"]').val(),
				'active': $(element).closest('.accordion-kviz').find('#collapse_kviz_5 .all-design-block-select-button.active').attr('data-name'),
				'icon': '/global_assets/images/icon_kviz/design/'+$(element).closest('.accordion-kviz').find('#collapse_kviz_5 .chose-icon5-design li.active').attr('data-name')+'.svg',
				'position':$(element).closest('.accordion-kviz').find('#collapse_kviz_5 .all-design-left-con .select-position.active').attr('data-name')
				
				},
			step6:{
				on_off: $(element).closest('.accordion-kviz').find('#collapse_kviz_6 input[name="on_off"]').is(':checked'),
				time: $(element).closest('.accordion-kviz').find('#collapse_kviz_6 input[name="time"]').val(),
				everyday: $(element).closest('.accordion-kviz').find('#collapse_kviz_6 input[name="everyday"]').is(':checked'),
			rules:[]
			}
			};
			
			
			
			validation_step_6.each(function( i, k ) {
				mass.step6.rules.push({
					type: 'url_page'/*$(this).find('.select-panel-blok.col-sm-5 .dropdown-menu li.active input').attr('name')*/,
					pravilo: $(this).find('.select-panel-blok-time.url-page .dropdown-menu li.active input').attr('name'),
					url: $(this).find('.select-panel-blok-time.url-page .form__block input').val(),	
					
				});
			
 		});		
			
			
		validation_checked_step_3_konsultant.each(function( i, k ) {
			
				name = $(this).attr('name')
			
			if($(this).is(':checked')){
				val = true
				}
				else{
					val = false
					}
			mass.step3.konsultant[name] = val;
			
 		});	
		validation_checked_step_3_motivaciya.each(function( i, k ) {
			
				name = $(this).attr('name')
			
			if($(this).is(':checked')){
				val = true
				}
				else{
					val = false
					}
			mass.step3.motivaciya[name] = val;
			
 		});	
		
		validation_checked_step_3_bonus_1.each(function( i, k ) {
			
				name = $(this).attr('name')
			
			if($(this).is(':checked')){
				val = true
				}
				else{
					val = false
					}
			mass.step3.bonus.first[name] = val;
			
 		});
		
	validation_checked_step_3_bonus_2.each(function( i, k ) {
			
				name = $(this).attr('name')
			
			if($(this).is(':checked')){
				val = true
				}
				else{
					val = false
					}
			mass.step3.bonus.finish[name] = val;
			
 	});
		
		
			
		it_panel = 1;
		panel_step_2.each(function( i, k ) {
			dropdown_step_2 = $(this).find('.dropdown-kviz-step-2 input:checked').val();
			validation_step_2 = $(this).find('.validation-val-kviz');
			validation_checked_step_2 = $(this).find('.validation-val-kviz-checked');
			mass2 = {
				variants:[]};
				
				mass2['tip_oprosa']=dropdown_step_2;
				
			validation_checked_step_2.each(function( i, k ) {
			if($(this).is(':checked')){
				val = true
				name = $(this).attr('name')
				if(name === 'type_files'){
					mass2.variants.push({type_files:$(this).val(), checked:val}) ;
				/*	mass2[name] = val;*/
						}
				else{
				
			mass2[name] = val;}
				}
				else{
			val = false
			name = $(this).attr('name')		
			if(name !== 'type_files'){		
	
			mass2[name] = val; }
					}
			
			
 		});
		it = 1;
		validation_step_2.each(function( i, k ) {
		
			val = $(this).val()
			name = $(this).attr('name')
			if(name === 'variants'){
				if(dropdown_step_2 === 'var-s-kartinami' || dropdown_step_2 === 'var-i-kartinka' ){
						if(dropdown_step_2 === 'var-s-kartinami'){
							img = $(this).closest('.kviz-input-block-vopros-file').find('input[type="file"]').attr('data-img');
							mass2.variants.push({id:it,text:val, src:img})  ;
							}else{
								
							img = $(this).closest('.hidden-type-oprosa-down').find('.footer-kviz-block-type-image input[type="file"]').attr('data-img');	
						mass2.variants.push({id:it,text:val, src:img})  ;}
					}
					else{
							mass2.variants.push({id:it,text:val}) ;
						}
		
			it++;
			}
			else{
				mass2[name] = val;
				}
			
 		});
		mass.step2.push(mass2);
		it_panel++;
				});

		
		validation_step_1.each(function( i, k ) {
			val = $(this).val()
			name = $(this).attr('name')
			mass.step1[name] = val;
 		});

		validation_step_4.each(function( i, k ) {
			val = $(this).val()
			name = $(this).attr('name')
			mass.step4[name] = val;
 		});
		
		
		console.log(mass);
		
		
		$.ajax({
        type: "POST",
        url: '/ajax/save_kwiz',
		dataType: 'json',
        data: JSON.stringify({data: mass}),
        success: function (html1) {
       

        }
    })
		
	/*	
	 	mass= {
			step_1_title: step_1_title;
			
			}*/
	 
	 
	 
	 
	 }
	 
 $(document).on('click', '.save-setings-kviz', function(){
save_kviz_all(this);
	 
	 })
$(document).on('click', '.add-etap-kviz', function(){
	Rand =	Date.now()
	$(this).closest('.tab-content-block').find('#sortable-panel-otobragenie').append(`<div class="panel-otobragenie col-xs-12">
                        <form name="formawork">
                            <div class="panel-header">
                                <div class="block-header block-header-1"><img
                                            src="/global_assets/images/icon_chat/menu_gray.svg">
                                </div>
                                <div class="block-header block-header-2"><span
                                            class="insert-img-text-k"> <span
                                                class="text__header">Выберите тип вопроса</span></span><span
                                            class="switchery-xs-new"><input checked
                                                                            type="checkbox"
                                                                            class="js-switch`+Rand+` validation-val-kviz-checked" name="optional"></span>
                                </div>
                                <div class="block-header block-header-3 active"><img
                                            src="/images/icon/chat/3.png"></div>
                                <div class="block-header block-header-4"><img
                                            src="/global_assets/images/icon_chat/file_gray.svg">
                                </div>
                                <div class="block-header block-header-5 "><img
                                            src="/global_assets/images/icon/user/trash.svg">
                                </div>


                            </div>

                            <div class="panel-body-panel col-xs-12 start-page-kviz"
                                 style="display: block;">

                                <div class="kviz-vibor-start-step">
                                    <div class="item-kviz col-sm-3" data-id="1">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/1.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Варианты ответов</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item-kviz col-sm-3" data-id="2">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/2.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Варианты с картинками</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-kviz col-sm-3" data-id="3">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/3.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Варианты и картинка</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-kviz col-sm-3" data-id="4">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/4.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Свое поле для ввода</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-kviz col-sm-3" data-id="5">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/5.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Выпадающий список</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-kviz col-sm-3" data-id="6">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/6.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Дата</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-kviz col-sm-3" data-id="7">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/7.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Ползунок</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-kviz col-sm-3" data-id="8">
                                        <div class="item-container no-active ">
                                            <div class="image-block">
                                                <img src="/global_assets/images/icon_kviz/vibor-varianta-big/8.png">
                                            </div>
                                            <div class="name-block">
                                                <div>Загрузка файла</div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="hidden-type-oprosa-down" style="display:none;">

                                    <div class="kviz-input-block">
                                        <label>Вопрос</label>
                                        <input type="text"
                                               class="form-control form-control-text validation-val-kviz"
                                               placeholder="" name="question" value="">
                                    </div>

                                    <div class="text-panel-blok-kviz text-panel-blok">
                                        <label>Подсказка консультанта</label>
                                        <textarea class="validation-val-kviz" name="massage"></textarea>
                                    </div>

                                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                                        Тип вопроса
                                    </div>
                                    <div class="pravilo-block pravilo-block-kviz col-xs-12">
                                        <div class="select-panel-blok col-xs-12">

                                            <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                                <button class="btn btn-success"
                                                        type="button" data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">Выберите тип
                                                    опроса
                                                </button>
                                                <ul class="dropdown-menu dropdown-kviz-step-2"
                                                    aria-labelledby="dLabel">

                                                    <li class="t_k t_k_1" data-img="1">
                                                        <label class="add-number-new-checkbox">Варианты
                                                            ответов<input
                                                                    value="var-otvetov"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_2" data-img="2">
                                                        <label class="add-number-new-checkbox">Варианты
                                                            с картинками<input
                                                                    value="var-s-kartinami"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_3" data-img="3">
                                                        <label class="add-number-new-checkbox">Варианты
                                                            и картинка<input
                                                                    value="var-i-kartinka"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_4" data-img="4">
                                                        <label class="add-number-new-checkbox">Свое
                                                            поле для ввода<input
                                                                    value="pole-dlya-vvoda"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_5" data-img="5">
                                                        <label class="add-number-new-checkbox">Выпадающий
                                                            список<input
                                                                    value="vipadayshii-spisok"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_6" data-img="6">
                                                        <label class="add-number-new-checkbox">Дата<input
                                                                    value="data"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_7" data-img="7">
                                                        <label class="add-number-new-checkbox">Ползунок<input
                                                                    value="polzynok"
                                                                    type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                    <li class="t_k t_k_8" data-img="8">
                                                        <label class="add-number-new-checkbox">Загрузка
                                                            файлов<input value="time-page"
                                                                         type="checkbox"><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="kviz-block-fo-voprosi-all">
                                        <div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                                            <input type="text"
                                                   class="form-control form-control-text"
                                                   placeholder="Введите текст варианта ответа"
                                                   name="" value=""><img
                                                    class="delete-vopros-kviz"
                                                    src="/global_assets/images/icon_kviz/trash.svg">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 add_sourse_block">
                                        <div class="add_sourse add_time_call"
                                             data-variant="1" id="add_variant">
                                            <div class="cont__left">+</div>
                                            <div class="cont_right">Добавить Вариант</div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 footer-kviz-block-type-image">
                                        <div class="file-block"><input type="file"
                                                                       name="file`+Rand+`"
                                                                       id="`+Rand+`">
                                            <label for="`+Rand+`"><img
                                                        src="/global_assets/images/icon_kviz/load-img.svg">
                                                <div>Загрузить<br>
                                                    изображение
                                                </div>
										
                                            </label></div>
											<div class="file-block-img"></div> 
                                    </div>


                                    <div class="col-xs-12 footer-kviz-block-type">
                                        <div class="col-xs-6 block-kviz-f-0"><label
                                                    class="add-number-new-checkbox">Выбор
                                                диапазона (2 ползунка)
                                                <input type="checkbox" name="diapazon_polzunka"
                                                       value="Выбор диапазона (2 ползунка)"
                                                       checked="" class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 block-kviz-f-1"><label
                                                    class="add-number-new-checkbox">Можно
                                                несколько
                                                <input type="checkbox" name="neskolko"
                                                       value="Несколько" checked="" class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 block-kviz-f-3">
                                            <label class="add-number-new-checkbox">Выбор
                                                диапазона дат
                                                <input type="checkbox" name="vibor_diapazon_dat"
                                                       value="Выбор диапазона дат" class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="col-xs-6 block-kviz-f-4"><label
                                                    class="add-number-new-checkbox">Выбор
                                                времени
                                                <input type="checkbox" name="vibor_vremeni"
                                                       value="Выбор времени" class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 block-kviz-f-2">
                                            <label class="add-number-new-checkbox">Необязательный
                                                вопрос
                                                <input type="checkbox" name="neobbyazatelnii_vopros"
                                                       value="Необязательный вопрос" class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>


                                    </div>


                                </div>


                                <div class="banel-body-footer">
                                    <button type="button" style="display:none"
                                            class="btn btn-primary save-setings2  save-setings-kviz">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>`)

var elems = document.querySelectorAll('.js-switch'+Rand+'');

for (var i = 0; i < elems.length; i++) {
  var switchery = new Switchery(elems[i], { size: 'small' , color: '#00B9EE'});
}


	
	})	 
	 
	 
	 
	 
 
 
  $(document).on('click', '.all-design-input-block input.form-control-text', function(){
	 $(this).closest('.all-design-input-block').find('.color-picker input').click()
	  })
	  
  $(document).on('click', '.all-design-input-block-bonus input.form-control-text', function(){
	 $(this).closest('.all-design-input-block-bonus').find('.color-picker-bonus input').click()
	  })	  


 $(document).on('change', '.all-design-input-block-bonus .color-picker-bonus input', function(){
	color =  $(this).val()
	$(this).closest('.all-design-input-block-bonus').find('input.form-control-text').val(color)
		$(this).closest('.pravilo-block-bonus').find('.all-design-input-block-bonus input.form-control-text').val(color)
		$(this).closest('.pravilo-block-bonus-cont').find('.design-block-label').css('background','linear-gradient(172deg, '+color+' 36%, #000000 199%)');
	
	
	
	/*$(this).closest('.all-design-block').find('.all-design-block-top-right .select-color-all-design').css('background',val);
	$(this).closest('.all-design-block').find('.all-design-down-con .preview-button').css('background',val);
		$(this).closest('.all-design-block').find('.select-color-all-design').css('background',val);*/
	 })
	  

 $(document).on('change', '.color-picker input', function(){
	val =  $(this).val()
	$(this).closest('.all-design-input-block').find('input.form-control-text').val(val)
	$(this).closest('.all-design-block').find('.all-design-block-top-right .select-color-all-design').css('background',val);
	$(this).closest('.all-design-block').find('.all-design-down-con .preview-button').css('background',val);
		$(this).closest('.all-design-block').find('.select-color-all-design').css('background',val);
	 })

 $(document).on('keyup', '.proiti-test', function(){
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
 $(document).on('click', '.all-design-block-select-button-cont .all-design-block-select-button.active .disabled-buttom', function(e){
	 e.preventDefault()
	 $('.variant-all-design-no-round').hide()
	 $('.variant-all-design-round').hide()
	 $('.all-design-block-select-button-cont .all-design-block-select-button').removeClass('active');
	 $('.variant-all-design-no-round').removeClass('variant-all-design-floating')
	 
	 })
 $(document).on('click', '.all-design-block-select-button-cont .all-design-block-select-button .btn-select-item-cont', function(){
	 $('.all-design-block-select-button-cont .all-design-block-select-button').removeClass('active');
	$this = $(this).closest('.all-design-block-select-button');
		 
	 if($this.is('.round')){
		 $('.variant-all-design-no-round').removeClass('variant-all-design-floating')
		 $('.variant-all-design-round').show()
		  $('.variant-all-design-no-round').hide()
		 }
		if($this.is('.no-round')){
			$('.variant-all-design-no-round').removeClass('variant-all-design-floating')
		 $('.variant-all-design-no-round').show()
		$('.variant-all-design-round').hide()
		 }	
		 
		if($this.is('.floating')){
$('.variant-all-design-no-round').addClass('variant-all-design-floating')			
$('.variant-all-design-no-round').show()
$('.variant-all-design-round').hide()
		 } 
		  
		 
	
	 $this.addClass('active');

	 })


  $(document).on('click','.block-color-all-design li', function(){
	 	$(this).closest('.block-color-all-design').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');
		$(this).closest('.all-design-block').find('.all-design-input-block input[type="text"]').val(color) 
		
		$(this).closest('.all-design-block').find('.all-design-down-con .preview-button').css('background',color);
		$(this).closest('.all-design-block').find('.select-color-all-design').css('background',color);
	 })



 $(document).on('change', '#chatbot-block-on', function(){
	if($(this).prop('checked')){
		$(this).closest('.cont-btn-content').find('.on-of-chatbot-block-tab').show();
		}
		else{
			$(this).closest('.cont-btn-content').find('.on-of-chatbot-block-tab').hide();}


	 })
	 
 $(document).on('change', '#iformation-company', function(){
	if($(this).prop('checked')){
		$(this).closest('.cont-btn-content').find('.on-of-iformation-company-tab').show();
		}
		else{
			$(this).closest('.cont-btn-content').find('.on-of-iformation-company-tab').hide();}


	 })	 
	 
	 

 $(document).on('click', '.block-messeger-li div', function(){
	 if($(this).is('.active')){
		 $(this).removeClass('active');
		 }
		 else{
	 	$(this).addClass('active');}

	 })




 $(document).on('keyup', '.sele-on-month', function(){
	 text = $(this).val()
	 $(this).closest('.pravilo-block-bonus-cont').find('.design-block-label .design-block-right').text(text)
	 })

$(document).on('click', '#add-bonus-end-step', function(){
	$(this).hide();
	$('.pravilo-block-bonus-cont-2').show();
	$('.pravilo-block-bonus-cont-2').addClass('active');

	})
	
$(document).on('click', '.disabled-buttom-bonus', function(){
	$(this).closest('.kviz-3-bonus').find('#add-bonus-end-step').show();
	$('.pravilo-block-bonus-cont-2').hide();
	$('.pravilo-block-bonus-cont-2').removeClass('active');

	})	

 $(document).on('click','.block-color-bonus li', function(){
	 	$(this).closest('.block-color-bonus').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');
		$(this).closest('.pravilo-block-bonus').find('.all-design-input-block-bonus input.form-control-text').val(color)
		$(this).closest('.pravilo-block-bonus-cont').find('.design-block-label').css('background','linear-gradient(172deg, '+color+' 36%, #000000 199%)');
	 })
	 
	 
 $(document).on('click','.block-color-bonus-text li', function(){
	 if($(this).closest('.panel-collapse').is('#collapse_kviz_5')){
		 
		 $(this).closest('.block-color-bonus-text').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');
		
		if(color === '#000'){
		$(this).closest('#collapse_kviz_5').find('.preview-button span img').addClass('black');
		$(this).closest('#collapse_kviz_5').find('.preview-button span').addClass('black');
		}
		else{
		$(this).closest('#collapse_kviz_5').find('.preview-button span img').removeClass('black');
$(this).closest('#collapse_kviz_5').find('.preview-button span').removeClass('black');
			}
		 $(this).closest('#collapse_kviz_5').find('.preview-button div').css('color',color);
		 
		 
		 }
	 else{
	 
	 	$(this).closest('.block-color-bonus-text').find('li').removeClass('active');

	 	$(this).addClass('active');
		color = $(this).attr('data-color');
		$(this).closest('.pravilo-block-bonus-cont').find('.design-block-label .design-block-right').css('color',color);
		
		}
		
	 })	 

 /*Kviz*/
   $(document).on('click', '.select-bonus-type ul li', function(event){

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
	$(this).closest('.start-page-kviz').find('.hidden-type-oprosa-down').show();
	$(this).closest('.start-page-kviz').find('.save-setings-kviz').show();
	id = $(this).attr('data-id')
	obj = $(this).closest('.start-page-kviz').find('.select-panel-blok ul li[data-img="'+id+'"]')
	$(this).closest('.kviz-vibor-start-step').css('display','none');
	parent_select_panel(event,obj)



	})


   function parent_select_panel(event,obj){
	  event.preventDefault();
		Rand =	Date.now()
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
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Введите текст варианта ответа" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
				}

			if(id === '2'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros kviz-input-block-vopros-file"><div class="file-block"><input type="file" data-img="" name="file`+Rand+`" id="file`+Rand+`"
					  />
				<label for="file`+Rand+`"><img src="/global_assets/images/icon_kviz/load-img.svg">
				</label></div>
                 <input type="text" class="form-control form-control-text validation-val-kviz"  placeholder="Введите текст варианта ответа" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
	  	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 }

			if(id === '3'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Начальны текст</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Введите начальный текст" name="variants" value="">
                 </div> 
	 `);
	 $(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','block')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','block')
	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','block')
	  	  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')
	 }

	 		if(id === '4'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Текст в выпадающем списке</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Текст в выпадающем списке" name="primer_otveta" value="">
                 </div> 
	 `);
	$(obj).closest('.panel-body-panel').find('.add_sourse.add_time_call').css('display','none')
	$(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-1').css('display','none')
	 $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type-image').css('display','none')
		  $(obj).closest('.panel-body-panel').find('.footer-kviz-block-type .block-kviz-f-4, .footer-kviz-block-type .block-kviz-f-3, .footer-kviz-block-type .block-kviz-f-0').css('display','none')


	 }

			if(id === '5'){
				$(obj).closest('.panel-body-panel').find('.kviz-block-fo-voprosi-all').html(`<div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Текст в выпадающем списке</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Текст в выпадающем списке" name="primer_otveta" value="">
                 </div>
			<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Варианты выпадающего списка</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="" name="variants" value="">
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
                 <input type="number" class="form-control form-control-text validation-val-kviz" placeholder="От" name="diapazon_dat_ot" value="">
                 </div>
				<div class="kviz-input-block col-xs-12 kviz-input-block-vopros-number kviz-input-block-vopros-number-left">
                 <input type="number" class="form-control form-control-text validation-val-kviz" placeholder="До" name="diapazon_dat_do" value="">
                 </div>
				 <div class="kviz-input-block col-xs-12 kviz-input-block-vopros-down ">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="шаг" name="diapazon_dat_step" value="">
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

                 <li><label class="add-number-new-checkbox">Все<input name="type_files" class="validation-val-kviz-checked" value="all" type="checkbox" ><span class="checkmark"></span></label></li>
                 <li><label class="add-number-new-checkbox">PNG<input  name="type_files" class="validation-val-kviz-checked" value="PNG" type="checkbox" ><span class="checkmark"></span></label></li>
                                  
                <li><label class="add-number-new-checkbox">JPG<input name="type_files" class="validation-val-kviz-checked" value="JPG" type="checkbox" ><span class="checkmark"></span></label></li>
       
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
                 <input type="text"  class="form-control form-control-text validation-val-kviz"  placeholder="Введите текст варианта ответа" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 }

	if(variant === '2'){
	obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros kviz-input-block-vopros-file"><div class="file-block"><input type="file" data-img="" name="file-`+Rand+`" id="file-`+Rand+`"
					  />
				<label for="file-`+Rand+`"><img src="/global_assets/images/icon_kviz/load-img.svg">
				</label></div>
                 <input type="text"  class="form-control form-control-text validation-val-kviz"  placeholder="Введите текст варианта ответа" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);
	 }

	if(id === '3'){

				obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Введите начальный текст" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg"></div>`);


	 }

	if(id === '4'){

					obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Текст в выпадающем списке" name="primer_otveta" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div> 
	 `);

	 }

	if(id === '5'){

					obj.append(`<div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="" name="variants" value=""><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
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
    $( "#sortable-panel-otobragenie" ).sortable({
		handle: ".panel-header .block-header-1",
      cancel: ".panel-toggle",
		});
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

	   $(document).on('click', '.operator-select-block ul li', function(event){

	  operator_select(event,this);
	  })

   $(document).on('click',  '.select-panel-blok ul li', function(event){

parent_select_panel(event,this)

	 })

   $(document).on('click',  '.select-panel-blok-file ul li', function(event){
		$(this).closest('ul').find('li').removeClass('active');
		$(this).closest('ul').find('li input').prop('checked', false);
		$(this).find('input').prop('checked', true);
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








 $(document).on('click', '.url-page ul li', function(event){
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


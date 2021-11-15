<style>
.page-title1.row {
	display:none;}
.panel.panel-flat .panel-heading{
	    display: none;
	}
	.table>thead>tr>th{
		    border-bottom: 1px solid #bbb;
    text-transform: uppercase;
    color: #999999;
    font-size: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: 0px !important;
    background: #fafafa;    
		}
		
	.panel-flat>.panel-heading+.panel-body {
    padding-top: 0;
    padding-left: 0px;
    padding-right: 0px;
}	
#pagin .pagination{
	    padding-left: 20px;
	
	}
.container__deshbord .panel {
    border-radius: 0px;
    background: no-repeat;
    box-shadow: none;
}
.h6.panel-title, h6.panel-title b{
	    padding-left: 4px;    font-weight: 500;
    font-size: 25px;
	}	
.panel-top-n{
	    margin-bottom: 16px;
    margin-top: 15px;
	}
.panel-top-n-table{
	padding: 0px;
    background: #fff;
    -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    border-radius: 10px;
	}				
</style>
<div class="col-md-12 panel-top-n" >

     <h6 class="panel-title"><b>Сценарии</b>
  </h6>
    @if(!in_array(auth()->user()->getMyCompany->tariff_id,[9,11,12,13]))    <div class="heading-elements">
                       <a class="btn btn-primary text-semibold" onClick="edit_routing()"  >Добавить
        сценарий</a>
                  
                </div>@endif
   
        
        
        </div>
    <div class="col-md-12 panel-top-n-table">
        <fieldset>
            <div class="table-responsive">
            <table class="table ">
              <thead>  <tr>
                   {{-- <td>Статус</td>--}}
                    <th style="border-radius: 10px 0px 0px 0px;">Название</th>
                    <th>Тип подмены</th>
                    <th>Номеров</th>
                {{--    <td>Точность</td>--}}
                    <th>Звонков</th>
                    <th>Дата создания</th>
                    <th>Звонок на</th>
                    <th>Действия</th>
                    <th style="border-radius: 0px 10px 0px 0px;">Действия</th>


                </tr></thead>
                <tbody id="for_table_scenarii">
                @foreach($routes as $rout)
             @include('widgets.render.calltracking.tr_scenarii')
                @endforeach
</tbody>
            </table></div>@if(auth()->user()->has_phones()==1)
                              @include('nowidget.calltracking2')
                          @endif
        </fieldset>
    </div>
    {{--Дополнительные поля--}}




    <script>
  $(document).on('click','#tab-add-nomer .dropdown li',function(e){
    e.stopPropagation();
	number = $('#imp_fee_numbers_list li input[type=checkbox]:checked').length;
	if(number > 0){
	$('#dLabel').html('Выбрано '+number+' номера');}
	else{
		$('#dLabel').html('Выберите добавленные номера');
		}

})
    function load_free_numbers3(id) {

        datatosend = {

            id:id,

            _token: $('[name=_token]').val(),
        }


        $.ajax({
            type: "POST",
            url: '/ajax/load_free_numbers3',
            data: datatosend,
            success: function (html1) {

                $('#imp_fee_numbers_list').html(html1);
				number = $('#imp_fee_numbers_list li input[type=checkbox]:checked').length;
				if(number > 0){
				$('#dLabel').html('Выбрано '+number+' номера');}	else{
		$('#dLabel').html('Выберите добавленные номера');
		}
            }
        })
    }

    function load_free_numbers2() {

        datatosend = {



            _token: $('[name=_token]').val(),
        }


        $.ajax({
            type: "POST",
            url: '/ajax/load_free_numbers',
            data: datatosend,
            success: function (html1) {

                $('#imp_fee_numbers_list').html(html1);
				number = $('#imp_fee_numbers_list li input[type=checkbox]:checked').length;
				if(number > 0){
				$('#dLabel').html('Выбрано '+number+' номера');}	else{
		$('#dLabel').html('Выберите добавленные номера');
		}
            }
        })
    }


/*
    $('#type-calltrecing-cont .btn-primary').on('click',function(){
        $('#type-calltrecing-cont .btn-primary').removeClass('active');
        $(this).addClass('active');
        $('.ar_tip_calltrack').val( $(this).attr('data-val'));

        $('#setings-add-nomer_val').val($(this).attr('data-id'));alert('1');


    })
*/



    $('#setings-add-nomer .btn-primary').on('click',function(){

        $('#setings-add-nomer .btn-primary').removeClass('active');
        $('#setings-add-nomer-content .tab-content-block').removeClass('active');
        $('#setings-add-nomer-content #'+$(this).attr('data-id')+'').addClass('active');
        $(this).addClass('active');
        $('#setings-add-nomer_val').val($(this).attr('data-id'));

    })

    $(document).on('click','.add_scenarij',function () {
        $.ajax({
            type: "POST",
            url: '/asterisk_ajax/0',
            data: $("#create_routing_form").serialize(),
			 beforeSend: function( ) {
				 $('.add_scenarij').addClass('add_scenarij2');
				  $('.add_scenarij').addClass('loading');
				 
				/* $('.add_scenarij').html('<i class="icon-spinner2 spinner position-left"></i>')*/
				 
				 
				 },
            success: function (html1) {
				$('.add_scenarij').removeClass('add_scenarij2');
				$('.add_scenarij').removeClass('loading');
			
				/*$('.add_scenarij').html('Сохранить сценарий')*/
                if(html1['error']==0){
                    /*mynotif('Успешно','Изменения успешно сохранены','success');*/ $('#WidgetModal3').modal('hide');
                    if(html1['id']==0){
                        $('#for_table_scenarii').append(html1['content'])
                    }else{
                        $('#idsr'+html1['id']).remove();
                        $('#for_table_scenarii').append(html1['content'])

                    }

                }

                if(html1['error']==1){
                    mynotif('Ошибка',html1['message'],'danger');
                }


            }
        })

    });
    function myModalBox_add_rout_safe() {






    }
	
	$(document).on('change', '.select4-list', function(){
	val = $('option:selected',this).val()
	sel = $(this).closest('.on_of_nambers').find('.form-control-text');
	sel.inputmask('remove');
	$(this).closest('.on_of_nambers').find('.neiros-sip-show').css('display','none')
	$(this).closest('.on_of_nambers').find('.form__block_sip_neiros').css('display','none')
	if(val === '0'){
		sel.val('')
		sel.attr('placeholder','+7 (___) ___-__-__')
		
		sel.inputmask("+7 (999) 999-99-99", {"placeholder": "+7 (___) ___-__-__"});;
		}
	if(val === '1'){
		sel.attr('placeholder','')
		}
	if(val === '2'){
		sel.attr('placeholder','')
		$(this).closest('.on_of_nambers').find('.neiros-sip-show').css('display','block')
		$(this).closest('.on_of_nambers').find('.form__block_sip_neiros').css('display','block')
		
		
		}		
	
	}) 
	
</script>

@include('modal.myModalBox_add_rout')

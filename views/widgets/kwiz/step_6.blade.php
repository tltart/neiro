<div id="collapse_kviz_6" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading_kviz_5" aria-expanded="false" style="height: 0px;">
<style>
.url-page .add-number-new {
    width: 250px; }
	
	.url-page .add-user-new .dropdown-menu {
    width: 250px;
    min-width: 250px;
}
.tab-content-block .url-page .form__block {
    width: 367px; }	
</style>
<? 	$rules_array = array(
	 array( 
	 	"id" => '1',
		"type" => 'like',
		"rules" => '%LIKE%',
		"value" => 'содержит строку',
	 ),
	 array( 
	 	"id" => '2',
		"type" => 'not_like',
		"rules" => 'NOT%LIKE%',
		"value" => 'не содержит строку',
	 ),
	 array( 
	 	"id" => '3',
		"type" => 'correct',
		"rules" => '==',
		"value" => 'это точно',
	 ),
	 array( 
	 	"id" => '4',
		"type" => 'no_correct',
		"rules" => '!=',
		"value" => 'не являеться',
	 )
	); 
	
	
	?>


        <div class="panel-body" style="padding-top:0px">
        
              
            <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                <div class="tab-content-block active">
  <div class="col-xs-12 zvonok-block" style="margin-top:0px; margin-bottom: 20px;">
                        <div class="form__block " style="width:auto">
                            <div class="text-form-block">Показывать квиз автоматически:</div>
                        </div>
                        <div class="form__block" style="    width: 137px; margin-top: 8px;">
                        
                            <span class="switchery-xs"><input type="checkbox" class="js-switch" 
                                                              name="on_off" <? if(isset($kwiz['step6']['on_off'])){ 
															  if($kwiz['step6']['on_off'] == true){ echo 'checked';} }?> value="1" ></span>


                        </div>
                    </div>
       <div class="show-kviz-container-time" style="<? if(isset($kwiz['step6']['on_off'])){ 
															  if($kwiz['step6']['on_off'] == true){ echo 'display:block;';}else{echo 'display:none;';}}else{echo 'display:none;';}?>">
       <div class="col-xs-12 zvonok-block" style="margin-top:0px; margin-bottom: 0px;">
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">Время появление квиза</div>
                            </div>
                            <div class="form__block " style="width:65px">

                                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-control form-control-text text-left" placeholder="10" name="time" value="<? if(isset($kwiz['step6']['time'])){ echo $kwiz['step6']['time'];}?>">
                            </div>
                            <div class="form__block " style="width:auto">
                                <div class="text-form-block">секунд</div>
                            </div>

                        </div>
                        
                      <div class="col-xs-12 zvonok-block" style="margin-top:0px; margin-bottom: 20px;">
                        <div class="form__block " style="width:auto">
                            <div class="text-form-block">Показывать посетителю 1 раз в день:</div>
                        </div>
                        <div class="form__block" style="    width: 137px; margin-top: 8px;">
                           
                            <span class="switchery-xs"><input type="checkbox" class="js-switch" 
                                                              name="everyday" <? if(isset($kwiz['step6']['everyday'])){ 
															  if($kwiz['step6']['everyday'] == true){ echo 'checked';} ;}?> value="1" ></span>


                        </div>
                    </div>                   
                        
           </div>             
       
<div class="text-h1-fo-select-panel" style="font-family: 'Raleway Medium';
    color: #333333;
    font-size: 15px;">Адрес текущей страницы</div>
                    <div class="show-chat-operator-all">
           
           <? if(isset($kwiz['step6']['rules'])){ 
		   	
		   	if(!empty($kwiz['step6']['rules'])){
				
				foreach($kwiz['step6']['rules'] as $step6){ 
				$pravilo = '';
				if(isset($step6['pravilo'])){
					
					$pravilo = $step6['pravilo'];
					}
			
				?>
                <div class="pravilo-block col-xs-12">
                                            <div class="select-panel-blok col-sm-5" style="display:none;">
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Адрес текущей страницы</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                         <?php /*?>                               <li class="t__1"><label class="add-number-new-checkbox">Время на текущей странице<input value="time-page" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
           <?php /*?>                                             <li class="t__2"><label class="add-number-new-checkbox">Время на сайте<input value="time-site" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
                                                        <li class="t__3 active "><label class="add-number-new-checkbox">Адрес текущей страницы<input value="url-page" checked="" type="checkbox" name="url_page"><span class="checkmark"></span></label></li>
                                                       <?php /*?> <li class="t__4"><label class="add-number-new-checkbox">Повторный пользователь<input value="return-user" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
                                                    </ul>
                                                </div>



                                            </div>




                                            <div class="col-sm-7 zvonok-block two-panel-result-show select-panel-blok-time time-page" style="display: none;">
                                                <div class="form__block " style="width:auto">
                                                    <div class="text-form-block">больше</div>
                                                </div>
                                                <div class="form__block " style="width:65px">

                                                    <input type="text" class="form-control form-control-text" placeholder="00" name="time[355]" value="10">
                                                </div>

                                                <div class="form__block " style="width:auto">
                                                    <div class="text-form-block">сек</div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 zvonok-block two-panel-result-show select-panel-blok-time url-page" style="display: block; padding-left:0px;">
                                            
                                            
                                            
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input" >
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><? 
										$rule_s = 'Выбрать правило';			
													foreach($rules_array as $rule){
											
							if($rule['type'] == $pravilo){
											 $rule_s = $rule['value'];
												}
											
											}
											
											echo  $rule_s; ?></button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                    <? foreach($rules_array as $rule2){
													 	 ?> 	
														
														
                                      <li class="<? if($rule2['type'] == $pravilo){
											   echo  'active';
											   
												} ?>"><label class="add-number-new-checkbox"><?=$rule2['value']?><input <? if($rule2['type'] == $pravilo){
											   echo  'checked';
											   
												} ?> type="checkbox" name="<?=$rule2['type']?>" value="<?=$rule2['rules']?>" ><span class="checkmark"></span></label></li>
                                    <?		
											}?>
                                                      
                                                  

                                                    </ul>
                                                </div>

                                                <div class="form__block ">

                                                    <input type="text" class="form-control form-control-text" placeholder="" name="value" value="<? if(isset($step6['url'])){ echo $step6['url'];} ?>">
                                                </div>



                                            </div>



                                            <div class="delete_pravilo"><img src="/global_assets/images/icon/user/trash.svg"></div>
                                        </div>
                
                <?
					
				
				}
						
				
				}
		   
		   } else{
			   
			   ?>
			   <div class="pravilo-block col-xs-12">
                                            <div class="select-panel-blok col-sm-5" style="display:none;">
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input">
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Адрес текущей страницы</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                         <?php /*?>                               <li class="t__1"><label class="add-number-new-checkbox">Время на текущей странице<input value="time-page" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
           <?php /*?>                                             <li class="t__2"><label class="add-number-new-checkbox">Время на сайте<input value="time-site" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
                                                        <li class="t__3 active"><label class="add-number-new-checkbox">Адрес текущей страницы<input value="url-page" checked="" type="checkbox" name="url_page"><span class="checkmark"></span></label></li>
                                                       <?php /*?> <li class="t__4"><label class="add-number-new-checkbox">Повторный пользователь<input value="return-user" type="checkbox" name="condition[355]"><span class="checkmark"></span></label></li><?php */?>
                                                    </ul>
                                                </div>



                                            </div>




                                            <div class="col-sm-7 zvonok-block two-panel-result-show select-panel-blok-time time-page" style="display: none;">
                                                <div class="form__block " style="width:auto">
                                                    <div class="text-form-block">больше</div>
                                                </div>
                                                <div class="form__block " style="width:65px">

                                                    <input type="text" class="form-control form-control-text" placeholder="00" name="time[355]" value="10">
                                                </div>

                                                <div class="form__block " style="width:auto">
                                                    <div class="text-form-block">сек</div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 zvonok-block two-panel-result-show select-panel-blok-time url-page" style="display: block; padding-left:0px;">
                                            
                                            
                                            
                                                <div class="dropdown add-user-new add-number-new select-panel-blok-input" style="display: block;">
                                                    <button class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">содержит строку</button>
                                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                        <li class="active"><label class="add-number-new-checkbox">содержит строку<input type="checkbox" name="like" value="%LIKE%" checked=""><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не содержит строку<input type="checkbox" name="not_like" value="NOT%LIKE%"><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">это точно<input type="checkbox" name="correct" value="=="><span class="checkmark"></span></label></li>
                                                        <li><label class="add-number-new-checkbox">не являеться<input value="!=" type="checkbox" name="no_correct"><span class="checkmark"></span></label></li>

                                                    </ul>
                                                </div>

                                                <div class="form__block ">

                                                    <input type="text" class="form-control form-control-text" placeholder="" name="value" value="">
                                                </div>



                                            </div>



                                            <div class="delete_pravilo"><img src="/global_assets/images/icon/user/trash.svg"></div>
                                        </div>
			   
			  <? } ?>
           
           

                        

                    </div>

                    <div class="col-xs-12 add_sourse_block">
                        <div class="add_sourse add_time_call" id="add_pravilo_kviz" >
                            <div class="cont__left">+</div>
                            <div class="cont_right">Добавить правило</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="banel-body-footer">
                <button type="button" class="btn btn-primary save-setings  save-setings-kviz ">Сохранить</button>
            </div>

         
        </div>
    </div>
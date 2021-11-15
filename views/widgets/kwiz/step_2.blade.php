<div id="collapse-kviz-2" class="panel-collapse collapse" role="tabpane1"
     aria-labelledby="heading-kviz-2" aria-expanded="false" style="height: 0px;">


	<? 
	$tip_oprosa_array = array(
	 array( 
	 	"id" => '1',
		"type" => 'var-otvetov',
		"value" => 'Варианты ответов',
	 ),
	 array( 
	 	"id" => '2',
		"type" => 'var-s-kartinami',
		"value" => 'Варианты с картинками',
	 ),
	 array( 
	 	"id" => '3',
		"type" => 'var-i-kartinka',
		"value" => 'Варианты и картинка',
	 ),
	 array( 
	 	"id" => '4',
		"type" => 'pole-dlya-vvoda',
		"value" => 'Свое поле для ввода',
	 ),
	 array( 
	 	"id" => '5',
		"type" => 'vipadayshii-spisok',
		"value" => 'Выпадающий список',
	 ),
	 array( 
	 	"id" => '6',
		"type" => 'data',
		"value" => 'Дата',
	 ),
	 array( 
	 	"id" => '7',
		"type" => 'polzynok',
		"value" => 'Ползунок',
	 ),
	 array( 
	 	"id" => '8',
		"type" => 'time-page',
		"value" => 'Загрузка файлов',
	 )
	);
	
	
	
	?>
    <div class="panel-body" style="padding-top:0px">

        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
            <div class="tab-content-block active">


                <div class="all_time_block">
                </div>
                <div id="sortable-panel-otobragenie">
                
                    

<? 
$add_etap_kviz = 'block';
if(isset($kwiz['step2'])){
$i = 0;

foreach($kwiz['step2'] as $step2){ 



 ?>

<div class="panel-otobragenie col-xs-12">
                        <form name="formawork">
                            <div class="panel-header">
                                <div class="block-header block-header-1"><img
                                            src="/global_assets/images/icon_chat/menu_gray.svg">
                                </div>
                                <div class="block-header block-header-2">
                                <span class="insert-img-text-k"> 
                                <? if(isset($step2['tip_oprosa'])){
									$tip_oprosa = $step2['tip_oprosa'];
										foreach($tip_oprosa_array as $opros){
											
											if($opros['type'] == $tip_oprosa){
													$tip_oprosa_img = 't_k_'.$opros['id'].'_hover';
													$tip_oprosa_text = $opros['value'];
												}
											
											}
													
										?>
                                        <img src="/global_assets/images/icon_kviz/vibor-varianta/<?=$tip_oprosa_img?>.png"><span class="text__header"><?=$tip_oprosa_text?></span>
                                        <?	
									 }
								else{echo '<span class="text__header">Выберите тип вопроса</span>';
									}?>
                                            
                                            
                                </span>
                                            <span
                                            class="switchery-xs-new"><input  <? if(isset($step2['optional'])){ if($step2['optional'] == true){ echo 'checked';}} ?>
                                                                            type="checkbox"
                                                                            class="js-switch validation-val-kviz-checked" name="optional"></span>
                                </div>
                                <div class="block-header block-header-3 <?php /*?><? if($i == 0){echo 'active'; }?><?php */?>"><img
                                            src="/images/icon/chat/3.png"></div>
                                <div class="block-header block-header-4"><img
                                            src="/global_assets/images/icon_chat/file_gray.svg">
                                </div>
                                <div class="block-header block-header-5 <? if($i == 0){echo 'no-delete'; }?> "><img
                                            src="/global_assets/images/icon/user/trash.svg">
                                </div>


                            </div>

                            <div class="panel-body-panel col-xs-12 start-page-kviz"
                                 style="<? if($i == 0){echo 'display: none;'; }else{ echo 'display: none;';}?>">
							
                                <div class="kviz-vibor-start-step" style="<? if(isset($step2['tip_oprosa'])){ echo 'display:none;';}?>"  >
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

                                <div class="hidden-type-oprosa-down" style="<? if(!isset($step2['tip_oprosa'])){ echo 'display:none;';}?>">

                                    <div class="kviz-input-block">
                                        <label>Вопрос</label>
                                        <input type="text"
                                               class="form-control form-control-text validation-val-kviz"
                                               placeholder="" name="question" value="<?=$step2['question']?>">
                                    </div>

                                    <div class="text-panel-blok-kviz text-panel-blok">
                                        <label>Подсказка консультанта</label>
                                        <textarea class="validation-val-kviz" name="massage"><?=$step2['massage']?></textarea>
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
                                                        aria-expanded="false">
                                                       <? 
													
													   if(isset($tip_oprosa_img)){
														   	echo '<img src="/global_assets/images/icon_kviz/vibor-varianta/'.$tip_oprosa_img.'.png"> '.$tip_oprosa_text;
														   }
														   else{ echo 'Выберите тип опроса';}
														   ?>
                                                      
                                                </button>
                                                <ul class="dropdown-menu dropdown-kviz-step-2"
                                                    aria-labelledby="dLabel">
											<? 	foreach($tip_oprosa_array as $oprosy){
											
											if(isset($tip_oprosa)){
													if($tip_oprosa == $oprosy['type']){
													$active = 'active';
													$checked = 'checked'; }
													else{
														$active = '';
													$checked = '';
														}
												}
												else{
													$active = '';
													$checked = '';
													}
											
												?>
                                                <li class="t_k t_k_<?=$oprosy['id']?> <?=$active?>" data-img="<?=$oprosy['id']?>">
                                                        <label class="add-number-new-checkbox"><?=$oprosy['value']?><input
                                                                    value="<?=$oprosy['type']?>"
                                                                    type="checkbox" <?=$checked?> ><span
                                                                    class="checkmark"></span></label>
                                                    </li>
                                                <?
											
											} ?>
                                                    
                                                    
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="kviz-block-fo-voprosi-all">
                                    <? 
								$style = '';
								$style_img = '';	
								$style_pole = '';
								$style_0 = '';
								$style_3 = '';
								$style_4 = '';
								$data_img = '';
							 if(isset($step2['tip_oprosa'])){	
									
									$tip_oprosa2 = $step2['tip_oprosa'];
										if($tip_oprosa2 === 'var-otvetov'){
											foreach($step2['variants'] as $variants){
												$variants_src = '';
											if(isset($variants['src'])){
												$variants_src = $variants['src'];
												
												}
											?> <div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
											 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Введите текст варианта ответа" name="variants" value="<?=$variants['text']?>"><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
											 </div> 
								<?
								 }
											} 
							
										if($tip_oprosa2 === 'var-s-kartinami'){
											foreach($step2['variants'] as $variants){
												$uniqid = uniqid().uniqid();
															$variants_src = '';
											if(isset($variants['src'])){
												$variants_src = $variants['src'];
												
												}
												?>
                                             
                                            <div class="kviz-input-block col-xs-12 kviz-input-block-vopros kviz-input-block-vopros-file"><div class="file-block"><input type="file" name="file<?=$uniqid?>" id="file<?=$uniqid?>" data-img="<?=$variants_src?>">
											<label for="file<?=$uniqid?>" class="<? if($variants_src != ''){ echo 'active';} ?>"><img src="/global_assets/images/icon_kviz/load-img.svg">
											</label></div>
											 <input type="text" class="form-control form-control-text validation-val-kviz"  placeholder="Введите текст варианта ответа" name="variants" value="<?=$variants['text']?>"><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
											 </div> 
								 <?
								 }
								 }
										if($tip_oprosa2 === 'var-i-kartinka'){
											$style_img = 'display:block;';
											
												?>
										<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Начальны текст</div>
                                        <? foreach($step2['variants'] as $variants){ 
																$variants_src = '';
											if(isset($variants['src'])){
												$variants_src = $variants['src'];
												
												}
										$data_img = $variants_src;
										?>
                              <div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Введите текст варианта ответа" name="variants" value="<?=$variants['text']?>"><img class="delete-vopros-kviz" src="/global_assets/images/icon_kviz/trash.svg">
                 </div>               
                                              
								 <?
								 } }
							
										if($tip_oprosa2 === 'pole-dlya-vvoda'){
									$style_pole = 'display:none;';
									$style = 'display:none;';	?>
                                        <div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Текст в выпадающем списке</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
											 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Текст в выпадающем списке" name="primer_otveta" value="<?=$step2['primer_otveta']?>">
											 </div> 
								<?
								 }
							
										if($tip_oprosa2 === 'vipadayshii-spisok'){
										?>
                                        <div class="descr-text-all">Здесь пользователь вместо выбора вариантов ответа увидит поле для ввода значения</div><div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Текст в выпадающем списке</div><div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
											 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="Текст в выпадающем списке" name="primer_otveta" value="<?=$step2['primer_otveta']?>">
											 </div>
										<div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Варианты выпадающего списка</div>
                                        
                                       <? foreach($step2['variants'] as $variants){ ?> 
                                        <div class="kviz-input-block col-xs-12 kviz-input-block-vopros">
                                        
											 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="" name="variants" value="<?=$variants['text']?>">
											 </div>	 
                                             
                                             
											  
							<?
				}
								 }
							
								if($tip_oprosa2 === 'data'){ 
								$style_pole = 'display:none;';
								$style = 'display:none;';
								
								$style_3 = 'display:block;';
								$style_4 = 'display:block;';
								
								?>
                                        
                                        <div class="descr-text-all">Пользователю будет предложено выбрать дату</div>
							
							<?
							
								 }
							
						if($tip_oprosa2 === 'polzynok'){ 
						$style_pole = 'display:none;';
						$style = 'display:none;';
						$style_0 = 'display:block;';
						$style_3 = 'display:none;';
						$style_4 = 'display:none;';
						
						?>
									
                                            <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Выбор значения из диапазона</div>
											<div class="kviz-input-block col-xs-12 kviz-input-block-vopros-number">
											 <input type="number" class="form-control form-control-text validation-val-kviz" placeholder="От" name="diapazon_dat_ot" value="<?=$step2['diapazon_dat_ot']?>">
											 </div>
											<div class="kviz-input-block col-xs-12 kviz-input-block-vopros-number kviz-input-block-vopros-number-left">
											 <input type="number" class="form-control form-control-text validation-val-kviz" placeholder="До" name="diapazon_dat_do" value="<?=$step2['diapazon_dat_do']?>">
											 </div>
											 <div class="kviz-input-block col-xs-12 kviz-input-block-vopros-down ">
											 <input type="text" class="form-control form-control-text validation-val-kviz" placeholder="шаг" name="diapazon_dat_step" value="<?=$step2['diapazon_dat_step']?>">
											 </div> 
											 
								<? 
				
							
							
								 }
								
								if($tip_oprosa2 === 'time-page'){
									$style = 'display:none;';
									 foreach($step2['variants'] as $variants){
								$type_files = $variants['type_files']; 
								 
							 }
								 ?>
                              <div class="descr-text-all">Здесь пользователь может загрузить свой собственный файл</div>
							<div  class="select-panel-blok-file col-xs-12" >
								<div class="dropdown add-user-new add-number-new select-panel-blok-input">
										<button  class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><? if(isset($type_files)){ echo $type_files; }else{ echo "Выберите тип файлов";}?></button>
										 <ul class="dropdown-menu"  aria-labelledby="dLabel">
							
								 
											 <li class="<? if($type_files =='all'){ echo 'active';} ?>"><label class="add-number-new-checkbox">Все<input name="type_files" class="validation-val-kviz-checked" value="all" <? if($type_files =='all'){ echo 'checked';} ?> type="checkbox" ><span class="checkmark"></span></label></li>
											 <li class="<? if($type_files =='PNG'){ echo 'active';} ?>"><label class="add-number-new-checkbox">PNG<input  name="type_files" class="validation-val-kviz-checked" <? if($type_files =='PNG'){ echo 'checked';} ?> value="PNG" type="checkbox" ><span class="checkmark"></span></label></li>
															  
											<li class="<? if($type_files =='JPG'){ echo 'active';} ?>"><label class="add-number-new-checkbox">JPG<input name="type_files" class="validation-val-kviz-checked" value="JPG" type="checkbox" <? if($type_files =='JPG'){ echo 'checked';} ?> ><span class="checkmark"></span></label></li>
								   
										 </ul>
								</div>
									</div>
												<?
							
							
								 }
								 
								  }
								 ?>
                                    </div>

                                    <div class="col-xs-12 add_sourse_block" >
                                        <div class="add_sourse add_time_call" style="<?=$style?>"
                                             data-variant="1" id="add_variant">
                                            <div class="cont__left">+</div>
                                            <div class="cont_right">Добавить Вариант</div>
                                        </div>
                                    </div>
                                    <? $uniqid = uniqid(); ?>
                                    
                                    <div class="col-xs-12 footer-kviz-block-type-image" style="<?=$style_img?>">
                                        <div class="file-block"><input type="file"
                                                                       name="file<?=$uniqid?>"
                                                                       id="<?=$uniqid?>" data-img="<?=$data_img?>" >
                                            <label for="<?=$uniqid?>"><img
                                                        src="/global_assets/images/icon_kviz/load-img.svg">
                                                <div>Загрузить<br>
                                                    изображение
                                                </div>
                                            </label></div>
                                          <div class="file-block-img">  
                                        <? 
											if($data_img != ''){ ?>
												
												<img src="<?=$data_img?>">
											
											<?	}
										?>    
                                        	</div>    
                                    </div>


                                    <div class="col-xs-12 footer-kviz-block-type">
                                        <div class="col-xs-6 block-kviz-f-0" style="<?=$style_0?>"><label
                                                    class="add-number-new-checkbox">Выбор
                                                диапазона (2 ползунка)
                                                <input type="checkbox" name="diapazon_polzunka"
                                                       value="Выбор диапазона (2 ползунка)"
                                                      <? if($step2['diapazon_polzunka'] == true){ echo 'checked'; }?> class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 block-kviz-f-1" style="<?=$style_pole?>"><label
                                                    class="add-number-new-checkbox">Можно
                                                несколько
                                                <input type="checkbox" name="neskolko"
                                                       value="Несколько" <? if($step2['neskolko'] == true){ echo 'checked'; }?> class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 block-kviz-f-3" style="<?=$style_3?>">
                                            <label class="add-number-new-checkbox">Выбор
                                                диапазона дат
                                                <input type="checkbox" name="vibor_diapazon_dat"
                                                       value="Выбор диапазона дат" <? if($step2['vibor_diapazon_dat'] == true){ echo 'checked'; }?> class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                        <div class="col-xs-6 block-kviz-f-4" style="<?=$style_4?>"><label
                                                    class="add-number-new-checkbox">Выбор
                                                времени
                                                <input type="checkbox" name="vibor_vremeni"
                                                       value="Выбор времени" <? if($step2['vibor_vremeni'] == true){ echo 'checked'; }?> class="validation-val-kviz-checked">
                                                <span class="checkmark"></span>
                                            </label>


                                        </div>
                                        <div class="col-xs-6 block-kviz-f-2">
                                            <label class="add-number-new-checkbox">Необязательный
                                                вопрос
                                                <input type="checkbox" name="neobbyazatelnii_vopros"
                                                       value="Необязательный вопрос" class="validation-val-kviz-checked" <? if($step2['neobbyazatelnii_vopros'] == true){ echo 'checked'; }?>>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>


                                    </div>


                                </div>


                                <div class="banel-body-footer">
                                    <button type="button"
                                            class="btn btn-primary save-setings2  save-setings-kviz" style="<? if(!isset($step2['tip_oprosa'])){ echo 'display:none;';}?>">
                                        Сохранить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
                    
                    
                    <? 
				
				$i++;
					}
					
					
					}
					else{
						
					$add_etap_kviz = 'none';	
						 ?>
                     <? $uniqid = uniqid(); ?>
					
                    <div class="panel-otobragenie col-xs-12">
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
                                                                            class="js-switch validation-val-kviz-checked" name="optional"></span>
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
                                        <label>Текст сообщения</label>
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
                                                                       name="file<?=$uniqid?>"
                                                                       id="file<?=$uniqid?>">
                                            <label for="file<?=$uniqid?>"><img
                                                        src="/global_assets/images/icon_kviz/load-img.svg">
                                                <div>Загрузить<br>
                                                    изображение
                                                </div>
                                            </label></div>
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
                    </div>
                    
                    	
						
<?						}
					 ?>
					
                    
                    
                    


				
				
					

                </div>


                <div class="col-xs-12 add_sourse_block add_sourse_block__chat"
                     style=" display:<?=$add_etap_kviz?>;">
                    <div class="add_sourse add-etap-kviz">
                        <div class="cont__left">+</div>
                        <div class="cont_right">ДОБАВИТЬ ВОПРОС</div>
                    </div>
                </div>

            </div>


        </div>


    </div>


</div>
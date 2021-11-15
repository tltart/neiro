<div id="collapse_kviz_3" class="panel-collapse collapse" role="tabpane1"
     aria-labelledby="heading_kviz_3" aria-expanded="false" style="height: 0px;">

<? 

$images_tupe = array(
	 array( 
	 	"img" => '1',
		"src" => 'catalog',
		"name" => 'Каталог',
		"value" => 'katalog'
	 ),
	array( 
	 	"img" => '2',
		"src" => 'cupon',
		"name" => 'Купон на скидку',
		"value" => 'cupon'
	 ),
	 array( 
	 	"img" => '3',
		"src" => 'price',
		"name" => 'Прайс',
		"value" => 'price'
	 ),
	 array( 
	 	"img" => '4',
		"src" => 'svoi',
		"name" => 'Свой',
		"value" => 'svoi'
	 ),
	);

$data_color = array(
array("color" => '#FDFFC0'),
array("color" => '#FFFD99'),
/*array("color" => '#FFF32E'),*/
array("color" => '#FFEEC2'),
/*array("color" => '#FFD87B'),*/
array("color" => '#FFE3E2'),
/*array("color" => '#FFD2D4'),
array("color" => '#FEA5A7'),*/
array("color" => '#DEEEFE'),
/*array("color" => '#CCE6FF'),
array("color" => '#AFD4FF'),*/
array("color" => '#EFFFC1'),
/*array("color" => '#E5FF9A'),*/
array("color" => '#F9E5FE'),
array("color" => '#F5CAFF'),
/*array("color" => '#D5D3FA'),
array("color" => '#EFA9FF'),*/
array("color" => '#F5F5F5'),
array("color" => '#ECEDEF'),
/*array("color" => '#DDE0E7'),*/
);

$text_color = array(
array("color" => '#fff'),
array("color" => '#000')
);

$data_img = '';
$name = '';
$dolgnost = '';
$prise1 = '1000';
$prise2 = '500';
$type_skidki = 'Растущая';
$name_bonus_1 = '';
$type_bonus_1 = '';
$color_bonus_1 = '#AFD4FF';
$color_text_bonus_1 = '';
$name_bonus_2 = '';
$type_bonus_2 = '';
$color_bonus_2 = '#AFD4FF';
$color_text_bonus_2 = '';
$active_bonus_2 = '';
$data_img_bonus_1 = '';
$data_img_bonus_2 = '';

if(isset($kwiz['step3']['konsultant']['name'])){
	$name = $kwiz['step3']['konsultant']['name'];
}
if(isset($kwiz['step3']['konsultant']['dolgnost'])){
	$dolgnost = $kwiz['step3']['konsultant']['dolgnost'];
}	
if(isset($kwiz['step3']['konsultant']['img'])){
	 $data_img = $kwiz['step3']['konsultant']['img'];
  }
if(isset($kwiz['step3']['motivaciya']['prise1'])){
	$prise1 = $kwiz['step3']['motivaciya']['prise1'];
	}
if(isset($kwiz['step3']['motivaciya']['prise2'])){
	$prise2 = $kwiz['step3']['motivaciya']['prise2'];
	}
if(isset($kwiz['step3']['motivaciya']['type-skidki'])){
	
	$type_skidki = $kwiz['step3']['motivaciya']['type-skidki'];
	}
	
if(isset($kwiz['step3']['bonus']['first']['name'])){
	$name_bonus_1 = $kwiz['step3']['bonus']['first']['name'];
	}
if(isset($kwiz['step3']['bonus']['first']['type'])){
	$type_bonus_1 = $kwiz['step3']['bonus']['first']['type'];
	}
	
if(isset($kwiz['step3']['bonus']['first']['color'])){
	$color_bonus_1 = $kwiz['step3']['bonus']['first']['color'];
	}
	
if(isset($kwiz['step3']['bonus']['first']['color-text'])){
	$color_text_bonus_1 = $kwiz['step3']['bonus']['first']['color-text'];
	}	
	
		
if(isset($kwiz['step3']['bonus']['first']['img'])){
	$data_img_bonus_1 = $kwiz['step3']['bonus']['first']['img'];
	}	
	
	
	
if(isset($kwiz['step3']['bonus']['finish']['name'])){
	$name_bonus_2 = $kwiz['step3']['bonus']['finish']['name'];
	}
if(isset($kwiz['step3']['bonus']['finish']['type'])){
	$type_bonus_2 = $kwiz['step3']['bonus']['finish']['type'];
	}
	
if(isset($kwiz['step3']['bonus']['finish']['color'])){
	$color_bonus_2 = $kwiz['step3']['bonus']['finish']['color'];
	}	
	
if(isset($kwiz['step3']['bonus']['finish']['color-text'])){
	$color_text_bonus_2 = $kwiz['step3']['bonus']['finish']['color-text'];
	}		
	
	
if(isset($kwiz['step3']['bonus']['finish']['active'])){
	$active_bonus_2 = $kwiz['step3']['bonus']['finish']['active'];
	}	
	
if(isset($kwiz['step3']['bonus']['finish']['img'])){
	$data_img_bonus_2 = $kwiz['step3']['bonus']['finish']['img'];
	}	
	
	
 ?>
    <div class="panel-body" style="padding-top:0px">

        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">

            <div class="panel-otobragenie panel-otobragenie-kviz-dop col-xs-12 kviz-3-konsultant">
                <form name="formawork">
                  
                    <div class="panel-header">
                        <div class="block-header block-header-1"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-1.svg"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-1-hover.svg"
                                    class="active"></div>
                        <div class="block-header block-header-2"><span
                                    class="insert-img-text-k"> <span class="text__header">Консультант</span></span><span
                                    class="switchery-xs-new"><input <? if(isset($kwiz['step3']['konsultant']['is_checked'])){if($kwiz['step3']['konsultant']['is_checked'] == true){echo 'checked';} }?> type="checkbox"
                                                                   class="js-switch validation-val-kviz-checked"
                                                                     name="is_checked"></span></div>
                        <div class="block-header block-header-3 active"><img
                                    src="/images/icon/chat/3.png"></div>


                    </div>

                    <div class="panel-body-panel col-xs-12 start-page-kviz"
                         style="display: none;">

                        <div class="kviz-input-block">
                            <label>Имя</label>
                            <input type="text" class="form-control form-control-text validation-val-kviz"
                                   placeholder="" name="name" value="<?=$name?>">
                        </div>

                        <div class="kviz-input-block">
                            <label>Должность</label>
                            <input type="text" class="form-control form-control-text validation-val-kviz"
                                   placeholder="" name="dolgnost" value="<?=$dolgnost?>">
                        </div>
  <? $uniqid = uniqid();

   ?>
                        <div class="col-xs-12 footer-kviz-block-type-image"
                             style="display:block; margin-top:15px;">
                            <div class="file-block" style="float: left;"><input
                                        type="file" name="file<?=$uniqid?>" data-img="<?=$data_img?>" id="file<?=$uniqid?>">
                                <label for="file<?=$uniqid?>" ><img
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
                        <div class="banel-body-footer">
                            <button type="button" class="btn btn-primary save-setings2   save-setings-kviz">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-otobragenie panel-otobragenie-kviz-dop col-xs-12 kviz-3-motivaciya">
                <form name="formawork">
                   
                    <div class="panel-header">
                        <div class="block-header block-header-1"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-2.svg"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-2-hover.svg"
                                    class="active"></div>
                        <div class="block-header block-header-2"><span
                                    class="insert-img-text-k"> <span class="text__header">Мотивация скидки</span></span><span
                                    class="switchery-xs-new"><input <? if(isset($kwiz['step3']['motivaciya']['is_checked'])){if($kwiz['step3']['motivaciya']['is_checked'] == true){echo 'checked';} }?> type="checkbox"
                                                                    class="js-switch validation-val-kviz-checked"
                                                                     name="is_checked"></span></div>
                        <div class="block-header block-header-3 active"><img
                                    src="/images/icon/chat/3.png"></div>


                    </div>

                    <div class="panel-body-panel col-xs-12 start-page-kviz"
                         style="display: none;">

                        <div class="descr-text-all"
                             style="line-height: 1; margin-bottom:0px;">Предложите клиенту
                            скидку за прохождение теста. Скидка поможет увеличить конверсию.
                            Скидка будет учитываться в результатах, если вы указали
                            стоимость товара или услуги.
                        </div>
                        <div class="button-top-all-cont">
                            <div class="button-top-all button-top-row  <? if($type_skidki == 'Растущая') echo 'active';?>">Растущая</div>
                            <div class="button-top-all button-down-row <? if($type_skidki == 'Падающая') echo 'active';?>">Падающая</div>


                            <div class="kviz-input-block kviz-input-block-button-top">
                                <input type="text" class="form-control form-control-text validation-val-kviz"
                                       placeholder="" id="button-top-all-input" name="prise1"
                                       value="<?=$prise1?>">
                                <div class="curency-input">руб.</div>
                            </div>

                            <div class="kviz-input-block">
                                <input type="text" class="form-control form-control-text validation-val-kviz"
                                       placeholder="введите сумму при каждом вопросе"
                                       id="button-top-all-input2" name="prise2" value="<?=$prise2?>">
                            </div>

                        </div>
                        <div class="button-top-all-cont-right">
                            <div class="skidka-btn">
                                <div class="skidka-btn-left">
                                    <div class="skidka-text-top">Ваша скидка</div>
                                    <div class="skidka-price-top"><span><?=$prise1?></span> Р</div>
                                </div>
                                <div class="skidka-btn-right">
                                    <div class="skidka-img-top"><img
                                                src="/global_assets/images/icon_kviz/dop-uderganie/up-row.svg">
                                    </div>
                                    <div class="skidka-price-down">+<span><?=$prise2?></span> Р за
                                        ответ
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="banel-body-footer">
                            <button type="button" class="btn btn-primary save-setings2   save-setings-kviz">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-otobragenie panel-otobragenie-kviz-dop col-xs-12 kviz-3-bonus">
                <form name="formawork">
                   
                    <div class="panel-header">
                        <div class="block-header block-header-1"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-3.svg"><img
                                    src="/global_assets/images/icon_kviz/dop-uderganie/step-3-hover.svg"
                                    class="active"></div>
                        <div class="block-header block-header-2"><span
                                    class="insert-img-text-k"> <span class="text__header">Бонус</span></span><span
                                    class="switchery-xs-new"><input <? if(isset($kwiz['step3']['bonus']['is_checked'])){if($kwiz['step3']['bonus']['is_checked'] == true){echo 'checked';} }?> type="checkbox"
                                                                    class="js-switch validation-val-kviz-checked"
                                                                     name="is_checked"></span></div>
                        <div class="block-header block-header-3 active"><img
                                    src="/images/icon/chat/3.png"></div>


                    </div>

                    <div class="panel-body-panel col-xs-12 start-page-kviz"
                         style="display: none;">
                        <div class="pravilo-block-bonus-cont pravilo-block-bonus-cont-1 col-xs-12">


                            <div class="pravilo-block pravilo-block-bonus  col-xs-12">
                                <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                                    Картинка
                                </div>
                                
                                <div class="file-block " style="<? if($type_bonus_1 == 'svoi'){ echo 'display:block;';} ?>"><input type="file" name="file-<?=$uniqid?>" id="file-<?=$uniqid?>" data-img="<?=$data_img_bonus_1?>">
                                    <label class="<? if($data_img_bonus_1 != ''){ echo 'active';} ?>" for="file-<?=$uniqid?>"><img
                                                src="/global_assets/images/icon_kviz/load-img.svg">
                                    </label></div>
                                <div class="dropdown add-user-new add-number-new select-bonus-type select-bonus-type-1">
                                    <button class="btn btn-success" type="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <? 
											if($type_bonus_1 != ''){
											
											foreach($images_tupe as $images_1){ 
											
											if($type_bonus_1 == $images_1['value']){ 
											 echo '<img src="/global_assets/images/icon_kviz/dop-uderganie/'.$images_1['value'].'.svg">
                                        <b>'.$images_1['name'].'</b>';
											}
											
											
											 }
											 
											 }
											 else{?>
                                            <img
                                                src="/global_assets/images/icon_kviz/dop-uderganie/select.png">
                                        <b>Выберите вариант из списка</b><? }?></button>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

											<? foreach($images_tupe as $images){ 
											
											
											?>

                                        <li data-img="<?=$images['img']?>" data-src="<?=$images['src']?>" class="<? if($type_bonus_1 == $images['value']){ echo 'active';} ?>"><label
                                                    class="add-number-new-checkbox"><?=$images['name']?><input
                                                        value="<?=$images['value']?>"
                                                        type="checkbox" <? if($type_bonus_1 == $images['value']){ echo 'checked';} ?>><span
                                                        class="checkmark"></span></label>
                                        </li>
                                  	<? } 
									
									?>
                                    
    
                                    
                                    
                                    </ul>
        
                                </div>
                         
         
                        
                                
                                <div class="col-xs-12 checkbox-bonus"
                                     style="margin-top: 10px;">
                                    <label class="add-number-new-checkbox">После заполнения
                                        первого шага
                                        <input type="checkbox" class="validation-val-kviz-checked" name="first"
                                               value="Несколько" <? if(isset($kwiz['step3']['bonus']['first']['first'])){if($kwiz['step3']['bonus']['first']['first'] == true){echo 'checked';} }?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-12 checkbox-bonus">
                                    <label class="add-number-new-checkbox">На
                                        странице “Спасибо”
                                        <input type="checkbox" class="validation-val-kviz-checked" name="finish"
                                               value="Несколько" <? if(isset($kwiz['step3']['bonus']['first']['finish'])){if($kwiz['step3']['bonus']['first']['finish'] == true){echo 'checked';} }?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="kviz-input-block kviz-input-block-bonus">
                                    <label>Название бонуса (например «Каталог
                                        кухонь»)</label>
                                    <input type="text"
                                           class="form-control form-control-text sele-on-month validation-val-kviz"
                                           placeholder="Скидка на месяц подписки"  value="<?=$name_bonus_1?>" name="name">
                                </div>
                                <div class="descr-text-all descr-text-all-bonus">Выберите
                                    цвет бонуса:
                                </div>


                                <ul class="block-color-bonus">
                                <? foreach($data_color as $colors){ ?>
                                    <li data-color="<?=$colors['color'];?>" class="<? if($color_bonus_1 == $colors['color']){ echo 'active';}?>" style="background:<?=$colors['color'];?>; border-color:<?=$colors['color'];?>;"></li>
								<? } ?>
                                </ul>
                <div class="all-design-input-block-bonus">
                    <input type="text" readonly class="form-control form-control-text"
                           style="cursor:pointer;" placeholder="<?=$color_bonus_1?>" name="color" value="<?=$color_bonus_1?>">
                    <div class="color-picker-bonus"><input type="color"  value="<?=$color_bonus_1?>"></div>
                </div>
                                 <div class="descr-text-all descr-text-all-bonus">Выберите цвет текста:
                                </div>
                                <ul class="block-color-bonus-text">
                                <? foreach($text_color as $colortext){ ?>
                                    <li data-color="<?=$colortext['color'];?>" class="<? if($color_text_bonus_1 == $colortext['color']){ echo 'active';}?>" style="background:<?=$colortext['color'];?>; border-color:<? if($colortext['color'] == '#fff'){echo '#000000';}else{ echo $colortext['color'];}?>;"></li>
								<? } ?>
                                </ul>
     
                            </div>

                            <div class="right-block-bonus">
                            
                                <div class="text-empty-bonus" <? if($type_bonus_1 != ''){ echo 'style="display:none;"';  } ?>>
                                    Здесь вы увидете превью<br>
                                    отображения бонуса
                                </div>
                             
                                <div class="design-block-label"  style="<?if($type_bonus_1 != ''){ echo 'display:block;';  } else{ echo 'display:none;';} ?><?if($color_bonus_1 != ''){echo 'background: linear-gradient(172deg, '.$color_bonus_1.' 36%, rgb(0, 0, 0) 199%);';}?>">
                                    <div class="design-block-left">
                                        <div class="design-tupe-duwn">
                                                                  <? if($type_bonus_1 == 'svoi'){
											if($data_img_bonus_1 == ''){?>
                                            <img src="/global_assets/images/icon_kviz/dop-uderganie/bg-bonus.png"><? }
											else{ ?>
												<img src="<?=$data_img_bonus_1?>">
											<?	}
											
											
											}else{ ?><img
                                                    src="/global_assets/images/icon_kviz/dop-uderganie/lebel-<? if($type_bonus_1 != ''){echo $type_bonus_1;}?>.png"><? }?>
                                        </div>


                                    </div>
                                    <div class="design-block-right-cont">
                                    <div class="design-block-right" <? if($color_text_bonus_1 != ''){echo 'style="color:'.$color_text_bonus_1.';"';}?>>
                                    <? if($name_bonus_1 != ''){echo $name_bonus_1;} else{ echo 'Скидка на месяц подписки';}?>
                                        
                                    </div>
                                    </div>
                                    <img src="/global_assets/images/icon_kviz/dop-uderganie/bonus-lebel-check.png"
                                         class="design-icon-check">

                                </div>
                            </div>
                        </div>

                        <div class="pravilo-block-bonus-cont pravilo-block-bonus-cont-2 col-xs-12 <? if($active_bonus_2 == true){ echo 'active';}?>"
                             style="<? if($active_bonus_2 == true){ echo 'display:block;';}else{echo 'display:none;'; }?>">


                            <div class="pravilo-block pravilo-block-bonus  col-xs-12">
                                <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                                    Картинка для финальной страницы
                                </div>
                                 <div class="file-block " style="<? if($type_bonus_2 == 'svoi'){ echo 'display:block;';} ?>">
                                 <input type="file" name="file-2<?=$uniqid?>" id="file-2<?=$uniqid?>" data-img="<?=$data_img_bonus_2?>">
                                    <label class="<? if($data_img_bonus_2 != ''){ echo 'active';} ?>" for="file-2<?=$uniqid?>"><img
                                                src="/global_assets/images/icon_kviz/load-img.svg">
                                    </label></div>
                                <div class="dropdown add-user-new add-number-new select-bonus-type select-bonus-type-1">
                                    <button class="btn btn-success" type="button"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><? 
											if($type_bonus_2 != ''){
											
											foreach($images_tupe as $images_1){ 
											
											if($type_bonus_2 == $images_1['value']){ 
											 echo '<img src="/global_assets/images/icon_kviz/dop-uderganie/'.$images_1['value'].'.svg">
                                        <b>'.$images_1['name'].'</b>';
											}
											
											
											 }
											 
											 }
											 else{?>
                                            <img
                                                src="/global_assets/images/icon_kviz/dop-uderganie/select.png">
                                        <b>Выберите вариант из списка</b><? }?></button>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">

                              <? foreach($images_tupe as $images){ ?>

                                                      <li data-img="<?=$images['img']?>" data-src="<?=$images['src']?>" class="<? if($type_bonus_2 == $images['value']){ echo 'active';} ?>"><label
                                                    class="add-number-new-checkbox"><?=$images['name']?><input
                                                        value="<?=$images['value']?>"
                                                        type="checkbox" <? if($type_bonus_2 == $images['value']){ echo 'checked';} ?>><span
                                                        class="checkmark"></span></label>
                                        </li>
                                  	<? } ?>
                                    </ul>
                                </div>
                                                   <div class="col-xs-12 checkbox-bonus"
                                     style="margin-top: 10px; display:none;">
                                    <label class="add-number-new-checkbox">После заполнения
                                        первого шага
                                        <input type="checkbox" class="validation-val-kviz-checked" name="first"
                                               value="Несколько" <? if(isset($kwiz['step3']['bonus']['finish']['first'])){if($kwiz['step3']['bonus']['first']['first'] == true){echo 'checked';} }?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-xs-12 checkbox-bonus" style=" display:none;">
                                    <label class="add-number-new-checkbox">На
                                        странице “Спасибо”
                                        <input type="checkbox" class="validation-val-kviz-checked" name="finish"
                                               value="Несколько" <? if(isset($kwiz['step3']['bonus']['finish']['finish'])){if($kwiz['step3']['bonus']['first']['finish'] == true){echo 'checked';} }?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="kviz-input-block kviz-input-block-bonus">
                                    <label>Название бонуса (например «Каталог
                                        кухонь»)</label>
                                    <input type="text"
                                           class="form-control form-control-text sele-on-month validation-val-kviz"
                                           placeholder="Скидка на месяц подписки"  value="<?=$name_bonus_2?>" name="name">
                                </div>
                                <div class="descr-text-all descr-text-all-bonus">Выберите
                                    цвет бонуса:
                                </div>


                                  <ul class="block-color-bonus">
                                <? foreach($data_color as $colors){ ?>
                                    <li data-color="<?=$colors['color'];?>" class="<? if($color_bonus_2 == $colors['color']){ echo 'active';}?>" style="background:<?=$colors['color'];?>; border-color:<?=$colors['color'];?>;"></li>
								<? } ?>
                                </ul>
                                                <div class="all-design-input-block-bonus">
                    <input type="text" readonly class="form-control form-control-text"
                           style="cursor:pointer;" placeholder="<?=$color_bonus_2?>" name="color" value="<?=$color_bonus_2?>">
                    <div class="color-picker-bonus"><input type="color"  value="<?=$color_bonus_2?>"></div>
                </div>
                                
                                 <div class="descr-text-all descr-text-all-bonus">Выберите цвет текста:
                                </div>
                                <ul class="block-color-bonus-text">
                                <? foreach($text_color as $colortext){ ?>
                                    <li data-color="<?=$colortext['color'];?>" class="<? if($color_text_bonus_2 == $colortext['color']){ echo 'active';}?>" style="background:<?=$colortext['color'];?>; border-color:<? if($colortext['color'] == '#fff'){echo '#000000';}else{ echo $colortext['color'];}?>;"></li>
								<? } ?>
                                </ul> 
                                
                            </div>

                            <div class="right-block-bonus">
                            
                                <div class="text-empty-bonus" <? if($type_bonus_2 != ''){ echo 'style="display:none;"';  } ?>>
                                    Здесь вы увидете превью<br>
                                    отображения бонуса
                                    <div class="disabled-buttom-bonus" style="top: -12px;right: -12px;">×</div>
                                </div>
                             
                                <div class="design-block-label"  style="<?if($type_bonus_2 != ''){ echo 'display:block;';  } else{ echo 'display:none;';} ?><?if($color_bonus_2 != ''){echo 'background: linear-gradient(172deg, '.$color_bonus_2.' 36%, rgb(0, 0, 0) 199%);';}?>">
                                    <div class="design-block-left">
                                        <div class="design-tupe-duwn">
                                        <? if($type_bonus_2 == 'svoi'){
											if($data_img_bonus_2 == ''){?>
                                            <img src="/global_assets/images/icon_kviz/dop-uderganie/bg-bonus.png"><? }
											else{ ?>
												<img src="<?=$data_img_bonus_2?>">
											<?	}
											
											
											}else{ ?><img
                                                    src="/global_assets/images/icon_kviz/dop-uderganie/lebel-<? if($type_bonus_2 != ''){echo $type_bonus_2;}?>.png"><? }?>
                                        </div>


                                    </div>
                                    <div class="design-block-right-cont">
                                    <div class="design-block-right" <? if($color_text_bonus_2 != ''){echo 'style="color:'.$color_text_bonus_2.';"';}?>>
                                    <? if($name_bonus_1 != ''){echo $name_bonus_2;} else{ echo 'Скидка на месяц подписки';}?>
                                        
                                    </div>
                                    </div>
                                    <img src="/global_assets/images/icon_kviz/dop-uderganie/bonus-lebel-check.png"
                                         class="design-icon-check">
									<div class="footer-bonus-copiright">Бонус для финальной страницы</div>
                                    <div class="disabled-buttom-bonus">×</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 add_sourse_block">
                        
                            <div class="add_sourse add_time_call" <? if($active_bonus_2 == true){ echo 'style="display:none;"';}?> id="add-bonus-end-step">
                                <div class="cont__left">+</div>
                                <div class="cont_right">Добавить бонус для финальной
                                    страницы
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12"></div>

                        <div class="banel-body-footer">
                            <button type="button" class="btn btn-primary save-setings2   save-setings-kviz">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="banel-body-footer">
            <button type="button" class="btn btn-primary save-setings   save-setings-kviz">Сохранить</button>
        </div>


    </div>
</div>
<? $data_color = array(
array("color" => '#00B9EE'),
array("color" => '#009640'),
array("color" => '#001C60'),
array("color" => '#951B81'),
array("color" => '#E30613'),
array("color" => '#7E6B5D'),
array("color" => '#898989'),
array("color" => '#CBA675'),
array("color" => '#DDE0E7')
);

$text_color = array(
array("color" => '#fff'),
array("color" => '#000')
);
$design_icon = array(
array("name" => 'award'),
array("name" => 'board'),
array("name" => 'calculator'),
array("name" => 'chat'),
array("name" => 'controls'),
array("name" => 'dart-board'),
array("name" => 'diamond'),
array("name" => 'double-click'),
array("name" => 'file-in-folder'),
array("name" => 'folders'),
array("name" => 'form'),
array("name" => 'giftbox'),
array("name" => 'megaphone'),
array("name" => 'notebook'),
array("name" => 'pie-chart'),
array("name" => 'report'),
array("name" => 'shopping-cart'),
array("name" => 'statistics')

);

$color = '#AFD4FF';
$active = '';
$event = '';
$icon = '/global_assets/images/icon_kviz/design/form.svg';
$linck = '.neiros_popup_quiz';
$position = 'down-right';
$text_label = 'Пройти тест';
$color_text = '#fff';

if(isset($kwiz['step5']['color'])){
	$color = $kwiz['step5']['color'];
}
if(isset($kwiz['step5']['active'])){
	$active = $kwiz['step5']['active'];
}
if(isset($kwiz['step5']['event'])){
	$event = $kwiz['step5']['event'];
}
if(isset($kwiz['step5']['icon'])){
	$icon = $kwiz['step5']['icon'];
}
if(isset($kwiz['step5']['linck'])){
	$linck = $kwiz['step5']['linck'];
}
if(isset($kwiz['step5']['position'])){
	$position = $kwiz['step5']['position'];
}
if(isset($kwiz['step5']['text-label'])){
	$text_label = $kwiz['step5']['text-label'];
}

if(isset($kwiz['step5']['color_text'])){
	$color_text = $kwiz['step5']['color_text'];
}


if($color == ''){
$color = '#AFD4FF';
	}
if($icon == ''){
	$icon = '/global_assets/images/icon_kviz/design/form.svg';
	}
if($text_label == ''){
$text_label = 'Пройти тест';
	}
if($linck == ''){
	
	$linck = '.neiros_popup_quiz';
	}	
	
?>


<div id="collapse_kviz_5" class="panel-collapse collapse" role="tabpane1"
     aria-labelledby="heading_kviz_5" aria-expanded="false" style="height: 0px;">


    <div class="panel-body" style="padding-top:0px">
        <div class="cont-btn-content col-xs-12 all-design-block" style="padding-top: 0px;">

            <div class="all-design-block-top-left">
                <div class="all-design-block-h1">Цвет кнопок и дизайна:</div>
                <ul class="block-color-all-design">
                   <? foreach($data_color as $colors){ ?>
                                    <li data-color="<?=$colors['color'];?>" class="<? if($color == $colors['color']){ echo 'active';}?>" style="background:<?=$colors['color'];?>; border-color:<?=$colors['color'];?>;"></li>
								<? } ?>

                </ul>

                <div class="all-design-input-block">

                    <input type="text" readonly class="form-control form-control-text"
                           style="cursor:pointer;" placeholder="<?=$color?>" name="color" value="<?=$color?>">
                    <div class="color-picker"><input type="color" value="<?=$color?>"></div>
                </div>
                
                
                <div class="all-design-block-h1" style="width: 100%;
    float: left;
    margin-top: 13px;">Выберите цвет текста:</div>
                  <ul class="block-color-bonus-text">
                                <? foreach($text_color as $colortext){ ?>
                                    <li data-color="<?=$colortext['color'];?>" class="<? if($color_text == $colortext['color']){ echo 'active';}?>" style="background:<?=$colortext['color'];?>; border-color:<? if($colortext['color'] == '#fff'){echo '#000000';}else{ echo $colortext['color'];}?>;"></li>
								<? } ?>
                                </ul>     
                
            </div>

            <div class="all-design-block-top-right">
                <div class="all-design-block-h1">Выбранный цвет:</div>
                <div class="select-color-all-design" style=" background:<?=$color?>">

                </div>
            </div>

            <div class="all-design-block-select-button-cont">
                <div class="all-design-block-h1">Выберите вариант вывода КВИЗа на сайте
                </div>
                <div class="all-design-block-select-button round <? if($active == 'Подключите виджет к своей кнопке'){echo 'active';}?>" data-name="Подключите виджет к своей кнопке">
                <div class="disabled-buttom ">×</div>
                <div class="btn-select-item-cont">
                    <div class="btn-select-item">Кнопка</div>
                    <div class="btn-select-item-text">Подключите виджет<br>к своей кнопке
                    </div>
            </div>
                </div>

                <div class="all-design-block-select-button no-round <? if($active == 'Закрепленный ярлык'){echo 'active';}?>" data-name="Закрепленный ярлык">
                <div class="disabled-buttom">×</div>
                <div class="btn-select-item-cont">
                    <div class="btn-select-item">Кнопка</div>
                    <div class="btn-select-item-text">Закрепленный<br>ярлык</div>

                </div>
                </div>
                
                              <div class="all-design-block-select-button floating <? if($active == 'Плавающий ярлык'){echo 'active';}?>" data-name="Плавающий ярлык">
                              <div class="disabled-buttom " >×</div>
                              <div class="btn-select-item-cont">
                    <div class="btn-select-item">Кнопка</div>
                    <div class="btn-select-item-text">Плавающий<br>ярлык</div>
                    </div>

                </div>  
                

            </div>

            <div class="variant-all-design-round" <? if($active == 'Подключите виджет к своей кнопке'){echo 'style="display:block"';}else{echo 'style="display:none"';}?>>
                <div class="kviz-input-block">
                    <label style="    width: 100%">Впишите класс или id Вашей кнопки или ссылки:</label>
                    <input type="text" class="form-control form-control-text"
                           placeholder="впишите класс или id" name="linck" value="<?=$linck?>">
                </div>

                <div class="kviz-input-block" style="display:none;">
                    <label>или вставьте на кнопку событие:</label>
                    <input type="text" class="form-control form-control-text"
                           placeholder="onclick='javascript:PVWatcherObj.showWidget'"
                           name="event" value="<?=$event?>">
                </div>


            </div>


            <div class="variant-all-design-no-round <? if($active == 'Плавающий ярлык'){ echo 'variant-all-design-floating';}?>" <? if($active == 'Закрепленный ярлык' || $active == 'Плавающий ярлык'){echo 'style="display:block"';}else{echo 'style="display:none"';}?>>
                <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz"
                     style="margin-top:0px">Показывать квиз по клику на ярлык, прикрепленный
                    к окну браузера
                </div>
                <div class="kviz-input-block">
                    <label>Текст на ярлыке</label>
                    <input type="text" class="form-control form-control-text proiti-test"
                           placeholder="Пройти тест" name="text-label" value="<?=$text_label?>">
                </div>
				<? if($active == 'Плавающий ярлык'){
					
					if($position == 'left-top' || $position == 'left-down' || $position == 'right-top' || $position == 'right-down'){
						$position = 'down-right';
						}
					
					}
				
				
				?>

                <div class="all-design-left-con">
                    <div class="top-b"></div>
                    <div class="left-b">
                        <div data-name="left-top" class="left-top select-position <? if($position == 'left-top'){echo 'active';}?>"></div>
                        <div data-name="left-down" class="left-down select-position <? if($position == 'left-down'){echo 'active';}?>"></div>
                    </div>
                    <div class="center-center">Выберите расположение<br>ярлыка КВИЗ</div>
                    <div class="right-b">
                        <div data-name="right-top" class="right-top select-position <? if($position == 'right-top'){echo 'active';}?>"></div>
                        <div data-name="right-down" class="right-down select-position <? if($position == 'right-down'){echo 'active';}?>"></div>
                    </div>

                    <div class="down-b">
                        <div data-name="down-left" class="down-left select-position <? if($position == 'down-left'){echo 'active';}?>"></div>
                        <div data-name="down-center" class="down-center select-position <? if($position == 'down-center'){echo 'active';}?>"></div>
                        <div data-name="down-right" class="down-right select-position <? if($position == 'down-right'){echo 'active';}?>"></div>

                    </div>

                </div>


                <div class="all-design-right-con">
                    <div class="all-design-right-con-h1">Выберите иконку для КВИЗа:</div>
                    <ul class="chose-icon5-design">
                    
                    <? foreach ($design_icon as $icons){?>
                        <li class="<? if($icon == '/global_assets/images/icon_kviz/design/'.$icons['name'].'.svg'){ echo 'active';}?>" data-name="<?=$icons['name']?>"><span><img
                                        src="/global_assets/images/icon_kviz/design/<?=$icons['name']?>.svg"></span>
                        </li>
                       <? } ?> 
                    </ul>
                </div>
                
<? 
$color_class = '';
if($color_text == '#000'){
	$color_class = 'black';
	} ?>
                <div class="all-design-down-con">
                    <div class="preview-button" style="background: <?=$color?>;">
                        <span class="<?=$color_class?>" ><? if($icon == ''){?><img class="<?=$color_class?>" src="/global_assets/images/icon_kviz/design/form.svg"><? }else{?> <img class="<?=$color_class?>" src="<?=$icon?>"> <? }?></span>
                        <div <? if($color_text != ''){?>style="color:<?=$color_text?>"<? }?>><?=$text_label?></div>
                        <b class="preview-button-copright">
                            Превью кнопки-ярлыка
                        </b>
                    </div>


                </div>


            </div>

        </div>
        <div class="banel-body-footer">
            <button type="button" class="btn btn-primary save-setings  save-setings-kviz ">Сохранить</button>
        </div>


    </div>
</div>
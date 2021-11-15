<div id="collapse_kviz_1" class="panel-collapse collapse" role="tabpane1"
     aria-labelledby="heading_kviz_1" aria-expanded="false" style="height: 0px;">
  <? $uniqid = uniqid();
  $img = '';
  $logo = '';
  $name_company = '';
  $phone_company = '';
  $company_requisites = '';
  $title = '';
  $subtite = '';
  $button_text = '';
  
  
if(isset($kwiz['step1']['img'])){
	$img = $kwiz['step1']['img'];
	}
if(isset($kwiz['step1']['logo'])){
	$logo = $kwiz['step1']['logo'];
	}	
if(isset($kwiz['step1']['name_company'])){
	$name_company = $kwiz['step1']['name_company'];
}
if(isset($kwiz['step1']['phone_company'])){
	$phone_company = $kwiz['step1']['phone_company'];
}
if(isset($kwiz['step1']['company_requisites'])){
	$company_requisites = $kwiz['step1']['company_requisites'];
}

if(isset($kwiz['step1']['title'])){
	$title = $kwiz['step1']['title'];
}			
if(isset($kwiz['step1']['subtite'])){
	$subtite = $kwiz['step1']['subtite'];
}

if(isset($kwiz['step1']['button_text'])){
	$button_text = $kwiz['step1']['button_text'];
}		
   ?>

    <div class="panel-body" style="padding-top:0px">

        <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
            <div class="tab-content-block active start-page-kviz">

                <div class="">
                    <label>Заголовок</label>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="Ответь на 5 вопросов и узнай, какой тариф тебе подходит"
                           name="title" value="<?=$title?>" >
                </div>

                <div class="text-panel-blok-kviz">
                    <label>Подзаголовок</label>
                    <textarea class="validation-val-kviz"
                              placeholder="В конце теста бонус и скидка" name="subtite"><?=$subtite?></textarea>
                </div>

                <div class="">
                    <label>Текст кнопки</label>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="Пройти тест" name="button_text" value="<?=$button_text?>">
                </div>

<div class="col-xs-12 footer-kviz-block-type-image footer-kviz-block-type-image-1" style="display:block; margin-top:15px;">
                            <div class="file-block" style="float: left;"><input type="file" name="filest1<?=$uniqid?>" id="filest1<?=$uniqid?>" data-img="<?=$img?>">
                                <label for="filest1<?=$uniqid?>" ><img src="/global_assets/images/icon_kviz/load-img.svg">
                                    <div>Загрузить<br>
                                        изображение
                                    </div>
                                </label></div>
                            <div class="file-block-img">
								  <? 
							
							
											if($img != ''){ ?>
												
												<img src="<?=$img?>">
											
											<?	} 
										?>    
                            </div>
                        </div>
                        
                           <div class="on-of-iformation-company">
               Информация о компании <span class="switchery-xs-new switchery-iformation-company">
                 <input id="iformation-company" type="checkbox"  class="js-switch "
                                                                     name="company"></span>
            </div>
            
              <div class="on-of-iformation-company-tab" <? if(isset($kwiz['step1']['company'])){if($kwiz['step1']['company'] == true){ echo 'style="display:block"';}else{echo 'style="display:none"';}} else{?> style="display:none" <? }?>>
                <div class="kviz-input-block-contact-left" style="width:100%">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">Название компании
                    </div>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="" name="name_company" value="<?=$name_company?>">

                </div> 
                
                        <div class="kviz-input-block-contact-left" style="width:100%">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
                        Номер телефона
                    </div>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="" name="phone_company" value="<?=$phone_company?>">

                </div>         
                
                               <div class="kviz-input-block-contact-left" style="width:100%">
                    <div class="text-h1-fo-select-panel text-h1-fo-select-panel-kviz">
					Реквизиты
                    </div>
                    <input type="text" class="form-control form-control-text validation-val-kviz"
                           placeholder="" name="company_requisites" value="<?=$company_requisites?>">

                </div>              
           

<div class="col-xs-12 footer-kviz-block-type-image footer-kviz-block-type-image-2" style="display:block; margin-top:15px;">
                            <div class="file-block" style="float: left;"><input type="file" name="filest-1<?=$uniqid?>" id="filest-1<?=$uniqid?>" data-img="<?=$logo?>">
                                <label for="filest-1<?=$uniqid?>" ><img src="/global_assets/images/icon_kviz/load-img.svg">
                                    <div>Загрузить<br>
                                        логотип
                                    </div>
                                </label></div>
                            <div class="file-block-img">
								  <? 
							
							
											if($logo != ''){ ?>
												
												<img src="<?=$logo?>">
											
											<?	} 
										?>    
                            </div>
                        </div>

            </div>       
                     
            </div>
        </div>
        <div class="banel-body-footer">
            <button type="button" class="btn btn-primary save-setings save-setings-kviz">Сохранить</button>
        </div>


    </div>
</div>
<style>
    #block_2, #block_1, #block_0 {

        display: none;
    }


</style>
@if(isset($kwiz))

				
               <div class="col-xs-12 cont-form " style="display:none;">

 <input id="name_kviz" type="text" class="form-control" name="name_kviz" data-status="" data-id="<? if(isset($kwiz['id'])){
	 echo $kwiz['id'];
	 }?>" value="<? if(isset($kwiz['name'])){
	 echo $kwiz['name'];
	 }?>" placeholder=" " required autofocus><label for="name_kviz">Название квиза</label>

                                
                        </div>
                <div class="col-xs-12 accordion-setings accordion-kviz" style="display: block; margin-top: 20px;">
      
                
                
                    <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">


                        <div class="panel panel-default new-panel-default">


                            <div class="panel-heading" role="tab" id="heading_kviz_1">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse_kviz_1" aria-expanded="false" aria-controls="collapse_kviz_1">
                                    <div class="number-accardion"><img
                                                src="/global_assets/images/icon_kviz/start-page.svg"></div>
                                    <div class="h-1">Стартовая страница</div> 
                                    <div class="descr-text">Заголовок, лид-магнит, оформление</div>
                                    <span class="switchery-xs-new"
                                          style="position: absolute;left: 360px;top: 28px;">
                                        <input <? if(isset($kwiz['step1']['optional'])){if($kwiz['step1']['optional'] == true){echo 'checked';} }?> type="checkbox" name="optional"
                                                                                                   class="js-switch"
                                                                                                   data-id=""></span>
                                </a>
                            </div>


                            @include('widgets.kwiz.step_1')

                        </div>


                        <div class="panel panel-default new-panel-default">


                            <div class="panel-heading" role="tab" id="heading-kviz-2">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse-kviz-2" aria-expanded="false" aria-controls="collapse-kviz-2">
                                    <div class="number-accardion"><img
                                                src="/global_assets/images/icon_kviz/nastroika-etapov.svg"></div>
                                    <div class="h-1">Настройка этапов</div>
                                    <div class="descr-text">Вопросы и варианты ответов</div>
                                </a>
                            </div>


            @include('widgets.kwiz.step_2')
                        </div>


                        <div class="panel panel-default new-panel-default">


                            <div class="panel-heading" role="tab" id="heading_kviz_3">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse_kviz_3" aria-expanded="false" aria-controls="collapse_kviz_3">
                                    <div class="number-accardion"><img src="/global_assets/images/icon_kviz/step-3.svg">
                                    </div>
                                    <div class="h-1">Дополнительное удержание</div>
                                    <div class="descr-text">Скидки, бонусы, другие поощрения</div>
                                </a>
                            </div>


                            @include('widgets.kwiz.step_3')

                        </div>

                        <div class="panel panel-default new-panel-default">


                            <div class="panel-heading" role="tab" id="heading_kviz_4">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse_kviz_4" aria-expanded="false" aria-controls="collapse_kviz_4">
                                    <div class="number-accardion"><img src="/global_assets/images/icon_kviz/step-4.svg">
                                    </div>
                                    <div class="h-1">Контактные данные</div>
                                    <div class="descr-text">Контакты, содержание формы финальной страницы</div>
                                </a>
                            </div>

                            @include('widgets.kwiz.step_4')


                        </div>

                        <div class="panel panel-default new-panel-default">


                            <div class="panel-heading" role="tab" id="heading_kviz_5">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapse_kviz_5" aria-expanded="false" aria-controls="collapse_kviz_5">
                                    <div class="number-accardion"><img src="/global_assets/images/icon_kviz/step-5.svg">
                                    </div>
                                    <div class="h-1">Настройка внешнего вида</div>
                                    <div class="descr-text">Цветовое оформление, вывод на сайте</div>
                                </a>
                            </div>

                            @include('widgets.kwiz.step_5')


                        </div>
                        
                        
                        
                                                 <div class="panel panel-default new-panel-default">          
                            <div class="panel-heading" role="tab" id="heading_kviz_6">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse_kviz_6" aria-expanded="false" aria-controls="collapse_kviz_6">
            <div class="number-accardion"><img src="/global_assets/images/icon/settings_2.svg"></div>
            <div class="h-1">Правила показа квиза</div>
            <div class="descr-text">Способ отображения на странице</div>
        </a>
    </div>
 @include('widgets.kwiz.step_6')

               </div>  
                        
                        

                        <!--END-->
                    </div>

                </div>



@endif
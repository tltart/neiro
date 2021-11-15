


        <!-- 2 columns form -->
        <form class="form-horizontal" action="" method="POST" id="myform_add_company">
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />

            <div class="panel panel-flat" style="box-shadow: none;">

                <div class="panel-body">

                    <div class="tabbable">

                        <div class="tab-content">



                           <div class="row tab-pane active" id="basic-tab1" style="box-shadow: none;">
                                <div class="col-md-12">
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Короткое название:</label>
                                          
                                               <input type="text" class="form-control" name="short_name" required="">
                                          
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Полное название:</label>
                                          
                                                <input type="text" class="form-control" name="full_name" required="">
                                     
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">ИНН:</label>
                                           
                                                <input type="text" class="form-control" name="inn" required="">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">КПП:</label>
                                       
                                                <input type="text" class="form-control" name="kpp" required="">
                             
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">ОГРН:</label>
                                          
                                                <input type="text" class="form-control" name="ogrn" required="">
                                     
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Телефон:</label>
                                          
                                                <input type="text" class="form-control" name="phone" required="">
                                          
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">E-mail:</label>
                                        
                                                <input type="text" class="form-control" name="email" required="">
                                       
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Контактное лицо:</label>
                                         
                                                <input type="text" class="form-control" name="fio">
                                          
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Юридический адрес:</label>
                                           
                                                <input type="text" class="form-control" name="ur_adres" required="">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Почтовый адрес:</label>
                                           
                                                <input type="text" class="form-control" name="post_adres" required="">
                                         
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">БИК Банка:</label>
                                          
                                                <input type="text" class="form-control" name="bik" id="bik" required="">
                                          
                                            <div class="col-lg-3">
                                               <button class="btn btn-info" onclick="provbik();return false" type="button">Проверить</button>
                                            </div>
                                        </div>
                                        <div class="form-group frombic">

                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 30%;">Рассчетный счет:</label>
                                           
                                                <input type="text" class="form-control" name="rs" required="">
                                        
                                        </div>


                                    </fieldset>
                                </div>
                                {{--Дополнительные поля--}}

                            </div>






                        </div>
                        {{--<div class="text-right">
                            <button type="button" class="btn btn-primary my_add_my_company">Создать<i class="icon-arrow-right14 position-right"></i></button>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="form-group footer-button">
                <div class="col-xs-12">

                    <button type="button" class="btn btn-primary  my_add_my_company ">Сохранить</button>
                    <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
                </div>

            </div>

        </form>



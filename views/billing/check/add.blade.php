
        <form class="form-horizontal" action="" method="POST" id="myform_setting_checkcompanys" data-url="/setting/checkcompanys" >
            <input name="_token" type="hidden" value="{{ csrf_token() }}" />

            <div class="panel panel-flat" style="box-shadow: none;">
             

                <div class="panel-body">

                    <div class="tabbable">

                        <div class="tab-content">



                            <div class="row tab-pane active"   id="basic-tab1" style="box-shadow: none;">
                                <div class="col-md-12">
                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 20%;">Компания:</label>
                                           
                                               <select name="company_id" class="form-control" required="" style="width: 30%;">
                                                    <option value="">Выберите компанию</option>
                                                    @foreach($company as $com)
                                                        <option value="{{$com->id}}" @if($com->id==$comps) selected @endif >{{$com->short_name}} ({{$com->inn}})</option>

                                                    @endforeach
                                                </select>


                                         
                                            <a href="#" class="btn btn-success item-widget1" data-name="Создать компанию" data-id="setting_paycompanys_create" style="box-shadow: none;float: right; border: 1px solid #0097F5; color: #0097F5; background: none;">Добавить компанию</a>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label" style="width: 20%;">Сумма:</label>
                                         
                                                <input type="text" class="form-control" name="summ" required="" style="width: 30%;">
                                      
                                        </div>



                                    </fieldset>
                                </div>
                                {{--Дополнительные поля--}}

                            </div>






                        </div>
                       {{-- <div class="text-right">
                            <button type="button" class="btn btn-primary myform_setting_checkcompanys_btn">Создать<i class="icon-arrow-right14 position-right"></i></button>
                        </div>--}}
                    </div>
                </div>
                </div>
            <div class="form-group footer-button">
                <div class="col-xs-12">

                    <button type="button" class="btn btn-primary  myform_setting_checkcompanys_btn ">Сохранить</button>
                    <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
                </div>

            </div>

        </form>




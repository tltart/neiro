<div class="col-md-3 integration-item">
    <div class="single-cases-card" >
        <div class="card-image amocrm"><a data-toggle="modal" data-target="#myModal_sett_12"><img alt="" src="/global_assets/images/integration/amocrm.jpg" draggable="false" class="img-responsive"></a>
            <div class="hover-area"> </div>
        </div>
        <!-- .card-image END -->

        <div class="cases-content col-xs-12">

            <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>
             </div>
        <!-- .cases-content END --></div>


</div>

<div id="myModal_sett_12" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal">
    <div class="modal-dialog" >
        <div class="modal-content"   style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
            
            <div class="name-block-fixed name-block-fixed-integration">
           <div class="col-xs-12" >
           <div class="h1-modal pos-left"><img src="/images/amocrm-integration.jpg"><span></span></div>
           
          <input type="hidden" class="form-control" name="id"
                       value="{{$widgets_bitrix24->id}}">
                <input type="hidden" class="form-control" name="form_action"
                       value="safeamocrm24">
              {!! $status_checkbox_metrika !!}
           </div>
            </div>
            
    <div class="row">
    
    
    
        <form id="safebitrix24" name="safebitrix24">  <div class="col-md-12">

<div class="col-xs-12 block-descr">  
          <div class="col-sm-6"><div class="img-block-left"><img width="100%" src="/global_assets/images/integration/amocrm.jpg"></div></div>
          <div class="col-sm-6">  
          	<div class="paragraph">AmoCRM – это наш собственный SaaS-проект, классический стартап, успешный и востребованный на рынке. amoCRM представляет собой онлайн-систему учета клиентов и сделок для отдела продаж. Более 5000 предприятий используют amoCRM по всему миру; в базе данных системы содержится более 200 млн контактов. В нашей партнерской сети более 200 участников в странах СНГ.</div>
          
          <input type="hidden" class="form-control" name="id"
                       value="{{$widgets_bitrix24->id}}">
                <input type="hidden" class="form-control" name="form_action"
                       value="safeamocrm24">
              {!! $status_checkbox_metrika !!}
                
                </div>
                
            </div>


            </div>
          <div class="show-hidden-integration">   
            <div class="col-xs-12">
                         <div class="form-group">
                        <label class="col-lg-3 control-label">Адрес AmoCrm:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control for_amo_2020_server1" name="server1" id="server1"
                                   value="{{$widgets_bitrix24->server1}}" required>

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Логин:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control for_amo_2020_login" name="login" id="login"
                                   value="{{$widgets_bitrix24->login}}" required>

                        </div>

                    </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Приложение ID:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control for_amo_2020_wclient_id" name="wclient_id" id="wclient_id"
                               value="{{$widgets_bitrix24->wclient_id}}" required>

                    </div>

                </div>
                <input type="hidden" class="for_amo_2020_id" value="{{$widgets_bitrix24->id}}">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Секрет приложения:</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control for_amo_2020_wclient_secret" name="wclient_secret" id="wclient_secret" 
                               value="{{$widgets_bitrix24->wclient_secret}}" required>

                    </div>

                </div>
@if($widgets_bitrix24->is_connected)
                    <span style="color: green">Интегрировано</span>

                @else
                    <button type="button" class="btn btn-info add_amo_2020">Подключить</button>
                @endif

                    </div>
              <div class="form-group">
                  <label class="col-lg-3 control-label">Отправлять в Амо:</label>
                  <div class="col-md-9">
                  @php
$notsend=json_decode($widgets_bitrix24->not_send);
@endphp
<input type="checkbox" name="not_send[]" value="1" @if(is_array($notsend)&&in_array(1,$notsend)) checked @endif >Коллбек<br>
<input type="checkbox" name="not_send[]" value="2" @if(is_array($notsend)&&in_array(2,$notsend)) checked @endif >Коллтрекинг<br>
<input type="checkbox" name="not_send[]" value="3" @if(is_array($notsend)&&in_array(3,$notsend)) checked @endif>Форма с сайта<br>
<input type="checkbox" name="not_send[]" value="19" @if(is_array($notsend)&&in_array(17,$notsend)) checked @endif>Ловец лидов<br>
                      <input type="checkbox" name="not_send[]" value="9" @if(is_array($notsend)&&in_array(9,$notsend)) checked @endif>E-mail <br>


                  </div>

              </div>
            {{--Дополнительные поля--}}
              <div class="form-group" style="margin-top: 15px">
                  <label class="col-lg-3 control-label">Отправлять источник:</label>
                  <div class="col-md-9"><input type="checkbox" name="send_source" value="1" @if($widgets_bitrix24->send_source==1) checked @endif><br></div>
              </div>
                <div class=" row col-md-12 statusamocrm" style="background: white">

                </div>
               <div class="form-group footer-button">
            <div class="col-xs-12">
            	<button type="button"  class="btn btn-primary  w_safebutton">Сохранить</button>
       
                <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
            </div>

        </div>
        
        
          </div>
        </form>


    </div>
                <!-- Футер модального окна -->
            </div>

        </div>
    </div>
</div>

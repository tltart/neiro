<div class="col-md-3 integration-item">
        <div class="single-cases-card" >
            <div class="card-image"><a data-toggle="modal" data-target="#myModal_sett_1"><img alt="" src="/global_assets/images/integration/metrika.jpg" draggable="false" class="img-responsive" ></a>
                <div class="hover-area"> </div>
            </div>
            <!-- .card-image END -->

            <div class="cases-content col-xs-12">

                <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>
               </div>
            <!-- .cases-content END --></div>


    </div>

    <div id="myModal_sett_1" class="modal fade ClientInfoModal   lids-neiros  integration___modal WidgetModal">
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
           <div class="h1-modal pos-left"><img src="/images/yandex-metrika.jpg"><span></span></div>
           
      <input type="hidden" class="form-control" name="id"
                       value="{{$metrika_widget->id}}">
              {!! $status_checkbox_metrika !!}
                
           </div>
            </div>
                
                
                
                    <div class="row">

            <form   id="integrationmetrika"  name="integrationmetrika" >
            
       <div class="col-xs-12 block-descr">  
          <div class="col-sm-6"><div class="img-block-left"><img width="100%" src="/global_assets/images/integration/metrika.jpg"></div></div>
          <div class="col-sm-6">  
          	<div class="paragraph">Яндекс Метрика — бесплатный интернет-сервис компании Яндекс, предназначенный для оценки посещаемости веб-сайтов, и анализа поведения пользователей. На данный момент Яндекс.Метрика является третьей по размеру системой веб-аналитики в Европе.</div>
          
          
  
                       <input type="hidden" class="form-control" name="id"
                       value="{{$metrika_widget->id}}">
         {!! $status_checkbox_metrika !!}
                
                </div>
                
            </div>     
            <div class="show-hidden-integration">               
    <div class="col-xs-12">

                <input type="hidden" class="form-control" name="id"
                       value="{{$metrika_widget->id}}">
                <input type="hidden" class="form-control" name="form_action"
                       value="integrationmetrika">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset>





                            <div class="form-group">

                                <div class="col-md-9">
                                    <input type="hidden" class="form-control" name="token" id="token"  value="{{$metrika_widget->token}}"  required>
                                  @if(!$metrika_widget->token)  <a href="/set_token/{{$metrika_widget->id}}" class="btn btn-info">Подключиться
                                    </a>@else
                                        <a href="/set_token_out/{{$metrika_widget->id}}" class="btn btn-info">Отключить Metrika
                                        </a>
                                    @endif
                                </div>

                            </div>



                        </fieldset>
                    </div>
                    {{--Дополнительные поля--}}
                    @if($metrika_widget->token)
                        <div class="col-md-12">
					
					<div class="form-group">
                             <label class="col-lg-3 control-label">Счетчики метрики:</label>
                             <div class="col-lg-9">
                                 .


                                  @foreach($metrika_counters as $counter)

                                     <div class="col-xs-12"><label class="add-number-new-checkbox1 label-dir">{{$counter->site}} ({{$counter->counter}})

                                             <input type="radio" name="radiocounter" class="dircheck" style="width: 10px;height: 10px" @if($metrika_widget->counter==$counter->counter) checked="checked" @endif  value="{{$counter->counter}}" >
                                             <span class="checkmark"></span>
                                         </label>
                                     </div>



@endforeach

                             </div>

                         </div>
						 
                         <div class="form-group">
                             <label class="col-lg-3 control-label">Передавать расходы:</label>
                             <div class="col-lg-9">
                        @if(!\App\Widgets::where('tip',28)->where('sites_id',auth()->user()->site)->where('status',1)->first())
                                     <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">Facebook</label>        <a data-toggle="modal" data-target="#myModal_sett__w_28">Подключить Facebook Marketing </a>
                                     </div>@else
                                     <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">Facebook

                                             <input type="checkbox" name="send_metrica_cost[]" class="dircheck" @if(is_array($metrika_widget->send_metrica_cost)&&in_array(\App\Widgets::TIP_FB_MARKETING_API,$metrika_widget->send_metrica_cost)) checked="checked" @endif  value="{{\App\Widgets::TIP_FB_MARKETING_API}}">
                                             <span class="checkmark"></span>
                                         </label>
                                     </div>@endif



                             </div>

                         </div>

                            <div class="form-group  ">
                               
                         

                                    <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">
											<span style="padding-left:40px;     font-size: 14px;">Передавать сделки:</span>
                                            <input type="checkbox" name="send_projects"   @if($metrika_widget->send_projects) checked="checked" @endif  value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>



                  

                            </div>
                            <div class="form-group  ">
                      

                                    <div class="col-xs-12"><label class="add-number-new-checkbox label-dir">
                                <span style="padding-left:40px;    font-size: 14px;">Передавать звонки:</span>
                                            <input type="checkbox" name="send_call"   @if($metrika_widget->send_call) checked="checked" @endif  value="1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>



                         

                        </div>


                     </div>@endif
                </div>





                
                        <div class="form-group footer-button">
            <div class="col-xs-12">
            	<button type="button"  class="btn btn-primary  w_safebutton">Сохранить</button>
       
                <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть</button>
            </div>

        </div>
       
    </div>
    </div>
         </form>

    
    
    
    {{--Дополнительные поля--}}

       </div>

                </div>
            </div>
        </div>
        </div>



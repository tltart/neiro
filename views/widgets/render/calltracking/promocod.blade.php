<div class="panel panel-default new-panel-default" style="margin-top:20px;">

    <div class="panel-heading" role="tab" id="heading-33">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-33"
           aria-expanded="false" aria-controls="collapse-33">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Промокоды</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>


    <div id="collapse-33" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-33"
         aria-expanded="false" style="height: 0px;">

<div class="panel-body" style="padding-top:0px">
  <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
    
    <fieldset>
            <form   id="caltrackingpromocod"  name="caltrackingpromocod" >
            <div class="form-group">
                <label class="col-lg-3 control-label">Статус промокодов:</label>
                <div class="col-lg-9">
                  {{--  {!! $status_checkbox_metrika !!}--}}
                    <input type="hidden" name="status" value="0">
                    <input type="checkbox" name="status" value="1" @if($widget_prom->status==1) checked @endif>Включено
                </div>
            </div>


            <div class="form-group">
                <label class="col-lg-3 control-label">Цвет текста:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control jscolor" name="color" id="color"  value="{{$widget_promokod->color}}"  required>

                </div>

            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Цвет фона:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control jscolor" name="background" id="background"  value="{{$widget_promokod->background}}"  required>

                </div>

            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Расположение по горизонтали:</label>
                <div class="col-md-9">
                    <select id="position_x" name="position_x" class="form-control">
                        <option value="left" @if($widget_promokod->position_x=='left') selected @endif >Слева</option>
                        <option value="right" @if($widget_promokod->position_x=='right') selected @endif >Справа</option>

                    </select>


                </div>

            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Расположение по вертикали:</label>
                <div class="col-md-9">
                    <select id="position_y" name="position_y" class="form-control">
                        <option value="top" @if($widget_promokod->position_y=='top') selected @endif >Вверху</option>
                        <option value="bottom" @if($widget_promokod->position_y=='bottom') selected @endif >Внизу</option>

                    </select>


                </div>

            </div>
            <input type="hidden" class="form-control" name="id"
                   value="{{$widget_promokod->id}}">
            <input type="hidden" class="form-control" name="form_action"
                   value="caltrackingpromocod">







                <div class="form-group" style="margin-top: 10px">
                    <div class="col-md-9">
                        <button type="button" class="btn btn-primary w_safebutton">Сохранить1<i
                                    class="icon-arrow-right14 position-right " ></i></button>
                    </div>

                </div>
            </form>
        </fieldset>

</div>
</div>




    </div>
    
    </div>

<div class="panel panel-default new-panel-default">
    <div class="panel-heading" role="tab" id="heading-334">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-334"
           aria-expanded="false" aria-controls="collapse-334">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Offline промокоды</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>


    <div id="collapse-334" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-334"
         aria-expanded="false" style="height: 0px;">

    
    
    
<div class="panel-body" style="padding-top:0px">
  <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
    

       

    
    


            <input name="_token" type="hidden" value="{{ csrf_token() }}" />

  


        <!-- Task manager table -->



        
          


                    <div class="col-md-3"><input type="text" class="form-control" id="canal" placeholder="Канал"></div>
                    <div class="col-md-3"><button type="button" class="btn btn-info" onclick="addcanal()" >Добавить</button>
                    </div>
          


            <table class="table tasks-list table-lg">
                <tbody   id="table_costs">
                @foreach($widget_data as $cost)

                    <tr id="cost{{$cost->id}}">
                        <td >{{$cost->canal}}</td>
                        <td >{{$cost->promocod}}</td>
                        <td >{{date('d-m-Y'),strtotime($cost->created_at)}}</td>


                        <td ><i class="fa fa-trash" onclick="deletecanalcpomocod({{$cost->id}})"></i> </td>
                    </tr>
                @endforeach</tbody>
            </table>

        <!-- /task manager table -->
          <div class="form-group" style="margin-top: 10px">
                    <div class="col-md-9">
                       
           <?php /*?> {!! $status_checkbox_metrika !!}<?php */?>

                    </div>

                </div>
    </div>
   




    </div>




    </div>
   




    </div>

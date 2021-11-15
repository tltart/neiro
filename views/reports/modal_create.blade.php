
<? $id = uniqid().'1'; 
  $id2 = uniqid().'2';

?>

<form id="formCreateReports">
<div class="col-xs-12 accordion-setings" style="display: block; margin-top: 20px;">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<div class="panel panel-default new-panel-default">

    <div class="panel-heading" role="tab" id="heading-<?=$id?>">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$id?>" aria-expanded="false" aria-controls="collapse-<?=$id?>">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Группировка</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>
           <div id="collapse-<?=$id?>" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading__<?=$id?>" aria-expanded="false" style="height: 0px;">

 <div class="panel-body" style="padding-top:0px">
  <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
              <fieldset>
                    <div class="col-md-12 mb-20">
                        <input type="text" name="name"   placeholder="Название" class="form-control namedddd">
                    </div>
                  {{--  <div class="col-md-12 mb-20">Тип отчета
                        <select name="type">
                            <option value="line">График</option>
                            <option value="funnel">Воронка</option>


                        </select>
                    </div>--}}


                    <div class="col-md-6 table-bordered"><b>Группировки</b>
                        @foreach ($reports_gropings as $item)
                            <div><input type="checkbox" value="{{$item->code}}" name="grouping[]">{{$item->table_name}}
                            </div>


                        @endforeach

                    </div>


                        <input type="hidden" class="form-control" name="form_action"
                               value="allreports_create">








                </fieldset>

</div>


<div class="banel-body-footer">

             {{--   <button type="button" class="btn btn-primary save-setings-foreports ">Сохранить</button>--}}
            </div>
</div>
</div>
</div>


<div class="panel panel-default new-panel-default">

    <div class="panel-heading" role="tab" id="heading-<?=$id2?>">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$id2?>" aria-expanded="false" aria-controls="collapse-<?=$id2?>">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Показатели</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>
           <div id="collapse-<?=$id2?>" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading__<?=$id2?>" aria-expanded="false" style="height: 0px;">

 <div class="panel-body" style="padding-top:0px">
  <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">
                <div class="col-md-6 table-bordered"><b>Показатели</b>

                    @foreach ($reports_resourse as $item)
                        <div><input type="checkbox" value="{{$item->code}}" name="resourses[]">{{$item->name}}
                        </div>


                    @endforeach


                </div>

</div>
<div class="banel-body-footer">

                <button type="button" class="btn btn-primary save-setings save-setings-foreports"  >Сохранить</button>
            </div>
</div>
</div>
</div>

</div>
</div>

</form>










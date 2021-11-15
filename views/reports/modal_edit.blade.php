<form id="formCreateReports"><div class="panel panel-default new-panel-default" style="margin-top:20px;">

        <div class="panel-heading" role="tab" id="heading-33">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-33"
               aria-expanded="false" aria-controls="collapse-33">
                <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
                <div class="h-1">Группировка</div>
                <div class="descr-text">Какое-то краткое краткое описание</div>
            </a>
        </div>


        <div id="collapse-33" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-33"
             aria-expanded="false" style="height: 0px;">

            <div class="panel-body" style="padding-top:0px">
                <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">

                    <fieldset>
                        <div class="col-md-12 mb-20">
                            <input type="text" name="name" id="namedd" placeholder="Название" class="form-control" value="{{$report->name}}">
                            <input type="hidden" name="report_id" id="report_id" placeholder="Название" class="form-control" value="{{$report->id}}">
                        </div>
                        <div class="col-md-12 mb-20">Тип отчета
                            <select name="type">
                                <option value="line" @if($report->type=='line') selected @endif>График</option>
                                <option value="funnel"  @if($report->type=='funnel') selected @endif>Воронка</option>


                            </select>
                        </div>


                        <div class="col-md-6 table-bordered"><b>Группировки</b>
                            @foreach ($reports_gropings as $item)
                                <div><input type="checkbox" value="{{$item->id}}" name="grouping[]" @if(is_array( $report->grouping))@if(is_array($report->grouping)&&in_array($item->id, $report->grouping) ) checked @endif @endif>{{$item->name}}
                                </div>


                            @endforeach

                        </div>



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
                <div class="h-1">Показатели</div>
                <div class="descr-text">Какое-то краткое краткое описание</div>
            </a>
        </div>


        <div id="collapse-334" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-334"
             aria-expanded="false" style="height: 0px;">




            <div class="panel-body" style="padding-top:0px">
                <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">

                    <div class="col-md-6 table-bordered"><b>Показатели</b>

                        @foreach ($reports_resourse as $item)
                            <div><input type="checkbox" value="{{$item->code}}" name="resourses[]"  @if(is_array($report->resourse)&&in_array($item->code, $report->resourse) ) checked @endif>{{$item->name}}
                            </div>


                        @endforeach


                    </div>
                </div>





            </div>




        </div>



        <button type="button" class="btn btn-success" onclick="update_reports();return false">Сохранить
        </button>
        <button type="button" class="btn btn-danger" onclick="delete_reports({{$report->id}});return false">Удалить
        </button>
    </div>
</form>





























<!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Конструктор</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body row">



            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

            </div>

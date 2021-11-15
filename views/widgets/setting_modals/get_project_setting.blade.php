
<div class="col-xs-12 accordion-setings" style="display: block; margin-top: 20px;">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

<div class="panel panel-default new-panel-default" style="margin-top:20px;">

    <div class="panel-heading" role="tab" id="heading-33">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-33"
           aria-expanded="false" aria-controls="collapse-33">
            <div class="number-accardion"><img src="/global_assets/images/icon/appointment.svg"></div>
            <div class="h-1">Этапы сделок</div>
            <div class="descr-text">Какое-то краткое краткое описание</div>
        </a>
    </div>


    <div id="collapse-33" class="panel-collapse collapse" role="tabpane1" aria-labelledby="heading-33"
         aria-expanded="false" style="height: 0px;">

        <div class="panel-body" style="padding-top:0px">
            <div class="cont-btn-content col-xs-12" style="padding-top: 0px;">

              @include('setting.stages.add')
              @include('setting.stages.list')

            </div>
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

                <fieldset>
@include('setting.field.add')
@include('setting.field.list')

                </fieldset>

            </div>





        </div>




    </div>





</div>





    </div>





</div>






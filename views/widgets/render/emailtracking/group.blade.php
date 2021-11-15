<div class="row tab-pane " id="basic-tab94">

    <div class="col-md-12">
        <div class="breadcrumb-line breadcrumb-line-component" style="margin-bottom: 10px"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>

            <input name="_token" type="hidden" value="{{ csrf_token() }}" />

        </div>


        <!-- Task manager table -->
        <div class="panel panel-white">
            <div class="panel-heading">

                <h6 class="panel-title"> </h6>
                <div class="heading-elements row" style="width: 100%">


                    <div class="col-md-3"><input type="text" class="form-control" id="group_email" placeholder="Наименование">




                    </div>
                    <div class="col-md-3"><button type="button" class="btn btn-info" onclick="add_email_group({{$widget->id}})" >Добавить</button>
                    </div>
                </div>
            </div>

            <table class="table tasks-list table-lg">
                <tbody   id="table_group_email">
                @foreach($expecteds as $expect)

                 @include('widgets.render.emailtracking.tr_group')
                @endforeach</tbody>
            </table>
        </div>
        <!-- /task manager table -->



    </div>
    {{--Дополнительные поля--}}

</div>

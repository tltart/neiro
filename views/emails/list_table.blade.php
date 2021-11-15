


    @inject('ProjectController','\App\Http\Controllers\ProjectController')
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

    <!-- Basic sorting -->
<style>
/*.page-title1.row {
	display:none;}
.panel.panel-flat .panel-heading{
	    display: none;
	}*/
	.panel-flat{
		margin-bottom: 120px;}
	.table>thead>tr>th{
		    border-bottom: 1px solid #bbb;
    text-transform: uppercase;
    color: #999999;
    font-size: 12px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: 0px !important;
    background: #fafafa;
		}
	.panel-flat>.panel-heading{
		display:none;}	
	.panel-flat>.panel-heading+.panel-body {
    padding-top: 0;
    padding-left: 0px;
    padding-right: 0px; padding-bottom: 0px;
}	
/*.panel-top-n-table .pagination{
    padding-left: 0px;
    padding-top: 20px;
    padding-right: 20px;
    float: right;
	
	}
.container__deshbord .panel{
	border-radius: 10px;
	    margin-top: 20px;
	}	
	*/
	#basic-tab1, #basic-tab2, #basic-tab3, #basic-tab4{
		    box-shadow: none;
		}
	#basic-tab1{
		background:none;    padding-top: 0px;     padding-bottom: 0px;}	
.panel-top-n-table{
	padding: 0px;
    background: #fff;
    -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    border-radius: 0px;
	}	
/*	.container__deshbord .panel {
    border-radius: 10px;
    margin-top: 20px;
    background: none;
    box-shadow: none;
}*/
.panel-top-n-table .pagination > li{
	
	}	
.panel-top-n-table .pagination > li a{
	    font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 13px;     border-radius: 3px;     box-shadow: none;
    background: none;
	}	
.panel-top-n-table .pagination > li span{
		    font-family: Roboto, Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 13px;     border-radius: 3px;
	}
	
.panel-top-n-table .pagination > li.disabled span{
	 box-shadow: none;
    background: none;
	}	
		
.panel-top-n-table .pagination > li.active span{
	color: #fff;
    background-color: #455a64;

	}
	
	.panel-top-n-table .pagination {
padding-left: 0px;
    padding-top: 18px;
    padding-right: 20px;
    padding-bottom: 21px;
    float: right;
    position: absolute;
    right: 0px;
    bottom: -70px;
}
	
	
.container__deshbord .panel-body span.block-selectable{
	font-size: 11px;}
.table-responsive{
	border-radius:0px;}	
	#basic-tab1 .col-md-12{
		padding:0px !important;}
					
</style>

  <div class="col-xs-12 panel-top-n-table" >
      <div class="tabs-content-wrapper">
        <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Телефон*</th>
                <th>Телефон</th>
                <th>От </th>
                <th>Куда</th>
                <th>Тема</th>
                <th>Сообщение</th>
                <th>Вложения</th>
                <th>Сделка</th>
                <th>Дата</th>
                <th>Канал</th>
             </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
               <tr   id="del{{$project->id}}">
                    <td><a href="#" onclick="open_email({{$project->id}});return false;"> 101{{$user->my_company_id}}{{$project->id}}</a> </td>
                    <td> {{$project->from_name}}</td>
                   <td>
                       @php
                           $ph1=json_decode($project->formated_phones_1,true);

                       @endphp

                       @if(is_array($ph1)){{implode(',',$ph1)}}@endif</td>

                    <td>
                        @php
                        $ph=json_decode($project->formated_phones,true);

                        @endphp

                        @if(is_array($ph)){{implode(',',$ph)}}@endif</td>
                    <td>{{$project->from}}  </td>
                    <td>{{$project->to}} </td>
                    <td>{{$project->subject}} </td>
                    <td>{!! \Illuminate\Support\Str::limit(strip_tags($project->message),20 ,'... <a href="/email_read/'.$project->id.'" target="_blank">Читать</a>') !!} </td>
                   <td>
                       @php $attachs=\App\Models\WidgetsEmailAttach::where('email_id',$project->id)->get();

                       @endphp
                      @foreach($attachs as $att)
                          <div class="mt-3" style="margin-top: 5px"><i class="fa fa-download"></i>
                          @if($att->id>1986)
                                  <a href="https://disk.neiros.ru/attachs/{{$att->attach_file}}" target="_blank">{{$att->attach_name}}</a>
                              @else
                              <a href="https://storage.yandexcloud.net/neirosfiles/{{$att->attach_file}}" target="_blank">{{$att->attach_name}}</a>
@endif

                          </div>

                       @endforeach

                   </td>
                    <td> 101{{$user->my_company_id}}{{$project->project_id}}</td>
                    <td>{{date('H:i d.m.Y',strtotime($project->date))}}</td>
                    <td> @if(isset($canalstat[$project->canal])){{$canalstat[$project->canal]}}@endif</td>
                   </tr>
            @endforeach
            </tbody>
        </table>


 </div>
      </div>
        {!! $projects->links('widgets.render.calltracking.pag') !!}
    </div>

    
    <!-- /basic sorting -->





   


@section('skript_callstat')
    <script>
        function setdate(start,end) {
            start_date = start;
            end_date =end;


            datatosend = {
                start_date: start_date,
                end_date: end_date,


                _token: $('[name=_token]').val(),


            }


            $.ajax({
                type: "POST",
                url: '/projects/start_date',
                data: datatosend,
                success: function (html1) {

                    $.jGrowl('Изменения успешно сохранены', {
                        header: 'Успешно!',
                        theme: 'bg-success'
                    });
                    window.location.reload();
                }
            })


        }



    </script>
    <script type="text/javascript" src="/default/assets/js/plugins/pickers/daterangepicker.js"></script>
    <script>    // Daterange picker
        // ------------------------------

        $('.daterange-ranges').daterangepicker(
            {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2018',
                /* maxDate: '12/31/2016',*/
                dateLimit: { days: 60 },
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                applyClass: 'btn-small bg-slate-600 btn-block',
                cancelClass: 'btn-small btn-default btn-block',
                format: 'MM/DD/YYYY'
            },
            function(start, end) {
                $('.daterange-ranges span').html(start.format('D-MM-Y') + ' - ' + end.format('D-MM-Y'));
                setdate(start.format('Y-MM-D'),end.format('Y-MM-D'));
            }
        );

        $('.daterange-ranges span').html('<?=date("d-m-Y",strtotime($start_date))?> - <?=date("d-m-Y",strtotime($end_date))?>' );


        function open_email(id) {
            datatosend = {
                id:id,

                _token: $('[name=_token]').val(),


            }


            $.ajax({
                type: "POST",
                url: '/projects/get_email_modal',
                data: datatosend,
                success: function (html1) {
                    res=JSON.parse(html1);
                    $('#e_subject').html(res['subject']);
                    $('#e_from').html(res['from']);
                    $('#e_to').html(res['to']);
                    $('#e_message').html(res['message']);

                    $('#myModalEmail').modal('show');

                }
            })
        }
    </script>
@endsection

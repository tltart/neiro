@extends('app')
@section('title')
    Контакты

@endsection
@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Task manager table -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"><b>Все проекты</b></h6>
                <div class="heading-elements">
                    <a href="/setting/sites/create" class="btn btn-primary">Создать проект</a>
                  <!--  <a href="/setting/sites/reloadwidget" class="btn btn-success">Обновить</a>-->
                  
                </div>
            </div>


            <table class="table tasks-list table-lg table-list-project">
           			   <thead class="table-list-project-title">
                <tr>
                    <th class="th-name-project">название</th>
                    <th class="th-user-to-week">посетителей за неделю</th>
                    <th class="th-order-to-week">заявки за неделю</th>
                    <th class="th-fast-menu">быстрое меню</th>
                    <th class="th-status">статус</th>
                    <th class="th-settings">настройки</th>
                </tr>
                    </thead>
                
                
				
				
				
				<style>
				.table-list-project{
					 border:0px !important;
					}
				.table-list-project-title{
					    background: #fafafa;
                        border:0px;
					}
				.table-list-project thead tr th{	
				    text-transform: uppercase;
					color: #999999;
					font-size: 12px;
					padding-top: 10px;
					padding-bottom: 10px;
					border: 0px !important;	
				}
				
				.th-status-var{
					display:none;	
					}
				.th-status-var.status-active{
					display:inline-block;
					}
					
				.th-status-var img{
					width:20px;
					margin-right: 5px;
					}
				
				.table-list-project tbody tr td{
					border-right:0px !important;
					
					}
				
				 .th-fast-menu a i{
					 font-size: 15px;
                     margin-right: 5px;
                     color: #acaeb2;
					 }  
				
				
				.th-settings a i{
					 font-size: 15px;
                     margin-right: 5px;
                     color: #acaeb2;
					 }  
				
				.th-settings a i:hover{
                     color: #333;
					 }
				
				.th-fast-menu a i:hover{
                     color: #2196f3;
					 transform: scale(1.3);
					 }
				
				.th-order-to-week label, .th-user-to-week label {
					margin-right: 15px;
					font-size: 15px;
					font-weight: 600;
					margin-bottom: 0px;
					}	
				
				.th-name-project a{
					color: #333333;
                    font-size: 15px;
					}
					
				.th-name-project a:hover{
					color: #2196f3;	
				}
				
				.th-settings{
					text-align:right;
					}
						
				</style>
                
                <script>
					$('#close-secondary-sitebar').click(function() {
                        $('#secondary-sitebar-block').toggle();
                    });
				</script>
                
                
                            <tbody>
               @foreach($stages as $client) 
              
               <tr   id="del{{$client->id}}">
                    <td class="th-name-project"><a href="{{$client->protokol}}://{{$client->name}}" target="_blank">{{$client->name}}</a></td>
                    <td class="th-user-to-week"> <label class="msite_pos_{{$client->id}}"></label><img src="https://cloud.neiros.ru/images/diagrama.png" alt=""></td>
                    <td class="th-order-to-week"> <label class="msite_lead_{{$client->id}}" ></label><img src="https://cloud.neiros.ru/images/graph.png" alt=""></td>
                    <td class="th-fast-menu">
                    <a href="/reports"><i class="fa fa-line-chart"></i> </a>
                    <a href="/projects"><i class="fa fa-user"></i></a>
                    <a href="/calltracking"><i class="fa fa-phone"></i></a>
                    <a href="/widgets"><i class="fa fa-cube"></i>  </a>
                    <a href="/dialogs"><i class="fa fa-commenting-o"></i></a>
                    </td>
                    
                     <td class="th-status">
                     	<div class="th-status-var status-active">
                        <img  src="https://cloud.neiros.ru/images/check.svg" alt="">
                        <label>Код подключен корректно</label>
                        </div>
                        <div class="th-status-var">
                        <img  src="https://cloud.neiros.ru/images/error.svg" alt="">
                        <label>Код подключен некорректно</label>
                        </div>
                     </td>
                    <td class="th-settings">
                    <a data-settings="settings" class="item-widget1" data-name="Код сайта" data-id="get_cite_sode" data-item_id="{{$client->id}}">
                     <i class="fa fa-cog" aria-hidden="true"></i>
                    </a><a href="#" data-id="{{$client->id}}" data-url="/setting/sites/del/{{$client->id}}"  class="deletefromsite" ><i class="glyphicon  glyphicon-trash" style="color: red"></i></a>
                     </td>
               </tr>
@endforeach

                </tbody>
                
                
                
                
                
                
                
                
           </table>
           
           
           
           
           

        </div>
        <!-- /task manager table -->

        <!-- /footer -->









@endsection
@section('wistis_js')
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/default/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script>
        var bardata = [];



        var w_start_date='{{date('Y-m-d',strtotime('-6 days'))}}';
        var w_end_date='{{date('Y-m-d')}}';
    </script>
    <script type="text/javascript" src="/default/assets/js/plugins/ui/moment/moment.min.js"></script>

    <script src="/css/pages_assets/setting_sites.js?{{time()}}"></script>
<script>
    @foreach($stages as $stage)
        ajax_zapros('{{$stage->id}}')
@endforeach    </script>
@endsection
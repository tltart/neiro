 @include('widgets.modaladdphone')
 <style>.modal.fade:not(.in) .modal-dialog {
         -webkit-transform: translate3d(25%, 0, 0);
         transform: translate3d(25%, 0, 0);
     }
.page-title1.row {
	display:none;}
.panel.panel-flat .panel-heading{
	    display: none;
	}
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
		
	.panel-flat>.panel-heading+.panel-body {
    padding-top: 0;
    padding-left: 0px;
    padding-right: 0px;
}	
#pagin .pagination{
	    padding-left: 20px;
	
	}
.container__deshbord .panel {
    border-radius: 0px;
    background: no-repeat;
    box-shadow: none;
}
.h6.panel-title, h6.panel-title b{
	    padding-left: 4px;    font-weight: 500;
    font-size: 25px;
	}	
.panel-top-n{
	    margin-bottom: 16px;
    margin-top: 15px;
	}
.panel-top-n-table{
	padding: 0px;
    background: #fff;
    -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
    border-radius: 10px;
	}		
.table-responsive{
	border-radius:10px;}	
			
</style>
    <div class="col-xs-12 panel-top-n" >
     <h6 class="panel-title"><b>Номера</b>
  </h6>
                <div class="heading-elements">
                       <a class="btn btn-primary" href="#myModalBox" data-toggle="modal">Добавить
            номера</a>
<a class="btn btn-primary" href="#"
                             onclick="delete_from_routing();return false">Удалить из
            сценария</a>
                 
                  
                </div>
</div>
    <div class="col-md-12 panel-top-n-table"><input type="hidden" name="phone_ids" value="{{implode(',',$phones->pluck('id')->toArray())}}">
        <fieldset>

            <table class="table">
                <thead> <tr>
                    <th style="    border-radius: 10px 0px 0px 0px;"></th>
                    <th>Номер</th>
                    <th>Сценарий</th>
                    <th>Звонки</th>
                    <th>Подключен</th>
                    <th>Закреплен до</th>
                    <th style="    border-radius: 0px 10px 0px 0px;"></th>


                </tr></thead>

                @foreach($phones as $phone)
                    <tr id="ids{{$phone->id}}">
                        <td><input type="checkbox" class="my_numberscheckbox"
                                   value="{{$phone->input}}"></td>
                        <td>{{$phone->input}} </td>
                        <td id="phoneroutname{{$phone->input}}">@if(isset($phone->routingm->name)) {{$phone->routingm->name}} @endif</td>
                        <td>{{$phone->amout_call}}</td>
                        <td>{{date('d-m-Y',strtotime($phone->created_at))}}</td>
                        <td class="phone_id_{{$phone->id}}" >@if($phone->time>time()){{date('H:i:s d-m-Y', $phone->time)}}    @endif
                        @if($phone->rezerv==1)<i class="fa fa-lock" title="резервный"></i>@endif
                        </td>
                        <td><a href="#"
                               onclick="delete_number({{$phone->input}},{{$phone->id}});return false;"><i
                                        class="glyphicon  glyphicon-trash"
                                        style="color: red"></i> </a></td>


                    </tr>
                @endforeach

            </table>
        </fieldset>
    </div>
    {{--Дополнительные поля--}}


<script>

    setInterval(get_time_numbers,2000)
    function get_time_numbers(){
        var numl=$('[name="phone_ids"]').val();
        $.ajax({
            method:'get',
            url:'/ajax/get_time_rezerv',
            data:{ids:numl},
            success:function (data){
                console.log(data);
data.forEach( function (item){
console.log(item);
  $('.phone_id_'+item.id).html(item.time)
})
            }
        })


    }

</script>





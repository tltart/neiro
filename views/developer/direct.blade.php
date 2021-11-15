

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                     <div class="col-md-12">
                         <form action="" method="get">
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label>Клиент</label>
                                     <select name="my_comany_id" class="form-control" required>
                                         <option value=""></option>
                                         @foreach($users as $user)
                                             <option value="{{$user->id}}" @if(request()->get('my_comany_id')==$user->id) selected @endif>{{$user->id}}  / {{$user->name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label>Проект</label>
                                     <select name="site_id" class="form-control"  >
                                         <option value=""></option>
                                         @foreach($sitesakk as $user)
                                             <option value="{{$user->id}}" @if(request()->get('site_id')==$user->id) selected @endif>{{$user->id}}  / {{$user->name}}</option>
                                         @endforeach
                                     </select>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label>Дата начало</label>
                                     <input type="date" name="period_start" class="form-control"  value="{{request()->get('period_start')}}">
                                 </div>

                             </div>




                             <div class="col-md-3"><button type="submit">Поиск</button> </div>

                         </form>
                     </div>

                        <div class="table-responsive" style="width: 100%">
                            @if(count($mid_)>0)
                                {!! $mid_->appends(request()->input())->links() !!}
                            @endif   <table class="table table-bordered">
          <thead>
          <tr>
              <td>Кол строк</td>
              <td>Дата</td>
              <td>загрузка из файла</td>
              <td>загрузка апи</td>

              <td>Статус</td>
              <td>Коммент</td>
              <td>Дата</td>
              <td>  </td>
              <td> </td>

              <td> </td>


          </tr>
          </thead>
<tbody>
@foreach($mid_ as  $val)
    <tr>
         <td>{{$val->total_row}}</td>
         <td>{{$val->DateFrom}}</td>
         <td>@if($val->step_load_file>0){{$val->step_load_file}}@endif</td>
         <td>@if($val->step_load_api>0){{$val->step_load_api}}@endif</td>

         <td>{{$val->status}}</td>
         <td>{{$val->comment}}</td>
         <td>@if($val->next_date && $val->next_date->__toString()!=''){{date('H:i d.m.Y',$val->next_date->__toString()/1000-3*60*60)}} @endif </td>
         <td>  @if(isset($company[$val->my_company_id])){{$company[$val->my_company_id]}}@endif </td>
         <td>@if(isset($sites[$val->site_id])){{$sites[$val->site_id]}}@endif </td>

         <td>{{json_decode($val->error)}}</td>


    </tr>



@endforeach
</tbody>

      </table> @if(count($mid_)>0)
                                {!! $mid_->appends(request()->input())->links() !!}
                            @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>



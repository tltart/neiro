

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
                             <div class="col-md-3"> <div class="form-group">
                                     <label>Дата конец</label>
                                     <input type="date" name="period_end" class="form-control"  value="{{request()->get('period_end')}}">
                                 </div></div>



                             <div class="col-md-3"><button type="submit">Поиск</button> </div>

                         </form>
                     </div>

                        <div class="table-responsive" style="width: 100%">
                            @if(count($mid_)>0)
                                {!! $mid_->appends(request()->input())->links() !!}
                            @endif   <table class="table table-bordered">
          <thead><tr>

              <td>date_start</td>
              <td>date_end</td>
              <td>total</td>

              <td>neiros_visit</td>
              <td>site_id</td>
              <td>session_id</td>
              <td>url</td>
                   </tr>
          </thead>
<tbody>
@foreach($mid_ as  $val)
    <tr>
        <td colspan="1" style="border-top :2px solid black ">@if($val->date_start && $val->date_start->__toString()!=''){{date('d.m.Y',$val->date_start->__toString()/1000)}} @endif</td>
        <td colspan="1" style="border-top :2px solid black "></td>
        @php $vm=$val->get_metrika() @endphp

        @if($vm)
            <td colspan="1" style="border-top :2px solid black " >{{$vm->typ}}</td>
            <td colspan="1" style="border-top :2px solid black " >{{$vm->ip}}</td>
            <td colspan="1" style="border-top :2px solid black " >{{$vm->uag}}</td>
            <td colspan="2" style="border-top :2px solid black ">{{$val->metrika_id}} </td>
            @else
            <td colspan="1" style="border-top :2px solid black " ></td>

            <td colspan="4" style="border-top :2px solid black "> {{$val->metrika_id}}</td>
@endif

    </tr>


@foreach($val->many as $data)
    <tr>
        <td>@if($data->date_start&&$data->date_start->__toString()!=''){{date('H:i:s', $data->date_start->__toString()/1000)}} @endif</td>
        <td>@if($data->date_end&&$data->date_end->__toString()!=''){{date('H:i:s',$data->date_end->__toString()/1000)}} @endif </td>
@if(!is_null($data->date_end)&&!is_null($data->date_start))
        <td>{{round(($data->date_end->__toString()-$data->date_start->__toString())/1000)}} сек</td>
        @else
            <td></td>
    @endif

        <td>{{--{{$data->neiros_visit}}--}}</td>
        <td>{{$data->site_id}}</td>
        <td>{{$data->title}}</td>
        <td>{{$data->url}}</td>




    </tr>


@endforeach
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



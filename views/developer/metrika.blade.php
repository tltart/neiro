

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
                                     <select name="my_comany_id" class="form-control my_comany_id" required>
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
                             </div><div class="col-md-3">
                                 <div class="form-group">
                                     <label>Источник</label>
                                     <select name="typ" class="form-control" >
                                         <option value=""></option>
                                         @foreach( \App\Servies\TypeTraffic::$typeNames as $key=> $user)
                                             <option value="{{$key}}" @if(request()->get('typ')!=''&&request()->get('typ')==$key) selected @endif>{{$user}} </option>
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
                             <div class="col-md-3"><div class="form-group">
                                     <label>Дата конец</label>
                                     <input type="date" name="period_end" class="form-control"  value="{{request()->get('period_end')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>IP</label>
                                     <input type="text" name="ip" class="form-control"  value="{{request()->get('ip')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>UA</label>
                                     <input type="text" name="uag" class="form-control"  value="{{request()->get('uag')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>_ID</label>
                                     <input type="text" name="_id" class="form-control"  value="{{request()->get('_id')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>Сделка</label>
                                     <input type="text" name="project_id" class="form-control"  value="{{request()->get('project_id')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>URL</label>
                                     <input type="text" name="url1" class="form-control"  value="{{request()->get('url1')}}">
                                 </div></div>
                             <div class="col-md-3"><div class="form-group">
                                     <label>Только сделками</label>
                                     <input type="checkbox"  name="is_lead"  value="1" @if(request()->has('is_lead')) checked @endif>
                                 </div></div>
                             <div class="col-md-3"><button type="submit">Поиск</button> </div>

                         </form>
                     </div>

                        <div class="table-responsive" style="width: 100%">
      <table class="table table-bordered">
          <thead><tr>
              <td>Страна./Организация</td>

              <td>Дата</td>
              <td>Type</td>
              <td>SRC</td>


              <td>REFER</td>
              <td>URL</td>
              <td>URL</td>
              <td>IP</td>
              <td>NeirosVisit</td>
              <td>UA</td>
              <td>MDM</td>
              <td>SITE</td>
              <td>Sdelka</td>
              <td>Ep</td>
              <td>rf</td>


          </tr></thead>
<tbody>
@foreach($datas as $data)
    <tr>
        <td>{{$data->country}} / {{$data->orepator}}</td>
        <td>{{$data->_id}}</td>
        <td>{{$data->reports_date->toDateTime()->format('d.m.Y H:i')}}</td>
        <td>{{\App\Servies\TypeTraffic::getNameArr($data->typ20)}}<br></td>
        <td>{{$data->src}}</td>
        @php($m20=$data->get_metrika_20(request('my_company_id')))
        @if($m20)


            <td style="max-width: 300px;">{{$m20->referrer}}</td>
            <td>{{$m20->doc_url}}</td>

        @else

            <td></td>
            <td></td>
        @endif
        <td>{{$data->ip}}</td>
        <td>{{$data->neiros_visit}}</td>
        <td>{{$data->uag}}</td>
        <td>{{$data->mdm}}</td>
        <td>{{$data->project_id}}</td>
        <td>{{$data->ep}}</td>
        <td>{{$data->rf}}</td>

        <td>@if(isset($sites[$data->site_id])){{$sites[$data->site_id]}} @endif</td>

    </tr>


@endforeach
</tbody>
          @if(count($datas)>0)
{!! $datas->appends(request()->input())->links('widgets.render.calltracking.pag') !!}
          @endif
      </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>

<script>

</script>

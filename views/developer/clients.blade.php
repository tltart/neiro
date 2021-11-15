@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
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
            </div><div class="col-md-3">
                <div class="form-group">
                    <label>Клиенты с одинаквым нейросом</label>
                     <input type="radio" name="type" value="neiros_visit" @if(request()->type=='neiros_visit') checked @endif>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Одинаковые телефоны телефоном</label>
                    <input type="radio" name="type" value="phone" @if(request()->type=='phone') checked @endif>
                </div>

                </div><div class="col-md-3">
             {{--   <div class="form-group">
                    <label>2 и более телефона телефоном</label>
                    <input type="radio" name="type" value="phone2">
                </div>--}}

                </div>




                            <div class="col-md-3"><button type="submit">Поиск</button> </div>

                        </form>


      <table class="table table-bordered">
          <thead><tr>
              <td>Клиент ID</td>
              <td>Телефон</td>
              <td>Neiros</td>


          </tr></thead>
<tbody>
@php
    $array_p=[];
    $array_n=[];

@endphp
@foreach($datas as $data)
    <tr >
    <td  style="border-top: 3px solid black" colspan="2">{{$data->_id}}</td>
    <td  style="border-top: 3px solid black" colspan="3">{{$data->projects()}}</td>
    </tr>
    @foreach($data->contacts as $contact) <tr>

        <td>{{$contact->CONTACT_TYPE}}</td>
        <td>
            @if(in_array($contact->value,$array_p))<span style="color: red">!!!</span>@endif
            {{$contact->value}}</td>
        <td> @if(in_array($contact->neiros_visit,$array_n))<span style="color: red">!!!</span>@endif{{$contact->neiros_visit}}</td>
        <td>@if($contact->verify==1) <i class="fa fa-check" style="color: green">Verify</i>@endif </td>
        <td>{{$contact->thetyp()}}</td>
    @php if($contact->value!=''){  $array_p[]=$contact->value;} @endphp
    @php if($contact->neiros_visit!=''){   $array_n[]=$contact->neiros_visit; } @endphp
    @endforeach


@endforeach
</tbody>
          @if(count($datas)>0)
{!! $datas->appends(request()->input())->links() !!}
          @endif
      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('app')
@section('title')
    Дополнительные поля

@endsection
@section('content')
    <div class="row">
        <div class="page-title col-md-6" style="padding: 10px">
            <h1><a href="/projects"><i class="icon-arrow-left52 position-left"></i></a><span class="text-semibold">User Agent  поисковых ботов  </span></h1>

        </div><div class="col-md-6"></div>
        <div class="col-md-2"  style="padding: 10px">  <a href="/setting/bots/create" class="btn btn-success">Добавить</a> </div>


    </div>

    <!-- Task manager table -->
    <div class="panel panel-white">
        <div class="panel-heading">
            <h2 class="panel-title">User Agent  поисковых ботов</h2>
            <div class="heading-elements">


            </div>
        </div>

        <table class="table tasks-list table-lg">
            <thead>
            <tr>

                <th>Название</th>


                <th><i class="glyphicon  glyphicon-trash" style="color: red"></i></th>



            </tr>
            </thead>
            <tbody>
            @foreach($datas as $client) <tr   id="del{{$client->id}}">

                <td>{{$client->name}}</td>




                    <td><a href="/setting/bots/delete/{{$client->id}}"   ><i class="glyphicon  glyphicon-trash" style="color: red"></i></a>
                    </td>










            </tr>
            @endforeach

























            </tbody>
        </table>
    </div>
    <!-- /task manager table -->

    <!-- /footer -->









@endsection

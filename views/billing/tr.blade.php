<tr   id="del{{$company->id}}" class="mmkdel{{$company->id}}">
    <td>{{$company->short_name}}</td>
    <td>{{$company->inn}}</td>
    <td>
        <a href="#" data-name="Создать счет" data-id="setting_checkcompanys_create" class="btn btn-success item-widget1">Выставить счет</a>
         </td>




    <td><a href="#"  class="item-widget1"   data-name="Создать компанию" data-id="setting_paycompanys_create"  data-item_id="{{$company->id}}"   ><i class="glyphicon  glyphicon-pencil" style="color: red"></i></a>
    </td>
    <td><a href="#" data-id="{{$company->id}}" data-url="/setting/paycompanys/del/{{$company->id}}"  class="deletefrom" ><i class="glyphicon  glyphicon-trash" style="color: red"></i></a>
    </td>





</tr>
<table class="table tasks-list table-lg">
    <thead>
    <tr>

        <th>Название</th>
        <th>Тип поля</th>
        <th>Значения</th>

        <th><i class="glyphicon  glyphicon-trash" style="color: red"></i></th>


    </tr>
    </thead>
    <tbody id="my_field_tip">
    @foreach($field_tips as $client)
@include('setting.field.tr')
    @endforeach


    </tbody>
</table>

<!-- /task manager table -->

<!-- /footer -->










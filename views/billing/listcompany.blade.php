

        <div class="panel-heading">
            <h6 class="panel-title">Платежные профили</h6>
            <div class="heading-elements">
                <a href="#" class="btn btn-success item-widget1"   data-name="Создать компанию" data-id="setting_paycompanys_create">Добавить</a>


            </div>
        </div>

        <table class="table tasks-list table-lg">
            <thead>
            <tr>

                <th>Наименование</th>
                <th>ИНН </th>

                <th>Счет</th>

                <th><i class="glyphicon  glyphicon-trash" style="color: red"></i></th>
                <th><i class="glyphicon  glyphicon-trash" style="color: red"></i></th>


            </tr>
            </thead>
            <tbody id="my_company_table_table">
            @foreach($companys as $company)
            @include('billing.tr')
            @endforeach

























            </tbody>
        </table>


        <div class="panel-heading">
            <h6 class="panel-title">Счета на оплату</h6>
            <div class="heading-elements">
                <a href="#"  data-name="Создать счет" data-id="setting_checkcompanys_create" class="btn btn-success item-widget1">Создать</a>


            </div>
        </div>

        <table class="table tasks-list table-lg">
            <thead>
            <tr>

                <th>#</th>
                <th>Компания</th>
                <th>Сумма </th>

                <th>Дата</th>
                <th>Статус</th>
                <th>Действия</th>
               @if($admin==1) <th>Оплатить</th>@endif



            </tr>
            </thead>
            <tbody id="table_myform_setting_checkcompanys_btn">
            @foreach($companys as $company)
@include('billing.check.tr')
            @endforeach

























            </tbody>
        </table>

    <!-- /task manager table -->

    <!-- /footer -->


<script>
    function payschet(id) {

        $.ajax({
            type: "POST",
            url: '/ajax/payschet',
            data: "id="+id,
            success: function (html1) {
$res=JSON.parse(html1);
if($res['status']==1){
    m='Успешно';
}else {
    m='Ошибка';


}
                $.jGrowl($res['message'], {
                    header: m,
                    theme: 'bg-'+$res['color']
                });

            }
        })




    }

</script>







            <table class="table tasks-list table-lg table-bordered">
                <thead>
                <tr>

                    <th>Название</th>
<!--                    <th><i class="fa fa-edit"></i></th>-->
                    <th><i class="fa fa-trash" style="color: red"></i></th>



                </tr>
                </thead>
                <tbody id="row2_stage">
               @foreach($stages as $client)
                   @include('setting.stages.tr')
@endforeach

                </tbody>
            </table>

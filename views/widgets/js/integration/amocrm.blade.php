<script>
    $('body').on('change','.stsid',function () {
        id_stage=$(this).val();
        id_status=$(this).data('id');

        $.ajax({
            type: "POST",
            url: '/widget/get_amo_data_safe',
            data: {
                id_stage:id_stage,
                id_status:id_status,

            },
            success: function (html1) {

                mynotif('Успешно','Данные успешно сохранены','info');
            }
        })


    })
    $('body').on('change','.stsiddefault',function () {
        id_status=$(this).val();

        $.ajax({
            type: "POST",
            url: '/widget/get_amo_data_safe_default',
            data: {

                id_status:id_status,

            },
            success: function (html1) {

                mynotif('Успешно','Данные успешно сохранены','info');
            }
        })


    }) ;
    $('body').on('change','.stsiddefaultpiplones',function () {
        id_status=$(this).val();

        $.ajax({
            type: "POST",
            url: '/ajax/get_amo_data_safe_defaultpipline',
            data: {

                id_group:id_status,
                id_pipline:$(this).data('id'),

            },
            success: function (html1) {

                mynotif('Успешно','Данные успешно сохранены','info');
            }
        })


    });
    $('body').on('change','.stsiddefaultpiplonesuser',function () {
        id_status=$(this).val();

        $.ajax({
            type: "POST",
            url: '/ajax/get_amo_data_safe_pipuser',
            data: {

                id_group:id_status,
                id_pipline:$(this).data('id'),

            },
            success: function (html1) {

                mynotif('Успешно','Данные успешно сохранены','info');
            }
        })


    })
    $('body').on('change','.stsid_amous',function () {
        id_status=$(this).val();

        $.ajax({
            type: "POST",
            url: '/widget/get_amo_data_safe_default_user',
            data: {

                id_status:id_status,

            },
            success: function (html1) {

                mynotif('Успешно','Данные успешно сохранены','info');
            }
        })


    })

</script>
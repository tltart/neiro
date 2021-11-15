/*Задачи*/

$(document).on('click', '#telegramnotifi', function () {
    var user_id = $(this).data('tg');
    $.ajax({
        type: "POST",
        url: '/ajax/telegramnotifi',
        data: {
            user_id: user_id
        },
        success: function (html1) {
            new PNotify({
                title: 'Двнные сохранены',

                icon: 'fa-success'
            });


        }
    })


})
$(document).on('click', '.get_connect_moy_sklad', function () {

    $.ajax({
        type: "POST",
        url: '/ajax/testmoisklad',
        data: $('#integration_moysklad').serialize(),
        success: function (html1) {
            if (html1['error'] == 1) {
                new PNotify({
                    title: html1['mess'],

                    icon: 'fa-success'
                })

            } else {

                new PNotify({
                    title: 'Соединение установлено',

                    icon: 'fa-success'
                })
                $('#moy_sklad_select').html(html1['select'])


            }
        }
    })


})

function mynotif(title, text, status) {
    new PNotify({
        title: title,
        text: text,
        icon: 'fa-success', type: status, styling: 'fontawesome'
    });
}


$(document).on('click', '.add_ajax_lead', function () {


    forma = $('#add_ajax_project').serialize();

    promokod = $('input[name=promokod]').val()
    summ = $('input[name=summ]').val()
    valid = 0;
    if (promokod === '') {
        $('input[name=promokod]').css('border-color', '#ca0303');
        valid = 1;
    } else {
        $('input[name=promokod]').css('border-color', '#E2E2E2');
    }

    if (summ === '') {
        $('input[name=summ]').css('border-color', '#ca0303');
        valid = 1;
    } else {
        $('input[name=summ]').css('border-color', '#E2E2E2');
    }
    if (valid === 0) {

        $.ajax({
            type: "POST",
            url: '/ajax/add_ajax_lead_promocod',
            data: forma,
            success: function (html1) {
                new PNotify({
                    title: 'Сделка добавлена!',
                    text: 'Сделка добавлена!',
                    icon: 'fa-success', type: 'Сделка добавлена', styling: 'fontawesome'
                });

                $('#ClientInfoModalAdd').modal('hide');
            }
        })
    }


});


function selsites() {
    id = $('#selectsite').val();

    if (id == 'CREATE') {
        window.location.href = '/setting/sites/create';
        return;
    }

    $.ajax({
        type: "POST",
        url: '/ajax/set_sites',
        data: '&selsites=' + id,
        success: function (html1) {

            if (html1 == 1) {

                href = window.location.href;
                window.location.reload();
            } else {


            }
        }
    })


}


$('#select-id-project .dropdown-menu-left a').on('click', function (e) {
    e.preventDefault();
    data_value = $(this).attr('data-value');
    if (data_value == 'CREATE') {
        window.location.href = '/setting/sites/create';
        return;
    }
    if (data_value == 'SITES') {
        window.location.href = '/setting/sites';
        return;
    }

    $.ajax({
        type: "POST",
        url: '/ajax/set_sites',
        data: '&selsites=' + data_value,
        success: function (html1) {

            if (html1 == 1) {

                href = window.location.href;
                window.location.reload();
            } else {


            }
        }
    })

})

// Sortable rows
/*$(".row-sortable").sortable({
    connectWith: '.row-sortable',
    items: '.panel',
    items: '.panel:not(.skip-sort)',
    helper: 'original',
    cursor: 'move',
    handle: '[data-action=move]',
    revert: 100,
    containment: '.content-wrapper',
    forceHelperSize: true,
    placeholder: 'sortable-placeholder',
    forcePlaceholderSize: true,
    tolerance: 'pointer',
    start: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());

    }
    ,
    update: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());


        datatosend = {
            project_id: ui.item.attr('data-id'),
            stage_id: ui.item.offsetParent().attr('data-cat'),
            _token: $('[name=_token]').val(),
        }


        send_ajax(datatosend, '/projects/edit/updatestage', 'updatestage')

    }
});*/

$('.edit_users,.edit_usersadmin').click(function () {

    taskId = $('#taskId').val();
    name = $('#name').val();
    email = $('#email').val();
    password = $('#password').val();
    role = $('#role').val();
    apikey = $('#apikey').val();
    adminadd = $('#adminadd').val();
    users_group_id = $('#users_group_id').val();
    tarif = $('#tarif').val()
    if (adminadd == 1) {
        company = $('#company').val();
        urlka = '/setting/adminclient'

        ;
    } else {

        company = '';
        urlka = '/setting/users'
    }

    dataroles = {};

    dataroles['modulsdelki'] = {};
    dataroles['modulsdelki']['read'] = 0;
    dataroles['modulsdelki']['create'] = 0;
    dataroles['modulsdelki']['edit'] = 0;
    dataroles['modulsdelki']['delete'] = 0;
    $('[name="modulsdelki"]:checked').each(function () {

        if ($(this).val() == 'read') {
            dataroles['modulsdelki']['read'] = 1;
        }
        if ($(this).val() == 'create') {
            dataroles['modulsdelki']['create'] = 1;
        }
        if ($(this).val() == 'edit') {
            dataroles['modulsdelki']['edit'] = 1;
        }
        if ($(this).val() == 'delete') {
            dataroles['modulsdelki']['delete'] = 1;
        }

    });
    /*Задачи*/
    dataroles['modultask'] = {};
    dataroles['modultask']['read'] = 0;
    dataroles['modultask']['create'] = 0;
    dataroles['modultask']['edit'] = 0;
    dataroles['modultask']['delete'] = 0;
    $('[name="modultask"]:checked').each(function () {

        if ($(this).val() == 'read') {
            dataroles['modultask']['read'] = 1;
        }
        if ($(this).val() == 'create') {
            dataroles['modultask']['create'] = 1;
        }
        if ($(this).val() == 'edit') {
            dataroles['modultask']['edit'] = 1;
        }
        if ($(this).val() == 'delete') {
            dataroles['modultask']['delete'] = 1;
        }

    });
    /*Задачи*/
    /*Контакты*/
    dataroles['modulcontact'] = {};
    dataroles['modulcontact']['read'] = 0;
    dataroles['modulcontact']['create'] = 0;
    dataroles['modulcontact']['edit'] = 0;
    dataroles['modulcontact']['delete'] = 0;
    $('[name="modulcontact"]:checked').each(function () {

        if ($(this).val() == 'read') {
            dataroles['modulcontact']['read'] = 1;
        }
        if ($(this).val() == 'create') {
            dataroles['modulcontact']['create'] = 1;
        }
        if ($(this).val() == 'edit') {
            dataroles['modulcontact']['edit'] = 1;
        }
        if ($(this).val() == 'delete') {
            dataroles['modulcontact']['delete'] = 1;
        }

    });
    /*Контакты*/
    /*Контакты*/
    dataroles['modulcompany'] = {};
    dataroles['modulcompany']['read'] = 0;
    dataroles['modulcompany']['create'] = 0;
    dataroles['modulcompany']['edit'] = 0;
    dataroles['modulcompany']['delete'] = 0;
    $('[name="modulcompany"]:checked').each(function () {

        if ($(this).val() == 'read') {
            dataroles['modulcompany']['read'] = 1;
        }
        if ($(this).val() == 'create') {
            dataroles['modulcompany']['create'] = 1;
        }
        if ($(this).val() == 'edit') {
            dataroles['modulcompany']['edit'] = 1;
        }
        if ($(this).val() == 'delete') {
            dataroles['modulcompany']['delete'] = 1;
        }

    });

    datatosend = {
        taskId: taskId,
        name: name,
        email: email,
        password: password,
        apikey: apikey,
        role: role,
        users_group_id: users_group_id,
        company: company,
        tarif: tarif,
        _token: $('[name=_token]').val(),
        dataroles: dataroles


    }
    $.ajax({
        type: "POST",
        url: urlka,
        data: datatosend,
        success: function (html1) {

            if (taskId > 0) {
                mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
            } else {
                window.location.href = urlka;

            }
        }
    })

    return false;
});


$(document).on('click', '.edit_field', function () {
    stageId = $('#stageId').val();
    tipfields = $('#tipfields').val();
    name = $('#field_name').val();
    vields_values = $('#vields_values').val();
    tip_fields = $('#tip_fields').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,
        name: name,
        vields_values: vields_values,
        tip_fields: tip_fields,


    }

    if (tipfields == 0) {
        urlka = '/setting/projectfield';
    }
    if (tipfields == 1) {
        urlka = '/setting/clientfield';
    }
    if (tipfields == 2) {
        urlka = '/setting/companyfield';
    }
    $.ajax({
        type: "POST",
        url: urlka,
        data: datatosend,
        success: function (html1) {
            $('#my_field_tip').prepend(html1);

        }
    })


    return false;
});


$('#tip_fields').change(function () {
    stageId = $('#tip_fields').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,
    }


    $.ajax({
        type: "GET",
        url: '/setting/projectfield/get_tip_field',
        data: datatosend,
        success: function (html1) {
            if (html1 == 0) {
                $('.tselected_fields').hide();

            } else {
                $('.tselected_fields').show();

            }

        }
    })


    return false;
});

$('.edit_tasktodo').click(function () {
    stageId = $('#stageId').val();
    name = $('#name').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,
        name: name,


    }


    $.ajax({
        type: "POST",
        url: '/setting/tasktodo',
        data: datatosend,
        success: function (html1) {

            if (stageId > 0) {
                mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
            } else {
                window.location.href = '/setting/tasktodo';

            }
        }
    })


    return false;
});


$('.change-visable-lids').on('click', function () {

    if ($(this).closest('li').hasClass("disabled")) {
        return false

    } else {

        project_vid = $(this).attr('data-value');
        datatosend = {
            _token: $('[name=_token]').val(),
            project_vid: project_vid,
        }

        $.ajax({
            type: "POST",
            url: '/projects/project_vid',
            data: datatosend,
            success: function (html1) {
                window.location.href = '/projects';
            }
        })


        return false;
    }
})

$('.safe_project_vid').click(function () {
    project_vid = $('input[name=project_vid]:checked').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        project_vid: project_vid,


    }


    $.ajax({
        type: "POST",
        url: '/projects/project_vid',
        data: datatosend,
        success: function (html1) {


            window.location.href = '/projects';


        }
    })


    return false;
});


$('.safe_task_vid').click(function () {
    task_vid = $('input[name=task_vid]:checked').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        task_vid: task_vid,


    }


    $.ajax({
        type: "POST",
        url: '/tasks/task_vid',
        data: datatosend,
        success: function (html1) {


            mynotif('Успешно!', 'Изменения успешно сохранены', 'success')

            window.location.href = '/tasks';


        }
    })


    return false;
});
$('.edit_task_status').click(function () {
    stageId = $('#stageId').val();
    name = $('#name').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,
        name: name,


    }


    $.ajax({
        type: "POST",
        url: '/setting/taskstatus',
        data: datatosend,
        success: function (html1) {

            if (stageId > 0) {
                mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
            } else {
                window.location.href = '/setting/taskstatus';

            }
        }
    })


    return false;
});
$(document).on('click', '.edit_stage', function () {
    stageId = $('#stageId').val();
    name = $('#name').val();
    color = $('#color').val();


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,
        name: name,
        color: color

    }


    $.ajax({
        type: "POST",
        url: '/setting/stages',
        data: datatosend,
        success: function (html1) {

            if (stageId == 0) {
                $('#row2_stage').append(html1);
            } else {

                $('#del_' + stageId).delete();
                $('#row2_stage').append(html1);
            }

        }
    })


    return false;
});
/*edit_site*/
$('.edit_site').click(function () {
    stageId = $('#stageId').val();

    as = $('#myform').serialize();


    datatosend = as;
    ;

    $.ajax({
        type: "POST",
        url: '/setting/sites',
        data: datatosend,
        success: function (html1) {

            if (stageId > 0) {
                mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
            } else {
                window.location.href = '/setting/sites';

            }
        }
    })


    return false;
});


$('.add_ajax_task').click(function () {
    amount_task = $('#amount_task').val();
    datatosend = {
        _token: $('[name=_token]').val(),
        'number': amount_task
    }


    $.ajax({
        type: "POST",
        url: '/projects/get_form_task',
        data: datatosend,
        success: function (html1) {

            $('.new_task_table').append(html1);
            amount_task = parseInt(amount_task) + 1;
            $('#amount_task').val(amount_task);

        }
    })


    return false;
});

$('.add_ajax_task_client').click(function () {
    amount_task = $('#amount_task').val();
    datatosend = {
        _token: $('[name=_token]').val(),
        'number': amount_task
    }


    $.ajax({
        type: "POST",
        url: '/projects/get_form_client',
        data: datatosend,
        success: function (html1) {

            $('.new_task_table').append(html1);
            amount_task = parseInt(amount_task) + 1;
            $('#amount_task').val(amount_task);

        }
    })


    return false;
});

$('.add_ajax_task_modal').click(function () {
    $('#add_ajax_task_modal_form').modal('show');
    return false;
});


$('.task_add').click(function () {

    taskId = $('#taskId').val();


    datatosend = {
        taskId: taskId,
        todo: $('#todo').val(),
        project_id: $('#project_id').val(),
        data: $('#data').val(),
        user: $('#user').val(),
        status: $('#status').val(),
        comment: $('#comment').val(),
        _token: $('[name=_token]').val(),


    }

    if (taskId == 0) {

        send_ajax(datatosend, '/tasks/add', 'addtask');

    } else {


        send_ajax(datatosend, '/tasks/update', 'edittask');


    }


    return false;
});

$('.add_ajax_task_modal_safe').click(function () {

    taskId = 0;


    datatosend = {
        taskId: taskId,
        todo: $('#t_todo_99').val(),
        project_id: $('#t_project_id').val(),
        data: $('#t_data_99').val(),
        user: $('#t_user_99').val(),
        status: $('#t_status_99').val(),
        comment: $('#t_comment_99').val(),
        _token: $('[name=_token]').val(),


    }
    /* */
    $.ajax({
        type: "POST",
        url: '/tasks/add',
        data: datatosend,
        success: function (html1) {


            text = '<tr>' +
                '<td>' + html1 + '</td>' +
                '<td><a href="/tasks/edit/' + html1 + '" target="_blank">' + $('#t_comment_99').val() + '</a></td>' +
                '<td>' + $('#t_data_99').val() + '</td>' +
                '</tr>';
            $('.xcxcxx').append(text)
            $('#add_ajax_task_modal_form').modal('hide');

            mynotif('Успешно!', 'Изменения успешно сохранены', 'success')


        }
    })


    return false;
});

$('.add_ajax_contact_modal_safe').click(function () {

    taskId = $('#t_project_id').val();


    datatosend = {
        taskId: taskId,
        t_fio: $('#t_fio').val(),
        t_email: $('#t_email').val(),
        t_phone: $('#t_phone').val(),
        _token: $('[name=_token]').val(),


    }
    /* */
    $.ajax({
        type: "POST",
        url: '/contacts/add_ajax',
        data: datatosend,
        success: function (html1) {


            text = '<tr   id="' + html1 + '">' +
                '<td>' + html1 + '</td>' +
                '<td>' + $('#t_fio').val() + '</td>' +
                '<td>' + $('#t_phone').val() + '</td>' +
                '<td>' + $('#t_email').val() + '</td>' +
                '<td><a href="/contacts/edit/' + html1 + '" target="_blank"><i class="glyphicon glyphicon-pencil"></i></a></td>' +
                '<td><a href="#" data-id="' + html1 + '" data-url="/contacts/del/' + html1 + '"  class="deletefrom" ><i class="glyphicon  glyphicon-trash" style="color: red"></i></a> </td>' +
                '</tr>';
            $('.xcxcxx').append(text)
            $('#add_ajax_task_modal_form').modal('hide');

            mynotif('Успешно!', 'Изменения успешно сохранены', 'success')


        }
    })


    return false;
});


/*Задачи*/


$('.project_add').click(function () {

    projectId = $('#projectId').val();

    amount_task = $('#amount_task').val();


    datatask = {};
    //  data_comment={};

    for (i = 0; i < parseInt(amount_task); i++) {
        datatask[i] = {};
        datatask[i]['active'] = $('#t_active_' + i).val();
        datatask[i]['todo'] = $('#t_todo_' + i).val();
        datatask[i]['data'] = $('#t_data_' + i).val();
        datatask[i]['user'] = $('#t_user_' + i).val();
        datatask[i]['status'] = $('#t_status_' + i).val();
        datatask[i]['comment'] = $('#t_comment_' + i).val();
        datatask[i]['id'] = $('#t_id_' + i).val();


    }
    idfields_text = $('#idfields').val();
    idfields_array = idfields_text.split(',');
    datafield = {};

    sif = 0;
    idfields_array.forEach(function (entry) {
        datafield[sif] = {};

        field = $('[name="field-' + entry + '"]');
        tip = field.data("tip");

        datafield[sif]['value'] = '';
        datafield[sif]['tip'] = tip;
        datafield[sif]['field'] = entry;
        text = '';


        if ((tip == 1) || (tip == 3) || (tip == 6) || (tip == 8)) {

            datafield[sif]['value'] = field.val();

        }
        if (tip == 4) {
            //чекбоксы
            text = [];
            kx = 0;
            $('[name="field-' + entry + '"]:checked').each(function () {
                text[kx] = $(this).val();
                kx++;
            });
            datafield[sif]['value'] = text;
        }
        if (tip == 5) {

            datafield[sif]['value'] = field.val();//Через запятую  мультиселескт
        }
        if (tip == 9) {   //чекбоксы

            if ($('[name="field-' + entry + '"]:checked').prop('checked')) {
                datafield[sif]['value'] = 1;
            } else {
                datafield[sif]['value'] = 0;
            }

        }
        sif++;
    });


    datatosend = {
        name: $('#name').val(),
        projectId: $('#projectId').val(),
        stage: $('#stage').val(),
        user: $('#user').val(),
        summ: $('#summ').val(),
        tags: $('#tags').val(),
        comment: $('#comment').val(),
        company: $('#company').val(),
        email: $('#email').val(),
        promocod: $('#promocod').val(),
        promocodoff: $('#promocodoff').val(),
        phone: $('#phone').val(),
        fio: $('#fio').val(),
        _token: $('[name=_token]').val(),
        datatask: datatask,
        amount_task: amount_task,
        datafield: datafield
    }

    if (projectId == 0) {

        send_ajax(datatosend, '/projects/add', 'add');

    } else {


        send_ajax(datatosend, '/projects/update', 'editproject');


    }


    return false;
})


function send_ajax(datatosend, url, tip) {
    $.ajax({
        type: "POST",
        url: url,
        data: datatosend,
        success: function (html1) {

            if (tip == 'add') {
                window.location.href = '/projects';
            }
            if ((tip == 'addtask') || (tip == 'edittask')) {
                window.location.href = '/tasks';
            }

            if (tip == 'editproject') {
                mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
            }
            if (tip == 'updatestage') {
                if (html1 > 0) {
                    mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
                } else {
                    mynotif('Успешно!', 'Изменения успешно сохранены', 'success')

                }
            }

        }
    })
}


// Sortable rows
/*$(".row-sortable_task").sortable({
    connectWith: '.row-sortable',
    items: '.panel',
    items: '.panel:not(.skip-sort)',
    helper: 'original',
    cursor: 'move',
    handle: '[data-action=move]',
    revert: 100,
    containment: '.content-wrapper',
    forceHelperSize: true,
    placeholder: 'sortable-placeholder',
    forcePlaceholderSize: true,
    tolerance: 'pointer',
    start: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());

    }
    ,
    update: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());


        datatosend = {
            project_id: ui.item.attr('data-id'),
            stage_id: ui.item.offsetParent().attr('data-cat'),
            _token: $('[name=_token]').val(),
        }


        send_ajax(datatosend, '/tasks/edit/updatestage', 'updatestage')

    }
});*/


function close_task(id) {
    $('#t_active_' + id).val(0);
    $('#t_display_' + id).hide();
}


$('.edit_company').click(function () {
    stageId = $('#stageId').val();

    name = $('#name').val();


    idfields_text = $('#idfields').val();
    idfields_array = idfields_text.split(',');
    datafield = {};

    sif = 0;
    idfields_array.forEach(function (entry) {
        datafield[sif] = {};

        field = $('[name="field-' + entry + '"]');
        tip = field.data("tip");

        datafield[sif]['value'] = '';
        datafield[sif]['tip'] = tip;
        datafield[sif]['field'] = entry;
        text = '';


        if ((tip == 1) || (tip == 3) || (tip == 6) || (tip == 8)) {

            datafield[sif]['value'] = field.val();

        }
        if (tip == 4) {
            //чекбоксы
            text = [];
            kx = 0;
            $('[name="field-' + entry + '"]:checked').each(function () {
                text[kx] = $(this).val();
                kx++;
            });
            datafield[sif]['value'] = text;
        }
        if (tip == 5) {

            datafield[sif]['value'] = field.val();//Через запятую  мультиселескт
        }
        if (tip == 9) {   //чекбоксы

            if ($('[name="field-' + entry + '"]:checked').prop('checked')) {
                datafield[sif]['value'] = 1;
            } else {
                datafield[sif]['value'] = 0;
            }

        }
        sif++;
    });

    /*контакты*/
    amount_task = $('#amount_task').val();


    datacontact = {};
    //  data_comment={};

    for (i = 0; i < parseInt(amount_task); i++) {
        datacontact[i] = {};
        datacontact[i]['active'] = $('#t_active_' + i).val();
        datacontact[i]['fio'] = $('#t_fio_' + i).val();
        datacontact[i]['phone'] = $('#t_phone_' + i).val();
        datacontact[i]['email'] = $('#t_email_' + i).val();
        datacontact[i]['id'] = $('#t_id_' + i).val();


    }
    /*контакты*/


    datatosend = {
        _token: $('[name=_token]').val(),
        stageId: stageId,

        name: name,

        datafield: datafield,
        datacontact: datacontact,

    }


    $.ajax({
        type: "PUT",
        url: '/company/edit',
        data: datatosend,
        success: function (html1) {
            mynotif('Успешно!', 'Изменения успешно сохранены', 'success')

        }
    })


    return false;
});


$('.deletefromsite').click(function () {


    id = $(this).data('id');
    urlka = $(this).data('url');


    datatosend = {
        _token: $('[name=_token]').val(),


    }

    Swal.fire({
        title: 'Вы уверены?',
        text: "Точно хотите удалить проект?!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Да, удалить!'
    }).then((result) => {
        if (result.value) {

            $.ajax({
                type: "POST",
                url: urlka,
                data: datatosend,
                success: function (html1) {
                    $('#del' + id).remove();

                }
            })


        }
    })


    return false;
});


$(document).on('click', '.deletefrom', function () {

    id = $(this).data('id');
    urlka = $(this).data('url');


    datatosend = {
        _token: $('[name=_token]').val(),
        _method: 'delete'


    }
    $(this).closest('tr').hide();

    $.ajax({
        type: "POST",
        url: urlka,
        data: datatosend,
        success: function (html1) {


        }
    })


    return false;
});


/**/

// Sortable rows
/*$("#row2").sortable({


    handle: '[data-action=move]',


    start: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());

    }
    ,
    update: function (e, ui) {
        ui.placeholder.height(ui.item.outerHeight());


        datatosend = {
            project_id: ui.item.attr('data-id'),
            stage_id: ui.item.offsetParent().attr('data-cat'),
            _token: $('[name=_token]').val(),
        }
        handleReorderElements()

    }
});*/

$('.btn-primary.widget_status_checkbox').on('click', function () {
    data_id = $(this).attr('data-id');
    if ($(this).hasClass("checked")) {
        $('.widget_status_checkbox[data-id=' + data_id + ']').removeClass("checked")
        $('.widget_status_checkbox[data-id=' + data_id + ']').text('Подключить');
        if ($(this).closest('.integration-item').find('a').attr('data-target')) {
            target = $(this).closest('.integration-item').find('a').attr('data-target');
            $(target).modal('show')
        }

        HiddenIntegration()
    } else {
        $('.widget_status_checkbox[data-id=' + data_id + ']').addClass("checked")
        $('.widget_status_checkbox[data-id=' + data_id + ']').text('отключить');
        if ($(this).closest('.integration-item').find('a').attr('data-target')) {
            target = $(this).closest('.integration-item').find('a').attr('data-target');
            $(target).modal('show')
        }
        HiddenIntegration()
    }


})

function HiddenIntegration() {
    ModalArray = $('.ClientInfoModal.modal.integration___modal');
    ModalArray.each(function () {

        widget_status_checkbox = $('.widget_status_checkbox', this).text();
        widget_status_checkbox2 = $('.name-block-fixed .widget_status_checkbox', this).text();
        if (widget_status_checkbox === 'Подключить' || widget_status_checkbox2 === 'Подключить') {
            $('.show-hidden-integration', this).css('display', 'none');
            $('.block-descr', this).css('display', 'block');
            $('.name-block-fixed', this).css('display', 'none');
            $(this).addClass('WidgetModal-off');


        } else {
            $('.show-hidden-integration', this).css('display', 'block');
            $('.name-block-fixed', this).css('display', 'block');
            $('.block-descr', this).css('display', 'none');
            $(this).removeClass('WidgetModal-off');
        }

    });
}

HiddenIntegration();


function handleReorderElements() {
    var url = '/setting/stages/updatesort';
    var fieldData = $("#row2").sortable('serialize');
    fieldData += "&action=reorderElements";

    var posting = $.post(url, fieldData);
    posting.done(function (data) {
        mynotif('Успешно!', 'Изменения успешно сохранены', 'success')
    });
}


$(document).on('click', '.w_safebutton_vk', function () {
    var form = $(this).closest('form');
    var formdata = $(form).serialize();


    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: formdata,
        success: function (html1) {


            $('#vk_but_now').html(html1);
        }
    })


});
$(document).on('click', '.w_safebutton', function () {
    var form = $(this).closest('form');
    var modal = $(this).closest('.modal');
    var formdata = $(form).serialize();
    not = 0;
    if ($(this).hasClass('.widget_status_checkbox')) {
        not = 1;
    }

    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: formdata,
        success: function (html1) {
            if(html1=='PROJECT_SAVE'){
$('.block_for_save_project').hide();
                mynotif('Успешно', 'Данные успешно сохранены', 'info');
                return '';
            }            if(html1=='SAVED_MONEY'){
$('.block_for_save_project_money').hide();
                mynotif('Успешно', 'Данные успешно сохранены', 'info');
                return '';
            }


            var url = window.location.href;
            if (not == 0) {
                modal.modal('hide');
            }
            if (html1 == 1) {

                if (url == 'https://cloud.neiros.ru/integration') {
                    mynotif('Успешно', 'Данные успешно сохранены', 'info')
                } else {
                    mynotif('Успешно', 'Данные успешно сохранены', 'info')
                }

                //
            } else {
                if (html1 == 2) {
                    if (url == 'https://cloud.neiros.ru/integration') {
                        mynotif('Успешно', 'Данные успешно сохранены', 'info')
                    } else {
                        mynotif('Успешно', 'Данные успешно сохранены', 'info')
                    }
                    get_data_to_amo(formdata);

                } else {
                    if (html1 == 319) {

                        mynotif('Успешно', 'Данные успешно сохранены', 'info')


                    } else {
                        if (url == 'https://cloud.neiros.ru/integration') {
                            mynotif('Успешно', 'Данные успешно сохранены', 'info')
                        } else {
                            mynotif('Ошибка', 'Что-то пошло не та', 'error');
                        }
                    }
                }
            }
        }
    })


});
$(document).on('click', '.w_safebuttoncreatelead', function () {
    var form = $(this).closest('form');
    var modal = $(this).closest('.modal');
    var formdata = $(form).serialize();
    not = 0;
    if ($(this).hasClass('.widget_status_checkbox')) {
        not = 1;
    }

    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: formdata,
        success: function (html1) {
            window.location.reload();
            var url = window.location.href;
            if (not == 0) {
                modal.modal('hide');
            }
            if (html1 == 1) {

                if (url == 'https://cloud.neiros.ru/integration') {
                    mynotif('Успешно', 'Данные успешно сохранены', 'info')
                } else {
                    mynotif('Успешно', 'Данные успешно сохранены', 'info')
                }

                //
            } else {
                if (html1 == 2) {
                    if (url == 'https://cloud.neiros.ru/integration') {
                        mynotif('Успешно', 'Данные успешно сохранены', 'info')
                    } else {
                        mynotif('Успешно', 'Данные успешно сохранены', 'info')
                    }
                    get_data_to_amo(formdata);

                } else {
                    if (url == 'https://cloud.neiros.ru/integration') {
                        mynotif('Успешно', 'Данные успешно сохранены', 'info')
                    } else {
                        mynotif('Ошибка', 'Что-то пошло не та', 'error');
                    }
                    //
                }
            }
        }
    })


});
$(document).on('click', '.delet_chenel', function () {
    data_id = $(this).data('id');

    $.ajax({
        type: "POST",
        url: '/setting/advertisingchannel/delete1',
        data: {
            id: data_id
        },
        success: function (html1) {

            $('#del' + data_id).hide();

        }
    })


})
$(document).on('click', '.add_adversinchannael', function () {
    var form = $(this).closest('form');
    var formdata = $(form).serialize();


    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: formdata,
        success: function (html1) {

            $('#add_adversinchannael_td').append(html1);

        }
    })


});

function addcanal() {
    canal = $('#canal').val();


    datatosend = {
        canal: canal,

        _token: $('[name=_token]').val(),


    };
    $.ajax({
        type: "POST",
        url: '/ajax/addcanalpromocod',
        data: datatosend,
        success: function (html1) {
            $('#table_costs').append(html1);
        }


    });


}

function deletecanalcpomocod(id) {
    datatosend = {
        id: id,

        _token: $('[name=_token]').val(),


    };
    $.ajax({
        type: "POST",
        url: '/ajax/deletecanalcpomocod',
        data: datatosend,
        success: function (html1) {
            $('#cost' + id).remove();
        }


    });
}

function addcoastcanal() {
    cost_canal = $('#cost_canal').val();
    canal_summ = $('#canal_summ').val();
    cost_start_date = $('#cost_start_date').val();
    cost_end_date = $('#cost_end_date').val();


    datatosend = {
        cost_canal: cost_canal,
        canal_summ: canal_summ,
        cost_start_date: cost_start_date,
        cost_end_date: cost_end_date,
        _token: $('[name=_token]').val(),


    };
    $.ajax({
        type: "POST",
        url: '/ajax/addcanal',
        data: datatosend,
        success: function (html1) {
            $('#table_costs').append(html1);
        }


    });


}

$(document).on('click', '.save-setings-foreports', function () {


    forma = $('#formCreateReports').serialize();
    llname = $('.namedddd').val();
    if (llname.length == 0) {
        alert('Название отчета')
        return false;
    }
    $('#myModalCreateRestort').modal('hide');
    $.ajax({
        type: "POST",
        url: '/allreports/create_w',
        data: forma,
        success: function (html1) {
            m = JSON.parse(html1)
            window.location.reload()

        }
    })

});

var vart_formCreateReports = '';
$('body').on('click', '.editreportopen', function (e) {
    e.preventDefault();
    $('#WidgetModal').modal('hide');
    $('#WidgetModal2').modal('hide');
    element_id = $(this).data('id');


    $.ajax({
        type: "POST",
        url: '/allreports/get_edit',
        data: {id: element_id},
        success: function (html1) {
            $('#WidgetModal4').modal('show');
            $('#WidgetModal .block-descr').css('display', 'block');
            $('#WidgetModal4  .insert-h1').html(widget_name)

            $('#WidgetModal4  .block-descr').html(html1['renders']);
            $('#WidgetModal4  .block-descr').show();
        }
    })

    /*myModalCreateRestort
    * mod_cr*/


})

function delete_reports(id) {
    $('#WidgetModal4').modal('hide');

    $('#myModalCreateRestort').modal('hide');
    $.ajax({
        type: "POST",
        url: '/allreports/delete_reports',
        data: {id: element_id},
        success: function (html1) {

            $(' [data-valur="' + element_id + '"]').remove()
            $(' [data-id="' + element_id + '"]').remove()
            $(' [data-f="' + element_id + '"]').remove()

        }
    })

}

function update_reports() {

    forma = $('#formCreateReports').serialize();
    llname = $('#namedd').val();
    if (llname.length == 0) {
        alert('Название отчета')
        return false;
    }
    $('#myModalCreateRestort').modal('hide');
    $.ajax({
        type: "POST",
        url: '/allreports/update_reports',
        data: forma,
        success: function (html1) {
            m = JSON.parse(html1)
            $(' [data-valur="' + m['id'] + '"]').html(m['name'])
            $('#WidgetModal4').modal('hide');
        }
    })

}

$(document).on('click', '.safe_sms_seport', function () {

    forma = $('#smsreports_add').serialize();

    if ($('[name="phone"]').val() == '') {
        alert('Номер телефона обязателен')
        return false;
    }

    $.ajax({
        type: "POST",
        url: '/ajax/sms_report_create',
        data: forma,
        success: function (html1) {
            if (html1['error'] == 1) {
                alert(html1['mess']);
            } else {
                $('#my_smsreport_table').prepend(html1['mess']);

            }

        }
    })

})
$(document).on('click', '.my_add_my_company', function () {

    forma = $('#myform_add_company').serialize();


    $.ajax({
        type: "POST",
        url: '/setting/paycompanys',
        data: forma,
        success: function (html1) {
            if (html1['edit'] == 0) {
                $('#my_company_table_table').prepend(html1['html']);
                $('#WidgetModal4').modal('hide');
            } else {
                $('.mmkdel' + html1['edit']).remove();
                $('#my_company_table_table').prepend(html1['html']);
                $('#WidgetModal4').modal('hide');
            }


        }
    })

})
$(document).on('click', '.myform_setting_checkcompanys_btn', function () {

    forma = $('#myform_setting_checkcompanys').serialize();


    $.ajax({
        type: "POST",
        url: '/setting/checkcompanys',
        data: forma,
        success: function (html1) {

            $('#table_myform_setting_checkcompanys_btn').prepend(html1);
            $('#WidgetModal4').modal('hide');


        }
    })

})

function update_reports() {

    forma = $('#formCreateReports').serialize();
    llname = $('#namedd').val();
    if (llname.length == 0) {
        alert('Название отчета')
        return false;
    }
    $('#myModalCreateRestort').modal('hide');
    $.ajax({
        type: "POST",
        url: '/allreports/update_reports',
        data: forma,
        success: function (html1) {
            m = JSON.parse(html1)
            $(' [data-valur="' + m['id'] + '"]').html(m['name'])
            $('#WidgetModal4').modal('hide');
        }
    })

}


$(document).on('click', '.item-widget1', function () {

    $('#WidgetModal').modal('hide');
    $('#WidgetModal2').modal('hide');
    var widget_tip = $(this).data('id');
    var item_id = $(this).data('item_id');
    var widget_name = $(this).attr('data-name');

    $.ajax({
        type: "POST",
        url: '/widget/get_setting',
        data: {subtip: widget_tip, item_id: item_id},
        success: function (html1) {
            $('#WidgetModal4').modal('show');
            $('#WidgetModal .block-descr').css('display', 'block');
            $('#WidgetModal4  .insert-h1').html(widget_name)
            if (widget_name == 'Настройка Промокодов' || widget_name == 'Настройка Рекламных каналов' || widget_name == 'Настройка Расходов') {
                $('#WidgetModal4  #accordion').html(html1['renders']);
                $('#WidgetModal4 #accordion').show();


            } else {
                $('#WidgetModal4  .block-descr').html(html1['renders']);
                $('#WidgetModal4  .block-descr').show();

            }


        }
    })

});

function provbik() {
    bic = $('#bik').val();
    $.get("https://bik-info.ru/api.html?type=json&bik=" + bic, function (data) {
        res = data;


        $(".frombic").html(`
                  Кор.с: ` + res['ks'] + `<br>
                  Название: ` + res['name'] + ` `);

    });

}

$(document).on('click', '.w_safebutton_wmail', function () {


    $('#WidgetModal4').modal('hide');
    $.ajax({
        type: "POST",
        url: '/widget/safe',
        data: $('#emailtrackingsetting').serialize(),
        success: function (html1) {

            $('#email_id_' + html1['edit']).remove();
            $('#email_clientov_traking').append(html1['text']);
        }
    })

});

function test_email() {


    $.ajax({
        type: "POST",
        url: '/widgetd/imap_test',
        data: $('#emailtrackingsetting').serialize(),
        success: function (html1) {
            if (html1 == 1) {

                new PNotify({
                    title: 'Соединение установлено',

                    icon: 'fa-success'
                });

            } else {
                new PNotify({
                    title: 'Ошибка',

                    icon: 'fa-success'
                });
            }


        }
    })


    return false;


}

$(document).on('change', '.email_servier_id', function () {
    if ($(this).val() == 0) {

        $('.hiddeness').show();

    } else {
        $('.hiddeness').hide();
    }
})
$(document).on('click', '.add_ticket', function () {
    if ($('#t_subject').val() == '') {
        new PNotify({
            title: 'Тема обязательна',

            icon: 'fa-success'
        });
        return;
    }
    if ($('#t_content').val() == '') {
        new PNotify({
            title: 'Описание обязательно',

            icon: 'fa-success'
        });
        return;
    }
    $('#WidgetModal4').modal('hide');
    forma = $('#t_form_ticket').serialize();
    $.ajax({
        type: "POST",
        url: '/ajax/add_ticket',
        data: forma,
        success: function (html1) {

            new PNotify({
                title: 'Тикет добавлен',

                icon: 'fa-success'
            });


            $('#ticket_body').prepend(html1);

        }
    })

})

function add_email_expected(id) {
    $.ajax({
        type: "POST",
        url: '/ajax/add_expected_email',
        data: {
            widget_id: id,
            email: $('#ecpect_email').val(),
        },
        success: function (html1) {
            $('#table_expected_email').prepend(html1);
            new PNotify({
                title: 'E-mail добавлен',

                icon: 'fa-success'
            });


        }
    })


}

function add_email_group(id) {
    $.ajax({
        type: "POST",
        url: '/ajax/add_group_email',
        data: {
            widget_id: id,
            name: $('#group_email').val(),
        },
        success: function (html1) {
            $('#table_group_email').prepend(html1);
            new PNotify({
                title: 'Группа добавлена',

                icon: 'fa-success'
            });


        }
    })


}

$(document).on('click', '.new_wistis_delete', function () {
    /*data-model="310d20beddbda816a6358f3018fd46c0" data-id*/
    is_this = $(this);
    $.ajax({
        type: "POST",
        url: '/ajax/new_wistis_delete',
        data: {
            model: $(this).data('model'),
            id: $(this).data('id'),
        },
        success: function (html1) {
            is_this.closest('tr').remove();
            new PNotify({
                title: 'Успешно удалено',

                icon: 'fa-success'
            });


        }
    })


});

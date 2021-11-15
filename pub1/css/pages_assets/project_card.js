$(document).on('click', '.btn-toggle', function (e) {
	e.preventDefault();

	var
		$this = $(this),
		content = $(this).parents('.timeline-block__body').next('.timeline-block__content').find('.block-toggle');


	if (!$this.hasClass('trigger')) {
		$this.addClass('trigger');
		$this.html('Свернуть');

		content.slideDown();
	} else {
		$this.removeClass('trigger');
		$this.html('Подробнее');

		content.slideUp();
	}
});


$(document).on('click', '.links-add-comment', function (e) {
	e.preventDefault();
	$(this).toggleClass('click').siblings('.form-box-hidden').slideToggle().find('textarea').focus();
});


/*
$(document).on('click', '.links-load-list', function (e) {
		e.preventDefault();
		$('.list-time-lapse li:hidden').slice(0, 17).slideDown();

		var onBlock = $('.list-time-lapse li:hidden').length;
		if (onBlock <= 0) {
				$('.links-load-list').hide();
		}
});
*/


$(document).on('click', '.btn-input-add', function (e) {
	e.preventDefault();
	$(this).parents('.input-group-col').append(`<div class="input-group input-group-add">
<input type="text" class="form-control form-control-my class_chenge_project" name="` + $(this).data('field') + `[]" placeholder=" ` + $(this).data('placeholder') + `">
        <a href="#" class="btn-input btn-input-edit">
     <img src="img/img_project_info/edit.svg" alt="">
      </a></div>`);
});

$(document).on('keyup', '.class_chenge_project', function () {
	$('.block_for_save_project').show();

});

$(document).on('click', '.hide_block_for_save_project', function () {
	$('.block_for_save_project').hide();
})
$(document).on('click', '.list-deals__item', function () {
	$('.status-deals-' + $(this).data('project_id')).html($(this).data('name'))
	$('.status-deals-' + $(this).data('project_id')).css({ 'background': $(this).data('color') });

	$.ajax({
		type: "POST",
		url: '/ajax/set_project_stage',
		data: {
			stage_id: $(this).data('stage_id'),
			project_id: $(this).data('project_id'),
		},
		success: function (html1) {

		}

	})


});


$(document).on('click', '.delete_summ_tr', function () {

	$(this).closest('tr').remove();

})
$(document).on('click', '.add_money_form_btn', function () {
	pr_id = $(this).data('project_id')
	money = $('.summ_for_project' + pr_id).val();
	datef = $('.date_for_project' + pr_id).val();
	var varclosest = $(this).closest('tr');
	$.ajax({
		type: "POST",
		url: '/ajax/project_add_money',
		data: {
			money: money,
			project_id: pr_id,
			date: datef

		},
		success: function (html1) {
			$(varclosest).html(`  <td>
  <div class="table-cabinet__date"></div>
   </td>
        <td>
    <div class="table-cabinet__number"></div>
  </td>
 <td>
  ` + datef + `
  </td>
  <td>
  <div class="table-cabinet__sum input-group">
  <input type="text"
  class="form-control form-control-my"
  name="name"
    value="  ` + money + ` ₽">
  <a href="#"
  class="btn-input btn-input-edit">
   <img src="img/img_project_info/edit.svg"
  alt="">
   </a>
                                                                            </div>
                                                                        </td>`);


		}
	})


});


$(document).on('click', '.links-load-list', function () {
	let id = $(this).data('id');
	let thiss = this;

	$.ajax({
		type: "POST",
		url: '/ajax/card_info_api',
		data: {
			method: 'getLinks',
			id: id,
		},
		success: function (html1) {
			$(thiss).remove();
			$('.list-time-lapse' + id).html('');
			var tpl = $('template.li_link_template');

			html1.data.forEach(function (item, i, arr) {
				add_url = item.replace(/https:\/\//g, '')
				add_url = add_url.replace(/http:\/\//g, '')
				add_url = add_url.replace(/www\./g, '')
				template = tpl.html().replace(/__URL__/g, add_url);
				ts = template.replace(/__PAGE__/g, 'Переход');
				if (i == 0) {
					ts = template.replace(/__PAGE__/g, 'Вход');
				}

				if ((i + 1) == html1.data.length) {
					ts = template.replace(/__PAGE__/g, 'Выход');
				}
				$('.has-many-blocks-forms').append(ts);
				$('.list-time-lapse' + id).append(ts)
                $('[data-toggle="tooltip"]').tooltip()
			});
		}

	})


})
$(document).on('click', '.info_project_podrobnee', function () {
	let id = $(this).data('id');
	let thiss = this;

	$.ajax({
		type: "POST",
		url: '/ajax/card_info_api',
		data: {
			method: 'getVisitInfo',
			id: id,
		},
		success: function (html1) {

			$('.characteristics-info' + id).html('')
			var tpl = $('template.characteristics_template');

			html1.data.forEach(function (item, i, arr) {
				template = tpl.html().replace(/__KEY__/g, item.key);
				template = template.replace(/__VAL__/g, item.value);

				$('.characteristics-info' + id).append(template)

			});
		}

	})


})
$(document).on('keyup', '.project_keyup_money', function () {
	$('.block_for_save_project_money').show();
})
$(document).on('click', '.project_keyup_money', function () {
	this_val = $(this).val();
	ts = this_val.replace(/ ₽/g, '');
	$(this).val(ts);
});
index = 0;
$(document).on('click', '.add_field_summ_to_project', function () {


	pr_id = $(this).data('project_id');
	var tpl = $('template.client_template_summ');
	index++;
	var tplm = tpl.html().replace(/__PR_ID__/g, pr_id);

	var template = tplm.replace(/__LA_KEY__/g, index);

	$(template).insertAfter('.pr_table_with_summ' + pr_id);
	$('.block_for_save_project_money').show();

})
$('#has-many-blocks').off('click', '.remove').on('click', '.remove', function () {

	$(this).closest('tr').hide();
	$(this).closest('tr').find('.fom-removed').val(1);
	return false;
});
// scroll horizontal
// $(window).on("load", function () {
//     $(".scroll-horizontal-modal").mCustomScrollbar({
//         axis: "y"
//     });
// });


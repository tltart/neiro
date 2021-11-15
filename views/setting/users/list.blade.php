@extends('app')
@section('title')
Этапы сделок

@endsection
<script type="text/javascript" src="/global_assets/js/plugins/forms/styling/switchery.min.js"></script>

<link href="/cdn/v1/chatv2/css/select2.css" rel="stylesheet" type="text/css">




@section('content')
<div class="tabs-wrapper">

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab"
				data-toggle="tab">Пользователи</a></li>
		<li role="presentation"><a href="#group-user" aria-controls="group-user" role="tab" data-toggle="tab">Группы</a>
		</li>
	</ul>


	<div class="dropdown add-user-new">
		<button id="dLabel" class="btn btn-success" type="button" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false">
			Добавить
		</button>
		<ul class="dropdown-menu" aria-labelledby="dLabel">
			<li><a href="#" class="add_user_ajax">Пользователя</a></li>
			<li><a href="#" class="add_group_blocks">Группу</a></li>
		</ul>
	</div>
</div>

<input name="_token" type="hidden" value="{{ csrf_token() }}" />
<!-- Task manager table -->
<div class="panel panel-white user-setting">






	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="users">

			<div class="tabs-content-wrapper">
				<div class="table-responsive">
					<table class="table tasks-list table-lg">
						<thead>
							<tr>
								<th>Имя</th>
								<th>E-mail</th>
								<th>Группа</th>
								<th>Роль</th>
								<th class="text-center">Активность</th>
								<th class="text-center">Редактировать</th>
								<th class="text-center">Удалить</th>
							</tr>
						</thead>
						<tbody id="user_tbody">
							@foreach($stages as $client) <tr id="del{{$client->id}}">

								<td><span class="user-avatar user-avatar-ic"> @if((isset($client))&&($client->image!=''))
										<span class="user-avatar user-avatar2"> <img
												src="https://disk.neiros.ru/user_upload/{{$client->image}}"></span>

										@else
										<span class="user-avatar"> <img src="/global_assets/images/icon/user/user.svg"></span>
										@endif></span><span class="user-name">{{$client->name}}</span></td>
								<td>{{$client->email}}</td>
								<td>@if($client->groups){{implode(',',$client->groups->pluck('name')->toArray())}}@endif

								</td>
								<td>@if($client->grouproles){{implode(',',$client->grouproles->pluck('name')->toArray())}}@endif


								</td>
								<td class="text-center"><span class="switchery-xs"><input checked type="checkbox" class="js-switch"
											data-id="{{$client->id}}"></span></td>
								<td class="text-center"><a class="edit-user" data-id="{{$client->id}}"><img class="user-btn"
											src="/global_assets/images/icon/user/edit.svg"></a></td>
								<td class="text-center">@if($client->id!==1)<a href="#" data-id="{{$client->id}}"
										data-url="/setting/users/{{$client->id}}" class="deletefrom"><img class="user-btn"
											src="/global_assets/images/icon/user/trash.svg"></a>@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade " id="group-user">
			<div class="tabs-content-wrapper">
				<div class="table-responsive">
					<table class="table tasks-list table-lg">
						<thead>
							<tr>
								<th>Название группы</th>
								<th>Количество человек</th>
								<th></th>
								<th class="text-center">Редактировать</th>
								<th class="text-center">Правила</th>
								<th class="text-center">Удалить</th>
							</tr>
						</thead>
						<tbody id="user_group_tr">

							@foreach($groups as $group)
							@include('setting.users.group_tr')
							@endforeach

						</tbody>
					</table>

				</div>
			</div>
			<div class="add-group-conatiner form-inline">
				<div class="add-group-text">
					<div><span>+</span>Добавить группу</div>
				</div>

				<div class="cont-create-group" style="display:none">
					<div class="form-group">
						<input type="text" class="form-control " id="my_group_name" placeholder="Введите название группы" value="">
					</div>
					<a class="btn btn-info add_group">Создать</a>
				</div>
			</div>
		</div>
	</div>


</div>



<!-- /task manager table -->

<!-- /footer -->

<div id="ClientInfoModal" class="modal fade ClientInfoModal lids-neiros user-neiros">

</div>
</div>





<script type="text/javascript" src="/js/select2.min.js"></script>
<script src="/js/inputTags.jquery.js"></script>
<script>
/* ------------------------------------------------------------------------------
 *
 *  # Select2 selects
 *
 *  Demo JS code for form_select2.html page
 *
 * ---------------------------------------------------------------------------- */



document.addEventListener('DOMContentLoaded', function() {
	// Format icon
	function iconFormat(icon) {
		var originalOption = icon.element;
		if (!icon.id) {
			return icon.text;
		}
		/* var $icon = "<i class='icon-" + $(icon.element).data('icon') + "'></i>" + icon.text;*/
		var $icon =
			"<div class='selected-icons-select2'><img  src='/global_assets/images/icon/user/user.svg'></div><div class='selected-icons-select2-text'>" +
			icon.text + "</div>";
		return $icon;
	}

	// Initialize with options

	function reload_select() {

		select3 = $(".select-icons").select2({
			templateResult: iconFormat,
			minimumResultsForSearch: Infinity,
			closeOnSelect: false,
			templateSelection: iconFormat,
			escapeMarkup: function(m) {
				return m;
			}
		});
		select3.each(function(index) {
			$(this).data('select2').$dropdown.addClass("selection-user-drop");
		});

		if ($(".select-group-user").children().length >= $(".select-group-user").next(".select2-container--below").find('li').length) {
			$('.select-conainer-icon-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');
			$('.select-group-user').on('select2:unselect', function(e) {
				$('.select-conainer-group-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');
				set_user_group($(this).val(), $(this).closest('tr').attr('data-id'))
			});

			$('.select-group-user').on('select2:select', function(e) {
				set_user_group($(this).val(), $(this).closest('tr').attr('data-id'));
				$('.select-conainer-group-multi .select2-search__field').attr('placeholder', '+ Добавить пользователя');
			});
		}
		

		if ($(".select-roll-user").children().length >= $(".select-roll-user").next(".select2-container--below").find('li').length) {
			console.log(1488)
			$('.select-roll-user').on('select2:unselect', function(e) {
				$('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
			});

			$('.select-roll-user').on('select2:select', function(e) {
				$('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
			});
			$('.select-conainer-icon-roll .select2-search__field').attr('placeholder', '+ Добавить Роль');
		}
		

		if ($(".select-group2-user").children().length >= $(".select-group2-user").next(".select2-container--below").find('li').length) {
			$('.select-group2-user').on('select2:unselect', function(e) {
				$('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');
			});

			$('.select-group2-user').on('select2:select', function(e) {
				$('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');
			});
			$('.select-conainer-icon-group2 .select2-search__field').attr('placeholder', '+ Добавить Группу');
		}
		

	}

	reload_select()




	function set_user_group(user, group) {
		$.ajax({
			type: "POST",
			url: '/setting/users/set_user_group',
			data: {
				user: user,
				group: group
			},
			success: function(html1) {

				$('.group_count_' + group).html(html1);


			}
		})
	}
	$('.add-group-text div').on('click', function() {
		$(this).css('display', 'none');
		$('.cont-create-group').css('display', 'block');
	});
	$('.add_group_blocks').on('click', function(e) {
		e.preventDefault();
		$('.add-group-text').css('display', 'none');
		$('.cont-create-group').css('display', 'block');
	});

	var select2 = $('.js-example-basic-single').select2({
		placeholder: '<img src="/global_assets/images/icon/user/plus.PNG"> Добавить пользователя',
		/*  	minimumResultsForSearch: -1,*/
		escapeMarkup: function(markup) {
			return markup;
		}
	});
	select2.each(function(index) {
		$(this).data('select2').$dropdown.addClass("selection-user-drop");
	});


	$('.user-rolls').select2({
		minimumResultsForSearch: -1

	})


	$(document).on('click', '.edit-user', function() {

		$.ajax({
			type: "POST",
			url: '/setting/users/getajaxuser',
			data: {
				id: $(this).data('id')
			},
			success: function(html1) {

				$('#ClientInfoModal').html(html1);
				$('#ClientInfoModal').modal('show');
				$('.user-rolls').select2({
					minimumResultsForSearch: -1

				})
				reload_select()
			}
		})


	});
	$(document).on('click', '.add_user_ajax', function() {

		$.ajax({
			type: "POST",
			url: '/setting/users/getnewuser',
			data: {
				id: '',

			},
			success: function(html1) {

				$('#ClientInfoModal').html(html1);
				$('#ClientInfoModal').modal('show');
				$('.user-rolls').select2({
					minimumResultsForSearch: -1

				})
				reload_select()


			}
		})


	});





	$(document).on('click', '.w_safebutton_new', function() {
		var my_form = $('#form_user_save').serialize();
		var formData = new FormData($('#form_user_save')[0])
		$.ajax({
			type: "POST",
			url: '/setting/users/saveajaxuser',
			data: formData,
			processData: false,
			contentType: false,
			success: function(html1) {
				if (html1['is_new'] == 1) {

					$('#user_tbody').append(html1['html'])
				}
				if (html1['status'] == 2) {
					mynotif('Успешно', html1['message'], 'info')
					$('#ClientInfoModal').modal('hide');
					return;
				}
				if (html1['status'] == 0) {
					mynotif('Ошибка', html1['message'], 'danger')
					$('#ClientInfoModal').modal('hide');
					return;
				}
				if (html1['status'] == 1) {
					mynotif('Ошибка', html1['message'], 'danger');
					return;
				}
			}
		})

	});

	$(document).on('click', '.add_group', function() {

		$('.cont-create-group').hide();
		$.ajax({
			type: "POST",
			url: '/setting/usersgroup/saveajaxgroup',
			data: {
				name: $('#my_group_name').val()
			},
			success: function(html1) {
				$('#my_group_name').val('');
				$('#user_group_tr').append(html1);
		reload_select()
			}
		})

	});


	/*$(document.body).on("change",".js-example-basic-single",function(){
	$(".js-example-basic-single").val('').trigger('change')
	});*/

	$('.js-example-basic-single').on('select2:select', function(e) {
		count = $(this).closest('tr').find('.user-group span').html()
		$(this).closest('tr').find('.user-group span').html(Number(count) + 1)
		$(this).closest('tr').find('.count-user').html(Number(count) + 1)
		$(".js-example-basic-single").val('').trigger('change')
	});

	var elems = document.querySelectorAll('.js-switch');

	for (var i = 0; i < elems.length; i++) {
		var switchery = new Switchery(elems[i], {
			size: 'small',
			color: '#00B9EE'
		});
	}



	<?php /*?> //SDELKI MODAL
	$(document).on('mouseover', '#ClientInfoModal .form-group', function() {
		if (!$('.fa-floppy-o', this).hasClass("active")) {
			$('.fa-pencil', this).addClass('active');
		}
	})
	//SDELKI MODAL
	$(document).on('mouseleave', '#ClientInfoModal .form-group', function() {
		$('.fa-pencil', this).removeClass('active');

	}) <?php */?>

	<?php /*?>$(document).mouseup(function(e) {
		//SDELKI MODAL
		var container_lid = $("#ClientInfoModal input, #ClientInfoModal .fa-pencil");
		if (container_lid.has(e.target).length === 0) {
			$('#ClientInfoModal .fa-floppy-o.active').each(function() {

				th = $(this).closest('div').find('input');
				if ($(th).val() === $(th).attr('data-old-val')) {
					$(this).closest('div').find('.fa-floppy-o').removeClass('active')
					$(this).closest('div').find('input').attr('readonly', 'readonly');
				}


			});
		}


	});
	$(document).on('click', '#ClientInfoModal div input, #ClientInfoModal div .fa-pencil', function() {
		pencil = $(this).closest('div').find('.fa-pencil');
		if ($('#ClientInfoModal div fa-floppy-o')) {

		}
		$('#ClientInfoModal div .fa-floppy-o.active').each(function() {
			th = $(this).closest('div').find('input');
			if ($(th).val() === $(th).attr('data-old-val')) {
				$(this).closest('div').find('.fa-floppy-o').removeClass('active')
				$(this).closest('div').find('input').attr('readonly', 'readonly');
			}


		});

		if ($(pencil).hasClass("active")) {
			$(pencil).removeClass('active');
			$(pencil).closest('div').find('.fa-floppy-o').addClass('active');
			$(pencil).closest('div').find('input').removeAttr('readonly');
		}



	})

	//SAVE INPUT SDELKI	MODAL
	$(document).on('click', '#ClientInfoModal .form-group .fa-floppy-o', function() {
		$(this).closest('div').find('input').attr('readonly', 'readonly');
		$(this).removeClass('active');
		$(this).closest('div').find('.fa-pencil').addClass('active');
		input_val = $(this).closest('div').find('input').val();
		lid_id = $(this).closest('div').find('input').data('input-cont-id');
		input_name = $(this).closest('div').find('input').data('input-name');
		console.log(input_val);
		console.log(lid_id);
		console.log(input_name);

	}) <?php */?>
});
</script>
<link href="/css/inputTags.css" rel="stylesheet" type="text/css">
<script src="/js/inputTags.jquery.js"></script>
<script>
$(document).ready(function() {
	$('.select-tags').inputTags();
});
</script>

@endsection
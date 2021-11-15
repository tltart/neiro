@foreach($dat as $keym=>$vals)
@php $day=0;@endphp
@if(isset($info[$vals]))
@foreach($info[$vals] as $key=>$val)
<div class="timeline-block w100">
	@if($day==0)
	@php $day++; @endphp
	<div class="timeline-block__head">



		@if($vals==date('Y-m-d'))
		<span>Сегодня</span>
		@elseif($vals==date('Y-m-d',strtotime('-1 day',strtotime(date('Y-m-d')))))
		<span>Вчера</span>
		@else

		<span>{{date('d.m.Y',strtotime($vals))}}</span>
		@endif

	</div>@endif



	<div class="timeline-block__body">
		<div class="timeline-block__title">
			<div class="timeline-block__icon">
				@if($val->project_name['image'])<img src="https://disk.neiros.ru/{{$val->project_name['image']}}" alt="">@endif


			</div>
			<div class="timeline-block__title-wrap">
				<h3 data-project_id="{{$val->project_id}}">{{$val->project_name['name']}} </h3>
				<span class="timeline-block__date"> {{date('в H:i',strtotime($val->created_at))}}</span>

			</div> @if($val->type_name_id==101) <a href="#" class="btn btn-border btn-toggle btn-my info_project_podrobnee"
				data-id="{{$val->id}}">Подробнее</a>@endif
		</div>
	</div>

	<div class="timeline-block__content">
		@if($val->type_name_id==100)
		<ul class="characteristics-info">
			<li>
				<p>ID заказа</p><span>{{optional($val->project)->client_project_id}}</span>
			</li>
			<li>
				<p>Сумма заказа</p><span>{{optional($val->ssle)->summ}} руб</span>
			</li>
		</ul>
		@elseif($val->type_name_id==101)

		<div class="block-toggle timeline-block-info" style="display: none;">
			<ul class="characteristics-info characteristics-info{{$val->id}}">


			</ul>
		</div>

		<ul class="	@if($val->links>1) list-time-lapse @endif list-time-lapse{{$val->id}}">
			<li>
				<p>Вход
                    <a href="{{$val->info}}"
                       target="_blank" class="url-page links-web color-grey" data-toggle="tooltip" data-placement="bottom" title="{{$val->info}}">
                        {{str_replace(['https://','http://','www'],'',$val->info)}}
                    </a>


				</p>
			</li>

		</ul>

		@if($val->links>1)
		<a href="#" class="links-accent links-add links-load-list" data-id="{{$val->id}}">
			<span class="links-add__icon"><img src="/img/img_project_info/plus-blue.svg" alt=""></span>
			<span class="links-add__text">Еще {{$val->links-1}}</span>
		</a>@endif
		@elseif($val->type_name_id==3)
		{!! \Illuminate\Support\Str::of(optional($val->project)->comment)->markdown() !!}
		@else
		@if($val->type==2)
		@elseif($val->type==1)
		@elseif($val->type==9)
		{!! $val->info !!}

		@elseif($val->type==0)

		@else
		@endif
		@endif
		@if($val->type_name_id==9&&$val->project&&$val->project->emailinput)
		<ul class="characteristics-info">
			<li>
				<p>E-mail</p><span>{{optional($val->project)->email}}</span>
			</li>
			<li>
				<p>Тема</p><span> {{$val->project->emailinput->subject}}</span>
			</li>
		</ul>

		@endif
		@if(in_array($val->type_name_id,[0,1,2,3,19]))
		{!! $val->audio !!}


		@endif

		{{--@if(isset($val['content'])) {!! $val['content'] !!} @endif
                @if(isset($val['content2'])) {!! $val['content2'] !!} @endif--}}
	</div>
	{{--status--}}




</div>
@endforeach
@endif
@endforeach

@if($lastpage>$currentpage)
<button type="button" class="get_more_page_project btn btn-info" data-page="{{$currentpage}}"
	data-id="{{request('project_id')}}">Показать еще
</button>
@endif
<template class="li_link_template">
    <li>
        <p>__PAGE__
            <a href="__URL__"
               target="_blank" class="url-page links-web color-grey" data-toggle="tooltip" data-placement="bottom" title="__URL__">
                __URL__
            </a>


        </p>
    </li>

   {{-- <li>
        <span class="url-page">__PAGE__<a target="_blank" href="__URL__" class="hidden-url-link">__URL__</a></span>

    </li>--}}
</template>
<template class="characteristics_template">
	<li>
		<p>__KEY__</p><span>__VAL__</span>
	</li>

</template>

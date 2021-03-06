<!-- Main navbar -->
<style>
    .navbar a{
        color: black;
    }

</style>
<div class="navbar     navbar-static navbar-fixed-top" style="background: white;">
    <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src="/global_assets/images/icon/logo_neiros_new.svg" alt="" style="height: 30px;

margin-top: -7px;margin-left: 13px;"></a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            <li><a class="sidebar-mobile-secondary-toggle"><i class="icon-more"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
    
    
    
    
    
        <ul class="nav navbar-nav">





                    
                    
                 <li class="dropdown dropdown-user" id="select-id-project">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span></span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-left">
                 	      {{--@if(count($globalsetting->get_sites())>1)--}}


                        @foreach($globalsetting->get_sites() as $allsites)
                            <li><a href="#" data-value="{{$allsites->id}}"
                                    @if(Auth::user()->site==$allsites->id) class="selected-project" @endif>{{$allsites->name}}</a></li>
                        @endforeach

                    {{--@endif--}}
                    <li class="divider"></li>
                    <li><a href="/setting/sites" data-value="SITES"><i class="fa fa-cubes" aria-hidden="true" style="width: 13px;"></i> Проекты</a></li>
                    <li><a href="#" data-value="CREATE"><i class="fa fa-plus-square" aria-hidden="true" style="width: 13px;"></i> Добавить</a></li>
                </ul>
            </li>    
            <? 
$REQUEST_URI_projects = strripos($_SERVER['REQUEST_URI'], 'projects?page=');
          $user_groups=\App\Models\Servies\UsersGroup::where('my_company_id', auth()->user()->my_company_id)->get();
			if (request()->url() == env('APP_URL').'/projects' || $REQUEST_URI_projects != false){ ?>
            	<li>
					<a class="sidebar-control change-visable-lids" data-popup="tooltip" title="Воронка" data-placement="bottom" data-container="body" data-original-title="Воронка" data-value="0">
					<i class="icon-bars-alt " ></i>
					</a>
				</li>
                
            <li>
					<a class="sidebar-control change-visable-lids" data-popup="tooltip" title="Таблица" data-placement="bottom" data-container="body" data-original-title="Таблица" data-value="1">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
@if(count($user_groups)>0)
              <li>
                  <select class="form-control user_group_id">
                      <option>Группа</option>
                      @foreach($user_groups as $user_group)
                          <option value="{{$user_group->id}}">{{$user_group->name}}</option>
                      @endforeach

                  </select>

              </li>

@endif
            <? } ?>
            
                
        </ul>
        
        
      
        


        <ul class="nav navbar-nav navbar-right">
         <? if ($_SERVER['REQUEST_URI'] == '/projects' || $REQUEST_URI_projects != false){ ?>
        <li class=" ">
                                    <a href="#" class="item-widget1"   data-name="Настройки" data-id="get_project_setting">
                                        <i class="icon-gear position-left"></i>
                                        Настройки

                                    </a>


      </li>
        
            <li class="">
                <a class="btn btn-info add-lid" onClick="AddLiddProgect()">Добавить</a>
<?php /*?>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="/projects/add"><i class="icon-user-plus"></i> Сделку</a></li>
                    <li><a href="/contacts/create"><i class="icon-user-plus"></i> Клиента</a></li>

                </ul><?php */?>
            </li>
            
            <? } ?>


            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Сообщения</span>
                  @if(count($globalsetting->get_system_messages())>0)  <span class="badge bg-warning-400">{{count($globalsetting->get_system_messages())}}</span>@endif
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Сообщения

                    </div>

                <ul class="media-list dropdown-content-body">
                    @forelse($globalsetting->get_system_messages() as $item)   <li class="media">
                            <div class="media-left">
                                <img src="/default/assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">1</span>
                             </div>

                            <div class="media-body">
                                @if(is_null($item->tickets))<a href="/setting/messages/{{$item->mess_id}}/edit" class="media-heading">
                                    @else
                                        <a href="{{route('wtickets.view',$item->tickets)}}?am={{$item->id}}" class="media-heading">

                                        @endif


                                    <span class="text-semibold">{{$item->tema}}</span>
                                    <span class="media-annotation pull-right">{{date('H:i d-m-Y',strtotime($item->created_at))}}</span>
                                </a>

                                <span class="text-muted">{{ str_limit(strip_tags($item->message), $limit = 100, $end = '...')}}</span>
                            </div>
                        </li>
@empty

Сообщений нет
                   @endforelse






                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="https://cloud.neiros.ru/setting/messages" data-popup="tooltip" title="Все сообщени">Все сообщения</a>
                    </div>
                </div>
            </li>

            
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">

                    <span>Поддержка</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="http://help.neiros.ru/" target="_blank"><i class="fa fa-file-text" aria-hidden="true"></i> Документация</a></li>
                    <li><a href="/tickets"><i class="fa fa-life-ring" aria-hidden="true"></i> Поддержка</a></li>
                    <li><a href="#"><i class="fa fa-check-square-o" aria-hidden="true"></i> Контакты</a></li>

                </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">

                    <span>{{Auth::user()->getMyCompany->name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    @if(Auth::user()->role==0) <p class="navbar-text">Баланс:{{$globalsetting->get_ballans()}} руб</p>@endif
                    <li><a href="#"><i class="fa fa-address-card-o" aria-hidden="true"></i> Мой профиль</a></li>

                    @if(Auth::user()->role==0)
                  <?php /*?>  <li><a href="/setting/paycompanys"><i class="icon-coins"></i> Платежные профили</a></li><?php */?>
                    <li><a href="/setting/billing_all"><i class="fa fa-credit-card" aria-hidden="true"></i> Биллинг    @if($globalsetting->get_pay_check())
                                <span class="badge bg-teal-400 pull-right" style=" background:#2196f3">{{$globalsetting->get_pay_check()}}</span>
                            @endif</a></li>
                     <?php /*?>   <li><a href="/setting/checkcompanys">
                         
                        <i class="icon-comment-discussion"></i> Счета</a></li><?php */?>
                 <?php /*?>   <li class="divider"></li><?php */?>
                    <li><a  class="sidebar-secondary-hide sidebar-secondary-hide-setings" data-settings="settings"><i class="fa fa-cog" aria-hidden="true"></i> Настройки</a></li>
                    @endif
                @if (\Cookie::get('admin'))
                        <li>@php

            $prov = DB::table('users')->where('id', \Cookie::get('admin'))->first();
            if ($prov) {

               echo '<a href="#"><i class="icon-cog5"></i>S-'.\Auth::user()->my_company_id.' M-'.\Auth::user()->site.'</a></li>';
            }


             @endphp
                    </li>@endif
                    <li><a href="/logout"><i class="icon-switch2"></i> Выход</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<script>
 if($("#select-id-project .dropdown-menu-left a").hasClass("selected-project") ){
	 $('#select-id-project .dropdown-toggle span').text($('#select-id-project .dropdown-menu-left a.selected-project').text());
	 }
	 else{
		  $('#select-id-project .dropdown-toggle span').text('Проекты');
		 }
	 $(document).on('change','.user_group_id',function (){
	     window.location.href='/projects?user_group_id='+$(this).val();
     })
</script>
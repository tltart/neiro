@php
$not_city=[843,816,814];
@endphp
<style>
    .modal-dialog{}

</style>
<div id="myModalBox" class="modal fade">
     
        <div class="modal-dialog" style="    position: absolute;
        right: -10px;
        top: -10px;">
            <div class="modal-content">
            <form   id="caltrackinbyphone"  name="caltrackinbyphone" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Купить номера</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="form-group">
			 <div class="col-lg-12">
			 <div class="checkbox footer-numbers">
                <label class="col-lg-4 modal-numbers-city">Код города:</label>
               
                    
                        <label>
                      <select  name="region" id="region"  class="form-control">
                          @foreach($widget_calltrack_regions as $region)
                              @if(!in_array($region->code,$not_city))
                         <option value="{{$region->code}}">{{$region->region}}</option>
                              @endif

                    @endforeach
                      </select>
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
				<div class="checkbox footer-numbers">
                    <label class="col-lg-4 modal-numbers-number">Количество:</label>
                    
                        <label>
                            <input type="number" name="amount" id="amount" value="1" class="form-control">
                            <input type="hidden" class="form-control" name="id"
                                   value="{{$widget_call_track->id}}">
                        </label>

                    </div>
                </div>
            </div>





            <!-- Футер модального окна -->
            <div class="modal-footer-numbers">
                
                <button type="button" class="btn btn-primary " onclick="add_phone()" >Купить</button>
            </div>
            </form>
        </div>
        </div>

    </div>


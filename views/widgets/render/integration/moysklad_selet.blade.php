<div class="col-xs-12">
    <div class="form-group">
        <label class="col-xs-12 control-label">Организация:</label>
        <div class="col-md-9">
            <select name="def_org" id="def_org" class="form-control">

                @foreach($def_org as $def)
                    <option value="{{$def->code}}" @if($setting->def_org==$def->code) selected @endif> {{$def->name}}</option>
                @endforeach
            </select>

        </div>

    </div>

</div>
<div class="col-xs-12">
    <div class="form-group">
        <label class="col-xs-12 control-label">Склад:</label>
        <div class="col-md-9">
            <select name="def_sklad" id="def_sklad"  class="form-control">

                @foreach($def_sklad as $def)
                    <option value="{{$def->code}}"  @if($setting->def_org==$def->code) selected @endif>{{$def->name}}</option>
                @endforeach
            </select>

        </div>

    </div>

</div><div class="col-xs-12">
    <div class="form-group">
        <label class="col-xs-12 control-label">Статус закрытия сделки(оплата):</label>
        <div class="col-md-9">
            <select name="status_id" id="status_id"  class="form-control">

                @foreach($statusis as $def)
                    <option value="{{$def->code}}"  @if($setting->status_id==$def->code) selected @endif>{{$def->name}}</option>
                @endforeach
            </select>

        </div>

    </div>

</div>
<div class="col-xs-12">


    <label class="add-number-new-checkbox label-dir">Сделки с ндс
        <input type="hidden" name="nds"   value="0">
        <input type="checkbox" name="nds" id="nds" value="1" @if($setting->nds==1)checked @endif>
        <span class="checkmark"></span>
    </label>

</div>
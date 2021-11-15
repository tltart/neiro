<div class="name-block-fixed name-block-fixed-integration">
    <div class="col-xs-12">
        <div class="h1-modal pos-left"><img class="back-adw" src="/global_assets/images/icon_kviz/back.svg" style="height: 27px;
margin-right: 26px;cursor: pointer "><img src="/images/aws-integration.jpg"><span></span></div>


    </div>
</div>
<div class="row">

    <div class="show-hidden-integration" style="display: block">
    <form id="integrationadwords" name="integrationadwords">

        <input type="hidden" class="form-control" name="id"
               value="{{$adword->id}}">
        <input type="hidden" class="form-control" name="form_action"
               value="integrationadwords">
        <fieldset>


            <div class="show-hidden-integration">
                <div class="col-xs-12">




                    <div class="form-group col-md-12">

                        <label class="col-lg-5 control-label"> 1.
                           @if(count($accounts)>0)
                               <select class="adw_account_id form-control" name="account_id">
                                <option value="">Выберите аккаунт</option>
                                   @foreach($accounts as $account)
                                       <option value="{{$account->id}}" @if($account->id==$adword->account_id) selected @endif>{{$account->email}}</option>
                                   @endforeach
                               </select>

 
                            @endif


                            <a href="/set_token_adwords/{{$adword->id}}" target="_blank" class="btn btn-info btn-sm">Получить токен
                            </a>

                        </label>
                        <div class="col-md-7">



                        </div>

                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-lg-5 control-label">2.Введите  рекламный аккаунт :</label>
                        <div class="col-md-7"><br>

                           <select class="form-control adw_customer_id" name="customer_id">
                               <option value="" >Выбрать</option>
                                @foreach($customers as $customer)
                                    <option value="{{$customer->id}}" @if($customer->id==$adword->customer_id) selected @endif>{{$customer->name}}</option>
                                @endforeach
                            </select>

или <input type="hidden" name="text_customer_id" value="" placeholder="Ввести новый">


                        </div>

                    </div>

                    {{--<div class="form-group" style="margin-top: 10px">
                        <div class="col-md-9">
                            <button type="button" class="btn btn-primary get_adwors_company ">Получить ком<i
                                        class="icon-arrow-right14 position-right "></i></button>
                        </div>

                    </div>--}}
                </div>


        <div class="col-xs-12" style="margin-top:25px;">
            <div class="form-group">
                <label class="col-xs-12 control-label">Рекламные компании:</label>
                <div class="col-xs-12"><div class="col-xs-12">


                        <label class="add-number-new-checkbox label-dir">Отметить все
                            <input type="checkbox" name="mft" id="mft"   value="1">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    @foreach($adword->counters as $counter)

                        <div class="col-xs-12">

                            <label class="add-number-new-checkbox label-dir">    {{$counter->company}} ({{$counter->name}})
                                <input type="checkbox" name="radiocounter[]"  class="dircheck11" @if($counter->status==1) checked="checked"
                                       @endif value="{{$counter->company}}"  >
                                <span class="checkmark"></span>
                            </label>

                        </div>
                    @endforeach

                </div>

            </div>


        </div>

    </div><div class="form-group footer-button">
                <div class="col-xs-12">

                    <button type="button" class="btn btn-primary w_safebutton ">Сохранить</button>
                    <button type="button" class="btn btn-default " data-dismiss="modal" aria-hidden="true">Закрыть
                    </button>
                </div>

            </div>
        </fieldset>
    </form>
    {{--Дополнительные поля--}}






</div>


</form>
    </div>

</div>

<script>
    $("#mft").click(function () {
        if ($("#mft").prop('checked')) {
            $('.dircheck').prop('checked', true);
        } else {
            $('.dircheck').prop('checked', false);
        }
    });
</script>

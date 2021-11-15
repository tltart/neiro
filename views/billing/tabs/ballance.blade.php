<div role="tabpanel" class="tab-pane fade in active" id="s-balance" >
<form id="ballance_form">
    <input type="hidden" name="new_tarif" id="new_tarif">
    <div class="panel-heading panel-s-balance">

        <div class="row panel-s-balance-st">
            <div class="col-xs-12 col-md-9 s-balance-setting" >

                <div class="col-xs-12 s-balance-scroll">
                    <div class=" col-xs-12 s-balance-template s-balance-scroll-block">
                        <div class="s-balance-scroll-range col-xs-12 col-md-9">
                            <div class="s-balance-scroll-range-block">



                                <div class="neiros__slider_block-st">
                                    <div class="neiros__slider_block-st-title">
                                        Максимальная посещаемость ваших сайтов в сутки
                                    </div>
                                    <div class="neiros__slider_block-st-input">
                                        <input type="text" class="range-slider count-user-in-site" name="count-user-in-site" id="count-user-in-site" value="{{$pos}}">
                                        <button id="s-balance-res" class="s-balance-res" value="333"><img src="/global_assets/images/setting-img/icon-balance-cl.png" alt=""> </button>
                                    </div>

                                </div>


                                <div class="neiros__slider_block">


                                    <div class="min_value"></div>
                                    <div id="slider">
                                        <div id="custom-handle" class="ui-slider-handle"></div>
                                    </div>
                                    <div class="max_value"></div>
                                    <label class="scroll-marks scroll-marks-1" >2500</label>
                                    <label class="scroll-marks scroll-marks-2" >5000</label>
                                    <label class="scroll-marks scroll-marks-3" >7500</label>
                                    <label class="scroll-marks scroll-marks-4" >10000</label>
                                </div>




                            </div>
                        </div>

                        <div class="s-balance-scroll-count col-xs-12 col-md-3">
                            <div class="s-balance-scroll-count-project">
                                <p>Количество проектов </p>
                                <div class="count-project-s">
                                    <div class="count-project-st">

                                        <input type="button" value="-" id="project-minus" onclick="minus()">
                                        <input type="text" class="count-project"  value="{{$user->getSites->count()}}" id="count-project">
                                        <input type="button" value="+" id="project-plus" onclick="plus()">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

{{-- <div class="s-balance-tarif-block active-tarif" id="tarif-free">--}}


                <div class="col-xs-12 s-balance-tarif">









                </div>






                <div class="col-xs-12 s-balance-calltracking">
                    <div class=" s-balance-calltracking-block s-balance-template">
                        <div class="s-balance-calltracking-title">
                            Коллтрекинг
                        </div>

                        <div class="s-balance-calltracking-data">
                            <div class="calltracking-data-block">
                                <label>Абоненская плата:<span>{{$phone_amount}} номера</span></label>
                                <label class="calltracking-data-abon">{{round($amount_call_cost_cl->whereIN('type',[4,5])->sum('summ'))}} р./ день </label>
                            </div>
                            @php $vnesh=$amount_call_cost_cl->whereIN('type',[7])->sum('summ'); @endphp
                            @if($vnesh>0)
                                <div class="calltracking-data-block">
                                    <label>Внешние номера:<span>{{$amount_call_cost_cl->whereIN('type',[7])->count()}} номера</span></label>
                                    <label class="calltracking-data-abon">{{round($vnesh)}} р./ день </label>
                                </div>
                            @endif
                            <div class="calltracking-data-block">
                                <label>Разговоры:<span>{{round($amount_call_cost_cl->whereIN('type',[2,3])->sum('amount')/60)}} минуты</span></label>
                                <label class="calltracking-data-talk">{{round($amount_call_cost_cl->whereIN('type',[2,3])->sum('summ'))}} р./ день </label>
                            </div>

                            <div class="calltracking-data-block calltracking-data-total">
                                <label> Сумма за сегодня </label>
                                <label class="calltracking-data-abon">{{round($amount_call_cost_cl->whereIN('type',[2,3])->sum('summ'))+round($amount_call_cost_cl->whereIN('type',[4,5])->sum('summ')+round($vnesh))}} руб. </label>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-xs-12 s-balance-calltracking class_podpiska"  @if(in_array(auth()->user()->getMyCompany->tariff_id,[9,20]))style="display:none" @endif>
                    <div class="col-xs-12 s-balance-subsc  s-balance-template">
                        <div class="s-balance-sbs col-xs-12 col-md-2 ">
                            <label class="control-label" for="s-balance-subscription">Подписка</label>
                            <input id="s-balance-subscription" type="checkbox"   class="js-switch s-balance-subscription"  data-size="small"  name="podpiska" @if(auth()->user()->getMyCompany->subscribe) checked @endif />
                        </div>

                        <div class="s-balance-sbs-check col-xs-12 col-md-10">
                            <div class="line-checkbox"></div>
                            <div class="s-balance-sale col-xs-12 col-sm-3">
                                <input   id="radio-sale-5" class="radio-sale-card m3_price" name="radio-sale-card" type="radio" value="3" @if(auth()->user()->getMyCompany->subscribe==3) checked @endif
                                @if(auth()->user()->getMyCompany->getTariff)  data-price="{{auth()->user()->getMyCompany->getTariff->get_sale_price(3)}}" @endif>

                                <label for="radio-sale-5" class="radio-sale-card-label">

                                    <span class="sp-radio-sale-time ">3 месяца</span>
                                    <span class="sp-radio-sale-sales m3_p" style="display:none">% скидка</span>
                                    <span class="sp-radio-sale-price m3_s" style="display:none"> руб.</span>

                                </label>

                            </div>


                            <div class="s-balance-sale col-xs-12 col-sm-3">
                                <input  id="radio-sale-10" class="radio-sale-card m6_price" name="radio-sale-card" type="radio" value="6"  @if(auth()->user()->getMyCompany->subscribe==6) checked @endif
                                @if(auth()->user()->getMyCompany->getTariff)  data-price="{{auth()->user()->getMyCompany->getTariff->get_sale_price(6)}}" @endif>

                                <label for="radio-sale-10" class="radio-sale-card-label">

                                    <span class="sp-radio-sale-time">6 месяцев</span>
                                    <span class="sp-radio-sale-sales m6_p" style="display:none">% скидка</span>
                                    <span class="sp-radio-sale-price m6_s" style="display:none"> руб.</span>

                                </label>

                            </div>


                            <div class="s-balance-sale col-xs-12 col-sm-3">
                                <input   id="radio-sale-15" class="radio-sale-card m12_price" name="radio-sale-card" type="radio" value="12"   @if(auth()->user()->getMyCompany->subscribe==12) checked @endif
                                @if(auth()->user()->getMyCompany->getTariff)  data-price="{{auth()->user()->getMyCompany->getTariff->get_sale_price(12)}}" @endif

                                >

                                <label for="radio-sale-15" class="radio-sale-card-label">

                                    <span class="sp-radio-sale-time">1 год</span>
                                    <span class="sp-radio-sale-sales m12_p" style="display:none">% скидка</span>
                                    <span class="sp-radio-sale-price m12_s" style="display:none"> руб.</span>

                                </label>

                            </div>

                            <div class="s-balance-sale col-xs-12 col-sm-3">
                                <input  id="radio-sale-25" class="radio-sale-card m21_price" name="radio-sale-card" type="radio" value="24"  @if(auth()->user()->getMyCompany->subscribe==24) checked @endif
                                @if(auth()->user()->getMyCompany->getTariff)  data-price="{{auth()->user()->getMyCompany->getTariff->get_sale_price(24)}}" @endif>

                                <label for="radio-sale-25" class="radio-sale-card-label">

                                    <span class="sp-radio-sale-time">2 года</span>
                                    <span class="sp-radio-sale-sales m24_p" style="display:none">% скидка</span>

                                    <span class="sp-radio-sale-price m24_s" style="display:none"> руб.</span>

                                </label>

                            </div>



                        </div>

                    </div>
                </div>








            </div>

            <div class="col-xs-12 col-md-3 s-balance-active">
                <div class="s-balanse-acive-block">
                    <div class="s-balanse-acive-block-title">
                        <p class="s-balanse-acive-block-title-p">Баланс</p>
                        <label id="my_ballace">{{$user->getMyCompany->ballans}} руб</label>
                        <div class="s-balanse-acive-block-statistika">
                            <p>	На сколько хватит средств</p>
                            <span class="s-balance-day-recerve">
                                @if($user->getMyCompany->ballans>0&&($amount_call_cost_cl->sum('summ')>0))
                                    @if(round($user->getMyCompany->ballans/$amount_call_cost_cl->sum('summ'))<1)
                                        ≈1 день
                                    @else
                                  {{  round($user->getMyCompany->ballans/$amount_call_cost_cl->sum('summ'))}}      {{num2word(  round($user->getMyCompany->ballans/$amount_call_cost_cl->sum('summ')) , array('день', 'дня', 'дней'))}}

                                    @endif
                                @else

                                    0 дней
                                @endif

                               </span>
                        </div>

                        <div class="s-balanse-acive-block-statistika">
                            <p>Сумма расходов за сегодня</p>
                            <span class="s-balance-to-day">{{round($amount_call_cost_cl->sum('summ'))}} руб</span>
                        </div>

                        <div class="s-balance-active-btn-n s-balance-active-btn">
                            <button id="s-balance-active-btn" type="button" class="btn btn-primary  item-widget1"

                                   data-name="Пополнить баланс" data-id="popolnit_ballance"
                            >Пополнить баланс
                            </button>
                        </div>
                    </div>

                    <div class=" s-balance-active-coupon s-balance-active-links">
                        <label>Активация купона</label>
                        <div class="s-balance-active-coupon-block">
                            <input type="text" name="s-balance-active-coupon" id="s-balance-active-coupon" value=""
                                   placeholder="Код купона">
                            <button type="button" id="s-balance-active-coupon-btn" class="btn btn-primary  s-balance-active-coupon-btn" >Активировать</button>
                        </div>
                    </div>

                    <div class="s-balance-active-avto s-balance-active-links">
                        <label class="s-balance-active-avto-str"> Автопродление услуги</label>
                        <div class="s-balance-avto-block-st">
                            <div class="s-balance-avto-block">
                                <p>Настройки автоматического автопополнения</p>

                                <div class="s-balance-avto-pay">
                                    <span>Пополнять на</span>
                                    <input type="text" name="s-balance-avto-pay" id="s-balance-avto-pay"
                                           value="5000">
                                </div>

                                <div class="s-balance-avto-pay s-balance-avto-pay-less">
                                    <span>Если баланс меньше</span>
                                    <input type="text" name="s-balance-avto-pay-if-less" id="s-balance-avto-pay-if-less"
                                           value="1000">
                                </div>

                            </div>

                            <div class="s-balance-type-payment">
                                Выбор способа оплаты

                                <div class="checkbox-pay checkbox-pay-first">
                                    <input type="checkbox" class="checkbox-type-pay" id="input-type-pay-card" name="n-user-type" value="" >
                                    <label for="input-type-pay-card" class="checkbox-type-pay-label">Пластиковая карта (Visa, MasterCard)</label>
                                </div>

                                <div class="checkbox-pay">
                                    <input type="checkbox" class="checkbox-type-pay" checked id="input-type-pay-mail" name="n-user-type" value="" >
                                    <label for="input-type-pay-mail" class="checkbox-type-pay-label">Отправка счета на e-mail</label>

                                    <input type="mail" class="s-balance-pay-mail" name="s-balance-active-coupon " id="s-balance-pay-mail" value="" placeholder="Введите свой e-mail">
                                </div>


                            </div>





                            <button type="button" id="s-balance-save" class="btn btn-primary s-balance-save  s-balance-active-coupon-btn" >Сохранить
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>






    </div>
</form>
</div>

@php function num2word($num, $words)
{
$num = $num % 100;
if ($num > 19) {
$num = $num % 10;
}
switch ($num) {
case 1: {
return($words[0]);
}
case 2: case 3: case 4: {
return($words[1]);
}
default: {
return($words[2]);
}
}
}
        @endphp

 <div class="user-item js-user-item js-button-users-close" :data-tema="dialog.id"  :data-neiros_visit="dialog.neiros_visit"
      @click="getUserChat" >
    <div class="user-item__wrap">
        {{--id="statusmark{{$tema->id}}"  @if($tema->status==0) style="display: none" @endif--}}
        <div class="user-item__img"  :data-messages="dialog.status > 0?1:null" >


          <img v-if="dialog.image!=''" :src="dialog.image"  class="avatar js-button-info-open" alt="" style="width: 64px">
          <img v-else src="/templatechat/images/pfotografy-none.jpg" class="avatar js-button-info-open" alt="">
        </div>
        <div>
            <div class="user-item__name" v-if="dialog.name==''">
                Клиент №@{{dialog.hid_id}}
            </div>
            <div class="user-item__name" v-else >
                 Клиент @{{dialog.name}}
            </div>


                <div class="user-item__social facebook-color" v-if="dialog.tip==4">
                    <i class="icon-vkontakte"></i>
                    vkontakte
                </div>

                    <div class="user-item__social viber-color" v-if="dialog.tip==5">
                        <i class="icon-phone"></i>
                        viber
                    </div>  </span>

                        <div class="user-item__social odnoklassniki-color" v-if="dialog.tip==6">
                            <i class="icon-odnoklassniki"></i>
                            odnoklassniki
                        </div>  </span>

                            <div class="user-item__social facebook-color" v-if="dialog.tip==7">
                                <i class="icon-facebook"></i>
                                facebook
                            </div> </span>

                                <div class="user-item__social telegram-color" v-if="dialog.tip==8">
                                    <i class="icon-paper-plane"></i>
                                    телеграмм
                                </div> </span>

                                    <div class="user-item__social chat-color" v-if="dialog.tip==12">
                                        <i class="icon-comment-empty"></i>
                                        чат
                                    </div>  </span>

        </div>
    </div>
    <div class="user-item__date">
        @{{formatDate2(dialog.updated_at) }}
    </div>
</div>
<div class="layout js-layout layout--users-opened"  v-if="showchat" >


    <div class="wrapper">
        <aside class="users">
            <header class="users__header">
                <button class="btn btn--setting js-button--setting">
                    <i class="icon-cog"></i>
                </button>
                <input type="text" class="form-field searchs" placeholder="Поиск">
            </header>
            <div class="users__body">
                <div class="users__holder temaclass">
<dialogs-item  v-for="dialog in dialogs" :dialog="dialog"></dialogs-item>


                </div>
            </div>
            <div class="users__footer">
                <nav class="mobile-nav js-mobile-nav">
                    <button class="btn mobile-nav__button js-button-users-close">
                        <i class="icon-chat"></i>
                        <span class="d-block">Чаты</span>
                    </button>
                    <button class="btn mobile-nav__button js-button--setting"><i class="icon-cog"></i>
                        <span class="d-block">Настройки</span>
                    </button>
                </nav>
            </div>
        </aside>

        <!--------chat----------->
        <main class="chat">

            <div class="w-open-chat" style="display:none">
                <img src="https://cloud.neiros.ru/global_assets/images/icon/user/dialog.svg" alt="">
                <span>Выберите чат</span>
                <label>Кликните по собеседнику слева, чтобы<br>
                    читать и отправлять ему сообщения</label>
            </div>



            <header class="chat__header" style="display: none">
                @include('chat20.chat_header')
            </header>

            <div class="chat__body js-chat__body"  >
                <div class="messages">
                    <chat-dialogs v-for="mess in messages" :mess="mess" v-on:getuserchat="chatsLoad"></chat-dialogs>
                </div>
            </div>


            <footer class="chat__footer" style="display: none">

                @include('chat20.chat_footer')
            </footer>

        </main>

        @include('chat20.chat_right')
    </div>


@include('chat20.chat_setting')


@include('chat20.chat_push')

    <input type="hidden" value="0" id="tektema">
    <input type="hidden" value="" id="temahash">
    <input type="hidden" value="" id="temahashmd5">
    <input type="hidden" id="hidden_user_id" value="">

</div>


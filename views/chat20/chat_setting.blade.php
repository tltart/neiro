<aside class="settings js-settings">
     <header class="settings__header">
        <span></span>
        <button class="btn btn--close btn--rounded js-button--close-setting">
            <i class="icon-cancel"></i>
        </button>
    </header>

        <button class="btn btn--close btn--rounded js-button--close-setting">
            <i class="icon-cancel"></i>
        </button>
    <div class="settings__body">
        <div class="settings__body__inner">
           <form id="setting_chat"><label class="checkbox">
                <span>Включить звуковые оповещения</span>


                <input type="hidden" name="chat_audio" value="0">
                <input type="checkbox" name="chat_audio"  class="sr-only chat_audio" value="1">
                <i></i>
            </label>
            <label class="checkbox">
                <span>Включить Push уведомления</span>
                <input type="hidden" class="sr-only  " name="users_push" value="0">
                <input type="checkbox" class="sr-only users_push" name="users_push"   value="1">
                <i></i>
            </label>

               <label class=" " style="margin-top: 30px;display: block">
                   <span>Выберите чат</span>


                    <select name="my_chat_site" class="my_chat_site" style="float: right">

                    </select>

                   <i></i>
               </label>

<a href="/logout">Выход</a>

           </form>
        </div>
    </div>
    <footer class="settings__footer">

    </footer>

</aside>
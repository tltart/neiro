<div v-if="mess.from == 0" class="messages__row  messages__row--from">
    <div class="message message_from" :data-time="formatDate2(mess.created_at)">
        @{{mess.mess}}
    </div>
</div>

<div v-else class="messages__row  messages__row--to">
    <div class="message message_from" :data-time="formatDate2(mess.created_at)">
        @{{mess.mess}}
    </div>
</div>

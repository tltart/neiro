<div class="insert-kviz-data-container" style="display: block; margin-top: 20px;">
    @foreach($directs as $direct)
        @include('widgets.render.integration.direct_item_small')
    @endforeach

    <div class="for-direct for-direct-add">
        <div class="for-direct-d add_direct_accaunt">
            <div class="for-direct-d-text">Добавить аккаунт</div>
            <div class="for-direct-d-btn-add">+</div>
        </div>
    </div>
</div>
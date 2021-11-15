<div class="insert-kviz-data-container" style="display: block; margin-top: 20px;">
           @foreach($adwords as $adword)
                                @include('widgets.render.integration.adwords_item_small')
                            @endforeach

                            <div class="for-direct for-direct-add">
                                <div class="for-direct-d add_adwords_accaunt">
                                    <div class="for-direct-d-text">Добавить аккаунт</div>
                                    <div class="for-direct-d-btn-add">+</div>
                                </div>
                            </div>
                        </div>
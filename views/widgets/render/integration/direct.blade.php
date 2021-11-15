<style>.ClientInfoModal.modal.fade:not(.in) .modal-dialog {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);

    }</style>


<div class="col-md-3 integration-item">
    <div class="single-cases-card">
        <div class="card-image"><a  class="open_modal_direct" ><img alt=""
                                                                                          src="/global_assets/images/integration/direct.jpg"
                                                                                          draggable="false"
                                                                                          class="img-responsive"></a>
            <div class="hover-area"></div>
        </div>
        <!-- .card-image END -->

        <div class="cases-content col-xs-12">

            <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>

            <!-- .cases-content END --></div>


    </div>
</div>

<div id="myModal_sett_2" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal">
    <div class="modal-dialog" style="">
        <div class="modal-content" style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <?php /*?>     <h4 class="modal-title">Яндекс Директ</h4><?php */?>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">

                <div class="name-block-fixed name-block-fixed-integration">
                    <div class="col-xs-12">
                        <div class="h1-modal pos-left"><img src="/images/yandex-direct.jpg"><span></span></div>

                       {!! $status_checkbox_metrika !!}
                    </div>
                </div>


                <div class="row">


                        <div class="col-xs-12 block-descr">
                            <div class="col-sm-6">
                                <div class="img-block-left"><img width="100%"
                                                                 src="/global_assets/images/integration/direct.jpg">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="paragraph">Яндекс.Директ — рекламная система, с помощью которой вы
                                    можете размещать контекстные объявления на страницах
                                    Яндекс.Поиска и на партнёрских сайтах Рекламной сети.
                                    Объявления в Директе показываются исключительно тем
                                    людям, которые уже заняты поиском похожих услуг и товаров
                                    на Яндексе и других сайтах.
                                </div>


                                {!! $status_checkbox_metrika !!}


                            </div>

                        </div>

                    <div class="show-hidden-integration">



                        </div>




                </div>
            </div>
            <!-- Футер модального окна -->

        </div>
    </div>
</div>
<script>
    $(document).on('click',".open_modal_direct,.back-direct", function() {
        $('#myModal_sett_2').modal('show');
        $('.back-direct').hide();
        get_direct_list();


    });
    function get_direct_list(){
        $.ajax({
            method:'POST',
            url:'/ajax/get_direct_list',
            data:{id:$(this).data('id')},
            success:function (use){
                $('#myModal_sett_2 .show-hidden-integration').html(use);
            }

        })
    }



    $(document).on('click','.add_direct_accaunt',function (){
    $.ajax({
        method:'POST',
        url:'/ajax/add_direct_acc',
        success:function (use){
            $('#myModal_sett_2 .modal-body').html(use);


        }

    })
    }) ;
    $(document).on('click','.click_direct',function (){
    $.ajax({
        method:'POST',
        url:'/ajax/get_ajax_direct_setting',
        data:{id:$(this).data('id')},
        success:function (use){
$('#myModal_sett_2 .modal-body').html(use);
        }

    })
    })


    $("#mft").click(function () {
        if ($("#mft").prop('checked')) {
            $('.dircheck').prop('checked', true);
        } else {
            $('.dircheck').prop('checked', false);
        }
    });
</script>
<style>.ClientInfoModal.modal.fade:not(.in) .modal-dialog {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%, 0, 0);

    }</style>


<div class="col-md-3 integration-item">
    <div class="single-cases-card">
        <div class="card-image"><a  class="open_modal_adwords">
                <img alt="" src="/global_assets/images/integration/aws.jpg" draggable="false" class="img-responsive" ></a>
            <div class="hover-area"> </div>
        </div>
        <!-- .card-image END -->

        <div class="cases-content col-xs-12">

            <span class="col-xs-12 text-center"> {!! $status_checkbox_metrika_modal !!}</span>

            <!-- .cases-content END --></div>


    </div>
</div>

<div id="myModal_sett_20" class="modal fade ClientInfoModal lids-neiros integration___modal WidgetModal">
    <div class="modal-dialog" >
        <div class="modal-content"   style="height: 100vh">
            <!-- Заголовок модального окна -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">
            <div class="name-block-fixed name-block-fixed-integration">
           <div class="col-xs-12" >
           <div class="h1-modal pos-left"><img src="/images/aws-integration.jpg"><span></span></div>
           

                            <fieldset> {!! $status_checkbox_metrika !!}
           </div>
            </div>
            
            
                <div class="row">

                    
                    <div class="col-xs-12 block-descr" style="display: none">
          <div class="col-sm-6"><div class="img-block-left"><img width="100%" src="/global_assets/images/integration/aws.jpg"></div></div>
          <div class="col-sm-6">  
          	<div class="paragraph"> Ads (ранее известный как AdWords)  - сервис контекстной, в основном, поисковой рекламы от компании Google, предоставляющий удобный интерфейс и множество инструментов для создания эффективных рекламных сообщений. Ads — флагманский рекламный проект Google и основной источник доходов компании. 24 июля 2018 года бренд AdWords изменил название на Google Ads, а также получил новый логотип. В России название сервиса AdWords изменилось на «Google Реклама». Новый бренд символизирует весь доступный спектр рекламных кампаний, включая поисковые, медийные и видеокампании.</div>
          


                            <fieldset> {!! $status_checkbox_metrika !!}
                
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
    $(document).on('click','.add_adwords_accaunt',function (){
        $.ajax({
            method:'POST',
            url:'/ajax/add_adwords_acc',
            success:function (use){
                $('#myModal_sett_20 .modal-body').html(use);
                $('.back-adw').show();

            }

        })
    }) ;
    $(document).on('click','.click_adwords',function (){

        $.ajax({
            method:'POST',
            url:'/ajax/get_ajax_adwords_setting',
            data:{id:$(this).data('id')},
            success:function (use){
                $('#myModal_sett_20 .modal-body').html(use);
                $('.back-adw').show();
            }

        })
    })



    $(document).on('click',"#mft", function() {
         if($("#mft").prop('checked')){
            $('.dircheck11').prop('checked', true);
        } else {
            $('.dircheck11').prop('checked', false);
        }
    });
    $(document).on('click',".open_modal_adwords,.back-adw", function() {
        $('#myModal_sett_20').modal('show'); $('.back-adw').hide();
        get_adwords_list();


    });
    function get_adwords_list(){
        $.ajax({
            method:'POST',
            url:'/ajax/get_adwords_list',
            data:{id:$(this).data('id')},
            success:function (use){
                $('#myModal_sett_20 .show-hidden-integration').html(use);
            }

        })
    }
</script>
{{--
var e = document.createElement("div");
e.className = "neiros_all_container";
e.innerHTML=`<link href="https://cloud.neiros.ru/cdn/v1/callback/css/style_frontend.css" rel="stylesheet" type="text/css">

<div id="neiros__btn_block" >
    <div class="neiros__out_block neiros__slideUp" >
        <div id="neiros__phone_btn" class="neiros__btn_round neiros__fadeIn">
            <div class="neiros__toltip neiros__fadeIn" >Обратный звонок</div>
            <img src="https://cloud.neiros.ru/cdn/v1/callback/images/icons/icon-phone.png" alt="">
        </div>
    </div>
</div>

<div id="neiros__chat_start" class="neiros__start_btn neiros__fadeIn" style="z-index: 999">
    <img src="https://cloud.neiros.ru/cdn/v1/callback/images/icons/icon-phone.png" alt="">
</div>

<div id="neiros__chat_before_iframe" class="" style="display:none;">


</div>`, document.body.appendChild(e);
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
my_metrika_id = getCookie('my_metrika_id');
current_url_page = window.location.href;


    var  window_wight = window.screen.availWidth;
    function addIframe(){
        var  window_wight = window.screen.availWidth;
        if(window_wight <= 450){
            divise = 'mobile';
        }
        else{
            divise = 'desctop';
        }
        list = document.querySelector("#neiros__chat_before_iframe");
        list.innerHTML = '<div class="neiros__closet-icon-modal"><img  src="https://cloud.neiros.ru/cdn/v1/callback/images/icons/closet-icon-modal-callback.PNG" alt=""></div><iframe id="neiros__chat_iframe" src="https://cloud.neiros.ru/xcallback/'+divise+'/'+sbjs.get.first_add.hash+'/'+CBU_GLOBAL.config.widget.key+'/?promo='+sbjs.get.promo.code+'&'+divise+'&my_metrika_id='+my_metrika_id+'&NEIROS_ID='+UNIQ_NEIROS_ID+'&current_url='+current_url_page+'"  ></iframe><div class="neiros__copiright_new2">Виджет заряжен Neuron</div>'

    }
    function addIframe_new(type,stat){

        var  window_wight = window.screen.availWidth;
        
        if(window_wight <= 450){
            divise = 'mobile';
            
        }
        else{
            divise = 'desctop';
        }
        type_new = '';
        content_new = '';
        if(divise === 'mobile' && (type === 'phone' || type === 'lidi' || type === 'social')){
            if(type === 'social'){
                document.querySelector("#neiros__chat_before_iframe").classList.add("mobile");
                document.querySelector("#neiros__chat_before_iframe").classList.remove("neiros__slideUp");
                type_new = 'mobile2 neiros__slideUp'
                content_new = '';
            }
            else{
                document.querySelector("#neiros__chat_before_iframe").classList.add("mobile");
                document.querySelector("#neiros__chat_before_iframe").classList.remove("neiros__slideUp");
                type_new = 'mobile neiros__slideUp'
                content_new = '';
            }


        }
        else{
            document.querySelector("#neiros__chat_before_iframe").classList.remove("mobile");
        }

        list = document.querySelector("#neiros__chat_before_iframe");
        list.innerHTML = '<div class="neiros__closet-icon-modal '+type_new+'">'+content_new+'</div><iframe id="neiros__chat_iframe" src="https://cloud.neiros.ru/xcallback/'+divise+'/'+sbjs.get.first_add.hash+'/'+CBU_GLOBAL.config.widget.key+'/?promo='+sbjs.get.promo.code+'&type='+type+'&'+divise+'&my_metrika_id='+my_metrika_id+'&NEIROS_ID='+UNIQ_NEIROS_ID+'&current_url='+current_url_page+'"  ></iframe><div class="neiros__copiright_new2">Виджет заряжен Neuron</div>'


        var elem = document.querySelectorAll(".neiros__btn_round");
        for (var i = 0; i < elem.length; i++) {
            elem[i].classList.remove("visionthis");
        }

        div = document.querySelector("#neiros__btn_block");
        classes = div.classList;
        classes.remove("visabled");
		if(stat === '0'){
        list = document.querySelector("#neiros__chat_before_iframe");
        list.style.display = 'block';}
 
        
        
        /*	list = document.querySelector("#neiros__chat_hello_window");
            list.style.display = 'none';	*/
    }
addIframe_new('phone', '1');
    function ready() {

        var matches;
        (function(doc) {
            matches =
                doc.matchesSelector ||
                doc.webkitMatchesSelector ||
                doc.mozMatchesSelector ||
                doc.oMatchesSelector ||
                doc.msMatchesSelector;
        })(document.documentElement);

        /*выбор услуги*/
        mass = [];
        mass.forEach.call( document.querySelectorAll('.neiros__all-servises li'), function(el) { el.addEventListener('click', function() {
            div = document.querySelector("#neiros__panel_widget .neiros__active_servis");
            classes = div.classList;
            classes.remove("neiros__active_servis");
            classes = el.classList;
            classes.add("neiros__active_servis");
            return false;

        }, false);
        })

        if(window_wight >= 450){
            /*Описание услуги*/
            mass.forEach.call( document.querySelectorAll('.neiros__btn_round'), function(el) { el.addEventListener('mouseover', function() {
                this.querySelector(".neiros__toltip").classList.add("visablethis");

            }, false);
            })

            mass.forEach.call( document.querySelectorAll('.neiros__btn_round'), function(el) { el.addEventListener('mouseout', function() {
                this.querySelector(".neiros__toltip").classList.remove("visablethis");

            }, false);
            })



            /*вывод услуг*/
            mass.forEach.call( document.querySelectorAll('#neiros__chat_start, #neiros__chat_start img'), function(el) {
                el.addEventListener('click', function() {
                    /*   	var elem = document.querySelectorAll(".neiros__btn_round");
                           for (var i = 0; i < elem.length; i++) {
                          elem[i].classList.add("visionthis");
                            }*/

        var  window_wight = window.screen.availWidth;
        if(window_wight <= 450){
         document.querySelector("html").classList.add("neiros-site-full-block");
        }

   list = document.querySelector("#neiros__chat_before_iframe");
        list.style.display = 'block';
        
        
        
 /*                   addIframe_new('phone', '0');
                    document.querySelector(".neiros__start_btn").classList.add("neiros__start_btn_show");
                    document.querySelector(".neiros__start_btn img").style.display = 'none';*/
                }, false);
            })

        }
        else{

            document.querySelector("#neiros__chat_before_iframe").classList.remove("neiros__fadeIn");
           /* document.querySelector("#neiros__chat_before_iframe").classList.add("neiros__slideUp");*/




            mass.forEach.call( document.querySelectorAll('#neiros__chat_start, #neiros__chat_start img'), function(el) { el.addEventListener('click', function() {
/*                addIframe_new('phone', '0');
                document.querySelector(".neiros__start_btn").classList.add("neiros__start_btn_show");
                document.querySelector(".neiros__start_btn img").style.display = 'none';*/
				        var  window_wight = window.screen.availWidth;
        if(window_wight <= 450){
         document.querySelector("html").classList.add("neiros-site-full-block");
        }
				   list = document.querySelector("#neiros__chat_before_iframe");
        list.style.display = 'block';
            }, false);
            })


        }






        /*mass.forEach.call( document.querySelectorAll('#neiros__chat_start'), function(el) { el.addEventListener('mouseout', function() {
               var elem = document.querySelectorAll(".neiros__btn_round");
               for (var i = 0; i < elem.length; i++) {
              elem[i].classList.remove("visionthis");
                }
         }, false);
        })*/



        /*Открыть чат*/
        mass.forEach.call(
            document.querySelectorAll('.neiros__open__chart'), function(el) { el.addEventListener('click', function() {
                div = document.querySelector(".neiros__start_btn");
                classes = div.classList;
                classes.add("neiros__start_btn_show");
                list = document.querySelector(".neiros__start_btn img");
                list.style.display = 'none';
                addIframe_new('chat');
                list = document.querySelector("#neiros__chat_before_iframe");
                list.style.display = 'block';
                /*list = document.querySelector("#neiros__chat_hello_window");
                list.style.display = 'none';*/
                return false;

            }, false);
            }
        )


        mass.forEach.call(
            document.querySelectorAll('#neiros__chat_btn'), function(el) { el.addEventListener('click', function() {
                addIframe_new('chat');
            }, false);
            }
        )

        mass.forEach.call(
            document.querySelectorAll('#neiros__phone_btn'), function(el) { el.addEventListener('click', function() {
                addIframe_new('phone', '0');
            }, false);
            }
        )

        mass.forEach.call(
            document.querySelectorAll('#neiros__lid_btn'), function(el) { el.addEventListener('click', function() {
                addIframe_new('lidi');
            }, false);
            }
        )

        mass.forEach.call(
            document.querySelectorAll('#neiros__geo_btn'), function(el) { el.addEventListener('click', function() {
                addIframe_new('geo');
            }, false);
            }
        )

        mass.forEach.call(
            document.querySelectorAll('#neiros__socialpng_btn'), function(el) { el.addEventListener('click', function() {
                addIframe_new('social');
            }, false);
            }
        )


        mass.forEach.call(
            document.querySelectorAll('.neiros__botoom_btn span'), function(el) { el.addEventListener('click', function() {
                div = document.querySelector(".neiros__start_btn");
                classes = div.classList;
                classes.remove("neiros__start_btn_show");
                list = document.querySelector(".neiros__start_btn img");
                list.style.display = 'block';
                div = document.querySelector("#neiros__btn_block");
                classes = div.classList;
                classes.remove("visabled");

            }, false);
            }
        )



        /*Закрыть приветствующее окно*/
        mass.forEach.call( document.querySelectorAll('.neiros__closet__hello_window'), function(el) { el.addEventListener('click', function() {
            /*	list = document.querySelector("#neiros__chat_hello_window");
                list.style.display = 'none';*/
            return false;

        }, false);
        })



        document.addEventListener('click', function(e) {
            if ( matches.call( e.target, '.neiros__start_btn_show') ) {

                div = document.querySelector(".neiros__start_btn");
                classes = div.classList;
                classes.remove("neiros__start_btn_show");
                list = document.querySelector(".neiros__start_btn img");
                list.style.display = 'block';
                list = document.querySelector("#neiros__chat_before_iframe");
                list.style.display = 'none';

                return false;
            }


        }, false);


        document.addEventListener('click', function(e) {
            if ( matches.call( e.target, '.neiros__closet-icon-modal, .neiros__closet-icon-modal img') ) {
                div = document.querySelector(".neiros__start_btn");
                classes = div.classList;
                classes.remove("neiros__start_btn_show");
                list = document.querySelector(".neiros__start_btn img");
                list.style.display = 'block';
                list = document.querySelector("#neiros__chat_before_iframe");
                list.style.display = 'none';
                document.querySelector("html").classList.remove("neiros-site-full-block");
                return false;
            }
        }, false);

        /*
        if(window_wight <= 450){
            divise = 'mobile'
            }
        else{
            divise = 'desctop'
            }
        list = document.querySelector("#neiros__chat_before_iframe");
        list.innerHTML = '<div class="neiros__closet-icon-modal"><img  src="images/icons/closet-icon-modal.PNG" alt=""></div><iframe id="neiros__chat_iframe" src="callback.php?'+divise+'&my_metrika_id='+my_metrika_id+'&NEIROS_ID='+UNIQ_NEIROS_ID+'&current_url='+current_url_page+'"  ></iframe>';*/
    }
    document.addEventListener("DOMContentLoaded", ready);
ready()--}}

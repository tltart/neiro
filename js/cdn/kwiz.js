/*MODULE KWIZ*/
var kvizarray = [];
function get_data_kviz(ARRAY){

    id = ARRAY[0];
    ARRAY = ARRAY[1];

    var active = ARRAY.step5.active
    var everyday = ARRAY.step6.everyday
    var on_off = ARRAY.step6.on_off
    var color = ARRAY.step5.color
    var text_color = ARRAY.step5.color_text
    var event_ = ARRAY.step5.event
    var icon = CBU_GLOBAL.config.api_url+''+ARRAY.step5.icon
    var linck = ARRAY.step5.linck
    var position = ARRAY.step5.position
    var text_label = ARRAY.step5['text-label'];
    var rules_count  = 'none';

    if(ARRAY.step6.time === '' || ARRAY.step6.time === null ){
        time_kviz = 10;
    }else{

        time_kviz = ARRAY.step6.time;
    }

    if(ARRAY.step6.rules.length > 0){
        URL_THIS_PAGE = document.location.href;
        rules_count = 0;
        for (var i = 0; i < ARRAY.step6.rules.length; i++){
            var obj = ARRAY.step6.rules[i];
            if(obj.pravilo === 'no_correct'){
                if(URL_THIS_PAGE !== obj.url){
                    rules_count = 1;



                }
            }
            if(obj.pravilo === 'correct'){
                if(URL_THIS_PAGE === obj.url){
                    rules_count = 1;


                }
            }

            if(obj.pravilo === 'like'){
                if (URL_THIS_PAGE.indexOf(obj.url) != -1) {
                    rules_count = 1;

                }



            }
            if(obj.pravilo === 'not_like'){

                if (URL_THIS_PAGE.indexOf(obj.url) != -1) {

                }
                else{
                    rules_count = 1;


                }



            }


        }

    }

    if(rules_count === 'none' || rules_count > 0){
        if(document.querySelector("div").classList.contains("neiros_kviz_container") === 0 || document.querySelector("div").classList.contains("neiros_kviz_container") === false){
            ;
            var e = document.createElement("div");
            e.className = "neiros_kviz_container";
            var  window_wight = window.screen.availWidth;
            neiros__kviz_cont = '';
            if(window_wight <= 1200){
                neiros__kviz_cont = 'kviz-mobile-setup';
            }
            if(active === 'Подключите виджет к своей кнопке'){

                e.innerHTML=`
<link href="`+CBU_GLOBAL.config.api_url+`/cdn/v1/kviz/neiroskviz.css" rel="stylesheet" type="text/css">
<div class="neiros__kviz_before_iframe_bg `+neiros__kviz_cont+` " style="display:none;">
<div id="neiros__kviz__before_iframe" class="neiros__kviz__before_iframe-class" ><div class="neiros__closet-icon-modal-kviz"></div>
<iframe id="neiros__kviz_iframe" src="`+CBU_GLOBAL.config.api_url_kwiz+`/?id=`+id+`&metrika_id=`+NEIROS_METRIKA_ID+`&neiros_visit=`+neiros_visit+`&session_id=`+UNIQ_NEIROS_ID+`"  ></iframe>
</div>
</div>
`, document.body.appendChild(e);

                kvizarray.push({id:id, i:1})
            }
            else{
                type_btn = '';
                if(active === 'Плавающий ярлык'){
                    if(position === 'left-top' || position === 'left-down' || position === 'right-top' || position === 'right-down'){
                        position = 'down-right';

                    }
                    type_btn = 'kviz-design-floating';
                }

                e.innerHTML=`
<link href="`+CBU_GLOBAL.config.api_url+`/cdn/v1/kviz/neiroskviz.css" rel="stylesheet" type="text/css">

<div data-color="`+text_color+`" class="neiros__kviz_btn `+type_btn+` `+position+`" style="background: `+color+`;">
	 <span class="neiros__kviz_btn__img"> <img src="`+icon+`"> </span>
	 <div class="neiros__kviz_btn__text">`+text_label+`</div>
</div>
<div class="neiros__kviz_before_iframe_bg `+neiros__kviz_cont+`" style="display:none;">
<div id="neiros__kviz__before_iframe" class="neiros__kviz__before_iframe-class" ><div class="neiros__closet-icon-modal-kviz"></div>
<iframe id="neiros__kviz_iframe" src="`+CBU_GLOBAL.config.api_url_kwiz+`/?id=`+id+`&metrika_id=`+NEIROS_METRIKA_ID+`&neiros_visit=`+neiros_visit+`&session_id=`+UNIQ_NEIROS_ID+`"  ></iframe>
</div>
</div>
`, document.body.appendChild(e);

                kvizarray.push({id:id, i:2})
            }



            function ready_kviz(position,color){
                kviz_btn = document.querySelector('.neiros__kviz_btn').offsetWidth;
                if(position === 'down-right'){
                    document.querySelector(".neiros__kviz_btn").style.cssText = 'margin-left:0px; margin-right:0px; background: '+color+'; opacity:1;';
                }
                if(position === 'down-center'){

                    kviz_btn = kviz_btn/2;
                    document.querySelector(".neiros__kviz_btn").style.cssText = 'margin-left:-'+kviz_btn+'; margin-right:0px; background: '+color+';opacity:1;';

                }
                if(position === 'down-left'){
                    document.querySelector(".neiros__kviz_btn").style.cssText = 'margin-left:0px; margin-right:0px; background: '+color+';opacity:1;';
                }

                if(position === 'left-down'){

                    kviz_btn = kviz_btn/2;

                    document.querySelector(".neiros__kviz_btn").style.cssText = 'bottom:'+kviz_btn+'px; background: '+color+';transform-origin: 25% 0;transform: rotate(90deg);opacity:1;';
                }
                if(position === 'left-top'){

                    kviz_btn = kviz_btn/2;

                    document.querySelector(".neiros__kviz_btn").style.cssText = 'top:'+kviz_btn+'px; background: '+color+';transform-origin: 25% 0;transform: rotate(90deg);opacity:1;';
                }


                if(position === 'right-top'){

                    kviz_btn = kviz_btn/2;

                    document.querySelector(".neiros__kviz_btn").style.cssText = 'top:'+kviz_btn+'px; background: '+color+';transform-origin: 75% 0;transform: rotate(-90deg);opacity:1;';
                }

                if(position === 'right-down'){

                    kviz_btn = kviz_btn/2;

                    document.querySelector(".neiros__kviz_btn").style.cssText = 'bottom:'+kviz_btn+'px; background: '+color+';transform-origin: 75% 0;transform: rotate(-90deg);opacity:1;';
                }

            }
            if(active != 'Подключите виджет к своей кнопке'){
                setTimeout(ready_kviz, 100, position,color);
            }
            timer_page_neiros_kviz = 0
            if(on_off === true){
                if(everyday === true){
                    if(!get_cookie("neiros_show_kviz")){
                        setInterval(function(){

                            if(Number(time_kviz) === timer_page_neiros_kviz){
                                setCookie("neiros_show_kviz", 1, {
                                    expires: 0,
                                    path: '/'
                                });
                                document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'block';
                            }


                            timer_page_neiros_kviz = timer_page_neiros_kviz+1
                        },1000);
                    }
                }
                else{
                    setInterval(function(){

                        if(Number(time_kviz) === timer_page_neiros_kviz){

                            document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'block';
                        }


                        timer_page_neiros_kviz = timer_page_neiros_kviz+1
                    },1000);

                }
            }
            mass_kviz = [];
            if(linck === '' || linck === null){
            }
            else{
                if(active === 'Подключите виджет к своей кнопке'){
                    mass_kviz.forEach.call( document.querySelectorAll(linck), function(el) { el.addEventListener('click', function() {
                        document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'block';


                    }, false);
                    })
                }
            }

            mass_kviz.forEach.call( document.querySelectorAll('.neiros__kviz_btn'), function(el) { el.addEventListener('click', function() {
                document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'block';

            }, false);
            })

            mass_kviz.forEach.call( document.querySelectorAll('.neiros__closet-icon-modal-kviz'), function(el) { el.addEventListener('click', function() {
                document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'none';

            }, false);
            })

            function isVisible (ele) {
                return  ele.clientWidth !== 0 &&
                    ele.clientHeight !== 0 &&
                    ele.style.opacity !== 0 &&
                    ele.style.visibility !== 'hidden';
            }

            document.onclick = function(e){

                t = isVisible(document.querySelector(".neiros__kviz_before_iframe_bg"));



                if(t === true){
                    class2 = event.target.className;


                    if ( class2 === 'neiros__kviz_before_iframe_bg ' ) {

                        document.querySelector(".neiros__kviz_before_iframe_bg").style.display = 'none';
                    };
                }
            };


        }
    }

}










if(CBU_GLOBAL.config.widget.tip_31_kwiz){
    widget_kviz = [];
    widget_kviz_data = [];
    widget_kviz = CBU_GLOBAL.config.widget.tip_31_kwiz;
    widget_kviz_data = CBU_GLOBAL.config.widget.tip_31_kwiz_data;
    wki = 1;

    if(widget_kviz.length > 0){

        /*widget_kviz.forEach(function(item, i, arr) {
        get_data_kviz(item)
        });*/
        dataIdKviz = '';
        Object.entries(widget_kviz_data).forEach(function(item, i, arr){

            ARRAY = item[1]
            rules_count = 'none';
            if(ARRAY.step6.rules.length > 0){
                URL_THIS_PAGE = document.location.href;
                rules_count = 0;
                for (var i = 0; i < ARRAY.step6.rules.length; i++){
                    var obj = ARRAY.step6.rules[i];
                    if(obj.pravilo === 'no_correct'){
                        if(URL_THIS_PAGE !== obj.url){
                            rules_count = 1;



                        }
                    }
                    if(obj.pravilo === 'correct'){
                        if(URL_THIS_PAGE === obj.url){
                            rules_count = 1;


                        }
                    }

                    if(obj.pravilo === 'like'){
                        if (URL_THIS_PAGE.indexOf(obj.url) != -1) {
                            rules_count = 1;

                        }



                    }
                    if(obj.pravilo === 'not_like'){

                        if (URL_THIS_PAGE.indexOf(obj.url) != -1) {

                        }
                        else{
                            rules_count = 1;


                        }



                    }


                }
                if(rules_count > 0){
                    dataIdKviz = item[0]
                }
            }



        })

        Object.entries(widget_kviz_data).forEach(function(item, i, arr){

            if(dataIdKviz === ''){
                if(kvizarray.length === 0){

                    get_data_kviz(item)
                }
            }
            else{
                if(item[0] === dataIdKviz){
                    get_data_kviz(item)
                }


            }

        })


    }

}

/*END MODULE KWIZ*/
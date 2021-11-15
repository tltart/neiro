/*MODULE INIT*/

var NEIROS_METRIKA_ID = get_cookie("my_metrika_id_20");
var UNIQ_NEIROS_ID = uniqId('');
var olev_phone_track = get_cookie("neiros_phone_track");
var neiros_email_track = get_cookie("neiros_email_track");
var olev_phone_track2 = get_cookie( "neiros_phone_track2");
var hasConsole = typeof console !== "undefined"
var claintidarr = [];
var params_neiros = get_param_neiros();
var params_neiros_search = params_neiros['neiros'];
var reload_page = 0;
var storage_key = localStorage.getItem('page');
var ref = localStorage.getItem('refer');
if (storage_key == window.location.href && ref == document.referrer) {
    reload_page = 1;
}
var CURRENT={};
var PROMO={};
var neiros_show = get_cookie("neiros_show");
localStorage.setItem('page', window.location.href);
localStorage.setItem('refer', document.referrer);
var NeirosDatalayer = [];
var show_phone_neiros = 0;
var neiros_visit = get_cookie("neiros_visit_v20");
if (neiros_visit == null || (typeof neiros_visit === 'undefined')) {
//генерация и сохранение куки и переме

    neiros_visit = uniqId('');
    setCookie("neiros_visit_v20", neiros_visit, {
        expires: 87776000,
        path: '/'
    });

}
var _ga=get_cookie("_ga");
var neiros_last_vst = get_cookie("neiros_last_vst");
var is_first = get_cookie("is_first");
var roi_get = 0;
var roistat_visit = get_cookie_roistat("roistat_visit");
var session_count = 1;
if (NEIROS_METRIKA_ID === 'null' || NEIROS_METRIKA_ID === null) {
//генерация и сохранение куки и переменной
    if (get_cookie("session_count")) {
        session_count = Number(get_cookie("session_count")) + 1;
        setCookie("session_count", session_count, {
            expires: 87776000,
            path: '/'
        });
    } else {
        session_count = 1;
        setCookie("session_count", session_count, {
            expires: 87776000,
            path: '/'
        });
    }
    NEIROS_METRIKA_ID = uniqId('');
    setCookie("my_metrika_id_20", NEIROS_METRIKA_ID, {
        expires: 1800,
        path: '/'
    });
}else{
    setCookie("my_metrika_id_20", NEIROS_METRIKA_ID, {
        expires: 1800,
        path: '/'
    });
}
var myhash = generate("xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx");
if (typeof params_neiros_search === 'undefined') {

    params_neiros_search = '0';
}
var _ym_uid = get_cookie("_ym_uid");
var _gid = get_cookie("_ga");
if (_gid) {
    _gid = _gid.split('.');
    _gid = _gid[2] + '.' + _gid[3];
}

var olev_time_track = get_cookie("olev_time_track");


if (get_cookie("olev_time_track") == null) {
    tim = time();
    setCookie("olev_time_track", tim, {
        expires: 900,
        path: '/'
    });
    olev_time_track = tim;

}

function get_param_neiros() {
    return window.location.search
        .replace('?', '')
        .split('&')
        .reduce(
            function (p, e) {
                var a = e.split('=');
                p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );
}

function set_new_neorps_metrika(NEIROS_METRIKA_ID_1,k) {
    setCookie("my_metrika_id_20", 1, {
        expires: -1
    })
    NEIROS_METRIKA_ID=NEIROS_METRIKA_ID_1;

        setCookie("my_metrika_id_20", NEIROS_METRIKA_ID_1, {
        expires: 1800,
        path: '/'
    });

    if(k==1){
        send_new_metrika(1);
    }

}

function get_cookie_roistat(cookie_name) {
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

    if (results) {
        roi_get = 1;
        return (unescape(results[2]));
    } else {
        roi_get = 1;
        return null;
    }
}

function uniqId(prefix) {
   return hexID();
}

function generate(str) {
    return str.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0;
        return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
    });
}

function in_array(what, where) {

    for (var i = 0; i < where.length; i++)

        if (what == where[i])

            return 1;

    return 0;

}
function set_neiros_t_type(t_type){
    setCookie("neiros_t_typ", t_type, {
        expires: -1,
        path: '/'
    });
    setCookie("neiros_t_typ", t_type, {
        expires: 87776000,
        path: '/'
    });
}
function setCookie(name, value, options) {
    options = options || {};

    var expires = options.expires;

    if (typeof expires == "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }

    value = encodeURIComponent(value);

    var updatedCookie = name + "=" + value;

    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }
if(CBU_GLOBAL.config.widget.coocie_all==1){
    document.cookie = updatedCookie+"; domain="+CBU_GLOBAL.config.widget.basedomain;
}else{
    document.cookie = updatedCookie;
}

}

function get_cookie(cookie_name) {
    var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

    if (results)
        return (unescape(results[2]));
    else
        return null;
}

function time() {
    return parseInt(new Date().getTime() / 1000)
}

var sbjs;

try {

if(CBU_GLOBAL.config.widget.socket==1) {
    var socket_neiros_io = io(CBU_GLOBAL.config.api_url+':'+CBU_GLOBAL.config.socket_port+'/', {
        secure: true,
        query: "session_id=" + UNIQ_NEIROS_ID +
            "&mk_id=" + CBU_GLOBAL.config.widget.mk_id+
            "&site_id=" + CBU_GLOBAL.config.widget.ssd+
            "&url=" + window.location.href+
            "&ua=" + navigator.userAgent+
            "&neiros_visit=" +neiros_visit+
            "&metrika_id=" + NEIROS_METRIKA_ID+
            "&phone_rezerv_time=" + CBU_GLOBAL.config.widget.phone_rezerv_time+
            '&title=' + encodeURIComponent(document.title)
    });
    socket_neiros_io.on("connect", () => {
        console.log(socket_neiros_io.connected); // true
    mousemove_handler(function (r) {

        data_r =r.pageX + ';' + r.pageY + ';' + r.clientX + ';' + r.clientY + ';' + r.gridX + ';' + r.gridY;
        socket_neiros_io.emit('mouseover',{
            session_id:UNIQ_NEIROS_ID,

            mk_id:CBU_GLOBAL.config.widget.mk_id,
            metrika_id:NEIROS_METRIKA_ID,
            mouse:MD5(data_r),
            phone_rezerv_time:MD5(CBU_GLOBAL.config.widget.phone_rezerv_time),

        })


    }, 100);
    });


}
} catch (e) {

}
var
    params = {
        URl: '' + document.URL + '',
        href: '' + window.location.href + '',
        referrer: '' + document.referrer + '',
        utm: '' + window.location.search.substr(1) + '',
        'session_count': session_count
    };

var LastTimeMouse=new Date();
/*END MODULE INIT*/
var mousemove_handler = function (handler, minDelta) {
    if (typeof handler == 'function') {
        minDelta = minDelta || 1;
        window.__prevX = null;
        window.__prevY = null;
        var _calcVal = function (v) {
            return Math.floor(v / minDelta);
        };
        var _mousemove_handler = function (event) {
            var clientX, clientY, pageX, pageY;
            if (event.changedTouches) {
                clientX = event.changedTouches[0].clientX;
                clientY = event.changedTouches[0].clientY;
                pageX = event.changedTouches[0].pageX;
                pageY = event.changedTouches[0].pageY;
            } else if (event.targetTouches) {
                clientX = event.targetTouches[0].clientX;
                clientY = event.targetTouches[0].clientY;
                pageX = event.targetTouches[0].pageX;
                pageY = event.targetTouches[0].pageY;
            } else {
                clientX = event.clientX;
                clientY = event.clientY;
                pageX = event.pageX;
                pageY = event.pageY;
            }
            if (window.__prevX == null || window.__prevY == null || Math.abs(_calcVal(pageX) - window.__prevX) > 0 || Math.abs(_calcVal(pageY) - window.__prevY) > 0) {
                window.__prevX = _calcVal(pageX);
                window.__prevY = _calcVal(pageY);
                handler({
                    clientX: clientX,
                    clientY: clientY,
                    pageX: pageX,
                    pageY: pageY,
                    gridX: window.__prevX,
                    gridY: window.__prevY,
                    event: event
                });
                LastTimeMouse=new Date();
            }
        };
        document.addEventListener('mousemove', _mousemove_handler);
        document.addEventListener('touchstart', _mousemove_handler);
        document.addEventListener('touchmove', _mousemove_handler);
    }
};


reserv_timer =( CBU_GLOBAL.config.widget.phone_rezerv_time-30);
timer_neiros_send = 0;
setInterval(function(){
    timer_neiros_send = timer_neiros_send+1

    if(timer_neiros_send === reserv_timer){
        var x = new XMLHttpRequest();
        var bodyes= 'neiros_visit=' + neiros_visit
            +'&my_metrika_id=' + NEIROS_METRIKA_ID
            +'&phone_status_dinamic=' + CBU_GLOBAL.config.widget.phone_status_dinamic
            +'&key=' + CBU_GLOBAL.config.widget.key
            +'&olev_phone_track2=' + olev_phone_track2 +
             '&LastTimeMouse=' + (Date.parse(LastTimeMouse)/1000) ;
        x.open("GET", CBU_GLOBAL.config.api_url + '/api/update_phone_time?'+bodyes, true);
        x.onload = function (){
           if(x.responseText=='ok'){
               setCookie("neiros_phone_track2", olev_phone_track2, {
                   expires: 900,
                   path: '/'
               });
               timer_neiros_send=0;
           }
        }
        x.send(null);

    }


},1000);
/*wistis*/
if(CBU_GLOBAL.config.widget.add_neiros_form==1){
    all_form_site_neiros = document.querySelectorAll('form');
    for (let i=0, length = all_form_site_neiros.length; i < length; i++) {
        input_create = document.createElement('input');
        input_create.setAttribute("type", "hidden");
        input_create.setAttribute("name", "neiros_visit");
        input_create.setAttribute("value", neiros_visit);
        all_form_site_neiros[i].append(input_create);
    }
}




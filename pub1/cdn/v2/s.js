class MyConstroctor {

    constructor(name) {
        this.name = name;
    }

    get_cookie(cookie_name) {
        var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');

        if (results)
            return (unescape(results[2]));
        else
            return null;
    }

    include(url) {
        var script = document.createElement('script');
        script.src = url;
        document.getElementsByTagName('head')[0].appendChild(script);
    }

    get_param() {
        return body = 'neiros_visit=' + v2_neiros_visit +
            '&url=' + encodeURIComponent(JSON.stringify(window.location.href)) +
            '&url2=' + encodeURIComponent(JSON.stringify(document.URL)) +
            '&referrer=' + encodeURIComponent(JSON.stringify(document.referrer)) +
            '&my_metrika_id=' + v2_metrika_id;


    }

}

var neiros = new MyConstroctor();

var v2_neiros_visit = neiros.get_cookie('neiros_visit_v1');
var v2_metrika_id = neiros.get_cookie('my_metrika_id');


console.log('WISTIS');
 alert(v2_neiros_visit);





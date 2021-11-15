/*MODULE CODE */

sbjs.init({
    lifetime: 3,
    session_length: 15,
    domain: {
        host: CBU_GLOBAL.config.site,
        isolate: true
    },
    referrals: [
        {
            host: 'away.vk.com',          // This is host from Twitter's `http referer`
            medium: 'social',      // This is custom `utm_medium`, you can drop it and it'll be `referral`
            display: 'vk.com' // And this is how you'll see it in the result data
        }],
    promocode: true,
    callback: placeData
});


function replacenumber(olev_phone_track2, olev_phone_track, class222) {
    /*document.body.innerHTML = document.body.innerHTML.replace(/+7(812)200-83-59/g, '12312312');*/
    xelsement = class222.split(',');
    if (xelsement.length > 0) {
        for (var ii = 0; ii < xelsement.length; ii++) {

            idelement = xelsement[ii].split('#')[1];
            classelement = xelsement[ii].split('.')[1];

            a = document.getElementsByClassName(classelement);

            for (var i = 0; i < a.length; i++) {

                if (CBU_GLOBAL.config.widget.withurl == 1) {
                    a[i].innerHTML = '<a href="tel:' + olev_phone_track2 + '">' + olev_phone_track + '</a>';

                } else {
                    if (a[i].innerHTML != '') {
                        if (a[i].innerHTML.indexOf('img') < 0) {
                            a[i].innerHTML = olev_phone_track;
                        }
                    }
                    if (a[i].hasAttribute('href')) {
                        a[i].setAttribute('href', 'tel:' + olev_phone_track)
                    } else {
                        if (a[i].closest('a')) {
                            if (a[i].closest('a').hasAttribute('href')) {
                                a[i].closest('a').setAttribute('href', 'tel:' + olev_phone_track)
                            }
                        }
                    }

                }
                DINAMICPHONE = olev_phone_track;
            }

            bn = document.getElementById(idelement);


            if (bn != null) {
                if (CBU_GLOBAL.config.widget.withurl == 1) {
                    bn.innerHTML = '<a href="tel:' + olev_phone_track2 + '">' + olev_phone_track + '</a>';
                } else {
                    bn.innerHTML = olev_phone_track;
                    if (bn.hasAttribute('href')) {
                        bn.setAttribute('href', 'tel:' + olev_phone_track)
                    }
                }

                DINAMICPHONE = olev_phone_track;
            }
        }

    }
}

function podmena_dinamic(phone1, phone2) {	    /*Определим динамика или статика*/


    /*старт подмены*/


    if (olev_phone_track === null) {

        setCookie("neiros_phone_track", phone1, {
            expires: 900,
            path: '/'
        });
        setCookie("neiros_phone_track2", phone2, {
            expires: 900,
            path: '/'
        });
        olev_phone_track = phone1;
        olev_phone_track2 = phone2;
    } else {
        setCookie("neiros_phone_track", olev_phone_track, {
            expires: 900,
            path: '/'
        })
        setCookie("neiros_phone_track2", olev_phone_track2, {
            expires: 900,
            path: '/'
        })


    }


    /**/

    if (olev_phone_track.length < 2) {
        setCookie("neiros_phone_track", phone1, {
            expires: 900,
            path: '/'
        });
        setCookie("neiros_phone_track2", phone2, {
            expires: 900,
            path: '/'
        });
        olev_phone_track = phone1;
        olev_phone_track2 = phone2;
    }
    if (olev_phone_track2.length < 2) {

        setCookie("neiros_phone_track", phone1, {
            expires: 900,
            path: '/'
        });
        setCookie("neiros_phone_track2", phone2, {
            expires: 900,
            path: '/'
        });
        olev_phone_track = phone1;
        olev_phone_track2 = phone2;
    }


    if (olev_phone_track2 == null) {
        setCookie("neiros_phone_track", phone1, {
            expires: 900,
            path: '/'
        });
        setCookie("neiros_phone_track2", phone2, {
            expires: 900,
            path: '/'
        });
        olev_phone_track = phone1;
        olev_phone_track2 = phone2;
    }


    mass = {olev_phone_track: olev_phone_track, olev_phone_track2: olev_phone_track2}
    return mass;

}

function send_new_metrika(rem) {
    var body_new = 'neiros_visit=' + neiros_visit +
        '&neiros_last_vst=' + encodeURIComponent(neiros_last_vst) +
        '&url=' + encodeURIComponent(JSON.stringify(window.location.href)) +
        '&type=pageview' +
        '&_ym_uid=' + encodeURIComponent(JSON.stringify(_ym_uid)) +
        '&my_metrika_id=' + NEIROS_METRIKA_ID +
        '&reload_page=' + reload_page +
        '&session_id=' + UNIQ_NEIROS_ID +
        '&_gid=' + encodeURIComponent(JSON.stringify(_gid)) +
        '&title=' + encodeURIComponent(document.title) +
        '&olev_phone_track=' + encodeURIComponent(olev_phone_track) +
        '&olev_phone_track2=' + encodeURIComponent(olev_phone_track2) +
        '&roistat_visit=' + roistat_visit +
        '&params=' + encodeURIComponent(JSON.stringify(params)) +
        '&current=' + encodeURIComponent(JSON.stringify(CURRENT)) +
        '&promo=' + encodeURIComponent(JSON.stringify(PROMO)) +
        '&key=' + CBU_GLOBAL.config.widget.key +
        '&show_phone=' + encodeURIComponent(show_phone_neiros) +
        '&neiros_email_track='+neiros_email_track +
        '&phone_status_dinamic=' + CBU_GLOBAL.config.widget.phone_status_dinamic;

    include(CBU_GLOBAL.config.api_url + '/api/counter.js?' + body_new)


}


function placeData(sb) {
    CURRENT = sb.current;
    PROMO = sb.promo.code;


    is_static = 0;

    if (CBU_GLOBAL.config.widget.tip_2 == 1) {

        /*phone_static = CBU_GLOBAL.config.widget.phone_static;*/
        default_scenarii = 0;
        phone_array = CBU_GLOBAL.config.widget.tip_2_routing;
        phone_array2 = [];
        phone_array3 = [];
        for (i = 0; i < phone_array.length; i++) {
            if (phone_array[i].is_default == 1) {
                default_scenarii = 1;
                phone_array3.push(phone_array[i]);

            } else {
                if (phone_array[i].class_replace != null) {
                    if (phone_array[i].class_replace != '') {
                        if (phone_array[i].class_replace != '.') {
                            if (document.querySelector(phone_array[i].class_replace)) {
                                phone_array2.push(phone_array[i]);
                            }
                        }
                    }
                }
            }
        }


        if (phone_array2.length > 0) {
            phone_array = phone_array2;

        } else {
            phone_array = phone_array3;
        }


        if (document.querySelector('.js-city-select')) {

            document.querySelector('.js-city-select').addEventListener('click', function () {

                setCookie("neiros_phone_track", 1, {
                    expires: -1
                })
                setCookie("neiros_phone_track2", 1, {
                    expires: -1
                })
            });

        }

        if (document.querySelector('.popup_city ul li')) {

            $('.popup_city ul li').on('click', function () {

                setCookie("neiros_phone_track", 1, {
                    expires: -1
                })
                setCookie("neiros_phone_track2", 1, {
                    expires: -1
                })
            });

        }

if (document.querySelector('.city-list__menu')) {

            $('.city-list__menu li').on('click', function () {

                setCookie("neiros_phone_track", 1, {
                    expires: -1
                })
                setCookie("neiros_phone_track2", 1, {
                    expires: -1
                })
            });

        }

if (document.querySelector('.nice-select.e-location.activated')) {

            $('.nice-select.e-location.activated li').on('click', function () {

                setCookie("neiros_phone_track", 1, {
                    expires: -1
                })
                setCookie("neiros_phone_track2", 1, {
                    expires: -1
                })
            });

        }

        if (phone_array.length > 0) {
            dinamic_phone_array = phone_array.filter(function (phone_array) {
                return phone_array.type == "1"
            });

            static_phone_array = phone_array.filter(function (phone_array) {
                return phone_array.type == "2"
            });

            function statick_podmena_nomera() {
                current_new = sb.current.src;
                if (current_new.indexOf('yandex') > -1) {

                    if (current_new.indexOf('yabs.yandex.ru') > -1 || current_new.indexOf('direct.yandex.ru') > -1) {
                        sb.current.src = 'yandex'
                        sb.current.typ = 'yandex_direct'
                        sb.current.mdm = 'yandex_direct'
                    } else {
                        if (sb.current.typ != 'utm') {
                            sb.current.src = 'yandex'

                            sb.current.typ = 'organic'
                            sb.current.mdm = 'organic'
                        }
                    }

                }
                /*Статичиская подмена*/
                show_phone_neiros = 0;
                static_phone_array2 = static_phone_array.filter(function (static_phone_array) {
                    return static_phone_array.canals.length == 0
                });
                if (static_phone_array2.length > 0) {
                    if (static_phone_array2[0].class_replace !== null) {
                        mass_podmena_dinamic = podmena_dinamic(static_phone_array2[0].phone, static_phone_array2[0].phone2)
                        show_phone_neiros = 1;
                        replacenumber(mass_podmena_dinamic.olev_phone_track2, mass_podmena_dinamic.olev_phone_track, static_phone_array2[0].class_replace)
                        olev_phone_track = mass_podmena_dinamic.olev_phone_track;
                        olev_phone_track2 = mass_podmena_dinamic.olev_phone_track2;


                    }


                } else {

                    static_phone_array3 = static_phone_array.filter(function (static_phone_array) {
                        return static_phone_array.canals.length == 2
                    });

                    if (static_phone_array3.length > 0) {


                        if (static_phone_array3[0].class_replace !== null) {

                            kanal1 = static_phone_array3[0].canals[0];
                            kanal2 = static_phone_array3[0].canals[1];


                            if (neiros_show == null || neiros_show == "null") {
                                neiros_show = '';
                            }


                            if (params_neiros['neiros'] === kanal1 || params_neiros['neiros'] === kanal2 || neiros_show.indexOf(kanal1) > 0 || neiros_show.indexOf(kanal2) > 0 || kanal1 === sb.current.typ + '1') {
                                mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                show_phone_neiros = 1;
                                if (neiros_show == 'null' || neiros_show == null) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1 + ',' + kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }
                            }
                        }

                    } else {

                        static_phone_array3 = static_phone_array.filter(function (static_phone_array) {
                            return static_phone_array.canals.length == 1
                        });

                        if (static_phone_array3.length === 1) {


                            if (static_phone_array3[0].class_replace !== null) {
                                kanal1 = static_phone_array3[0].canals[0];


                                if (kanal1 === sb.current.typ + '1') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (neiros_show == null || neiros_show == "null") {
                                    neiros_show = '';
                                }


                                if (kanal1 === sb.current.typ + '1' || neiros_show === kanal1) {
                                    setCookie("neiros_phone_track", static_phone_array3[0].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[0].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }

                            }


                        }

                        if (static_phone_array3.length === 2) {


                            if (static_phone_array3[0].class_replace !== null) {
                                kanal1 = static_phone_array3[0].canals[0];
                                kanal2 = static_phone_array3[1].canals[0]


                                kanal1_n = kanal1.replace('1', '');
                                kanal2_n = kanal2.replace('1', '');


                                if (params_neiros_search.indexOf(kanal1_n) > -1 || kanal1 === sb.current.typ + '1') {


                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (params_neiros_search.indexOf(kanal2_n) > -1 || kanal2 === sb.current.typ + '1') {

                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (neiros_show == null || neiros_show == "null") {
                                    neiros_show = '';
                                }


                                if (params_neiros['neiros'] === kanal1 || neiros_show === kanal1) {
                                    setCookie("neiros_phone_track", static_phone_array3[0].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[0].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }

                                }


                                if (kanal2 === sb.current.typ + '1' || neiros_show === kanal2) {
                                    setCookie("neiros_phone_track", static_phone_array3[1].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[1].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[1].phone, static_phone_array3[1].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[1].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal2
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }

                            }


                        }

                        if (static_phone_array3.length === 3) {

                            if (static_phone_array3[0].class_replace !== null) {
                                kanal1 = static_phone_array3[0].canals[0];
                                kanal2 = static_phone_array3[1].canals[0]
                                kanal3 = static_phone_array3[2].canals[0]

                                if (params_neiros['neiros'] === kanal1) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }

                                if (params_neiros['neiros'] === kanal2) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }

                                if (kanal3 === sb.current.typ + '1') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal3;
                                    neiros_show = all_canals;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                    neiros_show = '';
                                }


                                if (params_neiros['neiros'] === kanal1 || neiros_show === kanal1) {
                                    setCookie("neiros_phone_track", static_phone_array3[0].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[0].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }

                                }

                                if (params_neiros['neiros'] === kanal2 || neiros_show === kanal2) {
                                    setCookie("neiros_phone_track", static_phone_array3[1].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[1].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[1].phone, static_phone_array3[1].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[1].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal2
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }

                                if (kanal3 === sb.current.typ + '1' || neiros_show === kanal3) {
                                    setCookie("neiros_phone_track", static_phone_array3[2].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[2].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[2].phone, static_phone_array3[2].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[2].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal3
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }

                            }


                        }

                        if (static_phone_array3.length === 4) {

                            if (static_phone_array3[0].class_replace !== null) {
                                kanal1 = static_phone_array3[0].canals[0];
                                kanal2 = static_phone_array3[1].canals[0]
                                kanal3 = static_phone_array3[2].canals[0]
                                kanal4 = static_phone_array3[3].canals[0]

                                if (params_neiros['neiros'] === kanal1) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }

                                if (params_neiros['neiros'] === kanal2) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }

                                if (kanal3 === sb.current.typ + '1') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal3;
                                    neiros_show = all_canals;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (neiros_show == null || neiros_show == "null") {
                                    neiros_show = '';
                                }


                                if (params_neiros['neiros'] === kanal1 || neiros_show === kanal1) {
                                    setCookie("neiros_phone_track", static_phone_array3[0].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[0].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1;
                                        neiros_show = all_canals;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }

                                }

                                if (params_neiros['neiros'] === kanal2 || neiros_show === kanal2) {
                                    setCookie("neiros_phone_track", static_phone_array3[1].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[1].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[1].phone, static_phone_array3[1].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[1].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal2;
                                        ;neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }


                                if (kanal3 === sb.current.typ + '1' || neiros_show === kanal3) {
                                    setCookie("neiros_phone_track", static_phone_array3[2].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[2].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[2].phone, static_phone_array3[2].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[2].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal3;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }

                                if (kanal4 == 'facebook1') {
                                    kanal4 = 'fb1';
                                }

                                if (params_neiros['neiros'] === kanal4 || neiros_show === kanal4) {
                                    setCookie("neiros_phone_track", static_phone_array3[3].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[3].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[3].phone, static_phone_array3[3].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[3].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal2;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }


                            }


                        }

                        if (static_phone_array3.length === 2) {
                            if (static_phone_array3[0].class_replace !== null) {

                                kanal1 = static_phone_array3[0].canals[0];
                                kanal2 = static_phone_array3[1].canals[0]

                                if (params_neiros['neiros'] === kanal1) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }

                                if (params_neiros['neiros'] === kanal2) {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }


                                if (neiros_show == null || neiros_show == "null") {
                                    neiros_show = '';
                                }


                                if (params_neiros['neiros'] === kanal1 || neiros_show === kanal1) {
                                    setCookie("neiros_phone_track", static_phone_array3[0].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[0].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }

                                }

                                if (params_neiros['neiros'] === kanal2 || neiros_show === kanal2) {
                                    setCookie("neiros_phone_track", static_phone_array3[1].phone, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    setCookie("neiros_phone_track2", static_phone_array3[1].phone2, {
                                        expires: 900,
                                        path: '/'
                                    });
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[1].phone, static_phone_array3[1].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[1].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;


                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal2;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }


                            }


                        }


                        if (static_phone_array3.length === 1) {

                            if (static_phone_array3[0].class_replace !== null) {
                                kanal1 = static_phone_array3[0].canals[0];


                                if (neiros_show == null || neiros_show == "null") {
                                    neiros_show = '';
                                }

                                if (params_neiros['neiros'] === kanal1 || neiros_show === kanal1) {
                                    mass_podmena_dinamic2 = podmena_dinamic(static_phone_array3[0].phone, static_phone_array3[0].phone2)
                                    replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, static_phone_array3[0].class_replace)
                                    olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                    olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;

                                    show_phone_neiros = 1;
                                    if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                        var date = new Date;
                                        date.setDate(date.getDate() + 1);
                                        dada_year = {
                                            'expires': date,
                                            'path': '/'

                                        }
                                        all_canals = kanal1;
                                        neiros_show = all_canals;
                                        setCookie('neiros_show', all_canals, dada_year)
                                    }
                                }


                            }


                        }


                    }


                }

            }


            if (dinamic_phone_array.length > 0) {
                all_canals = '';
                show_phone_neiros = 0;
                dinamic_phone_array2 = dinamic_phone_array.filter(function (dinamic_phone_array) {
                    return dinamic_phone_array.canals.length == 0
                });

                if (dinamic_phone_array2.length > 0) {
                    mass_podmena_dinamic = podmena_dinamic(dinamic_phone_array2[0].phone, dinamic_phone_array2[0].phone2)

                    show_phone_neiros = 1;
                    replacenumber(mass_podmena_dinamic.olev_phone_track2, mass_podmena_dinamic.olev_phone_track, dinamic_phone_array2[0].class_replace)
                    olev_phone_track = mass_podmena_dinamic.olev_phone_track;
                    olev_phone_track2 = mass_podmena_dinamic.olev_phone_track2;


                } else {
                    dinamic_phone_array3 = dinamic_phone_array.filter(function (dinamic_phone_array) {
                        return dinamic_phone_array.canals.length == 2
                    });
                    if (dinamic_phone_array3.length > 0) {
                        kanal1 = dinamic_phone_array3[0].canals[0];
                        kanal2 = dinamic_phone_array3[0].canals[1];


                        if (neiros_show == null || neiros_show == "null") {
                            neiros_show = '';
                        }
                        if (params_neiros_search.indexOf(kanal1) === 0 || params_neiros_search.indexOf(kanal2) === 0 || neiros_show.indexOf(kanal1) > 0 || neiros_show.indexOf(kanal2) > 0) {
                            mass_podmena_dinamic2 = podmena_dinamic(dinamic_phone_array3[0].phone, dinamic_phone_array3[0].phone2)
                            replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, dinamic_phone_array3[0].class_replace)
                            olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                            olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                            show_phone_neiros = 1;
                            if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                var date = new Date;
                                date.setDate(date.getDate() + 1);
                                dada_year = {
                                    'expires': date,
                                    'path': '/'

                                }
                                all_canals = kanal1 + ',' + kanal2
                                ;neiros_show = all_canals;
                                setCookie('neiros_show', all_canals, dada_year)
                            }
                        }
                    } else {

                        dinamic_phone_array3 = dinamic_phone_array.filter(function (dinamic_phone_array) {
                            return dinamic_phone_array.canals.length == 1
                        });

                        if (dinamic_phone_array3.length == 2) {
                            kanal1 = dinamic_phone_array3[0].canals[0];
                            kanal2 = dinamic_phone_array3[1].canals[0];

                            if (neiros_show == null || neiros_show == "null") {
                                neiros_show = '';
                            }
                            if (params_neiros_search.indexOf(kanal1) === 0 || neiros_show.indexOf(kanal1) === 0) {
                                mass_podmena_dinamic2 = podmena_dinamic(dinamic_phone_array3[0].phone, dinamic_phone_array3[0].phone2)
                                replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, dinamic_phone_array3[0].class_replace)
                                olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                show_phone_neiros = 1;
                                if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }
                            }

                            if (params_neiros_search.indexOf(kanal2) === 0 || neiros_show.indexOf(kanal2) === 0) {
                                mass_podmena_dinamic2 = podmena_dinamic(dinamic_phone_array3[1].phone, dinamic_phone_array3[1].phone2)
                                replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, dinamic_phone_array3[0].class_replace)
                                olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                show_phone_neiros = 1;
                                if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal2;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }
                            }


                        }

                        if (dinamic_phone_array3.length == 1) {
                            kanal1 = dinamic_phone_array3[0].canals[0];

                            if (neiros_show == null || neiros_show == "null") {
                                neiros_show = '';
                            }
                            if (params_neiros_search.indexOf(kanal1) === 0 || neiros_show === kanal1) {
                                mass_podmena_dinamic2 = podmena_dinamic(dinamic_phone_array3[0].phone, dinamic_phone_array3[0].phone2)
                                replacenumber(mass_podmena_dinamic2.olev_phone_track2, mass_podmena_dinamic2.olev_phone_track, dinamic_phone_array3[0].class_replace)
                                olev_phone_track = mass_podmena_dinamic2.olev_phone_track;
                                olev_phone_track2 = mass_podmena_dinamic2.olev_phone_track2;
                                show_phone_neiros = 1;
                                if (neiros_show == null || neiros_show == 'null' || neiros_show == '') {
                                    var date = new Date;
                                    date.setDate(date.getDate() + 1);
                                    dada_year = {
                                        'expires': date,
                                        'path': '/'

                                    }
                                    all_canals = kanal1;
                                    neiros_show = all_canals;
                                    setCookie('neiros_show', all_canals, dada_year)
                                }
                            }


                        }

                    }

                }


                if (all_canals === '')
                    statick_podmena_nomera();
            } else {

                statick_podmena_nomera();


            }

        }


    }


    inter = 1;
    document.onmouseover = document.onmouseout = handler;

    function handler(event) {

        function str(el) {
            if (!el) return "null"
            return el.className || el.tagName;
        }


        if (event.type == 'mouseover') {
            inter = 1;

        }
        if (event.type == 'mouseout') {

            inter = 1;
        }
    }


    setInterval(function () {
        inter++

        if (inter == 1800) {
            NEIROS_METRIKA_ID = uniqId('');
            set_new_neorps_metrika(NEIROS_METRIKA_ID, 1);


        }


    }, 1000);


    window.addEventListener('beforeunload', function (e) {

    });
    email_tracking(sb);

    send_new_metrika(0);

    send_2_metrika(sb, _ym_uid, _gid, olev_phone_track, olev_phone_track2, show_phone_neiros)
    all_widgets_go(sb, _ym_uid, _gid, olev_phone_track, olev_phone_track2)


}

function all_widgets_go(sb) {
    if (CBU_GLOBAL.config.widget.tip_0 == 1) {
        var newdocpromo = document.createElement("div");
        newdocpromo.className = "wrp_cbu", newdocpromo.innerHTML = '<div   class="wrp_cbu_w_tip_1" style="background: #' + CBU_GLOBAL.config.widget.tip_0_background + '; ' + CBU_GLOBAL.config.widget.tip_0_position_x + ': 0px;' + CBU_GLOBAL.config.widget.tip_0_position_y + ': 0px;">' +
            ' <div class=" " style="color: #' + CBU_GLOBAL.config.widget.tip_0_color + '">Промокод</div><div style="color: #' + CBU_GLOBAL.config.widget.tip_0_color + '">' + sb.promo.code + '</div> </div>', document.body.appendChild(newdocpromo)
    }

    if (CBU_GLOBAL.config.widget.tip_1 == 1) {


        if (CBU_GLOBAL.config.widget.tip_1_dop == 1) {

            include(CBU_GLOBAL.config.widget.tip_1_dop_url);

        }
        if (CBU_GLOBAL.config.widget.tip_1_osn == 1) {

            var widget_name = 'callback';
        }

    }

    if ((CBU_GLOBAL.config.widget.tip_12 == 1) || (CBU_GLOBAL.config.widget.tip_1_osn == 1)) {

        if ((CBU_GLOBAL.config.widget.tip_12 == 1) && (CBU_GLOBAL.config.widget.tip_1_osn == 1)) {
            var time_change = 5
        }


        if (CBU_GLOBAL.config.widget.tip_12 == 1) {
            var widget_name = 'widget';
        }


        include(CBU_GLOBAL.config.widget.tip_12_url)
    }
    if (CBU_GLOBAL.config.widget.tip_13 == 1) {

        include(CBU_GLOBAL.config.widget.tip_13_url)
    }
    if (CBU_GLOBAL.config.widget.tip_19_status == 1) {

        include(CBU_GLOBAL.config.widget.tip_19_url)
    }





}
function email_tracking(sb){
    if (CBU_GLOBAL.config.widget.tip_9 == 1) {
        new_email = CBU_GLOBAL.config.widget.tip_9_email;
        if (CBU_GLOBAL.config.widget.tip_9_full == 1) {
            new_email = CBU_GLOBAL.config.widget.tip_9_email;
        } else {
            new_email = CBU_GLOBAL.config.widget.tip_9_email_1 + '+' + sb.promo.code + '@' + CBU_GLOBAL.config.widget.tip_9_email_2

        }

        if (neiros_email_track == 'null' || neiros_email_track == null&&new_email!='') {
            neiros_email_track=new_email;
            setCookie("neiros_email_track", new_email, {
                expires: 900,
                path: '/'
            });
        }else{
            new_email=neiros_email_track;
        }


        /*      window.onload = function () {*/

        /*start email*/


        if (CBU_GLOBAL.config.widget.tip_9_email_3 != null) {
            idelementemail = CBU_GLOBAL.config.widget.tip_9_email_3.split('#')[1];
            classelementemail = CBU_GLOBAL.config.widget.tip_9_email_3.split('.')[1];


            a = document.getElementsByClassName(classelementemail);
            for (var i = 0; i < a.length; i++) {
                a[i].innerHTML = new_email;
                if (CBU_GLOBAL.config.widget.tip_9_email_4 == 0) {
                    a[i].innerHTML = new_email;
                } else {
                    a[i].innerHTML = '<a href="mailto:' + new_email + '">' + new_email + '</a>';
                }

            }

            bn = document.getElementById(idelementemail);
            if (bn != null) {

                if (CBU_GLOBAL.config.widget.tip_9_email_4 == 0) {
                    bn.innerHTML = new_email;
                } else {
                    bn.innerHTML = '<a href="mailto:' + new_email + '">' + new_email + '</a>';
                }

            }


        }
    }
}

function send_2_metrika(sb, _ym_uid, _gid, olev_phone_track, olev_phone_track2, show_phone_neiros) {


    var new_gid = encodeURIComponent(JSON.stringify(_gid));


    if (new_gid === 'null') {

        var send_gid = 0;
        setInterval(function () {
            new_gid2 = encodeURIComponent(JSON.stringify(_ga));

            if (send_gid === 0) {

                if (new_gid2 !== 'null') {
                    new_gid2 = new_gid2.split('.');
                    new_gid2 = new_gid2[2] + '.' + new_gid2[3];
                    var body = 'neiros_visit=' + neiros_visit +
                        '&_gid=' + encodeURIComponent(JSON.stringify(new_gid2)) +
                        '&_ym_uid=' + encodeURIComponent(_ym_uid) +
                        '&roistat_visit=' + roistat_visit;
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", CBU_GLOBAL.config.api_url + '/api/send_co_ga_ym', true);

                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.send(body);
                    send_gid = 1;

                }

            }


        }, 1000);

    }
    if (neiros_last_vst == null) {
        neiros_last_vst = 0;


    }
    url_neiros = '';
    if (params_neiros['neiros']) {
        url_neiros += '&neiros=' + encodeURIComponent(JSON.stringify(params_neiros['neiros']));
    }
    if (params_neiros['neiros_referrer']) {
        url_neiros += '&neiros_referrer=' + encodeURIComponent(JSON.stringify(params_neiros['neiros_referrer']));
    }
    if (params_neiros['neiros_position']) {
        url_neiros += '&neiros_position=' + encodeURIComponent(JSON.stringify(params_neiros['neiros_position']));
    }

    var reff = document.referrer;
    if (reff != '') {
        host = window.location.host
        referal_url = new URL(reff).hostname
        if (host === referal_url) {
            sb.current.rf = host;
            sb.current_add.rf = host;
        }

    }
    current_new = sb.current.src;
    if (current_new.indexOf('yandex') > -1) {

        if (current_new.indexOf('yabs.yandex.ru') > -1 || current_new.indexOf('direct.yandex.ru') > -1) {
            sb.current.src = 'yandex'
            sb.current.typ = 'yandex_direct'
            sb.current.mdm = 'yandex_direct'
        } else {

            if (sb.current.typ != 'utm') {
                sb.current.src = 'yandex'
                sb.current.typ = 'organic'
                sb.current.mdm = 'organic'
            }
        }

    }


    var body = 'neiros_visit=' + neiros_visit +
        '&first=' + encodeURIComponent(JSON.stringify(sb.first)) +
        '&neiros_last_vst=' + encodeURIComponent(neiros_last_vst) +
        '&url=' + encodeURIComponent(JSON.stringify(window.location.href)) +
        '&type=pageview&current=' + encodeURIComponent(JSON.stringify(sb.current)) +
        '&first_add=' + encodeURIComponent(JSON.stringify(sb.first_add)) +
        '&current_add=' + encodeURIComponent(JSON.stringify(sb.current_add)) +
        '&session=' + encodeURIComponent(JSON.stringify(sb.session)) +
        '&udata=' + encodeURIComponent(JSON.stringify(sb.udata)) +
        '&_ym_uid=' + encodeURIComponent(JSON.stringify(_ym_uid)) +
        '&my_metrika_id=' + NEIROS_METRIKA_ID +
        '&reload_page=' + reload_page +
        '&session_id=' + UNIQ_NEIROS_ID +
        '&is_first=' + is_first +
        '&_gid=' + encodeURIComponent(JSON.stringify(_gid)) +
        '&olev_phone_track=' + encodeURIComponent(olev_phone_track) +
        '&olev_phone_track2=' + encodeURIComponent(olev_phone_track2) +
        '&show_phone=' + encodeURIComponent(show_phone_neiros) +
        '&phone_status_dinamic=' + CBU_GLOBAL.config.widget.phone_status_dinamic +
        '&roistat_visit=' + roistat_visit +
        '&params=' + encodeURIComponent(JSON.stringify(params)) +
        '&promo=' + encodeURIComponent(JSON.stringify(sb.promo.code)) + url_neiros;


    neiros_last_vst = sb.udata.vst;
    setCookie('neiros_last_vst', sb.udata.vst, {
        expires: 900,
        path: '/'

    });

    setCookie("is_first", 1, {
        expires: -1,
        path: '/'
    });


    NeirosDatalayer.push({
        'neiros_visit': neiros_visit,

        'type': 'event',
        'name_event': 'neiros_form'
    })


    /* var xhr = new XMLHttpRequest();*/

    /*  xhr.onreadystatechange = function () {

          if (CBU_GLOBAL.config.widget.ssd != 44) {
              if (CBU_GLOBAL.config.widget.ssd != 8) {
              if (this.readyState == 4 && this.status == 200) {

                  for_cookie = JSON.parse(this.responseText);

                  NEIROS_METRIKA_ID = for_cookie['my_metrika_id'];
                  setCookie("my_metrika_id", NEIROS_METRIKA_ID, {
                      expires: 1800,
                      path: '/'
                  });


              }
              }

          }

      }*/

//    xhr.open("POST", CBU_GLOBAL.config.api_url + '/v1/api/metrika/' + CBU_GLOBAL.config.widget.key, true);

    //  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    //   xhr.send(body);
}


function NeirosEventSend(type_event, data) {

    if (data) {
        data.data.URL = window.location.href
        NeirosDatalayer[0].data_event = data
    }
    /*
	NeirosDatalayer[0].URL = window.location.href;*/
    NeirosDatalayer[0].name_event = type_event;
    NeirosDatalayer[0].my_metrika_id = NEIROS_METRIKA_ID;
    NeirosDatalayer[0].session_id = UNIQ_NEIROS_ID;

    if (NeirosDatalayer[0].neiros_visit === null) {

        NeirosDatalayer[0].neiros_visit = neiros_visit;
    }

    body = "data=" + JSON.stringify(NeirosDatalayer[0]);
    var xhr = new XMLHttpRequest();

    xhr.open("POST", CBU_GLOBAL.config.api_url + '/api/ajax_form/' + CBU_GLOBAL.config.widget.key, true);

    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.send(body);
}


function wistis_js_widget(order_id, phone, email, name) {

    var xhr = new XMLHttpRequest();

    var body = 'info=' + encodeURIComponent(order_id) + '&phone=' + phone + '&email=' + email + '&name=' + name + '&tip=3&hash=' + sbjs.get.first_add.hash;


    xhr.open("POST", CBU_GLOBAL.config.api_url + '/api/inputjs/' + CBU_GLOBAL.config.widget.key, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    inputjs
//    xhr.onreadystatechange = ...;

    xhr.send(body);

}

function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}


/*END MODULE CODE */

/** sourcebuster v1.1.0 **/
!function (e) {
    if ("object" == typeof exports && "undefined" != typeof module) module.exports = e(); else if ("function" == typeof define && define.amd) define([], e); else {
        var t;
        "undefined" != typeof window ? t = window : "undefined" != typeof global ? t = global : "undefined" != typeof self && (t = self), t.sbjs = e()
    }
}(function () {
    return function e(t, r, n) {
        function s(a, o) {
            if (!r[a]) {
                if (!t[a]) {
                    var c = "function" == typeof require && require;
                    if (!o && c) return c(a, !0);
                    if (i) return i(a, !0);
                    var u = new Error("Cannot find module '" + a + "'");
                    throw u.code = "MODULE_NOT_FOUND", u
                }
                var p = r[a] = {exports: {}};
                t[a][0].call(p.exports, function (e) {
                    var r = t[a][1][e];
                    return s(r ? r : e)
                }, p, p.exports, e, t, r, n)
            }
            return r[a].exports
        }

        for (var i = "function" == typeof require && require, a = 0; a < n.length; a++) s(n[a]);
        return s
    }({
        1: [function (e, t, r) {
            "use strict";
            var n = e("./init"), s = {
                init: function (e) {
                    this.get = n(e), e && e.callback && "function" == typeof e.callback && e.callback(this.get)
                }
            };
            t.exports = s
        }, {"./init": 6}], 2: [function (e, t, r) {
            "use strict";
            var n = e("./terms"), s = e("./helpers/utils"), i = {
                containers: {
                    current: "sbjs_current",
                    current_extra: "sbjs_current_add",
                    first: "sbjs_first",
                    first_extra: "sbjs_first_add",
                    session: "sbjs_session",
                    udata: "sbjs_udata",
                    promocode: "sbjs_promo"
                },
                service: {migrations: "sbjs_migrations"},
                delimiter: "|||",
                aliases: {
                    main: {type: "typ", source: "src", medium: "mdm", campaign: "cmp", content: "cnt", term: "trm"},
                    extra: {fire_date: "fd", entrance_point: "ep", referer: "rf",hash:"hash"},
                    session: {pages_seen: "pgs", current_page: "cpg"},
                    udata: {visits: "vst", ip: "uip", agent: "uag"},
                    promo: "code"
                },
                pack: {
                    main: function (e) {
                        return i.aliases.main.type + "=" + e.type + i.delimiter + i.aliases.main.source + "=" + e.source + i.delimiter + i.aliases.main.medium + "=" + e.medium + i.delimiter + i.aliases.main.campaign + "=" + e.campaign + i.delimiter + i.aliases.main.content + "=" + e.content + i.delimiter + i.aliases.main.term + "=" + e.term
                    }, extra: function (e) {
                        return i.aliases.extra.fire_date + "=" + s.setDate(new Date, e) + i.delimiter + i.aliases.extra.entrance_point + "=" + document.location.href + i.delimiter + i.aliases.extra.referer + "=" + (document.referrer || n.none) + s.setDate(new Date, e) + i.delimiter +i.aliases.extra.hash + "="+generate("xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx")
                    }, user: function (e, t) {
                        return i.aliases.udata.visits + "=" + e + i.delimiter + i.aliases.udata.ip + "=" + t + i.delimiter + i.aliases.udata.agent + "=" + navigator.userAgent
                    }, session: function (e) {
                        return i.aliases.session.pages_seen + "=" + e + i.delimiter + i.aliases.session.current_page + "=" + document.location.href
                    }, promo: function (e) {
                        return i.aliases.promo + "=" + s.setLeadingZeroToInt(s.randomInt(e.min, e.max), e.max.toString().length)
                    }
                }
            };
            t.exports = i
        }, {"./helpers/utils": 5, "./terms": 9}], 3: [function (e, t, r) {
            "use strict";
            var n = e("../data").delimiter;
            t.exports = {
                encodeData: function (e) {
                    return encodeURIComponent(e).replace(/\!/g, "%21").replace(/\~/g, "%7E").replace(/\*/g, "%2A").replace(/\'/g, "%27").replace(/\(/g, "%28").replace(/\)/g, "%29")
                }, decodeData: function (e) {
                    try {
                        return decodeURIComponent(e).replace(/\%21/g, "!").replace(/\%7E/g, "~").replace(/\%2A/g, "*").replace(/\%27/g, "'").replace(/\%28/g, "(").replace(/\%29/g, ")")
                    } catch (t) {
                        try {
                            return unescape(e)
                        } catch (r) {
                            return ""
                        }
                    }
                }, set: function (e, t, r, n, s) {
                    var i, a;
                    if (r) {
                        var o = new Date;
                        o.setTime(o.getTime() + 60 * r * 1e3), i = "; expires=" + o.toGMTString()
                    } else i = "";
                    a = n && !s ? ";domain=." + n : "", document.cookie = this.encodeData(e) + "=" + this.encodeData(t) + i + a + "; path=/"
                }, get: function (e) {
                    for (var t = this.encodeData(e) + "=", r = document.cookie.split(";"), n = 0; n < r.length; n++) {
                        for (var s = r[n]; " " === s.charAt(0);) s = s.substring(1, s.length);
                        if (0 === s.indexOf(t)) return this.decodeData(s.substring(t.length, s.length))
                    }
                    return null
                }, destroy: function (e, t, r) {
                    this.set(e, "", -1, t, r)
                }, parse: function (e) {
                    var t = [], r = {};
                    if ("string" == typeof e) t.push(e); else for (var s in e) e.hasOwnProperty(s) && t.push(e[s]);
                    for (var i = 0; i < t.length; i++) {
                        var a;
                        r[this.unsbjs(t[i])] = {}, a = this.get(t[i]) ? this.get(t[i]).split(n) : [];
                        for (var o = 0; o < a.length; o++) {
                            var c = a[o].split("="), u = c.splice(0, 1);
                            u.push(c.join("=")), r[this.unsbjs(t[i])][u[0]] = this.decodeData(u[1])
                        }
                    }
                    return r
                }, unsbjs: function (e) {
                    return e.replace("sbjs_", "")
                }
            }
        }, {"../data": 2}], 4: [function (e, t, r) {
            "use strict";
            t.exports = {
                parse: function (e) {
                    for (var t = this.parseOptions, r = t.parser[t.strictMode ? "strict" : "loose"].exec(e), n = {}, s = 14; s--;) n[t.key[s]] = r[s] || "";
                    return n[t.q.name] = {}, n[t.key[12]].replace(t.q.parser, function (e, r, s) {
                        r && (n[t.q.name][r] = s)
                    }), n
                },
                parseOptions: {
                    strictMode: !1,
                    key: ["source", "protocol", "authority", "userInfo", "user", "password", "host", "port", "relative", "path", "directory", "file", "query", "anchor"],
                    q: {name: "queryKey", parser: /(?:^|&)([^&=]*)=?([^&]*)/g},
                    parser: {
                        strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
                        loose: /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
                    }
                },
                getParam: function (e) {
                    for (var t = {}, r = e ? e : window.location.search.substring(1), n = r.split("&"), s = 0; s < n.length; s++) {
                        var i = n[s].split("=");
                        if ("undefined" == typeof t[i[0]]) t[i[0]] = i[1]; else if ("string" == typeof t[i[0]]) {
                            var a = [t[i[0]], i[1]];
                            t[i[0]] = a
                        } else t[i[0]].push(i[1])
                    }
                    return t
                },
                getHost: function (e) {
                    return this.parse(e).host.replace("www.", "")
                }
            }
        }, {}], 5: [function (e, t, r) {
            "use strict";
            t.exports = {
                escapeRegexp: function (e) {
                    return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                }, setDate: function (e, t) {
                    var r = e.getTimezoneOffset() / 60, n = e.getHours(), s = t || 0 === t ? t : -r;
                    e.setHours(n + r + s);
                    var i = e.getFullYear(), a = this.setLeadingZeroToInt(e.getMonth() + 1, 2),
                        o = this.setLeadingZeroToInt(e.getDate(), 2), c = this.setLeadingZeroToInt(e.getHours(), 2),
                        u = this.setLeadingZeroToInt(e.getMinutes(), 2),
                        p = this.setLeadingZeroToInt(e.getSeconds(), 2);
                    return i + "-" + a + "-" + o + " " + c + ":" + u + ":" + p
                }, setLeadingZeroToInt: function (e, t) {
                    for (var r = e + ""; r.length < t;) r = "0" + r;
                    return r
                }, randomInt: function (e, t) {
                    return Math.floor(Math.random() * (t - e + 1)) + e
                }
            }
        }, {}], 6: [function (e, t, r) {
            "use strict";
            var n = e("./data"), s = e("./terms"), i = e("./helpers/cookies"), a = e("./helpers/uri"),
                o = e("./helpers/utils"), c = e("./params"), u = e("./migrations");
            t.exports = function (e) {
                function t() {
                    var e;
                    if ("undefined" != typeof y.utm_source || "undefined" != typeof y.utm_medium || "undefined" != typeof y.utm_campaign || "undefined" != typeof y.utm_content || "undefined" != typeof y.utm_term || "undefined" != typeof y.gclid || "undefined" != typeof y.yclid || "undefined" != typeof y[h.campaign_param]) g(), e = r(s.traffic.utm); else if (f(s.traffic.organic)) g(), e = r(s.traffic.organic); else if (!i.get(n.containers.session) && f(s.traffic.referral)) g(), e = r(s.traffic.referral); else {
                        if (i.get(n.containers.first) || i.get(n.containers.current)) return i.get(n.containers.current);
                        g(), e = r(s.traffic.typein)
                    }
                    return e
                }

                function r(e) {
                    switch (e) {
                        case s.traffic.utm:
                            b = s.traffic.utm, k = "undefined" != typeof y.utm_source ? y.utm_source : "undefined" != typeof y.gclid ? "google" : "undefined" != typeof y.yclid ? "yandex" : s.none, w = "undefined" != typeof y.utm_medium ? y.utm_medium : "undefined" != typeof y.gclid ? "cpc" : "undefined" != typeof y.yclid ? "cpc" : s.none, q = "undefined" != typeof y.utm_campaign ? y.utm_campaign : "undefined" != typeof y[h.campaign_param] ? y[h.campaign_param] : "undefined" != typeof y.gclid ? "google_cpc" : "undefined" != typeof y.yclid ? "yandex_cpc" : s.none, I = y.utm_content || s.none, j = p() || s.none;
                            break;
                        case s.traffic.organic:
                            b = s.traffic.organic, k = k || a.getHost(document.referrer), w = s.referer.organic, q = s.none, I = s.none, j = s.none;
                            break;
                        case s.traffic.referral:
                            b = s.traffic.referral, k = k || a.getHost(document.referrer), w = w || s.referer.referral, q = s.none, I = a.parse(document.referrer).path, j = s.none;
                            break;
                        case s.traffic.typein:
                            b = s.traffic.typein, k = h.typein_attributes.source, w = h.typein_attributes.medium, q = s.none, I = s.none, j = s.none;
                            break;
                        default:
                            b = s.oops, k = s.oops, w = s.oops, q = s.oops, I = s.oops, j = s.oops
                    }
                    var t = {type: b, source: k, medium: w, campaign: q, content: I, term: j};
                    return n.pack.main(t)
                }

                function p() {
                    var e = document.referrer;
                    if (y.utm_term) return y.utm_term;
                    if (!(e && a.parse(e).host && a.parse(e).host.match(/^(?:.*\.)?yandex\..{2,9}$/i))) return !1;
                    try {
                        return a.getParam(a.parse(document.referrer).query).text
                    } catch (t) {
                        return !1
                    }
                }

                function f(e) {
                    var t = document.referrer;
                    switch (e) {
                        case s.traffic.organic:
                            return !!t && l(t) && m(t);
                        case s.traffic.referral:
                            return !!t && l(t) && d(t);
                        default:
                            return !1
                    }
                }

                function l(e) {
                    if (h.domain) {
                        if (_) return a.getHost(e) !== a.getHost(v);
                        var t = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(v) + "$", "i");
                        return !a.getHost(e).match(t)
                    }
                    return a.getHost(e) !== a.getHost(document.location.href)
                }

                function m(e) {
                    var t = "yandex", r = "text", n = "google",
                        s = new RegExp("^(?:.*\\.)?" + o.escapeRegexp(t) + "\\..{2,9}$"),
                        i = new RegExp(".*" + o.escapeRegexp(r) + "=.*"),
                        c = new RegExp("^(?:www\\.)?" + o.escapeRegexp(n) + "\\..{2,9}$");
                    if (a.parse(e).query && a.parse(e).host.match(s) && a.parse(e).query.match(i)) return k = t, !0;
                    if (a.parse(e).host.match(c)) return k = n, !0;
                    if (!a.parse(e).query) return !1;
                    for (var u = 0; u < h.organics.length; u++) {
                        if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.organics[u].host) + "$", "i")) && a.parse(e).query.match(new RegExp(".*" + o.escapeRegexp(h.organics[u].param) + "=.*", "i"))) return k = h.organics[u].display || h.organics[u].host, !0;
                        if (u + 1 === h.organics.length) return !1
                    }
                }

                function d(e) {
                    if (!(h.referrals.length > 0)) return k = a.getHost(e), !0;
                    for (var t = 0; t < h.referrals.length; t++) {
                        if (a.parse(e).host.match(new RegExp("^(?:.*\\.)?" + o.escapeRegexp(h.referrals[t].host) + "$", "i"))) return k = h.referrals[t].display || h.referrals[t].host, w = h.referrals[t].medium || s.referer.referral, !0;
                        if (t + 1 === h.referrals.length) return k = a.getHost(e), !0
                    }
                }

                function g() {
                    i.set(n.containers.current_extra, n.pack.extra(h.timezone_offset), x, v, _), i.get(n.containers.first_extra) || i.set(n.containers.first_extra, n.pack.extra(h.timezone_offset), x, v, _)
                }

                var h = c.fetch(e), y = a.getParam(), v = h.domain.host, _ = h.domain.isolate, x = h.lifetime;
                u.go(x, v, _);
                var b, k, w, q, I, j;
                return function () {
                    i.set(n.containers.current, t(), x, v, _), i.get(n.containers.first) || i.set(n.containers.first, i.get(n.containers.current), x, v, _);
                    var e, r;
                    i.get(n.containers.udata) ? (e = parseInt(i.parse(n.containers.udata)[i.unsbjs(n.containers.udata)][n.aliases.udata.visits]) || 1, e = i.get(n.containers.session) ? e : e + 1, r = n.pack.user(e, h.user_ip)) : (e = 1, r = n.pack.user(e, h.user_ip)), i.set(n.containers.udata, r, x, v, _);
                    var s;
                    i.get(n.containers.session) ? (s = parseInt(i.parse(n.containers.session)[i.unsbjs(n.containers.session)][n.aliases.session.pages_seen]) || 1, s += 1) : s = 1, i.set(n.containers.session, n.pack.session(s), h.session_length, v, _), h.promocode && !i.get(n.containers.promocode) && i.set(n.containers.promocode, n.pack.promo(h.promocode), x, v, _)
                }(), i.parse(n.containers)
            }
        }, {
            "./data": 2,
            "./helpers/cookies": 3,
            "./helpers/uri": 4,
            "./helpers/utils": 5,
            "./migrations": 7,
            "./params": 8,
            "./terms": 9
        }], 7: [function (e, t, r) {
            "use strict";
            var n = e("./data"), s = e("./helpers/cookies");
            t.exports = {
                go: function (e, t, r) {
                    var i, a = this.migrations, o = {l: e, d: t, i: r};
                    if (s.get(n.containers.first) || s.get(n.service.migrations)) {
                        if (!s.get(n.service.migrations)) for (i = 0; i < a.length; i++) a[i].go(a[i].id, o)
                    } else {
                        var c = [];
                        for (i = 0; i < a.length; i++) c.push(a[i].id);
                        var u = "";
                        for (i = 0; i < c.length; i++) u += c[i] + "=1", i < c.length - 1 && (u += n.delimiter);
                        s.set(n.service.migrations, u, o.l, o.d, o.i)
                    }
                }, migrations: [{
                    id: "1418474375998", version: "1.0.0-beta", go: function (e, t) {
                        var r = e + "=1", i = e + "=0", a = function (e, t, r) {
                            return t || r ? e : n.delimiter
                        };
                        try {
                            var o = [];
                            for (var c in n.containers) n.containers.hasOwnProperty(c) && o.push(n.containers[c]);
                            for (var u = 0; u < o.length; u++) if (s.get(o[u])) {
                                var p = s.get(o[u]).replace(/(\|)?\|(\|)?/g, a);
                                s.destroy(o[u], t.d, t.i), s.destroy(o[u], t.d, !t.i), s.set(o[u], p, t.l, t.d, t.i)
                            }
                            s.get(n.containers.session) && s.set(n.containers.session, n.pack.session(0), t.l, t.d, t.i), s.set(n.service.migrations, r, t.l, t.d, t.i)
                        } catch (f) {
                            s.set(n.service.migrations, i, t.l, t.d, t.i)
                        }
                    }
                }]
            }
        }, {"./data": 2, "./helpers/cookies": 3}], 8: [function (e, t, r) {
            "use strict";
            var n = e("./terms"), s = e("./helpers/uri");
            t.exports = {
                fetch: function (e) {
                    var t = e || {}, r = {};
                    if (r.lifetime = this.validate.checkFloat(t.lifetime) || 6, r.lifetime = parseInt(30 * r.lifetime * 24 * 60), r.session_length = this.validate.checkInt(t.session_length) || 30, r.timezone_offset = this.validate.checkInt(t.timezone_offset), r.campaign_param = t.campaign_param || !1, r.user_ip = t.user_ip || n.none, t.promocode ? (r.promocode = {}, r.promocode.min = parseInt(t.promocode.min) || 1e5, r.promocode.max = parseInt(t.promocode.max) || 999999) : r.promocode = !1, t.typein_attributes && t.typein_attributes.source && t.typein_attributes.medium ? (r.typein_attributes = {}, r.typein_attributes.source = t.typein_attributes.source, r.typein_attributes.medium = t.typein_attributes.medium) : r.typein_attributes = {
                            source: "(direct)",
                            medium: "(none)"
                        }, t.domain && this.validate.isString(t.domain) ? r.domain = {
                            host: t.domain,
                            isolate: !1
                        } : t.domain && t.domain.host ? r.domain = t.domain : r.domain = {
                            host: s.getHost(document.location.hostname),
                            isolate: !1
                        }, r.referrals = [], t.referrals && t.referrals.length > 0) for (var i = 0; i < t.referrals.length; i++) t.referrals[i].host && r.referrals.push(t.referrals[i]);
                    if (r.organics = [], t.organics && t.organics.length > 0) for (var a = 0; a < t.organics.length; a++) t.organics[a].host && t.organics[a].param && r.organics.push(t.organics[a]);
                    return r.organics.push({host: "bing.com", param: "q", display: "bing"}), r.organics.push({
                        host: "yahoo.com",
                        param: "p",
                        display: "yahoo"
                    }), r.organics.push({host: "about.com", param: "q", display: "about"}), r.organics.push({
                        host: "aol.com",
                        param: "q",
                        display: "aol"
                    }), r.organics.push({host: "ask.com", param: "q", display: "ask"}), r.organics.push({
                        host: "globososo.com",
                        param: "q",
                        display: "globo"
                    }), r.organics.push({
                        host: "go.mail.ru",
                        param: "q",
                        display: "go.mail.ru"
                    }), r.organics.push({
                        host: "rambler.ru",
                        param: "query",
                        display: "rambler"
                    }), r.organics.push({host: "tut.by", param: "query", display: "tut.by"}), r.referrals.push({
                        host: "t.co",
                        display: "twitter.com"
                    }), r.referrals.push({host: "plus.url.google.com", display: "plus.google.com"}), r
                }, validate: {
                    checkFloat: function (e) {
                        return e && this.isNumeric(parseFloat(e)) ? parseFloat(e) : !1
                    }, checkInt: function (e) {
                        return e && this.isNumeric(parseInt(e)) ? parseInt(e) : !1
                    }, isNumeric: function (e) {
                        return !isNaN(e)
                    }, isString: function (e) {
                        return "[object String]" === Object.prototype.toString.call(e)
                    }
                }
            }
        }, {"./helpers/uri": 4, "./terms": 9}], 9: [function (e, t, r) {
            "use strict";
            t.exports = {
                traffic: {utm: "utm", organic: "organic", referral: "referral", typein: "typein"},
                referer: {referral: "referral", organic: "organic", social: "social"},
                none: "(none)",
                oops: "(Houston, we have a problem)"
            }
        }, {}]
    }, {}, [1])(1)
});


sbjs.init({
    lifetime: 3,
    domain: {
        host: 'astor-auto.ru',
        isolate: true
    },
    referrals: [
        {
            host: 'plus.url.google.com',
            display: 'plus.google.com :)'
        }
    ],
    custom_campaign: 'my_adwords_campaign',
    promocode: true,
    callback: placeData
});


function generate(str) {
    return str.replace(/[xy]/g, function(c) {
        var r = Math.random() * 16 | 0;
        return (c == 'x' ? r : (r & 0x3 | 0x8 )).toString(16);
    });
}
function placeData(sb) {

    var _ym_uid = get_cookie ( "_ym_uid" );
    var _gid = get_cookie ( "_gid" );
    var olev_phone_track = get_cookie ( "olev_phone_track" );
if(olev_phone_track==null){
    setCookie("olev_phone_track", CBU_GLOBAL.config.widget.phone, {
        expires: 900
    })
    var olev_phone_track=CBU_GLOBAL.config.widget.phone;
} else {
    setCookie("olev_phone_track", olev_phone_track, {
        expires: 900
    })


}




    var xhr = new XMLHttpRequest();
    var body = 'first=' + encodeURIComponent(JSON.stringify(sb.first)) +
        '&current=' + encodeURIComponent(JSON.stringify(sb.current))+
        '&first_add=' + encodeURIComponent(JSON.stringify(sb.first_add))+
        '&current_add=' + encodeURIComponent(JSON.stringify(sb.current_add))+
        '&session=' + encodeURIComponent(JSON.stringify(sb.session))+
        '&udata=' + encodeURIComponent(JSON.stringify(sb.udata))+
        '&_ym_uid=' + encodeURIComponent(JSON.stringify(_ym_uid))+
        '&_gid=' + encodeURIComponent(JSON.stringify(_gid))+
        '&olev_phone_track=' + encodeURIComponent(olev_phone_track)+
        '&promo=' + encodeURIComponent(JSON.stringify( sb.promo.code));





    xhr.open("POST", 'https://cloud.neiros.ru/api/metrika/'+CBU_GLOBAL.config.widget.key+'?jsoncallback=', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

//    xhr.onreadystatechange = ...;

    xhr.send(body);
    
    a = document.getElementsByClassName('ya-phone');
    for (var i = 0; i < a.length; i++) {
        a[i].innerHTML=olev_phone_track;
    }

}
function get_cookie ( cookie_name )
{
    var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

    if ( results )
        return ( unescape ( results[2] ) );
    else
        return null;
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

    document.cookie = updatedCookie;
}
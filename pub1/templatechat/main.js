! function(e) {
    var t = {};

    function n(r) {
        if (t[r]) return t[r].exports;
        var o = t[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
    }
    n.m = e, n.c = t, n.d = function(e, t, r) {
        n.o(e, t) || Object.defineProperty(e, t, {
            configurable: !1,
            enumerable: !0,
            get: r
        })
    }, n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "/", n(n.s = 0)
}([function(e, t, n) {
    n(1), e.exports = n(2)
}, function(e, t, n) {
    "use strict";
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var r = function() {
        function e(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }
        return function(t, n, r) {
            return n && e(t.prototype, n), r && e(t, r), t
        }
    }();
    var o = function() {
            function e() {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.windowWidth = 0, this.windowHeight = 0;
                var t = this;

                function n() {
                    t.windowWidth = window.innerWidth, t.windowHeight = window.innerHeight
                }! function() {
                    n();
                    var e = void 0;
                    window.addEventListener("resize", function() {
                        clearTimeout(e), e = setTimeout(n, 300)
                    })
                }()
            }
            return r(e, [{
                key: "isMob",
                get: function() {
                    return this.windowWidth < 479
                }
            }]), e
        }(),
        i = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        };

    function a(e) {
        return "object" === ("undefined" == typeof HTMLElement ? "undefined" : i(HTMLElement)) ? e instanceof HTMLElement : e && "object" === (void 0 === e ? "undefined" : i(e)) && null !== e && 1 === e.nodeType && "string" == typeof e.nodeName
    }

    function s(e, t, n) {
        var r = document.createElement(e);
        if ("object" === (void 0 === t ? "undefined" : i(t))) {
            if (t.hasOwnProperty("attrs"))
                for (var o in t.attrs) r.setAttribute(o, t.attrs[o]);
            if (t.hasOwnProperty("style"))
                for (var a in t.style) r.style[a] = t.style[a];
            if (t.hasOwnProperty("dataset"))
                for (var s in t.dataset) r.dataset[s] = t.dataset[s];
            if (t.hasOwnProperty("events"))
                for (var _ in t.events) r.addEventListener(_, t.events[_])
        }
        return n && (Array.isArray(n) ? n.map(function(e) {
            ! function(e) {
                "string" == typeof e ? r.innerHTML = e : r.appendChild(e)
            }(e)
        }) : console.warn("Childrens must be an array!")), r
    }
    var _ = function e(t, n) {
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, e);
            var r = n.showTrigger,
                o = n.hideTrigger,
                i = n.toggleTrigger,
                s = n.activeClass,
                _ = n.hideCallback,
                S = n.showCallback,
                c = n.toggleCallback,
                l = this,
                u = {
                    triggers: {
                        show: r,
                        hide: o,
                        toggle: i
                    },
                    callbacks: {
                        show: S,
                        hide: _,
                        toggle: c
                    }
                };

            function T() {
                Object.keys(u.triggers).forEach(function(e) {
                    if (u.triggers[e]) {
                        var t = a(u.triggers[e]) ? u.triggers[e] : [].concat(function(e) {
                            if (Array.isArray(e)) {
                                for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                                return n
                            }
                            return Array.from(e)
                        }(document.querySelectorAll("." + u.triggers[e])));
                        Object.defineProperty(l, e + "Trigger", {
                            value: t
                        })
                    }
                })
            }
            this.hide = function(e) {
                    if (!l.target) throw new Error("No target found!");
                    l.target.classList.remove(s), "function" == typeof _ && _(e)
                }, this.show = function(e) {
                    if (!l.target) throw new Error("No target found!");
                    l.target.classList.add(s), "function" == typeof S && S(e)
                }, this.toggle = function(e) {
                    if (!l.target) throw new Error("No target found!");
                    l.target.classList.toggle(s), "function" == typeof c && c(e)
                },
                function() {
                    if (!t) throw new Error("No " + t + " found!");
                    t = a(t) ? t : document.querySelector("." + t), Object.defineProperty(l, "target", {
                        value: t
                    }), T(), Object.keys(u.triggers).forEach(function(e) {
                        if (u.triggers[e]) {
                            var t = l[e + "Trigger"];
                            Array.isArray(t) ? t.forEach(function(t) {
                                return t.addEventListener("click", l[e])
                            }) : t.addEventListener("click", l[e])
                        }
                    })
                }()
        },
        S = {
            LAYOUT: "js-layout",
            LAYOUT_INFO_OPENED: "layout--info-opened",
            LAYOUT_USERS_OPENED: "layout--users-opened",
            LAYOUT_SETTINGS_OPENED: "layout--settings-opened",
            PUSH_CLASS: "js-push-message",
            PUSH_ACTIVE_CLASS: "push-message--active",
            PUSH_BUTTON_CLOSE_CLASS: "js-push-message__close",
            CHAT_SEARCH_TOGGLE_BUTTON_CLASS: "js-chat-search__button-toggle",
            CHAT_SEARCH_OPEN_BUTTON_ACTIVE_CLASS: "chat__header__search-button--active",
			CHAT_SEARCH_OPEN_BUTTON_CLASS: 'js-chat-search__button-open',
            CHAT_SEARCH_CLOSE_BUTTON_CLASS: "js-chat-search__button-close",
            CHAT_SEARCH_CLASS: "js-chat-search",
            CHAT_SEARCH_ACTIVE_CLASS: "chat-search--active",
            SETTINGS_BUTTON_CLASS: "js-button--setting",
            SETTINGS_BUTTON_CLOSE_CLASS: "js-button--close-setting",
            SETTINGS_BLOCK_CLASS: "js-settings",
            DROPDOWN_CLASS: "js-dropdown",
            DROPDOWN_LIST_CLASS: "dropdown__list",
            DROPDOWN_BUTTON_CLASS: "js-dropdown__button",
            DROPDOWN_OPEN_CLASS: "js-dropdown--open",
            DROPDOWN_ITEM_CLASS: "dropdown__item",
            DROPDOWN_INPUT_CLASS: "js-dropdown__input",
            BUTTON_INFO_OPEN_CLASS: "js-button-info-open",
            BUTTON_INFO_OPEN_ACTIVE_CLASS: "chat__header__resize-button--active",
            BUTTON_INFO_CLOSE_CLASS: "js-button-info-close",
            BUTTON_USERS_TOGGLE_CLASS: "js-mobile-users-toggle",
            BUTTON_USERS_SHOW_CLASS: "js-button-users-open",
            BUTTON_USERS_CLOSE_CLASS: "js-button-users-close",
            USER_ITEM_CLASS: "js-user-item",
            USER_ITEM_ACTIVE_CLASS: "user-item--active",
            ADDITIONAL_FORM_CLASS: "js-additional-info",
            ADDITIONAL_FORM_BUTTON_CLASS: "js-additional-form",
            ADDITIONAL_FORM_ACTIVE_CLASS: "additional-info--visible",
            ADDITIONAL_FORM_BUTTON_CLOSE_CLASS: "js-additional-form-button",
            MOBILE_NAV_CLASS: "js-mobile-nav",
            MOBILE_NAV_BUTTON_CLASS: "mobile-nav__button",
            MOBILE_NAV_BUTTON_ACTIVE_CLASS: "mobile-nav__button--active",
            BUTTON_QUICK_ANSWERS_CLASS: "js-quick-answers-button",
            QUICK_ANSWERS_CLASS: "js-quick-answers",
            QUICK_ANSWERS_ACTIVE_CLASS: "quick-answers--active"
        };
    var c = function(e) {
        function t(e) {
            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                r = n.itemClass,
                o = void 0 === r ? S.DROPDOWN_ITEM_CLASS : r,
                i = n.input,
                _ = void 0 === i ? S.DROPDOWN_INPUT_CLASS : i,
                c = n.listClass,
                l = void 0 === c ? S.DROPDOWN_LIST_CLASS : c,
                u = n.items,
                T = void 0 === u ? [] : u;
            ! function(e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }(this, t);
            var A = function(e, t) {
                    if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return !t || "object" != typeof t && "function" != typeof t ? e : t
                }(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e, [].concat(Array.prototype.slice.call(arguments))[1])),
                C = A,
                O = {
                    methods: {}
                };
            return O.methods.createList = function() {
                    var e = s("UL", {
                        attrs: {
                            class: l
                        }
                    }, T.map(function(e) {
                        return s("LI", {}, [s("BUTTON", {
                            attrs: {
                                class: o,
                                type: "button"
                            },
                            events: {
                                click: function(e) {
                                    return t = e.target, n = t.dataset.value, O.inputNode.value = n, r = JSON.parse(n), o = r.label, C.toggleTrigger[0].innerHTML = o, void C.hide();
                                    var t, n, r, o
                                }
                            },
                            dataset: {
                                value: JSON.stringify(e)
                            }
                        }, [e.label])])
                    }));
                    C.target.appendChild(e)
                }, O.methods.addEvents = function() {
                    C.target.addEventListener("click", function(e) {
                        return e.stopPropagation()
                    }), window.addEventListener("click", C.hide)
                },
                function() {
                    if (!_) throw new Error("No " + item + " found!");
                    var e = a(_) ? _ : C.target.querySelector("." + _);
                    Object.defineProperty(O, "inputNode", {
                        value: e
                    }), Object.keys(O.methods).forEach(function(e) {
                        O.methods[e]()
                    })
                }(), A
        }
        return function(e, t) {
            if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
            e.prototype = Object.create(t && t.prototype, {
                constructor: {
                    value: e,
                    enumerable: !1,
                    writable: !0,
                    configurable: !0
                }
            }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
        }(t, _), t
    }();

    function l() {
        var e, t = {
                OVERLAY_CLASS: "overlay",
                OVERLAY_ACTIVE_CLASS: "overlay--active",
                PARENT: (arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}).parent || document.body
            },
            n = void 0,
            r = !1;
        return (e = document.createElement("div")).className = t.OVERLAY_CLASS, e.style.display = "none", t.PARENT.appendChild(e), (n = e).addEventListener("transitionend", function(e) {
            e.target !== this || r || (this.style.display = "none")
        }), Object.freeze({
            el: n,
            show: function() {
                !n && r || (n.style.display = "block", setTimeout(function() {
                    n.classList.add(t.OVERLAY_ACTIVE_CLASS), r = !0
                }, 0))
            },
            hide: function() {
                (n || r) && (n.classList.remove(t.OVERLAY_ACTIVE_CLASS), r = !1)
            }
        })
    }

    function u(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }
    var T = new o,
        A = document.querySelector(".js-chat__body");
    A && (A.scrollTop = A.scrollHeight), [].concat(u(document.querySelectorAll("." + S.DROPDOWN_CLASS))).forEach(function(e) {
        new c(e, {
            toggleTrigger: S.DROPDOWN_BUTTON_CLASS,
            activeClass: S.DROPDOWN_OPEN_CLASS,
            items: [{
                label: "E-mail",
                value: "E-mail"
            }, {
                label: "Телефон",
                value: "Телефон"
            }, {
                label: "Собака",
                value: "Собака"
            }, {
                label: "Размер обуви",
                value: "Размер обуви"
            }]
        })
    });
    new _(S.PUSH_CLASS, {
        hideTrigger: S.PUSH_BUTTON_CLOSE_CLASS,
        activeClass: S.PUSH_ACTIVE_CLASS
    });
    var C = l();
    new _(S.LAYOUT, {
        showTrigger: S.SETTINGS_BUTTON_CLASS,
        toggleTrigger: S.SETTINGS_BUTTON_CLOSE_CLASS,
        hideTrigger: C.el,
        activeClass: S.LAYOUT_SETTINGS_OPENED,
        hideCallback: C.hide,
        toggleCallback: C.hide,
        showCallback: C.show
    }), new _(S.CHAT_SEARCH_CLASS, {
        hideTrigger: S.CHAT_SEARCH_CLOSE_BUTTON_CLASS,
        toggleTrigger: S.CHAT_SEARCH_TOGGLE_BUTTON_CLASS,
        activeClass: S.CHAT_SEARCH_ACTIVE_CLASS,
        toggleCallback: function(e) {
            f(e, S.CHAT_SEARCH_TOGGLE_BUTTON_CLASS, S.CHAT_SEARCH_OPEN_BUTTON_ACTIVE_CLASS, "toggle")
        },
        hideCallback: function() {
            document.querySelector("." + S.CHAT_SEARCH_TOGGLE_BUTTON_CLASS).classList.remove(S.CHAT_SEARCH_OPEN_BUTTON_ACTIVE_CLASS)
        }
    }), new _(S.LAYOUT, {
        toggleTrigger: S.BUTTON_INFO_OPEN_CLASS,
        hideTrigger: S.BUTTON_INFO_CLOSE_CLASS,
        activeClass: S.LAYOUT_INFO_OPENED,
        toggleCallback: function() {
            var e = document.querySelector(".chat__header ." + S.BUTTON_INFO_OPEN_CLASS);
            e && e.classList.toggle(S.BUTTON_INFO_OPEN_ACTIVE_CLASS)
        },
        hideCallback: function() {
            var e = document.querySelector(".chat__header ." + S.BUTTON_INFO_OPEN_CLASS);
            e && e.classList.remove(S.BUTTON_INFO_OPEN_ACTIVE_CLASS)
        }
    });
    var O = l({
        parent: document.querySelector(".info")
    });

    function f(e, t, n) {
        var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : "toggle";
        if (e) {
            var o = e.path,
                i = null;
            (i = o ? o.find(function(e) {
                return e.classList && e.classList.contains(t)
            }) : e.target) && i.classList[r](n)
        }
    }
    new _(S.ADDITIONAL_FORM_CLASS, {
        toggleTrigger: S.ADDITIONAL_FORM_BUTTON_CLASS,
        hideTrigger: O.el,
        hideCallback: O.hide,
        activeClass: S.ADDITIONAL_FORM_ACTIVE_CLASS,
        toggleCallback: function() {
            T.isMob && O.show()
        }
    }), new _(S.QUICK_ANSWERS_CLASS, {
        toggleTrigger: S.BUTTON_QUICK_ANSWERS_CLASS,
        activeClass: S.QUICK_ANSWERS_ACTIVE_CLASS
    }), new _(S.LAYOUT, {
        toggleTrigger: S.BUTTON_USERS_SHOW_CLASS,
        hideTrigger: S.BUTTON_USERS_CLOSE_CLASS,
        toggleCallback: function() {
            document.querySelector("." + S.MOBILE_NAV_CLASS + " ." + S.MOBILE_NAV_BUTTON_CLASS).classList.toggle(S.MOBILE_NAV_BUTTON_ACTIVE_CLASS)
        },
        hideCallback: function(e) {
            if (e) {
                var t = e.path;
                f(e, S.MOBILE_NAV_BUTTON_CLASS, S.MOBILE_NAV_BUTTON_ACTIVE_CLASS);
                var n = null;
                (n = t ? t.find(function(e) {
                    return e.classList && e.classList.contains(S.USER_ITEM_CLASS)
                }) : e.target) && ([].concat(u(document.querySelectorAll("." + S.USER_ITEM_CLASS))).forEach(function(e) {
                    e.classList.remove(S.USER_ITEM_ACTIVE_CLASS)
                }), n.classList.add(S.USER_ITEM_ACTIVE_CLASS))
            }
        },
        activeClass: S.LAYOUT_USERS_OPENED
    })
}, function(e, t) {}]);
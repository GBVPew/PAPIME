! function(e, t) { "object" == typeof exports && "object" == typeof module ? module.exports = t() : "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? exports.dat = t() : e.dat = t() }(this, function() {
    return function(e) {
        function t(o) { if (n[o]) return n[o].exports; var i = n[o] = { exports: {}, id: o, loaded: !1 }; return e[o].call(i.exports, i, i.exports, t), i.loaded = !0, i.exports }
        var n = {};
        return t.m = e, t.c = n, t.p = "", t(0)
    }([function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }
            var i = n(1),
                r = o(i);
            e.exports = r["default"]
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } } t.__esModule = !0;
            var i = n(2),
                r = o(i),
                a = n(6),
                l = o(a),
                s = n(3),
                u = o(s),
                d = n(7),
                c = o(d),
                f = n(8),
                _ = o(f),
                p = n(10),
                h = o(p),
                m = n(11),
                b = o(m),
                g = n(12),
                v = o(g),
                y = n(13),
                w = o(y),
                x = n(14),
                E = o(x),
                C = n(15),
                A = o(C),
                S = n(16),
                k = o(S),
                O = n(9),
                T = o(O),
                R = n(17),
                L = o(R);
            t["default"] = { color: { Color: r["default"], math: l["default"], interpret: u["default"] }, controllers: { Controller: c["default"], BooleanController: _["default"], OptionController: h["default"], StringController: b["default"], NumberController: v["default"], NumberControllerBox: w["default"], NumberControllerSlider: E["default"], FunctionController: A["default"], ColorController: k["default"] }, dom: { dom: T["default"] }, gui: { GUI: L["default"] }, GUI: L["default"] }
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t, n) { Object.defineProperty(e, t, { get: function() { return "RGB" === this.__state.space ? this.__state[t] : (h.recalculateRGB(this, t, n), this.__state[t]) }, set: function(e) { "RGB" !== this.__state.space && (h.recalculateRGB(this, t, n), this.__state.space = "RGB"), this.__state[t] = e } }) }

            function a(e, t) { Object.defineProperty(e, t, { get: function() { return "HSV" === this.__state.space ? this.__state[t] : (h.recalculateHSV(this), this.__state[t]) }, set: function(e) { "HSV" !== this.__state.space && (h.recalculateHSV(this), this.__state.space = "HSV"), this.__state[t] = e } }) } t.__esModule = !0;
            var l = n(3),
                s = o(l),
                u = n(6),
                d = o(u),
                c = n(4),
                f = o(c),
                _ = n(5),
                p = o(_),
                h = function() {
                    function e() {
                        if (i(this, e), this.__state = s["default"].apply(this, arguments), this.__state === !1) throw new Error("Failed to interpret color arguments");
                        this.__state.a = this.__state.a || 1
                    }
                    return e.prototype.toString = function() { return (0, f["default"])(this) }, e.prototype.toHexString = function() { return (0, f["default"])(this, !0) }, e.prototype.toOriginal = function() { return this.__state.conversion.write(this) }, e
                }();
            h.recalculateRGB = function(e, t, n) {
                if ("HEX" === e.__state.space) e.__state[t] = d["default"].component_from_hex(e.__state.hex, n);
                else {
                    if ("HSV" !== e.__state.space) throw new Error("Corrupted color state");
                    p["default"].extend(e.__state, d["default"].hsv_to_rgb(e.__state.h, e.__state.s, e.__state.v))
                }
            }, h.recalculateHSV = function(e) {
                var t = d["default"].rgb_to_hsv(e.r, e.g, e.b);
                p["default"].extend(e.__state, { s: t.s, v: t.v }), p["default"].isNaN(t.h) ? p["default"].isUndefined(e.__state.h) && (e.__state.h = 0) : e.__state.h = t.h
            }, h.COMPONENTS = ["r", "g", "b", "h", "s", "v", "hex", "a"], r(h.prototype, "r", 2), r(h.prototype, "g", 1), r(h.prototype, "b", 0), a(h.prototype, "h"), a(h.prototype, "s"), a(h.prototype, "v"), Object.defineProperty(h.prototype, "a", { get: function() { return this.__state.a }, set: function(e) { this.__state.a = e } }), Object.defineProperty(h.prototype, "hex", { get: function() { return "HEX" !== !this.__state.space && (this.__state.hex = d["default"].rgb_to_hex(this.r, this.g, this.b)), this.__state.hex }, set: function(e) { this.__state.space = "HEX", this.__state.hex = e } }), t["default"] = h
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } } t.__esModule = !0;
            var i = n(4),
                r = o(i),
                a = n(5),
                l = o(a),
                s = [{ litmus: l["default"].isString, conversions: { THREE_CHAR_HEX: { read: function(e) { var t = e.match(/^#([A-F0-9])([A-F0-9])([A-F0-9])$/i); return null !== t && { space: "HEX", hex: parseInt("0x" + t[1].toString() + t[1].toString() + t[2].toString() + t[2].toString() + t[3].toString() + t[3].toString(), 0) } }, write: r["default"] }, SIX_CHAR_HEX: { read: function(e) { var t = e.match(/^#([A-F0-9]{6})$/i); return null !== t && { space: "HEX", hex: parseInt("0x" + t[1].toString(), 0) } }, write: r["default"] }, CSS_RGB: { read: function(e) { var t = e.match(/^rgb\(\s*(.+)\s*,\s*(.+)\s*,\s*(.+)\s*\)/); return null !== t && { space: "RGB", r: parseFloat(t[1]), g: parseFloat(t[2]), b: parseFloat(t[3]) } }, write: r["default"] }, CSS_RGBA: { read: function(e) { var t = e.match(/^rgba\(\s*(.+)\s*,\s*(.+)\s*,\s*(.+)\s*,\s*(.+)\s*\)/); return null !== t && { space: "RGB", r: parseFloat(t[1]), g: parseFloat(t[2]), b: parseFloat(t[3]), a: parseFloat(t[4]) } }, write: r["default"] } } }, { litmus: l["default"].isNumber, conversions: { HEX: { read: function(e) { return { space: "HEX", hex: e, conversionName: "HEX" } }, write: function(e) { return e.hex } } } }, { litmus: l["default"].isArray, conversions: { RGB_ARRAY: { read: function(e) { return 3 === e.length && { space: "RGB", r: e[0], g: e[1], b: e[2] } }, write: function(e) { return [e.r, e.g, e.b] } }, RGBA_ARRAY: { read: function(e) { return 4 === e.length && { space: "RGB", r: e[0], g: e[1], b: e[2], a: e[3] } }, write: function(e) { return [e.r, e.g, e.b, e.a] } } } }, { litmus: l["default"].isObject, conversions: { RGBA_OBJ: { read: function(e) { return !!(l["default"].isNumber(e.r) && l["default"].isNumber(e.g) && l["default"].isNumber(e.b) && l["default"].isNumber(e.a)) && { space: "RGB", r: e.r, g: e.g, b: e.b, a: e.a } }, write: function(e) { return { r: e.r, g: e.g, b: e.b, a: e.a } } }, RGB_OBJ: { read: function(e) { return !!(l["default"].isNumber(e.r) && l["default"].isNumber(e.g) && l["default"].isNumber(e.b)) && { space: "RGB", r: e.r, g: e.g, b: e.b } }, write: function(e) { return { r: e.r, g: e.g, b: e.b } } }, HSVA_OBJ: { read: function(e) { return !!(l["default"].isNumber(e.h) && l["default"].isNumber(e.s) && l["default"].isNumber(e.v) && l["default"].isNumber(e.a)) && { space: "HSV", h: e.h, s: e.s, v: e.v, a: e.a } }, write: function(e) { return { h: e.h, s: e.s, v: e.v, a: e.a } } }, HSV_OBJ: { read: function(e) { return !!(l["default"].isNumber(e.h) && l["default"].isNumber(e.s) && l["default"].isNumber(e.v)) && { space: "HSV", h: e.h, s: e.s, v: e.v } }, write: function(e) { return { h: e.h, s: e.s, v: e.v } } } } }],
                u = void 0,
                d = void 0,
                c = function() { d = !1; var e = arguments.length > 1 ? l["default"].toArray(arguments) : arguments[0]; return l["default"].each(s, function(t) { if (t.litmus(e)) return l["default"].each(t.conversions, function(t, n) { if (u = t.read(e), d === !1 && u !== !1) return d = u, u.conversionName = n, u.conversion = t, l["default"].BREAK }), l["default"].BREAK }), d };
            t["default"] = c
        }, function(e, t) {
            "use strict";
            t.__esModule = !0, t["default"] = function(e, t) {
                var n = e.__state.conversionName.toString(),
                    o = Math.round(e.r),
                    i = Math.round(e.g),
                    r = Math.round(e.b),
                    a = e.a,
                    l = Math.round(e.h),
                    s = e.s.toFixed(1),
                    u = e.v.toFixed(1);
                if (t || "THREE_CHAR_HEX" === n || "SIX_CHAR_HEX" === n) { for (var d = e.hex.toString(16); d.length < 6;) d = "0" + d; return "#" + d }
                return "CSS_RGB" === n ? "rgb(" + o + "," + i + "," + r + ")" : "CSS_RGBA" === n ? "rgba(" + o + "," + i + "," + r + "," + a + ")" : "HEX" === n ? "0x" + e.hex.toString(16) : "RGB_ARRAY" === n ? "[" + o + "," + i + "," + r + "]" : "RGBA_ARRAY" === n ? "[" + o + "," + i + "," + r + "," + a + "]" : "RGB_OBJ" === n ? "{r:" + o + ",g:" + i + ",b:" + r + "}" : "RGBA_OBJ" === n ? "{r:" + o + ",g:" + i + ",b:" + r + ",a:" + a + "}" : "HSV_OBJ" === n ? "{h:" + l + ",s:" + s + ",v:" + u + "}" : "HSVA_OBJ" === n ? "{h:" + l + ",s:" + s + ",v:" + u + ",a:" + a + "}" : "unknown format"
            }
        }, function(e, t) {
            "use strict";
            t.__esModule = !0;
            var n = Array.prototype.forEach,
                o = Array.prototype.slice,
                i = {
                    BREAK: {},
                    extend: function(e) {
                        return this.each(o.call(arguments, 1), function(t) {
                            var n = this.isObject(t) ? Object.keys(t) : [];
                            n.forEach(function(n) { this.isUndefined(t[n]) || (e[n] = t[n]) }.bind(this))
                        }, this), e
                    },
                    defaults: function(e) {
                        return this.each(o.call(arguments, 1), function(t) {
                            var n = this.isObject(t) ? Object.keys(t) : [];
                            n.forEach(function(n) { this.isUndefined(e[n]) && (e[n] = t[n]) }.bind(this))
                        }, this), e
                    },
                    compose: function() { var e = o.call(arguments); return function() { for (var t = o.call(arguments), n = e.length - 1; n >= 0; n--) t = [e[n].apply(this, t)]; return t[0] } },
                    each: function(e, t, o) {
                        if (e)
                            if (n && e.forEach && e.forEach === n) e.forEach(t, o);
                            else if (e.length === e.length + 0) {
                            var i = void 0,
                                r = void 0;
                            for (i = 0, r = e.length; i < r; i++)
                                if (i in e && t.call(o, e[i], i) === this.BREAK) return
                        } else
                            for (var a in e)
                                if (t.call(o, e[a], a) === this.BREAK) return
                    },
                    defer: function(e) { setTimeout(e, 0) },
                    debounce: function(e, t) {
                        var n = void 0;
                        return function() {
                            function o() { n = null }
                            var i = this,
                                r = arguments,
                                a = !n;
                            clearTimeout(n), n = setTimeout(o, t), a && e.apply(i, r)
                        }
                    },
                    toArray: function(e) { return e.toArray ? e.toArray() : o.call(e) },
                    isUndefined: function(e) { return void 0 === e },
                    isNull: function(e) { return null === e },
                    isNaN: function(e) {
                        function t(t) { return e.apply(this, arguments) }
                        return t.toString = function() { return e.toString() }, t
                    }(function(e) { return isNaN(e) }),
                    isArray: Array.isArray || function(e) { return e.constructor === Array },
                    isObject: function(e) { return e === Object(e) },
                    isNumber: function(e) { return e === e + 0 },
                    isString: function(e) { return e === e + "" },
                    isBoolean: function(e) { return e === !1 || e === !0 },
                    isFunction: function(e) { return "[object Function]" === Object.prototype.toString.call(e) }
                };
            t["default"] = i
        }, function(e, t) {
            "use strict";
            t.__esModule = !0;
            var n = void 0,
                o = {
                    hsv_to_rgb: function(e, t, n) {
                        var o = Math.floor(e / 60) % 6,
                            i = e / 60 - Math.floor(e / 60),
                            r = n * (1 - t),
                            a = n * (1 - i * t),
                            l = n * (1 - (1 - i) * t),
                            s = [
                                [n, l, r],
                                [a, n, r],
                                [r, n, l],
                                [r, a, n],
                                [l, r, n],
                                [n, r, a]
                            ][o];
                        return { r: 255 * s[0], g: 255 * s[1], b: 255 * s[2] }
                    },
                    rgb_to_hsv: function(e, t, n) {
                        var o = Math.min(e, t, n),
                            i = Math.max(e, t, n),
                            r = i - o,
                            a = void 0,
                            l = void 0;
                        return 0 === i ? { h: NaN, s: 0, v: 0 } : (l = r / i, a = e === i ? (t - n) / r : t === i ? 2 + (n - e) / r : 4 + (e - t) / r, a /= 6, a < 0 && (a += 1), { h: 360 * a, s: l, v: i / 255 })
                    },
                    rgb_to_hex: function(e, t, n) { var o = this.hex_with_component(0, 2, e); return o = this.hex_with_component(o, 1, t), o = this.hex_with_component(o, 0, n) },
                    component_from_hex: function(e, t) { return e >> 8 * t & 255 },
                    hex_with_component: function(e, t, o) { return o << (n = 8 * t) | e & ~(255 << n) }
                };
            t["default"] = o
        }, function(e, t) {
            "use strict";

            function n(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") } t.__esModule = !0;
            var o = function() {
                function e(t, o) { n(this, e), this.initialValue = t[o], this.domElement = document.createElement("div"), this.object = t, this.property = o, this.__onChange = void 0, this.__onFinishChange = void 0 }
                return e.prototype.onChange = function(e) { return this.__onChange = e, this }, e.prototype.onFinishChange = function(e) { return this.__onFinishChange = e, this }, e.prototype.setValue = function(e) { return this.object[this.property] = e, this.__onChange && this.__onChange.call(this, e), this.updateDisplay(), this }, e.prototype.getValue = function() { return this.object[this.property] }, e.prototype.updateDisplay = function() { return this }, e.prototype.isModified = function() { return this.initialValue !== this.getValue() }, e
            }();
            t["default"] = o
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }
            t.__esModule = !0;
            var l = n(7),
                s = o(l),
                u = n(9),
                d = o(u),
                c = function(e) {
                    function t(n, o) {
                        function a() { s.setValue(!s.__prev) } i(this, t);
                        var l = r(this, e.call(this, n, o)),
                            s = l;
                        return l.__prev = l.getValue(), l.__checkbox = document.createElement("input"), l.__checkbox.setAttribute("type", "checkbox"), d["default"].bind(l.__checkbox, "change", a, !1), l.domElement.appendChild(l.__checkbox), l.updateDisplay(), l
                    }
                    return a(t, e), t.prototype.setValue = function(t) { var n = e.prototype.setValue.call(this, t); return this.__onFinishChange && this.__onFinishChange.call(this, this.getValue()), this.__prev = this.getValue(), n }, t.prototype.updateDisplay = function() { return this.getValue() === !0 ? (this.__checkbox.setAttribute("checked", "checked"), this.__checkbox.checked = !0) : this.__checkbox.checked = !1, e.prototype.updateDisplay.call(this) }, t
                }(s["default"]);
            t["default"] = c
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e) { if ("0" === e || a["default"].isUndefined(e)) return 0; var t = e.match(u); return a["default"].isNull(t) ? 0 : parseFloat(t[1]) } t.__esModule = !0;
            var r = n(5),
                a = o(r),
                l = { HTMLEvents: ["change"], MouseEvents: ["click", "mousemove", "mousedown", "mouseup", "mouseover"], KeyboardEvents: ["keydown"] },
                s = {};
            a["default"].each(l, function(e, t) { a["default"].each(e, function(e) { s[e] = t }) });
            var u = /(\d+(\.\d+)?)px/,
                d = {
                    makeSelectable: function(e, t) { void 0 !== e && void 0 !== e.style && (e.onselectstart = t ? function() { return !1 } : function() {}, e.style.MozUserSelect = t ? "auto" : "none", e.style.KhtmlUserSelect = t ? "auto" : "none", e.unselectable = t ? "on" : "off") },
                    makeFullscreen: function(e, t, n) {
                        var o = n,
                            i = t;
                        a["default"].isUndefined(i) && (i = !0), a["default"].isUndefined(o) && (o = !0), e.style.position = "absolute", i && (e.style.left = 0, e.style.right = 0), o && (e.style.top = 0, e.style.bottom = 0)
                    },
                    fakeEvent: function(e, t, n, o) {
                        var i = n || {},
                            r = s[t];
                        if (!r) throw new Error("Event type " + t + " not supported.");
                        var l = document.createEvent(r);
                        switch (r) {
                            case "MouseEvents":
                                var u = i.x || i.clientX || 0,
                                    d = i.y || i.clientY || 0;
                                l.initMouseEvent(t, i.bubbles || !1, i.cancelable || !0, window, i.clickCount || 1, 0, 0, u, d, !1, !1, !1, !1, 0, null);
                                break;
                            case "KeyboardEvents":
                                var c = l.initKeyboardEvent || l.initKeyEvent;
                                a["default"].defaults(i, { cancelable: !0, ctrlKey: !1, altKey: !1, shiftKey: !1, metaKey: !1, keyCode: void 0, charCode: void 0 }), c(t, i.bubbles || !1, i.cancelable, window, i.ctrlKey, i.altKey, i.shiftKey, i.metaKey, i.keyCode, i.charCode);
                                break;
                            default:
                                l.initEvent(t, i.bubbles || !1, i.cancelable || !0)
                        }
                        a["default"].defaults(l, o), e.dispatchEvent(l)
                    },
                    bind: function(e, t, n, o) { var i = o || !1; return e.addEventListener ? e.addEventListener(t, n, i) : e.attachEvent && e.attachEvent("on" + t, n), d },
                    unbind: function(e, t, n, o) { var i = o || !1; return e.removeEventListener ? e.removeEventListener(t, n, i) : e.detachEvent && e.detachEvent("on" + t, n), d },
                    addClass: function(e, t) {
                        if (void 0 === e.className) e.className = t;
                        else if (e.className !== t) {
                            var n = e.className.split(/ +/);
                            n.indexOf(t) === -1 && (n.push(t), e.className = n.join(" ").replace(/^\s+/, "").replace(/\s+$/, ""))
                        }
                        return d
                    },
                    removeClass: function(e, t) {
                        if (t)
                            if (e.className === t) e.removeAttribute("class");
                            else {
                                var n = e.className.split(/ +/),
                                    o = n.indexOf(t);
                                o !== -1 && (n.splice(o, 1), e.className = n.join(" "))
                            }
                        else e.className = void 0;
                        return d
                    },
                    hasClass: function(e, t) { return new RegExp("(?:^|\\s+)" + t + "(?:\\s+|$)").test(e.className) || !1 },
                    getWidth: function(e) { var t = getComputedStyle(e); return i(t["border-left-width"]) + i(t["border-right-width"]) + i(t["padding-left"]) + i(t["padding-right"]) + i(t.width) },
                    getHeight: function(e) { var t = getComputedStyle(e); return i(t["border-top-width"]) + i(t["border-bottom-width"]) + i(t["padding-top"]) + i(t["padding-bottom"]) + i(t.height) },
                    getOffset: function(e) {
                        var t = e,
                            n = { left: 0, top: 0 };
                        if (t.offsetParent)
                            do n.left += t.offsetLeft, n.top += t.offsetTop, t = t.offsetParent; while (t);
                        return n
                    },
                    isActive: function(e) { return e === document.activeElement && (e.type || e.href) }
                };
            t["default"] = d
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }
            t.__esModule = !0;
            var l = n(7),
                s = o(l),
                u = n(9),
                d = o(u),
                c = n(5),
                f = o(c),
                _ = function(e) {
                    function t(n, o, a) {
                        i(this, t);
                        var l = r(this, e.call(this, n, o)),
                            s = a,
                            u = l;
                        return l.__select = document.createElement("select"), f["default"].isArray(s) && ! function() {
                            var e = {};
                            f["default"].each(s, function(t) { e[t] = t }), s = e
                        }(), f["default"].each(s, function(e, t) {
                            var n = document.createElement("option");
                            n.innerHTML = t, n.setAttribute("value", e), u.__select.appendChild(n)
                        }), l.updateDisplay(), d["default"].bind(l.__select, "change", function() {
                            var e = this.options[this.selectedIndex].value;
                            u.setValue(e)
                        }), l.domElement.appendChild(l.__select), l
                    }
                    return a(t, e), t.prototype.setValue = function(t) { var n = e.prototype.setValue.call(this, t); return this.__onFinishChange && this.__onFinishChange.call(this, this.getValue()), n }, t.prototype.updateDisplay = function() { return d["default"].isActive(this.__select) ? this : (this.__select.value = this.getValue(), e.prototype.updateDisplay.call(this)) }, t
                }(s["default"]);
            t["default"] = _
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }
            t.__esModule = !0;
            var l = n(7),
                s = o(l),
                u = n(9),
                d = o(u),
                c = function(e) {
                    function t(n, o) {
                        function a() { u.setValue(u.__input.value) }

                        function l() { u.__onFinishChange && u.__onFinishChange.call(u, u.getValue()) } i(this, t);
                        var s = r(this, e.call(this, n, o)),
                            u = s;
                        return s.__input = document.createElement("input"), s.__input.setAttribute("type", "text"), d["default"].bind(s.__input, "keyup", a), d["default"].bind(s.__input, "change", a), d["default"].bind(s.__input, "blur", l), d["default"].bind(s.__input, "keydown", function(e) { 13 === e.keyCode && this.blur() }), s.updateDisplay(), s.domElement.appendChild(s.__input), s
                    }
                    return a(t, e), t.prototype.updateDisplay = function() { return d["default"].isActive(this.__input) || (this.__input.value = this.getValue()), e.prototype.updateDisplay.call(this) }, t
                }(s["default"]);
            t["default"] = c
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }

            function l(e) { var t = e.toString(); return t.indexOf(".") > -1 ? t.length - t.indexOf(".") - 1 : 0 } t.__esModule = !0;
            var s = n(7),
                u = o(s),
                d = n(5),
                c = o(d),
                f = function(e) {
                    function t(n, o, a) {
                        i(this, t);
                        var s = r(this, e.call(this, n, o)),
                            u = a || {};
                        return s.__min = u.min, s.__max = u.max, s.__step = u.step, c["default"].isUndefined(s.__step) ? 0 === s.initialValue ? s.__impliedStep = 1 : s.__impliedStep = Math.pow(10, Math.floor(Math.log(Math.abs(s.initialValue)) / Math.LN10)) / 10 : s.__impliedStep = s.__step, s.__precision = l(s.__impliedStep), s
                    }
                    return a(t, e), t.prototype.setValue = function(t) { var n = t; return void 0 !== this.__min && n < this.__min ? n = this.__min : void 0 !== this.__max && n > this.__max && (n = this.__max), void 0 !== this.__step && n % this.__step !== 0 && (n = Math.round(n / this.__step) * this.__step), e.prototype.setValue.call(this, n) }, t.prototype.min = function(e) { return this.__min = e, this }, t.prototype.max = function(e) { return this.__max = e, this }, t.prototype.step = function(e) { return this.__step = e, this.__impliedStep = e, this.__precision = l(e), this }, t
                }(u["default"]);
            t["default"] = f
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }

            function l(e, t) { var n = Math.pow(10, t); return Math.round(e * n) / n } t.__esModule = !0;
            var s = n(12),
                u = o(s),
                d = n(9),
                c = o(d),
                f = n(5),
                _ = o(f),
                p = function(e) {
                    function t(n, o, a) {
                        function l() {
                            var e = parseFloat(m.__input.value);
                            _["default"].isNaN(e) || m.setValue(e)
                        }

                        function s() { m.__onFinishChange && m.__onFinishChange.call(m, m.getValue()) }

                        function u() { s() }

                        function d(e) {
                            var t = b - e.clientY;
                            m.setValue(m.getValue() + t * m.__impliedStep), b = e.clientY
                        }

                        function f() { c["default"].unbind(window, "mousemove", d), c["default"].unbind(window, "mouseup", f), s() }

                        function p(e) { c["default"].bind(window, "mousemove", d), c["default"].bind(window, "mouseup", f), b = e.clientY } i(this, t);
                        var h = r(this, e.call(this, n, o, a));
                        h.__truncationSuspended = !1;
                        var m = h,
                            b = void 0;
                        return h.__input = document.createElement("input"), h.__input.setAttribute("type", "text"), c["default"].bind(h.__input, "change", l), c["default"].bind(h.__input, "blur", u), c["default"].bind(h.__input, "mousedown", p), c["default"].bind(h.__input, "keydown", function(e) { 13 === e.keyCode && (m.__truncationSuspended = !0, this.blur(), m.__truncationSuspended = !1, s()) }), h.updateDisplay(), h.domElement.appendChild(h.__input), h
                    }
                    return a(t, e), t.prototype.updateDisplay = function() { return this.__input.value = this.__truncationSuspended ? this.getValue() : l(this.getValue(), this.__precision), e.prototype.updateDisplay.call(this) }, t
                }(u["default"]);
            t["default"] = p
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }

            function l(e, t, n, o, i) { return o + (i - o) * ((e - t) / (n - t)) } t.__esModule = !0;
            var s = n(12),
                u = o(s),
                d = n(9),
                c = o(d),
                f = function(e) {
                    function t(n, o, a, s, u) {
                        function d(e) { document.activeElement.blur(), c["default"].bind(window, "mousemove", f), c["default"].bind(window, "mouseup", _), f(e) }

                        function f(e) { e.preventDefault(); var t = h.__background.getBoundingClientRect(); return h.setValue(l(e.clientX, t.left, t.right, h.__min, h.__max)), !1 }

                        function _() { c["default"].unbind(window, "mousemove", f), c["default"].unbind(window, "mouseup", _), h.__onFinishChange && h.__onFinishChange.call(h, h.getValue()) } i(this, t);
                        var p = r(this, e.call(this, n, o, { min: a, max: s, step: u })),
                            h = p;
                        return p.__background = document.createElement("div"), p.__foreground = document.createElement("div"), c["default"].bind(p.__background, "mousedown", d), c["default"].addClass(p.__background, "slider"), c["default"].addClass(p.__foreground, "slider-fg"), p.updateDisplay(), p.__background.appendChild(p.__foreground), p.domElement.appendChild(p.__background), p
                    }
                    return a(t, e), t.prototype.updateDisplay = function() { var t = (this.getValue() - this.__min) / (this.__max - this.__min); return this.__foreground.style.width = 100 * t + "%", e.prototype.updateDisplay.call(this) }, t
                }(u["default"]);
            t["default"] = f
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }
            t.__esModule = !0;
            var l = n(7),
                s = o(l),
                u = n(9),
                d = o(u),
                c = function(e) {
                    function t(n, o, a) {
                        i(this, t);
                        var l = r(this, e.call(this, n, o)),
                            s = l;
                        return l.__button = document.createElement("div"), l.__button.innerHTML = void 0 === a ? "Fire" : a, d["default"].bind(l.__button, "click", function(e) { return e.preventDefault(), s.fire(), !1 }), d["default"].addClass(l.__button, "button"), l.domElement.appendChild(l.__button), l
                    }
                    return a(t, e), t.prototype.fire = function() { this.__onChange && this.__onChange.call(this), this.getValue().call(this.object), this.__onFinishChange && this.__onFinishChange.call(this, this.getValue()) }, t
                }(s["default"]);
            t["default"] = c
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") }

            function r(e, t) { if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return !t || "object" != typeof t && "function" != typeof t ? e : t }

            function a(e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
                e.prototype = Object.create(t && t.prototype, { constructor: { value: e, enumerable: !1, writable: !0, configurable: !0 } }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
            }

            function l(e, t, n, o) { e.style.background = "", g["default"].each(y, function(i) { e.style.cssText += "background: " + i + "linear-gradient(" + t + ", " + n + " 0%, " + o + " 100%); " }) }

            function s(e) { e.style.background = "", e.style.cssText += "background: -moz-linear-gradient(top,  #ff0000 0%, #ff00ff 17%, #0000ff 34%, #00ffff 50%, #00ff00 67%, #ffff00 84%, #ff0000 100%);", e.style.cssText += "background: -webkit-linear-gradient(top,  #ff0000 0%,#ff00ff 17%,#0000ff 34%,#00ffff 50%,#00ff00 67%,#ffff00 84%,#ff0000 100%);", e.style.cssText += "background: -o-linear-gradient(top,  #ff0000 0%,#ff00ff 17%,#0000ff 34%,#00ffff 50%,#00ff00 67%,#ffff00 84%,#ff0000 100%);", e.style.cssText += "background: -ms-linear-gradient(top,  #ff0000 0%,#ff00ff 17%,#0000ff 34%,#00ffff 50%,#00ff00 67%,#ffff00 84%,#ff0000 100%);", e.style.cssText += "background: linear-gradient(top,  #ff0000 0%,#ff00ff 17%,#0000ff 34%,#00ffff 50%,#00ff00 67%,#ffff00 84%,#ff0000 100%);" } t.__esModule = !0;
            var u = n(7),
                d = o(u),
                c = n(9),
                f = o(c),
                _ = n(2),
                p = o(_),
                h = n(3),
                m = o(h),
                b = n(5),
                g = o(b),
                v = function(e) {
                    function t(n, o) {
                        function a(e) { h(e), f["default"].bind(window, "mousemove", h), f["default"].bind(window, "mouseup", u) }

                        function u() { f["default"].unbind(window, "mousemove", h), f["default"].unbind(window, "mouseup", u), _() }

                        function d() {
                            var e = (0, m["default"])(this.value);
                            e !== !1 ? (y.__color.__state = e, y.setValue(y.__color.toOriginal())) : this.value = y.__color.toString()
                        }

                        function c() { f["default"].unbind(window, "mousemove", b), f["default"].unbind(window, "mouseup", c), _() }

                        function _() { y.__onFinishChange && y.__onFinishChange.call(y, y.__color.toOriginal()) }

                        function h(e) {
                            e.preventDefault();
                            var t = y.__saturation_field.getBoundingClientRect(),
                                n = (e.clientX - t.left) / (t.right - t.left),
                                o = 1 - (e.clientY - t.top) / (t.bottom - t.top);
                            return o > 1 ? o = 1 : o < 0 && (o = 0), n > 1 ? n = 1 : n < 0 && (n = 0), y.__color.v = o, y.__color.s = n, y.setValue(y.__color.toOriginal()), !1
                        }

                        function b(e) {
                            e.preventDefault();
                            var t = y.__hue_field.getBoundingClientRect(),
                                n = 1 - (e.clientY - t.top) / (t.bottom - t.top);
                            return n > 1 ? n = 1 : n < 0 && (n = 0), y.__color.h = 360 * n, y.setValue(y.__color.toOriginal()), !1
                        }
                        i(this, t);
                        var v = r(this, e.call(this, n, o));
                        v.__color = new p["default"](v.getValue()), v.__temp = new p["default"](0);
                        var y = v;
                        v.domElement = document.createElement("div"), f["default"].makeSelectable(v.domElement, !1), v.__selector = document.createElement("div"), v.__selector.className = "selector", v.__saturation_field = document.createElement("div"), v.__saturation_field.className = "saturation-field", v.__field_knob = document.createElement("div"), v.__field_knob.className = "field-knob", v.__field_knob_border = "2px solid ", v.__hue_knob = document.createElement("div"), v.__hue_knob.className = "hue-knob", v.__hue_field = document.createElement("div"), v.__hue_field.className = "hue-field", v.__input = document.createElement("input"), v.__input.type = "text", v.__input_textShadow = "0 1px 1px ", f["default"].bind(v.__input, "keydown", function(e) { 13 === e.keyCode && d.call(this) }), f["default"].bind(v.__input, "blur", d), f["default"].bind(v.__selector, "mousedown", function() { f["default"].addClass(this, "drag").bind(window, "mouseup", function() { f["default"].removeClass(y.__selector, "drag") }) });
                        var w = document.createElement("div");
                        return g["default"].extend(v.__selector.style, { width: "122px", height: "102px", padding: "3px", backgroundColor: "#222", boxShadow: "0px 1px 3px rgba(0,0,0,0.3)" }), g["default"].extend(v.__field_knob.style, { position: "absolute", width: "12px", height: "12px", border: v.__field_knob_border + (v.__color.v < .5 ? "#fff" : "#000"), boxShadow: "0px 1px 3px rgba(0,0,0,0.5)", borderRadius: "12px", zIndex: 1 }), g["default"].extend(v.__hue_knob.style, { position: "absolute", width: "15px", height: "2px", borderRight: "4px solid #fff", zIndex: 1 }), g["default"].extend(v.__saturation_field.style, { width: "100px", height: "100px", border: "1px solid #555", marginRight: "3px", display: "inline-block", cursor: "pointer" }), g["default"].extend(w.style, { width: "100%", height: "100%", background: "none" }), l(w, "top", "rgba(0,0,0,0)", "#000"), g["default"].extend(v.__hue_field.style, { width: "15px", height: "100px", border: "1px solid #555", cursor: "ns-resize", position: "absolute", top: "3px", right: "3px" }), s(v.__hue_field), g["default"].extend(v.__input.style, { outline: "none", textAlign: "center", color: "#fff", border: 0, fontWeight: "bold", textShadow: v.__input_textShadow + "rgba(0,0,0,0.7)" }), f["default"].bind(v.__saturation_field, "mousedown", a), f["default"].bind(v.__field_knob, "mousedown", a), f["default"].bind(v.__hue_field, "mousedown", function(e) { b(e), f["default"].bind(window, "mousemove", b), f["default"].bind(window, "mouseup", c) }), v.__saturation_field.appendChild(w), v.__selector.appendChild(v.__field_knob), v.__selector.appendChild(v.__saturation_field), v.__selector.appendChild(v.__hue_field), v.__hue_field.appendChild(v.__hue_knob), v.domElement.appendChild(v.__input), v.domElement.appendChild(v.__selector), v.updateDisplay(), v
                    }
                    return a(t, e), t.prototype.updateDisplay = function() {
                        var e = (0, m["default"])(this.getValue());
                        if (e !== !1) {
                            var t = !1;
                            g["default"].each(p["default"].COMPONENTS, function(n) { if (!g["default"].isUndefined(e[n]) && !g["default"].isUndefined(this.__color.__state[n]) && e[n] !== this.__color.__state[n]) return t = !0, {} }, this), t && g["default"].extend(this.__color.__state, e)
                        }
                        g["default"].extend(this.__temp.__state, this.__color.__state), this.__temp.a = 1;
                        var n = this.__color.v < .5 || this.__color.s > .5 ? 255 : 0,
                            o = 255 - n;
                        g["default"].extend(this.__field_knob.style, { marginLeft: 100 * this.__color.s - 7 + "px", marginTop: 100 * (1 - this.__color.v) - 7 + "px", backgroundColor: this.__temp.toHexString(), border: this.__field_knob_border + "rgb(" + n + "," + n + "," + n + ")" }), this.__hue_knob.style.marginTop = 100 * (1 - this.__color.h / 360) + "px", this.__temp.s = 1, this.__temp.v = 1, l(this.__saturation_field, "left", "#fff", this.__temp.toHexString()), this.__input.value = this.__color.toString(), g["default"].extend(this.__input.style, { backgroundColor: this.__color.toHexString(), color: "rgb(" + n + "," + n + "," + n + ")", textShadow: this.__input_textShadow + "rgba(" + o + "," + o + "," + o + ",.7)" })
                    }, t
                }(d["default"]),
                y = ["-moz-", "-o-", "-webkit-", "-ms-", ""];
            t["default"] = v
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t, n) { var o = document.createElement("li"); return t && o.appendChild(t), n ? e.__ul.insertBefore(o, n) : e.__ul.appendChild(o), e.onResize(), o }

            function r(e, t) {
                var n = e.__preset_select[e.__preset_select.selectedIndex];
                t ? n.innerHTML = n.value + "*" : n.innerHTML = n.value
            }

            function a(e, t, n) {
                if (n.__li = t, n.__gui = e, U["default"].extend(n, {
                        options: function(t) { if (arguments.length > 1) { var o = n.__li.nextElementSibling; return n.remove(), s(e, n.object, n.property, { before: o, factoryArgs: [U["default"].toArray(arguments)] }) } if (U["default"].isArray(t) || U["default"].isObject(t)) { var i = n.__li.nextElementSibling; return n.remove(), s(e, n.object, n.property, { before: i, factoryArgs: [t] }) } },
                        name: function(e) { return n.__li.firstElementChild.firstElementChild.innerHTML = e, n },
                        listen: function() { return n.__gui.listen(n), n },
                        remove: function() {
                            return n.__gui.remove(n), n
                        }
                    }), n instanceof B["default"]) ! function() {
                    var e = new N["default"](n.object, n.property, { min: n.__min, max: n.__max, step: n.__step });
                    U["default"].each(["updateDisplay", "onChange", "onFinishChange", "step"], function(t) {
                        var o = n[t],
                            i = e[t];
                        n[t] = e[t] = function() { var t = Array.prototype.slice.call(arguments); return i.apply(e, t), o.apply(n, t) }
                    }), z["default"].addClass(t, "has-slider"), n.domElement.insertBefore(e.domElement, n.domElement.firstElementChild)
                }();
                else if (n instanceof N["default"]) {
                    var o = function(t) {
                        if (U["default"].isNumber(n.__min) && U["default"].isNumber(n.__max)) {
                            var o = n.__li.firstElementChild.firstElementChild.innerHTML,
                                i = n.__gui.__listening.indexOf(n) > -1;
                            n.remove();
                            var r = s(e, n.object, n.property, { before: n.__li.nextElementSibling, factoryArgs: [n.__min, n.__max, n.__step] });
                            return r.name(o), i && r.listen(), r
                        }
                        return t
                    };
                    n.min = U["default"].compose(o, n.min), n.max = U["default"].compose(o, n.max)
                } else n instanceof O["default"] ? (z["default"].bind(t, "click", function() { z["default"].fakeEvent(n.__checkbox, "click") }), z["default"].bind(n.__checkbox, "click", function(e) { e.stopPropagation() })) : n instanceof R["default"] ? (z["default"].bind(t, "click", function() { z["default"].fakeEvent(n.__button, "click") }), z["default"].bind(t, "mouseover", function() { z["default"].addClass(n.__button, "hover") }), z["default"].bind(t, "mouseout", function() { z["default"].removeClass(n.__button, "hover") })) : n instanceof j["default"] && (z["default"].addClass(t, "color"), n.updateDisplay = U["default"].compose(function(e) { return t.style.borderLeftColor = n.__color.toString(), e }, n.updateDisplay), n.updateDisplay());
                n.setValue = U["default"].compose(function(t) { return e.getRoot().__preset_select && n.isModified() && r(e.getRoot(), !0), t }, n.setValue)
            }

            function l(e, t) {
                var n = e.getRoot(),
                    o = n.__rememberedObjects.indexOf(t.object);
                if (o !== -1) {
                    var i = n.__rememberedObjectIndecesToControllers[o];
                    if (void 0 === i && (i = {}, n.__rememberedObjectIndecesToControllers[o] = i), i[t.property] = t, n.load && n.load.remembered) {
                        var r = n.load.remembered,
                            a = void 0;
                        if (r[e.preset]) a = r[e.preset];
                        else {
                            if (!r[Q]) return;
                            a = r[Q]
                        }
                        if (a[o] && void 0 !== a[o][t.property]) {
                            var l = a[o][t.property];
                            t.initialValue = l, t.setValue(l)
                        }
                    }
                }
            }

            function s(e, t, n, o) {
                if (void 0 === t[n]) throw new Error('Object "' + t + '" has no property "' + n + '"');
                var r = void 0;
                if (o.color) r = new j["default"](t, n);
                else {
                    var s = [t, n].concat(o.factoryArgs);
                    r = C["default"].apply(e, s)
                }
                o.before instanceof S["default"] && (o.before = o.before.__li), l(e, r), z["default"].addClass(r.domElement, "c");
                var u = document.createElement("span");
                z["default"].addClass(u, "property-name"), u.innerHTML = r.property;
                var d = document.createElement("div");
                d.appendChild(u), d.appendChild(r.domElement);
                var c = i(e, d, o.before);
                return z["default"].addClass(c, oe.CLASS_CONTROLLER_ROW), r instanceof j["default"] ? z["default"].addClass(c, "color") : z["default"].addClass(c, g(r.getValue())), a(e, c, r), e.__controllers.push(r), r
            }

            function u(e, t) { return document.location.href + "." + t }

            function d(e, t, n) {
                var o = document.createElement("option");
                o.innerHTML = t, o.value = t, e.__preset_select.appendChild(o), n && (e.__preset_select.selectedIndex = e.__preset_select.length - 1)
            }

            function c(e, t) { t.style.display = e.useLocalStorage ? "block" : "none" }

            function f(e) {
                var t = e.__save_row = document.createElement("li");
                z["default"].addClass(e.domElement, "has-save"), e.__ul.insertBefore(t, e.__ul.firstChild), z["default"].addClass(t, "save-row");
                var n = document.createElement("span");
                n.innerHTML = "&nbsp;", z["default"].addClass(n, "button gears");
                var o = document.createElement("span");
                o.innerHTML = "Save", z["default"].addClass(o, "button"), z["default"].addClass(o, "save");
                var i = document.createElement("span");
                i.innerHTML = "New", z["default"].addClass(i, "button"), z["default"].addClass(i, "save-as");
                var r = document.createElement("span");
                r.innerHTML = "Revert", z["default"].addClass(r, "button"), z["default"].addClass(r, "revert");
                var a = e.__preset_select = document.createElement("select");
                e.load && e.load.remembered ? U["default"].each(e.load.remembered, function(t, n) { d(e, n, n === e.preset) }) : d(e, Q, !1), z["default"].bind(a, "change", function() {
                    for (var t = 0; t < e.__preset_select.length; t++) e.__preset_select[t].innerHTML = e.__preset_select[t].value;
                    e.preset = this.value
                }), t.appendChild(a), t.appendChild(n), t.appendChild(o), t.appendChild(i), t.appendChild(r), q && ! function() {
                    var t = document.getElementById("dg-local-explain"),
                        n = document.getElementById("dg-local-storage"),
                        o = document.getElementById("dg-save-locally");
                    o.style.display = "block", "true" === localStorage.getItem(u(e, "isLocal")) && n.setAttribute("checked", "checked"), c(e, t), z["default"].bind(n, "change", function() { e.useLocalStorage = !e.useLocalStorage, c(e, t) })
                }();
                var l = document.getElementById("dg-new-constructor");
                z["default"].bind(l, "keydown", function(e) {!e.metaKey || 67 !== e.which && 67 !== e.keyCode || Z.hide() }), z["default"].bind(n, "click", function() { l.innerHTML = JSON.stringify(e.getSaveObject(), void 0, 2), Z.show(), l.focus(), l.select() }), z["default"].bind(o, "click", function() { e.save() }), z["default"].bind(i, "click", function() {
                    var t = prompt("Enter a new preset name.");
                    t && e.saveAs(t)
                }), z["default"].bind(r, "click", function() { e.revert() })
            }

            function _(e) {
                function t(t) { return t.preventDefault(), e.width += i - t.clientX, e.onResize(), i = t.clientX, !1 }

                function n() { z["default"].removeClass(e.__closeButton, oe.CLASS_DRAG), z["default"].unbind(window, "mousemove", t), z["default"].unbind(window, "mouseup", n) }

                function o(o) { return o.preventDefault(), i = o.clientX, z["default"].addClass(e.__closeButton, oe.CLASS_DRAG), z["default"].bind(window, "mousemove", t), z["default"].bind(window, "mouseup", n), !1 }
                var i = void 0;
                e.__resize_handle = document.createElement("div"), U["default"].extend(e.__resize_handle.style, { width: "6px", marginLeft: "-3px", height: "200px", cursor: "ew-resize", position: "absolute" }), z["default"].bind(e.__resize_handle, "mousedown", o), z["default"].bind(e.__closeButton, "mousedown", o), e.domElement.insertBefore(e.__resize_handle, e.domElement.firstElementChild)
            }

            function p(e, t) { e.domElement.style.width = t + "px", e.__save_row && e.autoPlace && (e.__save_row.style.width = t + "px"), e.__closeButton && (e.__closeButton.style.width = t + "px") }

            function h(e, t) {
                var n = {};
                return U["default"].each(e.__rememberedObjects, function(o, i) {
                    var r = {},
                        a = e.__rememberedObjectIndecesToControllers[i];
                    U["default"].each(a, function(e, n) { r[n] = t ? e.initialValue : e.getValue() }), n[i] = r
                }), n
            }

            function m(e) { for (var t = 0; t < e.__preset_select.length; t++) e.__preset_select[t].value === e.preset && (e.__preset_select.selectedIndex = t) }

            function b(e) { 0 !== e.length && D["default"].call(window, function() { b(e) }), U["default"].each(e, function(e) { e.updateDisplay() }) }
            var g = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) { return typeof e } : function(e) { return e && "function" == typeof Symbol && e.constructor === Symbol ? "symbol" : typeof e },
                v = n(18),
                y = o(v),
                w = n(19),
                x = o(w),
                E = n(20),
                C = o(E),
                A = n(7),
                S = o(A),
                k = n(8),
                O = o(k),
                T = n(15),
                R = o(T),
                L = n(13),
                N = o(L),
                M = n(14),
                B = o(M),
                H = n(16),
                j = o(H),
                P = n(21),
                D = o(P),
                V = n(22),
                F = o(V),
                I = n(9),
                z = o(I),
                G = n(5),
                U = o(G),
                X = n(23),
                K = o(X);
            y["default"].inject(K["default"]);
            var Y = "dg",
                J = 72,
                W = 20,
                Q = "Default",
                q = function() { try { return "localStorage" in window && null !== window.localStorage } catch (e) { return !1 } }(),
                Z = void 0,
                $ = !0,
                ee = void 0,
                te = !1,
                ne = [],
                oe = function ie(e) {
                    function t() {
                        var e = n.getRoot();
                        e.width += 1, U["default"].defer(function() { e.width -= 1 })
                    }
                    var n = this,
                        o = e || {};
                    this.domElement = document.createElement("div"), this.__ul = document.createElement("ul"), this.domElement.appendChild(this.__ul), z["default"].addClass(this.domElement, Y), this.__folders = {}, this.__controllers = [], this.__rememberedObjects = [], this.__rememberedObjectIndecesToControllers = [], this.__listening = [], o = U["default"].defaults(o, { autoPlace: !0, width: ie.DEFAULT_WIDTH }), o = U["default"].defaults(o, { resizable: o.autoPlace, hideable: o.autoPlace }), U["default"].isUndefined(o.load) ? o.load = { preset: Q } : o.preset && (o.load.preset = o.preset), U["default"].isUndefined(o.parent) && o.hideable && ne.push(this), o.resizable = U["default"].isUndefined(o.parent) && o.resizable, o.autoPlace && U["default"].isUndefined(o.scrollable) && (o.scrollable = !0);
                    var r = q && "true" === localStorage.getItem(u(this, "isLocal")),
                        a = void 0;
                    if (Object.defineProperties(this, { parent: { get: function() { return o.parent } }, scrollable: { get: function() { return o.scrollable } }, autoPlace: { get: function() { return o.autoPlace } }, preset: { get: function() { return n.parent ? n.getRoot().preset : o.load.preset }, set: function(e) { n.parent ? n.getRoot().preset = e : o.load.preset = e, m(this), n.revert() } }, width: { get: function() { return o.width }, set: function(e) { o.width = e, p(n, e) } }, name: { get: function() { return o.name }, set: function(e) { o.name = e, titleRowName && (titleRowName.innerHTML = o.name) } }, closed: { get: function() { return o.closed }, set: function(e) { o.closed = e, o.closed ? z["default"].addClass(n.__ul, ie.CLASS_CLOSED) : z["default"].removeClass(n.__ul, ie.CLASS_CLOSED), this.onResize(), n.__closeButton && (n.__closeButton.innerHTML = e ? ie.TEXT_OPEN : ie.TEXT_CLOSED) } }, load: { get: function() { return o.load } }, useLocalStorage: { get: function() { return r }, set: function(e) { q && (r = e, e ? z["default"].bind(window, "unload", a) : z["default"].unbind(window, "unload", a), localStorage.setItem(u(n, "isLocal"), e)) } } }), U["default"].isUndefined(o.parent)) {
                        if (o.closed = !1, z["default"].addClass(this.domElement, ie.CLASS_MAIN), z["default"].makeSelectable(this.domElement, !1), q && r) {
                            n.useLocalStorage = !0;
                            var l = localStorage.getItem(u(this, "gui"));
                            l && (o.load = JSON.parse(l))
                        }
                        this.__closeButton = document.createElement("div"), this.__closeButton.innerHTML = ie.TEXT_CLOSED, z["default"].addClass(this.__closeButton, ie.CLASS_CLOSE_BUTTON), this.domElement.appendChild(this.__closeButton), z["default"].bind(this.__closeButton, "click", function() { n.closed = !n.closed })
                    } else {
                        void 0 === o.closed && (o.closed = !0);
                        var s = document.createTextNode(o.name);
                        z["default"].addClass(s, "controller-name");
                        var d = i(n, s),
                            c = function(e) { return e.preventDefault(), n.closed = !n.closed, !1 };
                        z["default"].addClass(this.__ul, ie.CLASS_CLOSED), z["default"].addClass(d, "title"), z["default"].bind(d, "click", c), o.closed || (this.closed = !1)
                    }
                    o.autoPlace && (U["default"].isUndefined(o.parent) && ($ && (ee = document.createElement("div"), z["default"].addClass(ee, Y), z["default"].addClass(ee, ie.CLASS_AUTO_PLACE_CONTAINER), document.body.appendChild(ee), $ = !1), ee.appendChild(this.domElement), z["default"].addClass(this.domElement, ie.CLASS_AUTO_PLACE)), this.parent || p(n, o.width)), this.__resizeHandler = function() { n.onResizeDebounced() }, z["default"].bind(window, "resize", this.__resizeHandler), z["default"].bind(this.__ul, "webkitTransitionEnd", this.__resizeHandler), z["default"].bind(this.__ul, "transitionend", this.__resizeHandler), z["default"].bind(this.__ul, "oTransitionEnd", this.__resizeHandler), this.onResize(), o.resizable && _(this), a = function() { q && "true" === localStorage.getItem(u(n, "isLocal")) && localStorage.setItem(u(n, "gui"), JSON.stringify(n.getSaveObject())) }, this.saveToLocalStorageIfPossible = a, o.parent || t()
                };
            oe.toggleHide = function() { te = !te, U["default"].each(ne, function(e) { e.domElement.style.display = te ? "none" : "" }) }, oe.CLASS_AUTO_PLACE = "a", oe.CLASS_AUTO_PLACE_CONTAINER = "ac", oe.CLASS_MAIN = "main", oe.CLASS_CONTROLLER_ROW = "cr", oe.CLASS_TOO_TALL = "taller-than-window", oe.CLASS_CLOSED = "closed", oe.CLASS_CLOSE_BUTTON = "close-button", oe.CLASS_DRAG = "drag", oe.DEFAULT_WIDTH = 245, oe.TEXT_CLOSED = "Close Controls", oe.TEXT_OPEN = "Open Controls", oe._keydownHandler = function(e) { "text" === document.activeElement.type || e.which !== J && e.keyCode !== J || oe.toggleHide() }, z["default"].bind(window, "keydown", oe._keydownHandler, !1), U["default"].extend(oe.prototype, {
                add: function(e, t) { return s(this, e, t, { factoryArgs: Array.prototype.slice.call(arguments, 2) }) },
                addColor: function(e, t) { return s(this, e, t, { color: !0 }) },
                remove: function(e) {
                    this.__ul.removeChild(e.__li), this.__controllers.splice(this.__controllers.indexOf(e), 1);
                    var t = this;
                    U["default"].defer(function() { t.onResize() })
                },
                destroy: function() { this.autoPlace && ee.removeChild(this.domElement), z["default"].unbind(window, "keydown", oe._keydownHandler, !1), z["default"].unbind(window, "resize", this.__resizeHandler), this.saveToLocalStorageIfPossible && z["default"].unbind(window, "unload", this.saveToLocalStorageIfPossible) },
                addFolder: function(e) {
                    if (void 0 !== this.__folders[e]) throw new Error('You already have a folder in this GUI by the name "' + e + '"');
                    var t = { name: e, parent: this };
                    t.autoPlace = this.autoPlace, this.load && this.load.folders && this.load.folders[e] && (t.closed = this.load.folders[e].closed, t.load = this.load.folders[e]);
                    var n = new oe(t);
                    this.__folders[e] = n;
                    var o = i(this, n.domElement);
                    return z["default"].addClass(o, "folder"), n
                },
                open: function() { this.closed = !1 },
                close: function() { this.closed = !0 },
                onResize: function() {
                    var e = this.getRoot();
                    if (e.scrollable) {
                        var t = z["default"].getOffset(e.__ul).top,
                            n = 0;
                        U["default"].each(e.__ul.childNodes, function(t) { e.autoPlace && t === e.__save_row || (n += z["default"].getHeight(t)) }), window.innerHeight - t - W < n ? (z["default"].addClass(e.domElement, oe.CLASS_TOO_TALL), e.__ul.style.height = window.innerHeight - t - W + "px") : (z["default"].removeClass(e.domElement, oe.CLASS_TOO_TALL), e.__ul.style.height = "auto")
                    }
                    e.__resize_handle && U["default"].defer(function() { e.__resize_handle.style.height = e.__ul.offsetHeight + "px" }), e.__closeButton && (e.__closeButton.style.width = e.width + "px")
                },
                onResizeDebounced: U["default"].debounce(function() { this.onResize() }, 200),
                remember: function() {
                    if (U["default"].isUndefined(Z) && (Z = new F["default"], Z.domElement.innerHTML = x["default"]), this.parent) throw new Error("You can only call remember on a top level GUI.");
                    var e = this;
                    U["default"].each(Array.prototype.slice.call(arguments), function(t) { 0 === e.__rememberedObjects.length && f(e), e.__rememberedObjects.indexOf(t) === -1 && e.__rememberedObjects.push(t) }), this.autoPlace && p(this, this.width)
                },
                getRoot: function() { for (var e = this; e.parent;) e = e.parent; return e },
                getSaveObject: function() { var e = this.load; return e.closed = this.closed, this.__rememberedObjects.length > 0 && (e.preset = this.preset, e.remembered || (e.remembered = {}), e.remembered[this.preset] = h(this)), e.folders = {}, U["default"].each(this.__folders, function(t, n) { e.folders[n] = t.getSaveObject() }), e },
                save: function() { this.load.remembered || (this.load.remembered = {}), this.load.remembered[this.preset] = h(this), r(this, !1), this.saveToLocalStorageIfPossible() },
                saveAs: function(e) { this.load.remembered || (this.load.remembered = {}, this.load.remembered[Q] = h(this, !0)), this.load.remembered[e] = h(this), this.preset = e, d(this, e, !0), this.saveToLocalStorageIfPossible() },
                revert: function(e) { U["default"].each(this.__controllers, function(t) { this.getRoot().load.remembered ? l(e || this.getRoot(), t) : t.setValue(t.initialValue), t.__onFinishChange && t.__onFinishChange.call(t, t.getValue()) }, this), U["default"].each(this.__folders, function(e) { e.revert(e) }), e || r(this.getRoot(), !1) },
                listen: function(e) {
                    var t = 0 === this.__listening.length;
                    this.__listening.push(e), t && b(this.__listening)
                },
                updateDisplay: function() { U["default"].each(this.__controllers, function(e) { e.updateDisplay() }), U["default"].each(this.__folders, function(e) { e.updateDisplay() }) }
            }), e.exports = oe
        }, function(e, t) {
            "use strict";
            e.exports = {
                load: function(e, t) {
                    var n = t || document,
                        o = n.createElement("link");
                    o.type = "text/css", o.rel = "stylesheet", o.href = e, n.getElementsByTagName("head")[0].appendChild(o)
                },
                inject: function(e, t) {
                    var n = t || document,
                        o = document.createElement("style");
                    o.type = "text/css", o.innerHTML = e;
                    var i = n.getElementsByTagName("head")[0];
                    try { i.appendChild(o) } catch (r) {}
                }
            }
        }, function(e, t) { e.exports = "<div id=dg-save class=\"dg dialogue\"> Here's the new load parameter for your <code>GUI</code>'s constructor: <textarea id=dg-new-constructor></textarea> <div id=dg-save-locally> <input id=dg-local-storage type=checkbox /> Automatically save values to <code>localStorage</code> on exit. <div id=dg-local-explain>The values saved to <code>localStorage</code> will override those passed to <code>dat.GUI</code>'s constructor. This makes it easier to work incrementally, but <code>localStorage</code> is fragile, and your friends may not see the same values you do. </div> </div> </div>" }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } } t.__esModule = !0;
            var i = n(10),
                r = o(i),
                a = n(13),
                l = o(a),
                s = n(14),
                u = o(s),
                d = n(11),
                c = o(d),
                f = n(15),
                _ = o(f),
                p = n(8),
                h = o(p),
                m = n(5),
                b = o(m),
                g = function(e, t) { var n = e[t]; return b["default"].isArray(arguments[2]) || b["default"].isObject(arguments[2]) ? new r["default"](e, t, arguments[2]) : b["default"].isNumber(n) ? b["default"].isNumber(arguments[2]) && b["default"].isNumber(arguments[3]) ? b["default"].isNumber(arguments[4]) ? new u["default"](e, t, arguments[2], arguments[3], arguments[4]) : new u["default"](e, t, arguments[2], arguments[3]) : b["default"].isNumber(arguments[4]) ? new l["default"](e, t, { min: arguments[2], max: arguments[3], step: arguments[4] }) : new l["default"](e, t, { min: arguments[2], max: arguments[3] }) : b["default"].isString(n) ? new c["default"](e, t) : b["default"].isFunction(n) ? new _["default"](e, t, "") : b["default"].isBoolean(n) ? new h["default"](e, t) : null };
            t["default"] = g
        }, function(e, t) {
            "use strict";

            function n(e) { setTimeout(e, 1e3 / 60) } t.__esModule = !0, t["default"] = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || n
        }, function(e, t, n) {
            "use strict";

            function o(e) { return e && e.__esModule ? e : { "default": e } }

            function i(e, t) { if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function") } t.__esModule = !0;
            var r = n(9),
                a = o(r),
                l = n(5),
                s = o(l),
                u = function() {
                    function e() {
                        i(this, e), this.backgroundElement = document.createElement("div"),
                            s["default"].extend(this.backgroundElement.style, {
                                backgroundColor: "rgba(0,0,0,0.8)",
                                top: 0,
                                left: 0,
                                display: "none",
                                zIndex: "1000",
                                opacity: 0,
                                WebkitTransition: "opacity 0.2s linear",
                                transition: "opacity 0.2s linear"
                            }),
                            a["default"].makeFullscreen(this.backgroundElement),
                            this.backgroundElement.style.position = "fixed",
                            this.domElement = document.createElement("div"),
                            s["default"].extend(this.domElement.style, {
                                position: "fixed",
                                display: "none",
                                zIndex: "1001",
                                opacity: 0,
                                WebkitTransition: "-webkit-transform 0.2s ease-out, opacity 0.2s linear",
                                transition: "transform 0.2s ease-out, opacity 0.2s linear"
                            }),
                            document.body.appendChild(this.backgroundElement),
                            document.body.appendChild(this.domElement);
                        var t = this;
                        a["default"].bind(this.backgroundElement, "click", function() { t.hide() })
                    }
                    return e.prototype.show = function() {
                            var e = this;
                            this.backgroundElement.style.display = "block",
                                this.domElement.style.display = "block",
                                this.domElement.style.opacity = 0,
                                this.domElement.style.webkitTransform = "scale(1.1)",
                                this.layout(), s["default"].defer(function() {
                                    e.backgroundElement.style.opacity = 1,
                                        e.domElement.style.opacity = 1,
                                        e.domElement.style.webkitTransform = "scale(1)"
                                })
                        },
                        e.prototype.hide = function t() {
                            var e = this,
                                t = function n() {
                                    e.domElement.style.display = "none",
                                        e.backgroundElement.style.display = "none",
                                        a["default"].unbind(e.domElement, "webkitTransitionEnd", n),
                                        a["default"].unbind(e.domElement, "transitionend", n),
                                        a["default"].unbind(e.domElement, "oTransitionEnd", n)
                                };
                            a["default"].bind(this.domElement, "webkitTransitionEnd", t),
                                a["default"].bind(this.domElement, "transitionend", t),
                                a["default"].bind(this.domElement, "oTransitionEnd", t),
                                this.backgroundElement.style.opacity = 0,
                                this.domElement.style.opacity = 0,
                                this.domElement.style.webkitTransform = "scale(1.1)"
                        },
                        e.prototype.layout = function() {
                            this.domElement.style.left = window.innerWidth / 2 - a["default"].getWidth(this.domElement) / 2 + "px",
                                this.domElement.style.top = window.innerHeight / 2 - a["default"].getHeight(this.domElement) / 2 + "px"
                        }, e
                }();
            t["default"] = u
        }, function(e, t, n) {
            t = e.exports = n(24)(),
            //EN ESTA PARTE ES POSIBLE MOVER EL STATS DE CONTROLES DE ANIMACION
                t.push([e.id, ".dg ul{list-style:none;margin:0;padding:0;width:100%;clear:both}.dg.ac{position:absolute;margin-top: 70px;float:left;top:0;left:0;right:0;height:0;z-index:0}.dg:not(.ac) .main{overflow:hidden}.dg.main{-webkit-transition:opacity .1s linear;transition:opacity .1s linear}.dg.main.taller-than-window{overflow-y:auto}.dg.main.taller-than-window .close-button{opacity:1;margin-top:-1px;border-top:1px solid #2c2c2c}.dg.main ul.closed .close-button{opacity:1!important}.dg.main .close-button.drag,.dg.main:hover .close-button{opacity:1}.dg.main .close-button{-webkit-transition:opacity .1s linear;transition:opacity .1s linear;border:0;position:absolute;line-height:19px;height:20px;cursor:pointer;text-align:center;background-color:#000}.dg.main .close-button:hover{background-color:#111}.dg.a{float:right;margin-right:15px;overflow-x:hidden}.dg.a.has-save>ul{margin-top:27px}.dg.a.has-save>ul.closed{margin-top:0}.dg.a .save-row{position:fixed;top:0;z-index:1002}.dg li{-webkit-transition:height .1s ease-out;transition:height .1s ease-out}.dg li:not(.folder){cursor:auto;height:27px;line-height:27px;overflow:hidden;padding:0 4px 0 5px}.dg li.folder{padding:0;border-left:4px solid transparent}.dg li.title{cursor:pointer;margin-left:-4px}.dg .closed li:not(.title),.dg .closed ul li,.dg .closed ul li>*{height:0;overflow:hidden;border:0}.dg .cr{clear:both;padding-left:3px;height:27px}.dg .property-name{cursor:default;float:left;clear:left;width:40%;overflow:hidden;text-overflow:ellipsis}.dg .c{float:left;width:60%}.dg .c input[type=text]{border:0;margin-top:4px;padding:3px;width:100%;float:right}.dg .has-slider input[type=text]{width:30%;margin-left:0}.dg .slider{float:left;width:66%;margin-left:-5px;margin-right:0;height:19px;margin-top:4px}.dg .slider-fg{height:100%}.dg .c input[type=checkbox]{margin-top:9px}.dg .c select{margin-top:5px}.dg .cr.boolean,.dg .cr.boolean *,.dg .cr.function,.dg .cr.function *,.dg .cr.function .property-name{cursor:pointer}.dg .selector{display:none;position:absolute;margin-left:-9px;margin-top:23px;z-index:10}.dg .c:hover .selector,.dg .selector.drag{display:block}.dg li.save-row{padding:0}.dg li.save-row .button{display:inline-block;padding:0 6px}.dg.dialogue{background-color:#222;width:460px;padding:15px;font-size:13px;line-height:15px}#dg-new-constructor{padding:10px;color:#222;font-family:Monaco,monospace;font-size:10px;border:0;resize:none;box-shadow:inset 1px 1px 1px #888;word-wrap:break-word;margin:12px 0;display:block;width:440px;overflow-y:scroll;height:100px;position:relative}#dg-local-explain{display:none;font-size:11px;line-height:17px;border-radius:3px;background-color:#333;padding:8px;margin-top:10px}#dg-local-explain code{font-size:10px}#dat-gui-save-locally{display:none}.dg{color:#eee;font:11px Lucida Grande,sans-serif;text-shadow:0 -1px 0 #111}.dg.main::-webkit-scrollbar{width:5px;background:#1a1a1a}.dg.main::-webkit-scrollbar-corner{height:0;display:none}.dg.main::-webkit-scrollbar-thumb{border-radius:5px;background:#676767}.dg li:not(.folder){background:#1a1a1a;border-bottom:1px solid #2c2c2c}.dg li.save-row{line-height:25px;background:#dad5cb;border:0}.dg li.save-row select{margin-left:5px;width:108px}.dg li.save-row .button{margin-left:5px;margin-top:1px;border-radius:2px;font-size:9px;line-height:7px;padding:4px 4px 5px;background:#c5bdad;color:#fff;text-shadow:0 1px 0 #b0a58f;box-shadow:0 -1px 0 #b0a58f;cursor:pointer}.dg li.save-row .button.gears{background:#c5bdad url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAANCAYAAAB/9ZQ7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQJJREFUeNpiYKAU/P//PwGIC/ApCABiBSAW+I8AClAcgKxQ4T9hoMAEUrxx2QSGN6+egDX+/vWT4e7N82AMYoPAx/evwWoYoSYbACX2s7KxCxzcsezDh3evFoDEBYTEEqycggWAzA9AuUSQQgeYPa9fPv6/YWm/Acx5IPb7ty/fw+QZblw67vDs8R0YHyQhgObx+yAJkBqmG5dPPDh1aPOGR/eugW0G4vlIoTIfyFcA+QekhhHJhPdQxbiAIguMBTQZrPD7108M6roWYDFQiIAAv6Aow/1bFwXgis+f2LUAynwoIaNcz8XNx3Dl7MEJUDGQpx9gtQ8YCueB+D26OECAAQDadt7e46D42QAAAABJRU5ErkJggg==) 2px 1px no-repeat;height:7px;width:8px}.dg li.save-row .button:hover{background-color:#bab19e;box-shadow:0 -1px 0 #b0a58f}.dg li.folder{border-bottom:0}.dg li.title{padding-left:16px;background:#000 url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlI+hKgFxoCgAOw==) 6px 10px no-repeat;cursor:pointer;border-bottom:1px solid hsla(0,0%,100%,.2)}.dg .closed li.title{background-image:url(data:image/gif;base64,R0lGODlhBQAFAJEAAP////Pz8////////yH5BAEAAAIALAAAAAAFAAUAAAIIlGIWqMCbWAEAOw==)}.dg .cr.boolean{border-left:3px solid #806787}.dg .cr.color{border-left:3px solid}.dg .cr.function{border-left:3px solid #e61d5f}.dg .cr.number{border-left:3px solid #2fa1d6}.dg .cr.number input[type=text]{color:#2fa1d6}.dg .cr.string{border-left:3px solid #1ed36f}.dg .cr.string input[type=text]{color:#1ed36f}.dg .cr.boolean:hover,.dg .cr.function:hover{background:#111}.dg .c input[type=text]{background:#303030;outline:none}.dg .c input[type=text]:hover{background:#3c3c3c}.dg .c input[type=text]:focus{background:#494949;color:#fff}.dg .c .slider{background:#303030;cursor:ew-resize}.dg .c .slider-fg{background:#2fa1d6;max-width:100%}.dg .c .slider:hover{background:#3c3c3c}.dg .c .slider:hover .slider-fg{background:#44abda}", ""])
        },
        function(e, t) {
            e.exports = function() {
                var e = [];
                return e.toString = function() {
                        for (var e = [], t = 0; t < this.length; t++) {
                            var n = this[t];
                            n[2] ? e.push("@media " + n[2] + "{" + n[1] + "}") : e.push(n[1])
                        }
                        return e.join("")
                    },
                    e.i = function(t, n) {
                        "string" == typeof t && (t = [
                            [null, t, ""]
                        ]);
                        for (var o = {}, i = 0; i < this.length; i++) { var r = this[i][0]; "number" == typeof r && (o[r] = !0) }
                        for (i = 0; i < t.length; i++) { var a = t[i]; "number" == typeof a[0] && o[a[0]] || (n && !a[2] ? a[2] = n : n && (a[2] = "(" + a[2] + ") and (" + n + ")"), e.push(a)) }
                    }, e
            }
        }
    ])
});
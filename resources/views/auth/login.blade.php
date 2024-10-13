<html lang="en-US" class="no-js yes-js js_active js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <link rel="shortcut icon" href="../content/themes/streamit-theme/assets/images/redux/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>login&#8211; Ott</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='../../fonts.googleapis.com/' />
    <link href='../../fonts.gstatic.com/' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="Ott; Feed" href="../comments/feed" />
    <link rel="alternate" type="application/rss+xml" title="Ott; Comments Feed" href="../comments/feed.rss" />
    <!-- <script type="text/javascript">
       /* <![CDATA[ */
       window._wpemojiSettings = {
           "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
           "ext": ".png",
           "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
           "svgExt": ".svg",
           "source": {
               "concatemoji": "https:\/\/resources\/wp-includes\/js\/emoji-release.min.js?ver=6.5.5"
           }
       };
       /*! This file is auto-generated */
       ! function(i, n) {
           var o, s, e;

           function c(e) {
               try {
                   var t = {
                       supportTests: e,
                       timestamp: (new Date).valueOf()
                   };
                   sessionStorage.setItem(o, JSON.stringify(t))
               } catch (e) {}
           }

           function p(e, t, n) {
               e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
               var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                   r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
               return t.every(function(e, t) {
                   return e === r[t]
               })
           }

           function u(e, t, n) {
               switch (t) {
                   case "flag":
                       return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                   case "emoji":
                       return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
               }
               return !1
           }

           function f(e, t, n) {
               var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                   a = r.getContext("2d", {
                       willReadFrequently: !0
                   }),
                   o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
               return e.forEach(function(e) {
                   o[e] = t(a, e, n)
               }), o
           }

           function t(e) {
               var t = i.createElement("script");
               t.src = e, t.defer = !0, i.head.appendChild(t)
           }
           "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
               everything: !0,
               everythingExceptFlag: !0
           }, e = new Promise(function(e) {
               i.addEventListener("DOMContentLoaded", e, {
                   once: !0
               })
           }), new Promise(function(t) {
               var n = function() {
                   try {
                       var e = JSON.parse(sessionStorage.getItem(o));
                       if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                   } catch (e) {}
                   return null
               }();
               if (!n) {
                   if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                       var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                           r = new Blob([e], {
                               type: "text/javascript"
                           }),
                           a = new Worker(URL.createObjectURL(r), {
                               name: "wpTestEmojiSupports"
                           });
                       return void(a.onmessage = function(e) {
                           c(n = e.data), a.terminate(), t(n)
                       })
                   } catch (e) {}
                   c(n = f(s, u, p))
               }
               t(n)
           }).then(function(e) {
               for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
               n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                   n.DOMReady = !0
               }
           }).then(function() {
               return e
           }).then(function() {
               var e;
               n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
           }))
       }((window, document), window._wpemojiSettings);
       /* ]]> */
   </script> -->
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
           img.emoji {
               display: inline !important;
               border: none !important;
               box-shadow: none !important;
               height: 1em !important;
               width: 1em !important;
               margin: 0 0.07em !important;
               vertical-align: -0.1em !important;
               background: none !important;
               padding: 0 !important;
           }
           .elementor-8228 .elementor-element.elementor-element-5b7eb3f:not(.elementor-motion-effects-element-type-background), .elementor-8228 .elementor-element.elementor-element-5b7eb3f > .elementor-motion-effects-container > .elementor-motion-effects-layer {
        background-image: url(././../content/uploads/2023/10/banner-23.webp);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    form#loginform input[type=password], form#loginform input[type=text] {
        max-width: 100%;
    }
    </style>
    <!-- <link rel='stylesheet' id='jquery-selectBox-css' href='../../streamit/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css' type='text/css' media='all' />
   <link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='../../streamit/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='../../streamit/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css' type='text/css' media='all' />
   <link rel='stylesheet' id='yith-wcwl-main-css' href='resources/product/wp/streamit/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.35.0' type='text/css' media='all' />
   -->
    <style id='yith-wcwl-main-inline-css' type='text/css'>
        .yith-wcwl-share li a {
               color: #FFFFFF;
           }
    
           .yith-wcwl-share li a:hover {
               color: #FFFFFF;
           }
    
           .yith-wcwl-share a.facebook {
               background: #39599E;
               background-color: #39599E;
           }
    
           .yith-wcwl-share a.facebook:hover {
               background: #39599E;
               background-color: #39599E;
           }
    
           .yith-wcwl-share a.twitter {
               background: #45AFE2;
               background-color: #45AFE2;
           }
    
           .yith-wcwl-share a.twitter:hover {
               background: #39599E;
               background-color: #39599E;
           }
    
           .yith-wcwl-share a.pinterest {
               background: #AB2E31;
               background-color: #AB2E31;
           }
    
           .yith-wcwl-share a.pinterest:hover {
               background: #39599E;
               background-color: #39599E;
           }
    
           .yith-wcwl-share a.email {
               background: #FBB102;
               background-color: #FBB102;
           }
    
           .yith-wcwl-share a.email:hover {
               background: #39599E;
               background-color: #39599E;
           }
    
           .yith-wcwl-share a.whatsapp {
               background: #00A901;
               background-color: #00A901;
           }
    
           .yith-wcwl-share a.whatsapp:hover {
               background: #39599E;
               background-color: #39599E;
           }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
    
           .wp-block-button__link {
               color: #fff;
               background-color: #32373c;
               border-radius: 9999px;
               box-shadow: none;
               text-decoration: none;
               padding: calc(.667em + 2px) calc(1.333em + 2px);
               font-size: 1.125em
           }
    
           .wp-block-file__button {
               background: #32373c;
               color: #fff;
               text-decoration: none
           }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
               --wp--preset--color--black: #000000;
               --wp--preset--color--cyan-bluish-gray: #abb8c3;
               --wp--preset--color--white: #ffffff;
               --wp--preset--color--pale-pink: #f78da7;
               --wp--preset--color--vivid-red: #cf2e2e;
               --wp--preset--color--luminous-vivid-orange: #ff6900;
               --wp--preset--color--luminous-vivid-amber: #fcb900;
               --wp--preset--color--light-green-cyan: #7bdcb5;
               --wp--preset--color--vivid-green-cyan: #00d084;
               --wp--preset--color--pale-cyan-blue: #8ed1fc;
               --wp--preset--color--vivid-cyan-blue: #0693e3;
               --wp--preset--color--vivid-purple: #9b51e0;
               --wp--preset--color--theme-primary: #e36d60;
               --wp--preset--color--theme-secondary: #41848f;
               --wp--preset--color--theme-red: #C0392B;
               --wp--preset--color--theme-green: #27AE60;
               --wp--preset--color--theme-blue: #2980B9;
               --wp--preset--color--theme-yellow: #F1C40F;
               --wp--preset--color--theme-black: #1C2833;
               --wp--preset--color--theme-grey: #95A5A6;
               --wp--preset--color--theme-white: #ECF0F1;
               --wp--preset--color--custom-daylight: #97c0b7;
               --wp--preset--color--custom-sun: #eee9d1;
               --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
               --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
               --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
               --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
               --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
               --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
               --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
               --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
               --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
               --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
               --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
               --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
               --wp--preset--font-size--small: 16px;
               --wp--preset--font-size--medium: 25px;
               --wp--preset--font-size--large: 31px;
               --wp--preset--font-size--x-large: 42px;
               --wp--preset--font-size--larger: 39px;
               --wp--preset--spacing--20: 0.44rem;
               --wp--preset--spacing--30: 0.67rem;
               --wp--preset--spacing--40: 1rem;
               --wp--preset--spacing--50: 1.5rem;
               --wp--preset--spacing--60: 2.25rem;
               --wp--preset--spacing--70: 3.38rem;
               --wp--preset--spacing--80: 5.06rem;
               --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
               --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
               --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
               --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
               --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
           }
    
           :where(.is-layout-flex) {
               gap: 0.5em;
           }
    
           :where(.is-layout-grid) {
               gap: 0.5em;
           }
    
           body .is-layout-flex {
               display: flex;
           }
    
           body .is-layout-flex {
               flex-wrap: wrap;
               align-items: center;
           }
    
           body .is-layout-flex>* {
               margin: 0;
           }
    
           body .is-layout-grid {
               display: grid;
           }
    
           body .is-layout-grid>* {
               margin: 0;
           }
    
           :where(.wp-block-columns.is-layout-flex) {
               gap: 2em;
           }
    
           :where(.wp-block-columns.is-layout-grid) {
               gap: 2em;
           }
    
           :where(.wp-block-post-template.is-layout-flex) {
               gap: 1.25em;
           }
    
           :where(.wp-block-post-template.is-layout-grid) {
               gap: 1.25em;
           }
    
           .has-black-color {
               color: var(--wp--preset--color--black) !important;
           }
    
           .has-cyan-bluish-gray-color {
               color: var(--wp--preset--color--cyan-bluish-gray) !important;
           }
    
           .has-white-color {
               color: var(--wp--preset--color--white) !important;
           }
    
           .has-pale-pink-color {
               color: var(--wp--preset--color--pale-pink) !important;
           }
    
           .has-vivid-red-color {
               color: var(--wp--preset--color--vivid-red) !important;
           }
    
           .has-luminous-vivid-orange-color {
               color: var(--wp--preset--color--luminous-vivid-orange) !important;
           }
    
           .has-luminous-vivid-amber-color {
               color: var(--wp--preset--color--luminous-vivid-amber) !important;
           }
    
           .has-light-green-cyan-color {
               color: var(--wp--preset--color--light-green-cyan) !important;
           }
    
           .has-vivid-green-cyan-color {
               color: var(--wp--preset--color--vivid-green-cyan) !important;
           }
    
           .has-pale-cyan-blue-color {
               color: var(--wp--preset--color--pale-cyan-blue) !important;
           }
    
           .has-vivid-cyan-blue-color {
               color: var(--wp--preset--color--vivid-cyan-blue) !important;
           }
    
           .has-vivid-purple-color {
               color: var(--wp--preset--color--vivid-purple) !important;
           }
    
           .has-black-background-color {
               background-color: var(--wp--preset--color--black) !important;
           }
    
           .has-cyan-bluish-gray-background-color {
               background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
           }
    
           .has-white-background-color {
               background-color: var(--wp--preset--color--white) !important;
           }
    
           .has-pale-pink-background-color {
               background-color: var(--wp--preset--color--pale-pink) !important;
           }
    
           .has-vivid-red-background-color {
               background-color: var(--wp--preset--color--vivid-red) !important;
           }
    
           .has-luminous-vivid-orange-background-color {
               background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
           }
    
           .has-luminous-vivid-amber-background-color {
               background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
           }
    
           .has-light-green-cyan-background-color {
               background-color: var(--wp--preset--color--light-green-cyan) !important;
           }
    
           .has-vivid-green-cyan-background-color {
               background-color: var(--wp--preset--color--vivid-green-cyan) !important;
           }
    
           .has-pale-cyan-blue-background-color {
               background-color: var(--wp--preset--color--pale-cyan-blue) !important;
           }
    
           .has-vivid-cyan-blue-background-color {
               background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
           }
    
           .has-vivid-purple-background-color {
               background-color: var(--wp--preset--color--vivid-purple) !important;
           }
    
           .has-black-border-color {
               border-color: var(--wp--preset--color--black) !important;
           }
    
           .has-cyan-bluish-gray-border-color {
               border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
           }
    
           .has-white-border-color {
               border-color: var(--wp--preset--color--white) !important;
           }
    
           .has-pale-pink-border-color {
               border-color: var(--wp--preset--color--pale-pink) !important;
           }
    
           .has-vivid-red-border-color {
               border-color: var(--wp--preset--color--vivid-red) !important;
           }
    
           .has-luminous-vivid-orange-border-color {
               border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
           }
    
           .has-luminous-vivid-amber-border-color {
               border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
           }
    
           .has-light-green-cyan-border-color {
               border-color: var(--wp--preset--color--light-green-cyan) !important;
           }
    
           .has-vivid-green-cyan-border-color {
               border-color: var(--wp--preset--color--vivid-green-cyan) !important;
           }
    
           .has-pale-cyan-blue-border-color {
               border-color: var(--wp--preset--color--pale-cyan-blue) !important;
           }
    
           .has-vivid-cyan-blue-border-color {
               border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
           }
    
           .has-vivid-purple-border-color {
               border-color: var(--wp--preset--color--vivid-purple) !important;
           }
    
           .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
               background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
           }
    
           .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
               background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
           }
    
           .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
               background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
           }
    
           .has-luminous-vivid-orange-to-vivid-red-gradient-background {
               background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
           }
    
           .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
               background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
           }
    
           .has-cool-to-warm-spectrum-gradient-background {
               background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
           }
    
           .has-blush-light-purple-gradient-background {
               background: var(--wp--preset--gradient--blush-light-purple) !important;
           }
    
           .has-blush-bordeaux-gradient-background {
               background: var(--wp--preset--gradient--blush-bordeaux) !important;
           }
    
           .has-luminous-dusk-gradient-background {
               background: var(--wp--preset--gradient--luminous-dusk) !important;
           }
    
           .has-pale-ocean-gradient-background {
               background: var(--wp--preset--gradient--pale-ocean) !important;
           }
    
           .has-electric-grass-gradient-background {
               background: var(--wp--preset--gradient--electric-grass) !important;
           }
    
           .has-midnight-gradient-background {
               background: var(--wp--preset--gradient--midnight) !important;
           }
    
           .has-small-font-size {
               font-size: var(--wp--preset--font-size--small) !important;
           }
    
           .has-medium-font-size {
               font-size: var(--wp--preset--font-size--medium) !important;
           }
    
           .has-large-font-size {
               font-size: var(--wp--preset--font-size--large) !important;
           }
    
           .has-x-large-font-size {
               font-size: var(--wp--preset--font-size--x-large) !important;
           }
    
           .wp-block-navigation a:where(:not(.wp-element-button)) {
               color: inherit;
           }
    
           :where(.wp-block-post-template.is-layout-flex) {
               gap: 1.25em;
           }
    
           :where(.wp-block-post-template.is-layout-grid) {
               gap: 1.25em;
           }
    
           :where(.wp-block-columns.is-layout-flex) {
               gap: 2em;
           }
    
           :where(.wp-block-columns.is-layout-grid) {
               gap: 2em;
           }
    
           .wp-block-pullquote {
               font-size: 1.5em;
               line-height: 1.6;
           }
    </style>
    <!-- <link rel='stylesheet' id='contact-form-7-css' href='../../resources/content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
   <link rel='stylesheet' id='layout-general-css' href='../../resources/content/plugins/iqonic-layouts/includes/Elementor/assets/css/general.css' type='text/css' media='all' />
   <link rel='stylesheet' id='masvideos-general-css' href='../content/plugins/masvideos/assets/css/masvideos.css' type='text/css' media='all' />
   <link rel='stylesheet' id='pmpro_frontend-css' href='../content/plugins/paid-memberships-pro/css/frontend.css' type='text/css' media='screen' />
   <link rel='stylesheet' id='pmpro_print-css' href='../content/plugins/paid-memberships-pro/css/print.css' type='text/css' media='print' />
   <link rel='stylesheet' id='redux-extendify-styles-css' href='../content/plugins/streamit-extensions/includes/ReduxCore/assets/css/extendify-utilities.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof-css' href='../content/plugins/woocommerce-products-filter/css/front.css' type='text/css' media='all' />
    -->
    <style id='woof-inline-css' type='text/css'>
        .woof_products_top_panel li span,
           .woof_products_top_panel2 li span {
               background: url(https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/img/delete.png);
               background-size: 14px 14px;
               background-repeat: no-repeat;
               background-position: right;
           }
    
           .woof_edit_view {
               display: none;
           }
    
           .woof_price_search_container .price_slider_amount button.button {
               display: none;
           }
    
           /***** END: hiding submit button of the price slider ******/
    </style>

    <!-- <link rel='stylesheet' id='chosen-drop-down-css' href='../content/plugins/woocommerce-products-filter/js/chosen/chosen.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='icheck-jquery-color-flat-css' href='../content/plugins/woocommerce-products-filter/js/icheck/skins/flat/_all.css' type='text/css' media='all' />
   <link rel='stylesheet' id='icheck-jquery-color-square-css' href='../content/plugins/woocommerce-products-filter/js/icheck/skins/square/_all.css' type='text/css' media='all' />
   <link rel='stylesheet' id='icheck-jquery-color-minimal-css' href='../content/plugins/woocommerce-products-filter/js/icheck/skins/minimal/_all.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_by_author_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/by_author/css/by_author.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_by_instock_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/by_instock/css/by_instock.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_by_onsales_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/by_onsales/css/by_onsales.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_by_text_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/by_text/assets/css/front.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_label_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/label/css/html_types/label.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_select_radio_check_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/select_radio_check/css/html_types/select_radio_check.css' type='text/css'
       media='all' />
   <link rel='stylesheet' id='woof_sd_html_items_checkbox-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/checkbox.css' type='text/css' media='all'
   />
   <link rel='stylesheet' id='woof_sd_html_items_radio-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/radio.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_sd_html_items_switcher-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/switcher.css' type='text/css' media='all'
   />
   <link rel='stylesheet' id='woof_sd_html_items_color-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/elements/color.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_sd_html_items_tooltip-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/tooltip.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_sd_html_items_front-css' href='../content/plugins/woocommerce-products-filter/ext/smart_designer/css/front.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof_turbo_mode_html_items-css' href='../content/plugins/woocommerce-products-filter/ext/turbo_mode/css/turbo_mode.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woof-switcher23-css' href='../content/plugins/woocommerce-products-filter/css/switcher.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woocommerce-layout-css' href='../content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woocommerce-smallscreen-css' href='../content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'
   />
   <link rel='stylesheet' id='woocommerce-general-css' href='../content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
    -->
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
               visibility: visible;
           }
    </style>
    <!-- <link rel='stylesheet' id='wp-ulike-css' href='../content/plugins/wp-ulike/assets/css/wp-ulike.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='slick-css' href='../content/plugins/woo-smart-quick-view/assets/libs/slick/slick.css' type='text/css' media='all' />
   <link rel='stylesheet' id='perfect-scrollbar-css' href='../content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='perfect-scrollbar-wpc-css' href='../content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme.css' type='text/css' media='all' />
   <link rel='stylesheet' id='magnific-popup-css' href='../content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woosq-feather-css' href='../content/plugins/woo-smart-quick-view/assets/libs/feather/feather.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woosq-frontend-css' href='../content/plugins/woo-smart-quick-view/assets/css/frontend.css' type='text/css' media='all' />
   <link rel='stylesheet' id='wp-rig-fonts-css' href='../../fonts.googleapis.com/' type='text/css' media='all' />
   <link rel='stylesheet' id='select2-css' href='../content/plugins/masvideos/assets/css/select2.css' type='text/css' media='all' /> -->
    <link rel='stylesheet' id='bootstrap-css' href='../content/themes/streamit-theme/assets/css/vendor/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-rig-font-awesome-css' href='../content/themes/streamit-theme/assets/css/vendor/font-awesome/css/all.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-min-css' href='../content/themes/streamit-theme/assets/css/vendor/animate.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-rig-style-css' href='../content/themes/streamit-theme/assets/css/streamit-style.min.css' type='text/css' media='all' />
    <style id='wp-rig-style-inline-css' type='text/css'>
        body.iq-container-width .container,
           body.iq-container-width .elementor-section.elementor-section-boxed>.elementor-container {
               max-width: 87.5em;
           }
    
           #loading {
               background: #000 !important;
           }
    
           .big-title,
           .top-ten .top_ten_numbers {
               background: url(https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/images/redux/texture.jpg);
               -webkit-background-clip: text;
               -moz-background-clip: text;
               background-clip: text;
           }
    
           @media screen and (max-width:1280px) and (min-width:1200px) {
               [dir="rtl"] .widget-nav-menu .navbar.deafult-header ul li .sub-menu li:first-child {
                   margin-right: 0;
               }
           }
    </style>
    <link rel='stylesheet' id='wp-rig-responsive-css' href='../content/themes/streamit-theme/assets/css/streamit-responsive.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-rig-menu-burger-css' href='../content/themes/streamit-theme/assets/css/burger-menu.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-rig-select2-css' href='../content/themes/streamit-theme/assets/css/select2.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-rig-woocommerce-css' href='../content/themes/streamit-theme/assets/css/woocommerce.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='css_prefix-swiper-bundle-css' href='../content/themes/streamit-theme/assets/css/vendor/swiper-bundle.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='css_prefix-swiper-general-css' href='../content/themes/streamit-theme/assets/css/swiper-general.min.css' type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='elementor-icons-css' href='../content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-frontend-css' href='../content/plugins/elementor/assets/css/frontend-lite.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='swiper-css' href='../content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-6-css' href='../content/uploads/elementor/css/post-6.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-global-css' href='../content/uploads/elementor/css/global.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-19238-css' href='../content/uploads/elementor/css/post-19238.css' type='text/css' media='all' />
   <link rel='stylesheet' id='custom-layout-css' href='../content/plugins/iqonic-layouts/includes/Elementor/assets/css/custom-layouts.css' type='text/css' media='all' />
   <link rel='stylesheet' id='ionicons.min.css-css' href='../content/plugins/streamit-extensions/includes/Elementor/assets/css/ionicons.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='owl-carousel-css' href='../content/plugins/streamit-extensions/includes/Elementor/assets/css/owl.carousel.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='iqonic-post-19238-css' href='../content/uploads/wp-rig/css/iqonic-post-19238.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='google-fonts-1-css' href='../../fonts.googleapis.com/'>
      
   <link rel='stylesheet' id='elementor-icons-shared-0-css' href='../content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='../content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css' type='text/css' media='all' />
    -->
    <link rel="preconnect" href="../../fonts.gstatic.com/" crossorigin>

    <meta name="generator" content="Redux 4.4.11" />
    <!-- Sharable Meta -->
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Home Style" />
    <meta property="og:url" content="https://resources/pages/index/" />
    <meta property="og:description" content="War For The Planet 4.7 Action 2hr : 20mins When a rogue army of humans kills Caesar&#8217;s wife and son, he sets out to exact revenge. But his quest for retribution reveals his darker instincts even as he makes a startling discovery. Genres Sci-Fi Tags Action, Assassin, Thriller Stream Now Watch Trailer Bumblebee 3.4 Action [&hellip;]"
    />
    <meta property="article:published_time" content="2023-05-08 06:16:53" />
    <meta property="article:modified_time" content="2023-11-08 04:43:59" />
    <meta property="og:site_name" content="Streamit" />
    <meta property="og:image" content="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/screenshot.png" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:text:title" content="Home Style" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name='setting_options' data-version='3.4.3' data-path='https://resources/content/themes/streamit-theme/assets/css/vendor/'></meta>
    <noscript>
        <style>
            .woocommerce-product-gallery{ opacity: 1 !important; }
        </style>
    </noscript>
    <meta name="generator" content="Elementor 3.22.3; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
</head>


<body class="pmpro-login page-template page-template-elementor_header_footer page page-id-8228 wp-embed-responsive iq-container-width theme-streamit-theme masvideos-js pmpro-body-has-access woocommerce-js has-sidebar css_prefix-custom-header elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-8228 css_prefix-header-banner-hide e--ua-blink e--ua-chrome e--ua-webkit"
data-elementor-device-mode="tablet">
    <div id="loading" style="display: none;">
        <div id="loading-center">
            <img src="../content/themes/streamit-theme/assets/images/redux/loader.gif" alt="loader">
        </div>
    </div>


    <div id="page" class="site streamit">
        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>

        <div class="site-content-contain">
            <div id="content" class="site-content">
                <div data-elementor-type="wp-page" data-elementor-id="8228" class="elementor elementor-8228">
                    <div class="elementor-section elementor-top-section elementor-element elementor-element-5b7eb3f elementor-section-full_width elementor-section-height-min-height elementor-section-stretched elementor-section-content-middle elementor-section-height-default elementor-section-items-middle"
                    data-id="5b7eb3f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 100%;height: 100%; left: 0px;">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9bb409b layouts-column-align-inherit layouts-section-position-none" data-id="9bb409b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="hf-elementor-layout elementor-element elementor-element-53667d2 elementor-widget elementor-widget-shortcode" data-id="53667d2" data-element_type="widget" data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">
                                                <div class="pmpro_login_wrap">
                                                    <!-- <script>
           document.addEventListener("DOMContentLoaded", function () {
                   jQuery(".mo_btn-mo").prop("disabled",false);
                   });
        </script> 
               <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
               jQuery(document).ready(function () {
               jQuery(".login-button").css("cursor", "pointer");
           });
                           });
        function mo_openid_on_consent_change(checkbox){
           if (! checkbox.checked) {
              jQuery('#mo_openid_consent_checkbox').val(1);
              jQuery(".mo_btn-mo").attr("disabled", true);
              jQuery(".login-button").addClass("dis");
           } else {
              jQuery('#mo_openid_consent_checkbox').val(0);
              jQuery(".mo_btn-mo").attr("disabled", false);
              jQuery(".login-button").removeClass("dis");
           }
        }

        var perfEntries = performance.getEntriesByType("navigation");

        if (perfEntries[0].type === "back_forward") {
           location.reload(true);
        }
        function HandlePopupResult(result) {
           window.location = "https://resources";
        }
        function moOpenIdLogin(app_name,is_custom_app) {
           var current_url = window.location.href;
           var cookie_name = "redirect_current_url";
           var d = new Date();
           d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
           var expires = "expires="+d.toUTCString();
           document.cookie = cookie_name + "=" + current_url + ";" + expires + ";path=/";

                       var base_url = 'https://resources';
           var request_uri = '/product/wp/streamit/login/';
           var http = 'https://';
           var http_host = 'wordpress.iqonic.design';
           var default_nonce = '705c57a99a';
           var custom_nonce = '4392da223b';
           if(is_custom_app == 'false'){
              if ( request_uri.indexOf('wp-login.php') !=-1){
                 var redirect_url = base_url + '/?option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';

              }else {
                 var redirect_url = http + http_host + request_uri;
                 if(redirect_url.indexOf('?') != -1){
                    redirect_url = redirect_url +'&option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';
                 }
                 else
                 {
                    redirect_url = redirect_url +'?option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';
                 }
              }

           }
           else {
              if ( request_uri.indexOf('wp-login.php') !=-1){
                 var redirect_url = base_url + '/?option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';


              }else {
                 var redirect_url = http + http_host + request_uri;
                 if(redirect_url.indexOf('?') != -1)
                    redirect_url = redirect_url +'&option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';
                 else
                    redirect_url = redirect_url +'?option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';
              }

           }
           if( 0) {
              var myWindow = window.open(redirect_url + app_name, "", "width=700,height=620");
           }
           else{
              window.location.href = redirect_url + app_name;
           }
        }
     </script>  -->
                                                    <form id="loginform" action="{{route('login')}}" method="post">
                                                        @csrf
                                                        <a class="logo-link" href="../pages/index.html"><img decoding="async" class="img-fluid logo" src="../content/themes/streamit-theme/assets/images/logo.png" alt="wp-rig"></a>
                                                        <input type="hidden" name="pmpro_login_form_used" value="1">
                                                        <p class="login-username">
                                                            <label for="user_login">Username or Email Address</label>
                                                            <input type="text" name="email" id="user_login" autocomplete="username" class="input" value="" size="20">
                                                        </p>
                                                        <p class="login-password">
                                                            <label for="user_pass">Password</label>
                                                            <input type="password" name="password" id="user_pass" autocomplete="current-password" spellcheck="false" class="input" value="" size="20"><i class="password_toogle show_password fas fa-eye"></i>
                                                        </p>
                                                        <div class="custom-links mt-0">
                                                            <a href="../pages/forgetpassword.html " class="iq-sub-card setting-dropdown">
                                                                <h6 class="mb-0 ">Forgot Password?</h6>
                                                            </a>
                                                        </div>
                                                        <p class="login-remember">
                                                            <label>
                                                                <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember Me</label>
                                                        </p>
                                                        <p class="login-submit">
                                                            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In">
                                                            <input type="hidden" name="redirect_to" value="">
                                                        </p>
                                                        <div class="login-form-bottom">
                                                            <!-- <div class="d-flex justify-content-center align-items-center links">New to Streamit?
           <a href="../pages/Register.html" class="iq-sub-card setting-dropdown  ml-2">
           <h6 class="mb-0 "> Sign Up</h6>
           </a>
           </div> -->
                                                            <!-- <div class="css_prefix-seperator">
           <span class="line-1"></span>
           <span class="or-section">OR </span>
           <span class="line-2"></span>
        </div> -->
                                                            <!-- <div class="css_prefix-social-login-section">
                                                                <div class="mo-openid-app-icons">
                                                                    <p style="color:#000000; width: fit-content;"> </p><a class=" login-button " title="  Google" onclick="moOpenIdLogin('google','true');" style="cursor: pointer;"><i style="margin-top: 10px; background: rgb(219, 68, 55); text-align: center; padding-top: 8px; color: white; width: 45px !important; height: 45px !important; margin-left: 8px !important; font-size: 29px !important; cursor: pointer;" class="fab fa-google  mo_btn-mo mo_openid-login-button login-button mo_btn_transform_i  circle"></i></a>
                                                                    <a
                                                                    class=" login-button" title="  linkedin" onclick="moOpenIdLogin('linkedin','true');" style="cursor: pointer;"><i style="margin-top: 10px; background: rgb(0, 123, 182); text-align: center; padding-top: 8px; color: white; width: 45px !important; height: 45px !important; margin-left: 8px !important; font-size: 29px !important; cursor: pointer;"
                                                                        class="fab fa-linkedin  mo_btn-mo mo_openid-login-button login-button mo_btn_transform_i  circle"></i></a><a class=" login-button" title="  amazon" onclick="moOpenIdLogin('amazon','true');"
                                                                        style="cursor: pointer;"><i style="margin-top: 10px; background: rgb(255, 153, 0); text-align: center; padding-top: 8px; color: white; width: 45px !important; height: 45px !important; margin-left: 8px !important; font-size: 29px !important; cursor: pointer;" class="fab fa-amazon  mo_btn-mo mo_openid-login-button login-button mo_btn_transform_i  circle"></i></a></div>
                                                                <br>
                                                            </div> -->
                                                        </div>
                                                    </form>
                                                    <hr>
                                                    <p class="pmpro_actions_nav">
                                                    </p>
                                                    <!-- end pmpro_actions_nav -->
                                                </div>
                                                <!-- end pmpro_login_wrap -->
                                                <script>
                                                    document.getElementById('user_login').focus();
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .site-content-contain -->
        </div>
        <!-- #page -->

        <!-- === back-to-top === -->
        <div id="back-to-top" style="opacity: 0;">
            <a class="top" id="top" href="#top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
        <!-- === back-to-top End === -->

    </div>
    <!-- #page -->

    <!-- Memberships powered by Paid Memberships Pro v3.0.6. -->
    <!-- <script type="text/javascript">
       var c = document.body.className;
       c = c.replace(/masvideos-no-js/, 'masvideos-js');
       document.body.className = c;
   </script>
      <script type="text/javascript">
     (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
     })();
  </script> -->

    <!-- 
<link rel="stylesheet" id="wc-blocks-style-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.0.2" type="text/css" media="all">
<link rel="stylesheet" id="woof_sections_style-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/ext/sections/css/sections.css?ver=1.3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="woof_tooltip-css-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/js/tooltip/css/tooltipster.bundle.min.css?ver=1.3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="woof_tooltip-css-noir-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/js/tooltip/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-noir.min.css?ver=1.3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="ion.range-slider-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/js/ion.range-slider/css/ion.rangeSlider.css?ver=1.3.6.1" type="text/css" media="all">


<link rel="stylesheet" id="mo-openid-sl-wp-font-awesome-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/miniorange-login-openid/includes/css/mo-font-awesome.min.css?ver=6.5.5" type="text/css" media="all">
<link rel="stylesheet" id="mo-wp-style-icon-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/miniorange-login-openid/includes/css/mo_openid_login_icons.css?version=7.6.8&amp;ver=6.5.5" type="text/css" media="all">
<link rel="stylesheet" id="mo-wp-bootstrap-social-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/miniorange-login-openid/includes/css/bootstrap-social.css?ver=6.5.5" type="text/css" media="all">
<link rel="stylesheet" id="mo-wp-bootstrap-main-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/miniorange-login-openid/includes/css/bootstrap.min-preview.css?ver=6.5.5" type="text/css" media="all">
<link rel="stylesheet" id="woof-front-builder-css-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/ext/front_builder/css/front-builder.css?ver=1.3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="woof-slideout-tab-css-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/ext/slideout/css/jquery.tabSlideOut.css?ver=1.3.6.1" type="text/css" media="all">
<link rel="stylesheet" id="woof-slideout-css-css" href="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/ext/slideout/css/slideout.css?ver=1.3.6.1" type="text/css" media="all"> -->

    <!-- <script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0" id="jquery-selectBox-js"></script>
<script type="text/javascript" src="//wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6" id="prettyPhoto-js" data-wp-strategy="defer"></script>
<script type="text/javascript" id="jquery-yith-wcwl-js-extra">
/* <![CDATA[ */
var yith_wcwl_l10n = {"ajax_url":"\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","yith_wcwl_button_position":"shortcode","multi_wishlist":"","hide_add_button":"1","enable_ajax_loading":"","ajax_loader_url":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg","remove_from_wishlist_after_add_to_cart":"1","is_wishlist_responsive":"1","time_to_close_prettyphoto":"3000","fragments_index_glue":".","reload_on_found_variation":"1","mobile_media_query":"768","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies on your browser are enabled.","added_to_cart_message":"<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem","load_mobile_action":"load_mobile","delete_item_action":"delete_item","save_title_action":"save_title","save_privacy_action":"save_privacy","load_fragments":"load_fragments"},"nonce":{"add_to_wishlist_nonce":"ef101bdee5","remove_from_wishlist_nonce":"67bfd9e040","reload_wishlist_and_adding_elem_nonce":"8c366af6f4","load_mobile_nonce":"3218cb66f4","delete_item_nonce":"97ef3ec596","save_title_nonce":"45e2dadac1","save_privacy_nonce":"07c57fadc8","load_fragments_nonce":"60a190e7de"},"redirect_after_ask_estimate":"","ask_estimate_redirect_url":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js?ver=3.35.0" id="jquery-yith-wcwl-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.6" id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.6" id="contact-form-7-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/iqonic-layouts/includes/Elementor/assets/js/general.js?ver=1.2.1" id="layout-general-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/frontend/popper.min.js?ver=1.2.8" id="popper-js"></script>
<script type="text/javascript" id="masvideos-playlist-tv-show-js-extra">
/* <![CDATA[ */
var masvideos_playlist_tv_show_params = {"ajax_url":"\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","masvideos_ajax_url":"\/product\/wp\/streamit\/?masvideos-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/frontend/playlist-tv-show.min.js?ver=1.2.8" id="masvideos-playlist-tv-show-js"></script>
<script type="text/javascript" id="masvideos-playlist-video-js-extra">
/* <![CDATA[ */
var masvideos_playlist_video_params = {"ajax_url":"\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","masvideos_ajax_url":"\/product\/wp\/streamit\/?masvideos-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/frontend/playlist-video.min.js?ver=1.2.8" id="masvideos-playlist-video-js"></script>
<script type="text/javascript" id="masvideos-playlist-movie-js-extra">
/* <![CDATA[ */
var masvideos_playlist_movie_params = {"ajax_url":"\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","masvideos_ajax_url":"\/product\/wp\/streamit\/?masvideos-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/frontend/playlist-movie.min.js?ver=1.2.8" id="masvideos-playlist-movie-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/frontend/gallery-flip.min.js?ver=1.2.8" id="masvideos-gallery-flip-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.0.2" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"base64":false,"ajaxurl":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.0.2" id="wc-order-attribution-js"></script>
<script type="text/javascript" id="wp_ulike-js-extra">
/* <![CDATA[ */
var wp_ulike_params = {"ajax_url":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","notifications":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/wp-ulike/assets/js/wp-ulike.min.js?ver=4.7.1" id="wp_ulike-js"></script>
<script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/product\/wp\/streamit\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=9.0.2" id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick.min.js?ver=4.0.5" id="slick-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js?ver=4.0.5" id="perfect-scrollbar-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/jquery.magnific-popup.min.js?ver=4.0.5" id="magnific-popup-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" id="woosq-frontend-js-extra">
/* <![CDATA[ */
var woosq_vars = {"ajax_url":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","nonce":"caf3c0a306","view":"popup","effect":"mfp-3d-unfold","scrollbar":"yes","auto_close":"yes","hashchange":"no","cart_redirect":"no","cart_url":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/cart\/","close":"Close (Esc)","next_prev":"yes","next":"Next (Right arrow key)","prev":"Previous (Left arrow key)","thumbnails_effect":"no","related_slick_params":"{\"slidesToShow\":2,\"slidesToScroll\":2,\"dots\":true,\"arrows\":false,\"adaptiveHeight\":true,\"rtl\":false}","thumbnails_slick_params":"{\"slidesToShow\":1,\"slidesToScroll\":1,\"dots\":true,\"arrows\":true,\"adaptiveHeight\":false,\"rtl\":false}","thumbnails_zoom_params":"{\"duration\":120,\"magnify\":1}","quick_view":"0"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woo-smart-quick-view/assets/js/frontend.js?ver=4.0.5" id="woosq-frontend-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/vendor/slick/slick.min.js?ver=3.4.3" id="slick-min-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/vendor/slick/slick-animation.min.js?ver=3.4.3" id="slick-animation-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/masvideos/assets/js/select2/select2.full.min.js?ver=4.0.3" id="select2-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/vendor/bootstrap.min.js?ver=3.4.3" id="bootstrap-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/custom.min.js?ver=3.4.3" id="js_prefix-custom-js" defer="defer" data-wp-strategy="defer"></script>

<script type="text/javascript" id="js_prefix-loadmore-js-extra">
/* <![CDATA[ */
var streamit_loadmore_params = {"ajaxurl":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-admin\/admin-ajax.php","posts":"{\"page\":0,\"pagename\":\"login\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"login\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}","query":"{\"page\":\"\",\"pagename\":\"login\"}","current_page":"1","max_page":"0","template_dir":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-content\/themes\/streamit-theme","version":"3.4.3","query1":"{\"page\":\"\",\"pagename\":\"login\"}"};
/* ]]> */
</script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/loadmore.min.js?ver=3.4.3" id="js_prefix-loadmore-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/vendor/select2.min.js?ver=3.4.3" id="select2-wp-rig-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/streamit-extensions/includes/Elementor/assets/js/superfish.js?ver=3.4.3" id="superfish-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/uploads/wp-rig/js/iqonic-post-8228.min.js?ver=3.4.3" id="iqonic-post-8228-js" async="async" data-wp-strategy="async"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/themes/streamit-theme/assets/js/customization.min.js?ver=3.4.3" id="js_prefix-customization-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/js/tooltip/js/tooltipster.bundle.min.js?ver=1.3.6.1" id="woof_tooltip-js-js"></script>
<script type="text/javascript" src="https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/js/icheck/icheck.min.js?ver=1.3.6.1" id="icheck-jquery-js"></script>
<script type="text/javascript" id="woof_front-js-extra">
/* <![CDATA[ */
var woof_filter_titles = {"product_cat":"Product categories","by_price":"by_price","pa_size":"Product Size"};
var woof_ext_filter_titles = {"woof_author":"By author","stock":"In stock","onsales":"On sale","byrating":"By rating","woof_text":"By text"};
/* ]]> */
</script>
<script type="text/javascript" id="woof_front-js-before">
/* <![CDATA[ */
       const woof_front_nonce = "86638e68ee";
       var woof_is_permalink =1;
       var woof_shop_page = "";
               var woof_m_b_container =".woocommerce-products-header";
       var woof_really_curr_tax = {};
       var woof_current_page_link = location.protocol + '//' + location.host + location.pathname;
       /*lets remove pagination from woof_current_page_link*/
       woof_current_page_link = woof_current_page_link.replace(/\page\/[0-9]+/, "");
                       woof_current_page_link = "https://wordpress.iqonic.design/product/wp/streamit/shop-page/";
                       var woof_link = 'https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/';
       
       var woof_ajaxurl = "https://wordpress.iqonic.design/product/wp/streamit/wp-admin/admin-ajax.php";

       var woof_lang = {
       'orderby': "orderby",
       'date': "date",
       'perpage': "per page",
       'pricerange': "price range",
       'menu_order': "menu order",
       'popularity': "popularity",
       'rating': "rating",
       'price': "price low to high",
       'price-desc': "price high to low",
       'clear_all': "Clear All",
       'list_opener': "Сhild list opener",
       };

       if (typeof woof_lang_custom == 'undefined') {
       var woof_lang_custom = {};/*!!important*/
       }

       var woof_is_mobile = 0;
       


       var woof_show_price_search_button = 0;
       var woof_show_price_search_type = 0;
       
       var woof_show_price_search_type = 1;
       var swoof_search_slug = "swoof";

       
       var icheck_skin = {};
                               icheck_skin.skin = "flat";
           icheck_skin.color = "grey";
       
       var woof_select_type = 'chosen';


               var woof_current_values = '[]';
               var woof_lang_loading = "Loading ...";

       
       var woof_lang_show_products_filter = "show products filter";
       var woof_lang_hide_products_filter = "hide products filter";
       var woof_lang_pricerange = "price range";

       var woof_use_beauty_scroll =1;

       var woof_autosubmit =1;
       var woof_ajaxurl = "https://wordpress.iqonic.design/product/wp/streamit/wp-admin/admin-ajax.php";
       /*var woof_submit_link = "";*/
       var woof_is_ajax = 0;
       var woof_ajax_redraw = 0;
       var woof_ajax_page_num =1;
       var woof_ajax_first_done = false;
       var woof_checkboxes_slide_flag = 1;


       /*toggles*/
       var woof_toggle_type = "text";

       var woof_toggle_closed_text = "+";
       var woof_toggle_opened_text = "-";

       var woof_toggle_closed_image = "https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/img/plus.svg";
       var woof_toggle_opened_image = "https://wordpress.iqonic.design/product/wp/streamit/wp-content/plugins/woocommerce-products-filter/img/minus.svg";


       /*indexes which can be displayed in red buttons panel*/
               var woof_accept_array = ["min_price", "orderby", "perpage", "woof_author","stock","onsales","byrating","woof_text","min_rating","product_visibility","product_cat","product_tag","pa_color","pa_size"];

       
       /*for extensions*/

       var woof_ext_init_functions = null;
                   woof_ext_init_functions = '{"by_author":"woof_init_author","by_instock":"woof_init_instock","by_onsales":"woof_init_onsales","by_text":"woof_init_text","label":"woof_init_labels","select_radio_check":"woof_init_select_radio_check"}';
       

       
       var woof_overlay_skin = "default";

       
function woof_js_after_ajax_done() { jQuery(document).trigger('woof_ajax_done'); 

}
var woof_front_sd_is_a=1;var woof_front_show_notes=1;var woof_lang_front_builder_del="Are you sure you want to delete this filter-section?";var woof_lang_front_builder_options="Options";var woof_lang_front_builder_option="Option";var woof_lang_front_builder_section_options="Section Options";var woof_lang_front_builder_description="Description";var woof_lang_front_builder_close="Close";var woof_lang_front_builder_suggest="Suggest the feature";var woof_lang_front_builder_good_to_use="good to use in content areas";var woof_lang_front_builder_confirm_sd="Smart Designer item will be created and attached to this filter section and will cancel current type, proceed?";var woof_lang_front_builder_creating="Creating";var woof_lang_front_builder_shortcode="Shortcode";var woof_lang_front_builder_layout="Layout";var woof_lang_front_builder_filter_section="Section options";var woof_lang_front_builder_filter_redrawing="filter redrawing";var woof_lang_front_builder_filter_redrawn="redrawn";var woof_lang_front_builder_filter_redrawn="redrawn";var woof_lang_front_builder_title_top_info="this functionality is only visible for the site administrator";var woof_lang_front_builder_title_top_info_demo="demo mode is activated, and results are visible only to you";;var woof_lang_front_builder_select="+ Add filter section";
/* ]]> */
</script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/front.js" id="woof_front-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/html_types/radio.js" id="woof_radio_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/html_types/checkbox.js" id="woof_checkbox_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/html_types/select.js" id="woof_select_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/html_types/mselect.js" id="woof_mselect_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/by_author/js/by_author.js" id="woof_by_author_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/by_instock/js/by_instock.js" id="woof_by_instock_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/by_onsales/js/by_onsales.js" id="woof_by_onsales_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/by_text/assets/js/front.js" id="woof_by_text_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/label/js/html_types/label.js" id="woof_label_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/sections/js/sections.js" id="woof_sections_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/select_radio_check/js/html_types/select_radio_check.js" id="woof_select_radio_check_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/smart_designer/js/front.js" id="woof_sd_html_items-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/chosen/chosen.jquery.js" id="chosen-drop-down-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/js/ion.range-slider/js/ion.rangeSlider.min.js" id="ion.range-slider-js"></script>
<script type="text/javascript" src="../includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js"></script>
<script type="text/javascript" src="../includes/js/jquery/ui/mouse.min.js" id="jquery-ui-mouse-js"></script>
<script type="text/javascript" src="../includes/js/jquery/ui/slider.min.js" id="jquery-ui-slider-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js" id="wc-jquery-ui-touchpunch-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce/assets/js/accounting/accounting.min.js" id="accounting-js"></script>
<script type="text/javascript" id="wc-price-slider-js-extra">
/* <![CDATA[ */
var woocommerce_price_slider_params = {"currency_format_num_decimals":"0","currency_format_symbol":"$","currency_format_decimal_sep":".","currency_format_thousand_sep":",","currency_format":"%s%v"};
/* ]]> */
</script>
<script type="text/javascript" src="../content/plugins/woocommerce/assets/js/frontend/price-slider.min.js" id="wc-price-slider-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/slideout/js/jquery.tabSlideOut.js" id="woof-slideout-js-js"></script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/slideout/js/slideout.js" id="woof-slideout-init-js"></script>
<script type="text/javascript" src="../content/plugins/elementor/assets/js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="../content/plugins/elementor/assets/js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="../content/plugins/elementor/assets/lib/waypoints/waypoints.min.js" id="elementor-waypoints-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
/* <![CDATA[ */
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.22.3","is_static":false,"experimentalFeatures":{"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"additional_custom_breakpoints":true,"e_swiper_latest":true,"e_onboarding":true,"home_screen":true,"ai-layout":true,"landing-pages":true},"urls":{"assets":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":8228,"title":"Login%20%E2%80%93%20Streamit","excerpt":"","featuredImage":false}};
/* ]]> */
</script>
<script type="text/javascript" src="../content/plugins/elementor/assets/js/frontend.min.js" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/quick_search/js/alasql/alasql.min.js" id="woof_alasql-js"></script>
<script type="text/javascript" id="woof_turbo_mode-js-extra">
/* <![CDATA[ */
var woof_tm_data = {"link":"https:\/\/wordpress.iqonic.design\/product\/wp\/streamit\/wp-content\/uploads\/uploads_woof_turbo_mode\/data_0000_xxx.json","pre_load":"1","sale_ids":[11168,11169,11170,11172,11177,11185,13684,13698,13699,13706,13707,13709,13715],"settings":{"items_order":"product_cat,by_price,pa_size,product_visibility,product_tag,pa_color,by_text","tax_type":{"product_cat":"checkbox","pa_size":"checkbox","product_visibility":"radio","product_tag":"checkbox","pa_color":"radio"},"excluded_terms":{"product_cat":"","pa_size":"","product_visibility":"","product_tag":"","pa_color":""},"tax_block_height":{"product_cat":"0","pa_size":"0","product_visibility":"0","product_tag":"0","pa_color":"0"},"show_title_label":{"product_cat":"1","pa_size":"1","product_visibility":"0","product_tag":"1","pa_color":"0"},"show_toggle_button":{"product_cat":"0","pa_size":"0","product_visibility":"0","product_tag":"0","pa_color":"0"},"tooltip_text":{"product_cat":"","pa_size":"","product_visibility":"","product_tag":"","pa_color":""},"dispay_in_row":{"product_cat":"0","pa_size":"1","product_visibility":"0","product_tag":"0","pa_color":"0"},"orderby":{"product_cat":"-1","pa_size":"-1","product_visibility":"-1","product_tag":"-1","pa_color":"-1"},"order":{"product_cat":"ASC","pa_size":"ASC","product_visibility":"ASC","product_tag":"ASC","pa_color":"ASC"},"comparison_logic":{"product_cat":"AND","pa_size":"OR","product_visibility":"OR","product_tag":"OR","pa_color":"OR"},"custom_tax_label":{"product_cat":"Product categories","pa_size":"Product Size","product_visibility":"","product_tag":"","pa_color":""},"not_toggled_terms_count":{"product_cat":"","pa_size":"","product_visibility":"","product_tag":"","pa_color":""},"tax":{"product_cat":"1","pa_size":"1"},"by_price":{"show":"1","tooltip_text":"","show_button":"0","title_text":"Price Filter","show_toggle_button":"0","ranges":"","first_option_text":"","ion_slider_step":"0","price_tax":"0","show_text_input":"0"},"by_text":{"show":"0","title":"","placeholder":"","behavior":"title","search_by_full_word":"0","search_desc_variant":"0","autocomplete":"1","post_links_in_autocomplete":"0","how_to_open_links":"0","image":"","sku_compatibility":"0","notes_for_customer":""},"icheck_skin":"flat_grey","overlay_skin":"default","overlay_skin_bg_img":"","plainoverlay_color":"","default_overlay_skin_word":"","use_chosen":"1","use_beauty_scroll":"1","ion_slider_skin":"skinNice","use_tooltip":"1","woof_tooltip_img":"","woof_auto_hide_button_img":"","woof_auto_hide_button_txt":"","woof_auto_subcats_plus_img":"","woof_auto_subcats_minus_img":"","image_mobile_behavior_open":"","text_mobile_behavior_open":"Open filter","image_mobile_behavior_close":"","text_mobile_behavior_close":"Close filter","toggle_type":"text","toggle_opened_text":"","toggle_closed_text":"","toggle_opened_image":"","toggle_closed_image":"","custom_front_css":"","custom_css_code":"","js_after_ajax_done":"","init_only_on_reverse":"0","init_only_on":"","per_page":12,"optimize_js_files":"0","listen_catalog_visibility":"0","disable_swoof_influence":"0","cache_count_data":"0","cache_terms":"0","price_transient":"0","show_woof_edit_view":"0","custom_extensions_path":"","result_count_redraw":"","order_dropdown_redraw":"","per_page_redraw":"","woof_turbo_mode":{"enable":"1","cron_system":"0","cron_secret_key":"woof_stat_updating","wp_cron_period":"weekly","storing":"0"},"activated_extensions":["12f5ce0233d952ecdb06664da768cac9","9ee5e7f05a09d649f9d45d8603f62891","2c07856b581a471a7b7542805a208989"]},"current_tax":[],"additional_tax":[],"show_count":"1","hide_count":"0","hide_empty_term":"0","dynamic_recount":"1","file_error_nitice":"Oh no! It looks like the filter can't open the search file. Please try generating a new file in Advanced -> Turbo mode -> [Update now!]."};
/* ]]> */
</script>
<script type="text/javascript" src="../content/plugins/woocommerce-products-filter/ext/turbo_mode/js/turbo_mode.js" id="woof_turbo_mode-js"></script>
     <script type="text/javascript">
        var debounce_fn = _.debounce(fetchResults, 500, false);

        function fetchResults(input) {
           let keyword = input.value;
           if (jQuery(input).parents('header').length == 0 || keyword.length < 3) {
              return false;
           }
           let form = jQuery(input).closest("form");
           if (keyword == "") {
              form.find('.datafetch').html('');
           } else {
              jQuery.ajax({
                 url: streamit_loadmore_params.ajaxurl,
                 type: 'post',
                 data: {
                    action: 'data_fetch',
                    keyword: keyword,
                    is_include: 'posts',
                 },
                 beforeSend: function() {
                    form.find('.search_result_history').css("display", "none");
                 },
                 success: function(data) {
                    form.find('.datafetch').html(data);
                    form.find('.datafetch').css('display', 'block');
                 }
              });
           }
        }
     </script>
      -->


    <div id="woof_html_buffer" class="woof_info_popup" style="display: none;"></div>
</body>

</html>
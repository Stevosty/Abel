<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>PRODIGY HEALTHCARE</title>
    <meta name="description" content="Prodigy Healthcare is an importer, exporter and distributor of quality healthcare supplies. We are the only W.H.O Good Distribution Practices certified company in Kenya, assuring you of the quality and integrity of our products from the manufacturer right to our client.">

    <meta name="author" content="Evoke Media | 0713467781">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon" href="{{ asset("/images/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/images/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/images/favicon-16x16.png") }}">
    <link rel="manifest" href="{{ asset("/images/manifest.json") }}">
    <link rel="mask-icon" href="{{ asset("/images/safari-pinned-tab.svg") }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato:100,300,400,500,700'>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Oxygen:100,300,400,500,700'>

    <link rel="stylesheet" href="{{ asset("/css/global.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/structure.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/prodigy.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/custom.css") }}">

    <link rel="stylesheet" href="{{ asset("/plugins/rs-plugin/css/settings.css") }}">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.css">

</head>

<body class="single single-product woocommerce woocommerce-page color-custom style-default layout-full-width nice-scroll-on mobile-tb-left button-flat if-overlay if-border-hide no-content-padding header-classic minimalist-header sticky-header sticky-white ab-show subheader-both-center menuo-right menuo-no-borders footer-copy-center">

    <div id="Wrapper">

        @yield('content')

        @include('footer')
    </div>

    <script src="{{ asset("/js/jquery-2.1.4.min.js") }}"></script>
    <script src="{{ asset("/js/mfn.menu.js") }}"></script>
    <script src="{{ asset("/js/jquery.plugins.js") }}"></script>
    <script src="{{ asset("/js/jquery.jplayer.min.js") }}"></script>
    <script src="{{ asset("/js/animations/animations.js") }}"></script>
    <script src="{{ asset("/js/translate3d.js") }}"></script>
    <script src="{{ asset("/js/scripts.js") }}"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <script src="//maps.google.com/maps/api/js?key=AIzaSyCdtRoN0KPpOgj9haRJLu0fklERCdnD0X0"></script>

    <script src="{{ asset("/js/email.js") }}"></script>

    <script src="{{ asset("/js/jquery.gmap.min.js") }}"></script>

    <script src="{{ asset("/js/custom.js") }}"></script>

    @include('sweetalert::cdn')
    @include('sweetalert::view')

    @yield('rev')
    
    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-prodigy.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina-prodigy.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/retina-prodigy.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>

</body>

</html>
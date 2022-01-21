<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keywords}}">
    <meta name="author" content="Ozan SELÇUK">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('css')}}/images/favicon.ico">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS -->
    <link rel='stylesheet' href='{{asset('css')}}/global.css'>
    <link rel='stylesheet' href='{{asset('css')}}/structure.css'>
    <link rel='stylesheet' id='style-static' href='{{asset('css')}}/be_style.css'>
    <link rel='stylesheet' href='{{asset('css')}}/custom.css'>
    <link rel="stylesheet" href="{{asset('css')}}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/owl.theme.default.min.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{asset('css')}}/plugins/rs-plugin/css/settings.css">
    @stack('css')
</head>

<body class="archive    -product with_aside aside_right woocommerce woocommerce-page color-blue layout-full-width header-modern sticky-header sticky-white subheader-title-left">
@include('home._navbar')
@section('content')
@show
@livewireScripts
@include('home._footer')

<!-- JS -->

<script src="{{asset('js')}}/jquery-2.1.4.min.js"></script>
<script src="{{asset('js')}}/owl.carousel.min.js"></script>
<script src="{{asset('js')}}/main.js"></script>
<script src="{{asset('js')}}/jquery.min.js"></script>
<script src="{{asset('js')}}/mfn.menu.js"></script>
<script src="{{asset('js')}}/jquery.plugins.js"></script>
<script src="{{asset('js')}}/jquery.jplayer.min.js"></script>
<script src="{{asset('js')}}/animations/animations.js"></script>
<script src="{{asset('js')}}/email.js"></script>
<script src="{{asset('js')}}/scripts.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('js')}}/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    var tpj = jQuery;
    tpj.noConflict();
    var revapi55;
    tpj(document).ready(function() {
        revapi55 = tpj('#rev_slider_55_1').show().revolution({
            dottedOverlay:"none",
            delay: 8000,
            startwidth: 1180,
            startheight: 730,
            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 80,
            thumbAmount: 1,
            simplifyAll:"off",
            navigationType:"none",
            navigationArrows:"none",
            navigationStyle:"round",
            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",
            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,
            keyboardNavigation:"off",
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset: 0,
            navigationVOffset: 180,
            soloArrowLeftHalign:"right",
            soloArrowLeftValign:"bottom",
            soloArrowLeftHOffset: 90,
            soloArrowLeftVOffset: 40,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"bottom",
            soloArrowRightHOffset: 40,
            soloArrowRightVOffset: 40,
            shadow: 0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner3",
            stopLoop:"off",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle:"off",
            autoHeight:"off",
            forceFullWidth:"off",
            hideTimerBar:"on",
            hideThumbsOnMobile:"on",
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution: 768,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
    });
</script>

<script>
    jQuery(window).load(function() {
        var retina = window.devicePixelRatio> 1 ? true : false;
        if (retina) {
            var retinaEl = jQuery("#logo img");
            var retinaLogoW = retinaEl.width();
            var retinaLogoH = retinaEl.height();
            retinaEl.attr("src","{{asset('css')}}/images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
        }
    });
</script>

</body>

</html>

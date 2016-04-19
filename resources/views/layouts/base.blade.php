<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>莱孚士| Technology made education difference</title>
    <meta name="description" content="Agency Parallax Responsive HTML5/CSS3 Template from FIFOTHEMES.COM">
    <meta name="author" content="FIFOTHEMES.COM">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Library CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/team-member.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- Skin -->
    <link rel="stylesheet" href="{{ asset('css/colors/teal.css') }}" class="colors">

    @section('additional-CSS')
    @show

    <!--pictures-->
            <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/ico/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/ico/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/ico/apple-touch-icon-72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/ico/apple-touch-icon-114.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/ico/apple-touch-icon-144.png') }}">
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#navigation" data-offset="75">
@yield('content')

        <!-- The Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-1.0.0.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery.parallax.js') }}"></script>
<script src="{{ asset('js/jquery.hparallax.js') }}"></script>
<script src="{{ asset('js/jquery.wait.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/fappear.js') }}"></script>
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('js/jquery.maximage.js') }}"></script>
<script src="{{ asset('js/jquery.cycle.all.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.isotope.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/skrollr.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('js/jquery.nav.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.gmap.min.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('js/tytabs.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@section('additional-JS')
@show

</body>
</html>
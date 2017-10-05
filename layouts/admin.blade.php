<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-32x32.png') }}" sizes="32x32">

    <title>ECGEMMA - Admin</title>

    <!-- additional styles for plugins -->
   
        <link rel="stylesheet" href="{{ asset('components/metrics-graphics/dist/metricsgraphics.css') }}">
      
    <!-- uikit -->
    <link rel="stylesheet" href="{{ asset('components/uikit/css/uikit.almost-flat.min.css') }}" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="{{ asset('assets/icons/flags/flags.min.css') }}" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" media="all">

    @yield('stylesheets')

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    
    <!-- main header -->
    @include('admin.partage.header')
    <!-- main header end -->

    <!-- main sidebar -->
    @include('admin.partage.sidebarLeft')
    <!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">
          
           @yield('content')

        </div>
    </div>

    <!-- secondary sidebar -->
    @include('admin.partage.sidebarRight')
    <!-- secondary sidebar end -->

    <!-- google web fonts -->
    <script src="{{ asset('assets/js/fonts_google.js') }}"></script>   

    <!-- common functions -->
    <script src="{{ asset('assets/js/common.min.js') }}"></script>
    <!-- uikit functions -->
    <script src="{{ asset('assets/js/uikit_custom.min.js') }}"></script>
    <!-- altair common functions/helpers -->
    <script src="{{ asset('assets/js/altair_admin_common.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/scriptInit.js') }}"></script>

        @yield('javascripts')
</body>
</html>
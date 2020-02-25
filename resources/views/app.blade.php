<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ThemeSelect">
    <title>ArabEasy</title>
    <link rel="apple-touch-icon" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/vendors.min.css') }}">
    <!-- END: VENDOR CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/chartist-js/chartist-plugin-tooltip.css') }}"> -->

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/style.css') }}">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/dashboard-modern.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/intro.css') }}"> -->
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom/custom.css') }}">
        <!-- END: Custom CSS-->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

        <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-search.css') }}">



        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/noUiSlider/nouislider.min.css') }}">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/materialize.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/vertical-menu-nav-dark-template/style.css') }}"> -->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/eCommerce-products-page.css') }}">



    <!-- <link rel="stylesheet" href="{{ asset('app-assets/vendors/select2/select2.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('app-assets/vendors/select2/select2-materialize.css') }}" type="text/css"> -->
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <!-- <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/form-select2.min.css') }}"> -->



        <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"> -->
        
        <link rel="stylesheet" type="text/css" href="{{ asset('vendors/hover-effects/media-hover-effects.css') }}">
        

    </head>
    <!-- END: Head-->
    <body  class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark 2-columns" data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

        <div id="app">
            <app />
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/vendors.min.js') }}" type="text/javascript"></script>
        
        <script src="{{ asset('js/plugins.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/custom/custom-script.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/scripts/customizer.js') }}" type="text/javascript"></script>


        <script src="{{ asset('js/scripts/ui-alerts.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/scripts/advance-ui-modals.js') }}" type="text/javascript"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/pretty-checkbox-vue@1.1/dist/pretty-checkbox-vue.min.js"></script> -->
        
        
        
    </body>
    </html>

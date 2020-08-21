<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta content="" name="author"/>
    <meta content="###" name="description"/>
    <meta property="og:locale" content="pl_PL"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title"
          content="###"/>
    <meta property="og:description"
          content="###"/>
    <meta property="og:site_name" content="atlas "/>
    <title>JP2JMD - Panel administracyjny.</title>
    <link rel="icon" type="image/x-icon" href="{{URL::asset('assets/admin/img/logo.png')}}"/>

    <link rel="icon" href="{{URL::asset('assets/admin/img/logo.png')}}" type="image/png" sizes="16x16">
    <link rel='stylesheet' href='{{URL::asset('assets/vendor/pace/pace.css')}}'/>
    <script src='{{URL::asset('assets/vendor/pace/pace.min.js')}}'></script>
    <!--vendors-->
    <link rel='stylesheet' type='text/css' href='{{URL::asset('assets/admin/vendor/bootstrap/css/datepicker.min.css')}}'/>



    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,500,600" rel="stylesheet">
    <link rel='stylesheet' href='{{URL::asset('assets/fonts/jost/jost.css')}}'/>
    <!--Material Icons-->
    <link rel='stylesheet' type='text/css' href='{{URL::asset('assets/admin/fonts/material/materialdesignicons.min.css')}}'/>
    <!--Bootstrap + atmos Admin CSS-->
    <link rel='stylesheet' type='text/css' href='{{URL::asset('assets/admin/css/style.css')}}'/>
    <!-- Additional library for page -->
    <link rel='stylesheet' type='text/css' href='{{URL::asset('assets/admin/css/dataTables.css')}}'/>
    <!-- Nprogress CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <!-- jQuery JS -->
    <script src="{{URL::asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>


    <link rel='stylesheet' type='text/css' href='{{URL::asset('assets/admin/vendor/select2/select2.min.css')}}'/>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <style>
        .admin-sidebar:not(.sidebar-show) .ml-auto .admin-pin-sidebar{
            display:none;
        }
        a.admin-pin-sidebar svg{
            display: none;
        }
        .sidebar-show .ml-auto .admin-pin-sidebar svg{
            display: unset;
            color: white;
        }
    </style>

</head>
<body class=" page-home">
<div id="progressbar"></div>
@yield('sidebar')

<main class="admin-main">
    <!--site header begins-->
    @yield('header')

    <div id="content">

        @yield('body')
    </div>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
<script src='{{URL::asset('assets/admin/js/main.js')}}'></script>
<!--page specific scripts for demo-->
<!--Main script-->

<script src='{{URL::asset('assets/admin/js/hypedev.js')}}'></script>
<script src='{{URL::asset('assets/admin/js/dataTables.js')}}'></script>
<!--Additional Page includes-->
<script src='{{URL::asset('assets/admin/vendor/apexchart/apexchart.min.js')}}'></script>
<!--chart data for current dashboard-->
<script src='{{URL::asset('assets/admin/js/dashboard.js')}}'></script>
<script>
    init();
</script>
</body>
</html>

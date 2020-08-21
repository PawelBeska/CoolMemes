<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>JP2JmD: Strona główna</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/comment.css')}}" media="print" onload="this.media='all'">
    <link rel="prefetch" as="script" href="{{URL::asset('assets/home/js/comment.js')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/gag.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/home/css/user.css')}}" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/custom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/page.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129753787-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-129753787-2');
    </script>
</head>
<body>
<div id="progressbar"></div>

@yield('header')


<div id="container" style="padding-top: 48px;">

    @yield('sidebar')
    <div id="content">
        @yield('content')
    </div>

</div>
<div class="__cov-progress"
     style="background-color: rgb(0, 153, 255); opacity: 0; position: fixed; top: 0px; left: 0px; width: 0%; height: 4px; transition: opacity 0.4s ease 0s;"></div>


<section class="footer">
    <a class="badge-scroll-to-top back-to-top">Back to top</a>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
<script src="{{URL::asset('assets/home/js/custom.js')}}"></script>


</body>
</html>

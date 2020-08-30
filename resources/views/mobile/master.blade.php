<html lang="en">
<head>

    <title>JP2JMD: APLIKACJA MOBILNA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/mobile/css/comment.css')}}" media="print"
          onload="this.media='all'">
    <link rel="prefetch" as="script" href="{{URL::asset('assets/mobile/js/comment.js')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/mobile/css/gag.css')}}">


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
  
</head>
<body>
<div id='app'>
  <div
    style="position: fixed; width: 100vw; top: 0px; will-change: transition; transition: top 0.2s ease 0s; z-index: 8;">
@yield('header')
@yield('navbar')

<!----> <!----> <!----> <!----> <!---->
</div>
<div id="sidebar" style="display: none">
    @yield('sidebar')
</div>

<div id="content">
   @yield('content')

</div>
<!-- Menu konta-->
<section id="menu_konta" class=" layer-more visible"><div id="menu_konta_cien" class=""></div>
    <div class="bottom-sheet">
      <div class="static-dismiss-field">
     </div> <ul class="menu-list"><!---->
      <li>
        <a redirect='true' container="true" href="/login1" class="icon">
        <div class="thumbnail">
          <i class="bottom-sheet-icn sign-in"></i>
        </div>
                    Zaloguj się
        </a>
      </li>
                <li>
                  
                  
                  
                  <a redirect='true' href="/register1" container="true" class="icon" id="logowanie"><div class="thumbnail"><i class="bottom-sheet-icn settings"></i></div>
                    Zarejestruj się
                </a></li> <li class="divider"></li> <li><a href="javascript:void(0)" class="icon"><div class="thumbnail"><i class="bottom-sheet-icn dark-mode"></i></div>
                    Dark mode
                    <div class="switch"></div> <div class="switch-btn"></div></a></li> <li class="pro-section"><a href="javascript:void(0)" class="icon"><div class="thumbnail"><i class="icn phone-000"></i></div>

  </div>
      </li>
      </ul>
  </div>
  </section>
  </div>
 
  </a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>

<script src="{{URL::asset('assets/mobile/js/custom.js')}}"></script>

</body>
</html>

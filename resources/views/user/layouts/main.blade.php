<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE TITLE -->
    <title>@yield('title','unknowen')</title>
    <!-- FAVI ICON -->
    <link rel="icon" type="image/png" href="{{asset("assets/images/seo/".($seotags->h_icon??''))}}" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset("assets/bootstrap/css/bootstrap.min.css")}}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900" rel="stylesheet">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{asset("assets/fonts/linear-fonts.css")}}">
    <link rel="stylesheet" href="{{asset("assets/fonts/font-awesome.css")}}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{asset("assets/owlcarousel/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/owlcarousel/css/owl.theme.css")}}">
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/lightbox.min.css")}}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/animate.min.css")}}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <!-- RESPONSIVE CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset("assets/css/responsive.css")}}">
    <link href="{{asset("assets/dash/custom/css/snackbar.min.css")}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset("assets/css/custem.css")}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <a href="http://wa.me/+2{{$about->a_phone}}" target="_blank" class="wahtsBtn">
        
        <img src="{{asset('assets/images/unnamed.png')}}" width="100%" alt="">
    </a>

    <!-- START PRELOADER -->
    <div class="preloader">
        <div class="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- / END PRELOADER -->


    @yield('content')


    <!-- LATEST JQUERY -->
    <script src="{{ asset("assets/js/jquery.min.js")}}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
    <!-- PROGRESS JS  -->
    <script src="{{ asset("assets/js/jquery.appear.js")}}"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ asset("assets/owlcarousel/js/owl.carousel.min.js")}}"></script>
    <!-- MIXITUP JS -->
    <script src="{{ asset("assets/js/jquery.mixitup.js")}}"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
    <!-- STEALLER JS -->
    <script src="{{ asset("assets/js/jquery.stellar.min.js")}}"></script>
    <!-- YOUTUBE JS -->
    <script src="{{ asset("assets/js/jquery.mb.YTPlayer.min.js")}}"></script>
    <script type="text/javascript">
        $('.player').mb_YTPlayer();
    </script>
    <!-- COUNTER UP JS -->
    <script src="{{ asset("assets/js/jquery.waypoints.min.js")}}"></script>
    <script src="{{ asset("assets/js/jquery.counterup.min.js")}}"></script>
    <!-- LIGHTBOX JS -->
    <script src="{{ asset("assets/js/lightbox.min.js")}}"></script>
    <!-- WOW JS -->
    <script src="{{asset('assets/dash/custom/js/snackbar.min.js')}}"></script>

    <script src="{{ asset("assets/js/wow.min.js")}}"></script>
    <!-- scripts js -->
    <script src="{{ asset("assets/js/scripts.js")}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.js" integrity="sha512-s/q7apy90iY/BCy3HnkSxOxqO30Sto5LnhQorz/ce4O/oBxDi1dKluM6C/SYy1AJ9+6MJfXnQl4mHVmrSYfujQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/dash/custom/js/ajax.js')}}"></script>

</body>

</html>
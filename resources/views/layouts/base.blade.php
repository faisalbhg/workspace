<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>We Work - Work Space Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png?v=1') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png?v=1') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png?v=1') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest?v=1') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg?v=1') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/lib/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('js/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css?v=0.37')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css?v=0.01')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/color.css?v=0.2')}}">

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f5641a49d9.js" crossorigin="anonymous"></script>
    <style type="text/css">
        /*!
         * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
         * Copyright 2015 Daniel Cardoso <@DanielCardoso>
         * Licensed under MIT
         */
        .la-ball-beat,
        .la-ball-beat > div {
            position: relative;
            -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
                    box-sizing: border-box;
        }
        .la-ball-beat {
            display: block;
            font-size: 0;
            color: #fff;
        }
        .la-ball-beat.la-dark {
            color: #333;
        }
        .la-ball-beat > div {
            display: inline-block;
            float: none;
            background-color: currentColor;
            border: 0 solid currentColor;
        }
        .la-ball-beat {
            width: 54px;
            height: 18px;
        }
        .la-ball-beat > div {
            width: 10px;
            height: 10px;
            margin: 4px;
            border-radius: 100%;
            -webkit-animation: ball-beat .7s -.15s infinite linear;
               -moz-animation: ball-beat .7s -.15s infinite linear;
                 -o-animation: ball-beat .7s -.15s infinite linear;
                    animation: ball-beat .7s -.15s infinite linear;
        }
        .la-ball-beat > div:nth-child(2n-1) {
            -webkit-animation-delay: -.5s;
               -moz-animation-delay: -.5s;
                 -o-animation-delay: -.5s;
                    animation-delay: -.5s;
        }
        .la-ball-beat.la-sm {
            width: 26px;
            height: 8px;
        }
        .la-ball-beat.la-sm > div {
            width: 4px;
            height: 4px;
            margin: 2px;
        }
        .la-ball-beat.la-2x {
            width: 108px;
            height: 36px;
        }
        .la-ball-beat.la-2x > div {
            width: 20px;
            height: 20px;
            margin: 8px;
        }
        .la-ball-beat.la-3x {
            width: 162px;
            height: 54px;
        }
        .la-ball-beat.la-3x > div {
            width: 30px;
            height: 30px;
            margin: 12px;
        }
        /*
         * Animation
         */
        @-webkit-keyframes ball-beat {
            50% {
                opacity: .2;
                -webkit-transform: scale(.75);
                        transform: scale(.75);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                        transform: scale(1);
            }
        }
        @-moz-keyframes ball-beat {
            50% {
                opacity: .2;
                -moz-transform: scale(.75);
                     transform: scale(.75);
            }
            100% {
                opacity: 1;
                -moz-transform: scale(1);
                     transform: scale(1);
            }
        }
        @-o-keyframes ball-beat {
            50% {
                opacity: .2;
                -o-transform: scale(.75);
                   transform: scale(.75);
            }
            100% {
                opacity: 1;
                -o-transform: scale(1);
                   transform: scale(1);
            }
        }
        @keyframes ball-beat {
            50% {
                opacity: .2;
                -webkit-transform: scale(.75);
                   -moz-transform: scale(.75);
                     -o-transform: scale(.75);
                        transform: scale(.75);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                   -moz-transform: scale(1);
                     -o-transform: scale(1);
                        transform: scale(1);
            }
        }
        .headeMobDesk
        {
            background: #FFF !important;
        }
        .bottom-list ul li a:hover{
            color: #FFF;
        }
        
    </style>
    @livewireStyles
    @stack('custom_css') 
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65e170069131ed19d9737633/1hns9r7c2';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <div class="wrapper" id="wraperBodySpace">
        
        {{ $slot }}
        
    </div><!--wrapper end-->    
        






    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/lib/slick/slick.js?v=0.3')}}"></script>
    <script src="{{asset('js/scripts.js?v=0.4')}}"></script>

    
    @livewireScripts
    @stack('custom_script') 

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 5000,
            timerProgressBar:true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        window.addEventListener('alert',({detail:{type,message}})=>{
            Toast.fire({
                icon:type,
                title:message
            })
        });

        window.addEventListener('scroll',event=>{
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#"+event.detail.id).offset().top
            }, 200);
        });

        window.addEventListener('refresh',event=>{
            location.reload(true); 
        });

    </script>

</body>

</html>
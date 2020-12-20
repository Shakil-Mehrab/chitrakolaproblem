<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chitrakola Gallery </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="chitrakolagallery.com,chitrakolagallery,art,artist,exibition" />
    <meta name="description" content="Chitrakola Gallery is the first and only virtual and 3D Art Gallery in Bangladesh.
    " />
    <link rel="shortcut  icon" type="image/x-icon" href="{{ asset('front-asset/images/favicon/favicon.PNG') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front-asset/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front-asset/css/imp.css') }}">
    <link rel="stylesheet" href="{{ asset('front-asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-asset/css/custom-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front-asset/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('front-asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-asset/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('front-asset/ownstyle.css') }}">

</head>

<body>
    <div class="boxed_wrapper" id="app">
        <div class="preloader"></div>

        @include('layout.includes.header')

        @yield('content')

    </div>
    <div class="boxed_wrapper">
        @include('layout.includes.footer')
    </div>
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="icon-angle"></span>
    </button>


    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('front-asset/js/jquery.js') }}"></script>
    <script src="{{ asset('front-asset/js/appear.js') }}"></script>
    <script src="{{ asset('front-asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/isotope.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('front-asset/js/owl.js') }}"></script>
    <script src="{{ asset('front-asset/js/validation.js') }}"></script>
    <script src="{{ asset('front-asset/js/wow.js') }}"></script>
    <script src="{{ asset('front-asset/js/aos.js') }}"></script>

    <script src="{{ asset('front-asset/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    {{-- <script src="{{ asset('front-asset/assets/timepicker/timePicker.js') }}">
    </script> --}}
    <script src="{{ asset('front-asset/assets/html5lightbox/html5lightbox.js') }}"></script>
    <!-- jQuery ui js -->
    <script src="{{ asset('front-asset/assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('front-asset/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('front-asset/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
    </script>
    <script
        src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}">
    </script>
    <script src="{{ asset('front-asset/js/main-slider-script.js') }}"></script>
    <script src="{{ asset('front-asset/js/custom.js') }}"></script>
    @yield('js')
</body>

</html>

<header class="main-header main-header-style3">

    <!--Start header top Style2 -->
    <div class="header-top-style2">
        <div class="container">
            <div class="outer-box clearfix">
                <!--Top Left-->
                <div class="header-top-left-style2 float-left">
                </div>
                <!--Top Right-->
                <div class="header-top-right-style2 float-right">
                    <div class="login-register-box">
                        <ul style="min-width:230px">
                            <li><a href="tel:+8801770705474"><i class="fa fa-phone"></i> +8801770705474</a>, <a href="tel:+8801719050337">+8801719050337 &nbsp;&nbsp; </a>
                            </li>
                            <li><a href="mailto:chitrakolagallery@gmail.com"> <i class="fa fa-envelope"></i> chitrakolagallery@gmail.com </a> </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--End header top Style2-->

    <!--Start Header upper Style3-->
    <div class="header-upper-style3">
        <div class="container clearfix">
            <div class="outer-box clearfix">
                <div class="header-upper-left-style3 clearfix float-left">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('front-asset/images/resources/logo.PNG') }}" alt="Awesome Logo"
                                title=""></a>
                    </div>
                </div>
                <div class="header-upper-right-style3 float-right clearfix">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu style3 navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ url('/exibitions') }}">Exhibition</a></li>
                                    <li><a href="{{ url('/artists') }}">Artists</a></li>
                                    <li><a href="{{ url('/virtual') }}">Virtual Exhibition</a></li>
                                    <li><a href="{{ url('/news') }}">Art News</a></li>
                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper Style3-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <a href="/" class="img-responsive"><img src="{{ asset('front-asset/images/resources/logo.PNG') }}"
                            alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ url('/exibitions') }}">Exhibition</a></li>
                                <li><a href="{{ url('/artists') }}">Artists</a></li>
                                <li><a href="{{ url('/virtual') }}">Virtual Exhibition</a></li>
                                <li><a href="{{ url('/news') }}">Art News</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
</header>

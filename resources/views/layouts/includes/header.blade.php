<header class="main-header">
    <a href="/home" class="logo">
        <!-- Logo -->
        <span class="logo-mini">
            <img src="{{ asset('front-asset/images/favicon/favicon.PNG') }}" alt="">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('front-asset/images/resources/logo-footer.PNG') }}" alt="">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <!-- Sidebar toggle button-->
            <span class="sr-only">Toggle navigation</span>
            <span class="pe-7s-angle-left-circle"></span>
        </a>
        <!-- searchbar-->
        <a href="#search"><span class="pe-7s-search"></span></a>
        <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Search.." />
                <button type="submit" class="btn btn-add">Search...</button>
            </form>
        </div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 15px">
                        @if (auth()->check()) {{ auth()->user()->name }}
                    </a>@endif
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.html">
                                <i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form2').submit();">
                                <i class="fa fa-power-off"></i>{{ __('Logout') }}
                            </a>
                            <form id="logout-form2" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

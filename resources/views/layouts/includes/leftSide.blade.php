@php
use App\Models\Artist;
use App\Models\Category;
use App\Models\Art;
use App\Models\Slide;
use App\Models\Buyer;
use App\Models\ArtNews;
$artists=Artist::all();
$categories=Category::all();
$arts=Art::all();
$slides=Slide::all();
$buyers=Buyer::all();
$artnews=ArtNews::all();
@endphp
<aside class="main-sidebar">
    <div class="sidebar">
        <ul class="sidebar-menu">
            @if (auth()->user()->role == 1)
                <li class="active">
                    <a href="/home"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                        <span class="pull-right-container">
                        </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Artists ({{ $artists->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/add/artist') }}">Add Artist</a></li>
                        <li><a href="{{ url('/admin/view/artists') }}">View All Artists</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i><span>Exibitions ({{ $categories->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/add/category') }}">Add Exibition</a></li>
                        <li><a href="{{ url('/admin/view/categories') }}">View Exibitions</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bitbucket-square"></i><span>All Arts ({{ $arts->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/add/art') }}">Add Art</a></li>
                        <li><a href="{{ url('/admin/view/arts') }}">View Arts</a></li>
                    </ul>
                </li>
                {{-- <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bitbucket"></i><span>Virtual Arts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/view/virtuals') }}">View Virtuals Arts</a></li>
                        <li><a href="{{ url('/admin/add/virtual') }}">Add Virtuals Arts</a></li>
                    </ul>
                </li> --}}
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list"></i>
                        <span>Art News ({{ $artnews->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/add/news') }}">Add Art News</a></li>
                        <li><a href="{{ url('/admin/view/news') }}">View Art News</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-slideshare"></i><span>Slides ({{ $slides->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/add/slide') }}">Add Slide</a></li>
                        <li><a href="{{ url('/admin/view/slides') }}">View Slides</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-secret fa-3x"></i><span>Buyers ({{ $buyers->count() }})</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('/admin/view/buyers') }}">View Buyers</a></li>
                    </ul>
                </li>
            @endif
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>

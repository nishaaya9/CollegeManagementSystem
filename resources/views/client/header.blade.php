<!-- preloader area start -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- prealoader area end -->
<header id="header">
    <!-- header top area start -->
    <div class="header-top">
        <div class="container">
            <div class="row d-flex flex-center">
                <div class="col-sm-8">
                    <div class="ht-address">
                        <ul>
                            <li><i class="fa fa-phone"></i>+ 91 9737361604</li>
                            <li><i class="fa fa-envelope"></i>nishaaya9@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ht-social">
                        <ul>
                            @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                                @endauth
                            </div>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top area end -->
    <!-- header bottom area start -->
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-inner">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-9">
                        <div class="logo">
                            <img src="assets/images/icon/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                        <div class="main-menu">
                            <nav>
                                <ul id="m_menu_active">
                                    <li class="{{'/' == request()->path() ? 'active':''}}"><a href="">Home</a></li>

                                    <li class="{{'about' == request()->path() ? 'active':''}}"><a href="">About</a></li>

                                    <li class="{{'courses' == request()->path() ? 'active':''}}"><a href="javascript:void(0);">Courses</a>
                                        <ul class="submenu">
                                            <li class="{{'courses' == request()->path() ? 'active':''}}"><a href="">courses</a></li>
                                            <li class="{{'course-details' == request()->path() ? 'active':''}}"><a href="">course details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">teacher</a>
                                        <ul class="submenu">
                                            <li class="{{'teachers' == request()->path() ? 'active':''}}"><a href="">teachers</a></li>
                                            <li class="{{'teacher-details' == request()->path() ? 'active':''}}"><a href="">teacher details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">blog</a>
                                        <ul class="submenu">
                                            <li class="{{'blog' == request()->path() ? 'active':''}}"><a href="">blog</a></li>
                                            <li class="{{'blog-details' == request()->path() ? 'active':''}}"><a href="">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{'contact' == request()->path() ? 'active':''}}"><a href="">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-2 col-sm-3">
                        <div class="hb-right">
                            <ul>
                                <li class="search_btn"><i class="fa fa-search"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom area end -->
</header>
<!-- header area end -->
<!-- offset search area start -->
<div class="offset-search">
    <form action="#">
        <input type="text" name="search" placeholder="Search here...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- offset search area end -->

<!-- body overlay area start -->
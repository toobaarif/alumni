    <!-- Here is the header part start -->

    <header id="home">
        <div class="header-top" id="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="top-info">
                            <!-- head info -->
                            <ul class="top-bar-text">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-phone icon-color" aria-hidden="true"></i>  021-99216527 </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-envelope icon-color" aria-hidden="true"></i>
                                        info@bbsul.edu.pk</a>
                                </li>
                            </ul>
                            <!-- /.head info -->
                        </div>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="top-info sign-in text-right">
                            <!-- social part -->
                            <ul class="top-bar-text">
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <!-- Dashboard button -->
                                            <li>
                                                <a href="{{ route('student.dashboard') }}" role="button">
                                                    <i class="fa fa-user-plus top-icon"></i> Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-user-plus top-icon"></i> Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}" role="button" >
                                                    <i class="fa fa-user-plus top-icon cursor-pointer"></i> Sign In
                                                </a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li>
                                                    <a href="{{ route('register') }}" role="button">
                                                        <i class="fa fa-user-plus top-icon"></i> Sign Up
                                                    </a>
                                                </li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                            
                            <!-- /.social part -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-spy="affix" data-offset-top="30">
            <nav class="navbar navbar-default hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 pl-0">
                            <div class="navbar-header">
                                <a href="/" class="logo">
                                    <img src="{{ url('theme/images/alumnilogo.png') }}" class="img-responsive"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-9 banner-menu">
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav nav-menu">
                                    <li class="active dropmenu">
                                        <a href="/" class="dropbtn">Home</a>


                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}">About</a>
                                    </li>


                                    <li>
                                        <a href="{{ url('gallery') }}">Gallery</a>
                                    </li>


                                    <li>
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        {{-- <div class="col-sm-1 p-0 hidden-xs">
                            <div class="search-icon" id="search-btn">
                                <i class="fa fa-search"></i>
                            </div>
                        </div> --}}
                    </div>


                </div>
            </nav>

        </div>

        <!-- mobile menu -->
        <nav id='cssmenu' class="hidden-sm hidden-lg hidden-md">
            <div class="logo">
                <a href="index.html" class="logo">
                    <img src="{{ url('theme/images/alumnilogo.png') }}" class="img-responsive" alt="">
                </a>
            </div>
            <div id="head-mobile"></div>
            <div class="button"></div>
            <ul>
                <li class='active'>
                    <a href='index.html'>Home</a>
                    <ul>
                        <li>
                            <a href="index.html">Home Slider</a>
                        </li>
                        <li>
                            <a href="index-video.html">Home Video</a>
                        </li>
                        <li>
                            <a href="index-default.html">Home Default</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href='#about_us'>About Us</a>
                </li>
                <li>
                    <a href="#event">Events</a>
                </li>

                <li>
                    <a href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li>
                    <a href="#blog">Blog</a>
                </li>
                <li>
                    <a href="#myteam">Team</a>
                </li>
                <li>
                    <a href='#'>Pages</a>
                    <ul>
                        <li>
                            <a href="about-us">About Us</a>
                        </li>
                        <li>
                            <a href="notice.html">Notice</a>
                        </li>
                        <li>
                            <a href="{{ url('gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="courses.html">Courses</a>
                        </li>
                        <li>
                            <a href="event-details.html">Event Details</a>
                        </li>
                        <li>
                            <a href="blog-details-page.html">Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href='#contact'>Contact</a>
                </li>
            </ul>
        </nav>

        <!-- End mobile menu -->

    </header>
    <!-- Here is the header part end -->

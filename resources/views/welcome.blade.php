<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:16:00 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Bitpro is a simple HTML5 Business Portfolio Template with a modern look. HTML files are well organized and named accordingly so its very easy to customize and update.">
    <meta name="keywords" content="ART,BUSINESS,DESIGN,GRAPHIC,FASHION,MODEL,PHOTOGRAPHY,WEB DESIGN">
    <meta name="author" content="bitspeck">
    <title>Alumni Portal</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" 
    href="{{url('theme/images/favi.png')}}">
    <!-- bootstrap.min - css -->
    <link type="text/css" href="{{ url('theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- font-awesome.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/font-awesome.min.css') }}" />
    <!-- slick - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/slick.css') }}">
    <!-- YouTubePopUp - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/YouTubePopUp.css') }}">
    <!-- pogo-slider.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/pogo-slider.min.css') }}">
    <!-- animate.min - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/animate.min.css') }}">
    <!-- direction-reveal - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/direction-reveal.css') }}">
    <!-- menu - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/menu.css') }}">
    <!-- mein - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/main.css') }}">
    <!-- responsive - css -->
    <link type="text/css" rel="stylesheet" href="{{ url('theme/css/responsive.css') }}">
    
  
</head>


<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">

    <!-- back to top start -->
    <a href="#" id="return-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- back to top end -->
    <!-- ====== Preloader ======  -->
    <!--
    <div class="loading">
        <div class="load-circle">
        </div>
    </div> -->

    <!-- ======End Preloader ======  -->


@include('pages.header')


    

    <!-- Here is the banner part start -->
    <div class="header-area" id="home-slider">
        <div class="slider stick-dots">
            <div class="slide">
                <div class="slide__img">
                    <img src="{{ url('theme/images/slider4.jpg') }}" 
                     alt="img" class="full-image animated"
                        data-animation-in="zoomInImage" />
                    <div class="overlay"></div>
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">Our moto
                            <span class="text-color">FUN & LEARNING </span>
                        </h2>
                        <div class="header-btn-group">
                            <a href="#" class="slider-btn animated" 
                            data-animation-in="fadeInLeft"
                                data-delay-in="0.3">
                                Explore us
                            </a>
                            <a href="#" class="slider-btn2 blank animated" data-animation-in="fadeInRight"
                                data-delay-in="0.3">
                                get a quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__img">
                    <img src="{{ 'theme/images/slider2.jpg' }}"  alt="img" 
                    class="full-image animated"
                        data-animation-in="zoomInImage" />
                    <div class="overlay"></div>
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">we have
                            <span class="text-color">creative teacher</span>
                        </h2>
                        <div class="header-btn-group">
                            <a href="#" class="slider-btn animated" data-animation-in="fadeInLeft"
                                data-delay-in="0.3">
                                Explore us
                            </a>
                            <a href="#" class="slider-btn2 blank animated" data-animation-in="fadeInRight"
                                data-delay-in="0.3">
                                get a quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__img">
                    <img src="{{ 'theme/images/slider1.jpg' }}" alt="img" class="full-image animated"
                        data-animation-in="zoomInImage" />
                    <div class="overlay"></div>
                </div>
                <div class="slide__content">
                    <div class="slide__content--headings">
                        <h2 class="animated" data-animation-in="fadeInRight">we're awesome &
                            <span class="text-color">creative </span>
                        </h2>
                        <div class="header-btn-group">
                            <a href="#" class="slider-btn animated" data-animation-in="fadeInLeft"
                                data-delay-in="0.3">
                                Explore us
                            </a>
                            <a href="#" class="slider-btn2 blank animated" data-animation-in="fadeInRight"
                                data-delay-in="0.3">
                                get a quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Here is the banner part end -->

    <!-- Here is the About us part start -->

    <section id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>About us</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercn ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in rerit in voluptate velit esse cillum dolore eu fugiat nulla.</p>

                        <p>pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium.</p>
                        <a href="about-us.html" class="btn btn-primary">read more</a>
                    </div>
                </div>
                <div class="col-md-6">

                    
                        <img src="{{ 'theme/images/slider1.jpg' }}"
                         alt="img"
                            class="img-responsive video-sec">


                        <!-- <div class="youtube_video">
                            <a class="bla-1" href="https://www.youtube.com/watch?v=y3UH2gAhwPI">
                                <img src="theme/images/about-vedio-icon.jpg" alt="img" class="img-responsive">
                            </a>
                        </div> -->


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Here is the About us part End -->

    
    <!-- Latest News End -->

    <!-- Here is the achievements  part start -->

    <section id="counter">
        <div class="counter-banner">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="count-in">
                            <div class="counter-text">
                                <div class="cointer-img">
                                    <img src="{{ url('theme/images/student.png') }}" alt="img"
                                        class="img-responsive">
                                </div>
                                <h4>
                                    <span class="counter">3000</span>
                                </h4>
                                <p>students enrolled</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 mid-2">
                        <div class="count-in">
                            <div class="cointer-img">
                                <img src="{{ url('theme/images/troffi.png') }}" alt="img"
                                    class="img-responsive">
                            </div>
                            <div class="counter-text">
                                <h4>
                                    <span class="counter">1111</span>
                                </h4>
                                <p>best awards won</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 mid-3">
                        <div class="count-in">
                            <div class="cointer-img">
                                <img src="{{ url('theme/images/drawing.png') }}" alt="img"
                                    class="img-responsive">
                            </div>
                            <div class="counter-text count-pad">
                                <h4>
                                    <span class="counter">565</span>
                                </h4>
                                <p>classes completed</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 mid-4">
                        <div class="count-in mblr-0">
                            <div class="cointer-img">
                                <img src="{{ url('theme/images/book.png') }}" alt="img" class="img-responsive">
                            </div>
                            <div class="counter-text">
                                <h4>
                                    <span class="counter">850</span>
                                </h4>
                                <p>our total courses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Here is the achievements  part End -->

    <!-- Here is the Event part start-->

    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 event-head">
                    <div class="heading-border">
                        <h3>Events</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 item-event">
                    <div class="col-sm-3 col-md-3 ">
                        <div class="time-from">
                            <div class="date">30</div>
                            <div class="month">may</div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="event-wrapper">
                            <h5 class="title">
                                <a href="event-details.html"> Sports Week 2023</a>
                            </h5>
                            <div class="meta">
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> 9.00am - 2.00pm
                                </div>
                                <!-- <div class="location">
                                    <i class="fa fa-map-marker"></i> Venice, Italy
                                </div> -->
                            </div>
                            <div class="description">
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                                    non mauris itae erat conuat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 event-image">
                        <img src="{{ url('theme/images/bbsul/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 item-event">
                    <div class="col-sm-3 col-md-3">
                        <div class="time-from">
                            <div class="date">09</div>
                            <div class="month">Nov</div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="event-wrapper">
                            <h5 class="title">
                                <a href="event-details.html"> Iqbal Day 2022</a>
                            </h5>
                            <div class="meta">
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> 8.00am - 5.00pm
                                </div>
                                <!-- <div class="location">
                                    <i class="fa fa-map-marker"></i> Venice, Italy
                                </div> -->
                            </div>
                            <div class="description">
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                                    non mauris itae erat conuat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 event-image">
                        <img src="{{ url('theme/images/bbsul/19.jpg') }}" alt="">
                    </div>

                </div>
                <div class="col-md-12 item-event mblr-0">
                    <div class="col-sm-3 col-md-3">
                        <div class="time-from">
                            <div class="date">15</div>
                            <div class="month">Dec</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="event-wrapper">
                            <h5 class="title">
                                <a href="event-details.html"> Aptitude Test 2023</a>
                            </h5>
                            <div class="meta">
                                <div class="time">
                                    <i class="fa fa-clock-o"></i> 8.00am - 5.00pm
                                </div>
                                <div class="location">
                                    <i class="fa fa-map-marker"></i> Venice, Italy
                                </div>
                            </div>
                            <div class="description">
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed
                                    non mauris itae erat conuat</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3 col-md-3 event-image">
                        <img src="{{ url('theme/images/bbsul/34.jpg') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Here is the Event part End -->

    <!-- Here is the Gallery part Start -->
    
                            <!-- Controls -->

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Here is the Gallery part End -->


    <section id="myteam" class="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>Our Teachers</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row team-row">
                    <div class="col-md-4 col-sm-4 team-wrap">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="{{ url('theme/images/abdullah.png') }}" alt="" height="360px">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Sir Abdullah</h6>
                            <span>professor</span>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-md-4 col-sm-4 team-wrap">
                        <div class="team-member text-center">
                            <div class="team-img">
                                <img src="{{ url('theme/images/drS.jpg') }}" alt="" height="360px">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Dr Shafique Awan </h6>
                            <span>HOD</span>
                        </div>
                    </div>
                    <!-- end team member -->

                    <div class="col-md-4 col-sm-4 team-wrap">
                        <div class="team-member last text-center">
                            <div class="team-img">
                                <img src="{{ url('theme/images/maz.PNG') }}" alt="" height="360px">
                                <div class="overlay-team">
                                    <div class="team-details text-center">
                                        <div class="socials mt-20">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="team-title">Dr Mazhar Dotio</h6>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                    <!-- end team member -->
                </div>
            </div>
        </div>
    </section>



    <!-- Here is Contact part Start -->
    @include('pages.footer')


    <!-- jquery-1.12.4.min - js -->
    <script src="{{ url('theme/js/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap.min - js -->
    <script src="{{ url('theme/js/bootstrap.min.js') }}"></script>
    <!-- slick.min - js -->
    <script src="{{ url('theme/js/slick.min.js') }}"></script>
    <!-- slick-animation.min - js -->
    <script src="{{ url('theme/js/slick-animation.min.js') }}"></script>
    <!-- waypoints - js -->
    <script src="{{ url('theme/js/waypoints.js') }}"></script>
    <!-- counter - js -->
    <script src="{{ url('theme/js/counter.js') }}"></script>
    <!-- bundle - js -->
    <script src="{{ url('theme/js/bundle.js') }}"></script>
    <!-- Carousel - js -->
    <script src="{{ url('theme/js/Carousel.js') }}"></script>
    <!-- YouTubePopUp - js -->
    <script src="assets/js/YouTubePopUp.jquery.js')}}"></script>
    <!-- menu - js -->
    <script src="{{ url('theme/js/menu.js') }}"></script>
    <!-- main - js -->
    <script src="{{ url('theme/js/main.js') }}"></script>

</body>



</html>

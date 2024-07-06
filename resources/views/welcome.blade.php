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

    <!-- testimonial part start -->
    <!-- <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>testimonial</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial_bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center ">
                        <div class="testimonial_col">
                            <div class="client_feedback">
                                <div class="fdbck_main">
                                    <div class="feedback_txt">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            The printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s.
                                        </p>
                                        <div class="fdbck_name">
                                            <h4>Dr Shafique Awan</h4>
                                            <span>Professor</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                    </div>
                                    <!-- feedback_txt -->
                                    <!-- <div class="feedback_txt">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard. The printing and typesetting
                                            industry the printing and typesetting industry.
                                        </p>
                                        <div class="fdbck_name">
                                            <h4> Dr Mazhar Dotio </h4>
                                            <span>Professor</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                    </div> -->
                                    <!-- feedback_txt -->
                                    <!-- <div class="feedback_txt">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            orem Ipsum has been the industry's standard dummy text ever since the
                                            1500s.Quisque convallis, felis ac pulvinar efficitur, ante nunc ultricies
                                            tortor, a sagittis nisl arcu ac nisi. Mauris egestas dignissim sollicitudin.
                                        </p>
                                        <div class="fdbck_name">
                                            <h4>Dr Asad Abbasi</h4>
                                            <span>Professor</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                            <i class="fa fa-star-half-empty"></i>
                                        </div>
                                    </div> -->
                                    <!-- feedback_txt -->
                                    <!-- <div class="feedback_txt">
                                        <p>
                                            Quisque convallis, felis ac pulvinar efficitur, ante nunc ultricies tortor,
                                            a sagittis nisl arcu ac nisi. Mauris egestas dignissim sollicitudin.Lorem
                                            Ipsum is simply dummy text of the printing and typesetting industry. orem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </p>
                                        <div class="fdbck_name">
                                            <h4>Dr Amjad Siraj Memon</h4>
                                            <span>Professor</span>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <!-- feedback_txt -->
                                <!-- </div>
                            </div>
                            <div class="client">
                                <div class="client_main_img">
                                    <div class="client_img">
                                        <img src="{{ url('theme/images/team1.jpg') }}"class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="client_main_img">
                                    <div class="client_img">
                                        <img src="{{ url('theme/images/team6.jpg') }}" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="client_main_img">
                                    <div class="client_img">
                                        <img src="{{ url('theme/images/team3.jpg') }}" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                                <div class="client_main_img">
                                    <div class="client_img">
                                        <img src="{{ url('theme/images/team4.jpg') }}" class="img-responsive"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slidr_icon">
                <div class="arrow_left">
                    <div class="icon_left clienticon_left">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="arrow_right">
                    <div class="icon_right clienticon_right">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div> 
    </section>  -->
    <!-- testimonial part End -->
    <!-- Here is the Team part Start -->

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

    <!-- Here is the Team part End -->



   

    <!-- Here is the Blog part End -->


   
    <!-- Here is Newsletter part Start -->


    <!-- Here is Contact part Start -->
    @include('pages.footer')
    <!-- <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>Contact us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section form-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.153590044365!2d151.2283635148165!3d-33.88569802736661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae064d4035c7%3A0xafd8ab9b32253d24!2sUnderwood+St%2C+Paddington+NSW+2021%2C+Australia!5e0!3m2!1sen!2s!4v1489007994183"></iframe>
            <div class="container">
                <div class="row">
                    <div class="form-section">
                        <div class="col-sm-6 col-xs-12 black pull-right">
                            <form id="contact_form" class="fill-form"
                                action="https://theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/mail.php">
                                <span>fill the form</span>
                                <input type="text" placeholder="Name *">
                                <input type="text" placeholder="Email *">
                                <input type="text" placeholder="Subject">
                                <textarea placeholder="Message"></textarea>
                                <div class="fill-row">
                                    <button class="contact-btn" type="submit">send</button>
                                    <em><i>*</i> Please Fill all the Fields</em>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Here is Contact part End -->

    <!-- Footer Start -->
    <!-- <footer id="rs-footer" class="bg3 rs-footer">
        <div class="container">
             Footer Address -->
            <!-- <div>
                <div class="row footer-contact-desc">
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Address</h4>
                            <p class="contact-desc">
                                503 Old Buffalo Street
                                <br> Northwest #205, New York-3087
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-phone"></i>
                            <h4 class="contact-title">Phone Number</h4>
                            <p class="contact-desc">
                                +3453-909-6565
                                <br> +2390-875-2235
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-inner">
                            <i class="fa fa-map-marker"></i>
                            <h4 class="contact-title">Email Address</h4>
                            <p class="contact-desc">
                                bbsul@gmail.com
                                <br> www.yourname.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Footer Top -->
        <!-- <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="about-widget">
                            <h4><i class="fa fa-fa fa-graduation-cap ftr-cap"></i> BBSUL
                            </h4>
                            <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the
                                elegance of unique.</p>
                            <p class="margin-remove">We create Unique and Easy To Use Flexible Html Themes.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h4 class="footer-title">RECENT POSTS</h4>
                        <div class="recent-post-widget">
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">While the lovely
                                            valley team work</a></h5>
                                    <span class="post-category">Keyword Analysis</span>
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-date">
                                    <span>28</span>
                                    <span>June</span>
                                </div>
                                <div class="post-desc">
                                    <h5 class="post-title"><a href="#">I must explain to
                                            you how all this idea</a></h5>
                                    <span class="post-category">Spoken English</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h4 class="footer-title">OUR SITEMAP</h4>
                        <ul class="sitemap-widget">
                            <li class="active"><a href="index-1.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Home</a>
                            </li>
                            <li><a href="about-us.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>About</a></li>
                            <li><a href="courses.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Courses</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Courses
                                    Details</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a>
                            </li>
                            <li><a href="event-details.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Events Details</a></li>
                            
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Teachers
                                    Details</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a>
                            
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h4 class="footer-title">NEWS LETTER</h4>
                        <p class="footer-services">Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                        <form class="news-form">
                            <input type="text" class="form-input footer-text" placeholder="Enter Your Email">
                            <button type="submit" class="form-button"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="footer-share">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <!-- Footer Bottom -->
        <!-- <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2027 <a href="#">BBSUL</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- Footer End -->

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


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:17:01 GMT -->

</html>

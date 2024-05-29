
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:17:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bitpro is a simple HTML5 Business Portfolio Template with a modern look. HTML files are well organized and named accordingly so its very easy to customize and update.">
    <meta name="keywords" content="ART,BUSINESS,DESIGN,GRAPHIC,FASHION,MODEL,PHOTOGRAPHY,WEB DESIGN">
    <meta name="author" content="bitspeck">
    <title>Alumni-Gallery</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{url('theme/images/fav.png')}}">
    <!-- bootstrap.min - css -->
    <link type="text/css" href="{{url('theme/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- font-awesome.min - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/font-awesome.min.css')}}" />
    <!-- slick - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/slick.css')}}">
    <!-- YouTubePopUp - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/YouTubePopUp.css')}}">
    <!-- pogo-slider.min - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/pogo-slider.min.css')}}">
    <!-- animate.min - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/animate.min.css')}}">
    <!-- direction-reveal - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/direction-reveal.css')}}">
    <!-- menu - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/menu.css')}}">
    <!-- mein - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/main.css')}}">
    <!-- responsive - css -->
    <link type="text/css" rel="stylesheet" href="{{url('theme/css/responsive.css')}}">

</head>

<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
    <!-- back to top start -->
    <a href="#" id="return-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>
    <!-- back to top end -->
    <!-- ====== Preloader ======  -->

    <div class="loading">
        <div class="load-circle">
        </div>
    </div>

    <!-- ======End Preloader ======  -->

    @include('pages.header')

    <!-- Here is the header part end -->
    <!-- Here is the Gallery banner part start -->
    <section id="myabout" class="about-details">
        <div class="about-text">
            <h3>
                Our gallery
            </h3>
        </div>
    </section>

    <!-- Here is the Gallery banner part End -->

    <!-- Here is the Gallery part Start -->
    <section class="page-section black" id="gallery">
        <div class="gallery">
            <div class="container">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>Image Gallery</h3>
                    </div>
                </div>
                <div class="row">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/29.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}} width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}} width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}} width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}} width="16" height="16" alt="image" class="normal">

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/6.jpg')}}" width="360" height="300" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('/theme/images/bbsul/1.jpg')}} "width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('/theme/images/bbsul/2.jpg')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li> 
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/14.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>        
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/34.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/31.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/21.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/6.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/3.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/11.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/17.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/29.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/22.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="normal">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('theme/images/bbsul/13.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/17.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/28.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/15.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}"width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/30.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/6.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="row">

                                    <div class="col-sm-4 col-xs-12">

                                        <div class="gallery-img">

                                            <img src="{{url('/theme/images/bbsul/35.jpg')}}" width="360" height="350" alt="image">

                                            <div class="hover">


                                                <ul>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/22.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">

                                        <div class="gallery-img">

                                            <img src="{{url('/theme/images/bbsul/13.jpg')}}" width="360" height="350" alt="image">

                                            <div class="hover">


                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">
                                                        </a>

                                                    </li>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">

                                                        </a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 col-xs-12">
                                        <div class="gallery-img">
                                            <img src="{{url('/theme/images/bbsul/26.jpg')}}" width="360" height="350" alt="image">
                                            <div class="hover">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">
                                                            <img src="{{url('theme/images/icon-57.png')}}"width="16" height="17" alt="image" class="hover-img">
                                                        </a>

                                                    </li>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12">

                                        <div class="gallery-img">

                                            <img src="{{url('/theme/images/bbsul/30.jpg')}}" width="360" height="350" alt="image">

                                            <div class="hover">

                                                <ul>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12">

                                        <div class="gallery-img">

                                            <img src="{{url('/theme/images/bbsul/17.jpg')}}" width="360" height="350" alt="image">

                                            <div class="hover">

                                                <ul>

                                                    <li>

                                                        <a href="#">

                                                            <img src="{{url('theme/images/icon-56.png')}}" width="16" height="17" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-57.png')}}" width="16" height="17" alt="image" class="hover-img">

                                                        </a>

                                                    </li>

                                                    <li>
                                                        <a href="#">
                                                            <img src="{{url('theme/images/icon-58.png')}}" width="16" height="16" alt="image" class="normal">

                                                            <img src="{{url('theme/images/icon-59.png')}}" width="16" height="16" alt="image" class="hover-img">

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Controls -->

                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Here is the Gallery part End -->

    <!-- Here is Contact part Start -->
    <!-- <section id="contact" class="about-contact">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.153590044365!2d151.2283635148165!3d-33.88569802736661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae064d4035c7%3A0xafd8ab9b32253d24!2sUnderwood+St%2C+Paddington+NSW+2021%2C+Australia!5e0!3m2!1sen!2s!4v1489007994183"></iframe>
            <div class="container">
                <div class="row">
                    <div class="form-section">
                        <div class="col-sm-6 col-xs-12 black pull-right">
                            <form id="contact_form" class="fill-form" action="https://theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/mail.php">
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
    </section>

    <!-- Here is Contact part End -->

    <!-- Footer Start -->
    @include('pages.footer')
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
                                infoname@gmail.com
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
                            <h4><i class="fa fa-fa fa-graduation-cap ftr-cap"></i> Bit University
                            </h4>
                            <p>We create Premium Html Themes for more than three years. Our team goal is to reunite the elegance of unique.</p>
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
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Courses Details</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Events</a></li>
                            <li><a href="event-details.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Events Details</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Blog</a></li>
                            <li><a href="blog-details-page.html"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Blog Details</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Teachers</a>
                            </li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Teachers Details</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Contact</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i>Error 404</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <h4 class="footer-title">NEWS LETTER</h4>
                        <p class="footer-services">Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                        <form class="news-form">
                            <input type="text" class="form-input footer-text" placeholder="Enter Your Email">
                            <button type="submit" class="form-button"><i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></button>
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
                    <p>© 2027 <a href="#">Bit institute</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>  -->
    <!-- Footer End -->

    <!-- jquery-1.12.4.min - js -->
    <script src="{{url('theme/js/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap.min - js -->
    <script src="{{url('theme/js/bootstrap.min.js')}}"></script>
    <!-- slick.min - js -->
    <script src="{{url('theme/js/slick.min.js')}}"></script>
    <!-- slick-animation.min - js -->
    <script src="{{url('theme/js/slick-animation.min.js')}}"></script>
    <!-- waypoints - js -->
    <script src="{{url('theme/js/waypoints.js')}}"></script>
    <!-- counter - js -->
    <script src="{{url('theme/js/counter.js')}}"></script>
    <!-- bundle - js -->
    <script src="{{url('theme/js/bundle.js')}}"></script>
    <!-- Carousel - js -->
    <script src="{{url('theme/js/Carousel.js')}}"></script>
    <!-- YouTubePopUp - js -->
    <script src="{{url('theme/js/YouTubePopUp.jquery.js')}}"></script>
    <!-- menu - js -->
    <script src="{{url('theme/js/menu.js')}}"></script>
    <!-- main - js -->
    <script src="{{url('theme/js/main.js')}}"></script>

</body>


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:17:15 GMT -->
</html>

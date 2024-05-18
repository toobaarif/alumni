<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:17:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bitpro is a simple HTML5 Business Portfolio Template with a modern look. HTML files are well organized and named accordingly so its very easy to customize and update.">
    <meta name="keywords" content="ART,BUSINESS,DESIGN,GRAPHIC,FASHION,MODEL,PHOTOGRAPHY,WEB DESIGN">
    <meta name="author" content="bitspeck">
    <title>Bit institute-courses</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/fav.png">
    
    <!-- bootstrap.min - css -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome.min - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!-- slick - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <!-- YouTubePopUp - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/YouTubePopUp.css">
    <!-- pogo-slider.min - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/pogo-slider.min.css">
    <!-- animate.min - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <!-- direction-reveal - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/direction-reveal.css">
    <!-- menu - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/menu.css">
    <!-- mein - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/main.css">
    <!-- responsive - css -->
    <link type="text/css" rel="stylesheet" href="assets/css/responsive.css">

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
    <!-- Here is the courses banner part start -->
    <section id="myabout" class="about-details">
        <div class="about-text">
            <h3>
                Our courses
            </h3>
        </div>
    </section>

    <!-- Here is the courses part End -->

    <!-- Here is the courses part Start -->
    <section id="blog-page" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="heading-border">
                        <h3>Our courses</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Blog grid part Start  -->
                <div class="courses-bar">
                    <div class="col-xs-12 col-sm-6 col-md-4 mb-40">
                        <div class="sort-courses">
                            <form action="#">
                                <select name="courses" id="courses">
                                    <option value="All Courses" selected="">All Courses</option>
                                    <option value="Education">Education</option>
                                    <option value="Photoshop">Photoshop</option>
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="Design">Design</option>
                                    <option value="Learning">Learning</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-4 mb-40">
                        <div class="search-course">
                            <form action="#">
                                <input name="search" placeholder="Search The Courses" type="text">
                                <button class="btn" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 mb-40">
                        <ul class="nav nav-tabs">
                            <li><a href="#grid-view" data-toggle="tab"><i class="glyphicon glyphicon-th"></i></a></li>
                            <li class="active"><a href="#list-view" data-toggle="tab"><i
                                        class="glyphicon glyphicon-th-list"></i></a></li>
                        </ul>
                        <!-- Nav tabs End -->
                    </div>
                </div>
                <!-- Blog grid part end  -->
            </div>
            <div class="row">

                <!--single blog  start -->

                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-9.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>web devlopment</h4>
                            <p>19 Aug 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-5.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>Social Marketing</h4>
                            <p>20 Mar 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-7.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>Marketing plan</h4>
                            <p>10 Feb 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-6.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>Bussines plan</h4>
                            <p>05 Jan 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-2.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>web Animation</h4>
                            <p>15 June 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="single_blog">
                        <div class="blog-content">
                            <div class="blog_img ">
                                <img src="assets/images/courses-10.jpg" class="img-responsive" alt="img">
                                <a href="#">
                                    <div class="overlay">
                                        <div class="overlay_shape">read more<i class="fa fa-long-arrow-right"></i></div>

                                        <div class="overlay_text1"><i class="fa fa-user"></i>posted by: admin</div>
                                        <div class="overlay_text2"><i class="fa fa-eye"></i>1211 views
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <h4>web Design</h4>
                            <p>19 Aug 2027</p>
                            <p class="blog-para">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-share"></i>24 share</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i>162 likes</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>74 comments</a></li>
                            </ul>
                            <div class="clr"></div>
                        </div>
                    </div>

                </div>

                <!--single blog  End -->


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row blog_grid ">
                        <div class="blog_pagination pl0 pr0 text-center">
                          <div class="sort_show">
                            <nav aria-label="Page navigation">
                              <div class="notice-bottom">
                                <div class="col-sm-2 col-xs-1"><p>Pages:</p></div>
                                <div class="col-sm-10 col-xs-11 pl0 pr0 ">
                                  <ul class="pagination">
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">2027</a></li>
                                    <li>
                                      <a href="#" class="blog_grid_next">
                                        <i class="fa fa-play"></i>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </nav>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Here is the courses part End -->

    <!-- Here is Contact part Start -->
    <section id="contact" class="about-contact">
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
    <footer id="rs-footer" class="bg3 rs-footer">
        <div class="container">
            <!-- Footer Address -->
            <div>
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
        </div>

        <!-- Footer Top -->
        <div class="footer-top">
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
                                        aria-hidden="true"></i>Teachers
                                    Details</a></li>
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
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright">
                    <p>© 2027 <a href="#">Bit institute</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- jquery-1.12.4.min - js -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap.min - js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- slick.min - js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- slick-animation.min - js -->
    <script src="assets/js/slick-animation.min.js"></script>
    <!-- waypoints - js -->
    <script src="assets/js/waypoints.js"></script>
    <!-- counter - js -->
    <script src="assets/js/counter.js"></script>
    <!-- bundle - js -->
    <script src="assets/js/bundle.js"></script>
    <!-- Carousel - js -->
    <script src="assets/js/Carousel.js"></script>
    <!-- YouTubePopUp - js -->
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <!-- menu - js -->
    <script src="assets/js/menu.js"></script>
    <!-- main - js -->
    <script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from theme.bitspecksolutions.com/html-template/bitpro/bitinstitute/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 03:17:33 GMT -->
</html>
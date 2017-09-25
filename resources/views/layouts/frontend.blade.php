<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>News247 - News Magazine Newspaper HTML Template</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('frontend/css/colorbox.css') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('frontend/html5shiv.js') }}"></script>
    <script src="{{ asset('frontend/respond.min.js') }}"></script>
    <![endif]-->

</head>

<body>

<div class="body-inner">

    <div class="trending-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="trending-title">Trending Now</h3>
                    <div id="trending-slide" class="owl-carousel owl-theme trending-slide">

                        @foreach($newsHeadlines as $newsHeadline)
                            <div class="item">
                                <div class="post-content">
                                    <h2 class="post-title title-small">
                                        <a href="{{ route('single-post',['id'=>$newsHeadline->id]) }}">{{ $newsHeadline->title }}</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Item 1 end -->
                        @endforeach
                    </div><!-- Carousel end -->
                </div><!-- Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </div><!--/ Trending end -->

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="ts-date">
                        <i class="fa fa-calendar-check-o"></i>May 29, 2017
                    </div>
                    <ul class="unstyled top-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Write for Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!--/ Top bar left end -->

                <div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="#">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="#">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Google+" href="#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Rss" href="#">
                                <span class="social-icon"><i class="fa fa-rss"></i></span>
                            </a>
                            <a title="Skype" href="#">
                                <span class="social-icon"><i class="fa fa-skype"></i></span>
                            </a>
                        </li>
                    </ul><!-- Ul end -->
                </div><!--/ Top social col end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="logo">
                        <a href="index-1.htm">
                            <img src="{{ asset('frontend/images/logos/logo.png') }}" alt="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <a href="#"><img src="{{ asset('frontend/images/banner-ads/ad-top-header.png') }}" class="img-responsive" alt=""></a>
                    </div>
                </div><!-- header right end -->
            </div><!-- Row end -->
        </div><!-- Logo and banner area end -->
    </header><!--/ Header end -->

    <div class="main-nav clearfix">
        <div class="container">
            <div class="row">
                <nav class="site-navigation navigation">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                                <li class="{{ Route::current()->getName()=='homepage'?'active':'' }}">
                                    <a href="{{ route('homepage') }}">Home</a>
                                </li>

                                @foreach($menus as $menu)
                                    <li class="{{ Route::current()->getName()=='category-post'?(Route::current()->parameter('id')==$menu->id?'active': '') :'' }}">
                                        <a href="{{ route('category-post',['id'=>$menu->id]) }}">{{ $menu->category_name }}</a>
                                    </li>
                                @endforeach
                                <li class="{{ Route::current()->getName()=='contact'?'active':'' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>



                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" id="search-field" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                    <div id="search-result"> </div>
                </div><!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->

    <div class="gap-40"></div>

    @yield('header-slider')
    @yield('page-title')
    @yield('page-content')



    <footer id="footer" class="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 footer-widget">
                        <h3 class="widget-title">Trending Now</h3>
                        <div class="list-post-block">
                            <ul class="list-post">
                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/health2.jpg') }}" alt="">
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Can't shed those Gym? The problem might...</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Mar 13, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 1 end -->

                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/health3.jpg') }}" alt="">
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Deleting fears from the brain means you…</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Jan 11, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 2 end -->

                                <li class="clearfix">
                                    <div class="post-block-style post-float clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/health4.jpg') }}" alt="">
                                            </a>
                                        </div><!-- Post thumb end -->

                                        <div class="post-content">
                                            <h2 class="post-title title-small">
                                                <a href="#">Smart packs parking sensor tech...</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">Feb 19, 2017</span>
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post block style end -->
                                </li><!-- Li 3 end -->
                            </ul><!-- List post end -->
                        </div><!-- List post block end -->

                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-12 footer-widget widget-categories">
                        <h3 class="widget-title">Hot Categories</h3>
                        <ul>
                            <li>
                                <a href="#"><span class="catTitle">Robotics</span><span class="catCounter"> (5)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Games</span><span class="catCounter"> (6)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Gadgets</span><span class="catCounter"> (5)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Travel</span><span class="catCounter"> (5)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Health</span><span class="catCounter"> (5)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Architecture</span><span class="catCounter"> (5)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="catTitle">Food</span><span class="catCounter"> (5)</span></a>
                            </li>
                        </ul>

                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-12 footer-widget twitter-widget">
                        <h3 class="widget-title">Latest Tweets</h3>
                        <ul>
                            <li>
                                <div class="tweet-text">
                                    <span>About 13 days ago</span>
                                    Please, Wait for the next version of our templates to update #Joomla 3.7
                                    <a href="#">https://t.co/LlEv8HgokN</a>
                                </div>
                            </li>
                            <li>
                                <div class="tweet-text">
                                    <span>About 15 days ago</span>
                                    #WordPress 4.8 is here!
                                    <a href="#">https://t.co/uDjRH4Gya9</a>
                                </div>
                            </li>
                            <li>
                                <div class="tweet-text">
                                    <span>About 1 month ago</span>
                                    Please, Wait for the next version of our templates to update #Joomla 3.7
                                    <a href="#">https://t.co/LlEv8HgokN</a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- Col end -->

                    <div class="col-md-3 col-sm-12 footer-widget">
                        <h3 class="widget-title">Post Gallery</h3>
                        <div class="gallery-widget">
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/health1.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food3.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/travel4.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/architecture1.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/tech/gadget1.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/tech/gadget2.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/tech/game2.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/tech/robot5.jpg') }}" alt=""></a>
                            <a href="#"><img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/travel5.jpg') }}" alt=""></a>
                        </div>
                    </div><!-- Col end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="footer-info text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-info-content">
                            <div class="footer-logo">
                                <img class="img-responsive" src="{{ asset('frontend/images/logos/footer-logo.png') }}" alt="">
                            </div>
                            <p>News247 Worldwide is a popular online newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
                            <p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
                            <p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p>
                            <ul class="unstyled footer-social">
                                <li>
                                    <a title="Rss" href="#">
                                        <span class="social-icon"><i class="fa fa-rss"></i></span>
                                    </a>
                                    <a title="Facebook" href="#">
                                        <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                    </a>
                                    <a title="Twitter" href="#">
                                        <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                    </a>
                                    <a title="Google+" href="#">
                                        <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                                    </a>
                                    <a title="Linkdin" href="#">
                                        <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                    </a>
                                    <a title="Skype" href="#">
                                        <span class="social-icon"><i class="fa fa-skype"></i></span>
                                    </a>
                                    <a title="Skype" href="#">
                                        <span class="social-icon"><i class="fa fa-dribbble"></i></span>
                                    </a>
                                    <a title="Skype" href="#">
                                        <span class="social-icon"><i class="fa fa-pinterest"></i></span>
                                    </a>
                                    <a title="Skype" href="#">
                                        <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- Footer info content end -->
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer info end -->

    </footer><!-- Footer end -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="copyright-info">
                        <span>Copyright © 2017 News247 All Rights Reserved. Designed By Tripples</span>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="footer-menu">
                        <ul class="nav unstyled">
                            <li><a href="#">Site Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertisement</a></li>
                            <li><a href="#">Cookies Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- Row end -->

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>

        </div><!-- Container end -->
    </div><!-- Copyright end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <!-- Color box -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.colorbox.js') }}"></script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="{{ asset('frontend/js/smoothscroll.js') }}"></script>


    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>

    @yield('script')

</div><!-- Body inner end -->
</body>
</html>
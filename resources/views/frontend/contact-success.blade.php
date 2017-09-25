@extends('../layouts.frontend')
@section('page-title')
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>
@endsection
@section('page-content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h3 class="text-success">Hi {{ $contact->name }}, your message successfully sent to us. We will response you back soon</h3>


                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget color-default">
                            <h3 class="block-title"><span>Popular News</span></h3>

                            <div class="post-overaly-style clearfix">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/health4.jpg') }}" alt="">
                                    </a>
                                </div>

                                <div class="post-content">
                                    <a class="post-cat" href="#">Health</a>
                                    <h2 class="post-title">
                                        <a href="#">Smart packs parking sensor tech and beeps when col…</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">Feb 06, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->


                            <div class="list-post-block">
                                <ul class="list-post">
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/tech/gadget3.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Gadgets</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Panasonic's new Sumix CH7 an ultra portable filmmaker's drea…</a>
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
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/travel5.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Travel</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Hynopedia helps female travelers find health care...</a>
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
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/tech/robot5.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Robotics</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Robots in hospitals can be quite handy to navigate around...</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 19, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 3 end -->

                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->
                                    <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset('frontend/images/news/lifestyle/food1.jpg') }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Food</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">Tacos ditched the naked chicken chalupa, so here's how…</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">Feb 27, 2017</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 4 end -->

                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div>
                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- First block end -->

@endsection

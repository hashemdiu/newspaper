@extends('../layouts.frontend')
@section('header-slider')
    <section class="featured-post-area no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12 pad-r">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                        @foreach($sliderPosts as $sliderPost)
                            <div class="item" style="background-image:url({{ asset($sliderPost->images->first()->image_url) }})">
                                <div class="featured-post">
                                    <div class="post-content">
                                        <a class="post-cat" href="#">{{ $sliderPost->categories->first()->category_name }}</a>
                                        <h2 class="post-title title-extra-large">
                                            <a href="#">{{ $sliderPost->title }}</a>
                                        </h2>
                                        <span class="post-date">{{ $sliderPost->updated_at->diffForHumans() }}</span>
                                    </div>
                                </div>

                        </div>
                        @endforeach
                    </div><!-- Featured owl carousel end-->
                </div><!-- Col 7 end -->

                <div class="col-md-5 col-xs-12 pad-l">
                    <div class="row">
                        <?php $i=1 ?>
                        @foreach($topPosts as $topPost)
                            @if($i==1)
                                <div class="col-sm-12">
                                    <div class="post-overaly-style contentTop hot-post-top clearfix">
                                        <div class="post-thumb">
                                            <a href="#"><img class="img-responsive" src="{{ asset($topPost->images->first()->image_url) }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-cat" href="#">{{ $topPost->categories->first()->category_name }}</a>
                                            <h2 class="post-title title-large">
                                                <a href="#">{{ $topPost->title }}</a>
                                            </h2>
                                            <span class="post-date">{{ $topPost->updated_at->diffForHumans() }}</span>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly end -->
                                </div>
                            @elseif($i==2)

                                <div class="col-sm-6 pad-r-small">
                                    <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                        <div class="post-thumb">
                                            <a href="#"><img class="img-responsive" src="{{ asset($topPost->images->first()->image_url) }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-cat" href="#">{{ $topPost->categories->first()->category_name }}</a>
                                            <h2 class="post-title title-medium">
                                                <a href="#">{{ $topPost->title }}</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly end -->
                                </div><!-- Col end -->
                            @elseif($i==3)

                                <div class="col-sm-6 pad-l-small">
                                    <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                        <div class="post-thumb">
                                            <a href="#"><img class="img-responsive" src="{{ asset($topPost->images->first()->image_url) }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <a class="post-cat" href="#">{{ $topPost->categories->first()->category_name }}</a>
                                            <h2 class="post-title title-medium">
                                                <a href="#">{{ $topPost->title }}</a>
                                            </h2>
                                        </div><!-- Post content end -->
                                    </div><!-- Post Overaly end -->
                                </div><!-- Col end -->
                            @endif
                                <?php $i++ ?>
                        @endforeach
                    </div>
                </div><!-- Col 5 end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Trending post end -->
@endsection

@section('page-content')
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="latest-news block color-red">
                        <h3 class="block-title"><span>Latest News</span></h3>

                        <div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
                            <?php $i = 1 ?>
                            @foreach($latestNewses as $latestNews)
                                @if($i==1)
                                    <div class="item">
                                        <ul class="list-post">
                                            <?php $i = 0 ; $li =0 ?>
                                            @endif
                                            <li class="clearfix">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="#"><img class="img-responsive" src="{{ asset($latestNews->images->first()->image_url) }}" alt=""></a>
                                                    </div>
                                                    <a class="post-cat" href="#">Health</a>
                                                    <div class="post-content">
                                                        <h2 class="post-title title-medium">
                                                            <a href="#">{{ str_limit($latestNews->title,50,'...') }}</a>
                                                        </h2>
                                                        <div class="post-meta">
                                                            <span class="post-author"><a href="#">John Doe</a></span>
                                                            <span class="post-date">{{ $latestNews->updated_at->diffForHumans() }}</span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </li><!-- Li end -->
                                            <?php $li = $li+1 ?>

                                            <div class="gap-30"></div>
                                            @if($li==2)
                                        </ul><!-- List post 1 end -->
                                    </div><!-- Item 1 end -->
                                    <?php $i = 1 ?>
                                @endif
                            @endforeach
                        </div><!-- Latest News owl carousel end-->
                    </div>
                    <div class="gap-50"></div>

                    <div class="block">
                        <div class="featured-tab color-blue">
                            <h3 class="block-title"><span>All Categories</span></h3>
                            <ul class="nav nav-tabs">
                                <?php $item = 1 ?>
                                @foreach($menus as $menu)
                                    <li class="{{ $item==1?'active':'' }}">
                                        <a class="animated fadeIn" href="#{{ $menu->id }}" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">{{ $menu->category_name }}</span>
                                        </span>
                                        </a>
                                    </li>
                                    <?php $item++ ?>
                                @endforeach
                            </ul>
                            <div class="tab-content">
                                <?php $item = 1 ?>
                                @foreach($menus as $categoryPost)

                                    <div class="tab-pane {{ $item==1?'active':'' }} animated fadeInRight" id="{{ $categoryPost->id }}">
                                        <div class="row">
                                            <?php $pitem = 1  ?>
                                            @foreach($categoryPost->recentPosts as $catPost)
                                                @if($pitem == 1)
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="post-block-style clearfix">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-responsive" src="{{ asset($catPost->images->first()->image_url) }}" alt="">
                                                                </a>
                                                            </div>
                                                            <a class="post-cat" href="#">Gadgets</a>
                                                            <div class="post-content">
                                                                <h2 class="post-title">
                                                                    <a href="#">{{ $catPost->title }}</a>
                                                                </h2>
                                                                <div class="post-meta">
                                                                    <span class="post-author"><a href="#">John Doe</a></span>
                                                                    <span class="post-date">{{ $catPost->updated_at->diffForHumans() }}</span>
                                                                </div>
                                                                <div>
                                                                    {!! str_limit($catPost->content,250,'...') !!}
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post Block style end -->
                                                    </div>
                                                @else
                                                    @if($pitem == 2)
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="list-post-block">
                                                                    <ul class="list-post">
                                                    @endif
                                                                        <li class="clearfix">
                                                                            <div class="post-block-style post-float clearfix">
                                                                                <div class="post-thumb">
                                                                                    <a href="#">
                                                                                        <img class="img-responsive" src="{{ asset('frontend/images/news/tech/gadget2.jpg') }}" alt="">
                                                                                    </a>
                                                                                </div><!-- Post thumb end -->

                                                                                <div class="post-content">
                                                                                    <h2 class="post-title title-small">
                                                                                        <a href="#">{!! $catPost->title !!}</a>
                                                                                    </h2>
                                                                                    <div class="post-meta">
                                                                                        <span class="post-date">{{ $catPost->updated_at->diffForHumans() }}</span>
                                                                                    </div>
                                                                                </div><!-- Post content end -->
                                                                            </div><!-- Post block style end -->
                                                                        </li>
                                                    @if($pitem == count($categoryPost->recentPosts))
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    @endif
                                                @endif
                                                <?php $pitem++ ?>
                                            @endforeach
                                        </div>
                                    </div>
                                    <?php $item++ ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
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

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                @foreach($specialCategories as $specialCategory)
                    <div class="col-md-4">
                        <div class="block color-dark-blue">
                            <h3 class="block-title"><span>{{ $specialCategory->category_name }}</span></h3>
                            <?php $i=1 ?>
                            @foreach($specialCategory->lastSpecialPosts as $specialPost)
                                @if($i==1)
                                    <div class="post-overaly-style clearfix">
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset($specialPost->images->first()->image_url ) }}" alt="">
                                            </a>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="post-title">
                                                <a href="#">{{ $specialPost->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-date">{{ $specialPost->updated_at->diffForHumans() }}</span>
                                            </div>
                                        </div><!-- Post content end -->
                                        <!-- Post Overaly Article end -->
                                    </div>
                                        @elseif( $i==2)

                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                    @endif
                                                    @if($i>1)
                                                        <li class="clearfix">
                                                            <div class="post-block-style post-float clearfix">
                                                                <div class="post-thumb">
                                                                    <a href="#">
                                                                        <img class="img-responsive" src ="{{ asset($specialPost->images->first()->image_url ) }}" alt="">
                                                                    </a>
                                                                </div><!-- Post thumb end -->

                                                                <div class="post-content">
                                                                    <h2 class="post-title title-small">
                                                                        <a href="#">{{ $specialPost->title }}</a>
                                                                    </h2>
                                                                    <div class="post-meta">
                                                                        <span class="post-date">{{ $specialPost->updated_at->diffForHumans() }}</span>
                                                                    </div>
                                                                </div><!-- Post content end -->
                                                            </div><!-- Post block style end -->
                                                        </li><!-- Li 1 end -->
                                                    @endif
                                                    @if($i==count($specialCategory->lastSpecialPosts && $i>1))
                                                </ul><!-- List post end -->
                                            </div><!-- List post block end -->

                                        @endif
                                        <?php $i++ ?>
                                        @endforeach
                                    </div><!-- Block end -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- Container end -->
    </section>
@endsection

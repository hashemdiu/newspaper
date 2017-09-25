@extends('../layouts.frontend')
@section('page-title')
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>{{ $category->category_name }}</li>
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

                    <div class="block category-listing category-style2">
                        <h3 class="block-title"><span>{{ $category->category_name }}</span></h3>

                        @foreach($posts as $post)
                            <div class="post-block-style post-list clearfix">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6">
                                        <div class="post-thumb thumb-float-style">
                                            <a href="{{ route('single-post',[ 'id' => $post->id]) }}">
                                                <img class="img-responsive" src="{{ asset($post->images->first()->image_url) }}" alt="">
                                            </a>
                                            <a class="post-cat" href="#">{{ $category->category_name }}</a>
                                        </div>
                                    </div><!-- Img thumb col end -->

                                    <div class="col-md-7 col-sm-6">
                                        <div class="post-content">
                                            <h2 class="post-title title-large">
                                                <a href="{{ route('single-post',[ 'id' => $post->id]) }}">{{ $post->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="post-author"><a href="#">John Doe</a></span>
                                                <span class="post-date">{{ $post->updated_at->diffForHumans() }}</span>
                                                <span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span>
                                            </div>
                                            <div>
                                                {!! str_limit($post->content,250,'...') !!}
                                            </div>
                                        </div><!-- Post content end -->
                                    </div><!-- Post col end -->
                                </div><!-- 2nd row end -->
                            </div>
                        @endforeach


                    </div><!-- Block Technology end -->

                    <div class="paging">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">»</a></li>
                            <li>
                                <span class="page-numbers">Page 1 of 2</span>
                            </li>
                        </ul>
                    </div>


                </div><!-- Content Col end -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <div class="widget">
                            <h3 class="block-title"><span>Follow Us</span></h3>

                            <ul class="social-icon">
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- Widget Social end -->

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
                                    <h2 class="post-title title-small">
                                        <a href="#">Smart packs parking sensor tech and beeps when col…</a>
                                    </h2>
                                    <div class="post-meta">
                                        <span class="post-date">Feb 06, 2017</span>
                                    </div>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly Article end -->


                            <div class="list-post-block">
                                <ul class="list-post">
                                    @foreach($latestPosts as $latestPost)
                                        <li class="clearfix">
                                        <div class="post-block-style post-float clearfix">
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="{{ asset($latestPost->images->first()->image_url) }}" alt="">
                                                </a>
                                                <a class="post-cat" href="#">Gadgets</a>
                                            </div><!-- Post thumb end -->

                                            <div class="post-content">
                                                <h2 class="post-title title-small">
                                                    <a href="#">{{ $latestPost->title }}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="post-date">{{ $latestPost->updated_at->diffForHumans() }}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div><!-- Post block style end -->
                                    </li><!-- Li 1 end -->
                                    @endforeach

                                </ul><!-- List post end -->
                            </div><!-- List post block end -->

                        </div><!-- Popular news widget end -->

                        <div class="widget text-center">
                            <img class="banner img-responsive" src="{{ asset('frontend/images/banner-ads/ad-sidebar.png') }}" alt="">
                        </div><!-- Sidebar Ad end -->

                        <div class="widget m-bottom-0">
                            <h3 class="block-title"><span>Newsletter</span></h3>
                            <div class="ts-newsletter">
                                <div class="newsletter-introtext">
                                    <h4>Get Updates</h4>
                                    <p>Subscribe our newsletter to get the best stories into your inbox!</p>
                                </div>

                                <div class="newsletter-form">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
                                            <button class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Newsletter end -->
                        </div><!-- Newsletter widget end -->

                    </div><!-- Sidebar right end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section>
@endsection
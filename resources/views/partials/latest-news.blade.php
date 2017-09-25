<div class="tab-content">
    <?php $item = 1 ?>
    @foreach($menus as $categoryPost)

        <div class="tab-pane {{ $item==1?'active':'' }} animated fadeInRight" id="{{ $categoryPost->id }}">
            <div class="row">
                <?php $first = 1 ?>
                @foreach($categoryPost->recentPosts as $catPost)
                    @if($first == 1)
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
                        @if($first == 2)
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
                                        @if($first == 5)
                                    </ul><!-- List post end -->
                                </div><!-- List post block end -->
                            </div>
                        @endif
                    @endif

                    <?php $first = $first + 1 ?>
                @endforeach
            </div><!-- Tab pane Row 1 end -->

        </div>
        <?php $item++ ?>
    @endforeach
</div>

<div class="row">
    <?php $first = 1 ?>
    @foreach($categoryPost->recentPosts as $catPost)
        @if($first == 1)
            <div class="col-md-6 col-sm-6">
                <div class="post-block-style clearfix">
                    <div class="post-thumb">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset($catPost->images->first()->image_url) }}" alt="">
                        </a>
                    </div>
                </div><!-- Post Block style end -->
            </div>
        @else
            @if($first==2)
                <div class="col-md-6 col-sm-6">
                    <div class="list-post-block">
                        <ul class="list-post">
            @endif
                            <li>{{ $catPost->title }}</li>
            @if($first==count($catPost))
                        </ul>
                    </div>
                </div>
            @endif

        @endif

        <?php $first = $first + 1 ?>
    @endforeach
</div>
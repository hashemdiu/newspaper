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

                    <h3>Contact Us</h3>
                    <p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted</p>

                    <div class="widget contact-info">

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>News247 Webagency</h4>
                                <p>Hungry Center, 3021 Horizon Circle</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>Mail Us</h4>
                                <p>contact@cornike.com.uk</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-box-content">
                                <h4>Call Us</h4>
                                <p>+253-480-8973</p>
                            </div>
                        </div>

                    </div><!-- Widget end -->

                    <h3>Contact Form</h3>
                    <div class="alert" id="form-message" style="display: none"></div>
                    <form id="contactForm" action="{{ route('contact') }}" method="post" role="form">
                        {{ csrf_field() }}
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>



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

@section('script')
    <script>
        $(document).ready(function() {

            // process the form
            $('#contactForm').submit(function(event) {
                var formData = $("#contactForm").serialize();


                /*alert(formData);*/

                $.ajax({
                    url:"contact",
                    type:'post',
                    data:formData,
                    success:function(data){
                        $("#form-message").html("Hi "+data.name+" , "+data.message);
                        $("#form-message").removeClass('alert-danger');
                        $("#form-message").addClass('alert-success');
                        $("#form-message").css("display","block");
                        $('#contactForm')[0].reset();

                    },
                    error: function (data) {
                        if(data.status == 500)
                            var $msg = "All field is required";
                        else
                            var $msg = "Opps! Somthing went wrong. Please check your internet connection";
                        $("#form-message").removeClass('alert-success');
                        $("#form-message").html($msg);
                        $("#form-message").addClass('alert-danger');
                        $("#form-message").css("display","block");
                    }
                });

                return false;
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $("#search-field").keyup(function () {
                var $text = $(this).val();
                if($text != ""){
                    $.ajax({
                        url:"get-ajax-data/"+$text,
                        type:'get',
                        success:function(data){

                            var $dataContent = '<ul class="list-post">';
                            data.posts.forEach(function (post) {
                                $dataContent += '<li class="clearfix"><div class="post-block-style post-float clearfix"><div class="post-content">' +
                                    '<h2 class="post-title title-small"><a href="#">'+post.title+'</a></h2></div>'+'</div></li>'
                            });
                            $dataContent += '</ul>';
                            $("#search-result").html($dataContent);

                        },
                        error: function (data) {
                            console.log(data);
                        }
                    });
                }
            });
        });
    </script>
@endsection



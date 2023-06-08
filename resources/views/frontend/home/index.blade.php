@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- Start Banner Area -->
    @include('frontend.home.banner')
    <!-- End Banner Area -->

    <!-- Start About Area  -->
    @include('frontend.home.about')
    <!-- End About Area  -->
    <!-- Start Testimonial Area   -->
    @include('frontend.home.review')
    <!-- End Testimonial Area   -->
    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{asset('/frontend/')}}/assets/images/course/develop-voice.png" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h4 class="rbt-card-title text-center"><a >Develop Your Voice</a>
                            </h4>
                            <p class="rbt-card-text text-center">Learn How to Design Your <br/>Unforgettable Brand Persona</p>
                        </div>
                    </div>
                </div>

                <!-- End Single Course  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{asset('/frontend/')}}/assets/images/course/story.png" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h4 class="rbt-card-title text-center"><a >Connect With Your Story</a>
                            </h4>
                            <p class="rbt-card-text text-center">Get Our TWT Story Blueprint <br/>for Effortless Writing</p>
                        </div>
                    </div>
                </div>
                <!-- Start Single Course  -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="">
                                <img src="{{asset('/frontend/')}}/assets/images/course/Expert.png" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h4 class="rbt-card-title text-center"><a >Uplevel Your Expert Status</a>
                            </h4>
                            <p class="rbt-card-text text-center">Create a Sacred Up leveling Ritual  <br/>That Exponentially Explodes Your Business</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Course  -->
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Course Area -->
    <!-- Start CallTo Action Area  -->
    <div class="rbt-call-to-action-area rbt-section-gap bg-gradient-8">
        <div class="rbt-callto-action rbt-cta-default style-6">
            <div class="container">
                <div class="row g-5 align-items-center content-wrapper">
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="inner-content text-start">
                            <p class="color-white">Through her online courses and Facebook mastermind community, Janine cultivates an indubitably, self-affirming confidence of “Wow! This isn’t as hard as I thought. I truly can do this.”
                                She proves that by grasping the bigger picture and focusing on action steps, even the most tech adverse DIYer can circumvent overwhelm, frustration, and self-doubt thereby generating massive momentum,
                                cultivating superior communication, and upleveling expert status in ways never believed before.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End CallTo Action Area  -->
    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12" data-sal="slide-up" data-sal-duration="700">
                    <div class="inner pl--50 pl_sm--5">
                        <div class="content text-start">
                            <h3 class="title">Fantastic! I'm totally in... Where do I Start?</h3>
                            <p class="description mt--30"><strong>There is one little secret strategy that every expert knows.</strong> </p>
                            <p class="description">
                                Every established, known expert has at least one published book under their belt. When you join this elite community of published authors, you instantaneously show the world you are an expert in your given field. Not only are you saying you know what you are talking about, but the world now believes you know what you are talking about. Simply because you are a published author.
                            </p>
                            <p class="description">
                                Publishing a book is like winning the lottery and becoming an instant millionaire. By doing this one little thing, you gain instant credibility, you win the “like, know, and trust” factor, and you immediately stand yourself out in an extremely, crowded arena.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Course Area -->
    @include('frontend.home.course')
    <!-- End Course Area -->
    <div class="rbt-about-area bg-color-white rbt-section-gap" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">Read Janine's Story</span>
                            <h2 class="title">Join our collaborative?.</h2>
                            <p class="description mt--20">
                                Join our collaborative of exploding expressionists making connections all over the world.  Our Facebook group is for entrepreneurs and authors who want to “Explode Their Expressions.” Get access to hours of FREE training, motivation, and inspiration to explode your Confidence, Clarity, and Publicity through
                            </p>
                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y" href="{{url('/janine-history')}}">
                                    <span data-text="Janine's Story">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 rbt-cat-box-1 order-lg-2">
                    <div class="content">
                        <a href="{{url('https://www.facebook.com/SM99Shopping')}}" target="_blank">
                            <img src="{{asset('/frontend/')}}/assets/images/about/fbgroup.png" alt="About Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-3 bg-gradient-6 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div class="banner-content ">
                            <div class="inner">
                                <div class="section-title text-start">
                                    <span class="subtitle bg-pink-opacity">THE OFFER FOR YOU</span>
                                </div>
                                <h1 class="title">Online Learning <br /> Management System</h1>
                                <p class="description">We are experienced in educational platform and skilled strategies
                                    for
                                    the success of our online learning.</p>
                                <div class="rating mb--20">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="rbt-like-total">
                                    <div class="profile-share">
                                        <a href="#" class="avatar" data-tooltip="Mark JOrdan" tabindex="0"><img src="{{asset('/frontend/')}}/assets/images/testimonial/client-03.png" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Mark" tabindex="0"><img src="{{asset('/frontend/')}}/assets/images/testimonial/client-04.png" alt="education"></a>
                                        <a href="#" class="avatar" data-tooltip="Jordan" tabindex="0"><img src="{{asset('/frontend/')}}/assets/images/testimonial/client-06.png" alt="education"></a>
                                        <div class="more-author-text">
                                            <h5 class="total-join-students">Join Over 3000+ Students</h5>
                                            <p class="subtitle">Have a new ideas every week.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="rbt-contact-form contact-form-style-1">
                            <h3 class="title">Get a Free TWT Online Course</h3>
                            <form id="contact-form">
                                <div class="form-group">
                                    <input name="con_name" type="text" />
                                    <label>Name</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input name="con_email" type="email">
                                    <label>Email</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <textarea></textarea>
                                    <label>Message</label>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">GET IT NOW</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-wrapper">
            <div class="left-shape">
                <img src="{{asset('/frontend/')}}/assets/images/icons/three-shape.png" alt="Shape Images">
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <div class="rbt-about-area bg-color-white rbt-section-gap" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 rbt-cat-box-1 order-2 order-lg-1 ">
                    <div class="content">
                        <a href="{{url('https://www.facebook.com/SM99Shopping')}}" target="_blank">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{asset('/frontend/')}}/assets/images/about/book-cover.png" alt="About Images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="inner">
                        <div class="section-title text-start" data-parallax='{"x": 0, "y": 80}'>
                            <h2 class="title theme-gradient rbt-display-1">Awaken Your LIMITLESS Self</h2>
                            <div class="pricing-right position-relative mt-5">
                                <div class="pricing-offer">
                                    <div class="single-list">
                                        <ul class="plan-offer-list">
                                            <li>
                                                <i class="feather-check"></i> THERE IS MORE
                                            </li>
                                            <li>
                                                <i class="feather-check"></i> THERE IS BETTER
                                            </li>
                                            <li>
                                                <i class="feather-check"></i> YOU ARE DESTINED FOR GREATNESS
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gap bg-color-extra2">
        <div class="container">
            <div class="row g-5 align-items-center mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <span class="subtitle bg-pink-opacity">Blog Post</span>
                        <h2 class="title">Post Popular Post.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="blog.html">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">See All Articles</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">
                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="blog-details.html">
                                <img src="{{asset('/frontend/')}}/assets/images/blog/blog-card-01.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="blog-details.html">React</a></h3>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="blog-details.html">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="blog-details.html">
                                <img src="{{asset('/frontend/')}}/assets/images/blog/blog-card-02.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="blog-details.html">Why Is Education So Famous?</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="blog-details.html">
                                <img src="{{asset('/frontend/')}}/assets/images/blog/blog-card-03.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="blog-details.html">Difficult Things About Education.</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="blog-details.html">
                                <img src="{{asset('/frontend/')}}/assets/images/blog/blog-card-04.jpg" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="blog-details.html">Education Is So Famous, But Why?</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="blog-details.html">Read Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->

    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="inner">
                        <div class="section-title text-center text-lg-start">
                            <h4 class="title"><strong>Subscribe</strong> <br> <span class="w-400">Our Newsletter</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 text-start text-sm-end">
                    <form action="#" class="newsletter-form-1 me-0">
                        <input type="email" placeholder="Enter Your E-Email">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                        <span class="btn-text">Subscribe</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

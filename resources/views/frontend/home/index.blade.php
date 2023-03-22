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
    <!-- Start Course Area -->
    @include('frontend.home.course')
    <!-- End Course Area -->

    <!-- Start About Area  -->
    <div class="rbt-about-area bg-color-white rbt-section-gapTop pb_md--80 pb_sm--80 about-style-1">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{asset('/frontend/')}}/assets/images/about/about-01.png" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{asset('/frontend/')}}/assets/images/about/about-02.png" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{asset('/frontend/')}}/assets/images/about/about-03.png" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">Know About Histudy <br /> Learning Platform</h2>
                        </div>

                        <p class="description mt--30">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Flexible Classes</h6>
                                    <p class="feature-description">It is a long established fact that a reader will
                                        be distracted by this on readable content of when looking at its layout.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Learn From Anywhere</h6>
                                    <p class="feature-description">Sed distinctio repudiandae eos recusandae laborum eaque non eius iure suscipit laborum eaque non eius iure suscipit.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">More About Us</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->


    <!-- Start Testimonial Area   -->
    @include('frontend.home.review')
    <!-- End Testimonial Area   -->
    <div class="rbt-team-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Our Teacher</span>
                        <h2 class="title">Whose Inspirations You</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                <div class="col-lg-7">
                    <!-- Start Tab Content  -->
                    <div class="rbt-team-tab-content tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="team-tab1" role="tabpanel" aria-labelledby="team-tab1-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-01.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">Mames Mary</h4>
                                        <span class="designation theme-gradient">English Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="team-tab2" role="tabpanel" aria-labelledby="team-tab2-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-02.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">Robert Song</h4>
                                        <span class="designation theme-gradient">Math Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>Education The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="team-tab3" role="tabpanel" aria-labelledby="team-tab3-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-03.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">William Susan</h4>
                                        <span class="designation theme-gradient">React Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>React The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="team-tab4" role="tabpanel" aria-labelledby="team-tab4-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-04.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">Soseph Sara</h4>
                                        <span class="designation theme-gradient">Web Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="team-tab5" role="tabpanel" aria-labelledby="team-tab5-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-05.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">Thomas Dal</h4>
                                        <span class="designation theme-gradient">Graphic Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="team-tab6" role="tabpanel" aria-labelledby="team-tab6-tab">
                            <div class="inner">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-06.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                                <div class="rbt-team-details">
                                    <div class="author-info">
                                        <h4 class="title">Christopher Lisa</h4>
                                        <span class="designation theme-gradient">English Teacher</span>
                                        <span class="team-form">
                                <i class="feather-map-pin"></i>
                                <span class="location">CO Miego, AD,USA</span>
                                            </span>
                                    </div>
                                    <p>Histudy The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                    <ul class="social-icon social-default mt--20 justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com/">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="rbt-information-list mt--25">
                                        <li>
                                            <a href="#"><i class="feather-phone"></i>+1-202-555-0174</a>
                                        </li>
                                        <li>
                                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="top-circle-shape"></div>
                    </div>
                    <!-- End Tab Content  -->
                </div>

                <div class="col-lg-5">
                    <!-- Start Tab Nav  -->
                    <ul class="rbt-team-tab-thumb nav nav-tabs" id="myTab" role="tablist">
                        <li>
                            <a class="active" id="team-tab1-tab" data-bs-toggle="tab" data-bs-target="#team-tab1" role="tab" aria-controls="team-tab1" aria-selected="true">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-01.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a id="team-tab2-tab" data-bs-toggle="tab" data-bs-target="#team-tab2" role="tab" aria-controls="team-tab2" aria-selected="false">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-02.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a id="team-tab3-tab" data-bs-toggle="tab" data-bs-target="#team-tab3" role="tab" aria-controls="team-tab3" aria-selected="false">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-03.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a id="team-tab4-tab" data-bs-toggle="tab" data-bs-target="#team-tab4" role="tab" aria-controls="team-tab4" aria-selected="false">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-04.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a id="team-tab5-tab" data-bs-toggle="tab" data-bs-target="#team-tab5" role="tab" aria-controls="team-tab5" aria-selected="false">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-05.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a id="team-tab6-tab" data-bs-toggle="tab" data-bs-target="#team-tab6" role="tab" aria-controls="team-tab6" aria-selected="false">
                                <div class="rbt-team-thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('/frontend/')}}/assets/images/team/team-06.jpg" alt="Testimonial Images">
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <!-- End Tab Content  -->
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

    <div class="rbt-newsletter-area newsletter-style-2 bg-color-primary rbt-section-gap">
        <div class="container">
            <div class="row row--15 align-items-center">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <div class="section-title text-center">
                            <span class="subtitle bg-white-opacity">Get Latest Histudy Update</span>
                            <h2 class="title color-white"><strong>Subscribe</strong> Our Newsletter</h2>
                            <p class="description color-white mt--20">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam explicabo sit est eos earum reprehenderit inventore nam autem corrupti rerum!</p>
                        </div>
                        <form action="#" class="newsletter-form-1 mt--40">
                            <input type="email" placeholder="Enter Your E-Email">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                                    <span class="icon-reverse-wrapper">
                            <span class="btn-text">Subscribe</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                            </button>
                        </form>
                        <span class="note-text color-white mt--20">No ads, No trails, No commitments</span>

                        <div class="row row--15 mt--50">
                            <!-- Start Single Counter -->
                            <div class="col-lg-3 offset-lg-3 col-md-6 col-sm-6 single-counter">
                                <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                    <div class="inner">
                                        <div class="content">
                                            <h3 class="counter color-white"><span class="odometer" data-count="500">00</span>
                                            </h3>
                                            <h5 class="title color-white">Successfully Trained</h5>
                                            <span class="subtitle color-white">Learners &amp; counting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter -->

                            <!-- Start Single Counter -->
                            <div class="col-lg-3 col-md-6 col-sm-6 single-counter mt_mobile--30">
                                <div class="rbt-counterup rbt-hover-03 style-2 text-color-white">
                                    <div class="inner">
                                        <div class="content">
                                            <h3 class="counter color-white"><span class="odometer" data-count="100">00</span>
                                            </h3>
                                            <h5 class="title color-white">Certification Students</h5>
                                            <span class="subtitle color-white">Online Course</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.master')
@section('title')
    Wishlist
@endsection
@section('content')
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>

    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    @include('frontend.user.include.userHeader')
                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        <div class="col-lg-3">
                            <!-- Start Dashboard Sidebar  -->
                            @include('frontend.user.include.userDashboardSidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>
                        <div class="col-lg-9">
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Wishlist</h4>
                                    </div>
                                    <div class="row g-5">
                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-01.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (15 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">React Front To Back</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>40 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$60</span>
                                                            <span class="off-price">$120</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-02.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (15 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">PHP
                                                            Beginner + Advanced</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>10 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$20</span>
                                                            <span class="off-price">$43</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-03.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (4 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">Angular Zero to
                                                            Mastery</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>14 Lessons</li>
                                                        <li><i class="feather-users"></i>26 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$23</span>
                                                            <span class="off-price">$45</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-04.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                    class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">English Langiage Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-06.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                    class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">Graphic Courses Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>50 Lessons</li>
                                                        <li><i class="feather-users"></i>10 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="{{url('/course-details')}}">
                                                        <img src="{{asset('/frontend/')}}/assets/images/course/course-online-05.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                    class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="{{url('/course-details')}}">Wed Design Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="{{url('/course-details')}}">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Enrole Course  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection

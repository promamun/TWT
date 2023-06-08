@extends('backend.adminMaster')
@section('title')
    Courses-Manage
@endsection
@section('adminContent')
    <div class="col-lg-9">
        <!-- Start Enrole Course  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-6">
                            <h4 class="rbt-title-style-3">My Courses
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{url('/twt/courses/create')}}">
                                    <span data-text="Add New About"> Add New Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="advance-tab-button mb--30">
                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                        <li role="presentation">
                            <a href="#" class="tab-button active" id="publish-tab-4" data-bs-toggle="tab" data-bs-target="#publish-4" role="tab" aria-controls="publish-4" aria-selected="true">
                                <span class="title">Publish</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button" id="pending-tab-4" data-bs-toggle="tab" data-bs-target="#pending-4" role="tab" aria-controls="pending-4" aria-selected="false">
                                <span class="title">Pending</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button" id="draft-tab-4" data-bs-toggle="tab" data-bs-target="#draft-4" role="tab" aria-controls="draft-4" aria-selected="false">
                                <span class="title">Draft</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="publish-4" role="tabpanel" aria-labelledby="publish-tab-4">
                        <div class="row g-5">
                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">PHP
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pending-4" role="tabpanel" aria-labelledby="pending-tab-4">
                        <div class="row g-5">

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">English Langiage Club</a>
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">Graphic Courses Club</a>
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">Wed Design Club</a>
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                        </div>
                    </div>

                    <div class="tab-pane fade" id="draft-4" role="tabpanel" aria-labelledby="draft-tab-4">
                        <div class="row g-5">
                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">PHP
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->

                            <!-- Start Single Course  -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rbt-card variation-01 rbt-hover">
                                    <div class="rbt-card-img">
                                        <a href="course-details.html">
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
                                        <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
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
                                            <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Course  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection

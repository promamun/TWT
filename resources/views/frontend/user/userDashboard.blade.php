@extends('frontend.master')
@section('title')
    Profile
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
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Dashboard</h4>
                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-primary-opacity">
                                                        <i class="feather-book-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-primary"><span class="odometer" data-count="30">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Enrolled Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-secondary-opacity">
                                                        <i class="feather-monitor"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-secondary"><span class="odometer" data-count="10">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">ACTIVE COURSES</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-violet-opacity">
                                                        <i class="feather-award"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-violet"><span class="odometer" data-count="7">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Completed Courses</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                    </div>
                                </div>
                            </div>
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

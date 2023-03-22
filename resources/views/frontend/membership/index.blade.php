@extends('frontend.master')
@section('title')

@endsection
@section('content')
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Membership</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Membership Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->
    <div class="rbt-pricing-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title text-start">
                        <span class="subtitle bg-secondary-opacity">COURSE PRICING</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="pricing-billing-duration text-start text-md-end">
                        <ul>
                            <li class="nav-item">
                                <button class="nav-link yearly-plan-btn" type="button">Yearly Plan</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link monthly-plan-btn active" type="button">Monthly Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Pricing  -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title color-primary">Basic Plan</h3>
                            <span class="rbt-badge mb--35">Free for a Month</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount color-primary">$30.99</span>
                                    <span class="duration color-primary">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount color-primary">$10.00</span>
                                    <span class="duration color-primary">/monthly</span>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-btn">
                            <a class="rbt-btn bg-primary-opacity hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> Unlimited Access Courses</li>
                                <li><i class="feather-check"></i> Certificate After Completion</li>
                                <li class="off"><i class="feather-x"></i> 24/7 Dedicated Support</li>
                                <li class="off"><i class="feather-x"></i> Unlimited Emails</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing  -->

                <!-- Start Single Pricing  -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-2 active">
                        <div class="pricing-header">
                            <div class="pricing-badge"><span>Popular</span></div>
                            <h3 class="title color-secondary">Standard Plan</h3>
                            <span class="rbt-badge mb--35">Most Popular</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount color-secondary">$100.99</span>
                                    <span class="duration color-secondary">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount color-secondary">$20.00</span>
                                    <span class="duration color-secondary">/monthly</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn bg-secondary-opacity hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> Unlimited Access Courses</li>
                                <li><i class="feather-check"></i> Certificate After Completion</li>
                                <li><i class="feather-check"></i> High Resolution Videos</li>
                                <li><i class="feather-check"></i> 24/7 Dedicated Support</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Single Pricing  -->

                <!-- Start Single Pricing  -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="pricing-table style-2">
                        <div class="pricing-header">
                            <h3 class="title color-pink">Exclusive Plan</h3>
                            <span class="rbt-badge mb--35">Free for a Month</span>
                            <div class="price-wrap">
                                <div class="yearly-pricing" style="display: none;">
                                    <span class="amount color-pink">$99.99</span>
                                    <span class="duration color-pink">/yearly</span>
                                </div>
                                <div class="monthly-pricing" style="display: block;">
                                    <span class="amount color-pink">$39.00</span>
                                    <span class="duration color-pink">/monthly</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-btn">
                            <a class="rbt-btn bg-pink-opacity hover-icon-reverse w-100" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Join Course Plan</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <div class="pricing-body">
                            <ul class="list-item">
                                <li><i class="feather-check"></i> Unlimited Access Courses</li>
                                <li><i class="feather-check"></i> Certificate After Completion</li>
                                <li class="off"><i class="feather-x"></i> 24/7 Dedicated Support</li>
                                <li class="off"><i class="feather-x"></i> Unlimited Emails</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- End Single Pricing  -->
            </div>
        </div>
    </div>
@endsection

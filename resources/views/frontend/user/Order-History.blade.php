@extends('frontend.master')
@section('title')
    Order-History
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
                                        <h4 class="rbt-title-style-3">Order History</h4>
                                    </div>

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                        <table class="rbt-table table table-borderless">
                                            <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Course Name</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <th>#5478</th>
                                                <td>App Development</td>
                                                <td>January 27, 2022</td>
                                                <td>$100.99</td>
                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th>#4585</th>
                                                <td>Graphic</td>
                                                <td>May 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th>#9656</th>
                                                <td>Graphic</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <th>#2045</th>
                                                <td>Application</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <th>#5478</th>
                                                <td>App Development</td>
                                                <td>January 27, 2022</td>
                                                <td>$100.99</td>
                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th>#4585</th>
                                                <td>Graphic</td>
                                                <td>May 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th>#9656</th>
                                                <td>Graphic</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <th>#2045</th>
                                                <td>Application</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <th>#5478</th>
                                                <td>App Development</td>
                                                <td>January 27, 2022</td>
                                                <td>$100.99</td>
                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th>#4585</th>
                                                <td>Graphic</td>
                                                <td>May 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th>#9656</th>
                                                <td>Graphic</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <th>#2045</th>
                                                <td>Application</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <th>#5478</th>
                                                <td>App Development</td>
                                                <td>January 27, 2022</td>
                                                <td>$100.99</td>
                                                <td><span class="rbt-badge-5 bg-color-success-opacity color-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th>#4585</th>
                                                <td>Graphic</td>
                                                <td>May 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-primary-opacity">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th>#9656</th>
                                                <td>Graphic</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-warning-opacity color-warning">On Hold</span></td>
                                            </tr>
                                            <tr>
                                                <th>#2045</th>
                                                <td>Application</td>
                                                <td>March 27, 2022</td>
                                                <td>$200.99</td>
                                                <td><span class="rbt-badge-5 bg-color-danger-opacity color-danger">Canceled</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
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

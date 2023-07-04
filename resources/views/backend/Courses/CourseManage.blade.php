@extends('backend.adminMaster')
@section('title')
    Course-Manage
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
                                <a class="rbt-btn btn-border hover-icon-reverse" href="{{url('/twt/course/create')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text"> Add New Courses</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
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
                            @foreach($publish as $data)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{url('/course-details/'.$data->id)}}">
                                                <img src="{{asset('/course/'.$data->image)}}" alt="Card image">
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
                                            <h4 class="rbt-card-title"><a href="{{url('/course-details/'.$data->id)}}">{{$data->title}}</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">${{$data->price}}</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-settings"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link left-icon" href="{{url('/twt/course/edit/'.$data->id)}}"><i class="feather-edit"></i> Edit</a>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link text-danger left-icon" onclick="return confirm('Want to delete')" href="{{url('/twt/course/delete/'.$data->id)}}"><i class="feather-delete"></i> Delete</a>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pending-4" role="tabpanel" aria-labelledby="pending-tab-4">
                        <div class="row g-5">

                            <!-- Start Single Course  -->
                            @foreach($pending as $data)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{url('/course-details/'.$data->id)}}">
                                                <img src="{{asset('/course/'.$data->image)}}" alt="Card image">
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
                                            <h4 class="rbt-card-title"><a href="{{url('/course-details/'.$data->id)}}">{{$data->title}}</a>
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
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-settings"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link left-icon" href="{{url('/twt/course/edit/'.$data->id)}}"><i class="feather-edit"></i> Edit</a>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link text-danger left-icon" onclick="return confirm('Want to delete')" href="{{url('/twt/course/delete/'.$data->id)}}"><i class="feather-delete"></i> Delete</a>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- End Single Course  -->
                        </div>
                    </div>

                    <div class="tab-pane fade" id="draft-4" role="tabpanel" aria-labelledby="draft-tab-4">
                        <div class="row g-5">
                            <!-- Start Single Course  -->
                            @foreach($draft as $data)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover">
                                        <div class="rbt-card-img">
                                            <a href="{{url('/course-details/'.$data->id)}}">
                                                <img src="{{asset('/course/'.$data->image)}}" alt="Card image">
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
                                            <h4 class="rbt-card-title"><a href="{{url('/course-details/'.$data->id)}}">{{$data->title}}</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">${{$data->price}}</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-settings"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link left-icon" href="{{url('/twt/course/edit/'.$data->id)}}"><i class="feather-edit"></i> Edit</a>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item" type="button">
                                                                <a class="rbt-btn-link text-danger left-icon" onclick="return confirm('Want to delete')" href="{{url('/twt/course/delete/'.$data->id)}}"><i class="feather-delete"></i> Delete</a>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                            <!-- End Single Course  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection

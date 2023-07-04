@extends('backend.adminMaster')
@section('title')
    Blog-Manage
@endsection
@section('adminContent')
    <div class="col-lg-9">
        <!-- Start Enrole Course  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-6">
                            <h4 class="rbt-title-style-3">Blog
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-border hover-icon-reverse" href="{{url('/twt/blog/create')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Add New Blog</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <table class="rbt-table table table-borderless">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Date</th>
                            <th> BLog Title</th>
                            <th> BLog Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $data)
                            <tr>
                                <th>
                                    <span class="h6 mb--5">{{$loop->index +1}}</span>
                                </th>
                                <th>
                                    <span class="h6 mb--5">{{date('Y-M-d',strtotime($data->created_at))}}</span>
                                </th>
                                <td>
                                    <span class="h6 mb--5">{{$data->title}}</span>
                                </td>
                                <td>
                                    <div class="rbt-flipbox variation-2">
                                        <div class="rbt-flipbox-wrap rbt-service rbt-service-1">
                                            <div class="rbt-flipbox-front rbt-flipbox-face inner">
                                                <div class="front-thumb w-100">
                                                    <img  src="{{asset('/blog/'.$data->image)}}" alt="card-icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="rbt-button-group justify-content-end">
                                        <a class="rbt-btn-link left-icon" href="{{url('/twt/blog/edit/'.$data->id)}}"><i class="feather-edit"></i> Edit</a>
                                        <a class="rbt-btn-link left-icon" href="{{url('/twt/blog/delete/'.$data->id)}}" onclick="return confirm('Want To Destroy?')"><i class="feather-trash-2"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection

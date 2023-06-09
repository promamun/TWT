@extends('backend.adminMaster')
@section('title')
    About-Create
@endsection
@push('style')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
@endpush
@section('adminContent')
    <div class="col-lg-9">
        <!-- Start Enrole Course  -->
        <textarea name="about" id="about" cols="30" rows="10"></textarea>
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-6">
                            <h4 class="rbt-title-style-3">About Janine
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{url('/twt/about/create')}}">
                                    <span data-text="Add New About"> Add New About</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <table class="rbt-table table table-borderless">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Announcements</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                <span class="h6 mb--5">March 16, 2022</span>
                                <p class="b3">10.00am</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">Announcement Title</span>
                                <p class="b3">Course: Fundamentals 101</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-trash-2"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="h6 mb--5">Janu 16, 2022</span>
                                <p class="b3">12.00am</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">Web Design</span>
                                <p class="b3">Course: Web Design</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-trash-2"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="h6 mb--5">Janu 16, 2022</span>
                                <p class="b3">12.00am</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">App Development</span>
                                <p class="b3">Course: App Development</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-trash-2"></i> Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <span class="h6 mb--5">Janu 16, 2022</span>
                                <p class="b3">12.00am</p>
                            </th>
                            <td>
                                <span class="h6 mb--5">Announcement Title</span>
                                <p class="b3">Course: Web Design</p>
                            </td>
                            <td>
                                <div class="rbt-button-group justify-content-end">
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-edit"></i> Edit</a>
                                    <a class="rbt-btn-link left-icon" href="#"><i class="feather-trash-2"></i> Delete</a>
                                </div>
                            </td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection
@push('script')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
        var editor = new FroalaEditor('#about');
    </script>
@endpush

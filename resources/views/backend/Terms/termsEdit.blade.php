@extends('backend.adminMaster')
@section('title')
    Terms-Update
@endsection
@push('style')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
@endpush
@section('adminContent')
    <div class="col-lg-9">
        <!-- Start Enrole Course  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-6">
                            <h4 class="rbt-title-style-3">Terms Of Use
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{url('/twt/terms/of/use/manage')}}">
                                    <span data-text="Click To Manage"> Terms Manage</span>
                                </a>
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{ url()->previous() }}">
                                    <span data-text="GO Back"> Back</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    @if(Session()->has('error'))
                        <div class="alert alert-danger">{{Session()->get('error')}}</div>
                    @endif
                    <form action="{{url('/twt/terms/of/use/update/'.$termsData->id)}}" method="post">
                        @csrf
                        <textarea name="terms" id="terms" cols="30" rows="10">{!! $termsData->terms !!}</textarea>
                        <button id="submitButton" type="submit" class="rbt-btn btn-sm float-md-end mt-5">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection
@push('script')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
        var editor = new FroalaEditor('#terms');
    </script>
@endpush

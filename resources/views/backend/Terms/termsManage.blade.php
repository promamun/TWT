@extends('backend.adminMaster')
@section('title')
    Terms-Manage
@endsection
@section('adminContent')
    <div class="col-lg-9">
        <!-- Start Enrole Course  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">
                <div class="section-title">
                    <div class="row gy-5 align-items-end">
                        <div class="col-lg-6">
                            <h4 class="rbt-title-style-3">Terms
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a @if($termsCount > 0) disabled="disabled" @endif class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{url('/twt/privacy/policy/create')}}">
                                    <span data-text="Add Policy"> Add New Terms</span>
                                </a>
                                <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="{{ url()->previous() }}">
                                    <span data-text="GO Back"> Back</span>
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
                            <th>DATE</th>
                            <th>DATA</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($termsData as $data)
                            <tr>
                                <th>
                                    <span class="h6 mb--5">{{$loop->index +1}}</span>
                                </th>
                                <th>
                                    <span class="h6 mb--5">{{date('Y-M-d',strtotime($data->created_at))}}</span>
                                </th>
                                <td>
                                <span class="h6 mb--5">
                                    {!! $data->terms !!}
                                </span>
                                </td>
                                <td>
                                    <div class="rbt-button-group justify-content-end">
                                        <a class="rbt-btn-link left-icon" href="{{url('/twt/privacy/policy/edit/'.$data->id)}}"><i class="feather-edit"></i> Edit</a>
                                        <a class="rbt-btn-link left-icon" href="{{url('/twt/privacy/policy/delete/'.$data->id)}}" onclick="return confirm('Want to Destroy?')"><i class="feather-trash-2"></i> Delete</a>
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

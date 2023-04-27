@extends('frontend.master')

@section('content')
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        @if(Session()->has('error'))
                            <div class="alert alert-danger">{{Session()->get('error')}}</div>
                        @endif
                        <h3 class="title">Login</h3>
                        <form  method="post" action="{{url('/twt/login')}}" class="max-width-auto" >
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email" required />
                                <label>Email *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password">
                                <label>Password *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        <a class="rbt-btn-link" href="#">Lost your password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Log In</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection

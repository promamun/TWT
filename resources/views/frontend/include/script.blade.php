<script src="{{asset('/frontend/')}}/assets/js/vendor/modernizr.min.js"></script>
<!-- jQuery JS -->
<script src="{{asset('/frontend/')}}/assets/js/vendor/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('/frontend/')}}/assets/js/vendor/bootstrap.min.js"></script>
<!-- sal.js -->
<script src="{{asset('/frontend/')}}/assets/js/vendor/sal.js"></script>
{{--<script src="{{asset('/frontend/')}}/assets/js/vendor/swiper.js"></script>--}}
<script src="{{asset('/frontend/')}}/assets/js/vendor/magnify.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/jquery-appear.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/odometer.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/backtotop.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/isotop.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/imageloaded.js"></script>

<script src="{{asset('/frontend/')}}/assets/js/vendor/wow.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/waypoint.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/easypie.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/text-type.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/jquery-one-page-nav.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/bootstrap-select.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/jquery-ui.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/magnify-popup.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/paralax-scroll.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/paralax.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/vendor/countdown.js"></script>
<!-- Main JS -->
<script src="{{asset('/frontend/')}}/assets/js/main.js"></script>

<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>

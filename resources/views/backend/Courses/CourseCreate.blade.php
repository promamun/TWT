@extends('backend.adminMaster')
@section('title')
    Course-Create
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
                            <h4 class="rbt-title-style-3">Course
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-border hover-icon-reverse" href="{{url('/twt/course/manage')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text"> Manage Courses</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <div class="wrapper">
                        @if(Session()->has('error'))
                            <div class="alert alert-danger">{{Session()->get('error')}}</div>
                        @endif
                        <form action="{{url('/twt/course/store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-5">
                                <div class="col-lg-12">
                                    <h5>Course Title<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input name="title" value="{{ old('title') }}" type="text">
                                        <label>Title<span class="text-danger">*</span></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Course Banner<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input id="image_input" onchange="validateFileFormat(this)" name="image" accept="image/png, image/jpeg,image/jpg" required type="file">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <div class="rbt-card variation-01 rbt-hover">
                                            <div class="rbt-card-img">
                                                <a href="#">
                                                    <img id="uploaded_image" src="{{asset('/frontend/')}}/assets/images/blog/maxsize.png" alt="blog image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5>Course Description<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <textarea name="description" required id="blog"></textarea>
                                        <label>Course Description<span class="text-danger">*</span></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <h5>What you'll learn<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <textarea name="learn" required id="learn"></textarea>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5>Price<span class="text-danger">*</span></h5>
                                    <div class="form-group">
                                        <input  name="price" required type="text">
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h5>Course Status<span class="text-danger">*</span></h5>
                                    <div class="rbt-modern-select bg-transparent height-45 w-100">
                                        <select required name="status" class="w-100" data-live-search="true" title="Select status" data-size="7" data-actions-box="true" data-selected-text-format="count > 5">
                                            <option value="Publish">Publish</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Draft">Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit-group">
                                    <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Submit</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection
@push('script')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
            var editor1 = new FroalaEditor('#blog');
            var editor2 = new FroalaEditor('#learn');
    </script>
    <script>
        const imageInput = document.getElementById('image_input');
        const uploadedImage = document.getElementById('uploaded_image');
        const maxSize = { width: 710, height: 488 };
        const minSize = { width: 710, height: 488 };

        imageInput.addEventListener('change', function() {
            const file = imageInput.files[0];
            const reader = new FileReader();

            reader.addEventListener('load', function() {
                const img = new Image();
                img.src = reader.result;

                img.addEventListener('load', function() {
                    const resizedImage = resizeImage(img);
                    uploadedImage.src = resizedImage.src;
                });
            });

            if (file) {
                reader.readAsDataURL(file);
            }
        });

        function resizeImage(img) {
            let width = img.width;
            let height = img.height;

            // Check if image exceeds maximum size
            if (width > maxSize.width || height > maxSize.height) {
                const aspectRatio = width / height;

                if (width > maxSize.width) {
                    width = maxSize.width;
                    height = width / aspectRatio;
                }

                if (height > maxSize.height) {
                    height = maxSize.height;
                    width = height * aspectRatio;
                }
            }

            // Check if image is below minimum size
            if (width < minSize.width || height < minSize.height) {
                const aspectRatio = width / height;

                if (width < minSize.width) {
                    width = minSize.width;
                    height = width / aspectRatio;
                }

                if (height < minSize.height) {
                    height = minSize.height;
                    width = height * aspectRatio;
                }
            }

            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;

            const ctx = canvas.getContext('2d');
            ctx.drawImage(img, 0, 0, width, height);

            const resizedImage = new Image();
            resizedImage.src = canvas.toDataURL('image/jpeg');

            return resizedImage;
        }
    </script>
    <script>
        function validateFileFormat(input) {
            const allowedFormats = ['image/png', 'image/jpeg'];
            const file = input.files[0];

            if (file && !allowedFormats.includes(file.type)) {
                alert('Only PNG, JPEG and JPG formats are allowed!');
                input.value = ''; // Clear the selected file
            }
        }
    </script>
@endpush

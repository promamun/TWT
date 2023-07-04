@extends('backend.adminMaster')
@section('title')
    BLog-Update
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
                            <h4 class="rbt-title-style-3">BLog
                            </h4>
                        </div>
                        <div class="col-lg-6 rbt-title-style-3">
                            <div class="call-to-btn text-start text-lg-end position-relative">
                                <a class="rbt-btn btn-border hover-icon-reverse" href="{{url('/twt/blog/manage')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text"> BLog Manage</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <div id="formElements" class="rbt-elements-area bg-color-white rbt-shadow-box mb--60">
                        @if(Session()->has('error'))
                            <div class="alert alert-danger">{{Session()->get('error')}}</div>
                        @endif
                        <div class="wrapper">
                            <form action="{{url('/twt/blog/update/'.$blogs->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <h5>Blog Title<span class="text-danger">*</span></h5>
                                        <div class="form-group">
                                            <span class="focus-border"></span>
                                            <input name="title" value="{{ $blogs->title }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h5>Blog Banner</h5>
                                        <div class="form-group">
                                            <input id="image_input" onchange="validateFileFormat(this)" name="image" accept="image/png, image/jpeg,image/jpg" type="file">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <div class="rbt-card variation-02 height-330 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="#">
                                                        @if($blogs->image)
                                                            <img id="uploaded_image" src="{{asset('/blog/'.$blogs->image)}}" alt="blog image">
                                                        @else
                                                            <img id="uploaded_image" src="{{asset('/frontend/')}}/assets/images/blog/maxsize.png" alt="blog image">
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Blog Description<span class="text-danger">*</span></h5>
                                        <div class="form-group">
                                            <textarea name="description" required id="blogEdit">{{$blogs->description}}</textarea>
                                            <label>Blog Description<span class="text-danger">*</span></label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Select Tags<span class="text-danger">*</span></h5>
                                        <div class="rbt-modern-select bg-transparent height-45 w-100">
                                            <select required name="tags[]" class="w-100" data-live-search="true" title="Select Tags" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 5">
                                                @foreach($blogTags as $data)
                                                    <option value="{{$data->id}}" {{ in_array($data->id, $tag_id) ? 'selected' : '' }}>{{$data->name}}</option>
                                                @endforeach
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
        </div>
        <!-- End Enrole Course  -->
    </div>
@endsection
@push('script')
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>--}}
{{--    <script>--}}
{{--        ClassicEditor--}}
{{--            .create( document.querySelector( '#blogEdit' ),{--}}
{{--                plugins: [ Base64UploadAdapter, /* ... */ ],--}}
{{--                toolbar: [ /* ... */ ]--}}
{{--            } )--}}
{{--            .catch( error => {--}}
{{--                console.error( error );--}}
{{--            } );--}}
{{--    </script>--}}
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
        var editor = new FroalaEditor('#blogEdit');
    </script>
    <script>
        const imageInput = document.getElementById('image_input');
        const uploadedImage = document.getElementById('uploaded_image');
        const maxSize = { width: 638, height: 330 };
        const minSize = { width: 290, height: 150 };

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

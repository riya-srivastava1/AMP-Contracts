<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN row -->
        <div class="row mb-3">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Edit Gallery Image</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('galleryimage.update', $gallery_image->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control mb-5px"
                                        placeholder="Enter title" value="{{ $gallery_image->title }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Image Url</label>
                                <div class="col-md-9 position-relative">
                                    <input class="form-control" id="existing-file" name="image_url" type="file" id="formFile"
                                        placeholder="Enter Image Url" value="{{ $gallery_image->image_url }}" />
                                        <span class="existing-name">{{ $gallery_image->image_url }}</span>

                                    <style>
                                        .existing-name {
                                            position: absolute;
                                            background: #fff;
                                            width: 50%;
                                            top: 20%;
                                            transform: translateY(-50%);
                                            left: 110px;
                                            height: 25%;
                                            display: block;
                                            font-weight: bold;
                                        }
                                        .hide {
                                            display: none;
                                        }
                                    </style>

                                    <img class="mt-1" id="image-preview" src="{{ asset($gallery_image->image_url) ?? '' }}" alt="image" width="50" height="50">
                                </div>
                            </div>
                            <script>
                                const input = document.getElementById('existing-file');
                                const existingName = document.querySelector('.existing-name');
                                const imagePreview = document.getElementById('image-preview');

                                input.addEventListener('change', (e) => {
                                    if (e.target.files && e.target.files[0]) {
                                        const reader = new FileReader();

                                        reader.onload = (event) => {
                                            imagePreview.src = event.target.result;
                                        };

                                        reader.readAsDataURL(e.target.files[0]);

                                        existingName.classList.add('hide');
                                        imagePreview.classList.remove('hide');
                                    } else {
                                        imagePreview.src = "{{ asset($gallery_image->image_url) ?? '' }}";
                                        existingName.classList.remove('hide');
                                        imagePreview.classList.add('hide');
                                    }
                                });
                            </script>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Alt Tag</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="alt_tag" type="text" id="formFile"
                                        placeholder="Enter Alt Tag" value="{{ $gallery_image->alt_tag }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Is Active</label>
                                <div class="col-md-9">
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_slider" value="1"
                                            {{ $gallery_image->is_slider == '1' ? ' checked' : '' }} /> Yes
                                    </label>
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_slider" value="0"
                                            {{ $gallery_image->alt_tag }}
                                            {{ $gallery_image->is_slider == '0' ? 'checked ' : '' }} />  No
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Image Description</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image_description" type="text" id="formFile"
                                        placeholder="Enter Alt Tag" value="{{ $gallery_image->image_description }}" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                    <!-- END panel-body -->

                </div>
                <!-- END panel -->
            </div>
            <!-- END col-6 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END #content -->
</x-app-layout>

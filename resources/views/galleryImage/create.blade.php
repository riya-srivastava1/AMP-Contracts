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
                        <h4 class="panel-title">Gallery Image Form</h4>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('galleryimage.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control mb-5px"
                                        placeholder="Enter title" required/>
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Image Url</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="image_url" type="file" id="formFile"
                                        placeholder="Enter Image Url" required />
                                        <img class="mt-1" width="100" height="100" src="" id="selectedImage"
                                        alt="Selected Image" style="display: none;" />
                                </div>
                            </div>
                            <script>
                                const formFileInput = document.getElementById('formFile');
                                const selectedImage = document.getElementById('selectedImage');

                                formFileInput.addEventListener('change', function() {
                                    if (formFileInput.files && formFileInput.files[0]) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            selectedImage.src = e.target.result;
                                            selectedImage.style.display = 'block';
                                        }

                                        reader.readAsDataURL(formFileInput.files[0]);
                                    } else {
                                        selectedImage.src = '';
                                        selectedImage.style.display = 'none';
                                    }
                                });
                            </script>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Alt Tag</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="alt_tag" type="text" id="formFile"
                                        placeholder="Enter Alt Tag" required/>
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Image Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" type="message" name="image_description" placeholder="Enter Image Description not more than placeholder 200"></textarea>
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Is Active</label>
                                <div class="col-md-9">
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_slider" value="1" /> Yes
                                    </label>
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_slider" value="0" /> No
                                    </label>
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

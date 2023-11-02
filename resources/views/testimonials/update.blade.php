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
                        <h4 class="panel-title"> Edit Testimonials</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('testimonial.update', $testimonial->id) }}"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control mb-5px"
                                        placeholder="Enter Name" value="{{ $testimonial->name }}" required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Company Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="company_name" class="form-control mb-5px"
                                        placeholder="Enter Company Name"
                                        value="{{ $testimonial->company_name }}"required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Designation</label>
                                <div class="col-md-9">
                                    <input type="text" name="designation" class="form-control mb-5px"
                                        placeholder="Enter Designation" value="{{ $testimonial->designation }}"
                                        required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Image</label>
                                <div class="col-md-9 position-relative">
                                    <input class="form-control" id="existing-file" name="image" type="file" />
                                    <span class="existing-name">{{ $testimonial->image }}</span>

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

                                    <img class="mt-1" id="image-preview" src="{{ asset($testimonial->image) ?? '' }}" alt="image" width="50" height="50">
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
                                        imagePreview.src = "{{ asset($testimonial->image) ?? '' }}";
                                        existingName.classList.remove('hide');
                                        imagePreview.classList.add('hide');
                                    }
                                });
                            </script>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Is Active</label>
                                <div class="col-md-9">
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_active" value="1"
                                            {{ $testimonial->is_active == '1' ? ' checked' : '' }} /> Yes
                                    </label>
                                    <label>
                                        <input class="form-check-input" type="radio" name="is_active" value="0"
                                            {{ $testimonial->is_active == '0' ? 'checked ' : '' }} />  No
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

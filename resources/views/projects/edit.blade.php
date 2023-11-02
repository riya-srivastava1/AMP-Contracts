<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('page.index') }}">index</a></li>
            <li class="breadcrumb-item active">update</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Update Page or Heading Data.....</h1>
        <!-- END page-header -->

        <!-- BEGIN row -->
        <div class="row mb-3">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Form Controls</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('project.update', $project->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Company Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="company_name" class="form-control mb-5px"
                                        placeholder="Enter title" value="{{ $project->company_name }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Company Logo</label>
                                <div class="col-md-9 position-relative">
                                    <input class="form-control" id="existing-file" name="company_logo" type="file" id="formFile"
                                        placeholder="Enter Image Url" value="{{ $project->company_logo }}" />
                                        <span class="existing-name">{{ $project->company_logo }}</span>

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

                                    <img class="mt-1" id="image-preview" src="{{ asset($project->company_logo) ?? '' }}" alt="image" width="50" height="50">
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
                                        imagePreview.src = "{{ asset($project->company_logo) ?? '' }}";
                                        existingName.classList.remove('hide');
                                        imagePreview.classList.add('hide');
                                    }
                                });
                            </script>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Location</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="location" type="text"
                                        placeholder="Enter slug url" value="{{ $project->location }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">description</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="description" type="text"
                                        placeholder="Enter slug url" value="{{ $project->description }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Year</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="year" type="text"
                                        placeholder="Enter slug url" value="{{ $project->year }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Project Heading</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="project_heading" type="text"
                                        placeholder="Enter slug url" value="{{ $project->project_heading }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Project Heading</label>
                                <div class="col-md-9">

                                    <select name="is_running" class="form-select">
                                        <option value="{{ $project['is_running'] }}">{{ $project['is_running'] }}</option>
                                        <option value="Running">Running</option>
                                        <option value="Executed">Executed</option>
                                    </select>
                                    <span style="color:red">
                                        @error('is_running')
                                            {{ $message }}
                                        @enderror
                                    </span>
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
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
</x-app-layout>

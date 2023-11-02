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
                        <h4 class="panel-title">Projects</h4>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('project.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Company Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="company_name" type="text" id="formFile"
                                        placeholder="Enter company_name" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">LOGO</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="company_logo" type="file" id="logoFile"
                                        placeholder="Enter Image Url" required />
                                    <img class="mt-1" width="100" height="100" src="" id="selectedLogo"
                                        alt="Selected Image" style="display: none;" />
                                </div>
                            </div>
                            <script>
                                const logoFileInput = document.getElementById('logoFile');
                                const selectedLogo = document.getElementById('selectedLogo');

                                logoFileInput.addEventListener('change', function() {
                                    if (logoFileInput.files && logoFileInput.files[0]) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            selectedLogo.src = e.target.result;
                                            selectedLogo.style.display = 'block';
                                        }

                                        reader.readAsDataURL(logoFileInput.files[0]);
                                    } else {
                                        selectedLogo.src = '';
                                        selectedLogo.style.display = 'none';
                                    }
                                });
                            </script>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Location</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="location" type="text"
                                        placeholder="Enter location Name" required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Description</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="description" type="text"
                                        placeholder="Enter description Name" required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Year</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="year" type="month" placeholder="Enter year"
                                        required />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">project_heading</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="project_heading"
                                        placeholder="Enter project_heading Name" />
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Project Status</label>
                                <div class="col-md-9">
                                    <select name="is_running"class="form-select">
                                        <option value="{{ old('is_running') }}">Select</option>
                                        <option value="Running" {{ old('is_running') == 'Running' ? 'Running' : '' }}>
                                            Running</option>
                                        <option value="Executed"
                                            {{ old('is_running') == 'Executed' ? 'selected' : '' }}>
                                            Executed</option>
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
</x-app-layout>

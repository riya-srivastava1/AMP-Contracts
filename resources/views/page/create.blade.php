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
                        <h4 class="panel-title">Form Controls</h4>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('page.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Title Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="title_name" class="form-control mb-5px"
                                        placeholder="Enter title" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Slug</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="slug_url" type="text"
                                        placeholder="Enter slug url" />
                                </div>
                            </div>
                            {{-- <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Banner Image ID</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="banner_image_id">
                                        <option value="">Select</option>
                                        @foreach ($banner_image_ids as $banner_image_id)
                                            <option value="{{ $banner_image_id->id }}">{{ $banner_image_id->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row mb-15px" id="textarea-container">
                                <label class="form-label col-form-label col-md-3">Content</label>
                                <div class="col-md-9">
                                    <div class="textarea-group">
                                        <textarea class="form-control ckeditor" name="contant" id="editor1" name="editor1" rows="20">
                                            ...
                                        </textarea>
                                        {{-- <button type="button" class="btn btn-sm btn-danger remove-section">Remove
                                            Section</button> --}}
                                    </div>
                                    {{-- <button type="button" class="btn btn-sm btn-success add-section">Add
                                        Section</button> --}}
                                </div>
                            </div>


                            {{-- <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">contant</label>
                                <div class="col-md-9">
                                    <textarea class="form-control ckeditor" name="contant" id="editor1" name="editor1" rows="20">
                                        ...
                                    </textarea>
                                </div>
                            </div> --}}
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Menu</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="radio" name="is_menu" value="1" /> Yes
                                    </label>
                                    <label>
                                        <input type="radio" name="is_menu" value="0" /> No
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">status</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="radio" name="is_active" value="1" /> Active
                                    </label>
                                    <label>
                                        <input type="radio" name="is_active" value="0" /> InActive
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

    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- <script>
        $(document).ready(function() {
            // Function to add a new textarea section
            function addTextareaSection() {
                var $newSection = $('<div class="textarea-group">' +
                    '<textarea class="form-control ckeditor" name="content[]" id="editor1" name="editor1"  rows=""></textarea>' +
                    '<button type="button" class="btn btn-sm btn-danger remove-section">Remove Section</button>' +
                    '</div>');

                $newSection.find('.remove-section').on('click', function() {
                    $(this).parent('.textarea-group').remove();
                });

                $('#textarea-container').append($newSection);
            }

            // Handle the click event for the "Add Section" button
            $('.add-section').on('click', function() {
                addTextareaSection();
            });

            // Handle the click event for the "Remove Section" button
            $('#textarea-container').on('click', '.remove-section', function() {
                $(this).parent('.textarea-group').remove();
            });
        });
    </script> --}}
</x-app-layout><template></template>

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
                        <h4 class="panel-title">View Testimonials</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Name</label>
                            <div class="col-md-9">
                                {{ $testimonial->name }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Company Name</label>
                            <div class="col-md-9">
                                {{ $testimonial->company_name }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Designation</label>
                            <div class="col-md-9">
                                {{ $testimonial->designation }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Image</label>
                            <div class="col-md-9">

                                <img class="mt-1" src="{{ asset('storage/' . $testimonial->image) ?? '' }}"
                                    alt="image" width="50" height="50">
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Is A ctive</label>
                            <div class="col-md-9">
                                {{ $testimonial->is_active }}
                            </div>
                        </div>
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

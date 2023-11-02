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
                        <h4 class="panel-title">View Projects Image</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">company_name</label>
                            <div class="col-md-9">
                                {{ $projects->company_name }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">company_logo</label>
                            <div class="col-md-9">
                                {{-- <a href="/{{ $projects->company_logo ?? '' }}"
                                    target="_blank">{{ $projects->company_logo ?? '' }}</a> --}}
                                    <img src="{{ asset($projects->company_logo) ?? '' }}" alt="image"
                                            width="50" height="50">
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">description</label>
                            <div class="col-md-9">
                                {{ $projects->description }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">project_heading</label>
                            <div class="col-md-9">
                                <label>
                                    {{ $projects->project_heading == 'running' ? 'Yes' : 'NO' }}
                                </label>
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">project Status</label>
                            <div class="col-md-9">
                                {{ $projects->is_running }}
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

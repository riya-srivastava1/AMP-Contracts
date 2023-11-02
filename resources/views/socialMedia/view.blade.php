<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- END page-header -->

        <!-- BEGIN row -->
        <div class="row mb-3">
            <!-- BEGIN col-6 -->
            <div class="col-xl-12">
                <!-- BEGIN panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <!-- BEGIN panel-heading -->
                    <div class="panel-heading">
                        <h4 class="panel-title">Social Media Links View..</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Linkdin Profile Link</label>
                            <div class="col-md-9">
                                {{ $social->linkdin_url }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Twitter Profile Link</label>
                            <div class="col-md-9">
                                {{ $social->twitter_url }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Facebook Profile Link</label>
                            <div class="col-md-9">
                                {{ $social->facebook_url }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Instagram Profile Link</label>
                            <div class="col-md-9">
                                {{ $social->instagram_url }}
                            </div>
                        </div>

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">status</label>
                            <div class="col-md-9">
                                <label>
                                    {{ $social->is_active == '1' ? 'Active' : 'InActive' }}
                                </label>
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

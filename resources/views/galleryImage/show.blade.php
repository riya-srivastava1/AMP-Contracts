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
                        <h4 class="panel-title">View Gallery Image</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Title</label>
                            <div class="col-md-9">
                                {{ $gallery_image->title }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Image Url</label>
                            <div class="col-md-9">
                                <a href="/{{ $gallery_image->image_url ?? '' }}"
                                    target="_blank">{{ $gallery_image->image_url ?? '' }}</a>
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Alt Tag</label>
                            <div class="col-md-9">
                                {{ $gallery_image->alt_tag }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Is Active</label>
                            <div class="col-md-9">
                                <label>
                                    {{ $gallery_image->is_slider == '1' ? 'Yes' : 'NO' }}
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

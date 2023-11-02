<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('website.index') }}">index</a></li>
            <li class="breadcrumb-item active">create</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Create WebSite Infos.....</h1>
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
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                                    class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning"
                                data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                                    class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('website.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="title" class="form-control mb-5px"
                                        placeholder="Enter title" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">logo</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="logo" type="file" id="formFile" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">fav_icon</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="fav_icon" type="file" id="formFile" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Meta Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="meta_description" rows="3"></textarea>
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

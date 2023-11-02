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
                        <h4 class="panel-title">Edit Social Media Links.. </h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('social.update', $social->id) }}" enctype="multipart/form-data">
                            @csrf
                            @csrf
                            @method('put')
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">LinkdIn Profile Link</label>
                                <div class="col-md-9">
                                    <input type="text" name="linkdin_url" class="form-control mb-5px"
                                        placeholder="Enter LinkdIn Profile Link" value="{{ $social->linkdin_url }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Twitter Profile Link</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="twitter_url" type="text"
                                        placeholder="Enter Twitter Profile Link" value="{{ $social->twitter_url }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Facebook Profile Link</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="facebook_url" type="text"
                                        placeholder="Enter Facebook Profile Link" value="{{ $social->facebook_url }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Instagram Profile Link</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="instagram_url" type="text"
                                        placeholder="Enter Instagram Profile Link" value="{{ $social->instagram_url }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">status</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="radio" name="is_active" value="1"
                                            {{ $social->is_active == '1' ? 'checked' : '' }} /> Active
                                    </label>
                                    <label>
                                        <input type="radio" name="is_active" value="0"
                                            {{ $social->is_active == '0' ? 'checked' : '' }} /> InActive
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

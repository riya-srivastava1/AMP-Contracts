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
                        <h4 class="panel-title">Footer (Our Company) Form</h4>
                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('footercontact.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control mb-5px"
                                        placeholder="Enter Email" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Contact Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="contact_number" type="text"
                                        placeholder="Enter Contact Number" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Secondary Contact Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="secondary_contact_number" type="text"
                                        placeholder="Enter Secondary Contact Number" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Head Office</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="head_office" rows="4" data-parsley-maxlength="100"
                                         placeholder="Enter Head Office name here...."></textarea>
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Corporate Office</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="corporate_office" rows="4" data-parsley-maxlength="100"
                                         placeholder="Enter Corporate Office name here...."></textarea>
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

</x-app-layout>

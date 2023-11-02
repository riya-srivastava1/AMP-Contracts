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
                        <h4 class="panel-title">Edit Footer (Our Company) </h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('footercontact.update', $footerContact->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control mb-5px"
                                        placeholder="Enter email" value="{{ $footerContact->email }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Contact Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="contact_number" class="form-control mb-5px"
                                        placeholder="Enter Contact Number" value="{{ $footerContact->contact_number }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Secondary Contact Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="secondary_contact_number" class="form-control mb-5px"
                                        placeholder="Enter Contact Number" value="{{ $footerContact->secondary_contact_number }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Head_office</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="head_office" type="text"
                                        placeholder="Enter Head office" value="{{ $footerContact->head_office }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Corporate Office</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="corporate_office" type="text"
                                        placeholder="Enter Corporate office" value="{{ $footerContact->corporate_office }}" />
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">status</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="radio" name="is_active" value="1"
                                            {{ $footerContact->is_active == '1' ? 'checked' : '' }} /> Active
                                    </label>
                                    <label>
                                        <input type="radio" name="is_active" value="0"
                                            {{ $footerContact->is_active == '0' ? 'checked' : '' }} /> InActive
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

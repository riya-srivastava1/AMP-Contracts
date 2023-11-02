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
                        <h4 class="panel-title">View Footer (Our Company)</h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Email</label>
                            <div class="col-md-9">
                                {{ $footerContact->email??'' }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Contact Number</label>
                            <div class="col-md-9">
                                {{ $footerContact->contact_number??'' }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Secondary Contact Number</label>
                            <div class="col-md-9">
                                {{ $footerContact->secondary_contact_number??'' }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Head Office</label>
                            <div class="col-md-9">
                                {{ $footerContact->head_office??'' }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Corporate Office</label>
                            <div class="col-md-9">
                                {{ $footerContact->corporate_office??'' }}
                            </div>
                        </div>

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">status</label>
                            <div class="col-md-9">
                                <label>
                                    {{ $footerContact->is_active == '1' ? 'Active' : 'InActive' }}
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

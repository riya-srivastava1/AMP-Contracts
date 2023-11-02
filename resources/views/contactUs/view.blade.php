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
                        <h4 class="panel-title">View Contact Us </h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Name</label>
                            <div class="col-md-9">
                                {{ $contact->name }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Company</label>
                            <div class="col-md-9">
                                {{ $contact->company }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Email</label>
                            <div class="col-md-9">
                                {{ $contact->email ?? ''}}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Contact Number</label>
                            <div class="col-md-9">
                                {{ $contact->contact_number }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Subject Line</label>
                            <div class="col-md-9">
                                {{ $contact->subject_line }}
                            </div>
                        </div>
                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">Message</label>
                            <div class="col-md-9">
                                {{ $contact->message }}
                            </div>
                        </div>

                        <div class="row mb-15px">
                            <label class="form-label col-form-label col-md-3">status</label>
                            <div class="col-md-9">
                                <label>
                                    {{ $contact->is_active == '1' ? 'Active' : 'InActive' }}
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

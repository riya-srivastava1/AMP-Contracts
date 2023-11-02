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
                        <h4 class="panel-title">Edit Contact Us </h4>

                    </div>
                    <!-- END panel-heading -->
                    <!-- BEGIN panel-body -->
                    <div class="panel-body">
                        <form method="post" action="{{ route('contact.edit', $contact->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control mb-5px"
                                        placeholder="Enter Name" value="{{ $contact->name }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Company</label>
                                <div class="col-md-9">
                                    <input type="text" name="company" class="form-control mb-5px"
                                        placeholder="Enter Company" value="{{ $contact->company }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control mb-5px"
                                        placeholder="Enter email" value="{{ $contact->email }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Contact Number</label>
                                <div class="col-md-9">
                                    <input type="text" name="contact_number" class="form-control mb-5px"
                                        placeholder="Enter Contact Number" value="{{ $contact->contact_number }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Subject Line</label>
                                <div class="col-md-9">
                                    <input class="form-control" name="subject_line" type="text"
                                        placeholder="Enter Head office" value="{{ $contact->subject_line }}" />
                                </div>
                            </div>
                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">Message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="message" rows="4" data-parsley-maxlength="100"
                                         placeholder="Enter message here...." value="{{ $contact->message }}"></textarea>
                                </div>
                            </div>

                            <div class="row mb-15px">
                                <label class="form-label col-form-label col-md-3">status</label>
                                <div class="col-md-9">
                                    <label>
                                        <input type="radio" name="is_active" value="1"
                                            {{ $contact->is_active == '1' ? 'checked' : '' }} /> Active
                                    </label>
                                    <label>
                                        <input type="radio" name="is_active" value="0"
                                            {{ $contact->is_active == '0' ? 'checked' : '' }} /> InActive
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

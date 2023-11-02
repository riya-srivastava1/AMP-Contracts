<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Testimonials Trash</h4>

            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table  table-hover mb-0">
                        <thead>
                            <tr>
                                <th> Id</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Designation</th>
                                <th>image</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->name ?? '' }}</td>
                                    <td>{{ $testimonial->company_name ?? '' }}</td>
                                    <td>{{ $testimonial->designation ?? '' }}</td>
                                    <td> <img src="{{ asset('storage/' . $testimonial->image) ?? '' }}" alt="image"
                                            width="50" height="50"></td>
                                    <td>{{ $testimonial->created_by ?? '' }}</td>
                                    <td>{{ $testimonial->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('restore.testimonial', $testimonial['id']) }}"
                                                method="post">
                                                @csrf
                                                <a href="#" class="fas fa-lg fa-fw me-10px fa-trash-can-arrow-up"
                                                    onclick="if(confirm('Are you sure you want to restore this field?')) { event.preventDefault(); this.closest('form').submit(); }"></a>
                                            </form>

                                            <form action="{{ route('delete.testimonial', $testimonial['id']) }}"
                                                method="post">

                                                @csrf
                                                <a href="#" class="fas fa-lg fa-fw me-10px fa-trash"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }"></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex  mt-2 justify-content-center">
                    {{ $testimonials->links('pagination::bootstrap-4') }}
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>

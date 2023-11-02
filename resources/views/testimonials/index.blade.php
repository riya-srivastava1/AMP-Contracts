<x-app-layout>

    {{-- <script src="{{ asset('assets/js/amp/tool-tip.js') }}"></script> --}}

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Testimonials Index</h4>
                <div class="panel-heading-btn">
                    <a href="{{ route('testimonial.create') }}" class="btn btn-success ms-2"><i class="fas fa-plus"></i>
                        Add </a>
                    {{-- @if (Auth::user()->role == '1')
                            <a href="{{ route('trash.testimonial') }}"> <i class="fa-solid fa-trash"
                                    style="color:red; font-size: 15px;"></i></a>
                        @endif --}}

                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Designation</th>
                                <th>image</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $testimonial->name ?? '' }}</td>
                                    <td>{{ $testimonial->company_name ?? '' }}</td>
                                    <td>{{ $testimonial->designation ?? '' }}</td>
                                    <td> <img src="{{ asset($testimonial->image) ?? '' }}" alt="image" width="50"
                                            height="50"></td>
                                    <td>{{ $testimonial->created_by ?? '' }}</td>
                                    <td>{{ $testimonial->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <form action="{{ route('testimonial.status', $testimonial->id) }}"
                                            method="post">
                                            @csrf
                                            <a href="#">
                                                @if ($testimonial->is_active == '1')
                                                    <i class="fas fa-toggle-on"
                                                        onclick="if(confirm('Are you sure you want to InAtive this field?')) { event.preventDefault(); this.closest('form').submit(); }"
                                                        style="font-size: 20px; color:green; text-decoration: none;"></i>
                                                @else
                                                    <i class="fas fa-toggle-off"
                                                        onclick="if(confirm('Are you sure you want to Active this field?')) { event.preventDefault(); this.closest('form').submit(); }"
                                                        style="font-size: 20px; color:red; text-decoration: none;"></i>
                                                @endif
                                            </a>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            {{-- <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="View"
                                                href="{{ route('testimonial.show', $testimonial['id']) }}"
                                                class="far fa-eye" style="margin-left: 10px;"></a> --}}
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Edit"
                                                href="{{ route('testimonial.edit', $testimonial['id']) }}"
                                                class="far fa-edit" style="margin-left: 10px;"></a>
                                            <form action="{{ route('delete.testimonial', $testimonial['id']) }}"
                                                method="post">
                                                @method('POST')
                                                @csrf
                                                <a data-toggle="tooltip" rel="tooltip" data-placement="top"
                                                    title="Delete" href="#" class="far fa-trash-alt"
                                                    style="margin-left: 10px;"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }"></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex mt-2 justify-content-center">
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
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({
            'placement': 'top'
        });
    });
</script>

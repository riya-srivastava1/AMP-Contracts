<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN row -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Gallery Image Index</h4>
                <div class="panel-heading-btn">
                    <a href="{{ route('project.create') }}" class="btn btn-success ms-2"><i class="fas fa-plus"></i>
                        Add</a>
                    {{-- @if (Auth::user()->role == '1')
                        <a class="" href="{{ route('trash.project') }}"> <i class="fas fa-trash-alt" style="font-size: 20px;"></i></a>
                    @endif --}}
                </div>
            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table  table-hover mb-0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>company_name</th>
                                <th>company_logo</th>
                                <th>location</th>
                                <th>description</th>
                                <th>project_heading</th>
                                <th>Status</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $project->company_name ?? '' }}</td>
                                    <td><img src="{{ asset($project->company_logo) ?? '' }}" alt="image"
                                            width="50" height="50"></td>
                                    <td>{{ $project->location ?? '' }}</td>
                                    <td>{{ $project->description ?? '' }}</td>
                                    <td>{{ $project->project_heading ?? '' }}</td>
                                    <td>{{ $project->is_running ?? '' }}</td>
                                    <td>{{ date('Y-m-d', strtotime($project->created_at)) }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="View" href="{{ route('project.show', $project['id']) }}" class="far fa-eye"
                                                style="margin-left: 10px;"></a>
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Edit" class="far fa-edit" style="margin-left: 10px;" href="{{ route('project.edit', $project['id']) }}"
                                                class="btn btn-success"></a>
                                            <form action="{{ route('delete.project', $project['id']) }}"
                                                method="post">
                                                @method('POST')
                                                @csrf
                                                <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Delete" href="#" class="far fa-trash-alt" style="margin-left: 10px;"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }"></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex mt-2 justify-content-center">
                        {{ $projects->links('pagination::bootstrap-4') }}
                    </div>
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

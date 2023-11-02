<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('footer.index') }}">Index</a></li>
            <li class="breadcrumb-item active">trash</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Footer Trash Data....</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Table Row Classes</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                            class="fa fa-times"></i></a>
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
                                <th> Id</th>
                                <th>footer</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($footers as $footer)
                                <tr>
                                    <td>{{ $footer->id }}</td>
                                    <td style="word-break: break-all;">{{ $footer->footer ?? '' }}</td>
                                    <td>{{ $footer->created_by ?? '' }}</td>
                                    <td>{{ $footer->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('restore.footer', $footer['id']) }}" method="post">
                                                @csrf
                                                <a href="#" class="btn btn-success ms-1"
                                                    onclick="if(confirm('Are you sure you want to restore this field?')) { event.preventDefault(); this.closest('form').submit(); }">Restore</a>
                                            </form>
                                            <form action="{{ route('delete.footer', $footer['id']) }}" method="post">
                                                @csrf
                                                <a href="#" class="btn btn-danger ms-1"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }">Delete
                                                    parmanently</a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex mt-2 justify-content-center">
                    {{ $footers->links('pagination::bootstrap-4') }}
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>

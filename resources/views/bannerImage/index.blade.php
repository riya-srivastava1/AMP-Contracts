<x-app-layout>    

   <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN breadcrumb -->
        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Home</li>
        </ol>
        <!-- END breadcrumb -->
        <!-- BEGIN page-header -->
        <h1 class="page-header">Banner Image Data....</h1>
        <!-- END page-header -->
        <!-- BEGIN row -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Table Row Classes</h4>
                <div class="panel-heading-btn">
                    @if (Auth::user()->role == '1')
                        <a href="{{ route('trash.bannerimage') }}"> <i class="fa-solid fa-trash"
                                style="color:red; font-size: 24px;"></i></a>
                    @endif
                    <a href="{{ route('bannerimage.create') }}" class="btn btn-success ms-2"> Add Data</a>
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
                                <th>Banner image</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th> Status</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bannerImages as $bannerImage)
                                <tr>
                                    <td>{{ $bannerImage->id }}</td>
                                    <td> <img src="{{ asset('storage/' . $bannerImage->banner_image) ?? '' }}"
                                            alt="image" width="50" height="50"></td>
                                    <td>{{ $bannerImage->created_by ?? '' }}</td>
                                    <td>{{ $bannerImage->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <form action="{{ route('bannerimage.status', $bannerImage->id) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-{{ $bannerImage->is_active == '1' ? 'success' : 'secondary' }}">{{ $bannerImage->is_active == '1' ? 'Active' : 'Inactive' }}</button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('bannerimage.show', $bannerImage['id']) }}"
                                                class="btn btn-primary ">View</a>
                                            <a href="{{ route('bannerimage.edit', $bannerImage['id']) }}"
                                                class="btn btn-success ms-1">Edit</a>
                                            <form action="{{ route('bannerimage.destroy', $bannerImage['id']) }}"
                                                method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="#" class="btn btn-danger ms-1"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }">Delete</a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex  mt-2 justify-content-center">
                    {{ $bannerImages->links('pagination::bootstrap-4') }}
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>

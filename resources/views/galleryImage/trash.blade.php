<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Gallery Image Trash</h4>
                <div class="panel-heading-btn">

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
                                <th>Title</th>
                                <th>Image Url</th>
                                <th>Alt tag</th>

                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery_images as $gallery_image)
                                <tr>
                                    <td>{{ $gallery_image->id }}</td>
                                    <td>{{ $gallery_image->title ?? '' }}</td>
                                    <td><img src="{{ asset('storage/' . $gallery_image->image_url) ?? '' }}"
                                            alt="image" width="50" height="50"></td>
                                    <td>{{ $gallery_image->alt_tag ?? '' }}</td>

                                    <td>{{ $gallery_image->created_by ?? '' }}</td>
                                    <td>{{ $gallery_image->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('restore.galleryimage', $gallery_image['id']) }}"
                                                method="post">
                                                @csrf
                                                <a href="#" class="btn btn-success ms-1" data-toggle="tooltip" data-placement="top" title="Restore"
                                                    onclick="if(confirm('Are you sure you want to Restore this field?')) { event.preventDefault(); this.closest('form').submit(); }">Restore</a>
                                            </form>
                                            <form action="{{ route('delete.galleryimage', $gallery_image['id']) }}"
                                                method="post">
                                                @csrf
                                                <a href="#" class="btn btn-danger ms-1" data-toggle="tooltip" data-placement="top" title="Delete Permanently"
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
                    {{ $gallery_images->links('pagination::bootstrap-4') }}
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>

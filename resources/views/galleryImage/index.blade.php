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
                    <a href="{{ route('galleryimage.create') }}" class="btn btn-success ms-2"><i class="fas fa-plus"></i> Add</a>
                    @if (Auth::user()->role == '1')
                        <a class="" href="{{ route('trash.galleryimage') }}"> <i class="fas fa-trash-alt" style="font-size: 20px;"></i></a>
                    @endif
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
                                <th>Title</th>
                                <th>Image Url</th>
                                <th>Alt tag</th>
                                <th>Is Active</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter = ($gallery_images->currentPage() - 1) * $gallery_images->perPage() + 1;
                       @endphp
                            @foreach ($gallery_images as $gallery_image)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $gallery_image->title ?? '' }}</td>
                                    <td><img src="{{ asset($gallery_image->image_url) ?? '' }}"
                                            alt="image" width="50" height="50"></td>
                                    <td>{{ $gallery_image->alt_tag ?? '' }}</td>
                                    <td>
                                        <form action="{{ route('galleryimage.status', $gallery_image->id) }}"
                                            method="post">
                                            @csrf
                                            <a href="#">
                                                @if ($gallery_image->is_slider == '1')
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
                                    <td>{{ $gallery_image->created_by ?? '' }}</td>
                                    <td>{{ $gallery_image->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            {{-- <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="View" href="{{ route('galleryimage.show', $gallery_image['id']) }}"
                                                class="far fa-eye" style="margin-left: 10px;"></a> --}}
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Edit" href="{{ route('galleryimage.edit', $gallery_image['id']) }}"
                                                class="far fa-edit" style="margin-left: 10px;"></a>
                                            <form action="{{ route('delete.galleryimage', $gallery_image['id']) }}"
                                                method="post">
                                                @method('POST')
                                                @csrf
                                                <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Delete" href="#" class="far fa-trash-alt"
                                                    onclick="if(confirm('Are you sure you want to delete this field?')) { event.preventDefault(); this.closest('form').submit(); }" style="margin-left: 10px;"></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex mt-2 justify-content-center">
                        {{ $gallery_images->links('pagination::bootstrap-4') }}
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

<x-app-layout>

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN row -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Table Row Classes</h4>
                <div class="panel-heading-btn">
                    <a href="{{ route('page.create') }}" class="btn btn-success ms-2"><i class="fas fa-plus"></i>Add</a>
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
                                <th>Title Name</th>
                                <th>slug_url</th>
                                <th>contant</th>
                                <th>is_menu</th>
                                <th>is_active</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $page->title_name ?? '' }}</td>
                                    <td><a href="{{ $page->slug_url }}" target="_blank">{{ $page->slug_url }}</a></td>
                                    <td>{{ Str::limit($page->contant, 220) }}</td>
                                    <td>
                                        <form action="{{ route('page.menu', $page->id) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-{{ $page->is_menu == '1' ? 'success' : 'secondary' }}">{{ $page->is_menu == '1' ? 'Yes' : 'No' }}</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('page.status', $page->id) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-{{ $page->is_active == '1' ? 'success' : 'secondary' }}">{{ $page->is_active == '1' ? 'Yes' : 'No' }}</button>
                                        </form>
                                    </td>
                                    <td>{{ $page->created_by ?? '' }}</td>
                                    <td>{{ $page->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="View"
                                                href="{{ route('page.show', $page['id']) }}" class="far fa-eye"
                                                style="margin-left: 10px;"></a>
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Edit"
                                                class="far fa-edit" style="margin-left: 10px;"
                                                href="{{ route('page.edit', $page['id']) }}"></a>
                                            <form action="{{ route('page.destroy', $page['id']) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="#" class="far fa-trash-alt" style="margin-left: 10px;"
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
                    {{ $pages->links('pagination::bootstrap-4') }}
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

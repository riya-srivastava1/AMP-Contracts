<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN row -->
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Footer (Our Company) Trashed data</h4>

            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table  table-hover mb-0">
                        <thead>
                            <tr>
                                <th>email</th>
                                <th>contact_number</th>
                                <th>Secondary_contact_number</th>
                                <th>head_office</th>
                                <th>corporate_office</th>
                                <th>is_active</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($footerContacts as $footerContact)
                                <tr>
                                    <td>{{ $footerContact->email ?? '' }}</td>
                                    <td>{{ $footerContact->contact_number }}</td>
                                    <td>{{ $footerContact->secondary_contact_number }}</td>
                                    <td>{{ $footerContact->head_office ?? '' }}</td>
                                    <td>{{ $footerContact->corporate_office ?? '' }}</td>

                                    <td>
                                        <form action="{{ route('footercontact.status', $footerContact->id) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-{{ $footerContact->is_active == '1' ? 'success' : 'secondary' }}">{{ $footerContact->is_active == '1' ? 'Yes' : 'No' }}</button>
                                        </form>
                                    </td>
                                    <td>{{ $footerContact->created_by ?? '' }}</td>
                                    <td>{{ $footerContact->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex  mt-2 justify-content-center">
                    {{ $socials->links('pagination::bootstrap-4') }}
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

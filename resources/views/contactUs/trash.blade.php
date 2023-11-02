<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Contact Us Trash</h4>

            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table  table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Subject Line</th>
                                <th>Message</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name ?? '' }}</td>
                                    <td>{{ $contact->company ?? '' }}</td>
                                    <td>{{ $contact->email ?? '' }}</td>
                                    <td>{{ $contact->contact_number }}</td>
                                    <td>{{ $contact->subject_line ?? '' }}</td>
                                    <td>{{ $contact->message ?? '' }}</td>
                                    <td>{{ $contact->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <form action="{{ route('restore.contact', $contact['id']) }}" method="post">
                                                @csrf
                                                <a href="#" class="fas fa-lg fa-fw me-8px fa-trash-can-arrow-up" data-toggle="tooltip" data-placement="top" title="Restore"
                                                    onclick="if(confirm('Are you sure you want to restore this field?')) { event.preventDefault(); this.closest('form').submit(); }"></a>
                                            </form>
                                            <form action="{{ route('delete.contact', $contact['id']) }}" method="post">
                                                @csrf
                                                <a href="#" class="fas fa-lg fa-trash-can" data-toggle="tooltip" data-placement="top" title="Delete Permanentlty"
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
                    {{ $contacts->links('pagination::bootstrap-4') }}
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

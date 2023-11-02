<x-app-layout>

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Footer (Our Company) Table</h4>
                {{-- <div class="panel-heading-btn">
                    @if (Auth::user()->role == '1')
                        <a href="{{ route('trash.footercontact') }}"> <i class="fa-solid fa-trash"
                                style="color:red; font-size: 24px;"></i></a>
                    @endif
                    <a href="{{ route('footercontact.create') }}" class="btn btn-success ms-2"> Add Data</a>
                </div> --}}
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
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $counter = 1;
                            @endphp --}}
                            @foreach ($footerContacts as $footerContact)
                                <tr>
                                    <td>{{ $footerContact->email ?? '' }}</td>
                                    <td>{{ $footerContact->contact_number }}</td>
                                    <td>{{ $footerContact->secondary_contact_number }}</td>
                                    <td>{{ $footerContact->head_office ?? '' }}</td>
                                    <td>{{ $footerContact->corporate_office ?? '' }}</td>

                                    <td>
                                        <form action="{{ route('footercontact.status', $footerContact->id) }}"
                                            method="post">
                                            @csrf
                                            <a href="#">
                                                @if ($footerContact->is_active == '1')
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
                                    <td>{{ $footerContact->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a data-toggle="tooltip" data-placement="top" title="View"
                                                href="{{ route('footercontact.show', $footerContact['id']) }}"
                                                class="far fa-eye" style="margin-left: 10px;"></a>
                                            <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                href="{{ route('footercontact.edit', $footerContact['id']) }}"
                                                class="far fa-edit" style="margin-left: 10px;"></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex  mt-2 justify-content-center">
                    {{ $footerContacts->links('pagination::bootstrap-4') }}
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

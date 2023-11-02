<x-app-layout>
    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Users</h4>
                <a href="{{ route('register') }}" class="btn btn-success ms-2"><i class="fas fa-plus"></i> Add </a>
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
                                <th>Username</th>
                                <th>Email Address</th>
                                <th>Created On</th>
                                @if (Auth::user()->role == '1')
                                    <th>status</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                 $counter = ($users->currentPage() - 1) * $users->perPage() + 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr class="">
                                    <div class="d-flex align-items-center">
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $user->name ?? '' }}</td>
                                        <td>{{ $user->email ?? '' }}</td>
                                        <td>{{ $user->created_at->format('d/m/Y') ?? '' }}</td>
                                        @if (Auth::user()->role == '1')
                                            <td>
                                                <form action="{{ route('user.status', $user->id) }}" method="post">
                                                    @csrf
                                                    <a href="#">
                                                        @if ($user->is_active == '1')
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
                                    </div>
                            @endif
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex  mt-2 justify-content-center">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>

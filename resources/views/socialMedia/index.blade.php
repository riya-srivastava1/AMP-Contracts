<x-app-layout>

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Social Media Table</h4>

            </div>
            <!-- END panel-heading -->
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <!-- BEGIN table-responsive -->
                <div class="table-responsive">
                    <table class="table  table-hover mb-0">
                        <thead>
                            <tr>
                                {{-- <th>No.</th> --}}
                                <th>linkdin Profile Url</th>
                                <th>Twitter Profile Url</th>
                                <th>Facebook Profile Url</th>
                                <th>instagram Profile Url</th>
                                <th>is_active</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $counter = 1;
                            @endphp --}}
                            @foreach ($socials as $social)
                                <tr>
                                    {{-- <td>{{ $counter++ }}</td> --}}
                                    <td><a href="{{ $social->linkdin_url }}"
                                            target="_blank">{{ $social->linkdin_url }}</a></td>
                                    <td><a href="{{ $social->twitter_url }}"
                                            target="_blank">{{ $social->twitter_url }}</a></td>
                                    <td><a href="{{ $social->facebook_url }}"
                                            target="_blank">{{ $social->facebook_url }}</a></td>
                                    <td><a href="{{ $social->instagram_url }}"
                                            target="_blank">{{ $social->instagram_url }}</a></td>
                                    <td>
                                        <form action="{{ route('social.status', $social->id) }}" method="post">
                                            @csrf
                                            <a href="#">
                                                @if ($social->is_active == '1')
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
                                    <td>{{ $social->created_by ?? '' }}</td>
                                    <td>{{ $social->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="View"
                                                class="far fa-eye" style="margin-left: 10px;"
                                                href="{{ route('social.show', $social['id']) }}"></a>
                                            <a data-toggle="tooltip" rel="tooltip" data-placement="top" title="Edit"
                                                class="far fa-edit" style="margin-left: 10px;"
                                                href="{{ route('social.edit', $social['id']) }}"></a>
                                        </div>
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

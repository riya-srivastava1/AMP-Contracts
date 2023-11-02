<x-app-layout>

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Contact Us Table</h4>
                <center>
                    <div class="container">
                        <a href="{{ route('export.contact.us') }}">
                            <button type="submit" style="height:30%;width:80px">
                                <span>Export</span>
                                <svg viewBox="-5 -5 110 110" preserveAspectRatio="none" aria-hidden="true">
                                    <path
                                        d="M0,0 C0,0 100,0 100,0 C100,0 100,100 100,100 C100,100 0,100 0,100 C0,100 0,0 0,0" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </center>
                {{-- <div class="panel-heading-btn">
                    @if (Auth::user()->role == '1')
                        <a href="{{ route('trash.contact') }}"> <i class="fa-solid fa-trash"
                                style="color:red; font-size: 24px;"></i></a>
                    @endif
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
                                <th>No.</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Subject Line</th>
                                <th>Message</th>
                                {{-- <th>Is active</th> --}}
                                <th>Created On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $contact->name ?? '' }}</td>
                                    <td>{{ $contact->company ?? '' }}</td>
                                    <td>{{ $contact->email ?? '' }}</td>
                                    <td>{{ $contact->contact_number }}</td>
                                    <td>{{ $contact->subject_line ?? '' }}</td>
                                    <td>{{ $contact->message ?? '' }}</td>

                                    {{-- <td>
                                        <form action="{{ route('footercontact.status', $contact->id) }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-{{ $contact->is_active == '1' ? 'success' : 'secondary' }}">{{ $contact->is_active == '1' ? 'Yes' : 'No' }}</button>
                                        </form>
                                    </td> --}}
                                    <td>{{ $contact->created_at->format('d/m/Y') ?? '' }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('contact.show', $contact['id']) }}" data-toggle="tooltip"
                                                data-placement="top" title="View" class="far fa-eye"
                                                style="margin-left: 10px;"></a>
                                            {{-- <a href="{{ route('contact.edit', $contact['id']) }}" data-toggle="tooltip" data-placement="top" title="Edit"
                                            class="far fa-edit" style="margin-left: 10px;"></a> --}}
                                            <form action="{{ route('delete.contact', $contact['id']) }}"
                                                method="post">
                                                @method('POST')
                                                @csrf
                                                <a href="#" class="far fa-trash-alt" style="margin-left: 10px;"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"
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
<style>
    html {
        height: 100%;
    }

    button {
        appearance: none;
        background: transparent;
        border: 0;
        color: #fff;
        cursor: pointer;
        font: inherit;
        font-weight: 500;
        line-height: 1;
        padding: 1em 1.5em;
        position: relative;
        transition: filter var(--motion-duration);
    }

    button:hover {
        filter: brightness(1.1);
    }

    button:active {
        filter: brightness(0.9);
    }

    button>span {
        display: block;
        position: relative;
        transition: transform var(--motion-duration) var(--motion-ease);
        z-index: 1;
    }

    button:hover>span {
        transform: scale(1.05);
    }

    button:active>span {
        transform: scale(0.95);
    }

    button>svg {
        fill: #950cde;
        position: absolute;
        top: -5%;
        left: -5%;
        width: 110%;
        height: 110%;
    }

    button>svg>path {
        transition: var(--motion-duration) var(--motion-ease);
    }

    button:hover>svg>path {
        d: path("M0,0 C0,-5 100,-5 100,0 C105,0 105,100 100,100 C100,105 0,105 0,100 C-5,100 -5,0 0,0");
    }

    button:active>svg>path {
        d: path("M0,0 C30,10 70,10 100,0 C95,30 95,70 100,100 C70,90 30,90 0,100 C5,70 5,30 0,0");
    }
</style>

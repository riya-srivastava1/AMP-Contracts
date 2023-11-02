<x-app-layout>

    <!-- BEGIN #content -->
    <div id="content" class="app-content">

        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="table-basic-9">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">NewsLetter (Dropped Emails)</h4>
                <center>
                    <div class="container">
                        <a href="{{ route('export.newsletter') }}">
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
                                <th>Email</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = ($newsindexs->currentPage() - 1) * $newsindexs->perPage() + 1;
                            @endphp
                            @foreach ($newsindexs as $newsindex)
                                <tr>
                                    <td>{{ $counter++ ?? '' }}</td>
                                    <td>{{ $newsindex->email }}</td>
                                    <td>{{ date('Y-m-d', strtotime($newsindex->created_at)) ?? '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END table-responsive -->
            </div>
            <!-- END panel-body -->
        </div>
        <!-- END panel -->
    </div>

    <!-- END #content -->
</x-app-layout>
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

<!-- BEGIN #header -->
<div id="header" class="app-header">
    <!-- BEGIN navbar-header -->
    <div class="navbar-header">
        <a href="{{ route('dashboard') }}" class="navbar-brand"><b>AMP</b>Contract Panel</a>
        <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- END navbar-header -->
    <!-- BEGIN header-nav -->
    <div class="navbar-nav">


        <div class="navbar-item navbar-user dropdown">
            <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                @if (Auth::user()->image)
                    <img src="{{ asset('') }}{{ Auth::user()->image ?? '' }}" alt="img" />
                @else
                    <img src="{{ asset('assets/img/person-dummy-e1553259379744.jpg') }}" alt="img" />
                @endif
                <span>
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    <b class="caret"></b>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end me-1">
                @if (Auth::user()->role == '1')
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">Edit Profile</a>
                @endif

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>

                </form>

            </div>
        </div>
    </div>
    <!-- END header-nav -->
</div>
<!-- END #header -->

<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img style="max-width: 192px;" src="{{ asset('assets/images/amp-logo.webp') }}" alt="logo">
                </a>

            </div>
            <div class="navbar-n-contact">
                <div class="navigation">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <img src="{{ asset('assets/images/home.svg') }}" alt="home" class="d-none d-lg-block ">
                                <span class="d-block d-lg-none">Home</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('about.us') ? 'active' : '' }}" href="{{ route('about.us') }}">About Us</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                        </li>
                    </ul>
                </div>

                <a class="contact-btn  common-btn" href="{{ route('contact.us') }}">
                    <button>Contact Us</button>
                </a>
            </div>

            <div class="nav-toggler d-block d-lg-none">
                <img src="{{ asset('assets/images/bars.webp') }}" alt="bars">
            </div>
        </div>
    </div>
</header>

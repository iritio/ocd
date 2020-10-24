<header id="header" class="header header-sticky-top">
    <div class="header-section">
        <div id="basicLogoAndNav" class="container pt-2 pb-2">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('index') }}" aria-label="OCD">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 105px;">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBarBasic" data-toggle="collapse" data-target="#navBarBasic">
                    <span class="navbar-toggler-default">
                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                        </svg>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                        </svg>
                    </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBarBasic" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        {{-- NAVBAR --}}
                        @yield('navbar')
                        {{-- END NAVBAR --}}

                        <li class="nav-item navbar-nav-last-item">
                            <a class="btn btn-sm btn-primary transition-3d-hover btn-pill" href="{{ route('index') }}">
                                Go to main site
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
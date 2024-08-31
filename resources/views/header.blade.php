<!-- ======= start Header ======= -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo/logo.png') }}" class="logo" alt="LOGO" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list" id="menu"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav ms-auto" id="navbar">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"
                            href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li>
                        <a class="dropdown-item py-2 {{ request()->routeIs('login') ? 'active' : '' }}"
                            href="{{ route('login') }}">Login page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                            href="{{ url('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}"
                            href="{{ url('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact us</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <a class="btn" href="{{ route('contact') }}">Contact Us</a>
                    <button id="mode-toggle" class="btn-light-mode switch-button">
                        <i id="mode-icon" class="bi bi-moon-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- ======= end Header ======= -->

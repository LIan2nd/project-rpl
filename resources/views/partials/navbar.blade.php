<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
            {{--  <img src="{{ asset('user') }}/images/logo/logo1.png" alt="Awesome Logo" />  --}}
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item {{ Request::is('information') ? 'active' : '' }}">
                    <a class="nav-link" href="/information">Information</a>
                </li>
                <li class="nav-item {{ Request::is('artikel') ? 'active' : '' }}">
                    <a class="nav-link" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>
        <div class="navbar-btn ml-20 d-none d-sm-block">
            <a href="/register" class="btn btn-primary" class="nav justify-content-end">Register</a>
            <a href="/login" class="btn btn-primary" class="nav justify-content-end">Login</a>
        </div>
    </div>
</nav>
<!--End Main Header -->

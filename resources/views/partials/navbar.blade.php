<!--header top-->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-left text-center text-md-left">
                    <h6>
                        Opening Hours : Saturday to Tuesday - 8am to
                        10pm
                    </h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right text-center text-md-right">
                    <ul class="social-links">
                        <li>
                            <a href="https://themefisher.com/" aria-label="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themefisher.com/" aria-label="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themefisher.com/" aria-label="google-plus">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themefisher.com/" aria-label="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://themefisher.com/" aria-label="pinterest">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-3">
                <div class="logo">
                    <a href="index.html">
                        <img loading="lazy" class="img-fluid" src="{{ asset('user') }}/images/logo.png"
                            alt="logo" />
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-9">
                <div class="right-side">
                    <ul class="contact-info pl-0 mb-4 mb-md-0">
                        <li class="item text-left">
                            <div class="icon-box">
                                <i class="far fa-envelope"></i>
                            </div>
                            <strong>Email</strong>
                            <br />
                            <a href="mailto:info@medic.com">
                                <span>info@medic.com</span>
                            </a>
                        </li>
                        <li class="item text-left">
                            <div class="icon-box">
                                <i class="fas fa-phone"></i>
                            </div>
                            <strong>Call Now</strong>
                            <br />
                            <span>+ (88017) - 123 - 4567</span>
                        </li>
                    </ul>
                    <div class="link-btn text-center text-lg-right">
                        <a href="contact.html" class="btn-style-one">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Header Upper-->

<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{ Request::is('service') ? 'active' : '' }}">
                    <a class="nav-link" href="/service">Service</a>
                </li>
                <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                    <a class="nav-link" href="/team">Team</a>
                </li>
                <li class="nav-item {{ Request::is('appointment') ? 'active' : '' }}">
                    <a class="nav-link" href="/appointment">Appointment</a>
                </li>
                <li class="nav-item dropdown {{ Request::is('blog*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="/blog">Blog</a>
                        </li>
                        <li class="dropdown dropdown-submenu dropright">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="index.html">Submenu 01</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.html">Submenu 02</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--End Main Header -->

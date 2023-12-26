@extends('layouts.main')
@section('content')
    {{-- Page Slider --}}
    <div class="hero-slider">
        <!-- Slider Item -->
        <div class="slider-item slide1" style="background-image:url({{ asset('user') }}/images/slider/slider1.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content style text-center">
                            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">JELAJAHI</h2>
                            <p class="tag-text mb-4" data-animation-in="slideInRight">Cari tau lebih banyak tentang kegiatan
                                olahraga disekitar anda!</p>
                            <a href="#start" class="btn btn-main btn-white" data-animation-in="slideInLeft"
                                data-duration-in="1.2">explore</a>
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url({{ asset('user') }}/images/slider/slider2.png);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start-->
                        <div class="content style text-center">
                            <h2 class="text-white" data-animation-in="slideInRight">INFORMASI</h2>
                            <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Cari tau lebih
                                banyak berita informasi mengenai kegiatan yang akan segera dilaksanakan di sekitar anda</p>
                            <a href="/informations" class="btn btn-main btn-white" data-animation-in="slideInRight"
                                data-duration-in="1.2">Information</a>
                        </div>
                        <!-- Slide Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Item -->
        <div class="slider-item" style="background-image:url({{ asset('user') }}/images/slider/slider3.png)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Slide Content Start -->
                        <div class="content text-center style">
                            <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">ARTIKEL
                            </h2>
                            <p class="tag-text mb-4" data-animation-in="slideInLeft">Jelajahi artikel seputar olahraga dan
                                juga kesehatan terkini</p>
                            <a href="/articles" class="btn btn-main btn-white" data-animation-in="slideInRight"
                                data-duration-in="1.2">Article</a>
                        </div>
                        <!-- Slide Content End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Page Slider --}}

    <!--about section-->
    <section id="start" class="feature-section section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-content">
                        <div class="section-title text-center">
                            <h3>Best Artikel <span>of Our Website</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item">
                                    <div class="icon-box">
                                        <figure>
                                            {{--  <a href="services.html"><img loading="lazy"
                                                    src="{{ asset('user') }}/images/artikel/artikel-home-1.png"
                                                    alt="features image"></a>  --}}
                                        </figure>
                                    </div>
                                    <h3 class="mb-2">Senam Bersama</h3>
                                    <p>Senam bersama yang dilakukan oleh para pemuda depok menarik banyak perhatian media
                                        massa sehingga banyak orang yang mengikuti acara tersebut dari berbagai kecamatan
                                        dari kota Depok</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <div class="icon-box">
                                        <figure>
                                            {{--  <a href="services.html">
                                                <img loading="lazy" src="{{ asset('user') }}/images/resource/2.png"
                                                    alt="features image">
                                            </a>  --}}
                                        </figure>
                                    </div>
                                    <h3 class="mb-2">Lari Santai Bersama</h3>
                                    <p>Acara lari santai ini dilakukan oleh para <b>Remaja</b> di kota Depok dengan tujuan
                                        membuat masyarakat Depok menjadi produktif dikala hari libur mereka.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <div class="icon-box">
                                        <figure>
                                            {{--  <a href="services.html">
                                                <img loading="lazy" src="{{ asset('user') }}/images/resource/3.png"
                                                    alt="features image">
                                            </a>  --}}
                                        </figure>
                                    </div>
                                    <h3 class="mb-2">Bulu Tangkis</h3>
                                    <p>Olahraga menjadi salah satu olahraga ter-favorit di kota Depok karena olahraga
                                        tersebut mudah dimainkan dan aturan yang juga tidak sulit untuk di jalani.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item">
                                    <div class="icon-box">
                                        <figure>
                                            {{--  <a href="services.html">
                                                <img loading="lazy" src="{{ asset('user') }}/images/resource/4.png"
                                                    alt="features image">
                                            </a>  --}}
                                        </figure>
                                    </div>
                                    <h3 class="mb-2">Turnamen Sepak Bola</h3>
                                    <p>Turnamen Sepak Bola kali ini di selenggarakan oleh pemerintah kota depok sebagai
                                        penyemangat anak muda di kota Depok dalam rangka 17 Agustus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End about section-->
@endsection

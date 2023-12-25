@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/about/about1.jpg)">
        <div class="container">
            <div class="title-text">
                <h1>about us</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="index.html">home &nbsp;/</a>
                    </li>
                    <li>about us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Our Story -->
    <section class="story">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img loading="lazy" src="{{ asset('user') }}/images/about/kelompok.jpg" class="responsive"
                        alt="story" />
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h2>Our Story</h2>
                        <h5 class="tagline">
                            "Kreativitas tanpa batas."
                        </h5>
                        <p>
                            Kami merupakan sekelompok mahasiswa yang berada pada sebuah kelompok dimana kamu membuat sebuah website tentang informasi mengenai olahraga dan kesehatan. Kami berusaha untuk membuat website yang dapat memberikan informasi yang bermanfaat bagi masyarakat luas.
                        </p>
                        <h6>Mission</h6>
                        <p>                            
                            Menyediakan platform bagi masyarakat untuk berbagi informasi.<br>
                            Membangun komunitas masyarakat yang aktif dan kreatif.<br>
                            Memberikan dampak positif bagi masyarakat.<br>
                        </p>
                        <h6>Vision</h6>
                        <p>
                            Menjadi wadah bagi masyarakat luas untuk terus berakfitas dan berkontribusi bagi sekitarnya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

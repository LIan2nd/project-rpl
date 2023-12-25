@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/artikel/artikel1.png)">
        <div class="container">
            <div class="title-text">
                <h1>Artikel</h1>
                {{--  <ul class="title-menu clearfix">
                    <li>
                        <a href="index.html">home &nbsp;/</a>
                    </li>
                    <li>Blog</li>
                </ul>  --}}
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section style-four section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a href="/blog-details"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('user') }}/images/artikel/artikel2.png" alt="" /></a>
                                </figure>
                            </div>
                            <div class="content-text">
                                <a href="/blog-details">
                                    <h4>
                                        Atlet Depok Sumbang 12 Medali di Sea Games 2023
                                    </h4>
                                </a>
                                <span>By Babang Tampan / 20 Mei 2023</span>
                                <p>
                                    Atlet asal Kota Depok ikut andil dalam perolehan medali Indonesia di Sea Games 2023, 5 hingga 17 Mei.
                                </p>
                                <div class="link-btn">
                                    <a href="/artikel-details" class="btn-style-one">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a href="/blog-details"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('user') }}/images/artikel/artikel2.png" alt="" /></a>
                                </figure>
                            </div>
                            <div class="content-text">
                                <a href="/blog-details">
                                    <h4>
                                        Atlet Depok Sumbang 12 Medali di Sea Games 2023
                                    </h4>
                                </a>
                                <span>By Babang Tampan / 20 Mei 2023</span>
                                <p>
                                     Atlet asal Kota Depok ikut andil dalam perolehan medali Indonesia di Sea Games 2023, 5 hingga 17 Mei.
                                </p>
                                <div class="link-btn">
                                    <a href="/artikel-details" class="btn-style-one">read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="styled-pagination">
                            <ul>
                                <li>
                                    <a class="prev" href="blog.html"><span class="fas fa-angle-left"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a href="blog.html" class="active">1</a></li>
                                <li><a href="blog.html">2</a></li>
                                <li><a href="blog.html">3</a></li>
                                <li>
                                    <a class="next" href="blog.html"><span class="fas fa-angle-right"
                                            aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-side">
                        <div class="text-title">
                            <h6>Search</h6>
                        </div>
                        <div class="search-box">
                            <form method="post" action="index.html">
                                <div class="input-group">
                                    <input class="form-control" type="search" name="search" placeholder="Enter to Search"
                                        required="" autocomplete="off" />
                                </div>
                            </form>
                        </div>
                        <div class="categorise-menu">
                            <div class="text-title">
                                <h6>Categories</h6>
                            </div>
                            <ul class="categorise-list">
                                <li>
                                    <a href="!">Sepak Bola <span>(20)</span></a>
                                </li>
                                <li>
                                    <a href="!">Basket <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="!">Senam <span>(2)</span></a>
                                </li>
                                <li>
                                    <a href="!">Yoga <span>(9)</span></a>
                                </li>
                                <li>
                                    <a href="!">Lari <span>(2)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection

@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/artikel/artikel1.png)">
        <div class="container">
            <div class="title-text">
                <h1>Artikel Detail</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/artikel">Artikel &nbsp;/</a>
                    </li>
                    <li>Artikel Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section section style-four style-five">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a href="single-blog.html"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('user') }}/images/artikel/artikel2.png" alt="" /></a>
                                </figure>
                            </div>
                            <div class="content-text">
                                <h4>
                                    Atlet Depok Sumbang 12 Medali di Sea Games 2023
                                </h4>
                                <span>By Babang Tampan / 20 Mei 2023</span>
                                <p>
                                    Atlet asal Kota Depok ikut andil dalam perolehan medali Indonesia di Sea Games 2023, 5
                                    hingga 17 Mei.

                                    Klasemen akhir Indonesia berada di urut 3, dengan perolehan emas 87, perak 80, perunggu
                                    109, total 276. Dari ratusan medali tersebut, atlet Depok berhasil menyumbangkan 12
                                    medali.

                                    Tiga atlet di bawah naungan Komite Olahraga Nasional Indonesia (KONI) Kota Depok, dari
                                    cabang olahraga (cabor) atletik, taekwondo, dan dayung.
                                </p>
                                <div class="text">
                                    <p>
                                        Ketiga cabang itu mendapatkan 10 medali. Sementara dua medali lagi disumbang atlet Jun Bokator yang masuk di KONI Bekasi.  
                                        <br> <br>
                                        Wakil Ketua KONI 1, Mustafa Masyhur menegaskan, saat ini total sepuluh medali yang didapatkan atlet asal Depok, yaitu satu emas dari cabor Atletik, satu perunggu dari cabor Taekwondo, dan tiga emas, satu perak, empat perunggu dari cabor Dayung. Dari jumlah tersebut belum pasti.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Comments  --}}
                    <div class="comments-area">
                        <div class="sec-title">
                            <h6>Comments (3)</h6>
                        </div>
                        <div class="comment">
                            <div class="image-holder">
                                <figure>
                                    <img loading="lazy" src="{{ asset('user') }}/images/blog/1.png" alt="" />
                                </figure>
                            </div>
                            <div class="image-text">
                                <h6>Jacky Chan<span>Mei 26, 2023</span></h6>
                                <h5>
                                    <a href="blog-details.html">
                                        <i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back
                                    </a>
                                </h5>
                                <p>
                                    Wahhh sangat keren dan memotivasi sekali, semoga kedepannya bisa lebih baik lagi.
                                </p>
                            </div>
                        </div>
                        <div class="comment reply-comment">
                            <div class="image-holder">
                                <figure>
                                    <img loading="lazy" src="{{ asset('user') }}/images/blog/2.png" alt="" />
                                </figure>
                            </div>
                            <div class="image-text">
                                <h6>Robben Oti<span>Mei 27, 2023</span></h6>
                                <h5>
                                    <a href="blog-details.html">
                                        <i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back
                                    </a>
                                </h5>
                                <p>
                                    Kira - kira apakah suatu saat nanti saya bisa sepertinya?
                                </p>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="image-holder">
                                <figure>
                                    <img loading="lazy" src="{{ asset('user') }}/images/blog/3.png" alt="" />
                                </figure>
                            </div>
                            <div class="image-text">
                                <h6>Chang Lingma<span>Mei 26, 2023</span></h6>
                                <h5>
                                    <a href="blog-details.html">
                                        <i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back
                                    </a>
                                </h5>
                                <p>
                                    Orang itu merupakan tetangga saya, dia memang orang yang sangat rajin dan tekun dalam berlatih.
                                </p>
                            </div>
                        </div>
                    </div>
                    {{--  ends comments  --}}
                    
                    <div class="form-area">
                        <div class="sec-title">
                            <h6>Leave A Comment</h6>
                        </div>
                        <form id="contact_form" name="contact_form" class="default-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea" placeholder="Your Review" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" placeholder="Your Name"
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control email"
                                            placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group form-bottom">
                                        <button class="btn-style-one" type="submit">
                                            Comment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

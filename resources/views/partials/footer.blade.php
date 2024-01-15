@php
    use App\Models\Article;

    $articles = Article::latest()->get();
@endphp
<!--footer-main-->
<footer class="footer-main">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="index.html">
                                    <img src="{{ asset('user') }}/images/logo/logo-putih-1.png" class="img-fluid"
                                        alt="Awesome Logo" />
                                </a>
                            </figure>
                        </div>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>
                                    Jalan Lenteng Agung Raya №20, Jakarta Selatan
                                </p>
                            </li>
                            <li class="item">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:support@medic.com">
                                    <p>sobat@sehat.gmail.com</p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                                <p>(+62) 881-298-743</p>
                            </li>
                        </ul>
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item">
                                <a href="https://facebook.com/" aria-label="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/" aria-label="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/" aria-label="github"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                    <h2>About Us</h2>
                    <p>
                        Sebuah website yang menyediakan layanan untuk membuat para penggemar olahraga dan kesehatan
                        untuk dapat mencari tahu info kegiatan olahraga dan kesehatan yang akan dilaksanakan di sekitar
                        mereka.
                    </p>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="social-links">
                        <h2>Recent Posts</h2>
                        <ul>
                            @if ($articles->count())
                                @foreach ($articles->take(2) as $article)
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                                <a href="/articles/article/{{ $article->slug }}">
                                                    <img loading="lazy"
                                                        src="{{ asset('user') }}/images/artikel/artikel-home-1.png"
                                                        alt="post-thumb" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5>
                                                    <a
                                                        href="/articles/article/{{ $article->slug }}">{{ $article->title }}</a>
                                                </h5>
                                                <p>
                                                    {!! Str::limit($article->body, 50) !!}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="item">
                                    <h6>No Article</h6>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <p>
                    &copy; Copyright 2021. Designed &amp; Developed
                    by
                    <a href="https://themefisher.com/">Themefisher</a>
                </p>
            </div>
            <ul class="footer-bottom-link">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
</div>

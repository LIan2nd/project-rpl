@php
    use Illuminate\Support\Carbon;
@endphp

@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/artikel/artikel1.png)">
        <div class="container">
            <div class="title-text">
                <h1>Article</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/home">Home &nbsp;/</a>
                    </li>
                    <li>
                        <a href="/articles">Articles &nbsp;/</a>
                    </li>
                    <li>Article</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section section style-four style-five">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item-holder">
                        <div class="image-box">
                            <figure>
                                <img loading="lazy" class="img-fluid" src="{{ asset('user') }}/images/artikel/artikel2.png"
                                    alt="" />
                            </figure>
                        </div>
                        <div class="content-text">
                            <h4>
                                {{ $article->title }}
                            </h4>
                            <span>By <a
                                    href="/articles?author={{ $article->author->username }}">{{ $article->author->name }}</a>
                                / {{ Carbon::parse($article->published_at)->format('d F Y') }} - in <a
                                    href="/articles?category={{ $article->category->slug }}">{{ $article->category->name }}</a></span>
                            <p>
                                {!! $article->body !!}
                                {{-- {{ $article->body }} --}}
                            </p>
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
                                    <a href="#">
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
                                    <a href="#">
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
                                    <a href="#">
                                        <i class="fa fa-reply-all" aria-hidden="true"></i>Comment Back
                                    </a>
                                </h5>
                                <p>
                                    Orang itu merupakan tetangga saya, dia memang orang yang sangat rajin dan tekun dalam
                                    berlatih.
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
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection

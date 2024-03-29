@php
    use Illuminate\Support\Carbon;
@endphp

@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/artikel/artikel1.png)">
        <div class="container">
            <div class="title-text">
                <h1>Articles {{ $head }}</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/home">home &nbsp;/</a>
                    </li>
                    <li>Articles</li>
                </ul>
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
                        @if ($articles->count())
                            @foreach ($articles as $article)
                                <div class="item-holder">
                                    <div class="image-box">
                                        <figure>
                                            <a href="/articles/article/{{ $article->slug }}"><img loading="lazy"
                                                    class="img-fluid" src="{{ asset('user') }}/images/artikel/artikel2.png"
                                                    alt="" /></a>
                                        </figure>
                                    </div>
                                    <div class="content-text">
                                        <a href="/articles/article/{{ $article->slug }}">
                                            <h4>
                                                {{ $article->title }}
                                            </h4>
                                        </a>
                                        <span>By <a
                                                href="/articles?author={{ $article->author->username }}">{{ $article->author->name }}</a>
                                            / {{ Carbon::parse($article->published_at)->format('d F Y') }} - in <a
                                                href="/articles?category={{ $article->category->slug }}">{{ $article->category->name }}</a></span>
                                        <p>
                                            {{-- {!! mb_strimwidth($article->body, 0, 200) !!} --}}
                                            {!! Str::limit($article->body, 150) !!}
                                            @php
                                                $string = $article->body;
                                                $charCount = strlen($string);
                                                if ($charCount > 200) {
                                                    # code...
                                                    if (str_contains($article->body, '<div>')) {
                                                        echo '</div>';
                                                    } elseif (str_contains($article->body, '<span>')) {
                                                        echo '</span>';
                                                    }
                                                }
                                            @endphp
                                        </p>
                                        <div class="link-btn">
                                            <a href="/articles/article/{{ $article->slug }}" class="btn-style-one">read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="styled-pagination">
                                <div class="mt-5">
                                    {{ $articles->links() }}
                                </div>
                            </div>
                        @else
                            <div>
                                <h5>No Article, sorry</h5>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="right-side">
                        <div class="text-title">
                            <h6>Search</h6>
                        </div>
                        <div class="search-box">
                            <form action="/articles" role="search">
                                @if (request('category'))
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                @elseif(request('author'))
                                    <input type="hidden" name="author" value="{{ request('author') }}">
                                @endif
                                <div class="input-group">
                                    <input class="form-control" type="search" name="search" placeholder="Enter to Search"
                                        autocomplete="off" value="{{ request('search') }}" />
                                </div>
                            </form>
                        </div>
                        <div class="categorise-menu">
                            <div class="text-title">
                                <h6>Categories</h6>
                            </div>
                            <ul class="categorise-list">
                                @if ($categories->count())
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="/articles?category={{ $category->slug }}">{{ $category->name }}
                                                <span>{{ $category->articles->count() }}</span></a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <p>no category</p>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection

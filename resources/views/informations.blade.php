@php
    use Illuminate\Support\Carbon;
@endphp

@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/background/3.jpg)">
        <div class="container">
            <div class="title-text">
                <h1>Informations</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/home">home &nbsp;/</a>
                    </li>
                    <li>informations</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="service-section bg-gray section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Search
                    <span>Event</span>
                </h3>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/informations" role="search">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="input-group">
                                        <input class="form-control" type="search" name="search"
                                            placeholder="Enter to Search" required="" autocomplete="off"
                                            value="{{ request('search') }}" />
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <button type="submit" class="btn btn-style-search"><i
                                            class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @if ($informations->count())
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="item">
                            <div class="inner-box">
                                <div class="img_holder">
                                    <a href="/informations/information/{{ $informations[0]->id }}">
                                        <img loading="lazy" src="{{ asset('user') }}/images/information/info-1.png"
                                            alt="images" class="img-fluid">
                                    </a>
                                </div>
                                <div class="image-content text-center">
                                    <span>{{ $informations[0]->location }} at
                                        {{ Carbon::parse($informations[0]->date)->format('d F Y') }}</span>
                                    <a href="/informations/information/{{ $informations[0]->id }}">
                                        <h6>{{ $informations[0]->name }}</h6>
                                    </a>
                                    <p>{!! Str::limit($informations[0]->description, 55) !!} <a
                                            href="/informations/information/{{ $informations[0]->id }}">read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($informations->skip(1) as $information)
                        <div class="col-lg-4 mt-5">
                            <div class="item">
                                <div class="inner-box">
                                    <div class="img_holder">
                                        <a href="/informations/information/{{ $information->id }}">
                                            <img loading="lazy" src="{{ asset('user') }}/images/information/info-1.png"
                                                alt="images" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="image-content text-center">
                                        <span>{{ $information->location }} at
                                            {{ Carbon::parse($information->date)->format('d F Y') }}</span>
                                        <a href="/informations/information/{{ $information->id }}">
                                            <h6>{{ $information->name }}</h6>
                                        </a>
                                        <p>{!! Str::limit($information->description, 55) !!} <a
                                                href="/informations/information/{{ $information->id }}">read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <p>Event are not yet available</p>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

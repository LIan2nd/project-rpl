@php
    use Illuminate\Support\Carbon;
@endphp

@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/background/3.jpg)">
        <div class="container">
            <div class="title-text">
                <h1>Information</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/home">home &nbsp;/</a>
                    </li>
                    <li>
                        <a href="/informations">informations &nbsp;/</a>
                    </li>
                    <li>Information</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <section class="service-overview section">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="content-block">
                        <h2>{{ $information->name }}</h2>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>{{ $information->location }}
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>{{ Carbon::parse($information->date)->format('d F Y') }}
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>{{ $information->time }}
                            </li>
                        </ul>
                        <p>
                            {!! $information->description !!}
                        </p>
                        @can('user')
                            @if (!Auth::user()->hasRegistered($information->id))
                                <form action="/registrations" method="POST">
                                    @csrf
                                    <input type="hidden" name="information_id" value="{{ $information->id }}">
                                    <input type="hidden" name="slug" value="{{ $information->slug }}">
                                    <button type="submit" onclick="return confirm('Are you sure u wanna join this Event?')"
                                        class="btn btn-style-one">Register</button>
                                </form>
                            @else
                                <input type="button" style="cursor: default;" class="btn btn-style-one" readonly
                                    onclick="return alert('You\'ve registered')" value="Registered" />
                            @endif
                        @endcan
                        @cannot('user')
                            <input type="button" readonly style="cursor: not-allowed"
                                onclick="return alert('Login as User to Register')" class="btn btn-style-one" value="register">
                        @endcannot
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion-section">
                        <div class="accordion-holder">
                            <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a role="button" data-toggle="collapse" href="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Why Should I choose Medical Health
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                        data-parent="#accordionGroup">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt
                                            laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it
                                            squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                What are the Centre’s visiting
                                                hours?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                        data-parent="#accordionGroup">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt
                                            laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it
                                            squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                How many visitors are allowed?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                        data-parent="#accordionGroup">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim
                                            eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia
                                            aute, non cupidatat skateboard dolor
                                            brunch. Food truck quinoa nesciunt
                                            laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it
                                            squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of
                                            them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Service Section-->
    <section class="service-section bg-gray section">
        <div class="container">
            <div class="section-title text-center">
                <h3>
                    Layanan
                    <span>Informasi</span>
                </h3>
                <p>
                    Periksa layanan informasi lainnya di sini
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="items-container">
                        @foreach ($informations->take(4) as $information)
                            <div class="item">
                                <div class="inner-box">
                                    <div class="img_holder">
                                        <a href="/informations/information/{{ $information->slug }}">
                                            <img loading="lazy" src="{{ asset('user') }}/images/information/info-1.png"
                                                alt="images" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="image-content text-center">
                                        <span>{{ $information->location }} at
                                            {{ Carbon::parse($information->date)->format('d F Y') }}</span>
                                        <a href="/information">
                                            <h6>{{ $information->name }}</h6>
                                        </a>
                                        <p>{!! Str::limit($information->description, 55) !!} <a
                                                href="/informations/information/{{ $information->id }}">
                                                @if (str_contains($information->description, '<div>'))
                                    </div>
                        @endif read more</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        </div>
        </div>
    </section>
    <!--End Service Section-->
@endsection

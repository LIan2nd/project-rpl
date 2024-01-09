@extends('layouts.main')
@section('content')
    <!--Page Title-->
    <section class="page-title text-center" style="background-image: url({{ asset('user') }}/images/contact/contact1.png)">
        <div class="container">
            <div class="title-text">
                <h1>Contact</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="/home">home &nbsp;/</a>
                    </li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="section contact">
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <!-- address start -->
                    <div class="address-block">
                        <!-- Location -->
                        <div class="media">
                            <i class="far fa-map"></i>
                            <div class="media-body">
                                <h3>Location</h3>
                                <p>
                                    Jalan Lenteng Agung Raya №20, Jakarta Selatan
                                </p>
                            </div>
                        </div>
                        <!-- Phone -->
                        <div class="media">
                            <i class="fas fa-phone"></i>
                            <div class="media-body">
                                <h3>Phone</h3>
                                <p>
                                    (+62) 881-298-743
                                    <br />(+62) 564-334-212
                                </p>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="media">
                            <i class="far fa-envelope"></i>
                            <div class="media-body">
                                <h3>Email</h3>
                                <p>
                                    sobat@sehat.gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- address end -->
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="contact-form">
                        <!-- contact form start -->
                        <form action="!#" class="row">
                            <!-- name -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control main" placeholder="Name"
                                    required />
                            </div>
                            <!-- email -->
                            <div class="col-lg-6">
                                <input type="email" class="form-control main" placeholder="Email" required />
                            </div>
                            <!-- phone -->
                            <div class="col-lg-12">
                                <input type="text" class="form-control main" placeholder="Phone" required />
                            </div>
                            <!-- message -->
                            <div class="col-lg-12">
                                <textarea name="message" rows="10" class="form-control main" placeholder="Your message"></textarea>
                            </div>
                            <!-- submit button -->
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </form>
                        <!-- contact form end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!--====  End of Contact Form  ====-->

    <section class="map">
        <!-- Google Map -->
        <div id="map"></div>
    </section>
    <!--====  End of Google Map  ====-->
@endsection

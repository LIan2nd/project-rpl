@extends('login.layouts.main')
@section('content')
    <section class="blog-section section style-four style-five">
        <div class="container text-center">
            <div class="justify-content-center">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success.</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="form-signin">
                    <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control main" placeholder="Email address" required>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control main" placeholder="Password" required>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn-style-one btn-block" type="submit">Login</button>
                </form>
                <small>Not Registered? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </section>
@endsection

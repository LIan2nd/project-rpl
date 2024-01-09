@extends('login.layouts.main')
@section('content')
    <section class="blog-section section style-four style-five">
        <div class="container text-center">
            <div class="justify-content-center">
                @if (session()->has('success'))
                    <div class="form-signin alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success.</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="form-signin alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error.</strong> {{ session('loginError') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <form class="form-signin" action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" id="inputUsername" name="username"
                        class="form-control main @error('username') is-invalid @enderror" placeholder="Username" required
                        autofocus value="{{ old('email') }}">
                    @error('username')
                        <div class="invalid-feedback text-left">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control main"
                        placeholder="Password" required>
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn-style-one btn-block" type="submit">Login</button>
                </form>
                <small>Not Registered? <a href="/register">Register Now!</a></small>
            </div>
        </div>
    </section>
@endsection

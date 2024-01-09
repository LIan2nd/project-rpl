@extends('login.layouts.main')
@section('content')
    <section class="blog-section section style-four style-five">
        <div class="container text-center">
            <div class="justify-content-center">
                <form class="form-signin" action="/contributorRegister" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Contributor Registration Form</h1>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" name="name" id="inputName"
                        class="form-control main @error('name') is-invalid @enderror" placeholder="Name" required
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback text-left">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" name="username" id="inputUsername"
                        class="form-control main @error('username') is-invalid @enderror" placeholder="Username" required
                        value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback text-left">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="inputEmail" class="sr-only @error('email') is-invalid @enderror">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control main" placeholder="Email"
                        required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback text-left">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="inputPassword" class="sr-only @error('password') is-invalid @enderror">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                        required>
                    @error('password')
                        <div class="invalid-feedback text-left">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn-style-one btn-block" type="submit">Register</button>
                </form>
                <small>Already Registered? <a href="/login">Login Now!</a></small>
            </div>
        </div>
    </section>
@endsection

@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Lord, {{ Auth::user()->username }}</h5>
                                <p class="mb-4">
                                    Let's Create Your <span class="fw-bold">Article!</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('admin') }}/assets/img/illustrations/man-with-laptop-light.png"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="row">
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">New Article</h5>
                                <small class="text-muted float-end">Create with Love <i class='bx bxs-skull'></i></small>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/dashboard/articles" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" name="title"
                                            class="form-control @error('title') is-invalid @enderror" id="title"
                                            placeholder="Your Article title" value="{{ OLD('title') }}" required
                                            autofocus />
                                        @error('title')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select class="form-select" name="category_id" id="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="image" class="form-label @error('image') is-invalid @enderror">Event
                                            Image</label>
                                        <img class="img-preview img-fluid mb-2 col-sm-8">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="image" name="image"
                                                onchange="previewImage()" />
                                        </div>
                                        @error('image')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div id="defaultFormControlHelp" class="form-text mt-2">
                                            Optional | max 5MB
                                        </div>
                                    </div> --}}
                                    <div class="mb-3">
                                        <label for="body" class="form-label">Body</label>
                                        @error('body')
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ OLD('body') }}"
                                            required>
                                        <trix-editor input="body"></trix-editor>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create an Article</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

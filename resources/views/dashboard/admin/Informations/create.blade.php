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
                                    Let's Create <span class="fw-bold">Information!</span>
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
                                <h5 class="mb-0">New Information Event</h5>
                                <small class="text-muted float-end">Create with Love <i class='bx bxs-skull'></i></small>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/dashboard/admin/informations">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Event name" value="{{ OLD('name') }}" required autofocus />
                                        @error('name')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="date">Date</label>
                                        <input type="date" name="date"
                                            class="form-control @error('date') is-invalid @enderror" id="date"
                                            value="{{ OLD('date') }}" required autofocus />
                                        @error('date')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="time">Time</label>
                                        <input type="text" name="time"
                                            class="form-control @error('time') is-invalid @enderror" id="time"
                                            value="{{ OLD('time') }}" required autofocus />
                                        @error('time')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="location">Location</label>
                                        <input type="text" name="location"
                                            class="form-control @error('location') is-invalid @enderror" id="location"
                                            placeholder="Event Location" value="{{ OLD('location') }}" required autofocus />
                                        @error('location')
                                            <div class="form-text text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
                                        <label for="description" class="form-label">Description</label>
                                        @error('description')
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                {{ $message }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @enderror
                                        <input id="description" type="hidden" name="description"
                                            value="{{ OLD('description') }}" required>
                                        <trix-editor input="description"></trix-editor>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create an Information Event</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

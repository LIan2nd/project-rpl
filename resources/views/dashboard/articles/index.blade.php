@extends('dashboard.layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Hii, {{ Auth::user()->username }} 🎉</h5>
                                <p class="mb-4">
                                    These all your <span class="fw-bold">Articles</span>, wanna make a new Article?
                                </p>

                                @if ($articles->count())
                                    <a href="/dashboard/articles/create" class="btn btn-sm btn-outline-primary"><i
                                            class='bx bx-plus'></i> Create new
                                        article</a>
                                @else
                                @endif
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

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('deleteSuccess'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong> {{ session('deleteSuccess') }}</i></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($articles->count())
            <div class="card">
                <h5 class="card-header">All Articles</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Page</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        {{ $article->category->name }}
                                    </td>
                                    <td>
                                        <a href="/articles/article/{{ $article->slug }}">To Article Page</a>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-info" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-info-circle'></i>&nbsp; <span>Article Detail</span>"
                                            href="/dashboard/articles/{{ $article->slug }}"><span class="badge me-2"><i
                                                    class="bx bx-detail me-1"></i></span></a>
                                        <a class="btn btn-outline-warning" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-edit'></i>&nbsp; <span>Article Edit</span>"
                                            href="/dashboard/articles/{{ $article->slug }}/edit"><span class="badge me-2"><i
                                                    class="bx bx-edit-alt me-1"></i></span></a>
                                        <form action="/dashboard/articles/{{ $article->slug }}" class="d-inline"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger d-inline" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="<i class='bx bx-message-alt-x'></i>&nbsp; <span>Article Delete</span>"
                                                onclick="return confirm('Are You sure u want to DESTROYY this Article?')"
                                                type="submit"><span class="badge me-2"><i
                                                        class="bx bx-trash me-1"></i></span></button>
                                        </form>
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-none bg-transparent border border-info text-center mb-3">
                        <div class="card-body">
                            <h5 class="card-title text-info">Ooppss!!</h5>
                            <p class="card-text">You haven't an Article yet, Let's make some <strong>Article</strong>.</p>
                            <a href="articles/create" class="btn btn-primary">Create an Article</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

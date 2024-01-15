@extends('dashboard.layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1>
                    {{ $article->title }}
                </h1>
                <a href="/dashboard/articles" class="btn btn-success"><i class='bx bx-left-arrow-alt'></i> Back to All
                    Articles</a>
                <a href="/dashboard/articles/{{ $article->slug }}/edit" class="btn btn-warning"><i class="bx bx-edit"></i> Edit
                    Article</a>
                <form action="/dashboard/articles/{{ $article->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger d-inline"
                        onclick="return confirm('Are You sure u want to DESTROYY this article?')" type="submit"><span><i
                                class="bx bx-trash me-1"></i></span> Delete</button>
                </form>
                @if (session('update'))
                    <div class="alert alert-success alert-dismissible mt-3" role="alert">
                        <i class='bx bxs-bookmarks'></i> {{ session('update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {{-- @if ($article->image)
                    <div style="max-height:350; overflow:hidden;">
                        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->category->name }}"
                            class="image-fluid mt-3" style="width: 100%; height: 400px">
                    </div>
                @else --}}
                <img src="{{ asset('user') }}/images/artikel/artikel2.png" alt="{{ $article->category->name }}"
                    class="image-fluid mt-3" style="width: 100%; height: 400px">
                {{-- @endif --}}
                <article @class(['my-3', 'fs-5'])>
                    <p>{!! $article->body !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

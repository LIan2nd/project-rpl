@php
    use Illuminate\Support\Carbon;
@endphp

@extends('dashboard.layouts.main')
@section('content')
    <div class="container my-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                    {{ $information->name }}
                </h1>
                <a href="/dashboard/admin/informations" class="btn btn-success"><i class='bx bx-left-arrow-alt'></i> Back to
                    All Events</a>
                <a href="/dashboard/admin/informations/{{ $information->slug }}/edit" class="btn btn-warning"><i
                        class="bx bx-edit"></i>
                    Edit
                    Event</a>
                <form action="/dashboard/admin/informations/{{ $information->slug }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger d-inline"
                        onclick="return confirm('Are You sure u want to DESTROYY this event?')" type="submit"><span><i
                                class="bx bx-trash me-1"></i></span> Delete</button>
                </form>
                <a href="/dashboard/admin/infomations/registrations/{{ $information->slug }}" class="btn btn-primary"><i
                        class='bx bxs-user-badge'></i>
                    Registered User : {{ $information->registrations->count() }} <i class='bx bx-right-arrow-alt'></i></a>
                @if (session('create'))
                    <div class="alert alert-success alert-dismissible mt-3" role="alert">
                        <i class='bx bx-list-plus'></i> {{ session('create') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session('update'))
                    <div class="alert alert-warning alert-dismissible mt-3" role="alert">
                        <i class='bx bxs-bookmarks'></i> {{ session('update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <img src="{{ asset('user') }}/images/information/info-1.png"
                    alt="{{ $information->name }} Event Information" class="image-fluid mt-3"
                    style="width: 100%; height: 400px">
                <article @class(['my-2', 'fs-5'])>
                    <small>Will be held in
                        <b>{{ Carbon::parse($information->date)->format('d F Y') }}</b> on
                        <b>{{ $information->location }}</b> at <b>{{ $information->time }}</b>
                    </small>
                    <h6>Desc : </h6>
                    <p>{!! $information->description !!}</p>
                </article>
            </div>
        </div>
    </div>
@endsection

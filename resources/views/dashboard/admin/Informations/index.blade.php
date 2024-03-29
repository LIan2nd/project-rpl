@php
    use Illuminate\Support\Carbon;
@endphp

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
                                    All <span class="fw-bold">Informations</span>
                                </p>
                                <a href="/dashboard/admin/informations/create" class="btn btn-sm btn-outline-primary"><i
                                        class='bx bx-plus'></i>
                                    Create new
                                    Event information</a>
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

        @if (session('create'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ session('create') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ session('delete') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($informations->count())
            <div class="card">
                <h5 class="card-header">All Informations Event</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Owner</th>
                                <th>Last Modified</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($informations as $information)
                                <tr>
                                    <td>
                                        <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                        <strong>{{ $loop->iteration }}</strong>
                                    </td>
                                    <td>{{ $information->name }}</td>
                                    <td>
                                        {{ $information->owner }}
                                    </td>
                                    <td>
                                        {{ Carbon::parse($information->last_edited)->format('d F Y') }},
                                        @if ($information->user_id != null)
                                            {{ $information->user->name }}
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-outline-info" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-info-circle'></i>&nbsp; <span>Information Detail</span>"
                                            href="/dashboard/admin/informations/{{ $information->slug }}"><span
                                                class="badge me-2"><i class="bx bx-detail me-1"></i></span></a>
                                        <a class="btn btn-outline-warning" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                            data-bs-placement="top" data-bs-html="true"
                                            title="<i class='bx bx-edit'></i>&nbsp; <span>Information Edit</span>"
                                            href="/dashboard/admin/informations/{{ $information->slug }}/edit"><span
                                                class="badge me-2"><i class="bx bx-edit-alt me-1"></i></span></a>
                                        <form action="/dashboard/admin/informations/{{ $information->slug }}"
                                            class="d-inline" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-outline-danger d-inline" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title="<i class='bx bx-message-alt-x'></i>&nbsp; <span>Information Delete</span>"
                                                onclick="return confirm('Are You sure u want to DESTROYY this event?')"
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
                            <p class="card-text">No <strong>Event Information</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

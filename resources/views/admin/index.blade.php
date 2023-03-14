@extends('admin.layouts.layout')

@section('content')
    <div class="container p-5">
        <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col d-flex justify-content-center">
                <a href="" class="text-decoration-none text-dark" style="width: 80%;">
                    <div class="card shadow rounded-4">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-person-fill-gear fs-2"></i></h5>
                            <h6 class="card-subtitle">Kelola User</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-center">
                <a href="{{ route('videos') }}" class="text-decoration-none text-dark" style="width: 80%;">
                    <div class="card shadow rounded-4">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-youtube fs-2"></i></h5>
                            <h6 class="card-subtitle">Kelola Video</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="toast-container position-fixed bottom-0 end-0 p-5">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">CodeCampus</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <b>
                        Selamat Datang {{ auth()->user()->name }}
                    </b>
                </div>
            </div>
        </div>
    </div>
@endsection

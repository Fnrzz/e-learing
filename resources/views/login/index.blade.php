@extends('login.layouts.layout')

@section('content')
    <div class="container" id="login">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <div class="title-card mb-3">
                        <h5 class="fw-bold">Login</h5>
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" required name="password" id="password">
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-success" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="{{ asset('/storage/icons/icon.webp') }}">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <a href="{{ route('register') }}" class="text-center text-decoration-none">
                            <small>Register ?</small>
                        </a>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            <small><i class="bi bi-arrow-left-circle-fill"></i> Back</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('error'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">CodeCampus</strong>
                    <small>Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <b>
                        {{ session('error') }}
                    </b>
                </div>
            </div>
        </div>
    @endif
@endsection

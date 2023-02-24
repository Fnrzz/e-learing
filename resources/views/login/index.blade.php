@extends('login.layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <div class="title-card mb-3">
                        <h5 class="fw-bold">Login</h5>
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-success" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="{{ asset('/storage/icons/icon.png') }}">
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
@endsection

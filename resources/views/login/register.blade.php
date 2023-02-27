@extends('login.layouts.layout')

@section('content')
    <div class="container" id="register">
        <div class="row justify-content-center align-items-center">
            <div class="card shadow" data-aos="fade-down" data-aos-duration="1000">
                <div class="card-body">
                    <div class="title-card">
                        <h5 class="fw-bold">Register</h5>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="@error('name') {{ $message }} @enderror"
                                value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text"
                                class="form-control form-control-sm @error('username') is-invalid @enderror" name="username"
                                id="username" placeholder="@error('username') {{ $message }} @enderror">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="@error('email') {{ $message }} @enderror"
                                value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password"
                                class="form-control form-control-sm @error('password') is-invalid @enderror" name="password"
                                id="password" placeholder="@error('password') {{ $message }} @enderror">
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-success" type="submit">Register</button>
                        </div>
                    </form>
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="{{ asset('/storage/icons/icon.png') }}">
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('login') }}" class="text-decoration-none">
                            <small><i class="bi bi-arrow-left-circle-fill"></i> Back</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

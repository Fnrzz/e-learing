@extends('admin.layouts.layout')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <h3>List Video</h3>
            </div>
        </div>
        <div class="row mb-3">
            @livewire('video-table')
        </div>
        <div class="row pb-5">
            <div class="col">
                <a href="{{ route('dashboard') }}" class="btn btn-info rounded-4 text-white fw-bold">
                    Back
                </a>
                <button class="btn btn-success rounded-4 fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add Course
                </button>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Course</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('createCourse') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" readonly
                                    value="{{ old('slug') }}">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description" value="{{ old('description') }}"></input>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <trix-editor input="description"></trix-editor>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror"
                                    id="link" name="link" value="{{ old('link') }}">
                                @error('link')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($errors->any())
            <div class="toast-container position-fixed bottom-0 end-0 p-5">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">CodeCampus</strong>
                        <small>Now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <b>
                            Gagal menambahkan course
                        </b>
                    </div>
                </div>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="toast-container position-fixed bottom-0 end-0 p-5">
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto">CodeCampus</strong>
                        <small>Now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <b>
                            {{ session('success') }}
                        </b>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

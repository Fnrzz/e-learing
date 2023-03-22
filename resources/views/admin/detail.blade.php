@extends('admin.layouts.layout')

@section('content')
    <section id="detail">
        <div class="container px-5">
            <div class="row mb-3">
                <a href="{{ route('videos') }}">
                    <span class="badge text-bg-success"><i class="bi bi-arrow-left-circle-fill me-1"></i>Back</span>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 mb-3 g-3">
                <div class="col">
                    <iframe width="100%" height="315" src="{{ $course->link }}" allowfullscreen>
                    </iframe>
                </div>
                <div class="col">
                    <h5>{{ $course->title }}</h5>
                    {!! $course->description !!}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-warning fw-bold text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Edit Course
                    </button>

                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Course</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/update-course/{{ $course->slug }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ $course->title }}">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" readonly
                                        value="{{ $course->slug }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="hidden" class="form-control @error('description') is-invalid @enderror"
                                        id="description" name="description" value="{{ $course->description }}"></input>
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
                                        id="link" name="link" value="{{ $course->link }}">
                                    @error('link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

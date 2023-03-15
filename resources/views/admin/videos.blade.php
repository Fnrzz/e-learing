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
                <a href="{{ route('createCourse') }}" class="btn btn-success rounded-4 fw-bold">Add Course</a>
            </div>
        </div>
    </div>
@endsection

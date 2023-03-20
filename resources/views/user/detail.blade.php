@extends('user.layouts.layout')

@section('content')
    <section id="detail">
        <div class="container px-5">
            <div class="row mb-3">
                <a href="{{ route('dashboard') }}">
                    <span class="badge text-bg-success"><i class="bi bi-arrow-left-circle-fill me-1"></i>Back</span>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 g-3">
                <div class="col">
                    <iframe width="100%" height="315" src="{{ $course->link }}" allowfullscreen>
                    </iframe>
                </div>
                <div class="col">
                    <h5>{{ $course->title }}</h5>
                    {!! $course->description !!}
                </div>
            </div>
        </div>
    </section>
    <section id="course">
        <div class="container p-5">
            <div class="row mb-5">
                <div class="col">
                    <h3>Video Lainya</h3>
                </div>
            </div>
            @livewire('course')
        </div>
    </section>
@endsection

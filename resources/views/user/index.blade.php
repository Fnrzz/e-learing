@extends('user.layouts.layout')

@section('content')
    <section id="tabel-video">
        <div class="container px-5 py-4">
            @livewire('videos')
        </div>
    </section>
@endsection

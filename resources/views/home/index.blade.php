@extends('home.layouts.layout')

@section('content')
    <section id="jumbotron">
        <div class="container">
            <div class="row row-cols-2 align-items-center g-3">
                <div class="col" data-aos="fade" data-aos-duration="1000">
                    <div class="row">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h3 class="fw-bold d-block text-center">Mau Bikin Website ?</h3>
                                </div>
                                <div class="carousel-item">
                                    <h3 class="fw-bold d-block text-center">Mau Bikin Mobile App ?</h3>
                                </div>
                                <div class="carousel-item">
                                    <h3 class="fw-bold d-block text-center">Mau Belajar Coding ?</h3>
                                </div>
                                <div class="carousel-item">
                                    <h3 class="fw-bold d-block text-center">Tapi Bingung Dimana ?</h3>
                                </div>
                                <div class="carousel-item">
                                    <h3 class="fw-bold d-block text-center">CodeCampus Solusinya</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col text-center">
                            <a href="{{ route('login') }}" class="btn btn-success btn-join fw-bold">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-end">
                    <img src="{{ asset('/storage/icons/rocket.png') }}" data-aos="fade-left" data-aos-duration="1000"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection

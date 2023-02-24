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
    <section id="about">
        <div class="container p-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('/storage/icons/logo.png') }}" class="img-about" data-aos="fade-up"
                        data-aos-duration="1000">
                </div>
                <div class="col">
                    <p class="text-about fw-bold" data-aos="fade-up" data-aos-duration="1000">
                        Selamat datang di CodeCampus, sebuah platform e-learning yang menyediakan berbagai kursus coding
                        berkualitas untuk semua tingkatan. Kami percaya bahwa setiap orang dapat mempelajari coding dan
                        mengembangkan keterampilan yang diperlukan untuk membangun aplikasi dan website yang inovatif.
                        Dengan kurikulum yang dirancang oleh para ahli industri dan materi yang diperbarui secara berkala,
                        kami menawarkan pelatihan coding yang berkualitas untuk Anda yang ingin belajar coding dari awal
                        atau meningkatkan kemampuan coding Anda. Selain itu, kami juga menawarkan kursus khusus untuk
                        pengembangan web, aplikasi seluler, dan banyak lagi.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

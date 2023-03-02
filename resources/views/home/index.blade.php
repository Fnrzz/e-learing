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
                        class="img-fluid" alt="rocket">
                </div>
            </div>
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
    </section>
    <section id="about">
        <div class="container p-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('/storage/icons/logo.png') }}" class="img-about" data-aos="fade-up"
                        data-aos-duration="1000" alt="logo">
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
    <section id="feature">
        <div class="container p-5">
            <div class="row row-cols-1 row-cols-md-3 g-5">
                <div class="col">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img src="{{ asset('/storage/icons/1.png') }}" class="img-feature rounded-circle"
                                    alt="icons1">
                                <p class="text-secondary">
                                    Kami menawarkan kursus pemrograman web untuk pengguna yang ingin mempelajari bahasa
                                    pemrograman web seperti HTML, CSS, dan JavaScript. Kursus ini dapat disesuaikan
                                    dengan
                                    level pengguna, dari pemula hingga tingkat lanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img src="{{ asset('/storage/icons/2.png') }}" class="img-feature rounded-circle"
                                    alt="icons2">
                                <p class="text-secondary">
                                    Kami menawarkan proyek dan challenge untuk menguji kemampuan pengguna dalam
                                    membuat aplikasi web dari awal. Proyek dan challenge ini dapat berupa membuat website,
                                    membuat aplikasi web sederhana, atau mengoptimalkan performa aplikasi web.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img src="{{ asset('/storage/icons/3.png') }}" class="img-feature rounded-circle"
                                    alt="icons3">
                                <p class="text-secondary">
                                    Forum diskusi dan komunitas untuk membantu pengguna dalam memecahkan masalah dan
                                    bertukar informasi tentang web developing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='course'>
        @livewire('course')
    </section>
@endsection

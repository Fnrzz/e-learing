<div wire:init="loadPosts">
    <div class="row row-cols-1 row-cols-md-2 g-3 ">
        @foreach ($courses as $course)
            <div class="col">
                <div class="card shadow" style="width:100%" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-4 d-flex justify-content-cennter">
                                <img src="{{ asset('/storage/icons/1.webp') }}" class="img-fluid" alt="icon1">
                            </div>
                            <div class="col-lg-10 col-8">
                                <h5 class="card-title ">{{ $course->title }}</h5>
                                <p class="card-text ">{{ $course->excerpt }}</p>
                            </div>
                        </div>
                        <div class="d-grid mt-3">
                            @if (auth()->check())
                                <a href="/dashboard/course/{{ $course->slug }}" class="btn btn-success">Lihat</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-success">Lihat</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

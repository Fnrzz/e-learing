<div wire:init="loadPosts">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
        @foreach ($courses as $course)
            <div class="col">
                <div class="card" style="width: 100%; border:none">
                    <img src="https://i.ytimg.com/vi/{{ $course->thumbnail }}/hq720.jpg" class="card-img-top"
                        alt="thumbnail" width="100%" height="100%">
                    <a href="/dashboard/course/{{ $course->slug }}" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <h6 class="card-title">{{ $course->title }}</h6>
                            <p class="card-text">{{ $course->excerpt }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

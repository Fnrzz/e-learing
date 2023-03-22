<div>
    <div class="row mb-5">
        <div class="col-12 col-md-6 col-lg-4 ms-auto">
            <div class="input-group shadow-sm">
                <input type="text" class="form-control" aria-describedby="basic-addon2" wire:model="search"
                    placeholder="Masukkan Judul Video">
                <span class="input-group-text bg-success text-white " id="basic-addon2">
                    <i class="bi bi-search"></i>
                </span>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
        @foreach ($videos as $video)
            <div class="col">
                <div class="card" style="width: 100%; border:none">
                    <img src="https://i.ytimg.com/vi/{{ $video->thumbnail }}/hq720.jpg" class="card-img-top"
                        alt="thumbnail" width="100%" height="100%">
                    <a href="/dashboard/course/{{ $video->slug }}" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <h6 class="card-title">{{ $video->title }}</h6>
                            <p class="card-text">{{ $video->excerpt }}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    {{ $videos->links() }}
</div>

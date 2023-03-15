<div>
    <div class="col-12 col-md-4 ms-auto">
        <div class="input-group mb-3 shadow-sm">
            <input type="text" class="form-control" aria-describedby="basic-addon2" wire:model="search"
                placeholder="Masukkan Judul Video">
            <span class="input-group-text bg-success text-white " id="basic-addon2">
                <i class="bi bi-search"></i>
            </span>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Link</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $index => $video)
                    <tr>
                        <th scope="row">{{ $videos->firstItem() + $index }}</th>
                        <td>{{ $video->title }}</td>
                        <td>{{ $video->link }}</td>
                        <td>
                            <a href="/dashboard/videos/{{ $video->slug }}">
                                <span class="badge text-bg-info text-white">
                                    <i class="bi bi-person-vcard-fill"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $videos->links() }}
    </div>
</div>

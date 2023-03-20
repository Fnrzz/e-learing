<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class Videos extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        $data = [
            'videos' => Course::where('title', 'like', '%' . $this->search . '%')->paginate(8)
        ];

        return view('livewire.videos', $data);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

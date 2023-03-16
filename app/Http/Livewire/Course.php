<?php

namespace App\Http\Livewire;

use App\Models\Course as ModelsCourse;
use Livewire\Component;

class Course extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $data = [
            'courses' => $this->readyToLoad ? ModelsCourse::latest()->paginate(4) : [],
        ];
        return view('livewire.course', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.index');
        }
    }

    public function videos()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.videos');
        }
    }

    public function detail(Course $course)
    {
        if (auth()->user()->role == 'admin') {
            $data = [
                'course' => $course
            ];
            return view('admin.detail', $data);
        }
    }
}

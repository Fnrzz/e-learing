<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function detail(Course $course)
    {
        $data  = [
            'course' => $course
        ];

        return view('home.detail', $data);
    }
}

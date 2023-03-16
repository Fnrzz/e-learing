<?php

namespace App\Http\Controllers;

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
}

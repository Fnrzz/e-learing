<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $rules = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);
        $rules['excerpt'] = Str::limit(strip_tags($request->description), 40, '...');
        Course::create($rules);
        return redirect('/dashboard/videos')->with('success', 'Berhasil menambahkan course');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Course::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

    public function delete(Course $course)
    {
        $course->delete();
        return back()->with('success', 'Berhasil menghapus course');
    }
}

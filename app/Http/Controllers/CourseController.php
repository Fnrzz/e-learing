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
            'link' => 'required',
            'slug' => 'required'
        ]);

        $rules['excerpt'] = Str::limit(strip_tags($request->description), 40, '...');

        $link = $request->link;
        $token = explode("/", $link)[4];

        $rules['thumbnail'] = $token;

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

    public function update(Request $request, Course $course)
    {
        $rules = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'slug' => 'required'
        ]);

        $rules['excerpt'] = Str::limit(strip_tags($request->description), 40, '...');

        $link = $request->link;
        $token = explode("/", $link)[4];

        $rules['thumbnail'] = $token;

        $course->update($rules);
        return redirect('/dashboard/videos')->with('success', 'Berhasil mengubah course');
    }
}

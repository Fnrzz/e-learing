<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Perkenalan Laravel 8',
            'description' => 'Video perkenalan tentang laravel 8',
            'link' => 'https://www.youtube.com/embed/HqAMb6kqlLs'
        ]);

        Course::create([
            'name' => 'Instalasi & Konfigurasi Laravel 8',
            'description' => 'Video instalasi dan konfigurasi pada laravel 8',
            'link' => 'https://www.youtube.com/embed/pZqk57Xvujs'
        ]);

        Course::create([
            'name' => 'Struktur Folder Pada Laravel 8',
            'description' => 'Video penjelasan struktur folder pada laravel 8',
            'link' => 'https://www.youtube.com/embed/u7zS2XpMpsc'
        ]);

        Course::create([
            'name' => 'Templateing Engine Pada Laravel 8',
            'description' => 'Video penjelasan tentang templateing pada laravel 8',
            'link' => 'https://www.youtube.com/embed/9jrD0wcfq1g'
        ]);
    }
}

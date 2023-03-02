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
            'title' => 'Perkenalan Laravel 8',
            'slug' => 'perkenalan-laravel-8',
            'excerpt' => 'Video perkenalan tentang laravel 8',
            'description' => '<p>Kali ini kita akan memulai seri baru untuk belajar Laravel 8.. Lets Go!<br>
            CHAPTER:<br>
            0:00 Intro<br>
            0:55 Pengertian Laravel?<br>
            1:30 Laravel: Web Application Framework<br>
            3:03 Pembuat/Pendiri Laravel<br>
            3:53 Filosofi Laravel<br>
            4:16 Tujuan Laravel<br>
            5:21 Fitur Utama Laravel<br>
            6:40 Ekosistem Laravel<br>
            7:21 Hasil Website Laravel<br>
            7:55 Pre Requisite (Syarat dasar belajar Laravel)<br>
            10:18 Software Requirements
            </p>
            ',
            'link' => 'https://www.youtube.com/embed/HqAMb6kqlLs'
        ]);

        Course::create([
            'title' => 'Instalasi & Konfigurasi Laravel 8',
            'slug' => 'instalasi-&-konfigurasi-laravel-8',
            'excerpt' => 'Video instalasi dan konfigurasi pada laravel 8',
            'description' => '<p>Menginstall laravel 8 pada sistem operasi MacOS dan Windows<br>            
            00:00 Intro<br>
            01:09 Instalasi & Konfigurasi di MacOS<br>
            18:11 Instalasi & Konfigurasi di Windows<br>
            39:56 Penutup
            </p>',
            'link' => 'https://www.youtube.com/embed/pZqk57Xvujs'
        ]);

        Course::create([
            'title' => 'Struktur Folder Pada Laravel 8',
            'slug' => 'struktur-folder-pada-laravel-8',
            'description' => '<p>Mempelajari struktur folder, routes dan view pada laravel 8<br>
            00:00 Intro<br>
            01:42 Struktur Folder<br>
            07:21 Routing<br>
            12:48 View<br>
            20:00 Mengirimkan data ke view<br>
            23:00 Penutup<br></p>',
            'excerpt' => 'Video penjelasan struktur folder pada laravel 8',
            'link' => 'https://www.youtube.com/embed/u7zS2XpMpsc'
        ]);

        Course::create([
            'title' => 'Templateing Engine Pada Laravel 8',
            'slug' => 'templateing-engine-pada-laravel-8',
            'description' => '<p>Mengenal fitur Blade Templating Engine pada laravel 8<br>
            00:00 Intro<br>
            01:00 Dokumentasi Blade<br>
            03:10 Penggunaan Blade<br>
            10:51 Layouting System<br>
            20:31 Simulasi Blog Posts<br>
            31:28 Single Post<br>
            33:59 Penutup<br></p>',
            'excerpt' => 'Video penjelasan tentang templateing pada laravel 8',
            'link' => 'https://www.youtube.com/embed/9jrD0wcfq1g'
        ]);
    }
}

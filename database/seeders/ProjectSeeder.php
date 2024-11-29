<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::insert([
            [
                'title' => 'Website Pemesanan Baliho Surakarta',
                'description' => 'Pengembangan website untuk mempermudah pemesanan dan pengelolaan baliho di area Surakarta, menggunakan bahasa pemrograman Laravel Livewire3.',
                'image' => 'sibahenol.jpg',
                'link' => 'https://github.com/Yoga-Aditiya/Baliho-SiBahenol-Diskominfo',
            ],

            [
                'title' => 'Mamoney (Finance App)',
                'description' => 'Pengembangan aplikasi pengelolaan keuangan pribadi dengan menggunakan bahasa pemrograman Flutter.',
                'image' => 'mamoney.jpg',
                'link' => 'https://github.com/PPB-Flutter/UAS-FinanceApp',
            ],

            [
                'title' => 'Website Penyewaan Ruangan Gereja',
                'description' => 'Pengembangan website untuk memesan ruang pertemuan dan acara di GKJ Manahan, menggunakan bahasa pemrograman PHP.',
                'image' => 'pemgkj.jpg',
                'link' => 'https://github.com/RPL-Srikandi/penyewaan_gereja',
            ],

            [
                'title' => 'Mg Software House',
                'description' => 'Desain website dengan menggunakan HTML, CSS, dan JavaScript',
                'image' => 'mgsoft.jpg',
                'link' => 'https://mgsoftwarehouse.netlify.app',
            ],

            [
                'title' => 'Design',
                'description' => 'Kumpulan desain yang pernah dibuat dengan menggunakan berbagai aplikasi/software editing.',
                'image' => 'design.jpg',
                'link' => 'https://drive.google.com/drive/folders/1cM-RhOpo3jT7z8kdb23JJBE7RxW_4aB3?hl=ID',
            ],
        ]);
    }
}

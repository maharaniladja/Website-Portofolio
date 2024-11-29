<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'name' => 'Maharani Ladja Puwa',
            'photo' => 'profile_photo.jpg', //foto di public folder
            'description' => 'Saya seorang mahasiswi S-1 Pendidikan Teknik Informatika dan Komputer Universitas Sebelas Maret Surakarta, yang tertarik dengan perkembangan teknologi. Programming, design, dan problem-solving merupakan bagian dari keseharian saya untuk mengembangkan minat di bidang teknologi.',
            'contact' => 'maharaniiladja@gmail.com',
            'instagram' => 'https://www.instagram.com/ranildj/',
            'github' => 'https://github.com/maharaniladja',
        ]);
    }
}

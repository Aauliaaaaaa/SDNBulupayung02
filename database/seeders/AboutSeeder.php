<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul' => 'Company',
            'subjudul' => 'lorem ipsum',
            'deskripsi_1' => 'logo.png',
            'deskripsi_2' => 'lorem ipsum',
            'kelebiahan_1' => 'lorem ipsum',
            'kelebiahan_2' => 'lorem ipsum',
            'kelebiahan_3' => 'lorem ipsum',
            'kelebiahan_4' => 'lorem ipsum',

        ]);
    }
}

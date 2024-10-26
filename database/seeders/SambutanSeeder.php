<?php

namespace Database\Seeders;

use App\Models\Sambutan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sambutan::create([
            'name' =>'Sambutan Kepala Sekolah',
            'description' =>'Assalamualaikum ww ww
            alhamdulillah puja dan puji syukur',
            'logo' =>'logo.png',
        ]);
    }
}

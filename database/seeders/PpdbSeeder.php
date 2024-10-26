<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ppdb::create([
            'name' =>'Pendaftaran siswa siswi SD N 02 Bulupayung',
            'logo' =>'logo.png',
        ]);
    }
}

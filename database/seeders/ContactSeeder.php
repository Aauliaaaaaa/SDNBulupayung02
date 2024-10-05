<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' =>'SD N Bulupayung 02',
            'description' =>'Lorem ipsum',
            'logo' =>'logo.png',
            'alamat' =>'JL. Mawar No.54',
            'email' =>'sdn2bulupayung@gmail.com',
            'telepon' =>'082287877831',
            'maps_embed' =>'maps.com',
        ]);
    }
}

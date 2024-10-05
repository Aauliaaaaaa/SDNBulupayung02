<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = [
        'judul',
        'subjudul',
        'deskripsi_1',
        'deskripsi_2',
        'kelebiahan_1',
        'kelebiahan_2',
        'kelebiahan_3',
        'kelebiahan_4'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    // inisialisasi nama tabel
    protected $table = 'partners';

    // yang boleh diisi
    protected $fillable = [
        'name',
        'location',
        'description',
        'status',
        'phone',
        'image_partner'
    ];
}

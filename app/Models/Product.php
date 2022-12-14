<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // inisialisasi nama tabel
    protected $table = "products";

    // yang boleh diisi
    protected $fillable = [
        'name',
        'price',
        'description',
        'status',
        'kategori',
        'image'
    ];

    
}

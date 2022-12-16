<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
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

    public function partners()
    {
        return $this->belongsToMany(Partner::class, 'product_partner', 'id_product', 'id_partner');
 
    }
    
}

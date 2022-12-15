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
        'phone',
        'image_partner'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_partner', 'id_partner', 'id_product');
 
    }
}

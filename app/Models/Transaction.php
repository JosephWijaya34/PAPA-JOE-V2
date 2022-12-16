<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    //inisialisasi nama tabel
    protected $table = "transactions";

    // yang boleh diisi
    protected $fillable = [
        'payment_photo',
        'status',
    ];

    public function userTransaction()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // relasi many many 
    public function products()
    {
        return $this->belongsToMany(Product::class, 'transaction_product', 'transaction_id', 'product_id')->withPivot('quantity');
    }
}

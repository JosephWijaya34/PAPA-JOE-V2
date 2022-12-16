<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    //inisialisasi nama tabel
    protected $table = "transaksi";

    // yang boleh diisi
    protected $fillable = [
        'payment_photo',
        'status',
    ];

    public function userTransaction()
    {
        return $this->belongsTo(User::class);
    }
}

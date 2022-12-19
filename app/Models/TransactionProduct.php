<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "transaction_product";

    // yang boleh diisi

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity'
    ];
}

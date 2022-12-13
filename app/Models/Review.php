<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    // inisialisasi nama tabel
    protected $table = "review";

    // yang boleh diisi
    protected $fillable = [
        'user_id',
        'comment',
        'status',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

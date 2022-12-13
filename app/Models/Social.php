<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
     // inisialisasi nama tabel
     protected $table = "socialmedia";

     // yang boleh diisi
     protected $fillable = [
         'facebook',
         'instagram',
         'whatsapp',
         
     ];
}

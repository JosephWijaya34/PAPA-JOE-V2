<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Social::create([
            'facebook' => 'facebook.com',
            'instagram' => 'instagram.com',
            'whatsapp' => '081234567890',
            
        ]);
    }
}

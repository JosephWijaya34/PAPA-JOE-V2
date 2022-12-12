<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Sushi Salmon Role',
            'price' => 25000,
            'description' => 'Sushi dengan isian salmon yang di padukan dengan bumbu dan saos khas PAPA JOE',
            'status' => 'Aktif',
            'image'=> 'sushimentai.jpeg'
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 40)->nullable(false);
            $table->integer('price')->nullable(false);
            $table->string('description', 100)->nullable(false);
            $table->string('status', 10)->nullable(false)->default('aktif');
            $table->string('kategori', 10)->nullable(false)->default('halal');
            $table->string('image', 255)->nullable(false);
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

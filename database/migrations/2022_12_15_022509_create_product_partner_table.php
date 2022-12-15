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
        Schema::create('product_partner', function (Blueprint $table) {
            $table->unsignedBigInteger('id_product');
            // foreign key ke table product id
            $table->foreign('id_product')->references('id')->on('products')->onDelete('restrict');

            $table->unsignedBigInteger('id_partner');
            // foreign key ke table partner id
            $table->foreign('id_partner')->references('id')->on('partners')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_partner');
    }
};

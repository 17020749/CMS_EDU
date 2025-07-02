<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->index();
            $table->string('product_name');
            $table->string('product_title');
            $table->string('product_img');
            $table->string('product_slug');
            $table->string('product_description');
            // $table->string('product_relate');
            // $table->date('product_date');
            // $table->string('product_category', 10)->default('te');
            $table->timestamps();
            // $table->foreign('product_category')->references('category_code')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

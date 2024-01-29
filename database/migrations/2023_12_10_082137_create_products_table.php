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
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->integer('rate');
            $table->enum('unit',['kg','litre','dozen'])->default('kg');
            $table->integer('discount');
            $table->enum('discount_unit',['percentage','fixed'])->default('percentage');
            $table->enum('status',['available','out_of_stock'])->default('available');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

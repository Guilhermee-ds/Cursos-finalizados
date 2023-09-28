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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description')->nullable();
            $table->integer('weight')->nullable();
            $table->float('price_sale',8, 2)->default(0.01);
            $table->integer('minimum_stock')->default(1);
            $table->integer('max_stock')->default(1);
            $table->date('data_input')->default(today(1));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

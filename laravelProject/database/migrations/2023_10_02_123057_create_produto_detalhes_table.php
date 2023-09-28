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
        Schema::create('produto_detalhes', function (Blueprint $table) {
            //column
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->float('length',8, 2);
            $table->float('width',8, 2);
            $table->float('height',8, 2);
            $table->timestamps();

            //constraint -> references relacionament
            $table->foreign('product_id')->references('id')->on('produtos');
            $table->unique('product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};

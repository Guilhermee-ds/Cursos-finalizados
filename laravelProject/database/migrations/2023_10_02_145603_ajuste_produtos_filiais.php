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
        //create table filiais

        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });

        //create table produto_filiais
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('price_sale',8,2);
            $table->integer('minimum_stock');
            $table->integer('max_stock');
            $table->timestamps();


            //foreign keys

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        //remove collumm from table produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['price_sale','minimum_stock','max_stock']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        //add collumm from table produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('price_sales', 8,2);
            $table->integer('minimum_stock', 8,2);
            $table->integer('max_stock', 8  ,2);

        });

        Schema::dropIfExists('produto_filiais');

        Schema::dropIfExists('filiais');
    }
};

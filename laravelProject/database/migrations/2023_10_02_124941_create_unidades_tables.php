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
        Schema::create('unidades_tables', function (Blueprint $table) {
            $table->id();
            $table->string('unit',5); //cm, mm, kg ...
            $table->string('description',30);
            $table->timestamps();
        });

        //relacion one for any => um pra muitos

        //add relacionation how a table produtos
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unidades_tables');
        });

        //add relacionation how a table produtos_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('unidades_tables');
        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remove relacionation how a table produtos_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('produtos_detalhes_unit_id_foreign'); //[table]_[coluna]_foreign

            //remove a column unit_id
            $table->dropColumn('unit_id');
        });

        //remove relacionation how a table produtos
        Schema::table('produtos', function(Blueprint $table){
            //remove a fk
            $table->dropForeign('produtos_unit_id_foreign'); //[table]_[coluna]_foreign

            //remove a column unit_id
            $table->dropColumn('unit_id');
        });

        Schema::dropIfExists('unidades_tables');
    }
};

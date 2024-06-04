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
        Schema::create('medicamentos', function(Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('lote');
            $table->date('fecha_caducidad');
            $table->integer('existencias');
            $table->float('precio_unitario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

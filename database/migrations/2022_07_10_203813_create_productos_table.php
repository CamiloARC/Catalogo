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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nombre');
            $table->unsignedBigInteger('talla_id');
            $table->String('observaciones',500);
            $table->unsignedBigInteger('marca_id');
            $table->bigInteger('cantidad_inventario');
            $table->date('fecha_embarque');

            $table->foreign('talla_id')->references('id')->on('tallas');

            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};

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
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Proveedor');
            $table->string('Concepto');
            $table->string('Importe');
            $table->string('Moneda');
            $table->string('CentrodeCosto');
            $table->string('MaquinaUnidad');
            $table->string('Factura');
            $table->string('OrdendeCompra');
            $table->string('OrdendeTrabajo');
            $table->string('StatusPago');
            $table->string('FolioPago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maquinas');
    }
};

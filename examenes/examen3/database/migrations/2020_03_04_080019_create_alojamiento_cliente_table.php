<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlojamientoClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alojamiento_cliente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('alojamiento_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
            $table->date('fecha_in');
            $table->date('fecha_out');

            $table->foreign('alojamiento_id')
            ->references('id')->on('alojamientos')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('cliente_id')
            ->references('id')->on('clientes')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alojamiento_cliente');
    }
}

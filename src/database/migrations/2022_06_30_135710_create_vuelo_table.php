<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();

            $table->foreignId('aerolinea_id')
                ->nullable()
                ->constrained('aerolinea')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('ciudad_origen_id')
                ->nullable()
                ->constrained('ciudad')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('ciudad_destino_id')
                ->nullable()
                ->constrained('ciudad')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->float('precio');
            $table->integer('duracion_minutos');
            $table->integer('no_escalas');
            $table->datetime('fecha_salida');
            $table->datetime('fecha_llegada');
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
        Schema::dropIfExists('vuelo');
    }
}

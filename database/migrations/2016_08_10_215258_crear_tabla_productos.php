<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 60);
            $table->enum('clasificacion',['perecedero','no perecedero','basico','emergencias']);
            $table->enum('marca',['Rexona','Familia','Recreo','Protex','Mamaines','Ariel','Tutifruty','Diana','Pantene']);
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
        Schema::drop('productos');
    }
}


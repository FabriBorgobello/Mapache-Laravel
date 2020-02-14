<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('precio')->unsigned();
            $table->string('foto');
            $table->boolean('borrado')->default(0);
            
            // $table->integer('id_categoria')->unsigned();
            // $table->foreign('id_categoria')
            //     ->references('id')
            //     ->on('categorias');

            // $table->integer('id_marca')->unsigned();
            // $table->foreign('id_marca')
            //     ->references('id')
            //     ->on('marcas');
            
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
        Schema::dropIfExists('productos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('categorias')->insert([
            ['nombre' => ''],
            ['nombre' => 'Notebooks'],
            ['nombre' => 'PC de escritorio'],
            ['nombre' => 'Procesadores'],
            ['nombre' => 'Teclados'],
            ['nombre' => 'Monitores'],
            ['nombre' => 'Mouse'],
            ['nombre' => 'CPU'],
            ['nombre' => 'Placas de Video'],
            ['nombre' => 'Impresoras'],
            ['nombre' => 'Toners'],
            ['nombre' => 'Modems / Routers']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}

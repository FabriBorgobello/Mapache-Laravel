<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        DB::table('marcas')->insert([
            ['nombre' => ''],
            ['nombre' => 'Acer'],
            ['nombre' => 'HP'],
            ['nombre' => 'LG'],
            ['nombre' => 'Asus'],
            ['nombre' => 'Apple'],
            ['nombre' => 'Logitech'],
            ['nombre' => 'Intel'],
            ['nombre' => 'AMD'],
            ['nombre' => 'Motorola'],
            ['nombre' => 'Samsung'],
            ['nombre' => 'Xiaomi'],
            ['nombre' => 'Alcatel'],
            ['nombre' => 'Huawei']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}

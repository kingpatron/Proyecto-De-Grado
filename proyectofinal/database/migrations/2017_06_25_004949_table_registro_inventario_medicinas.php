<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableRegistroInventarioMedicinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_inventario_medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('medicinas_id');
            $table->integer('cms_users_id');
            $table->integer('mentrada');
            $table->integer('mensalida');
            $table->string('descripcion',225);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_inventario_medicamentos');
    }
}

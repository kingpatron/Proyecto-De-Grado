<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableMedicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_medicamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre',150);
            $table->integer('cantidad');
            $table->date('fecha_vencimiento',150);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario_medicamentos');
    }
}

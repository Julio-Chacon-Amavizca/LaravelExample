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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');//como maximo 255 caracteretes
            $table->string('slug');//separar nombre con barras
            $table->text('descripcion');//Mucho mas caracteres
            $table->text('categoria');
            $table->timestamps();//Crea dos tablas, fecha de creacion y fecha de actualizacion 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};

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
        Schema::create('regnotas', function (Blueprint $table) {

            $table->string('parcial1');
            $table->string('parcial2');
            $table->string('efinal');
            $table->string('nfinal');
            $table->string('estado');
            
            $table->string('estudiante');
            $table->string('materia');
            $table->string('profesor');
            

            $table->foreign('estudiante')->references('codestudiante')->on('estudiantes')->onDelete('cascade');
            $table->foreign('materia')->references('codmateria')->on('materias')->onDelete('cascade');
            $table->foreign('profesor')->references('codprofesor')->on('profesores')->onDelete('cascade');
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
        Schema::dropIfExists('regnotas');
    }
};

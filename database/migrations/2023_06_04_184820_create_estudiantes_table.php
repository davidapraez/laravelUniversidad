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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('codestudiante')->primary()->unique();
            $table->string('nomestudiante');
            $table->string('edaestudiante');
            $table->date('fechestudiante');
            $table->string('sexestudiante');

            $table->string('ciudades_codciudad');
            $table->string('barrios_codbarrio');
            $table->string('programas_codprograma');

            $table->foreign('ciudades_codciudad')->references('codciudad')->on('ciudades')->onDelete('cascade');
            $table->foreign('barrios_codbarrio')->references('codbarrio')->on('barrios')->onDelete('cascade');
            $table->foreign('programas_codprograma')->references('codprograma')->on('programas')->onDelete('cascade');
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
        Schema::dropIfExists('estudiantes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('centros_educacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUE');
            $table->string('nombreDir');
            $table->string('nombreJE');
            $table->string('codigosie');
            $table->string('nivelEd');
            $table->string('cantidadE');
            $table->string('cantidadM');
            $table->string('descripcionG');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centros_educacion');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la criptomoneda
            $table->string('url'); // Enlace al sitio web oficial
            $table->decimal('fee' , 10, 2); // comision
            $table->string('country'); // país
            $table->text('description'); // Descripción de la criptomoneda
            $table->string('logo_url'); // URL del logotipo
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchanges');
    }
};

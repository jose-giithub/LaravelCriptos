<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table) {
            $table->id(); // ID único para cada entrada
            $table->string('wallet_address')->unique(); // Dirección única de la billetera
            $table->decimal('balance', 20, 2); // Balance con 20 dígitos en total y 2 dígitos decimales

            // Información de la plataforma
            $table->unsignedBigInteger('platform_crypto_id')->index(); // ID de la criptomoneda de la plataforma
            $table->string('platform_symbol'); // Símbolo de la criptomoneda de la plataforma
            $table->string('platform_name'); // Nombre de la criptomoneda de la plataforma

            // Detalles de la moneda
            $table->unsignedBigInteger('currency_crypto_id')->index(); // ID de la moneda
            $table->decimal('currency_price_usd', 20, 14); // Precio en USD con 14 dígitos decimales
            $table->string('currency_symbol'); // Símbolo de la moneda
            $table->string('currency_name'); // Nombre de la moneda

            $table->timestamps(); // timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exchanges');
    }
}
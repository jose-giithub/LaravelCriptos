<?php

use App\Models\CryptoCurrency;
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
        Schema::create('crypto_currency_historics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CryptoCurrency::class)->constrained(); // ide criptomoneda
            $table->date('date'); // fecha
            $table->decimal('price' , 10, 2); // precio moneda
            $table->decimal('market_cap', 10, 2); // precio del total de las criptos 
            $table->decimal('volumen', 20, 2); // precio del total de las criptos 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crypto_currency_historics');
    }
};

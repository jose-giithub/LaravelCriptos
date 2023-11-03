<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('crypto_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol');
            $table->decimal('current_price', 10, 2);
            $table->decimal('market_cap', 15, 2);
            $table->decimal('supply', 15, 2);
            $table->text('description');
            $table->string('logo_url');
            $table->string('website_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('crypto_currencies');
    }
}

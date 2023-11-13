<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptoCurrenciesTable extends Migration
{
    public function up()
    {
        //url del market cap //https://pro.coinmarketcap.com/account/
        Schema::create('crypto_currencies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('external_id')->unique();
            $table->string('name');
            $table->string('symbol');
            $table->string('slug');
            $table->integer('cmc_rank')->nullable();
            $table->integer('num_market_pairs')->nullable();
            $table->bigInteger('circulating_supply')->nullable();
            $table->bigInteger('total_supply')->nullable();
            $table->bigInteger('max_supply')->nullable();
            $table->boolean('infinite_supply')->default(false);
            $table->timestamps();
            $table->json('tags')->nullable();
            $table->string('platform')->nullable();
            // Agrega cualquier otro campo que necesites
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('crypto_currencies');
    }
}

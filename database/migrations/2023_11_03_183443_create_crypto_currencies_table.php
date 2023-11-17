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
        //     $table->string ('last_updated')->nullable();
        //     $table->string ('date_added')->nullable();
        //    // $table->json('tags')->nullable();
        //     $table->string('platform')->nullable();
        //     $table->bigInteger('self_reported_circulating_supply')->nullable();
        //     $table->decimal('self_reported_market_cap', 20, 2)->nullable();
        //     $table->decimal('price', 20, 10)->nullable();
        //     $table->bigInteger('volume_24h')->nullable();
        //     $table->decimal('volume_change_24h', 8, 2)->nullable();
        //     $table->decimal('percent_change_1h', 8, 2)->nullable();
        //     $table->decimal('percent_change_24h', 8, 2)->nullable();
        //     $table->decimal('percent_change_7d', 8, 2)->nullable();
        //     $table->decimal('market_cap', 20, 2)->nullable();
        //     $table->decimal('market_cap_dominance', 5, 2)->nullable();
        //     $table->decimal('fully_diluted_market_cap', 20, 2)->nullable();
        //     $table->string('last_updated_usd')->nullable();
            $table->timestamps(); // Agrega created_at y updated_at
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('crypto_currencies');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{
    use HasFactory;
    protected $fillable = [
        'external_id', 
        'name', 
        'symbol', 
        'slug', 
         'cmc_rank', 
         'num_market_pairs', 
         'circulating_supply', 
         'total_supply', 
         'max_supply', 
         'infinite_supply',
         'last_updated',
       
    ];
    
}

 // 'date_added',
        // //'tags',
        // 'platform',  
        // 'self_reported_circulating_supply',
        // 'self_reported_market_cap',
        // 'price',
        // 'volume_24h',
        // 'volume_change_24h',
        // 'percent_change_1h',
        // 'percent_change_24h',
        // 'percent_change_7d',
        // 'market_cap',
        // 'market_cap_dominance',
        // 'fully_diluted_market_cap',
        // 'last_updated_usd',
        // Agrega cualquier otro campo que hayas añadido
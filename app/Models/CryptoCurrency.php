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
        'tags',
        'platform',
        // Agrega cualquier otro campo que hayas añadido
    ];
    
}

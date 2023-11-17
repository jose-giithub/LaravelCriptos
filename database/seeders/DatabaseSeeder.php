<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Database\Seeder;
use App\Models\CryptoCurrency; // Asegúrate de usar tu modelo correcto

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
            'start' => '1',
            'limit' => '100',
            'convert' => 'USD'
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 102283c7-3248-437d-b6d8-23953b76d182' // Reemplaza 'tu_api_key' con tu clave real
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL

        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,            // set the request URL
            CURLOPT_HTTPHEADER => $headers,     // set the headers 
            CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
        ));

        $response = curl_exec($curl); // Send the request, save the response
        curl_close($curl); // Close request

        // Procesar la respuesta
        $data = json_decode($response, true);

        foreach ($data['data'] as $cryptoData) {
            CryptoCurrency::create([
                'external_id' => $cryptoData['id'],
                'name' => $cryptoData['name'],
                'symbol' => $cryptoData['symbol'],
                'slug' => $cryptoData['slug'],
                 'cmc_rank' => $cryptoData['cmc_rank'],
                 'num_market_pairs' => $cryptoData['num_market_pairs'],
                 'circulating_supply' => $cryptoData['circulating_supply'],
                 'total_supply' => $cryptoData['total_supply'],
                 'max_supply' => $cryptoData['max_supply'],
                 'infinite_supply' => $cryptoData['infinite_supply'],
                // 'last_updated' => $cryptoData['last_updated'],
                // 'date_added' => $cryptoData['date_added'],
                // //'tags' => $cryptoData['tags'], // Asegúrate de que 'tags' sea un array
                // 'platform' => $cryptoData['platform'],
                // 'self_reported_circulating_supply' => $cryptoData['self_reported_circulating_supply'],
                // 'self_reported_market_cap' => $cryptoData['self_reported_market_cap'],
                // 'price' => $cryptoData['quote']['USD']['price'],
                // 'volume_24h' => $cryptoData['quote']['USD']['volume_24h'],
                // 'volume_change_24h' => $cryptoData['quote']['USD']['volume_change_24h'],
                // 'percent_change_1h' => $cryptoData['quote']['USD']['percent_change_1h'],
                // 'percent_change_24h' => $cryptoData['quote']['USD']['percent_change_24h'],
                // 'percent_change_7d' => $cryptoData['quote']['USD']['percent_change_7d'],
                // 'market_cap' => $cryptoData['quote']['USD']['market_cap'],
                // 'market_cap_dominance' => $cryptoData['quote']['USD']['market_cap_dominance'],
                // 'fully_diluted_market_cap' => $cryptoData['quote']['USD']['fully_diluted_market_cap'],
                // 'last_updated_usd' => $cryptoData['quote']['USD']['last_updated'],

                // Agrega cualquier otro campo que necesites
            ]);
        }
    }
}

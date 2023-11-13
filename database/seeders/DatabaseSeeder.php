<?php

namespace Database\Seeders;

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
            'limit' => '5000',
            'convert' => 'USD'
        ];

        $headers = [
            'Accepts: application/json',
            '102283c7-3248-437d-b6d8-23953b76d182' // Reemplaza 'tu_api_key' con tu clave real
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
                // y así sucesivamente con los otros campos
            ]);
        }
    }
}

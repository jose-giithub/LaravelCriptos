<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB; // Añade esta línea

class CryptocurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apiKey = config('services.coinmarketcap.api_key');
        $endpoint = config('services.coinmarketcap.base_uri') . 'cryptocurrency/listings/latest';

        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => $apiKey,
        ])->get($endpoint);

        if ($response->successful()) {
            $cryptocurrencies = $response->json('data');

            foreach ($cryptocurrencies as $crypto) {
                DB::table('cryptocurrencies')->insert([
                    'external_id' => $crypto['id'],
                    'name' => $crypto['name'],
                    'symbol' => $crypto['symbol'],
                    'slug' => $crypto['slug'],
                    'description' => $crypto['description'] ?? null,
                    'logo' => $crypto['logo'],
                    'urls' => json_encode($crypto['urls']),
                    'date_added' => date('Y-m-d', strtotime($crypto['date_added'])),
                    'date_launched' => date('Y-m-d', strtotime($crypto['date_launched'])),
                    'tags' => json_encode($crypto['tags']),
                    'platform' => $crypto['platform'],
                    'category' => $crypto['category'],
                    'infinite_supply' => isset($crypto['infinite_supply']) && $crypto['infinite_supply'],
                ]);
            }
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cryptocurrency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptocurrencyController extends Controller
{
    /**
     * Update the 'urls' field for all cryptocurrencies from the CoinMarketCap API.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUrlsFromAPI()
    {
        // Endpoint de CoinMarketCap
        $endpoint = "URL_DE_LA_API";  // Reemplazar con la URL correcta de la API

        // Obtener los datos de la API
        $response = Http::get($endpoint);

        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            $cryptocurrenciesData = $response->json()['data'];

            foreach ($cryptocurrenciesData as $cryptoData) {
                // Buscar criptomoneda por 'external_id'
                $cryptocurrency = Cryptocurrency::where('external_id', $cryptoData['id'])->first();

                // Si se encuentra la criptomoneda, actualizar el campo 'urls'
                if ($cryptocurrency) {
                    $cryptocurrency->update([
                        'urls' => $cryptoData['urls'],
                    ]);
                }
            }

            return response()->json(['message' => 'URLs updated successfully!']);
        }

        return response()->json(['error' => 'Failed to fetch data from API'], 500);
    }
}
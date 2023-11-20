<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Criptomonedas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto mt-10 p-6 bg-white rounded shadow-md">
        <h1 class="text-2xl font-bold mb-5">Today's Cryptocurrency Prices by Market Cap</h1>

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300">#</th>
                    <th class="py-2 px-4 border-b border-gray-300">Name</th>
                    <th class="py-2 px-4 border-b border-gray-300">Price</th>
                    <th class="py-2 px-4 border-b border-gray-300">1h %</th>
                    <th class="py-2 px-4 border-b border-gray-300">24h %</th>
                    <th class="py-2 px-4 border-b border-gray-300">7d %</th>
                    <th class="py-2 px-4 border-b border-gray-300">Market Cap</th>
                    <th class="py-2 px-4 border-b border-gray-300">Volume(24h)</th>
                    <th class="py-2 px-4 border-b border-gray-300">Circulating Supply</th>
                    <th class="py-2 px-4 border-b border-gray-300">Graph</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cryptocurrencies as $crypto)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->cmc_rank }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->name }} {{ $crypto->symbol }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">${{ number_format($crypto->price, 2) }}</td>
                    <!-- Añade más celdas según tus necesidades -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
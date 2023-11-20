
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
                    <th class="py-2 px-4 border-b border-gray-300">symbol</th>
                    <th class="py-2 px-4 border-b border-gray-300">slug</th>
                    <th class="py-2 px-4 border-b border-gray-300">cmc_rank</th>
                    <th class="py-2 px-4 border-b border-gray-300">num_market_pairs</th>
                    <th class="py-2 px-4 border-b border-gray-300">circulating_supply</th>
                    <th class="py-2 px-4 border-b border-gray-300">total_supply</th>
                    <th class="py-2 px-4 border-b border-gray-300">max_supply</th>
                    <th class="py-2 px-4 border-b border-gray-300">infinite_supply</th>
                    <th class="py-2 px-4 border-b border-gray-300">last_updated</th>
                
                </tr>
            </thead>
            <tbody>
                <!--     'external_id', 
        'name', 
        'symbol', 
        'slug', 
         'cmc_rank', 
         'num_market_pairs', 
         'circulating_supply', 
         'total_supply', 
         'max_supply', 
         'infinite_supply',
         'last_updated', -->
                @foreach ($cryptocurrencies as $crypto)
                <tr>
                <td class="py-2 px-4 border-b border-gray-300">${{ number_format($crypto->price, 2) }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->external_id }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->name }} {{ $crypto->symbol }}</td> 
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->slug }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->num_market_pairs }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->circulating_supply }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->total_supply }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->max_supply }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->infinite_supply }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->last_updated }}</td>
                   
            
                 
                    <!-- Añade más celdas según tus necesidades -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
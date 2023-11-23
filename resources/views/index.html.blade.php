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
                <!-- Puedes duplicar la siguiente fila para cada criptomoneda -->
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">1</td>
                    <td class="py-2 px-4 border-b border-gray-300">Bitcoin BTC</td>
                    <td class="py-2 px-4 border-b border-gray-300">$34,102.20</td>
                    <td class="py-2 px-4 border-b border-gray-300">+0.01%</td>
                    <td class="py-2 px-4 border-b border-gray-300">-0.00%</td>
                    <td class="py-2 px-4 border-b border-gray-300">-14.48%</td>
                    <td class="py-2 px-4 border-b border-gray-300">$665,890,312,318</td>
                    <td class="py-2 px-4 border-b border-gray-300">$14,172,931,547</td>
                    <td class="py-2 px-4 border-b border-gray-300">19,526,318 BTC</td>
                    <!-- El gráfico irá aquí. Utiliza la librería que elijas para generar y mostrar el gráfico en esta celda -->
                    <td class="py-2 px-4 border-b border-gray-300"></td>
                </tr>
                <!-- Fin de la fila de ejemplo -->
            </tbody>
        </table>
    </div>

</body>

</html>
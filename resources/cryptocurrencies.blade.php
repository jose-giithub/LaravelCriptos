@extends('layouts.app')

@section('content')

<script src="{{ asset('js/app.js') }}"></script>

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
            @foreach($cryptocurrencies as $crypto)
            <tr>
                <td class="py-2 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->name }} {{ $crypto->symbol }}</td>
                <td class="py-2 px-4 border-b border-gray-300">${{ number_format($crypto->price, 2) }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->percentage_change_1h }}%</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->percentage_change_24h }}%</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ $crypto->percentage_change_7d }}%</td>
                <td class="py-2 px-4 border-b border-gray-300">${{ number_format($crypto->market_cap, 0) }}</td>
                <td class="py-2 px-4 border-b border-gray-300">${{ number_format($crypto->volume_24h, 0) }}</td>
                <td class="py-2 px-4 border-b border-gray-300">{{ number_format($crypto->circulating_supply, 0) }} {{ $crypto->symbol }}</td>
                <!-- El gráfico irá aquí. Utiliza la librería que elijas para generar y mostrar el gráfico en esta celda -->
                <td class="py-2 px-4 border-b border-gray-300"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
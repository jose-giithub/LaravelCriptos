<!-- resources/views/cryptocurrencies/index.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Cryptocurrencies</h1>

@foreach ($cryptocurrencies as $cryptocurrency)
<div>
    <h2>{{ $cryptocurrency->name }}</h2>
    <p>{{ $cryptocurrency->description }}</p>
</div>
@endforeach
@endsection
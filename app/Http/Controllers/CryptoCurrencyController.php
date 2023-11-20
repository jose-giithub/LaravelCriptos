<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CryptoCurrency;



class CryptoCurrencyController extends Controller
{
    public function index()
    {
        $cryptocurrencies = CryptoCurrency::all();
        return view('currency.index', compact('cryptocurrencies'));
    }
}

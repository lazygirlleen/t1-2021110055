<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
{
    $products = Product::all();
    $mostExpensiveProduct = Product::orderBy('retail_price', 'desc')->first();
    $highestQuantityProduct = Product::orderBy('quantity', 'desc')->first();
    return view('home', compact('products', 'mostExpensiveProduct', 'highestQuantityProduct'));
}

    public function getProduct($id, $serial_number =-1)
    {
        return view('product-detail', compact('id', 'serial_number'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:10'
        ]);
        return $request->name;
    }

}

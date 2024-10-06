<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Eileen";
        return view('home' , compact('name'));
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

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric',
            'wholesale_price' => 'required|numeric',
            'origin' => 'required|string|max:2',
            'quantity' => 'required|integer',
            'product_image' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('product_image')){
            $imagePath = $request->file('product_image')->store('public/images');
            $validated['product_image'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'id' => 'required|string|max:12',
            'product_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'retail_price' => 'required|numeric',
            'wholesale_price' => 'required|numeric',
            'origin' => 'required|string|max:2',
            'quantity' => 'required|integer',
            'product_image' => 'nullable|image|max:2048',
        ]);

        // Jika ada file gambar yang di-upload
        if($request->hasFile('product_image')) {
            // Cek apakah gambar lama ada dan hapus
            if ($product->product_image && Storage::exists($product->product_image)) {
                Storage::delete($product->product_image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('product_image')->store('public/images');
            $validated['product_image'] = $imagePath;
        }

        // Update produk dengan data yang telah divalidasi
        $product->update($validated);

        // Redirect ke halaman daftar produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        if ($product->product_image) {
            Storage::delete($product->product_image);
        }
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

}

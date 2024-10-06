@extends('layouts.template')

@section('title', 'Update Product')

@section('body')

<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>Update Existing Product</h1>
</div>

<div class="row my-5">
    <div class="col-12 px-5">
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" placeholder="Product Name" name="product_name" required value="{{ old('product_name', $product->product_name) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Description" name="description">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="retail_price">Retail Price</label>
                <input type="number" class="form-control" id="retail_price" placeholder="Retail Price" name="retail_price" required value="{{ old('retail_price', $product->retail_price) }}">
            </div>

            <div class="form-group">
                <label for="wholesale_price">Wholesale Price</label>
                <input type="number" class="form-control" id="wholesale_price" placeholder="Wholesale Price" name="wholesale_price" required value="{{ old('wholesale_price', $product->wholesale_price) }}">
            </div>

            <div class="form-group">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" id="origin" placeholder="Origin" name="origin" required value="{{ old('origin', $product->origin) }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity" required value="{{ old('quantity', $product->quantity) }}">
            </div>

            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="file" class="form-control" id="product_image" name="product_image">
                @if ($product->product_image)
                    <img src="{{ Storage::url($product->product_image) }}" class="mt-3" style="max-width: 400px;"/>
                @endif
            </div>

            <button type="submit" class="btn btn-primary btn-block">Save</button>
        </form>
    </div>
</div>

@endsection

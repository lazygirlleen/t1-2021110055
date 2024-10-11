@extends('layouts.template')

@section('title', "Product: $product->product_name")

@section('body')

<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $product->product_name }}</h5>
    </div>
    
    <div class="card-body">
        @if ($product->image)
            <img src="{{ $product->image_url }}" class="img-fluid rounded mx-auto d-block mb-3" alt="{{ $product->name }}">
        @endif

        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Product Name</th>
                    <td>{{ $product->product_name }}</td>
                </tr>
                <tr>
                    <th scope="row">Description</th>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <th scope="row">Retail Price</th>
                    <td>Rp. {{ number_format($product->retail_price, 2) }}</td>
                </tr>
                <tr>
                    <th scope="row">Wholesale Price</th>
                    <td>Rp. {{ number_format($product->wholesale_price, 2) }}</td>
                </tr>
                <tr>
                    <th scope="row">Origin</th>
                    <td>{{ $product->origin }}</td>
                </tr>
                <tr>
                    <th scope="row">Quantity</th>
                    <td>{{ $product->quantity }}</td>
                </tr>
            </tbody>
        </table>

        <div class="small">
            Created at: {{ $product->created_at }}<br>
            @if ($product->updated_at)
                Updated at: {{ $product->updated_at }}
            @endif
        </div>

        <div class="mt-3">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">
                Back to Products List
            </a>
        </div>
    </div>
</div>
@endsection

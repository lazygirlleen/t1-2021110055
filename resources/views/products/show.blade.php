@extends('layouts.template')

@section('title', "Product: $product->product_name")

@section('body')

@if ($product->image)
    <img src="{{ $product->image_url }}" class="rounded img-thumbnail mx-auto d-block my-3" alt="{{ $product->name }}"/>
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
            <td>${{ number_format($product->retail_price, 2) }}</td>
        </tr>
        <tr>
            <th scope="row">Wholesale Price</th>
            <td>${{ number_format($product->wholesale_price, 2) }}</td>
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

<div>
    <small>Created at: {{ $product->created_at }}</small>
    @if ($product->updated_at)
        <br><small>Updated at: {{ $product->updated_at }}</small>
    @endif
</div>

<div class="mt-4">
    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Back to Products List
    </a>
</div>

@endsection

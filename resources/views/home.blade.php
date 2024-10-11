@extends('layouts.template')

@section('title', 'Dashboard | Store')

@section('body')

<div class="mt-4 p-5 bg-dark text-white rounded">
    <h2 class="h3">Welcome to Store Product Management!</h2>
    <a href="{{ route('products.create') }}" class="btn btn-outline-secondary center mt-3">
        Manage Your Own Product Here
    </a>
</div>

<section class="container mt-5">
    <h1 class="h2">Dashboard</h1>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card text-black bg-outline-secondary mb-3">
                <div class="card-header">Total Quantity of Products</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($products as $product)
                            <li class="list-group-item">{{ $product->product_name }}: {{ $product->quantity }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-black  bg-outline-secondary mb-3">
                <div class="card-header">Most Expensive Product</div>
                <div class="card-body">
                    <p>{{ $mostExpensiveProduct->product_name }}: {{ $mostExpensiveProduct->retail_price }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-black bg-outline-secondary mb-3">
                <div class="card-header">Highest Quantity Product</div>
                <div class="card-body">
                    <p>{{ $highestQuantityProduct->product_name }}: {{ $highestQuantityProduct->quantity }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

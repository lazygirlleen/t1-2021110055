@extends('layouts.template')

@section('title', 'Dashboard | Store')

@section('body')
<section class="banner_area">
    <div class="banner_inner d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <h2>Welcome to Store Product Management!</h2>
                <a href="{{ route('products.create') }}" class="btn btn-outline-secondary center mt-3">
                    Manage Your Own Product Here
                </a>
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="row">
        <!-- Total Quantity Products -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Quantity of Products</div>
                <div class="card-body "></div>
        @foreach ($products as $product)
            <p>{{ $product->product_name }}: {{ $product->quantity }}</p>
        @endforeach
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="row">
        <!-- Total Quantity Products -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Most Expensive Product</div>
                <div class="card-body "></div>
        @foreach ($products as $product)
            <p>{{ $mostExpensiveProduct->product_name }}: {{ $mostExpensiveProduct->retail_price }}</p>
        @endforeach
            </div>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="row">
        <!-- Total Quantity Products -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Highest Quaantity Product</div>
                <div class="card-body "></div>
        @foreach ($products as $product)
            <p>{{ $highestQuantityProduct->product_name }}: {{ $highestQuantityProduct->quantity }}</p>
        @endforeach
            </div>
        </div>
    </div>
</section>

</section>
@endsection

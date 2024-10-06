@extends('layouts.template')

@section('title', 'Product List')

@section('body')
<div class="mt-4 p-5 bg-black text-white rounded">
    <h1>All Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm mt-10">
        Create New Product
    </a>
</div>

@if (session()->has('success'))
<div class="alert alert-success mt-4">
    {{ session()->get('success')  }}
</div>
@endif

<div class="container mt-5">
    <table class="table table-bordered mb-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Retail Price</th>
                <th scope="col">Wholesale Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Origin</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>
                    <a href="{{ route('products.show', $product) }}">
                        {{ $product->product_name }}
                    </a>
                </td>
                <td>{{ Str::limit($product->description, 50, '...') }}</td>
                <td>{{ $product->retail_price }}</td>
                <td>{{ $product->wholesale_price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->origin }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>
                    <ul>
                     
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary btn-sm mt-3">
                        Edit
                    </a>

                    <form action={{ route('products.destroy', $product) }} method="POST" class="d-inline-block mt-3">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                        </ul>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
</div>
@endsection

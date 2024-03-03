@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Product Details</h2>
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <th>Size</th>
                <td>{{ $product->size }}</td>
            </tr>
            <tr>
                <th>Color</th>
                <td>{{ $product->color }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $product->category->name }}</td>
            </tr>
        </table>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
    </div>
@endsection

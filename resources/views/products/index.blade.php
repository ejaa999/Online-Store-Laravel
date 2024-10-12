@extends('layout')

@section('content')
    <h2>Product List</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Retail Price</th>
            <th>Wholesale Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->retail_price }}</td>
            <td>{{ $product->wholesale_price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

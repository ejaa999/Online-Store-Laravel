@extends('layout')

@section('title', 'Create Product')

@section('content')
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" id="product_name" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
        </div>

        <div>
            <label for="retail_price">Retail Price:</label>
            <input type="number" name="retail_price" id="retail_price" step="0.01" required>
        </div>

        <div>
            <label for="wholesale_price">Wholesale Price:</label>
            <input type="number" name="wholesale_price" id="wholesale_price" step="0.01" required>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>

        <div>
            <label for="origin">Origin:</label>
            <input type="text" name="origin" id="origin" required>
        </div>

        <div>
            <button type="submit">Create Product</button>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>
@endsection

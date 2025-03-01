<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Product Request Form</h1>

    <a href="{{ route('products.create') }}">
        <button>Add Product</button>
    </a>

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - {{ $product->description }}</li>
        @endforeach
    </ul>

</body>
</html>

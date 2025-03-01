<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request a Product</title>
</head>
<body>
    <h1>Request a Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>

        <button type="submit">Submit Request</button>
    </form>

</body>
</html>

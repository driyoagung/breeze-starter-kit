<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">View Product</h1>
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <p>{{ $product->name }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description</label>
            <p>{{ $product->description }}</p>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Price</label>
            <p>{{ $product->price }}</p>
        </div>
        <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back</a>
    </div>
</body>
</html>

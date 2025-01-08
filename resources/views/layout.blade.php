<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-lg font-bold">Blog Management</h1>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

    <footer class="bg-gray-800 p-4 text-center text-white mt-8">
        &copy; 2024 - Blog CRUD with Laravel
    </footer>
</body>
</html>

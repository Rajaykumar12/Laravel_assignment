<?php
// filepath: resources/views/layouts/app.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow mb-4">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <h1 class="text-xl font-bold">Contact Manager</h1>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
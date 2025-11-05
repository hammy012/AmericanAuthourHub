<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Panel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <nav class="p-4 bg-gray-800 text-white">
        <div class="container mx-auto">
            <a href="{{ route('admin.dashboard') }}" class="mr-4">Dashboard</a>
        </div>
    </nav>

    <main class="py-6">
        @yield('content')
    </main>
</body>

</html>

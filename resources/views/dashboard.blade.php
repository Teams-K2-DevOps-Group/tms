<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        @include('partials.navbar')
        
        <div class="container mx-auto px-4 py-8">
            @yield('content')
        </div>
    </div>
    
    @stack('scripts')


    <nav class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold">Task Manager</a>
        <div class="flex items-center space-x-4">
            <span>{{ Auth::user()->name }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="hover:underline">Logout</button>
            </form>
        </div>
    </div>
</nav>
</body>
</html>
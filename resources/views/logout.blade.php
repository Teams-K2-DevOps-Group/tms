<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md text-center">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Ready to log out?</h2>
        <p class="text-gray-600 mb-6">Click the button below to securely log out of your account.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-xl transition-all duration-200">
                Log Out
            </button>
        </form>

        <a href="{{ url()->previous() }}" class="block mt-4 text-sm text-blue-500 hover:underline">
            Cancel and go back
        </a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyURLs</title>
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg  w-full z-10">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="text-gray-800 text-xl font-bold">MyURLs</a>

                @auth
                    <div class="flex items-center">
                        <span class="text-gray-800 mr-4">User: {{ auth()->user()->name }}</span>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-gray-800 hover:text-red-600">Logout</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div>
                        <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600 ml-4">Register</a>
                    </div>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-16">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
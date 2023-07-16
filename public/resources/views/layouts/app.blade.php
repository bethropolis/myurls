<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyURLs</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("icon/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("icon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("icon/favicon-16x16.png")}}">
    <link rel="mask-icon" href="{{asset("icon/safari-pinned-tab.svg")}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset("icon/favicon.ico")}}" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <nav class="bg-white shadow-lg  w-full z-10">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}"
                    class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-transparent bg-clip-text text-xl font-bold">MyURLs</a>

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
                        <a href="{{ route('login') }}" class="text-gray-800 hover:text-purple-600">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-800  hover:text-pink-600 ml-4">Register</a>
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

@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto my-8 bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4 text-pink-500">Login</h2>

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-1 font-mono font-bold">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 font-mono font-bold">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                    class="mr-2">
                <label for="remember">Remember Me</label>
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2  bg-pink-500 hover:bg-purple-500 duration-300 text-white rounded-lg">Login</button>
            </div>

            @if (Route::has('password.request'))
                <div class="mt-4">
                    <a href="{{ route('password.request') }}" class="text-blue-500">Forgot Your Password?</a>
                </div>
            @endif
        </form>
    </div>
@endsection

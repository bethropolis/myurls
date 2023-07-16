@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-8 bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Sign Up</h2>

        <form action="{{ route('signup') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block mb-1 font-bold">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-4 py-2 border rounded-lg @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-1 font-bold">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-4 py-2 border rounded-lg @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 font-bold">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 border rounded-lg @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block mb-1 font-bold">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Sign Up</button>
            </div>
        </form>
    </div>
@endsection

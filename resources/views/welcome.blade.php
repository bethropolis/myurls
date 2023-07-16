@extends('layouts.app')

@section('content')
    <div class=" py-32">
        <div class="container mx-auto text-center">
            <h1
                class="text-4xl font-bold bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-transparent bg-clip-text mb-4">
                Welcome to MyURLs</h1>
            <p class="text-lg text-gray-600 mb-8">The simplest way to shorten your URLs</p>
            <a href="{{ route('urls.index') }}"
                class="px-6 py-3 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white font-semibold rounded-full hover:from-pink-500 hover:via-purple-500 hover:to-blue-500 hover:text-white transition duration-300">
                Get Started
            </a>

        </div>
    </div>

    <!-- Additional sections or content can be added below -->
@endsection

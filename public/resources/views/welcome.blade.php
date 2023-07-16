@extends('layouts.app')

@section('content')
    <div class=" py-32">
        <div class="container mx-auto text-center">
            <h1
                class="text-4xl font-bold bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-transparent bg-clip-text mb-4">
                Welcome to MyURLs</h1>
            <p class="text-lg text-gray-600 mb-8">The simplest way to shorten your URLs</p>
            <div class="container flex items-center justify-center gap-4">
                <a href="{{ route('urls.index') }}"
                    class="w-36 px-6 py-3 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white font-semibold rounded-full hover:from-pink-500 hover:via-purple-500 hover:to-blue-500 hover:text-white transition duration-300">
                    Get Started
                </a>
                <a href="https://github.com/bethropolis/myurls"
                    class="w-36 flex items-center justify-center 
                px-6 py-3 bg-gradient-to-r from-blue-500 via-purple-500 
                to-pink-500 text-white font-semibold rounded-full hover:from-pink-500 hover:via-purple-500 
                hover:to-blue-500 hover:text-white transition duration-300">
                    <svg class="w-4 h-4 mr-2" viewBox="0 0 16 16" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.08.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.49-.94-.84-1.13-.29-.15-.71-.52-.01-.53.66-.01 1.13.61 1.3.86.76 1.28 1.98.92 2.47.7.08-.55.3-.92.54-1.13-1.89-.21-3.87-.95-3.87-4.23 0-.93.33-1.69.86-2.28-.09-.21-.37-1.08.08-2.24 0 0 .71-.23 2.33.87.68-.19 1.4-.28 2.11-.28.71 0 1.43.09 2.11.28 1.62-1.11 2.33-.87 2.33-.87.45 1.16.17 2.03.08 2.24.54.59.86 1.35.86 2.28 0 3.29-1.99 4.02-3.89 4.23.31.27.58.8.58 1.61 0 1.16-.01 2.1-.01 2.38 0 .21.15.46.55.38A8.03 8.03 0 0016 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    GitHub
                </a>
            </div>

        </div>
    </div>

    <!-- Additional sections or content can be added below -->
@endsection

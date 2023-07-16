@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Edit URL</h2>

        @if ($errors->any())
            <div class="bg-red-200 text-red-800 py-2 px-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('urls.update', $url) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="long_url" class="block mb-1">Long URL</label>
                <input type="text" name="long_url" id="long_url" value="{{ old('long_url', $url->long_url) }}"
                    class="w-full px-4 py-2 border rounded-lg">
            </div>

            <div class="mb-4">
                <label for="slug" class="block mb-1">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $url->slug) }}"
                    class="w-full px-4 py-2 border rounded-lg">
            </div>

            <!-- Add other fields as needed -->

            <div class="mt-6">
                <button type="submit"
                    class="px-4 py-2   bg-pink-500 hover:bg-purple-500 duration-300 text-white rounded-lg">Update</button>
            </div>
        </form>
    </div>
@endsection

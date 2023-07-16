<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UrlController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $urls = Auth::user()->urls()->get();
        return view('urls.index', compact('urls'));
    }

    public function create()
    {
        return view('urls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'long_url' => 'required|url',
            'slug' => 'required|unique:urls',
            // Add other validation rules as needed
        ]);

        $url = Auth::user()->urls()->create([
            'long_url' => $request->input('long_url'),
            'slug' => $request->input('slug'),
            'short_url' => '', // Generate short URL here if needed
            'clicks' => 0,
            'expiry_date' => null, // Set expiry date if needed
        ]);

        return redirect()->route('urls.index')->with('success', 'URL created successfully.');
    }

    public function edit(Url $url)
    {
        return view('urls.edit', compact('url'));
    }

    public function update(Request $request, Url $url)
    {
        $request->validate([
            'long_url' => 'required|url',
            'slug' => 'required|unique:urls,slug,' . $url->id,
            // Add other validation rules as needed
        ]);

        $url->update([
            'long_url' => $request->input('long_url'),
            'slug' => $request->input('slug'),
        ]);

        return redirect()->route('urls.index')->with('success', 'URL updated successfully.');
    }

    public function destroy(Url $url)
    {
        $url->delete();

        return redirect()->route('urls.index')->with('success', 'URL deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    public function redirect(Request $request, $slug)
    {
        $url = Url::where('slug', $slug)->first();

        if ($url) {
            $url->increment('clicks');
            return redirect()->to($url->long_url);
        } else {
            return view("welcome");
        }
    }
}

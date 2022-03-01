<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class JokeController extends Controller
{
    public function show()
    {
        $response = Http::withHeaders(['accept' => 'application/json'])
            ->get('https://icanhazdadjoke.com/');
        return view('joke', ['joke' => $response->json('joke')]);
    }
}

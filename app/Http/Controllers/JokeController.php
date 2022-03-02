<?php

namespace App\Http\Controllers;

use App\Actions\GetsJoke;

class JokeController extends Controller
{
    public function show()
    {
        return view('joke', ['joke' => (new GetsJoke())()]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Contracts\GetJoke;

class JokeController extends Controller
{
    public function show(GetJoke $joke)
    {
        return view('joke', ['joke' => $joke()]);
    }
}

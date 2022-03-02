<?php

declare(strict_types=1);

namespace App\Actions;

use App\Contracts\GetJoke;
use Illuminate\Support\Facades\Http;

class GetsJoke implements GetJoke {
    public function __invoke(): string
    {
        return Http::withHeaders(['accept' => 'application/json'])
            ->get('https://icanhazdadjoke.com/')->json('joke');
    }
}

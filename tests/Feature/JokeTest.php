<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JokeTest extends TestCase
{
    public function test_joke_request_gets_joke()
    {
        $this->get('/joke')->assertSuccessful()->assertSee('Joke');
    }
}

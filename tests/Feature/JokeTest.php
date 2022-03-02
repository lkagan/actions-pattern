<?php

namespace Tests\Feature;

use Tests\TestCase;

class JokeTest extends TestCase
{
    public function test_joke_request_gets_joke()
    {
        $this->get('/joke')->assertOk()->assertSee('Joke');
    }
}

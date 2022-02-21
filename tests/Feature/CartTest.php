<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartTest extends TestCase
{
    public function test_adding_item()
    {
        $this->post(route('cart.add'), ['item' => 'T-rex'])
            ->assertSuccessful()
            ->assertSee('T-rex');
    }
}

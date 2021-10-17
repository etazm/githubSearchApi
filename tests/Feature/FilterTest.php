<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post(route('list'));

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'result' => [
                '*' => [
                    'id', 'name', 'full_name', 'description', 'language', 'url'
                ]
            ]
        ]);
    }
}

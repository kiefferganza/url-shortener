<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShortenedUrl extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function test_shortens_url(): void
    {
        $response = $this->postJson('/shorten', ['original_url' => 'https://example.com']);

        $response->assertStatus(200);
    }
}

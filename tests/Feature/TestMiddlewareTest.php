<?php

namespace Tests\Feature;

use Tests\TestCase;

class TestMiddlewareTest extends TestCase
{
    public function test_access_denied_without_allow_query()
    {
        $response = $this->get('/test/dashboard');
        $response->assertStatus(403);
        $response->assertSee('Acesso negado pelo TestMiddleware.');
    }

    public function test_access_allowed_with_allow_query()
    {
        $response = $this->get('/test/dashboard?allow=true');
        $response->assertStatus(200);
    }
}

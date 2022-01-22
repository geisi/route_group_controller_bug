<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_route_group_controllers()
    {
        $response = $this->get('/foo');

        $response->assertStatus(200);
    }

    public function test_group_namespace_route()
    {
        $response = $this->get('/with_namespace/bar');

        $response->assertStatus(200);
    }

    public function test_group_namespace_route_with_group_controller()
    {
        $response = $this->get('/with_namespace/foo');

        $response->assertStatus(200);
    }


}

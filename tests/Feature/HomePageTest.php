<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Application;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_homepage_ui_elements(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Documentation'); 
        $response->assertSee('Laracasts'); 
        $response->assertSee('Laravel News'); 
        $response->assertSee('Vibrant Ecosystem');

        $laravelVersion = Application::VERSION;
        $phpVersion = PHP_VERSION;

        $response->assertSee("Laravel v{$laravelVersion} (PHP v{$phpVersion})");
    }
}

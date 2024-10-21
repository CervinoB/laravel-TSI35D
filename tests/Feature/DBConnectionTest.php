<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DBConnectionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_database_connection_is_successful(): void
    {
        $result = DB::select('SELECT 1');

        $this->assertTrue(count($result) > 0);
    }
}

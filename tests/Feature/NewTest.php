<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_status_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }

    /*
     * A basic test example.
     *
     * @return void
     */
    public function test_is_true()
    {
        $isThisTrue = true;
        $this->assertTrue($isThisTrue);
    }

    public function test_is_false()
    {
        $false = false;
        $this->assertFalse($false);
    }
}

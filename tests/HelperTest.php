<?php

namespace Drmer\Tests\Laravel\Enhancer;

use Carbon\Carbon;

class HelpersTest extends TestCase
{
    public function testDb()
    {
        $this->assertTrue(function_exists('db'));
    }

    public function testDbRaw()
    {
        $this->assertTrue(function_exists('db_raw'));
    }

    public function testRedis()
    {
        $this->assertTrue(function_exists('redis'));
    }

    public function testCarbon()
    {
        $this->assertTrue(function_exists('carbon'));
        $this->assertInstanceOf(Carbon::class, carbon());
    }
}

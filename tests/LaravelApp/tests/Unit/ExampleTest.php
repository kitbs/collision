<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @group fail
     */
    public function testFailExample()
    {
        $this->assertFalse(true);
    }
}

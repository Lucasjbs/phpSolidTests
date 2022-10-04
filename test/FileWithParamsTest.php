<?php

use PHPUnit\Framework\TestCase;

class FileWithParamsTest extends TestCase
{
    public function testIfTrue()
    {
        $var = 1;

        static::assertEquals(1, $var);
    }
}
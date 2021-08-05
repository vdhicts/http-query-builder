<?php

namespace Vdhicts\HttpQueryBuilder\Tests;

use PHPUnit\Framework\TestCase;
use Vdhicts\HttpQueryBuilder\Parameter;

class ParameterTest extends TestCase
{
    public function testParameterInitialisation()
    {
        // Regular strings
        $key = 'string';
        $value = 'string';
        $parameter = new Parameter($key, $value);
        $this->assertSame($key, $parameter->getKey());
        $this->assertSame($value, $parameter->getValue());

        // Integers
        $key = 1;
        $value = 2;
        $parameter = new Parameter($key, $value);
        $this->assertSame((string)$key, $parameter->getKey());
        $this->assertSame((string)$value, $parameter->getValue());
    }

    public function testParameterBuild()
    {
        $parameter = new Parameter('string', 'string');
        $this->assertSame('string=string', $parameter->build());

        $parameter = new Parameter(1, 2);
        $this->assertSame('1=2', $parameter->build());

        $parameter = new Parameter('string', 'string:string');
        $this->assertSame('string=string%3Astring', $parameter->build());
    }

    public function testSerialization()
    {
        $parameter = new Parameter('string', 'string');
        $this->assertSame('string=string', (string)$parameter);
    }
}

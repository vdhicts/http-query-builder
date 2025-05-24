<?php

namespace Vdhicts\HttpQueryBuilder\Tests\Unit;

use Vdhicts\HttpQueryBuilder\Parameter;
use PHPUnit\Framework\TestCase;

class ParameterTest extends TestCase
{
    public function test_parameter_initialisation(): void
    {
        // Regular strings
        $key = 'string';
        $value = 'string';
        $parameter = new Parameter($key, $value);
        $this->assertSame($key, $parameter->key);
        $this->assertSame($value, $parameter->value);

        // Integers
        $key = 'test';
        $value = 2;
        $parameter = new Parameter($key, $value);
        $this->assertSame($key, $parameter->key);
        $this->assertSame($value, $parameter->value);
    }

    public function test_parameter_build(): void
    {
        $parameter = new Parameter('string', 'string');
        $this->assertSame('string=string', $parameter->toString());

        $parameter = new Parameter('test', 2);
        $this->assertSame('test=2', $parameter->toString());

        $parameter = new Parameter('string', 'string:string');
        $this->assertSame('string=string%3Astring', $parameter->toString());
    }

    public function test_serialization(): void
    {
        $parameter = new Parameter('string', 'string');
        $this->assertSame('string=string', (string) $parameter);
    }
}

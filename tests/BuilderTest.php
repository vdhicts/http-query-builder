<?php

namespace Vdhicts\HttpQueryBuilder\Tests;

use PHPUnit\Framework\TestCase;
use Vdhicts\HttpQueryBuilder\Builder;
use Vdhicts\HttpQueryBuilder\Parameter;

class BuilderTest extends TestCase
{
    private function initBuilder(): Builder
    {
        return (new Builder())
            ->add('filter', 'a:1')
            ->add('filter', 'b:2')
            ->add('test', 1);
    }

    public function testBuilder()
    {
        $builder = $this->initBuilder();

        $this->assertIsArray($builder->get());
        $this->assertCount(3, $builder->get());
        $this->assertInstanceOf(Parameter::class, $builder->get()[0]);
        $this->assertSame('filter=a%3A1&filter=b%3A2&test=1', $builder->build());
    }

    public function testSerialization()
    {
        $builder = $this->initBuilder();

        $this->assertSame('filter=a%3A1&filter=b%3A2&test=1', (string)$builder);
    }
}

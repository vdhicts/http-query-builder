<?php

namespace Vdhicts\HttpQueryBuilder\Tests\Unit;

use Vdhicts\HttpQueryBuilder\Builder;
use Vdhicts\HttpQueryBuilder\Parameter;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    private function initBuilder(): Builder
    {
        return Builder::make()
            ->add('filter', 'a:1')
            ->add('filter', 'b:2')
            ->add('test', 1);
    }

    public function test_builder(): void
    {
        $builder = $this->initBuilder();

        $this->assertCount(3, $builder->parameters);
        $this->assertInstanceOf(Parameter::class, $builder->parameters[0]);
        $this->assertSame('filter=a%3A1&filter=b%3A2&test=1', $builder->toString());
    }

    public function test_serialization(): void
    {
        $builder = $this->initBuilder();

        $this->assertSame('filter=a%3A1&filter=b%3A2&test=1', (string) $builder);
    }
}

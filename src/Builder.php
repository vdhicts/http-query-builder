<?php

namespace Vdhicts\HttpQueryBuilder;

use Stringable;

class Builder implements Stringable
{
    /**
     * @param array<Parameter> $parameters
     */
    public function __construct(
        public array $parameters = [],
    ) {
    }

    /**
     * @param array<Parameter> $parameters
     */
    public static function make(array $parameters = []): self
    {
        return new self($parameters);
    }

    public function add(string $parameter, int|string $value): Builder
    {
        $this->parameters[] = new Parameter(
            key: $parameter,
            value: $value,
        );

        return $this;
    }

    public function build(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return implode(
            separator: '&',
            array: array_map(
                static fn (Parameter $parameter) => $parameter->toString(),
                $this->parameters,
            ),
        );
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}

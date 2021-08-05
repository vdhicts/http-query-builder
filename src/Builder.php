<?php

namespace Vdhicts\HttpQueryBuilder;

class Builder
{
    private array $parameters = [];

    public function get(): array
    {
        return $this->parameters;
    }

    public function add(string $parameter, string $value): Builder
    {
        $this->parameters[] = new Parameter($parameter, $value);

        return $this;
    }

    public function build(): string
    {
        $queryParameters = array_map(
            function (Parameter $parameter) {
                return $parameter->build();
            },
            $this->parameters
        );

        return implode('&', $queryParameters);
    }

    public function __toString()
    {
        return $this->build();
    }
}

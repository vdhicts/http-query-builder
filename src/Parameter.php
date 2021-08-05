<?php

namespace Vdhicts\HttpQueryBuilder;

class Parameter
{
    private string $key;
    private string $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function build(): string
    {
        return sprintf(
            '%s=%s',
            urlencode($this->key),
            urlencode($this->value)
        );
    }

    public function __toString(): string
    {
        return $this->build();
    }
}

<?php

namespace Vdhicts\HttpQueryBuilder;

use Stringable;

class Parameter implements Stringable
{
    public function __construct(
        public string $key,
        public int|string $value
    ) {
    }

    public function build(): string
    {
        return $this->toString();
    }

    public function toString(): string
    {
        return sprintf(
            '%s=%s',
            urlencode($this->key),
            urlencode((string) $this->value)
        );
    }

    public function __toString(): string
    {
        return $this->toString();
    }
}

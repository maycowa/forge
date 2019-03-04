<?php

namespace Forge;

class StringType
{
    public $value;

    public function __construct(?string $value)
    {
        $this->value = $value;
    }

    public static function val(?string $value): self
    {
        return new self($value);
    }

    public function replace($search, $replace, ?int &$count = null): ?string
    {
        return str_replace($search, $replace, $this->value, $count);
    }

    public function __toString()
    {
        return $this->value;
    }
}
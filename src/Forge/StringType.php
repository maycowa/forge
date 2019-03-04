<?php
/*
 * 2019 Forge library
 */
namespace Forge;

/**
 * Class StringType
 * @package Forge
 * @author Maycow Antunes
 */
class StringType
{
    /**
     * @var string|null
     */
    public $value;

    /**
     * StringType constructor.
     * @param string|null $value
     */
    public function __construct(?string $value)
    {
        $this->value = $value;
    }

    /**
     * Creates a StringType object with passed value
     * @param string|null $value
     * @return StringType
     */
    public static function val(?string $value): self
    {
        return new self($value);
    }

    /**
     * Returns the string value
     * @return string|null
     */
    public function __toString()
    {
        return $this->value;
    }

    /**
     * Replace all occurrences of the search string with the replacement string
     * @link https://php.net/manual/en/function.str-replace.php
     * @param mixed $search The value being searched for, otherwise known as the needle.
     * An array may be used to designate multiple needles.
     * @param mixed $replace The replacement value that replaces found search
     * values. An array may be used to designate multiple replacements.
     * @param int|null $count [optional] If passed, this will hold the number of matched and replaced needles.
     * @return string|null The string with the replaced values.
     */
    public function replace($search, $replace, ?int &$count = null): ?string
    {
        return str_replace($search, $replace, $this->value, $count);
    }
}
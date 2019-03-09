<?php
/*
 * 2019 Forge library
 */
namespace Forge;

/**
 * Class Str
 * @package Forge
 * @author Maycow Antunes
 */
class Str
{
    /**
     * @var string|null
     */
    public $value;

    /**
     * Str constructor.
     * @param string|null $value
     */
    public function __construct(?string $value)
    {//
        $this->value = $value;
    }

    /**
     * Creates a StringType object with passed value
     * @param string|null $value
     * @return Str
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

    /**
     * Split a string by string
     * @link https://php.net/manual/en/function.explode.php
     * @param string $delimiter The boundary string.
     * @param int $limit [optional] <p>
     * If limit is set and positive, the returned array will contain
     * a maximum of limit elements with the last
     * element containing the rest of string.
     * </p>
     * <p>
     * If the limit parameter is negative, all components
     * except the last -limit are returned.
     * </p>
     * <p>
     * If the limit parameter is zero, then this is treated as 1.
     * </p>
     * @return array If delimiter is an empty string (""),
     * explode will return false.
     * If delimiter contains a value that is not
     * contained in string and a negative
     * limit is used, then an empty array will be
     * returned. For any other limit, an array containing
     * string will be returned.
     */
    public function explode(string $delimiter, int $limit = null)
    {
        return explode($delimiter, $this->value, $limit);
    }
}
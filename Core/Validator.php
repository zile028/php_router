<?php

namespace Core;
class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = self::sanitizeString($value);
        return strlen($value) >= $min && strlen($value) <= $max ? $value : false;
    }

    public static function email($value)
    {
        $value = self::sanitizeString($value);
        return preg_match("/.+@+.+\.+./", $value) ? $value : false;

    }

    private static function sanitizeString($value): string
    {
        return strip_tags(trim($value));
    }
}
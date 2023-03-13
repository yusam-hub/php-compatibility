<?php

namespace YusamHub\PhpCompatibility;

class Php8
{
    public static function str_contains(string $haystack, string $needle): bool
    {
        return '' === $needle || false !== strpos($haystack, $needle);
    }

    public static function str_starts_with(string $haystack, string $needle): bool
    {
        return 0 === strncmp($haystack, $needle, \strlen($needle));
    }

    public static function str_ends_with(string $haystack, string $needle): bool
    {
        if ('' === $needle || $needle === $haystack) {
            return true;
        }

        if ('' === $haystack) {
            return false;
        }

        $needleLength = \strlen($needle);

        return $needleLength <= \strlen($haystack) && 0 === substr_compare($haystack, $needle, -$needleLength);
    }
}
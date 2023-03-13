<?php

if (PHP_VERSION_ID >= 70400 && PHP_VERSION_ID < 80000) {

    if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool
        {
            return \YusamHub\PhpCompatibility\Php8::str_contains($haystack, $needle);
        }
    }

    if (!function_exists('str_starts_with')) {
        function str_starts_with(string $haystack, string $needle): bool
        {
            return \YusamHub\PhpCompatibility\Php8::str_starts_with($haystack, $needle);
        }
    }

    if (!function_exists('str_ends_with')) {
        function str_ends_with(string $haystack, string $needle): bool
        {
            return \YusamHub\PhpCompatibility\Php8::str_ends_with($haystack, $needle);
        }
    }

}
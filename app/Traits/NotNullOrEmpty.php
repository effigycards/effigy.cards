<?php

namespace App\Traits;

trait NotNullOrEmpty
{
    /**
     * Get filtered non-null and non-empty string attributes.
     *
     * @param  array  $attributes
     * @return array
     */
    public function filterNotNullOrEmpty(array $attributes): array
    {
        $class    = static::class;
        $filtered = array_filter($attributes, "${class}::isNotNull");

        return array_filter($filtered, "${class}::isNotEmptyString");
    }

    /**
     * Determine if a value is not an empty string.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function isNotEmptyString($value): bool
    {
        return (!is_string($value) || trim($value) !== '');
    }

    /**
     * Determine if a value is not null.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function isNotNull($value): bool
    {
        return ($value !== null);
    }
}

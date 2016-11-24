<?php

namespace App\Transformers\Traits;

trait NotBlacklisted
{
    /**
     * Get filtered non-blacklisted attributes.
     *
     * @param  array  $attributes
     * @return array
     */
    public function filterNotBlacklisted(array $attributes): array
    {
        $class = static::class;

        return array_filter($attributes, "${class}::isNotBlacklisted", ARRAY_FILTER_USE_KEY);
    }

    /**
     * Determine if an attribute name is not blacklisted.
     *
     * @param  string  $attribute
     * @return bool
     */
    public static function isNotBlacklisted(string $attribute): bool
    {
        return !in_array($attribute, static::$blacklist);
    }
}
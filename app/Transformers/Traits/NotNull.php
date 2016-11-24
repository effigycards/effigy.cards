<?php

namespace App\Transformers\Traits;

trait NotNull
{
    /**
     * Get filtered non-null attributes.
     *
     * @param  array  $attributes
     * @return array
     */
    public function filterNotNull(array $attributes): array
    {
        $class = static::class;

        return array_filter($attributes, "${class}::isNotNull");
    }

    /**
     * Determine if a value is not null.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function isNotNull($value): bool
    {
        return $value !== null;
    }
}
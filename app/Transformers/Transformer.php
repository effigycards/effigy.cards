<?php

namespace App\Transformers;


abstract class Transformer
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * Attributes that will not be in the transformation.
     *
     * @var string[]
     */
    protected static $blacklist = [];

    /**
     * Transformer constructor.
     *
     * @param  mixed  $data
     * @return self
     */
    public function __construct($data)
    {
        $this->attributes = $data;
    }

    /**
     * Get filtered non-blacklisted attributes.
     *
     * @param  array  $attributes
     * @return array
     */
    public function filterIsNotBlacklisted(array $attributes)
    {
        $class = static::class;

        return array_filter($attributes, "${class}::isNotBlacklisted", ARRAY_FILTER_USE_KEY);
    }

    /**
     * Get filtered non-null attributes.
     *
     * @param  array  $attributes
     * @return array
     */
    public function filterIsNotNull(array $attributes)
    {
        $class = static::class;

        return array_filter($attributes, "${class}::isNotNull");
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
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

    /**
     * Get the attributes cast as an object.
     *
     * @return object
     */
    public function objectify()
    {
        return (object) $this->attributes;
    }

    /**
     * Get the transformation as JSON.
     *
     * @return string
     */
    public function toJson()
    {
        $data = $this->objectify();
        $json = json_encode($data, JSON_PRETTY_PRINT);

        return $json;
    }
}
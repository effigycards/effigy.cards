<?php

namespace App\Transformers;

use App\Transformers\Traits\{NotBlacklisted,NotNull};
use Illuminate\Contracts\Support\Jsonable;

abstract class Transformer implements Jsonable
{
    use NotBlacklisted;
    use NotNull;

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
     * @param  int  $id
     * @return static
     */
    abstract public static function fromId(int $id);

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
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
     * @param  int  $options
     * @return string
     */
    public function toJson($options = JSON_PRETTY_PRINT)
    {
        $data = $this->objectify();
        $json = json_encode($data, $options);

        return $json;
    }
}
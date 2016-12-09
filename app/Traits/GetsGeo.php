<?php

namespace App\Traits;

trait GetsGeo
{
    /**
     * Get an array instance of the geo class for serialization.
     *
     * @todo Specify that the `NotNullOrEmpty` trait is required via an interface?
     * @return array
     */
    private function getGeo()
    {
        $geo        = [];
        $properties = ['altitude', 'latitude', 'longitude'];

        foreach ($properties as $property) {
            $geo[$property] = $this->attributes[$property];
        }

        return static::filterNotNullOrEmpty($geo);
    }
}

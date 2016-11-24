<?php

namespace App\Transformers;

use App\Geo;

class GeoTransformer extends Transformer
{
    /**
     * Attributes that will not be in the transformation.
     *
     * @var string[]
     */
    protected static $blacklist = ['created_at', 'id', 'updated_at'];

    /**
     * GeoTransformer constructor.
     *
     * @param  Geo  $geo
     * @return self
     */
    public function __construct(Geo $geo)
    {
        $this->attributes = self::filterNotNull($geo->getAttributes());
        $this->attributes = self::filterNotBlacklisted($this->attributes);
    }

    /**
     * @param  int  $id
     * @return GeoTransformer
     */
    public static function fromId(int $id)
    {
        $card = Geo::find($id);

        return new self($card);
    }
}
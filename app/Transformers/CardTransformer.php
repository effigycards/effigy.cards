<?php

namespace App\Transformers;

use App\Card;

class CardTransformer extends Transformer
{
    /**
     * Attributes that will not be in the transformation.
     *
     * @var string[]
     */
    protected static $blacklist = ['created_at', 'id', 'updated_at'];

    /**
     * CardTransformer constructor.
     *
     * @param  Card  $card
     * @return self
     */
    public function __construct(Card $card)
    {
        $this->attributes = self::filterNotNull($card->getAttributes());
        $this->attributes = self::filterNotBlacklisted($this->attributes);
        $this->attributes = self::attachAdrIfExists($this->attributes);
        $this->attributes = self::detachAdrIdIfExists($this->attributes);
    }

    /**
     * @param  array  $attributes
     * @return array
     */
    public static function attachAdr(array $attributes): array
    {
        $transformed       = AdrTransformer::fromId($attributes['adr_id']);
        $attributes['adr'] = $transformed->getAttributes();

        return $attributes;
    }

    /**
     * @param  array  $attributes
     * @return array
     */
    public static function attachAdrIfExists(array $attributes): array
    {
        if (!array_key_exists('adr_id', $attributes) || !is_int($attributes['adr_id'])) {
            return $attributes;
        }

        return self::attachAdr($attributes);
    }

    public static function attachGeo(array $attributes): array
    {
        $transformed       = GeoTransformer::fromId($attributes['geo_id']);
        $attributes['geo'] = $transformed->getAttributes();

        return $attributes;
    }

    /**
     * @param  array  $attributes
     * @return array
     */
    public static function detachAdrIdIfExists(array $attributes): array
    {
        if (array_key_exists('adr_id', $attributes)) {
            unset($attributes['adr_id']);
        }

        return $attributes;
    }

    /**
     * @param  int  $id
     * @return CardTransformer
     */
    public static function fromId(int $id)
    {
        $card = Card::find($id);

        return new self($card);
    }

    /**
     * @return object
     */
    public function objectify()
    {
        $attributes = $this->attributes;

        if (array_key_exists('adr', $attributes)) {
            $attributes['adr'] = (object) $attributes['adr'];
        }

        return (object) $attributes;
    }
}
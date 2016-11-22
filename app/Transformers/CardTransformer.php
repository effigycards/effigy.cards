<?php

namespace App\Transformers;

use App\{Adr,Card};

class CardTransformer extends Transformer
{
    /**
     * Attributes that will not be in the transformation.
     *
     * @var string[]
     */
    protected static $blacklist = ['created_at', 'updated_at', 'id'];

    /**
     * CardTransformer constructor.
     *
     * @param  Card  $card
     * @return self
     */
    public function __construct(Card $card)
    {
        $notNullAttributes        = self::filterIsNotNull($card->getAttributes());
        $notBlacklistedAttributes = self::filterIsNotBlacklisted($notNullAttributes);
        $attributesWithAdr        = self::attachAdrIfExists($notBlacklistedAttributes);
        $attributesWithoutAdrId   = self::detachAdrIdIfExists($attributesWithAdr);

        $this->attributes = $attributesWithoutAdrId;
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

        $adr         = Adr::find($attributes['adr_id']);
        $transformed = new AdrTransformer($adr);

        $attributes['adr'] = $transformed->getAttributes(); // $adr->toArray();

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
     * @return object
     */
    public function objectify()
    {
        $attributes = $this->attributes;

        if (array_key_exists('adr', $attributes)) {
            # $attributes['adr'] = (object) $attributes['adr'];
            $attributes['adr'] = (new Adr($attributes['adr']))->objectify();
        }

        return (object) $attributes;
    }
}
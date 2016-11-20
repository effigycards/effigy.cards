<?php

namespace App\Transformers;

use App\Card;

class CardTransformer
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
        $className                = self::class;
        $notNullAttributes        = array_filter($card->getAttributes(), "${className}::isNotNull");
        $notBlacklistedAttributes = array_filter($notNullAttributes, "${className}::isNotBlacklisted", ARRAY_FILTER_USE_KEY);

        $this->attributes = $notBlacklistedAttributes;
    }

    /**
     * Determine if an attribute name is not blacklisted.
     *
     * @param  string  $attribute
     * @return bool
     */
    public static function isNotBlacklisted(string $attribute): bool
    {
        return !in_array($attribute, self::$blacklist);
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
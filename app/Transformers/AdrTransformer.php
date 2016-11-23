<?php

namespace App\Transformers;

use App\Adr;

class AdrTransformer extends Transformer
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
     * @param  Adr  $adr
     * @return self
     */
    public function __construct(Adr $adr)
    {
        $notNullAttributes        = self::filterIsNotNull($adr->getAttributes());
        $notBlacklistedAttributes = self::filterIsNotBlacklisted($notNullAttributes);

        $this->attributes = $notBlacklistedAttributes;
    }
}
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
        $this->attributes = self::filterNotNull($adr->getAttributes());
        $this->attributes = self::filterNotBlacklisted($this->attributes);
    }

    /**
     * @param  int  $id
     * @return AdrTransformer
     */
    public static function fromId(int $id)
    {
        $card = Adr::find($id);

        return new self($card);
    }
}
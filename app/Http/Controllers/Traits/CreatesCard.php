<?php

namespace App\Http\Controllers\Traits;

use App\Adr;
use App\Card;
use App\Geo;

trait CreatesCard
{
    private static function createCard()
    {
        $adr  = Adr::create();
        $card = Card::create();
        $geo  = Geo::create();

        $card->adr_id = $adr->id;
        $card->geo_id = $geo->id;

        $card->save();

        return $card;
    }
}

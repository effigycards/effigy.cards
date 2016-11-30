<?php

namespace App\Http\Controllers\Traits;

use App\Card;

trait ShowsCard
{
    /**
     * Display the specified resource as HTML.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    private static function showHtml($id)
    {
        $card = Card::find($id);

        return view('pages.cards.show')->with('card', $card->toArray());
    }

    /**
     * Display the specified resource as JSON.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    private static function showJson(int $id)
    {
        $card = Card::find($id);

        return response()->json($card->toArray());
    }
}

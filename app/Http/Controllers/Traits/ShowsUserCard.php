<?php

namespace App\Http\Controllers\Traits;

use App\User;

trait ShowsUserCard
{
    /**
     * Display the specified resource as HTML.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    private static function showHtml($id)
    {
        $user = User::findOrFail($id);

        return view('pages.users.show')->with('card', $user->toArray());
    }

    /**
     * Display the specified resource as JSON.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    private static function showJson(int $id)
    {
        $user = User::findOrFail($id);
        $card = $user->toArray();

        $card['type'] = 'card';

        return response()->json($card);
    }
}

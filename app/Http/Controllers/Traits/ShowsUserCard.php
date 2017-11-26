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
     * Convert underscores in a property to hyphens.
     *
     * @param string $property
     * @return string
     */
    private static function dashify(string $property): string {
        return str_replace('_', '-', $property);
    }

    /**
     * Display the specified resource as JSON.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    private static function showJson(int $id)
    {
        $user = collect(User::findOrFail($id));

        $user->put('type', 'card');

        $user = $user->mapWithKeys(function ($value, $property) {
            return [self::dashify($property) => $value];
        });

        return response()->json($user)->setJsonOptions(JSON_PRETTY_PRINT);
    }
}

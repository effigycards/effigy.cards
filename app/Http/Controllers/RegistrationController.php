<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\CreatesCard;
use App\Http\Controllers\Traits\CreatesUser;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    use CreatesCard, CreatesUser;

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('pages.registrations.create');
    }

    /**
     * Store a new registration as a user and a card.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = self::createCard();
        $data = array_merge($request->all(), ['card_id' => $card->id]);
        $user = self::createUser($data);

        return redirect('/home')->with('message', 'Card created successfully.');
    }
}

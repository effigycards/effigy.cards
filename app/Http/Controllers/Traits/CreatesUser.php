<?php

namespace App\Http\Controllers\Traits;

use App\User;

trait CreatesUser
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    private static function createUser(array $data)
    {
        $user = User::create([
            'email'    => $data['email'],
            'name'     => $data['name'],
            'password' => bcrypt($data['password'])
        ]);

        // This property cannot be assigned via the above `::create()` method.
        $user->card_id = $data['card_id'];

        $user->save();

        return $user;
    }
}

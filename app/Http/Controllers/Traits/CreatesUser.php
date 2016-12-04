<?php

namespace App\Http\Controllers\Traits;

use App\User;

trait CreatesUser
{
    /**
     * Create a new user instance after validation.
     *
     * @param  array  $data
     * @return User
     */
    private static function createUser(array $data)
    {
        return User::create([
            'email'    => $data['email'],
            'name'     => $data['name'],
            'password' => bcrypt($data['password'])
        ]);
    }
}

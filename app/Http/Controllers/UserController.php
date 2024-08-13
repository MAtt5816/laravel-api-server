<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @param string $username
     * @param string $salt
     * @param string $password
     */
    public function authenticate(string $username, string $password)
    {
        $user = User::where('username', $username)->first();
        $salt = $user->salt ?? "";

        $hash = hash('sha256', $password . $salt);


        if ($user->sha256 == $hash ?? false) {
            Auth::loginUsingId($user->id);
        }
    }
}

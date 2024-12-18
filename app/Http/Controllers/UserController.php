<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createProfile()
    {
        $user = User::find(1);

        $user->profile()->create([
            'phone' => '123456789',
            'address' => '123 Main St'
        ]);

        return $user;
    }

    public function userProfile()
    {
        $user = User::all();

        // lazy loading (n+1 problem)
        // return $user->profile;

        // eager loading
        // return $user->load('profile');

        return $user;
    }

    public function updateProfile()
    {
        $user = User::find(1);

        $user->profile()->update([
            'phone' => '0987123',
            'address' => '123 Scond St'
        ]);

        return $user;
    }

    public function deleteProfile()
    {
        $user = User::find(1);

        $user->profile()->delete();

        return $user;
    }
}

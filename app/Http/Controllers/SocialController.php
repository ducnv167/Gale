<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->stateless()->user();

        $user = $this->createUser($getInfo, $provider);

        auth()->login($user);

        return redirect()->to('/home');
    }

    function createUser($getInfo, $provider)
    {

        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = new User();
            $user->name = $getInfo->name;
            $user->email = $getInfo->email;
            $user->provider = $provider;
            $user->provider_id = $getInfo->id;
            $user->image = $getInfo->avatar;
            $user->password = Hash::make('12345678');
            $user->role = 'Render';
            $user->phone = '1234567890';
            $user->save();
        }
        return $user;
    }
}
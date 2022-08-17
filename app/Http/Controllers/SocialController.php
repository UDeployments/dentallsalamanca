<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SocialController extends Controller
{
    public function redirect(): RedirectResponse|\Illuminate\Http\RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $user = User::where('google_id', $user->id)->first();

            return $user;
            if ($user) {
                //Auth::login($user);
            } else {
                /*User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('123456dummy')
                ]);*/
            }

            return redirect('/');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

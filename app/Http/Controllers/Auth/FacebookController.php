<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class FacebookController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        //$user = Socialite::driver('facebook')->user();

        //$user->name;
        try{
            $socialUser= Socialite::driver('facebook')->user();
        }
        catch(\Exception $e){
            return redirect('/auth');
        }
    $user = User::where('facebook_id', $socialUser->getId())->first();
        if(!$user){
            User::create([
                'facebook_id' => $socialUser->getId(),
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
            ]);
        }
        if(Auth::loginUsingId($user->id)){
            return redirect()->intended('/auth');
        }
    }
}
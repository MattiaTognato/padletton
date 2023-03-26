<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    public function githubRedirect(Request $request)
    {
        return Socialite::driver('github')->redirect();
    }

    public function githubCallback(Request $request)
    {
        $user_data = Socialite::driver('github')->user();

        $user = User::where('email', $user_data->email)->where('auth_type', 'github')->first();
        if($user)
        {
            // login

            Auth::login($user);
            return redirect('/dashboard');
        }
        else{
            //register

            $uuid = Str::uuid()->toString();

            $user = new User();  
            $user->name = $user_data->nickname;
            $user->email = $user_data->email;
            $user->password = Hash::make($uuid.now());
            $user->auth_type = 'github';    
            $user->save();
    
            Auth::login($user);
            return redirect('/dashboard');
        }
    }

    public function googleRedirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback(Request $request)
    {
        $user_data = Socialite::driver('google')->user();

        $user = User::where('email', $user_data->email)->where('auth_type', 'google')->first();
        if($user)
        {
            // login

            Auth::login($user);
            return redirect('/dashboard');
        }
        else{
            //register

            $uuid = Str::uuid()->toString();

            $user = new User();  
            $user->name = $user_data->nickname;
            $user->email = $user_data->email;
            $user->password = Hash::make($uuid.now());
            $user->auth_type = 'google';    
            $user->save();
    
            Auth::login($user);
            return redirect('/dashboard');
        }
    }
}

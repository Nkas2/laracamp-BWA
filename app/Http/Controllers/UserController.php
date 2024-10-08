<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {
        return view("login");
    }

    public function google(Request $request) {
        return Socialite::driver("google")->redirect();
    }

    public function handleProviderCallback(Request $request) {
        $callback = Socialite::driver('google')->stateless()->user();
        $data = [
            "name" => $callback->getName(),
            "email"=> $callback->getEmail(),
            "avatar" => $callback->getAvatar(),
            "email_verified_at"=> date("Y-m-d H:i:s", time()),
        ];

        $user = User::firstOrCreate([
            "email" => $data['email']
        ], $data);

        Auth::login($user, true);

        return redirect(route('welcome'));
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
        
            $user = Socialite::driver('google')->user();

            // dd($user);
         
            $finduser = User::where('email', $user->email)->first();
         
            if($finduser){
                
         
                Auth::login($finduser);
        
                return redirect()->route('home');
         
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'google_id'=> $user->id,
                        'image'=>$user->avatar,
                        'username'=>substr($user->email, 0, strpos($user->email, '@')),
                        'password' => encrypt(substr($user->email, 0, strpos($user->email, '@')))
                    ]);
         
                Auth::login($newUser);
        
                return redirect()->route('home');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

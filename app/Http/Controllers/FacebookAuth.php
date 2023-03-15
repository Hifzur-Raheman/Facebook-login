<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuth extends Controller
{

    public function index()
    {
        if (Auth::guard('web')->check()) {
            return redirect('dashboard');
        }
        return view('login');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {

        //redirect to facebook login page 
        return Socialite::driver('facebook')->redirect();
    }
           
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
            // get facebook data         
            $user = Socialite::driver('facebook')->user();
         
            $find_user = User::where('facebook_id', $user->id)->first();
         
            if(!empty($find_user) && is_array($find_user)){
         
                Auth::login($find_user);
                // session(['login_id' => $user->id]);
       
                return redirect('dashboard');
         
            }else{
                // create user on your platform as per your 
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name'        => $user->name,
                        'facebook_id' => $user->id,
                        'password'    => encrypt('123456dummy')
                    ]);
                    Auth::login($newUser);
                    // session(['login_id' => $user->id]);
        
                return redirect('dashboard');
            }
            
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
            return redirect('/');
            // dd($e->getMessage());
        }
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{

    //cher angel functions
    public function loginForm() {
        if(auth()->check()){
            return redirect('/equipments/index');
        }
    
        return view('authentication.login');


    }

    public function registerForm() {
        if(auth()->check()){
            return redirect('/equipments/index');
        }
        return view('authentication.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|string',
        ]);

        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => $token,
            'role' => "customer",
        ])->assignRole('customer');

        Mail::send('authentication.verification-mail', ['user' => $user], function ($mail) use($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
        });
        
        return redirect('/')->with('message', 'Your account has been created successfully. Please check your mail for verification.');

    }

    public function verification(User $user, $token){
        if($user->remember_token !== $token){
            return redirect('/')->with('error', 'Invalid token. The attached token is invalid or has already been consumed.');
        }

        $user->email_verified_at = now();
        $user->save();

        return redirect('/')->with('message', 'Your account has been verified. You can log in now.');
    }
    
    public function login(Request $request) {
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at == null){
            return redirect('/')->with('error', 'Sorry, this account is not yet verified or does not exist.');
        }
        
        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$login) {
            return back()->with('error','Invalid user credentials.');
        }

        if($user->role == 'admin'){
            return redirect('/equipments/index');
        }elseif($user->role == 'customer'){
            return redirect('/home');
        }
        
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('message', 'Logged out successfully.');
    }

    //added functions
    // if(auth()->guest()){
    //     return redirect('/')->with('error', 'Please log in first.');
    // }
    
}

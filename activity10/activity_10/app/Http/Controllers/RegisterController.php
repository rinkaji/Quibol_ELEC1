<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Validator;
use Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm(){
        return view('registerView');
    }

    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);

        if($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::table('users_act')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function showLoginForm(){
        return view('loginView');
    }

    public function loggingIn(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        $user = DB::table('users_act')->where('email', $request->email)->first();


        if ($user && Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id);
            return view('dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // public function dashboardView(){
    //     return view('dashboard');
    // }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

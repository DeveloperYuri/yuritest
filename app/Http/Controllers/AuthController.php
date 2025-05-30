<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('loginregister.register');
    }

    public function store(Request $request)
    {

        // echo "MASUK SINI";

        $user = request()->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
        ]);

        $user = new User;

        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('/')->with('success', 'Create New Users Successfully');
    }

    public function login()
    {
        return view('loginregister.login');
    }

    public function loginpost(Request $request)
    {

        // dd($request->only('email', 'password'));

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            echo "Benar";
        } 
        else {
            return redirect()->back()->with('error', 'Please enter the correct credentials');
        };
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

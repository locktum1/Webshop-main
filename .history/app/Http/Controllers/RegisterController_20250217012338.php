<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function Submit(Request $request)
    {
        $request->validate([
            'fullname' => 'required|regex:/^[A-Za-z]+(?: [A-Za-z]+)+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'dob' => 'required',
        ]);

        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'This email is already registered.'])->withInput();
        }

        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
        ]);

        Auth::login($user);

        return redirect('/')->with('success','Successfully registered');
    }
}

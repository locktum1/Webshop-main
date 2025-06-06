<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect('')->with('success', 'Logged in successfully!');
        } else
        {
            return redirect()->back()->withErrors(['failed' => 'Invalid credentials']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect()->route('admin');
        }
        return back()->with('error', 'Username atau password anda Salah!');
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect('/');
    // }
}

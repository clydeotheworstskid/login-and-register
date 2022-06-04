<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function loadViewForUser() {
        $user = Auth::user();

        if ($user === null) {
            return view('login');
        }

        return view('main');
    }

    public function attemptLogin(Request $req) {
        $name = trim($req->username);
        $pass = $req->password;

        $authResult = Auth::attempt([
            'username' => $name,
            'password' => $pass
        ]);
        
        if ($authResult) {
            $req->session()->regenerateToken();
            return redirect('/');
        }

        return redirect('/')->withErrors(['IncorrectData' => 'Username or password incorrect']);
    }

    public function attemptRegister(Request $req) {
        $validatorResult = $req->validate([
            'username' => ['required', 'unique:users', 'between:3,25'],
            'email' => ['required', 'email', 'min:6'],
            'password' => ['required', 'min:8'],
            'password2' => ['required', 'same:password']
        ]);

        $user = new User();
        $user->username = trim($req->username);
        $user->email = trim($req->email);;
        $user->password = Hash::make($req->password);
        $user->save();

        $req->session()->flash('status', 'Your account has been created successfully!');

        return redirect('/');
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        
        return redirect('/');
    }
}

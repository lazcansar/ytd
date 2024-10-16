<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Register Controller Start
    public function register(Request $request) {
        $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:8',
           'role' => 'required|in:user,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        if ($user->role == 'admin') {
            return redirect()->route('admin.home');
        }

        return redirect()->route('user.home');

    }
    // Register Controller Finish


    // Login Controller Start
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        }

        return back()->withErrors([
            'email' => 'Giriş bilgileri hatalı.',
        ]);

    }

    // Login Controller Finish


    // Logout Controller
    public function logout() {
        auth()->logout();
        return redirect()->route('home')->with('logout', 'Oturum sonlandırıldı.');
    }


}

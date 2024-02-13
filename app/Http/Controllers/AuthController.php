<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signUpView()
    {
        return view('auth.sign-up');
    }

    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|digits:10',
            'address' => 'required',
            'password' => 'required|min:6',
            'confirmPassword' => 'required|required_with:password|same:password'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'password' => bcrypt($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect()->route('home')->with('success', 'User signed up successfully!');
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|digits:10',
            'password' => 'required|min:6',
        ]);

        $user = User::where('phone', $validatedData['phone'])->first();

        if (empty($user) || ! Hash::check($validatedData['password'], $user->password)) {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }

        Auth::login($user);

        return redirect()->route('home')->with('success', 'User logged in successfully!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->back()->with('success', 'Logout successfully!');
    }
}

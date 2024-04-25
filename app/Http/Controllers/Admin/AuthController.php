<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {
            if (Auth::check()) {
                $user = Auth::user();

                if ($user->language == 1) {

                    Session::put("locale", "ar");
                } else {

                    Session::put("locale", "en");
                }
            }
            return redirect('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function update(Request $request)
    {
        $email = $request->input('email');
        $newPassword = $request->input('password');
        $existingUser = User::where('email', $email)->first();
        if (!$existingUser) {
        } else {
            // Update the user's password
            $existingUser->password = Hash::make($newPassword);
            $existingUser->save();
            return redirect('/');
        }
    }
    public function updatePassword(Request $request)
    {

        $userId = Auth::id();
        $oldPassword = $request->input('oldPassword');
        $newPassword = $request->input('password');
        $existingUser = User::find($userId);
        if (!$existingUser || !Hash::check($oldPassword, $existingUser->password)) {
            return redirect()->back()->with('error', 'Invalid credentials');
        } else {
            $existingUser->password = Hash::make($newPassword);
            $existingUser->save();
            return redirect('/')->with('success', 'Password updated successfully');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

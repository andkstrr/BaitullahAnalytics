<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LogController extends Controller
{
    public function create() {
        return view('pages.create-user');
    }

    public function store(Request $request) {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'role' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|string|min:8',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $avatarName = null;

            if ($request->hasFile('avatar')) {
                $avatarName = time() . '.' . $request->avatar->extension();

                $destinationPath = public_path('assets/avatar');
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $request->avatar->move($destinationPath, $avatarName);
            }

            User::create([
                'name' => $validated['name'],
                'role' => $validated['role'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'avatar' => $avatarName,
            ]);

            return redirect()->route('analytics.dashboard')->with('success', 'Account= created successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors([
                'error' => 'Terjadi kesalahan saat membuat user: ' . $e->getMessage()
            ]);
        }


    }

    public function showLoginForm() {
        return view('pages.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('analytics.dashboard')->with('success', 'Login successful!');
        }

        return back()->with('failed', 'Login failed');
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect()->route('home')->with('success', 'Logout successful!');
    }
}

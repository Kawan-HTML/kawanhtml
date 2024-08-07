<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 


class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        $response = Socialite::driver('google')->redirect();
        
        // Log state yang disimpan di sesi
        Log::info('Generated state:', ['state' => session()->get('state')]); // Update this line

        return $response;
    }


    public function handleGoogleCallback()
    {
        try {
            // Log state yang disimpan di sesi sebelum mengambil user
            Log::info('State before user retrieval:', ['state' => session()->get('state')]);

            $user = Socialite::driver('google')->user();

            // Log jika sukses
            Log::info('User retrieved successfully');

            // Proses login atau pembuatan pengguna di sini

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            // Log jika terjadi error
            Log::error('Invalid State Exception:', ['session_state' => session()->get('state')]);

            return redirect('/login')->withErrors(['error' => 'Invalid state, please try again.']);
        }
    }
}
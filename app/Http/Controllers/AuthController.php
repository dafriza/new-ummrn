<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Alert;

class AuthController extends Controller
{
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::success('Success', 'Success Logout!');
        return redirect()->to('/');
    }
}

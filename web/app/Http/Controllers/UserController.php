<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request) {
        $incomingFields = $request->validate([
            'username' => ['required', 'min:5', 'max:15'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5', 'max:15'],
            'confirmpassword' => ['required', 'min:5', 'max:15'],
        ]);
        return 'Hello from our controller';
    }
}

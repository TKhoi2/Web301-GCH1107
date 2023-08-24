<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname' => ['required', 'min:5', 'max:15', Rule::unique('users', 'name')],
            'loginpassword' => ['required', 'min:5', 'max:15'],
        ]);

        if (auth()->attempt(['name'=> $incomingFields['loginname'], 'password'=> $incomingFields['loginpassword']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}

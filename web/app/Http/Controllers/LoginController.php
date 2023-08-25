<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function username(){
        return 'name';
        }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginname' => ['required', 'min:3', 'max:15',],
            'loginpassword' => ['required', 'min:3', 'max:15'],
        ]);

        if (auth()->attempt(['name'=> $incomingFields['loginname'], 'password'=> $incomingFields['loginpassword']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $validateFields = $request->validate([
            'email' => 'required',
            'password' => 'required',
            /*'fullName' => 'required',
            'position' => 'required',
            'electronicMail' => 'required',
            'phoneNumber' => 'required',
            'company' => 'required'*/
        ]);

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'));
    }
}

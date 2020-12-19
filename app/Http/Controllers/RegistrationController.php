<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public function show(){

        return view('registration');
    }

    public function register(Request $request){

        $user = new App\User; // instance to store data to the DB

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]; // prepared data to store into user

        $user = $user->create($data); // store to DB and get stored instance
//        Auth::login($user); // authorize user
//        return redirect()->intended('home');
//        return $user;
        return redirect()->route('home');
    }

}

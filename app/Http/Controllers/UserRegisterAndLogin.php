<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterAndLogin extends Controller
{

    function login (Request $request) {

    	$request->validate([

    		'loginUsername' => ['required'],
    		'loginPassword' => ['required','string']

    	]);

    	$request->session()->put('username',$request->loginUsername);

    	return redirect('/home');

    }



    function logout (Request $request) {

    	$request->session()->forget('username');

    	return redirect('/');

    }

}

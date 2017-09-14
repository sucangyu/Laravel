<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{
	//注册页
    public function create()
	{
   		return view('registration.create');
	}
	//注册方法
	public function store()
	{    
	    $this->validate(request(),[
	        'name' => 'required',
	        'email' => 'required|email',
	        'password' => 'required|confirmed',
	    ]);

	    $user = User::create(request(['name','password','email']));

	    auth()->login($user);

	    return redirect()->home();
	}
}



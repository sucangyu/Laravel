<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	//注册页
    public function create()
	{
   		return view('Sessions.create');
	}
	//登录方法
	public function store()
	{    

	    if (!auth()->attempt(request(['email', 'password']))) {
	        return back()->withErrors([
	            'messages' => '请确保邮箱和密码正确!'
	        ]);
	    }

	    return redirect()->home();
	} 
	//登出方法
	public function destroy()
	{
	    auth()->logout();

	    return redirect()->home();
	}
}

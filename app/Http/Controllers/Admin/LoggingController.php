<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use  Illuminate\Support\Facades\Hash;
use App\Admin;
use Auth;

class LoggingController extends Controller
{
    public function index()
    {
    	if (Auth::guard('admin')->check()) {
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return view('admin.login');
    	}
    }
    public function login(Request $request)
    {
    	$request->validate([
    		'email' => 'required',
    		'password' => 'required',
    	]);
    	$admin = Admin::where(['email'=>$request->email])->get();
    	$pass = Hash::check($request->password,$admin[0]->password);
    	if ($pass) {
    		auth()->guard('admin')->login($admin[0]);
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return back();
    	}
    }
    public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}

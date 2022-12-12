<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function Login()
    {
        return view('admin.adminlogin');
    }
    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return Redirect::route('admin.index');
        }else{
            return redirect()->back();
        }

    }
    public function logout(){
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return Redirect::route('admin.login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class WargaController extends Controller
{
    //
    public function register(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'required',
            'password' => 'required|string',
            
        ]);
        $data = new Warga;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->back();
    }
    public function Login()
    {
        return view('auth.login');
    }
    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return Redirect::route('user.index');
        }else{
            Session::flash('error','Email atau Password Salah');
            return redirect()->back();
        }

    }
    public function logout(){
        if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return Redirect::route('pages.index');
        }
    }
}

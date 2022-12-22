<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\Warga;
use App\Models\Kk;
use App\Models\Sku;
use App\Models\Ktp;
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
    public function EditAdminKk($id){
        $data = Kk::where('id',$id)->first();
        return view('editadmin.kk');
    }
    
    public function EditAdminKtp($id){
        $data = Ktp::where('id',$id)->first();
        return view('editadmin.ktp');
    }
    
    public function EditAdminSku($id){
        $data = Sku::where('id',$id)->first();
        return view('editadmin.sku');
    }
    
    public function EditAdminWarga($id){
        $data = Warga::where('id',$id)->first();
        return view('editadmin.warga', ['data'=>$data]);
    }
    public function RegisterAdminWarga(){
        return view('editadmin.registerwarga');
    }
}

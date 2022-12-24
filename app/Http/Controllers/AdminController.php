<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
            Session::flash('error','Email atau Password Salah');
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
        $data = DB::table('kk')
                ->join('warga','warga.id','=','kk.id_warga')
                ->select('kk.*','warga.nama','warga.nik','warga.alamat')
                ->where('kk.id','=',$id)
                ->first();
        return view('editadmin.kk', ['data'=>$data]);
    }
    
    public function EditAdminKtp($id){
        $data = DB::table('ktp')
                ->join('warga','warga.id','=','ktp.id_warga')
                ->select('ktp.*','warga.nama','warga.nik','warga.alamat')
                ->where('ktp.id','=',$id)
                ->first();
        return view('editadmin.ktp', ['data'=>$data]);
    }
    
    public function EditAdminSku($id){
        $data = DB::table('sku')
                ->join('warga','warga.id','=','sku.id_warga')
                ->select('sku.*','warga.nama','warga.nik','warga.alamat')
                ->where('sku.id','=',$id)
                ->first();
        return view('editadmin.sku', ['data'=>$data]);
    }
    
    public function EditAdminWarga($id){
        $data = Warga::where('id',$id)->first();
        return view('editadmin.warga', ['data'=>$data]);
    }
    public function RegisterAdminWarga(){
        return view('editadmin.registerwarga');
    }
    public function registeradminwargastore(Request $request){
        $message = [
            'required'=>':attribute tidak boleh kosong!',
            'size'=>':attribute harus 16 karakter'
        ];
        $this->validate($request,[
            'nik' => 'required|string|size:16',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'required',
            'password' => 'required|string',
            
        ],$message);
        $data = new Warga;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->password = Hash::make($request->password);
        $data->save();
        return Redirect::route('admin.warga');
    }
    public function post_editadminwarga(Request $request){
        $message = [
            'required'=>':attribute tidak boleh kosong!',
            'size'=>':attribute harus 16 karakter'
        ];
        $this->validate($request,[
            'nik' => 'required|string|size:16',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'alamat' => 'required'
            
        ],$message);
        $id=$request->id;
        $data = Warga::find($id);
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        if($request->has('password'))
        {
        $data->password = Hash::make($request->password);
        }
        $data->save();
        // dd($id);
        return Redirect::route('admin.warga');
    }
    public function post_editadminkk(Request $request){
        $id=$request->id;
        $data = Kk::find($id);
        $data->kepala_keluarga = $request->kepala_keluarga;
        $data->no_kk_lama = $request->no_kk_lama;
        $data->status_kawin = $request->status_kawin;
        $data->pendidikan = $request->pendidikan;
        $data->keperluan = $request->keperluan;
        $data->status=  $request->status;
        if($request->hasFile('dokumen')){
            $file = $request->file('dokumen');
            // nama file
            $filename = $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dokumen_kk';
            $file->move($tujuan_upload,$filename);
            $data->dokumen = $filename;
        }
        $data->save();
        return Redirect::route('admin.kk');
    }
    public function post_editadminktp(Request $request){
        $this->validate($request,[
            'no_kk' => 'required',
            'keperluan' => 'required',
                    
        ]);
        $id=$request->id;
        $data = ktp::find($id);
        // $data->id_warga = $request->id_warga;
        $data->keperluan = $request->keperluan;
        $data->no_kk = $request->no_kk;
        $data->status = $request->status;
        if($request->hasFile('dokumen')){
            $file = $request->file('dokumen');
            // nama file
            $filename = $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dokumen_ktp';
            $file->move($tujuan_upload,$filename);
            $data->dokumen = $filename;
        }
        // dd($request->keperluan);
        $data->save();
        return Redirect::route('admin.ktp');
    }
    public function post_editadminsku(Request $request){
        $this->validate($request,[
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'keperluan' => 'required',
            
        ]);
        $id=$request->id;
        $data = sku::find($id);
        $data->nama_usaha = $request->nama_usaha;
        $data->alamat_usaha = $request->alamat_usaha;
        $data->keperluan = $request->keperluan;
        $data->status = $request->status;
        if($request->hasFile('dokumen')){
            $file = $request->file('dokumen');
            // nama file
            $filename = $file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dokumen_sku';
            $file->move($tujuan_upload,$filename);
            $data->dokumen = $filename;
        }
        $data->save();
        return Redirect::route('admin.sku');
     }
     public function delete_warga($id){
        $data = Warga::find($id);
        $data->delete();
    return Redirect::back();
    }
    public function delete_kk($id){
        $data = Kk::find($id);
        $data->delete();
    return Redirect::back();
    }
    public function delete_ktp($id){
        $data = Ktp::find($id);
        $data->delete();
    return Redirect::back();
    }
    public function delete_sku($id){
        $data = Sku::find($id);
        $data->delete();
    return Redirect::back();
    }
    public function print_ktp($id){
        $data = DB::table('ktp')
        ->join('warga','warga.id','=','ktp.id_warga')
        ->select('ktp.*','warga.nama','warga.nik','warga.alamat')
        ->where('ktp.id','=',$id)
        ->first();
     return view('print.ktpprint',['data'=>$data]);
    }
    public function print_kk($id){
        $data = DB::table('kk')
        ->join('warga','warga.id','=','kk.id_warga')
        ->select('kk.*','warga.nama','warga.nik','warga.alamat')
        ->where('kk.id','=',$id)
        ->first();
     return view('print.kkprint',['data'=>$data]);
    }
    public function print_sku($id){
        $data = DB::table('sku')
        ->join('warga','warga.id','=','sku.id_warga')
        ->select('sku.*','warga.nama','warga.nik','warga.alamat')
        ->where('sku.id','=',$id)
        ->first();
     return view('print.skuprint',['data'=>$data]);
    }   
}

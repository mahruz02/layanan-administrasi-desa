<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use App\Models\Warga;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class KtpController extends Controller
{
    public function pengajuanktp(){
        $id = Auth::guard('user')->user()->id;
        $data = Warga::where('id',$id)->first();
        return view('warga.ktp',['data'=>$data]);
    }
    public function store(Request $request){
        $message = [
            'required'=>':attribute wajib diisi!',
            'size'=>':attribute harus 16 karakter'
        ];
        $this->validate($request, [
            'no_kk' => 'required|string|size:16',
            'keperluan' => 'required',
            'dokumen' => 'required'
            
        ], $message);
        $status = "Pending";
        $data = new ktp;
        $data->id_warga = $request->id_warga;
        $data->keperluan = $request->keperluan;
        $data->no_kk = $request->no_kk;
        $file = $request->file('dokumen');
        $filename = $file->getClientOriginalName();
        $tujuan_upload = 'dokumen_ktp';
        $file->move($tujuan_upload,$filename);
        $data->dokumen = $filename;
        $data->status = $status;
        $data->save();
        Session::flash('success','Data Berhasil Ditambahkan');
        return Redirect::route('status.ktp');
    }
    public function edit(Request $request){
        $this->validate($request,[
        'no_kk' => 'required|string|size:16',
        'keperluan' => 'required',
                
    ]);
    $id=$request->id;
    $data = ktp::find($id);
    // $data->id_warga = $request->id_warga;
    $data->keperluan = $request->keperluan;
    $data->no_kk = $request->no_kk;
    if($request->hasFile('dokumen')){
        $file = $request->file('dokumen');
        // nama file
        $filename = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen_ktp';
        $file->move($tujuan_upload,$filename);
        $data->dokumen = $filename;
    }
    $data->save();
    return Redirect::route('status.ktp');
}
}
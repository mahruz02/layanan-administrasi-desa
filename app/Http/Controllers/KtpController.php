<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
use App\Models\Warga;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class KtpController extends Controller
{
    public function pengajuanktp(){
        $id = Auth::guard('user')->user()->id;
        $data = Warga::where('id',$id)->first();
        return view('warga.ktp',['data'=>$data]);
    }
    public function store(Request $request){
            $this->validate($request,[
            'no_kk' => 'required',
            'keperluan' => 'required',
                    
        ]);
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
        return Redirect::route('status.ktp');
    }
    public function edit(Request $request){
        $this->validate($request,[
        'no_kk' => 'required',
        'keperluan' => 'required',
                
    ]);
    $id=$request->id;
    $data = ktp::find($id);
    // $data->id_warga = $request->id_warga;
    $data->keperluan = $request->keperluan;
    $data->no_kk = $request->no_kk;
    $file = $request->file('dokumen');
    $filename = $file->getClientOriginalName();
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
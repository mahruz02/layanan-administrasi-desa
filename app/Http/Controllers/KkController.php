<?php

namespace App\Http\Controllers;
use App\Models\kk;
use Illuminate\Http\Request;
use App\Models\Warga;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class KkController extends Controller
{
    public function pengajuankk(){
        $id = Auth::guard('user')->user()->id;
        $data = Warga::where('id',$id)->first();
        return view('warga.kk',['data'=>$data]);
    }
    public function store(Request $request){
        $message = [
            'required'=>':attribute wajib diisi!',
            'size'=>':attribute harus 16 karakter'
        ];
        $this->validate($request,[
            'kepala_keluarga' => 'required',
            'no_kk_lama' => 'required|string|size:16',
            'status_kawin' => 'required',
            'pendidikan' => 'required',
            'keperluan' => 'required',
            'dokumen' => 'required',
            
        ], $message);
        $status = "Pending";
        $data = new Kk;
        $data->kepala_keluarga = $request->kepala_keluarga;
        $data->id_warga = $request->id_warga;
        $data->no_kk_lama = $request->no_kk_lama;
        $data->status_kawin = $request->status_kawin;
        $data->pendidikan = $request->pendidikan;
        $data->keperluan = $request->keperluan;
        $file = $request->file('dokumen');
        // nama file
        $filename = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen_kk';
        $file->move($tujuan_upload,$filename);
        $data->dokumen = $filename;
        $data->status = $status;
        $data->save();
        Session::flash('success','Data Berhasil Ditambahkan');
        return Redirect::route('status.kk');
    }
    public function edit(Request $request){
        $id=$request->id;
        $data = Kk::find($id);
        $data->kepala_keluarga = $request->kepala_keluarga;
        // $data->id_warga = $request->id_warga;
        $data->no_kk_lama = $request->no_kk_lama;
        $data->status_kawin = $request->status_kawin;
        $data->pendidikan = $request->pendidikan;
        $data->keperluan = $request->keperluan;
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
        return Redirect::route('status.kk');
    }
}

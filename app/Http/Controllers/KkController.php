<?php

namespace App\Http\Controllers;
use App\Models\kk;
use Illuminate\Http\Request;

class KkController extends Controller
{
    public function pengajuankk(){
        return view('warga.kk');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'no_kk_lama' => 'required|string|max:16',
            'alamat' => 'required',
            'status_kawin' => 'required',
            'pendidikan' => 'required',
            'keperluan' => 'required',
            'dokumen' => 'required',
            'status' => 'status',
            
        ]);
        $data = new Kk;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->no_kk_lama = $request->no_kk_lama;
        $data->alamat = $request->alamat;
        $data->status_kawin = $request->status_kawin;
        $data->pendidikan = $request->pendidikan;
        $data->keperluan = $request->keperluan;
        $data->dokumen = $request->dokumen;
        $data->status = $request->status;
        $data->save();
    }
}

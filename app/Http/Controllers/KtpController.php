<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ktp;
class KtpController extends Controller
{
    public function pengajuanktp(){
        return view('warga.ktp');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nik' => 'required|string|max:16',
            'nama' => 'required|string|max:255',
            'no_kk' => 'required|string|max:16',
            'alamat' => 'required',
            'keperluan' => 'required',
            'dokumen' => 'required',
            'status' => 'status',
            
        ]);
        $data = new Ktp;
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->no_kk = $request->no_kk;
        $data->alamat = $request->alamat;
        $data->keperluan = $request->keperluan;
        $data->dokumen = $request->dokumen;
        $data->status = $request->status;
        $data->save();
    }
}

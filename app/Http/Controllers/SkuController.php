<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sku;
use App\Models\Warga;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class SkuController extends Controller
{
    public function pengajuansku(){
        $id = Auth::guard('user')->user()->id;
        $data = Warga::where('id',$id)->first();
        return view('warga.sku',['data'=>$data]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'keperluan' => 'required',
            
        ]);
        $status = "Pending";
        $data = new Sku;
        $data->id_warga = $request->id_warga;
        $data->nama_usaha = $request->nama_usaha;
        $data->alamat_usaha = $request->alamat_usaha;
        $data->keperluan = $request->keperluan;
        // $data->dokumen = $request->dokumen;
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('dokumen');
        // nama file
        $filename = $file->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dokumen_sku';
        $file->move($tujuan_upload,$filename);
        $data->dokumen = $filename;
        $data->status = $status;
        $data->save();
        return Redirect::route('status.sku');
        // dd($file);
    }
    public function edit(Request $request){
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
        return Redirect::route('status.sku');
}
}
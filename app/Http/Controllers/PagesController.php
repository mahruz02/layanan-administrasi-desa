<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kk;
use App\Models\Ktp;
use App\Models\sku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function IndexWarga(){
        return view('warga.index');
    }
    public function StatusKk()
    {
        $id_warga = Auth::guard('user')->user()->id;
        $data = Kk::where('id_warga',$id_warga)->get();
        return view('status/kkstatus',['data'=>$data]);
    }
    public function StatusKtp(){
        $id_warga = Auth::guard('user')->user()->id;
        $data = DB::table('ktp')
                ->join('warga','warga.id','=','ktp.id_warga')
                ->select('ktp.*','warga.nik','warga.alamat', 'warga.nama')
                ->where('ktp.id_warga','=',$id_warga)
                ->get();
        return view('status/ktpstatus',['data'=>$data]);
    }
    public function StatusSku(){
        $id_warga = Auth::guard('user')->user()->id;
        $data = DB::table('sku')
                ->join('warga','warga.id','=','sku.id_warga')
                ->select('sku.*','warga.nik','warga.alamat', 'warga.nama')
                ->where('sku.id_warga','=',$id_warga)
                ->get();
        return view('status/skustatus',['data'=>$data]);
    }
    public function EditKk($id){
        $data = DB::table('kk')
                ->join('warga','warga.id','=','kk.id_warga')
                ->select('kk.*','warga.nik','warga.alamat')
                ->where('kk.id','=',$id)
                ->first();
        // $data = Kk::where('id',$id)->first();
        return view('edit/kkedit',['data'=>$data]);
    }
    public function EditKtp($id){
        $data = DB::table('ktp')
                ->join('warga','warga.id','=','ktp.id_warga')
                ->select('ktp.*','warga.nik','warga.alamat', 'warga.nama')
                ->where('ktp.id','=',$id)
                ->first();
        // $data = Kk::where('id',$id)->first();
        return view('edit/ktpedit',['data'=>$data]);
    }
    public function EditSku($id){
        $data = DB::table('sku')
                ->join('warga','warga.id','=','sku.id_warga')
                ->select('sku.*','warga.nik','warga.alamat', 'warga.nama')
                ->where('sku.id','=',$id)
                ->first();
        // $data = Kk::where('id',$id)->first();
        return view('edit/skuedit',['data'=>$data]);
    }
}


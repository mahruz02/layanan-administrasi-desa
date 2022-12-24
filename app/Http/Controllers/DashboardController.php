<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Warga;
use App\Models\Kk;
use App\Models\Ktp;
use App\Models\Sku;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function AdminWarga(){
        $data = Warga::get();
        return view('admin.warga',['data'=>$data]);
    }
    public function AdminKk(){
        $data = DB::table('kk')
                ->join('warga','warga.id','=','kk.id_warga')
                ->select('kk.*','warga.nama')
                ->get();
        return view('admin.kkadmin', ['data'=>$data]);
    }
    public function AdminKtp(){
        $data = DB::table('ktp')
                ->join('warga','warga.id','=','ktp.id_warga')
                ->select('ktp.*','warga.nama', 'warga.nik')
                ->get();
        return view('admin.ktpadmin', ['data'=>$data]);
    }
    public function AdminSku(){
        $data = DB::table('sku')
                ->join('warga','warga.id','=','sku.id_warga')
                ->select('sku.*','warga.nama', 'warga.nik')
                ->get();
        return view('admin.skuadmin', ['data'=>$data]);
    }
    public function downloadktp($file){
        $file_path = public_path('dokumen_ktp/'.$file);
        return response()->download($file_path);
    }
    public function downloadkk($file){
        $file_path = public_path('dokumen_kk/'.$file);
        return response()->download($file_path);
    }
    public function downloadsku($file){
        $file_path = public_path('dokumen_sku/'.$file);
        return response()->download($file_path);
    }
    
}

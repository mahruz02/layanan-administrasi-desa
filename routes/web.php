<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\KkController;
use App\Http\Controllers\SkuController;
use App\Models\Warga;
use App\Models\Admin;
use App\Models\Status;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('pages.index');
Route::controller(WargaController::class)->group(function(){
    Route::get('/register', 'register')->name('warga.register');
    Route::post('/register/post', 'store')->name('warga.store');
    Route::get('/login', 'login')->name('warga.login');
    Route::post('/login/post', 'auth')->name('warga.auth_login');
    Route::get('logout','logout')->name('auth.logout');
});
Route::controller(PagesController::class)->group(function(){
    Route::get('/user/index', 'IndexWarga')->name('user.index');
    Route::get('/status/ktpstatus', 'StatusKtp')->name('status.ktp');
    Route::get('/status/skustatus', 'StatusSku')->name('status.sku');
    Route::get('/status/kkstatus', 'StatusKk')->name('status.kk');
    Route::get('/edit/kkedit/{id}', 'EditKK')->name('edit.kk');
    Route::get('/edit/ktpedit/{id}', 'EditKtp')->name('edit.ktp');
    Route::get('/edit/skuedit/{id}', 'EditSku')->name('edit.sku');

});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/login', 'login')->name('admin.login');
    Route::post('/admin/login/post', 'auth')->name('admin.auth_login');
    Route::get('/admin/logout','logout')->name('admin.logout');

});
Route::controller(DashboardController::class)->group(function(){
    Route::get('/admin/index', 'dashboard')->name('admin.index');
});
Route::controller(KtpController::class)->group(function(){
    Route::get('/warga/ktp', 'pengajuanktp')->name('warga.ktp');
    Route::post('/warga/ktp/post', 'store')->name('warga.ktp_post');
    Route::post('/edit/ktpedit/post', 'edit')->name('warga.ktp_edit');
});

Route::controller(KkController::class)->group(function(){
    Route::get('/warga/kk', 'pengajuankk')->name('warga.kk');
    Route::post('/warga/kk/post', 'store')->name('warga.kk_post');
    Route::post('/edit/kkedit/post', 'edit')->name('warga.kk_edit');
});

Route::controller(SkuController::class)->group(function(){
    Route::get('/warga/sku', 'pengajuansku')->name('warga.sku');
    Route::post('/warga/sku/post', 'store')->name('warga.sku_post');
    Route::post('/edit/skuedit/post', 'edit')->name('warga.sku_edit');
});
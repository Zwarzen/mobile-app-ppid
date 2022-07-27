<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InstrumenController;
use App\Http\Controllers\SeputarController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\KelembagaanController;
use App\Http\Controllers\SkppidController;
use App\Http\Controllers\PedomanUmumController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\AndroidController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\InfoBerkalaController;
use App\Http\Controllers\InfoSertaController;
use App\Http\Controllers\InfoTiapSaatController;
use App\Http\Controllers\InfoDikecualikanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PpidPembantuController;
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
    return view('dashboard/dashboard');
});
Route::resource('products', ProductController::class);
Route::resource('admin', AdminController::class);
Route::resource('profil', ProfilController::class);
Route::resource('instrumen', InstrumenController::class);
Route::resource('seputar', SeputarController::class);
Route::resource('visimisi', visimisiController::class);
Route::resource('kelembagaan', KelembagaanController::class);
Route::resource('skppid', SkppidController::class);
Route::resource('pedomanumum', pedomanumumController::class);
Route::resource('sop', SopController::class);
Route::resource('android', AndroidController::class);
Route::resource('laporan', LaporanController::class);
Route::resource('alur', AlurController::class);
Route::resource('infoberkala', InfoBerkalaController::class);
Route::resource('infoserta', InfoSertaController::class);
Route::resource('infotiapsaat', InfoTiapSaatController::class);
Route::resource('infodikecualikan', InfoDikecualikanController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('ppidpembantu', PpidPembantuController::class);








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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\KominfoController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\PpidAuthController;
use App\Http\Controllers\KominfoAuthController;
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
<<<<<<< HEAD
// Route::resource('admin', AdminController::class);
=======
Route::resource('admin', AdminController::class);
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78
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
Route::resource('login', LoginController::class);
<<<<<<< HEAD
// Route::resource('ppidadmin', PpidController::class);
// Route::resource('kominfoadmin', KominfoController::class);
=======
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78
Route::resource('ppidpembantu', PpidPembantuController::class);


Route::get('product','ProductController@index');
Route::get('/product/cari','ProductController@cari')->name('product.cari');

Route::get('product', 'ProductController@create')->name('product.create');
Route::post('product', 'ProductController@store')->name('product.store');
Route::get('/downloadPDF/{id}', [ProductController::class, 'downloadPDF'])->name('downloadPDF');

Route::get('login', [CustomAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('admin/search', [AdminController::class, 'search'])->name('search');
Route::post('/logout', [CustomAuthController::class, 'logout']);

// Route::resource('loginppid', LoginPpidController::class);
Route::get('loginppid', [PpidAuthController::class, 'index'])->name('loginppid')->middleware('guest');
Route::post('custom-loginppid', [PpidAuthController::class, 'customLogin'])->name('loginppid.custom');
Route::get('/ppidadmin/search', [PpidController::class, 'search'])->name('searchppid');
Route::post('/logout', [PpidAuthController::class, 'logout']);

Route::get('loginkominfo', [KominfoAuthController::class, 'index'])->name('loginkominfo')->middleware('guest');
Route::post('custom-loginkominfo', [KominfoAuthController::class, 'customLogin'])->name('loginkominfo.custom');
<<<<<<< HEAD
// Route::get('/kominfoadmin/search', [KominfoController::class, 'search'])->name('searchkominfo');
=======
Route::get('/kominfoadmin/search', [KominfoController::class, 'search'])->name('searchkominfo');
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78
Route::post('/logout', [KominfoAuthController::class, 'logout']);




<<<<<<< HEAD
Route::group(['middleware' => ['auth:user']], function () {
    route::get('admin', [AdminController::class, 'index']);
});
=======
// Route::group(['middleware' => ['auth:user']], function () {
//     route::get('admin', [AdminController::class, 'index']);
// });
>>>>>>> abeb06fedaf4ef4b409a3064bfe5c2907d867d78

Route::group(['middleware' => ['auth:kominfo']], function () {
    route::get('kominfoadmin', [KominfoController::class, 'index']);
});

Route::group(['middleware' => ['auth:ppid']], function () {
    route::get('ppidadmin', [PpidController::class, 'index']);
});



Route::get('/pdf', function () {
    return view('pdf.laporan');
});

<?php

use App\Http\Controllers\DRegister;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\RegistrasiController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [RegistrasiController::class, 'index'])->name('home');


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});


Route::post('/register', [RegistrasiController::class, 'register'])->name('registrasi');
Route::get('/success', [RegistrasiController::class, 'success'])->name('success');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/admin', function () {
        return view('admin.index');
    });
    Route::get('/data_register', [DRegister::class, 'index']);
    Route::get('/data/register/show', [DRegister::class, 'show']);
    Route::get('/data/register/verifikasi/{id}',  [PembayaranController::class, 'verifikasi']);
    Route::get('/data_pembayaran', [PembayaranController::class, 'index']);
    Route::get('/data_pembayaran/getid/{id}', [PembayaranController::class, 'getById']);
    Route::get('/data/pembayaran/show', [PembayaranController::class, 'show']);
    Route::post('/data/pembayaran/sethotel', [PembayaranController::class, 'sethotel']);
});


Route::get('/scan', function () {
    return view('admin.scan');
});

Route::get('/cektiket/{qrcode}', [PembayaranController::class, 'cekqr']);
Route::get('/gettiket/{kode}', [PembayaranController::class, 'gettiket']);
// Route::get('download/{filename}', function ($filename) {
//     // Check if file exists in app/storage/file folder
//     $file_path = storage_path() . '/app/public/qrcodes/' . $filename . '.svg';
//     // dd($file_path);
//     if (file_exists($file_path)) {
//         // Send Download
//         return Response::download($file_path, 'barcode_tiket.svg', [
//             'Content-Length: ' . filesize($file_path)
//         ]);
//     } else {
//         // Error
//         exit('Requested file does not exist on our server!');
//     }
// })
//     ->where('filename', '[A-Za-z0-9\-\_\.]+');

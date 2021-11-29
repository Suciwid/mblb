<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TrukController;
use App\Http\Controllers\TransaksiController;

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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/logout', function () {
    return view('logout');
});

//route Auth
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::post('/registeruser', [LoginController::class, 'registeruser']);
// Route::post('/loginproses', [LoginController::class, 'loginproses']);

Route::group(['middleware' => ['auth','revalidate']], function (){
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProdukController::class, 'index'])->name('products');
Route::post('/addProduct', [ProdukController::class, 'addProduct'])->name('addProduct');
Route::get('/fetchproduct', [ProdukController::class, 'fetchproduct'])->name('fetchproduct');
Route::get('/editProduct/{id?}', [ProdukController::class, 'editProduct'])->name('editProduct');
Route::put('/updateProduct/{id?}', [ProdukController::class, 'updateProduct'])->name('updateProduct');
Route::delete('/deleteProduct/{id?}', [ProdukController::class, 'deleteProduct'])->name('deleteProduct');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('/addKategori', [KategoriController::class, 'addKategori'])->name('addKategori');
Route::get('/fetchkategori', [KategoriController::class, 'fetchkategori'])->name('fetchkategori');
Route::get('/editKategori/{id?}', [KategoriController::class, 'editKategori'])->name('editKategori');
Route::put('/updateKategori/{id?}', [KategoriController::class, 'updateKategori'])->name('updateKategori');
Route::delete('/deleteKategori/{id?}', [KategoriController::class, 'deleteKategori'])->name('deleteKategori');

Route::get('/truk', [TrukController::class, 'index'])->name('truk');
Route::post('/addTruk', [TrukController::class, 'addTruk'])->name('addTruk');
Route::get('/fetchtruk', [TrukController::class, 'fetchtruk'])->name('fetchtruk');
Route::get('/editTruk/{id?}', [TrukController::class, 'editTruk'])->name('editTruk');
Route::put('/updateTruk/{id?}', [TrukController::class, 'updateTruk'])->name('updateTruk');
Route::delete('/deleteTruk/{id?}', [TrukController::class, 'deleteTruk'])->name('deleteTruk');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::post('/addPembayaran', [PembayaranController::class, 'addPembayaran'])->name('addPembayaran');
Route::get('/fetchpembayaran', [PembayaranController::class, 'fetchpembayaran'])->name('fetchpembayaran');
Route::get('/editPembayaran/{id?}', [PembayaranController::class, 'editPembayaran'])->name('editPembayaran');
Route::put('/updatePembayaran/{id?}', [PembayaranController::class, 'updatePembayaran'])->name('updatePembayaran');
Route::delete('/deletePembayaran/{id?}', [PembayaranController::class, 'deletePembayaran'])->name('deletePembayaran');


Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::post('/addCompany', [CompanyController::class, 'addCompany'])->name('addCompany');
Route::get('/fetchcompany', [CompanyController::class, 'fetchcompany'])->name('fetchcompany');
Route::get('/editCompany/{id?}', [CompanyController::class, 'editCompany'])->name('editCompany');
Route::put('/updateCompany/{id?}', [CompanyController::class, 'updateCompany'])->name('updateCompany');
Route::delete('/deleteCompany/{id?}', [CompanyController::class, 'deleteCompany'])->name('deleteCompany'); 

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');


## route yang perlu auth
});
<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DatadudiController;

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
});

//jurusan

Route::get('/datajurusan',[JurusanController::class, 'index'])->name('datajurusan');
    Route::get('/tambahjurusan',[JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
    Route::post('/insertjurusan',[JurusanController::class, 'insertjurusan'])->name('insertjurusan');
    Route::get('/tampiljurusan/{id}',[JurusanController::class, 'tampiljurusan'])->name('tampilajurusan');
    Route::post('/updatedatajurusan/{id}',[JurusanController::class, 'updatedatajurusan'])->name('updatedatajurusan');
    Route::get('/deletejurusan/{id}',[JurusanController::class, 'deletejurusan'])->name('deletejurusan');

//datadudi
Route::get('/datadudi',[DatadudiController::class, 'index'])->name('datadudi');
Route::get('/tambahdatadudi',[DatadudiController::class, 'tambahdatadudi'])->name('tambahdatadudi');
Route::post('/insertdatadudi',[DatadudiController::class, 'insertdatadudi'])->name('insertdatadudi');
Route::get('/tampildatadudi/{id}',[DatadudiController::class, 'tampildatadudi'])->name('tampildatadudi');
Route::post('/updatedatadudi/{id}',[DatadudiController::class, 'updatedatadudi'])->name('updatedatadudi');
Route::get('/deletedatadudi/{id}',[DatadudiController::class, 'deletedatadudi'])->name('deletedatadudi');    

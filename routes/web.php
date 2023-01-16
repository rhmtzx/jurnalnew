<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DatadudiController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\TambahjurnalController;
use App\Http\Controllers\DatapersyaratanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. hw_New_Document(object_record, document_data, document_size)ow create something great!
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

//datasiswa
Route::get('/datasiswa',[DatasiswaController::class, 'index'])->name('datasiswa');
Route::get('/tambahdatasiswa',[DatasiswaController::class, 'tambahdatasiswa'])->name('tambahdatasiswa');
Route::post('/insertdatasiswa',[DatasiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa');
Route::get('/tampildatasiswa/{id}',[DatasiswaController::class, 'tampildatasiswa'])->name('tampildatasiswa');
Route::post('/updatedatasiswa/{id}',[DatasiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa');
Route::get('/deletedatasiswa/{id}',[DatasiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa');

//datatambahjurnal
Route::get('/datatambahjurnal',[TambahjurnalController::class, 'index'])->name('datatambahjurnal');
Route::get('/tambahtambahjurnal',[TambahjurnalController::class, 'tambahtambahjurnal'])->name('tambahtambahjurnal');
Route::post('/inserttambahjurnal',[TambahjurnalController::class, 'inserttambahjurnal'])->name('inserttambahjurnal');
Route::get('/tampiltambahjurnal/{id}',[TambahjurnalController::class, 'tampiltambahjurnal'])->name('tampiltambahjurnal');
Route::post('/updatetambahjurnal/{id}',[TambahjurnalController::class, 'updatetambahjurnal'])->name('updatetambahjurnal');
Route::get('/deletetambahjurnal/{id}',[TambahjurnalController::class, 'deletetambahjurnal'])->name('deletetambahjurnal');

//datapembimbingdudi
Route::get('/datapembimbingdudi',[DatapembimbingdudiController::class, 'index'])->name('datapembimbingdudi');
Route::get('/tambahdatapembimbingdudi',[DatapembimbingdudiController::class, 'tambahdatapembimbingdudi'])->name('tambahdatapembimbingdudi');
Route::post('/insertdatapembimbingdudi',[DatapembimbingdudiController::class, 'insertdatapembimbingdudi'])->name('insertdatapembimbingdudi');
Route::get('/tampildatapembimbingdudi/{id}',[DatapembimbingdudiController::class, 'tampildatapembimbingdudi'])->name('tampildatapembimbingdudi');
Route::post('/updatedatapembimbingdudi/{id}',[DatapembimbingdudiController::class, 'updatedatapembimbingdudi'])->name('updatedatapembimbingdudi');
Route::get('/deletedatapembimbingdudi/{id}',[DatapembimbingdudiController::class, 'deletedatapembimbingdudi'])->name('deletedatapembimbingdudi');

//datapersyaratan
Route::get('/datapersyaratan',[DatapersyaratanController::class, 'index'])->name('datapersyaratan');
Route::get('/tambahpersyaratan',[DatapersyaratanController::class, 'tambahpersyaratan'])->name('tambahpersyaratan');
Route::post('/insertpersyaratan',[DatapersyaratanController::class, 'insertpersyaratan'])->name('insertpersyaratan');
Route::get('/tampilpersyaratan/{id}',[DatapersyaratanController::class, 'tampilpersyaratan'])->name('tampilpersyaratan');
Route::post('/updatepersyaratan/{id}',[DatapersyaratanController::class, 'updatepersyaratan'])->name('updatepersyaratan');
Route::get('/deletepersyaratan/{id}',[DatapersyaratanController::class, 'deletepersyaratan'])->name('deletepersyaratan');


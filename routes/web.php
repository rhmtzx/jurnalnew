<?php


use App\Models\jurusan;
use App\Models\datadudi;
use App\Models\datasiswa;
use App\Models\tambahjurnal;
use App\Models\dataplotingan;
use App\Models\dataguru;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DatadudiController;
use App\Http\Controllers\DataguruController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\SiswamagangController;
use App\Http\Controllers\TambahjurnalController;
use App\Http\Controllers\DataplotinganController;
use App\Http\Controllers\DatapersyaratanController;
use App\Http\Controllers\DatagurupembimbingController;
use App\Http\Controllers\DatapembimbingdudiController;
use App\Http\Controllers\DataabsenController;

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
    $jurusan = jurusan::count();
    $siswa = datasiswa::count();
    $dudi = datadudi::count();
    $jurnal = tambahjurnal::count();
    $plotingan = dataplotingan::count();
    $guru = dataguru::count();


    return view('welcome', compact('jurusan', 'siswa', 'dudi', 'jurnal','plotingan','guru'));
})->middleware('auth');

//landing

Route::get('/landinghome', function () {
    return view('landing.home');
});

//siswa
Route::get('/dashboard', function () {
    $jurusan = jurusan::count();
    $siswa = datasiswa::count();
    $dudi = datadudi::count();
    $jurnal = tambahjurnal::count();
    $plotingan = dataplotingan::count();
    $guru = dataguru::count();

    return view('siswa.welcomes', compact('jurusan', 'siswa', 'dudi', 'jurnal','plotingan','guru'));
})->middleware('auth');
//jurusan
Route::middleware('auth')->group(function () {
    Route::get('/datajurusan', [JurusanController::class, 'index'])->name('datajurusan');
    Route::get('/tambahjurusan', [JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
    Route::post('/insertjurusan', [JurusanController::class, 'insertjurusan'])->name('insertjurusan');
    Route::get('/tampiljurusan/{id}', [JurusanController::class, 'tampiljurusan'])->name('tampilajurusan');
    Route::post('/updatedatajurusan/{id}', [JurusanController::class, 'updatedatajurusan'])->name('updatedatajurusan');
    Route::get('/deletejurusan/{id}', [JurusanController::class, 'deletejurusan'])->name('deletejurusan');

    //datadudi
    Route::get('/datadudi', [DatadudiController::class, 'index'])->name('datadudi')->middleware('auth');
    Route::get('/tambahdatadudi', [DatadudiController::class, 'tambahdatadudi'])->name('tambahdatadudi')->middleware('auth');
    Route::post('/insertdatadudi', [DatadudiController::class, 'insertdatadudi'])->name('insertdatadudi')->middleware('auth');
    Route::get('/tampildatadudi/{id}', [DatadudiController::class, 'tampildatadudi'])->name('tampildatadudi')->middleware('auth');
    Route::post('/updatedatadudi/{id}', [DatadudiController::class, 'updatedatadudi'])->name('updatedatadudi')->middleware('auth');
    Route::get('/deletedatadudi/{id}', [DatadudiController::class, 'deletedatadudi'])->name('deletedatadudi')->middleware('auth');

    //dataguru
    Route::get('/dataguru', [DataguruController::class, 'index'])->name('dataguru')->middleware('auth');
    Route::get('/tambahdataguru', [DataguruController::class, 'tambahdataguru'])->name('tambahdataguru')->middleware('auth');
    Route::post('/insertdataguru', [DataguruController::class, 'insertdataguru'])->name('insertdataguru')->middleware('auth');
    Route::get('/tampildataguru/{id}', [DataguruController::class, 'tampildataguru'])->name('tampildataguru')->middleware('auth');
    Route::post('/updatedataguru/{id}', [DataguruController::class, 'updatedataguru'])->name('updatedataguru')->middleware('auth');
    Route::get('/deletedataguru/{id}', [DataguruController::class, 'deletedataguru'])->name('deletedataguru')->middleware('auth');

    //datasiswa
    Route::get('/datasiswa', [DatasiswaController::class, 'index'])->name('datasiswa')->middleware('auth');
    Route::get('/tambahdatasiswa', [DatasiswaController::class, 'tambahdatasiswa'])->name('tambahdatasiswa')->middleware('auth');
    Route::post('/insertdatasiswa', [DatasiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa')->middleware('auth');
    Route::get('/tampildatasiswa/{id}', [DatasiswaController::class, 'tampildatasiswa'])->name('tampildatasiswa')->middleware('auth');
    Route::post('/updatedatasiswa/{id}', [DatasiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa')->middleware('auth');
    Route::get('/deletedatasiswa/{id}', [DatasiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa')->middleware('auth');

    //datatambahjurnal
    Route::get('/datatambahjurnal', [TambahjurnalController::class, 'index'])->name('datatambahjurnal')->middleware('auth');
    Route::get('/tambahtambahjurnal', [TambahjurnalController::class, 'tambahtambahjurnal'])->name('tambahtambahjurnal')->middleware('auth');
    Route::post('/inserttambahjurnal', [TambahjurnalController::class, 'inserttambahjurnal'])->name('inserttambahjurnal')->middleware('auth');
    Route::get('/tampiltambahjurnal/{id}', [TambahjurnalController::class, 'tampiltambahjurnal'])->name('tampiltambahjurnal')->middleware('auth');
    Route::post('/updatetambahjurnal/{id}', [TambahjurnalController::class, 'updatetambahjurnal'])->name('updatetambahjurnal')->middleware('auth');
    Route::get('/deletetambahjurnal/{id}', [TambahjurnalController::class, 'deletetambahjurnal'])->name('deletetambahjurnal')->middleware('auth');

    //dataabsen
    Route::get('/dataabsen', [DataabsenController::class, 'index'])->name('dataabsen')->middleware('auth');
    Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen')->middleware('auth');
    Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen')->middleware('auth');
    Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen')->middleware('auth');
    Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen')->middleware('auth');
    Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen')->middleware('auth');
    Route::get('/detailabsen', [DataabsenController::class, 'detailabsen'])->name('detailabsen');


    //datapersyaratan
    Route::get('/datapersyaratan', [DatapersyaratanController::class, 'index'])->name('datapersyaratan')->middleware('auth');
    Route::get('/tambahpersyaratan', [DatapersyaratanController::class, 'tambahpersyaratan'])->name('tambahpersyaratan')->middleware('auth');
    Route::post('/insertpersyaratan', [DatapersyaratanController::class, 'insertpersyaratan'])->name('insertpersyaratan')->middleware('auth');
    Route::get('/tampilpersyaratan/{id}', [DatapersyaratanController::class, 'tampilpersyaratan'])->name('tampilpersyaratan')->middleware('auth');
    Route::post('/updatepersyaratan/{id}', [DatapersyaratanController::class, 'updatepersyaratan'])->name('updatepersyaratan')->middleware('auth');
    Route::get('/deletepersyaratan/{id}', [DatapersyaratanController::class, 'deletepersyaratan'])->name('deletepersyaratan')->middleware('auth');

    //datagurupembimbing
    Route::get('/datagurupembimbing', [DatagurupembimbingController::class, 'index'])->name('datagurupembimbing')->middleware('auth');
    Route::get('/tambahgurupembimbing', [DatagurupembimbingController::class, 'tambahgurupembimbing'])->name('tambahgurupembimbing')->middleware('auth');
    Route::post('/insertgurupembimbing', [DatagurupembimbingController::class, 'insertgurupembimbing'])->name('insertgurupembimbing')->middleware('auth');
    Route::get('/tampilgurupembimbing/{id}', [DatagurupembimbingController::class, 'tampilgurupembimbing'])->name('tampilgurupembimbing')->middleware('auth');
    Route::post('/updategurupembimbing/{id}', [DatagurupembimbingController::class, 'updategurupembimbing'])->name('updategurupembimbing')->middleware('auth');
    Route::get('/deletegurupembimbing/{id}', [DatagurupembimbingController::class, 'deletegurupembimbing'])->name('deletegurupembimbing')->middleware('auth');

    //pembimbingdudi
    Route::get('/pembimbingdudi', [DatapembimbingdudiController::class, 'index'])->name('pembimbingdudi')->middleware('auth');
    Route::get('/tambahpembimbingdudi', [DatapembimbingdudiController::class, 'tambahpembimbingdudi'])->name('tambahpembimbingdudi')->middleware('auth');
    Route::post('/insertpembimbingdudi', [DatapembimbingdudiController::class, 'insertpembimbingdudi'])->name('insertpembimbingdudi')->middleware('auth');
    Route::get('/tampilpembimbingdudi/{id}', [DatapembimbingdudiController::class, 'tampilpembimbingdudi'])->name('tampilpembimbingdudi')->middleware('auth');
    Route::post('/updatepembimbingdudi/{id}', [DatapembimbingdudiController::class, 'updatepembimbingdudi'])->name('updatepembimbingdudi')->middleware('auth');
    Route::get('/deletepembimbingdudi/{id}', [DatapembimbingdudiController::class, 'deletepembimbingdudi'])->name('deletepembimbingdudi')->middleware('auth');

    //dataplotingan
    Route::get('/dataplotingan', [DataplotinganController::class, 'index'])->name('dataplotingan')->middleware('auth');
    Route::get('/tambahdataplotingan', [DataplotinganController::class, 'tambahdataplotingan'])->name('tambahdataplotingan')->middleware('auth');
    Route::post('/insertdataplotingan', [DataplotinganController::class, 'insertdataplotingan'])->name('insertdataplotingan')->middleware('auth');
    Route::get('/tampildataplotingan/{id}', [DataplotinganController::class, 'tampildataplotingan'])->name('tampildataplotingan')->middleware('auth');
    Route::post('/updatedataplotingan/{id}', [DataplotinganController::class, 'updatedataplotingan'])->name('updatedataplotingan')->middleware('auth');
    Route::get('/deletedataplotingan/{id}', [DataplotinganController::class, 'deletedataplotingan'])->name('deletedataplotingan')->middleware('auth');

    //siswamagang
    Route::get('/siswamagang', [SiswamagangController::class, 'siswamagang'])->name('siswamagang')->middleware('auth');
    Route::get('/tambahsiswamagang', [SiswamagangController::class, 'tambahsiswamagang'])->name('tambahsiswamagang')->middleware('auth');
    Route::post('/insertsiswamagang', [SiswamagangController::class, 'insertsiswamagang'])->name('insertsiswamagang')->middleware('auth');
    Route::get('/tampilsiswamagang/{id}', [SiswamagangController::class, 'tampilsiswamagang'])->name('tampilsiswamagang')->middleware('auth');
    Route::post('/updatesiswamagang/{id}', [SiswamagangController::class, 'updatesiswamagang'])->name('updatesiswamagang')->middleware('auth');
    Route::get('/deletesiswamagang/{id}', [SiswamagangController::class, 'deletesiswamagang'])->name('deletesiswamagang')->middleware('auth');

    //datapersyaratan
    Route::get('/datapersyaratan', [DatapersyaratanController::class, 'index'])->name('datapersyaratan');
    Route::get('/tambahdatapersyaratan', [DatapersyaratanController::class, 'tambahdatapersyaratan'])->name('tambahdatapersyaratan');
    Route::post('/insertdatapersyaratan', [DatapersyaratanController::class, 'insertdatapersyaratan'])->name('insertdatapersyaratan');
    Route::get('/tampildatapersyaratan/{id}', [DatapersyaratanController::class, 'tampildatapersyaratan'])->name('tampildatapersyaratan');
    Route::post('/updatedatapersyaratan/{id}', [DatapersyaratanController::class, 'updatedatapersyaratan'])->name('updatedatapersyaratan');
    Route::get('/deletedatapersyaratan/{id}', [DatapersyaratanController::class, 'deletedatapersyaratan'])->name('deletedatapersyaratan');

    Route::get('/profil', [LoginController::class, 'profil'])->name('profil');
    Route::get('/editprofil', [LoginController::class, 'editprofil'])->name('editprofil');
    Route::post('/updateprofil', [LoginController::class, 'updateprofil'])->name('updateprofil');
    Route::get('/profils', [LoginController::class, 'profils'])->name('profils');


    //kelas
    Route::get('/datakelas', [KelasController::class, 'kelas'])->name('datakelas');
    Route::get('/tambahkelas', [KelasController::class, 'tambahkelas'])->name('tambahkelas');
    Route::post('/insertkelas', [KelasController::class, 'insertkelas'])->name('insertkelas');
    Route::get('/tampilkelas/{id}', [KelasController::class, 'tampilkelas'])->name('tampilakelas');
    Route::post('/updatedatakelas/{id}', [KelasController::class, 'updatedatakelas'])->name('updatedatakelas');
    Route::get('/deletekelas/{id}', [KelasController::class, 'deletekelas'])->name('deletekelas');

//dataabsen
    // Route::get('/dataabsen', [DataabsenController::class, 'dataabsen'])->name('dataabsen');
    // Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen');
    // Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen');
    // Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen');
    // Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen');
    // Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen');

});
//loginadmin
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

//loginsiswa
Route::get('/loginsiswa', [LoginController::class, 'loginsiswa'])->name('loginsiswa');
Route::post('/loginprosessiswa', [LoginController::class, 'loginprosessiswa'])->name('loginprosessiswa');
Route::get('/registersiswa', [LoginController::class, 'registersiswa'])->name('registersiswa');
Route::post('/registerusersiswa', [LoginController::class, 'registerusersiswa'])->name('registerusersiswa');

//logindudi
Route::get('/logindudi', [LoginController::class, 'logindudi'])->name('logindudi');
Route::post('/loginprosesdudi', [LoginController::class, 'loginprosesdudi'])->name('loginprosesdudi');
Route::get('/registerdudi', [LoginController::class, 'registerdudi'])->name('registerdudi');
Route::post('/registeruserdudi', [LoginController::class, 'registeruserdudi'])->name('registeruserdudi');

//loginguru
Route::get('/loginguru', [LoginController::class, 'loginguru'])->name('loginguru');
Route::post('/loginprosesguru', [LoginController::class, 'loginprosesguru'])->name('loginprosesguru');
Route::get('/registerguru', [LoginController::class, 'registerguru'])->name('registerguru');
Route::post('/registeruserguru', [LoginController::class, 'registeruserguru'])->name('registeruserguru');

//loginuser
Route::get('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::post('/loginprosesuser', [LoginController::class, 'loginprosesuser'])->name('loginprosesuser');
// Route::get('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');
// Route::post('/registeruseruser',[LoginController::class, 'registeruseruser'])->name('registeruseruser');

//log out
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


<?php


use App\Models\jurusan;
use App\Models\datadudi;
use App\Models\datasiswa;
use App\Models\tambahjurnal;
use App\Models\dataplotingan;
use App\Models\dataguru;
use App\Models\dataabsen;
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
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ForgotpassworddController;


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
//landing
Route::get('/landinghome', function () {
    return view('landing.home');
});




Route::group(['middleware' => ['auth', 'hakakses:Admin']], function () {
    // D a s h b o a r d  A d m i n
    Route::get('/', function () {
    $jurusan = jurusan::count();
    $siswa = datasiswa::count();
    $dudi = datadudi::count();
    $jurnal = tambahjurnal::count();
    $plotingan = dataplotingan::count();
    $guru = dataguru::count();
    $absen = dataabsen::count();

    return view('welcome', compact('jurusan', 'siswa', 'dudi', 'jurnal','plotingan','guru','absen'));
})->middleware('auth');
});

Route::group(['middleware' => ['auth', 'hakakses:Siswa,Guru,Dudi']], function () {
    // D a s h b o a r d  S i s w a
    Route::get('/dashboard', function () {
    $jurusan = jurusan::count();
    $siswa = datasiswa::count();
    $dudi = datadudi::count();
    $jurnal = tambahjurnal::count();
    $plotingan = dataplotingan::count();
    $guru = dataguru::count();
    $absen = dataabsen::count();
    $tittle = 'dashboard';

    return view('siswa.welcomes', compact('jurusan', 'siswa', 'dudi', 'jurnal','plotingan','guru','absen',
        'tittle'));
})->middleware('auth');
});


// P r o s e s L o g i n
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

// R e g i s t e r
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/registersiswa', [LoginController::class, 'registersiswa'])->name('registersiswa');
Route::post('/registerusersiswa', [LoginController::class, 'registerusersiswa'])->name('registerusersiswa');

Route::get('/registerdudi', [LoginController::class, 'registerdudi'])->name('registerdudi');
Route::post('/registeruserdudi', [LoginController::class, 'registeruserdudi'])->name('registeruserdudi');

Route::get('/registerguru', [LoginController::class, 'registerguru'])->name('registerguru');
Route::post('/registeruserguru', [LoginController::class, 'registeruserguru'])->name('registeruserguru');

Route::get('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');
Route::post('/loginprosesuser', [LoginController::class, 'loginprosesuser'])->name('loginprosesuser');

// C h a n g e p a s s w o r d
Route::get('/indexchange', [LoginController::class, 'indexchange'])->name('indexchange');
Route::post('/changepassword', [LoginController::class, 'changepassword'])->name('changepassword');


// L o g o u t
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// F o r g e t P a s s w o r d
Route::get('/forgotpasswordd', [ForgotpassworddController::class, 'forgotpasswordd'])->name('forgotpasswordd');
Route::post('ForgetPasswordStore', [ForgotPasswordController::class, 'ForgetPasswordStore'])->name('ForgetPasswordStore');
Route::get('ResetPassword/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('ResetPassword');
Route::post('reset-password', [ForgotPasswordController::class, 'ResetPasswordStore'])->name('ResetPasswordPost');



Route::get('/chart',[ChartController::class,'index']);
Route::get('/bar-chart',[ChartController::class,'barChart']);

Route::group(['middleware' => ['auth', 'hakakses:Admin']], function () {
    //AjaxGrapic
    Route::get('/ajaxGrapic',[ChartController::class, 'ajaxGrapic'])->name('ajaxGrapic')->middleware('Admin');
    // J u r u s a n
    Route::get('/datajurusan', [JurusanController::class, 'index'])->name('datajurusan');
    Route::get('/tambahjurusan', [JurusanController::class, 'tambahjurusan'])->name('tambahjurusan');
    Route::post('/insertjurusan', [JurusanController::class, 'insertjurusan'])->name('insertjurusan');
    Route::get('/tampiljurusan/{id}', [JurusanController::class, 'tampiljurusan'])->name('tampilajurusan');
    Route::post('/updatedatajurusan/{id}', [JurusanController::class, 'updatedatajurusan'])->name('updatedatajurusan');
    Route::get('/deletejurusan/{id}', [JurusanController::class, 'deletejurusan'])->name('deletejurusan');
    Route::get('/deleteall', [JurusanController::class, 'deleteall'])->name('deleteall')->middleware('auth');

    // D a t a  D u d i
    Route::get('/datadudi', [DatadudiController::class, 'index'])->name('datadudi')->middleware('auth');
    Route::get('/tambahdatadudi', [DatadudiController::class, 'tambahdatadudi'])->name('tambahdatadudi')->middleware('auth');
    Route::post('/insertdatadudi', [DatadudiController::class, 'insertdatadudi'])->name('insertdatadudi')->middleware('auth');
    Route::get('/tampildatadudi/{id}', [DatadudiController::class, 'tampildatadudi'])->name('tampildatadudi')->middleware('auth');
    Route::post('/updatedatadudi/{id}', [DatadudiController::class, 'updatedatadudi'])->name('updatedatadudi')->middleware('auth');
    Route::get('/deletedatadudi/{id}', [DatadudiController::class, 'deletedatadudi'])->name('deletedatadudi')->middleware('auth');

    // D a t a  G u r u
    Route::get('/dataguru', [DataguruController::class, 'index'])->name('dataguru')->middleware('auth');
    Route::get('/tambahdataguru', [DataguruController::class, 'tambahdataguru'])->name('tambahdataguru')->middleware('auth');
    Route::post('/insertdataguru', [DataguruController::class, 'insertdataguru'])->name('insertdataguru')->middleware('auth');
    Route::get('/tampildataguru/{id}', [DataguruController::class, 'tampildataguru'])->name('tampildataguru')->middleware('auth');
    Route::post('/updatedataguru/{id}', [DataguruController::class, 'updatedataguru'])->name('updatedataguru')->middleware('auth');
    Route::get('/deletedataguru/{id}', [DataguruController::class, 'deletedataguru'])->name('deletedataguru')->middleware('auth');

    

    // D a t a  A b s e n
    Route::get('/dataabsen', [DataabsenController::class, 'index'])->name('dataabsen')->middleware('auth');
    Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen')->middleware('auth');
    Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen')->middleware('auth');
    Route::get('/dataaa/{id}', [DataabsenController::class, 'dataaa'])->name('dataaa')->middleware('auth');
    Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen')->middleware('auth');
    Route::get('/absensguru/{id}', [DataabsenController::class, 'absensguru'])->name('absensguru')->middleware('auth');
    Route::get('/absensdudi/{id}', [DataabsenController::class, 'absensdudi'])->name('absensdudi')->middleware('auth');
    Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen')->middleware('auth');
    Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen')->middleware('auth');
    Route::get('/detailabsen', [DataabsenController::class, 'detailabsen'])->name('detailabsen');

    // D a t a  U s e r
    Route::get('/datauser', [UserController::class, 'datauser'])->name('datauser')->middleware('auth');
    Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
});



// R O U T E S M I D D L E - S I S W A
Route::group(['middleware' => ['auth', 'hakakses:Siswa,Guru,Dudi,Admin']], function () {

    // P r o f i l
    Route::get('/profil', [LoginController::class, 'profil'])->name('profil');
    Route::get('/editprofil', [LoginController::class, 'editprofil'])->name('editprofil');
    Route::post('/updateprofilguru', [LoginController::class, 'updateprofilguru'])->name('updateprofilguru');
    Route::post('/updateprofildudi', [LoginController::class, 'updateprofildudi'])->name('updateprofildudi');
    Route::post('/updateprofilsiswa', [LoginController::class, 'updateprofilsiswa'])->name('updateprofilsiswa');

    // D a t a  P l o t i n g a n
    Route::get('/dataplotingan', [DataplotinganController::class, 'index'])->name('dataplotingan')->middleware('auth');
    Route::get('/tambahdataplotingan', [DataplotinganController::class, 'tambahdataplotingan'])->name('tambahdataplotingan')->middleware('auth');
    Route::post('/insertdataplotingan', [DataplotinganController::class, 'insertdataplotingan'])->name('insertdataplotingan')->middleware('auth');
    Route::get('/tampildataplotingan/{id}', [DataplotinganController::class, 'tampildataplotingan'])->name('tampildataplotingan')->middleware('auth');
    Route::post('/updatedataplotingan/{id}', [DataplotinganController::class, 'updatedataplotingan'])->name('updatedataplotingan')->middleware('auth');
    Route::get('/deletedataplotingan/{id}', [DataplotinganController::class, 'deletedataplotingan'])->name('deletedataplotingan')->middleware('auth');
    Route::get('/deleteall', [DataplotinganController::class, 'deleteall'])->name('deleteall')->middleware('auth');

    // D a t a  J u r n a l
    Route::get('/datatambahjurnal', [TambahjurnalController::class, 'index'])->name('datatambahjurnal')->middleware('auth');
    Route::get('/tambahtambahjurnal', [TambahjurnalController::class, 'tambahtambahjurnal'])->name('tambahtambahjurnal')->middleware('auth');
    Route::post('/inserttambahjurnal', [TambahjurnalController::class, 'inserttambahjurnal'])->name('inserttambahjurnal')->middleware('auth');
    Route::get('/dataa/{id}', [TambahjurnalController::class, 'dataa'])->name('dataa')->middleware('auth');
    Route::get('/jurnalsdudi/{id}', [TambahjurnalController::class, 'jurnalsdudi'])->name('jurnalsdudi')->middleware('auth');
    Route::get('/jurnalsguru/{id}', [TambahjurnalController::class, 'jurnalsguru'])->name('jurnalsguru')->middleware('auth');
    Route::get('/tampiltambahjurnal/{id}', [TambahjurnalController::class, 'tampiltambahjurnal'])->name('tampiltambahjurnal')->middleware('auth');
    Route::post('/updatetambahjurnal/{id}', [TambahjurnalController::class, 'updatetambahjurnal'])->name('updatetambahjurnal')->middleware('auth');
    Route::get('/deletetambahjurnal/{id}', [TambahjurnalController::class, 'deletetambahjurnal'])->name('deletetambahjurnal')->middleware('auth');

    // D a t a  A b s e n
    Route::get('/dataabsen', [DataabsenController::class, 'index'])->name('dataabsen')->middleware('auth');
    Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen')->middleware('auth');
    Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen')->middleware('auth');
    Route::get('/dataaa/{id}', [DataabsenController::class, 'dataaa'])->name('dataaa')->middleware('auth');
    Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen')->middleware('auth');
    Route::get('/absensguru/{id}', [DataabsenController::class, 'absensguru'])->name('absensguru')->middleware('auth');
    Route::get('/absensdudi/{id}', [DataabsenController::class, 'absensdudi'])->name('absensdudi')->middleware('auth');
    Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen')->middleware('auth');
    Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen')->middleware('auth');
    Route::get('/detailabsen', [DataabsenController::class, 'detailabsen'])->name('detailabsen');

    // D a t a  S i s w a
    Route::get('/datasiswa', [DatasiswaController::class, 'index'])->name('datasiswa')->middleware('auth');
    Route::get('/tambahdatasiswa', [DatasiswaController::class, 'tambahdatasiswa'])->name('tambahdatasiswa')->middleware('auth');
    Route::post('/insertdatasiswa', [DatasiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa')->middleware('auth');
    Route::get('/tampildatasiswa/{id}', [DatasiswaController::class, 'tampildatasiswa'])->name('tampildatasiswa')->middleware('auth');
    Route::get('/data/{id}', [DatasiswaController::class, 'data'])->name('data')->middleware('auth');
    Route::post('/updatedatasiswa/{id}', [DatasiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa')->middleware('auth');
    Route::get('/deletedatasiswa/{id}', [DatasiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa')->middleware('auth');

    //Approve Jurnal
    Route::put('/statusditerima/{id}', [TambahjurnalController::class, 'statusditerima'])->name('statusditerima')->middleware('auth');
    Route::put('/statusditolak/{id}', [TambahjurnalController::class, 'statusditolak'])->name('statusditolak')->middleware('auth');
    //Approve Absen
    Route::put('/statusditerimaa/{id}', [DataabsenController::class, 'statusditerimaa'])->name('statusditerimaa')->middleware('auth');
    Route::put('/statusditolaka/{id}', [DataabsenController::class, 'statusditolaka'])->name('statusditolaka')->middleware('auth');
});



// // R O U T E S M I D D L E - D U D I
// Route::group(['middleware' => ['auth', 'hakakses:Dudi,Admin']], function () {

//     // D a t a  J u r n a l
//     Route::get('/datatambahjurnal', [TambahjurnalController::class, 'index'])->name('datatambahjurnal')->middleware('auth');
//     Route::get('/tambahtambahjurnal', [TambahjurnalController::class, 'tambahtambahjurnal'])->name('tambahtambahjurnal')->middleware('auth');
//     Route::post('/inserttambahjurnal', [TambahjurnalController::class, 'inserttambahjurnal'])->name('inserttambahjurnal')->middleware('auth');
//     Route::get('/dataa/{id}', [TambahjurnalController::class, 'dataa'])->name('dataa')->middleware('auth');
//     Route::get('/jurnalsdudi/{id}', [TambahjurnalController::class, 'jurnalsdudi'])->name('jurnalsdudi')->middleware('auth');
//     Route::get('/jurnalsguru/{id}', [TambahjurnalController::class, 'jurnalsguru'])->name('jurnalsguru')->middleware('auth');
//     Route::get('/tampiltambahjurnal/{id}', [TambahjurnalController::class, 'tampiltambahjurnal'])->name('tampiltambahjurnal')->middleware('auth');
//     Route::post('/updatetambahjurnal/{id}', [TambahjurnalController::class, 'updatetambahjurnal'])->name('updatetambahjurnal')->middleware('auth');
//     Route::get('/deletetambahjurnal/{id}', [TambahjurnalController::class, 'deletetambahjurnal'])->name('deletetambahjurnal')->middleware('auth');

//     // D a t a  A b s e n
//     Route::get('/dataabsen', [DataabsenController::class, 'index'])->name('dataabsen')->middleware('auth');
//     Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen')->middleware('auth');
//     Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen')->middleware('auth');
//     Route::get('/dataaa/{id}', [DataabsenController::class, 'dataaa'])->name('dataaa')->middleware('auth');
//     Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen')->middleware('auth');
//     Route::get('/absensguru/{id}', [DataabsenController::class, 'absensguru'])->name('absensguru')->middleware('auth');
//     Route::get('/absensdudi/{id}', [DataabsenController::class, 'absensdudi'])->name('absensdudi')->middleware('auth');
//     Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen')->middleware('auth');
//     Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen')->middleware('auth');
//     Route::get('/detailabsen', [DataabsenController::class, 'detailabsen'])->name('detailabsen');

//     // D a t a  S i s w a
//     Route::get('/datasiswa', [DatasiswaController::class, 'index'])->name('datasiswa')->middleware('auth');
//     Route::get('/tambahdatasiswa', [DatasiswaController::class, 'tambahdatasiswa'])->name('tambahdatasiswa')->middleware('auth');
//     Route::post('/insertdatasiswa', [DatasiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa')->middleware('auth');
//     Route::get('/tampildatasiswa/{id}', [DatasiswaController::class, 'tampildatasiswa'])->name('tampildatasiswa')->middleware('auth');
//     Route::get('/data/{id}', [DatasiswaController::class, 'data'])->name('data')->middleware('auth');
//     Route::post('/updatedatasiswa/{id}', [DatasiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa')->middleware('auth');
//     Route::get('/deletedatasiswa/{id}', [DatasiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa')->middleware('auth');
// });



// // R O U T E S M I D D L E - G U R U
// Route::group(['middleware' => ['auth', 'hakakses:Guru,Admin']], function () {
//     // D a t a  P l o t i n g a n
//     Route::get('/dataplotingan', [DataplotinganController::class, 'index'])->name('dataplotingan')->middleware('auth');
//     Route::get('/tambahdataplotingan', [DataplotinganController::class, 'tambahdataplotingan'])->name('tambahdataplotingan')->middleware('auth');
//     Route::post('/insertdataplotingan', [DataplotinganController::class, 'insertdataplotingan'])->name('insertdataplotingan')->middleware('auth');
//     Route::get('/tampildataplotingan/{id}', [DataplotinganController::class, 'tampildataplotingan'])->name('tampildataplotingan')->middleware('auth');
//     Route::post('/updatedataplotingan/{id}', [DataplotinganController::class, 'updatedataplotingan'])->name('updatedataplotingan')->middleware('auth');
//     Route::get('/deletedataplotingan/{id}', [DataplotinganController::class, 'deletedataplotingan'])->name('deletedataplotingan')->middleware('auth');
// });








// Route::group(['middleware' => ['auth', 'hakakses:Dudi,Siswa,Guru,Admin']], function () {
//     //dataabsen
//     Route::get('/dataabsen', [DataabsenController::class, 'index'])->name('dataabsen')->middleware('auth');
//     Route::get('/tambahabsen', [DataabsenController::class, 'tambahabsen'])->name('tambahabsen')->middleware('auth');
//     Route::post('/insertabsen', [DataabsenController::class, 'insertabsen'])->name('insertabsen')->middleware('auth');
//     Route::get('/tampilabsen/{id}', [DataabsenController::class, 'tampilabsen'])->name('tampilabsen')->middleware('auth');
//     Route::post('/updateabsen/{id}', [DataabsenController::class, 'updateabsen'])->name('updateabsen')->middleware('auth');
//     Route::get('/deleteabsen/{id}', [DataabsenController::class, 'deleteabsen'])->name('deleteabsen')->middleware('auth');
//     Route::get('/detailabsen', [DataabsenController::class, 'detailabsen'])->name('detailabsen');

//     //datasiswa
//     Route::get('/datasiswa', [DatasiswaController::class, 'index'])->name('datasiswa')->middleware('auth');
//     Route::get('/tambahdatasiswa', [DatasiswaController::class, 'tambahdatasiswa'])->name('tambahdatasiswa')->middleware('auth');
//     Route::post('/insertdatasiswa', [DatasiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa')->middleware('auth');
//     Route::get('/tampildatasiswa/{id}', [DatasiswaController::class, 'tampildatasiswa'])->name('tampildatasiswa')->middleware('auth');
//     Route::post('/updatedatasiswa/{id}', [DatasiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa')->middleware('auth');
//     Route::get('/deletedatasiswa/{id}', [DatasiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa')->middleware('auth');

// });


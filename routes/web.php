<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NilaiguruController;
use App\Http\Controllers\TugassiswaController;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\Siswa;


Route::get('/', function () {
    return view('landing.base');
});



Route::get('/dashboard', function () {
    return view('admin.home');
});





// ini adalah route untuk bagian user admin dan guru
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('admin.home',[
            'siswa' => Siswa::count(),
            'kelas' => Kelas::count(),
            'materi'=> Materi::count(),
            'user' => User::count()
        ]
        );
    });
    ////////// USER GURU /////////// 
    Route::controller(UserController::class)->group(function () {
        Route::get('user', 'index');
        Route::get('user/create', 'create');
        Route::post('user/store', 'store');
        Route::get('user/{id}/edit', 'edit');
        Route::post('user/update/{id}', 'update');
        Route::post('user/destroy/{id}', 'destroy');
        Route::get('user/edit/{id}', 'show');
    });
    ///////////// KELAS /////////////
    Route::controller(KelasController::class)->group(function () {
        Route::get('kelas', 'index');
        Route::get('kelas/create', 'create');
        Route::post('kelas/store', 'store');
        Route::get('kelas/{id}/edit', 'edit');
        Route::post('kelas/update/{id}', 'update');
        Route::post('kelas/destroy/{id}', 'destroy');
        Route::get('kelas/show/{id}', 'show');
    });
    ////////// SISWA ////////////
    Route::controller(SiswaController::class)->group(function () {
        Route::get('siswa', 'index');
        Route::get('siswa/create', 'create');
        Route::post('siswa/store', 'store');
        Route::get('siswa/{id}/edit', 'edit');
        Route::post('siswa/update/{id}', 'update');
        Route::post('siswa/destroy/{id}', 'destroy');
        Route::get('siswa/show/{id}', 'show');
    });
    //////// MATERI ///////
    Route::controller(MateriController::class)->group(function () {
        Route::get('materi', 'index');
        Route::get('materi/create', 'create');
        Route::post('materi/store', 'store');
        Route::get('materi/{id}/edit', 'edit');
        Route::post('materi/update/{id}', 'update');
        Route::post('materi/destroy/{id}', 'destroy');
        Route::get('materi/show/{id}', 'show');
    });
    ///////// TUGAS ////////
    Route::controller(TugasController::class)->group(function () {
        Route::get('tugas', 'index')->name('tugas');
        Route::get('tugas/create', 'create');
        Route::post('tugas/store', 'store');
        Route::get('tugas/{id}/edit', 'edit');
        Route::post('tugas/update/{id}', 'update');
        Route::post('tugas/destroy/{id}', 'destroy');
        Route::get('tugas/show/{id}', 'show');
    });
    //////// NILAI ///////
    Route::controller(NilaiguruController::class)->group(function () {
        Route::get('nilai', 'index');
        Route::get('nilai/{id}/edit', 'edit');
        Route::post('nilai/update/{id}', 'update');
        Route::post('nilai/destroy/{id}', 'destroy');
        Route::get('nilai/show/{id}', 'show');
        Route::get('dashboard', 'home');
    });
});

/////////// AUTH ///////////
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('proses_login', 'proses_login');
    Route::get('logout', 'logout');
});




Route::group(['middleware' => 'auth:siswa'],function () {
    ////////// Pengaturan Route Siswa //////////
    ///////// TUGAS ////////
    Route::controller(TugassiswaController::class)->group(function () {
        Route::get('siswa/tugas', 'index');
        Route::get('siswa/tugas/show/{id}', 'show');
    });

    Route::controller(NilaiController::class)->group(function () {
        Route::get('siswa/nilai', 'index');
        Route::get('siswa/tugas/create/{id}', 'create');
        Route::post('siswa/tugas/store', 'store');
        Route::get('siswa/nilai/show/{id}', 'show');
    });
});
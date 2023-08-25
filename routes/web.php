<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\LaravelExamples\UserEdit;

use App\Http\Semilleros\SemilleroCon;
use App\Http\Semilleros\RegistroCon;
use App\Http\Semilleros\MiSemilleroCon;
use App\Http\Semilleros\EncabezadoSemCon;
// use App\Http\Semilleros\SemilleristasCon;

use Illuminate\Http\Request;

use App\Http\Controllers\Eventos;
use App\Http\Controllers\SemilleristasCon;
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

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    // ------------------------------------------------------------------------------------
    Route::get('/ver-eventos', 'App\Http\Controllers\Eventos@index')->name('ver-eventos');
    Route::get('/registro-eventos', 'App\Http\Controllers\Eventos@form_eventos')->name('reg-eventos');
    Route::post('/eventos/registrar', 'App\Http\Controllers\Eventos@registrar');
    Route::get('/eventos/eliminar/{id}', 'App\Http\Controllers\Eventos@eliminar')->name('eli-eventos');

    Route::get('/profile', Profile::class)->name('profile');
    // rutas vistas semillero usuario Director
    Route::get('/semillero', [SemilleroCon::class, 'render'])->name('semillero');
    Route::get('/semillero/eliminar{id}',[SemilleroCon::class, 'eliminar'])->name('eliminaSem');
    Route::get('/semillero/editar{id}',[SemilleroCon::class, 'editarform'])->name('editarSem');
    Route::post('editar{id}',[SemilleroCon::class, 'editar'])->name('actualizaSem');
    Route::get('/miSemillero/{id}', [MiSemilleroCon::class,'ver'])->name('verSemillero');
    Route::get('/registrarsemillero', RegistroCon::class)->name('registroSem');
    Route::post('/registrarsemillero',[RegistroCon::class, 'registrar']);

    // Rutas vistas semillero usuario Coordinador - Estudiante - Docente
    Route::get('/miSemillero', [MiSemilleroCon::class,'render'])->name('miSemillero');
    Route::get('semilleristas/{id}', 'App\Http\Controllers\SemilleristasCon@render')->name('semilleristas');
    Route::get('/misemillero/agregarsemilleristas', 'App\Http\Controllers\SemilleristasCon@vincular')->name('agregarSemitas');
    Route::post('/misemillero/agregarsemilleristas', 'App\Http\Controllers\SemilleristasCon@registrar');
    
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/laravel-user-edit/{userId}', UserEdit::class)->name('user-edit');
});


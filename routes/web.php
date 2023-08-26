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

use Illuminate\Http\Request;

use App\Http\Controllers\Eventos;
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
    Route::get('/editar-eventos/{id}', 'App\Http\Controllers\Eventos@form_editar')->name('editar-eventos');
    Route::post('/eventos/editar/{id}', 'App\Http\Controllers\Eventos@editar');
    Route::get('/ver-mas/{id}', 'App\Http\Controllers\Eventos@vermas')->name('vermas-eventos');

    Route::get('/eventos/gen_reporte', 'App\Http\Controllers\Eventos@reporte')->name('rep-eventos');

    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});


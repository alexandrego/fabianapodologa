<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAccessController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestDashboardController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PatientMiddleware;
use App\Http\Controllers\PatientAuthController;
use App\Http\Controllers\PatientDashboardController;

Route::prefix('admin')->middleware([AdminMiddleware::class])->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('area');

    Route::get('/accesses', [AdminAccessController::class, 'index'])->name('accesses.index')->middleware('log.access');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('patients', \App\Http\Controllers\AdminPatientController::class);
});

Route::middleware([PatientMiddleware::class])->group(function () {
    Route::get('/patient-area', function () {
        return 'Patient area accessed';
    })->name('patient.area');

    Route::get('/paciente/dashboard', [PatientDashboardController::class, 'index'])->name('patient.dashboard');
});

// Rotas de autenticação da administradora
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// 2FA admin
Route::get('/admin/verify-code', [AdminAuthController::class, 'showVerifyCodeForm'])->name('admin.verify_code');
Route::post('/admin/verify-code', [AdminAuthController::class, 'verifyCode']);

// Rotas de autenticação de pacientes
Route::get('/paciente/login', [PatientAuthController::class, 'showLoginForm'])->name('patient.login');
Route::post('/paciente/login', [PatientAuthController::class, 'login']);
Route::get('/paciente/cadastro', [PatientAuthController::class, 'showRegisterForm'])->name('patient.register');
Route::post('/paciente/cadastro', [PatientAuthController::class, 'register']);
Route::post('/paciente/logout', [PatientAuthController::class, 'logout'])->name('patient.logout');

// 2FA paciente
Route::get('/paciente/verify-code', [PatientAuthController::class, 'showVerifyCodeForm'])->name('patient.verify_code');
Route::post('/paciente/verify-code', [PatientAuthController::class, 'verifyCode']);

// Página de privacidade
Route::view('/privacidade', 'privacidade')->name('privacidade');

use Illuminate\Support\Facades\Auth;

// Rota raiz
Route::get('/', function () {
    return view('welcome');
})->name('home');

use App\Http\Controllers\AdminAuthController;

// Rota de login admin com verificação de autenticação
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login', [AdminAuthController::class, 'login']);

// Rotas de teste
Route::middleware(['test'])->group(function () {
    Route::get('/test/dashboard', [TestDashboardController::class, 'index'])->name('test.dashboard');
});

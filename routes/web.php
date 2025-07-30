<?php

use Illuminate\Support\Facades\Route;

Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/admin-area', function () {
        return 'Admin area accessed';
    })->name('admin.area');
});

Route::middleware([\App\Http\Middleware\PatientMiddleware::class])->group(function () {
    Route::get('/patient-area', function () {
        return 'Patient area accessed';
    })->name('patient.area');
});
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/privacidade', 'privacidade')->name('privacidade');

// Rotas de autenticação da administradora
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// 2FA admin
Route::get('/admin/verify-code', [AdminAuthController::class, 'showVerifyCodeForm'])->name('admin.verify_code');
Route::post('/admin/verify-code', [AdminAuthController::class, 'verifyCode']);

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PatientMiddleware;

// Dashboard protegida
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['test'])->group(function () {
    Route::get('/test/dashboard', [TestDashboardController::class, 'index'])->name('test.dashboard');
});

// Rotas de autenticação de pacientes
use App\Http\Controllers\PatientAuthController;
use App\Http\Controllers\PatientDashboardController;
Route::get('/paciente/login', [PatientAuthController::class, 'showLoginForm'])->name('patient.login');
Route::post('/paciente/login', [PatientAuthController::class, 'login']);
Route::get('/paciente/cadastro', [PatientAuthController::class, 'showRegisterForm'])->name('patient.register');
Route::post('/paciente/cadastro', [PatientAuthController::class, 'register']);
Route::post('/paciente/logout', [PatientAuthController::class, 'logout'])->name('patient.logout');

// 2FA paciente
Route::get('/paciente/verify-code', [PatientAuthController::class, 'showVerifyCodeForm'])->name('patient.verify_code');
Route::post('/paciente/verify-code', [PatientAuthController::class, 'verifyCode']);

// Dashboard protegida do paciente
Route::middleware([PatientMiddleware::class])->group(function () {
    Route::get('/paciente/dashboard', [PatientDashboardController::class, 'index'])->name('patient.dashboard');
});

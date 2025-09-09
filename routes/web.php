<?php

use App\Http\Controllers\ToastTestController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    // Toast test routes
    Route::get('toast-test', [ToastTestController::class, 'index'])->name('toast.test');
    Route::post('toast-test/success', [ToastTestController::class, 'testSuccess'])->name('toast.test.success');
    Route::post('toast-test/error', [ToastTestController::class, 'testError'])->name('toast.test.error');
    Route::post('toast-test/warning', [ToastTestController::class, 'testWarning'])->name('toast.test.warning');
    Route::post('toast-test/info', [ToastTestController::class, 'testInfo'])->name('toast.test.info');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Disc\DiscTestController;

Route::get('/', [LandingController::class, 'index'])
    ->name('landing');

/*
|--------------------------------------------------------------------------
| DISC
|--------------------------------------------------------------------------
*/

Route::prefix('disc')
    ->name('disc.')
    ->group(function () {

        Route::get('/', [DiscTestController::class, 'index'])
            ->name('index');

        Route::post('/start', [DiscTestController::class, 'start'])
            ->name('start');

        Route::get('/instruction/{discTest}', [DiscTestController::class, 'instruction'])
            ->name('instruction');

        Route::get('/test/{discTest}', [DiscTestController::class, 'test'])
            ->name('test');

        Route::post('/test/{discTest}/submit', [DiscTestController::class, 'submit'])
            ->name('submit');

        Route::get('/result/{discTest}', [DiscTestController::class, 'result'])
            ->name('result');
    });

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return inertia('Admin/Dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
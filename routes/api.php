<?php

use App\Http\Controllers\FactorialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('/', FactorialController::class);


Route::get('/', [FactorialController::class, 'index'])->name('home');
Route::get('factorial/{data}', [FactorialController::class, 'show'])->name('factorial');
// Route::put('tasks/{task}/complete', [TodoController::class, 'complete'])->name('task.complete');

<?php
use App\Http\Controllers\Api\TaskApiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/tasks', [TaskApiController::class, 'store'])->name('tasks.store');
// Route untuk Update (Edit)
Route::put('/tasks/{id}', [TaskApiController::class, 'update'])->name('tasks.update');

// Route untuk Delete (Hapus)
Route::delete('/tasks/{id}', [TaskApiController::class, 'destroy'])->name('tasks.destroy');

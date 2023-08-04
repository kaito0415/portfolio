<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GroupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LectureController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'home')->name('home');
    Route::post('/lectures', 'store')->name('store');
    Route::get('/lectures/add', 'add')->name('add');
    Route::get('/lectures/{lecture}/edit', 'edit')->name('edit');
    Route::put('/lectures/{lecture}', 'update')->name('update');
    Route::get('/lectures/{lecture}/detail', 'detail')->name('detail');
});

Route::controller(TaskController::class)->middleware(['auth'])->group(function(){
    Route::post('/tasks', 'store')->name('store');
    Route::get('/tasks/{task}/add', 'add')->name('add');
    Route::get('/tasks/{task}/edit', 'edit')->name('edit');
    Route::put('/tasks/{task}', 'update')->name('update');
    Route::get('/tasks/{task}/detail', 'detail')->name('detail');
});

Route::controller(CalendarController::class)->middleware(['auth'])->group(function(){
    Route::get('/calendars', 'home')->name('home');
});

Route::controller(GroupController::class)->middleware(['auth'])->group(function(){
    Route::get('/groups/chat', 'chat')->name('chat');
    Route::get('/groups/invite', 'invite')->name('invite');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

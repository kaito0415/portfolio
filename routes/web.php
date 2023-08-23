<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ChatController;

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
    Route::get('/lectures/{user}', 'home');
    Route::get('/lectures/add/{user}', 'add');
    Route::post('/lectures/check', 'check');
    Route::post('/lectures/{user}', 'store');
    Route::get('/lectures/entry/{user}', 'entry');
    Route::get('/lectures/{lecture}/edit', 'edit');
    Route::put('/lectures/{lecture}', 'update');
    Route::get('/lectures/{lecture}/detail', 'detail');
    Route::delete('/lectures/{lecture}', 'delete');
});

Route::controller(TaskController::class)->middleware(['auth'])->group(function(){
    Route::post('/tasks', 'store');
    Route::get('/tasks/index/{user}', 'index');
    Route::get('/tasks/add/{user}', 'add');
    Route::get('/tasks/{task}/edit/{user}', 'edit');
    Route::put('/tasks/{task}', 'update');
    Route::get('/tasks/{task}/detail/{user}', 'detail');
    Route::delete('/tasks/{task}', 'delete');
});

Route::controller(CalendarController::class)->middleware(['auth'])->group(function(){
    Route::get('/calendars', 'home')->name('calendars');
});

Route::controller(GroupController::class)->middleware(['auth'])->group(function(){
    Route::get('/groups/{user}/index', 'index')->name('group_index');
    Route::get('/groups/make/{user}', 'make');
    Route::post('/groups/check', 'check');
    Route::post('/groups/{user}', 'store');
    Route::get('/groups/entry/{user}', 'entry');
    Route::get('/groups/{group}/edit/{user}', 'edit');
    Route::put('/groups/{group}/{user}', 'update');
    Route::get('/groups/detail/{group}', 'detail');
    Route::get('/groups/invite', 'invite');
    Route::get('/groups/{group}/chat/{user}', 'chat');
    Route::delete('/groups/{group}', 'delete');
    
});

Route::controller(ChatController::class)->middleware(['auth'])->group(function(){
    Route::post('/chats/{group}/{user}', 'store');
    Route::delete('/chats/{chat}', 'delete');
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

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
    Route::get('/', 'home');
    Route::get('/lectures/add/{user}', 'add');
    Route::post('/lectures/{user}', 'store');
    Route::get('/lectures/{lecture}/edit', 'edit');
    Route::put('/lectures/{lecture}', 'update');
    Route::get('/lectures/{lecture}/detail', 'detail');
});

Route::controller(TaskController::class)->middleware(['auth'])->group(function(){
    Route::post('/tasks', 'store');
    Route::get('/tasks/index/{user}', 'index');
    Route::get('/tasks/add', 'add');
    Route::get('/tasks/{task}/edit', 'edit');
    Route::put('/tasks/{task}', 'update');
    Route::get('/tasks/{task}/detail', 'detail');
});

Route::controller(CalendarController::class)->middleware(['auth'])->group(function(){
    Route::get('/calendars', 'home')->name('calendars');
});

Route::controller(GroupController::class)->middleware(['auth'])->group(function(){
    Route::get('/groups/{user}/index', 'index')->name('group_index');
    Route::get('/groups/make/{user}', 'make');
    Route::post('/groups/{user}', 'store');
    Route::get('/groups/{group}/edit/{user}', 'edit');
    Route::put('/groups/{group}/{user}', 'update');
    Route::get('/groups/invite', 'invite');
    Route::get('/groups/{group}/chat/{user}', 'chat');
    
});

Route::controller(ChatController::class)->middleware(['auth'])->group(function(){
    Route::post('/chats/{group}/{user}', 'store');
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

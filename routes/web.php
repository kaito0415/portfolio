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
    Route::post('/lectures', 'store');
    Route::get('/lectures/add', 'add')->name('lecture_add');
    Route::get('/lectures/{lecture}/edit', 'edit');
    Route::put('/lectures/{lecture}', 'update');
    Route::get('/lectures/{lecture}/detail', 'detail')->name('detail');
});

Route::controller(TaskController::class)->middleware(['auth'])->group(function(){
    Route::post('/tasks', 'store');
    Route::get('/tasks/index', 'index')->name('task_index');
    Route::get('/tasks/add', 'add')->name('task_add');
    Route::get('/tasks/{task}/edit', 'edit');
    Route::put('/tasks/{task}', 'update');
    Route::get('/tasks/{task}/detail', 'detail');
});

Route::controller(CalendarController::class)->middleware(['auth'])->group(function(){
    Route::get('/calendars', 'calendars')->name('calendars');
});

Route::controller(GroupController::class)->middleware(['auth'])->group(function(){
    Route::get('/groups/{user}/index', 'index')->name('index_group');
    Route::get('/groups/make', 'make')->name('make');
    Route::post('/groups', 'store');
    Route::get('/groups/{group}/edit', 'edit');
    Route::put('/groups/{group}', 'update');
    Route::get('/groups/invite', 'invite');
    Route::get('/groups/{group}/chat', 'chat');
    
});

Route::controller(ChatController::class)->middleware(['auth'])->group(function(){
    Route::post('/chats', 'store');
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

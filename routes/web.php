<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // this will redirect to the projects.index route
    return  redirect()->route('projects.index');
});

Route::resource('projects', ProjectController::class);

Route::post('/projects/{project}/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::post('/tasks/reorder', [TaskController::class, 'reorder'])->name('tasks.reorder');

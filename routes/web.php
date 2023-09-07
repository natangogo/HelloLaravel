<?php

use App\Http\Controllers\TaskController;

Route::get('/folders/{id}/tasks',[TaskController::class, 'index'])->name('tasks.index');
//idはフォルダによって変化するので{}でくくる。
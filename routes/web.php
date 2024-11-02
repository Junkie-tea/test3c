<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index'])->name('questions.index');

Route::post('/create', [QuestionController::class, 'create'])->name('questions.create');

Route::get('/answers/{id}', [QuestionController::class, 'show'])->name('answers.show');

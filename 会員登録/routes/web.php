<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\Member;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/top',[MemberController::class,'top'])->name('top');

Route::get('/register',[MemberController::class,'register'])->name('register');

Route::post('/memberRegister',[MemberController::class,'memberRegister']);

Route::get('/edit/{id}', [MemberController::class, 'edit']);
Route::post('/memberEdit', [MemberController::class, 'memberEdit']);

Route::get('/memberDelete/{id}', [MemberController::class, 'memberDelete']);




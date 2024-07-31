<?php

use App\Http\Controllers\accountingcontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::any('/',[accountingcontroller::class,'index'])->name('index');
Route::any('/Master',[accountingcontroller::class,'master'])->name('master');
Route::any('/Payment',[accountingcontroller::class,'payment'])->name('payment');
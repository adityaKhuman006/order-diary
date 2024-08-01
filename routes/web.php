<?php

use App\Http\Controllers\accountingcontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/',[accountingcontroller::class,'index'])->name('index');
Route::get('/Master',[accountingcontroller::class,'master'])->name('master');
Route::get('/Payment',[accountingcontroller::class,'payment'])->name('payment');
Route::get('/Report',[accountingcontroller::class,'report'])->name('report');
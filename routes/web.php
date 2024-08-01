<?php

use App\Http\Controllers\orderDiarycontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::any('/',[orderDiarycontroller::class,'index'])->name('index');

Route::get('/Master',[orderDiarycontroller::class,'master'])->name('master');

Route::post('/orderTo',[orderDiarycontroller::class,'orderTo'])->name('order.create');
Route::post('/customer',[orderDiarycontroller::class,'customer'])->name('customer.create');
Route::post('/user',[orderDiarycontroller::class,'user'])->name('user.create');
Route::post('/uom',[orderDiarycontroller::class,'uom'])->name('umo.create');


Route::any('/Payment',[orderDiarycontroller::class,'payment'])->name('payment');
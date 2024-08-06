<?php

use App\Http\Controllers\orderDiarycontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::any('/',[orderDiarycontroller::class,'index'])->name('index');

Route::get('/master-customer',[orderDiarycontroller::class,'masterCustomer'])->name('master.customer');
Route::get('/master-order',[orderDiarycontroller::class,'masterOrder'])->name('master.order');
Route::get('/master-uom',[orderDiarycontroller::class,'masterUom'])->name('master.uom');
Route::get('/master-user',[orderDiarycontroller::class,'masterUser'])->name('master.User');

Route::post('/create-customer',[orderDiarycontroller::class,'createCustomer'])->name('create.customer');
Route::post('/create-order',[orderDiarycontroller::class,'createOrder'])->name('create.order');
Route::post('/create-uom',[orderDiarycontroller::class,'createUom'])->name('create.uom');
Route::post('/create-user',[orderDiarycontroller::class,'createUser'])->name('create.user');

Route::post('/order-to',[orderDiarycontroller::class,'orderTo'])->name('order.create');
Route::post('/customer',[orderDiarycontroller::class,'customer'])->name('customer.create');
Route::post('/user',[orderDiarycontroller::class,'user'])->name('user.create');
Route::post('/uom',[orderDiarycontroller::class,'uom'])->name('umo.create');


 Route::any('/payment',[orderDiarycontroller::class,'payment'])->name('payment');
 Route::get('/report',[orderDiarycontroller::class,'report'])->name('report');


 Route::post('update-order-name',[orderDiarycontroller::class,'updateOrderName'])->name('update.order.name');

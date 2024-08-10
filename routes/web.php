<?php

use App\Http\Controllers\accountingcontroller;
use App\Http\Controllers\orderDiarycontroller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::any('/',[orderDiarycontroller::class,'index'])->name('index');

Route::get('/master-customer',[orderDiarycontroller::class,'masterCustomer'])->name('master.customer');
Route::get('/master-order',[orderDiarycontroller::class,'masterOrder'])->name('master.order');
Route::get('/master-uom',[orderDiarycontroller::class,'masterUom'])->name('master.uom');
Route::get('/master-user',[orderDiarycontroller::class,'masterUser'])->name('master.User');
Route::get('/master-Belt',[orderDiarycontroller::class,'masterbelt'])->name('master.belt');

Route::post('/create-customer',[orderDiarycontroller::class,'createCustomer'])->name('create.customer');
Route::post('/create-order',[orderDiarycontroller::class,'createOrder'])->name('create.order');
Route::post('/create-uom',[orderDiarycontroller::class,'createUom'])->name('create.uom');
Route::post('/create-user',[orderDiarycontroller::class,'createUser'])->name('create.user');
Route::post('/create-Belt',[orderDiarycontroller::class,'createBelt'])->name('create.belt');

Route::post('/order-to',[orderDiarycontroller::class,'orderTo'])->name('order.create');
Route::post('/customer',[orderDiarycontroller::class,'customer'])->name('customer.create');
Route::post('/user',[orderDiarycontroller::class,'user'])->name('user.create');
Route::post('/uom',[orderDiarycontroller::class,'uom'])->name('umo.create');


 Route::any('/payment',[orderDiarycontroller::class,'payment'])->name('payment');
 Route::get('/php artisan serve',[orderDiarycontroller::class,'report'])->name('report');


 Route::post('update-order-name',[orderDiarycontroller::class,'updateOrderName'])->name('update.order.name');
 Route::post('update-order-number',[orderDiarycontroller::class,'updateOrderNumber'])->name('update.order.number');
 Route::post('delete-order',[orderDiarycontroller::class,'deleteOrder'])->name('delete.order');

 Route::post('update-customer-name',[orderDiarycontroller::class,'updateCustomerName'])->name('update.customer.name');
 Route::post('update-customer-address',[orderDiarycontroller::class,'updateCustomeraddress'])->name('update.customer.address');
 Route::post('delete-customer',[orderDiarycontroller::class,'deleteCustomer'])->name('delete.customer');

 Route::post('update-uom',[orderDiarycontroller::class,'updateuom'])->name('update.uom');
 Route::post('delete-uom',[orderDiarycontroller::class,'deleteuom'])->name('delete.uom');


 Route::post('update-user-name',[orderDiarycontroller::class,'updateuserName'])->name('update.user.name');
 Route::post('update-user-type',[orderDiarycontroller::class,'updateusertype'])->name('update.user.type');
 Route::post('delete-user',[orderDiarycontroller::class,'deleteuser'])->name('delete.user');


 Route::post('update-belt',[orderDiarycontroller::class,'updateBelt'])->name('update.belt');
 Route::post('delete-belt',[orderDiarycontroller::class,'deleteBelt'])->name('delete.belt');

 Route::post('table-create',[orderDiarycontroller::class,'tableOrder'])->name('table.order');

 Route::get('create-specific-order',[orderDiarycontroller::class,'createSpecificOrder'])->name('create.specific.order');

 Route::post('update.order',[orderDiarycontroller::class,'updateOrder'])->name('update.order');

 Route::post('update-expenses-particular',[orderDiarycontroller::class,'updateExpensesParticular'])->name('update.expenses.particular');
 Route::post('update-expenses-amount',[orderDiarycontroller::class,'updateExpensesAmount'])->name('update.expenses.amount');

 Route::post('delete-expenses',[orderDiarycontroller::class,'deleteExpenses'])->name('delete.expenses');

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Shop_controller;
use App\Http\Controllers\categories_controller;
use App\Http\Controllers\item_controller;
use App\Http\Controllers\variance_controller;
use App\Http\Controllers\Variant_Item_controller;
use App\Http\Controllers\userchoice_controller;
use App\Http\Controllers\template;



use Illuminate\Support\Facades\Auth;


Route::redirect('/', '/home');
Route::get('/home', [Shop_controller::class, 'home']);
Route::get('/template', [Template::class, 'template']);



Auth::routes();

Route::middleware(['auth'])->group(function () {

Route::get('/crud', [Shop_controller::class, 'index'])->name('crud');


Route::resource('/crud/categories', categories_controller::class);
Route::get('/crud/categories/edit/{id}', [categories_controller::class, 'edit'])->name('crud.categories.edit');
Route::get('/crud/categories', [categories_controller::class, 'index'])->name('crud.categories');

Route::resource('/crud/item', item_controller::class);
Route::get('/crud/item/edit/{id}', [item_controller::class, 'edit'])->name('crud.item.edit');
Route::get('/crud/item', [item_controller::class, 'index'])->name('crud.item');
Route::get('/crud/item/create', [item_controller::class, 'create'])->name('crud.item.create');
Route::post('/crud/item', [item_controller::class, 'store'])->name('crud.item.store');

Route::resource('/crud/variance', variance_controller::class);
Route::get('/crud/variance/edit/{id}', [variance_controller::class, 'edit'])->name('crud.variance.edit');
Route::get('/crud/variance', [variance_controller::class, 'index'])->name('crud.variance');




Route::resource('/crud/Variant_Item', Variant_Item_controller::class);
Route::get('/crud/Variant_Item/edit/{id}', [Variant_Item_controller::class, 'edit'])->name('crud.Variant_Item.edit');
Route::get('/crud/Variant_Item', [Variant_Item_controller::class, 'index'])->name('crud.Variant_Item');


/////////////////// userchoice

Route::resource('/crud/userchoice', userchoice_controller::class);
Route::get('/crud/userchoice', [userchoice_controller::class, 'index'])->name('crud.userchoice');

Route::get('/crud/userchoice/create', [userchoice_controller::class, 'create'])->name('crud.userchoice.create');
Route::post('/crud/userchoice', [userchoice_controller::class, 'store'])->name('crud.userchoice.store');


Route::get('/crud/userchoice/edit/{id}', [userchoice_controller::class, 'edit'])->name('crud.userchoice.edit');
Route::put('/crud/userchoice/{id}', [userchoice_controller::class, 'update'])->name('crud.userchoice.update');











});
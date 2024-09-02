<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\Testercontroller;
use App\Http\Controllers\testingtypescontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// homecontroller routes //
Route::get('/',[homecontroller::class,'index']);
Route::get('about',[homecontroller::class,'about']);
Route::get('contact',[homecontroller::class,'contact']);
Route::get('products',[homecontroller::class,'product']);
Route::get('test',[homecontroller::class,'test']);
// homecontroller routes end //

// admincontroller routes //
// Route::get('/dashboard',[admincontroller::class,'index']);
// admincontroller routes end //

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [admincontroller::class,'index'])->name('dashboard');
});

// testercontroller //
Route::get('/tester',[Testercontroller::class,'index']);
// end testercontroller //

// product resourcecontroller //
Route::resource('product', productcontroller::class);
// product rescource controller end //

// addproduct controller //
Route::get('addproduct',[admincontroller::class,'addproduct']);
Route::get('update/{id}',[productcontroller::class,'update']);
Route::post('update',[productcontroller::class,'update'])->name('Update');
// addproduct controller end //

// addtesting controller//
Route::get('addtestingtypes',[admincontroller::class,'addtesting']);
Route::get('testing',[testingtypescontroller::class,'testing']);
Route::post('testing',[testingtypescontroller::class,'testingstore']);
Route::get('testingdestory',[testingtypescontroller::class,'destory'])->name('testing.destroy');

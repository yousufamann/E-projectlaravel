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
// addproduct controller end //

 //productcontroller edit or update work//
 Route::get('edit/{id}',[productcontroller::class,'edit']);
 Route::post('update_data/{id}',[productcontroller::class,'update_data']);
 //productcontroller edit or update work//

// addtesting testingcontroller//
Route::get('addtestingtypes',[admincontroller::class,'addtesting']);
Route::post('testing.store',[testingtypescontroller::class,'testingstore'])->name('testing.store');
Route::get('testing',[testingtypescontroller::class, 'index']);
// endtesting testingcontroller//

//  testingcontroller edit or update work //
Route::get('testingedit/{id}', [TestingTypesController::class, 'testingedit']);
Route::post('testingupdate/{id}',[TestingTypesController::class, 'testingupdate']);
Route::get('testingdestory/{id}',[testingtypescontroller::class,'testingdestory']);
// testingcontroller edit or update work //

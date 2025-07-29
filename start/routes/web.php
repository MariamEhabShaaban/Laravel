<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckIfNameIsMariam;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('/mariam', [TestController::class, 'mariam']);
// Route params  required
Route::get('/printName/{name}', [TestController::class, 'printName']);

// Route params  optional  &&  Named Routes  if i use name i use route in href but i i don't i use url in href
// if i change address that is not affect on name
Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('printName');
Route::get('/index',[UserController::class,'index']);

Route::get('/index', function () {
    return view('index');
});

// not best practice

// shorthand route
Route::view('/index','index');


// redirect

Route::redirect('/here', '/there');

 Route::get('/hello', SingleController::class);
                   // name posts.function_name
Route::resource('posts',PostController::class)->only(['index','create']);

Route::controller(TestController::class)->name('test.')->group(function(){

// بس هشيل اسم الcontroller
               // /test/mariam
Route::get('/mariam', 'mariam');
// Route params  required
Route::get('/printName/{name}', [TestController::class, 'printName']);

// Route params  optional  &&  Named Routes  if i use name i use route in href but i i don't i use url in href
// if i change address that is not affect on name
Route::get('/print-name/{name?}', 'printName')->name('printName');// name test.printName

});











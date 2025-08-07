<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemeController;
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

// Route::get('/', function () {
//     $data=[1,2,3];
//     return view('users.index',[
//         'data'=>$data
//     ]);
// });

// Route::get('/', function () {
//     $data=[1,2,3];
//     return view('users.index',compact('data'));
// });


// // Route::get('/mariam', [TestController::class, 'mariam']);
// // Route params  required
// // Route::get('/printName/{name}', [TestController::class, 'printName']);

// // Route params  optional  &&  Named Routes  if i use name i use route in href but i i don't i use url in href
//  // if i change address that is not affect on name
//  Route::get('/print-name/{name?}', [TestController::class, 'printName'])->name('printName');
// // Route::get('/index',[UserController::class,'index']);

// // Route::get('/index', function () {
// //     return view('index');
// // });

// // not best practice

// // shorthand route
// // Route::view('/index','index');


// // redirect

// // Route::redirect('/here', '/there');

// //  Route::get('/hello', SingleController::class);
//                    // name posts.function_name
// Route::resource('posts',PostController::class)->only(['index','create']);
// Route::get('/index',[UserController::class,'index']);
// // Route::controller(TestController::class)->name('test.')->group(function(){

// // بس هشيل اسم الcontroller
//               // /test/mariam
// // Route::get('/mariam', 'mariam');
// // Route params  required
// // Route::get('/printName/{name}', [TestController::class, 'printName']);

// // Route params  optional  &&  Named Routes  if i use name i use route in href but i i don't i use url in href
// // if i change address that is not affect on name
// // Route::get('/print-name/{name?}', 'printName')->name('printName');// name test.printName

// // });

// THEME ROUTES

Route::controller(ThemeController::class)->name('theme.')->group(function () {

    Route::get('/about', 'about')->name('about');
    // instead of
    // Route::get('/about',[ThemeController::class,'about']);

    Route::get('/contact', 'contact')->name('contact');

    Route::get('/services', 'services')->name('services');

    Route::post('/contact/store', 'store')->name('contact.store');
    Route::get('/display/contacts', 'display')->name('display');


});











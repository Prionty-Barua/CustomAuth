<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view ('index');
});
Route::get('/about',function(){
    return view ('about');
});
Route::get('/report',function(){
    return view ('report');
});
Route::get('/login',function(){
    return view ('login');
});
Route::get('/dashboard',function(){
    return view ('dashboard');
});
Auth::routes();
// Route::get('/login',[CustomAuthController::class,'login'])->name('login')->Middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration'])->name('register')->Middleware('alreadyLoggedIn');
// Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
// Route::get('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
// Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
// Route::get('/logout',[CustomAuthController::class,'logout']);
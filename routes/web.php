<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::any('admin/{any}', static function () {
    return view('admin');
})->name('admin')->where('any', '.*');

Auth::routes();

Route::group([ 'middleware' => ['BackEndAdmin']], function(){
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

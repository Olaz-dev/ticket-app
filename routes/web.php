<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PriorityController;

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
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,"authenticate"]);
Route::get('logout',[LogoutController::class,"index"]);

Route::group(['middleware'=>['auth','isAdmin']], function(){
Route::get('dashboard', [HomeController::class,'index']);
Route::resource('ticket',TicketController::class);
});

Route::group(['middleware'=>['auth','isAgent']], function(){

});
Route::group(['middleware'=>['auth']], function(){

Route::resource('ticket',TicketController::class)->only(['create','store']);
});

Route::get('/signup',[SignupController::class,'index'])->middleware('auth');
Route::post('/signup',[SignupController::class,'save']);


Route::resource('category',CategoryController::class);
Route::resource('label',LabelController::class);
Route::resource('priority', PriorityController::class);

//Route::resource('ticket',TicketController::class)->only(['create','store']);
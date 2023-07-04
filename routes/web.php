<?php
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use GuzzleHttp\Middleware;

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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' =>'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function(){
  
    Route::get('/Auth/register', 'Register\RegisterController@index')->name('register');
    
});

Route::get('/admin/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'store']);

Route::get('/logout',[LogoutController::class, 'store'])->name('logout');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index')->middleware('auth');

// route for the home page

Route::get('web/home', [HomeController::class, 'index'])->name('web.home');
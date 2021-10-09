<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
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
/*
Route::get('/', function () {
    return view('site.welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
*/

//Auth::routes();

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

Route::redirect('/', '/home', 301);
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::redirect('/login', '/admin/login', 301);

Route::group(['prefix' => 'admin'], function() {
    //Route::auth();
    Auth::routes([
      'register' => false, // Registration Routes...
      'reset' => false, // Password Reset Routes...
      'verify' => false, // Email Verification Routes...
    ]);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    /*Route::resource('posts', PostController::class);*/
});

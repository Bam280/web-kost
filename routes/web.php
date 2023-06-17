<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarWargaController;
use App\Http\Controllers\DaftarAdminController;
use App\Http\Controllers\PostManageController;
use App\Http\Controllers\PostController;



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
    return view('frontend.index');
})->name('beranda');


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' =>false,
]);

Route::middleware(['auth', 'can:user'])->group(function () {

});

Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    // User Routes
    
    Route::get('/daftarwarga', 'App\Http\Controllers\DaftarWargaController@index')->name('daftarwarga.index');
    
    Route::get('/daftarwarga/create', 'App\Http\Controllers\DaftarWargaController@create')->name('daftarwarga.create');
    
    Route::post('/daftarwarga', 'App\Http\Controllers\DaftarWargaController@store')->name('daftarwarga.store');
    
    Route::get('/daftarwarga/{id}', 'App\Http\Controllers\DaftarWargaController@destroy')->name('daftarwarga.destroy');
    
    // Admin Routes
    
    Route::get('/daftaradmin', 'App\Http\Controllers\DaftarAdminController@index')->name('manage-admin.index');
    
    // Post Routes
    
    Route::get('/managepost', 'App\Http\Controllers\PostManageController@index')->name('managepost.index');
    
    Route::get('/managepost/create', 'App\Http\Controllers\PostManageController@create')->name('managepost.create');
    
    Route::post('/managepost', 'App\Http\Controllers\PostManageController@store')->name('managepost.store');

    Route::get('/managepost/{id}/edit', 'App\Http\Controllers\PostManageController@edit')->name('managepost.edit');

    Route::put('/managepost/{id}', 'App\Http\Controllers\PostManageController@update')->name('managepost.update');
    
    Route::get('/managepost/{id}', 'App\Http\Controllers\PostManageController@destroy')->name('managepost.destroy');

    Route::get('/blog', 'App\Http\Controllers\PostController@index')->name('blog.index');
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout1');

// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login1');

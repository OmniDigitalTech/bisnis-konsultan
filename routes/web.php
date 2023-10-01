<?php

use Illuminate\Support\Facades\Route;
use \Modules\Management\Http\Controllers\ManagementController as management;
use Modules\Website\Http\Controllers\WebsiteController as website;

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

Route::prefix('/')->group(function() {
    Route::get('/', [website::class, 'index'])->name('homepage');
});

//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function(){
//    Route::get('/dashboard', management::class)->name('dashboard');
//});

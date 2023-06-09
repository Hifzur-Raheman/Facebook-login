<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\FacebookAuth;
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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [FacebookAuth::class, 'index']);

Route::get('dashboard', [Dashboard::class, 'dashboard'])->middleware(['auth']);

Route::get('auth/facebook', [FacebookAuth::class, 'redirectToFacebook'])->name('auth.facebook');
Route::get('auth/facebook/callback', [FacebookAuth::class, 'handleFacebookCallback']);

Route::post('logout', [FacebookAuth::class, 'logout'])->name('logout');
Route::get('logout', [FacebookAuth::class, 'logout'])->name('logout');
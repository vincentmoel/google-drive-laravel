<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleDriveController;
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

Route::group(['middleware' => ['guest', 'revalidate']], function () {
    Route::get('/login',[AuthController::class,'index'])->name('login');
});

Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/logout', function () { return redirect('/'); });

Route::post('/login',[AuthController::class,'authenticate']);



Route::group(['middleware' => ['auth', 'revalidate']], function () {
    
    Route::get('/', [GoogleDriveController::class,'index']);
    Route::get('/files', [GoogleDriveController::class,'index']);
    Route::post('/upload', [GoogleDriveController::class,'upload']);
    Route::get('/download/{index}/{name}', [GoogleDriveController::class,'download']);
});

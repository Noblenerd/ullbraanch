<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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
    return view('front/index');
});
Route::get('/qrcode/start', function () {
    return view('front/qrcode');
});
Route::get('/tree/start', function () {
    return view('front/createtree');
});
Route::post('/get/shorten', [UserController::class, 'create']);
Route::post('/get/qrcode', [UserController::class, 'createqrcode']);
Route::post('/get/tree', [UserController::class, 'createtree']);
Route::get('/ulllink/{id}', [UserController::class, 'viewtree']);
Route::post('/check-identifier', [UserController::class, 'check']);
Route::post('/check-identifier-tree', [UserController::class, 'checktree']);
Route::get('{id}', [UserController::class, 'show']);
Route::get('/admin/view', [UserController::class, 'view']);
Route::get('/admin/qrcodeview', [UserController::class, 'qrcodeview']);

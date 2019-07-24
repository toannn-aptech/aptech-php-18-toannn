<?php

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

Route::get('/form-nguoi-dung', 'UserController@hienThiFormNguoiDung');
Route::get('/doc-tat-ca-nguoi-dung', 'UserController@docTatCaNguoiDung');
Route::get('/doc-mot-nguoi-dung/{idNguoiDung}', 'UserController@docMotNguoiDung');
Route::get('/form-sua-nguoi-dung', 'UserController@formSuaNguoiDung');

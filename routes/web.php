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
/*
Route::get('/', function () {
    return view('welcome');
});*/
//frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');

//backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@log_out');
Route::post('/admin-dashboard','AdminController@dashboard');


//phòng ban
Route::get('/add-phongban','phongban@themphongban');
Route::get('/all-phongban','phongban@allphongban');
Route::post('/save-phongban','phongban@savephongban');
Route::get('/edit-phongban/{id}','phongban@editphongban');
Route::get('/delete-phongban/{id}','phongban@deletephongban');
Route::post('/update-phongban/{id}','phongban@updatephongban');

//nhân sự
Route::get('/add-nhansu','nhansu@themnhansu');
Route::get('/all-nhansu','nhansu@allnhansu');
Route::post('/save-nhansu','nhansu@savenhansu');
Route::get('/edit-nhansu/{id}','nhansu@editnhansu');
Route::get('/delete-nhansu/{id}','nhansu@deletenhansu');
Route::post('/update-nhansu/{id}','nhansu@updatenhansu');
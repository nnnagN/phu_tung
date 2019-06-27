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


Route::get('/',function(){
    return view('layout.trangchu');
});
Route::prefix('/')->group(function () {

    Route::get('lienhe',function(){
        return view('layout.lienhe');
    });
    Route::get('sanpham',function(){
        return view('layout.sanpham');
    });
    Route::get('lopMICHELIN',function(){
        return view('layout.lopMICHELIN');
    });
    Route::get('phuocYSS',function(){
        return view('layout.phuocYSS');
    });
    Route::get('labonoi',function(){
        return view('layout.labonoi');
    });
    Route::get('lopASPIRA',function(){
        return view('layout.lopASPIRA');
    });
});
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/contact', function () {
    //$users = DB::select('select * from users where active = ?', [1]);

    return view('contact');
    //return view('contact');
});
Route::get('/support','SupportController@supp');
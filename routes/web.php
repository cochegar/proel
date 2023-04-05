<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/contacts', function () {
    //$users = DB::select('select * from users where active = ?', [1]);

    return view('contacts');
    //return view('contact');
});

Route::get('/supports','App\Http\Controllers\SupportController@supp')->name('supports');
/*use App\Http\Controllers\SupportController;
Route::get('/supports', [ SupportController::class, 'supp' ]);*/
/**/
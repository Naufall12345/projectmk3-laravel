<?php

use Illuminate\Support\Facades\Route;
//habis get itu ada / itu diurutin buat kaya web profesional

Route::get('/', function () {
    return view('login'); 
});

Route::get('/landingpage', function () {
    return view('index'); 
});

Route::get('/welcome', function () {
    return view('welcome'); //menuju ke file wlelcome.blade.php di folder resources-views
});


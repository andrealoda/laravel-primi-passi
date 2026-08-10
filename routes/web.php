<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/second-page', function () {
    return view('second-page');
});

Route::get('/third-page', function () {
    return view('third-page');
});

Route::get('/fourth-page', function () {
    return view('fourth-page');
});

Route::get('/fifth-page', function () {
    return view('fifth-page');
});

?>
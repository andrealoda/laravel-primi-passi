<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/second-page', function () {
    return view('second-page');
});

?>
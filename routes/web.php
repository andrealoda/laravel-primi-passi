<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

$informazioni = "Questa è la prima pagina del sito, benvenuto!";

    return view('home', compact('informazioni'));
});

Route::get('/second-page', function () {

$informazioni = "Questa è la seconda pagina del sito, benvenuto!";
    return view('second-page', compact('informazioni'));
});

Route::get('/third-page', function () {
    $informazioni = "Questa è la terza pagina del sito, benvenuto!";
    return view('third-page', compact('informazioni'));
});

Route::get('/fourth-page', function () {
    $informazioni = "Questa è la quarta pagina del sito, benvenuto!";
    return view('fourth-page', compact('informazioni'));
});

Route::get('/fifth-page', function () {
    $informazioni = "Questa è la quinta pagina del sito, benvenuto!";
    return view('fifth-page', compact('informazioni'));
});

?>
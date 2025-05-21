<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', function () {
    return view('livroindex');
});

Route::get('/livros/lista', function () {
    return view('livrolistar');
});

Route::get('/livros/adicionar', function () {
    return view('livroadicionar');
});

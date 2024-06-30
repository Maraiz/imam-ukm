<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.main');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/detail', function () {
    return view('berita.detail');
});

Route::get('/fotokegiatan', function () {
    return view('foto.foto');
});

Route::get('/login', function () {
    return view('auth.login');
});
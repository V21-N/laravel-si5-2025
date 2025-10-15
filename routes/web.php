<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('index');
;
});

Route::get('/about', function () {
     return view('about');
;
});

Route::get('/profile', function () {
     return view('mahasiswa');
;
});

Route::get('/profile', function () {
    $nama = "Alvin";
    // return view('profile',compact('nama'));
    return view('profile')->with('nama', $nama)
;
});
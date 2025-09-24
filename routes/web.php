<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "<h1>Saya Alvin</h1>
    <a href='/about'>About</a><br>
    <a href='/profil'>Profilr</a><br>"
;
});

Route::get('/about', function () {
    // return view('welcome');
    return "<h1>Tentang Saya</h1>
    <a href='/'>Home</a><br>
    <a href='/profile'>Profile</a><br>"
;

});Route::get('/profile', function () {
    // return view('welcome');
    return "<h1>Profile Saya</h1>
    <a href='/about'>About</a><br>
    <a href='/'>Home</a><br>"
;
});
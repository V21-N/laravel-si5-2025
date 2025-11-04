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

Route::get('/produk', function () {
    $page_title = 'Produk';

    $products = [
        [
            "kode_produk" => "Prdk01",
            "nama_produk" => "Montitor",
            "jenis_produk" => "Barang Elektronik",
            "harga_produk" => 2000000
        ],
        [
            "kode_produk" => "Prdk02",
            "nama_produk" => "Harddisk",
            "jenis_produk" => "Alat Tulis",
            "harga_produk" => 150000
        ]
    ];

    return view('produk', compact('page_title', 'products'));
});

Route::get('/tambah', function () {
     return view('tambah');
;
});
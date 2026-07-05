<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ruang_rujuk.index');
});

Route::get('/edukasi-talak', function () {
    return view('ruang_rujuk.edukasi-talak');
});

Route::get('/panduan-iddah', function () {
    return view('ruang_rujuk.panduan-iddah');
});

Route::get('/alur-kua', function () {
    return view('ruang_rujuk.alur-kua');
});

Route::get('/cek-prosedur', function () {
    return view('ruang_rujuk.cek-prosedur');
});

Route::get('/tentang', function () {
    return view('ruang_rujuk.tentang');
});

Route::get('/hak-asuh-anak', function () {
    return view('ruang_rujuk.hak-asuh-anak');
});

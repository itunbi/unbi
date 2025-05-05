<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/kegiatanHI', function () {
    return view('navhi.kegiatanHI');
});

Route::get('/beritaHI', function () {
    return view('navhi.beritaHI');
});

Route::get('/LP3M', function () {
    return view('LP3M');
});

Route::get('/LP2M', function () {
    return view('LP2M');
});

/* Konten */
Route::get('/BeritaLP2M', function () {
    return view('LP2M.BeritaLP2M');
});

Route::get('/pengumuman', function () {
    return view('LP2M.Pengumuman');
});

Route::get('/Berita', function () {
    return view('LP3M.Berita');
});

Route::get('/GBK', function () {
    return view('LP3M.GBK');
});

Route::get('/SPMI', function () {
    return view('LP3M.SPMI');
});

Route::get('/Pengumuman', function () {
    return view('LP3M.Pengumuman');
});

Route::get('/TentangKami', function () {
    return view('TK');
});


Route::get('/KehidupanKampus', function () {
    return view('KK');
});


/* FIIK */

Route::get('/TEM', function () {
    return view('FIIK.TEM');
});

Route::get('/ARS', function () {
    return view('FIIK.ARS');
});

Route::get('/D4TLM', function () {
    return view('FIIK.D4TLM');
});

Route::get('/Farmasi', function () {
    return view('FIIK.Farmasi');
});

Route::get('/Fisioterapi', function () {
    return view('FIIK.Fisioterapi');
});

Route::get('/K3', function () {
    return view('FIIK.K3');
});

Route::get('/Mikes', function () {
    return view('FIIK.Mikes');
});

Route::get('/TLM', function () {
    return view('FIIK.TLM');
});


/* FBSTH */

Route::get('/BIDI', function () {
    return view('FBSTH.BIDI');
});

Route::get('/HI', function () {
    return view('FBSTH.HI');
});

Route::get('/Hukum', function () {
    return view('FBSTH.Hukum');
});

Route::get('/Informatika', function () {
    return view('FBSTH.Informatika');
});

Route::get('/Negara', function () {
    return view('FBSTH.Negara');
});

Route::get('/Niaga', function () {
    return view('FBSTH.Niaga');
});

Route::get('/Psikologi', function () {
    return view('FBSTH.Psikologi');
});



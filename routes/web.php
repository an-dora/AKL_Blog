<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('mainpage.main');
})->name('main');

Route::get('/info-huyetthan', function () {
    return view('common.info-huyetthan');
})->name('ifht');

Route::get('/doc-huyetthan', function () {
    return view('common.doc-huyetthan');
})->name('docht');

Route::get('/info-dau-la-dai-luc', function () {
    return view('common.info-dldl');
})->name('ifdl');

Route::get('/doc-dau-la-dai-luc', function () {
    return view('common.doc-dldl');
})->name('docdl');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
?>
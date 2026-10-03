<?php

use App\Http\Controllers\PublikasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('publikasi.index');
});

Route::resource('publikasi', PublikasiController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy',
]);

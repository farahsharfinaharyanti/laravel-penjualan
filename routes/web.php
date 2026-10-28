<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;

Route::get('/', function () {
    return redirect()->route('penjualan.index');
});

Route::resource('penjualan', PenjualanController::class);

<?php

use App\Http\Controllers\DataLogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RfidlogsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/rfid-logs', [RfidlogsController::class, 'index'])->name('rfidlogs.index');

Route::post('/generate-rfid', [RfidlogsController::class, 'uidgenerate']);

Route::delete('/delete-rfid/{id}', [RfidlogsController::class, 'delete'])->name('rfidlogs.delete');

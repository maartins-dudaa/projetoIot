<?php

use App\Http\Controllers\DispositivoControler;
use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registro/create', [RegistroController::class, "store"]);

Route::get('/sensor/{codigo}/find', [DispositivoControler::class, "show"]);

Route::get('/sensor/update', [DispositivoControler::class, "update"]);
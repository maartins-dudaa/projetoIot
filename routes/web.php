<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;


Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/{id}/edit', SensorEdit::class)->name('sensor.edit');
Route::get('/sensores', SensorIndex::class)->name('sensor.index');

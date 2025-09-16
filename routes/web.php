<?php

use App\Livewire\Dashboard;
use App\Livewire\Registro\RegistroIndex;
use Illuminate\Support\Facades\Route;

Route::get('/registros', RegistroIndex::class)->name('registros.index');


<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Models\Ambiente;
use Illuminate\Support\Facades\Route;

Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambientes', AmbienteIndex::class)->name('ambiente.list');
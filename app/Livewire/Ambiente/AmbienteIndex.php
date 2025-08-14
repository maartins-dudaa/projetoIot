<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function render()
    {
        return view('livewire.ambiente.ambiente-index');

        $ambientes = Ambiente::all();

        return view('livewire.ambiente.index', compact('ambientes'));
    }
}

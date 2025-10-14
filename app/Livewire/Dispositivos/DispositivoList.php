<?php

namespace App\Livewire\Dispositivos;

use App\Models\Sensor;
use Livewire\Component;

class DispositivoList extends Component
{
    public $sensors;

    public function mount()
    {
        $this->sensors = Sensor::all();
    }

    // Método chamado pelo front-end para alternar o status do sensor
    // Agora recebe o 'codigo' do sensor como parâmetro
    public function toggleStatus($codigo)
    {

        $sensor = Sensor::where('codigo', $codigo)->first();
        if ($sensor) { 
            $sensor->status = !$sensor->status;
            $sensor->save();
            $this->sensors = Sensor::all();
        }
    }
    

    public function render()
    {

     $sensors = Sensor::all('codigo', 'tipo', 'status');

        return view('livewire.dispositivos.dispositivo-list', compact('sensors'));
    }

    
}

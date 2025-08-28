<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function store(){
        Sensor::create([
            'codigo'=>$this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'ambiente_id' => $this->ambiente_id
        ]);

          return redirect()->route('sensor.index');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambientes'));
    }
}
